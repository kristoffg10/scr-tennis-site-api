<?php

namespace App\Services\User;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\{
    Hash,
    Validator,
    Auth,
};
use Illuminate\Support\Str;
use App\Models\{
    Role,
    User
};
use App\Traits\GlobalTrait;
use App\Jobs\SendUserPasswordJob;


class CmsUserService
{
    use GlobalTrait;

    /**
     * Default rows per page for CMS listings.
     *
     * @var int
     */
    private $queryRows = 10;

    /**
     * List CMS users (editors) with pagination, search and sorting.
     */
    public function index(object $request): Response
    {
        $page           = $request->has('page') ? (int) $request->page : 1;
        $sortBy         = $request->has('sortBy') ? $request->sortBy : 'updated_at';
        $sortDirection  = $request->has('sortDirection') && $request->sortDirection === 'asc' ? 'asc' : 'desc';
        $keyword        = $request->has('keyword') ? trim($request->keyword) : null;
        $perPage        = $request->has('per_page') ? min((int) $request->per_page, 500) : $this->queryRows;

        $query = User::query()
            ->with(['role', 'userDetail'])
            ->orderBy($sortBy, $sortDirection);

        if (!empty($keyword)) {
            $query->where(function ($q) use ($keyword) {
                $q->where('email', 'LIKE', '%' . $keyword . '%')
                    ->orWhereHas('userDetail', function ($sub) use ($keyword) {
                        $sub->where('full_name', 'LIKE', '%' . $keyword . '%');
                    });
            });
        }

        $records = $query->paginate($perPage, ['*'], 'page', $page);

        return response([
            'records' => $records,
        ]);
    }

    /**
     * Store a new CMS user.
     */
    public function store(object $request): Response
    {
        $validator = Validator::make($request->all(), [
            'first_name'        => ['required', 'max:50'],
            'last_name'         => ['required', 'max:50'],
            'email'             => ['required', 'email', 'unique:users,email'],
            'role_id'           => ['required', 'exists:roles,id'],
            'password'          => ['required', 'min:6'],
            'confirm_password'  => ['required', 'same:password'],
        ]);

        if ($validator->fails()) {
            return response([
                'errors' => $validator->errors()->all(),
            ], 400);
        }

        $role = Role::findOrFail($request->role_id);

        $user = new User();
        $user->email   = $request->email;
        $user->role_id = $role->id;
        $user->enabled = (int) ($request->get('enabled', 1));
        $user->password = Hash::make($request->password);
        $user->save();

        $user->userDetail()->create([
            'member_id'  => (string) Str::uuid(),
            'full_name'  => trim($request->first_name . ' ' . $request->last_name),
            'first_name' => $request->first_name,
            'last_name'  => $request->last_name,
        ]);

         if ($request->has('profile_image')) {
            $this->addImages('user', $request, $user, 'profile_image');
        }

        $this->sendNewUser( (object) [
            'first_name'       => $request->first_name,
            'last_name'        => $request->last_name,
            'email'            => $request->email,
            'message'          => 'Your temporary password is ' . $request->password,
            'subject'          => 'Your Account Login Information'
        ]);

        $user->load(['role', 'userDetail', 'images']);

        return response([
            'record' => $user,
        ], 201);


    }

    /**
     * Show a single CMS user.
     */
    public function show(User $user): Response
    {
        $user->load(['role', 'userDetail', 'images']);

        return response([
            'record' => $user,
        ]);
    }

    /**
     * Update a CMS user (profile, role, password if requested).
     */
    public function update(User $user, object $request): Response
    {
        $rules = [
            'first_name' => ['sometimes', 'required', 'max:50'],
            'last_name'  => ['sometimes', 'required', 'max:50'],
            'email'      => ['sometimes', 'required', 'email', 'unique:users,email,' . $user->id],
            'role_id'    => ['sometimes', 'required', 'exists:roles,id'],
            'enabled'    => ['sometimes', 'in:0,1'],
        ];

        // Optional password update from CMS
        if ($request->has('update_password')) {
            $rules['password']          = ['required', 'min:6'];
            $rules['password_confirmation'] = ['required', 'same:password'];
        }

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response([
                'errors' => $validator->errors()->all(),
            ], 400);
        }

        if ($request->has('email')) {
            $user->email = $request->email;
        }

        if ($request->has('role_id')) {
            $user->role_id = $request->role_id;
        }

        if ($request->has('enabled')) {
            $user->enabled = (int) $request->enabled;
        }

        if ($request->has('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        if ($request->has('first_name') || $request->has('last_name')) {
            $firstName = $request->get('first_name', '');
            $lastName  = $request->get('last_name', '');
            $fullName  = trim($firstName . ' ' . $lastName) ?: '—';
            $detail    = $user->userDetail()->firstOrCreate([], [
                'member_id'  => (string) Str::uuid(),
                'first_name' => $firstName ?: '—',
                'last_name'  => $lastName ?: '—',
                'full_name'  => $fullName,
            ]);
            if ($request->has('first_name')) {
                $detail->first_name = $request->first_name ?: '—';
            }
            if ($request->has('last_name')) {
                $detail->last_name = $request->last_name ?: '—';
            }
            $detail->full_name = trim(($detail->first_name ?? '') . ' ' . ($detail->last_name ?? '')) ?: '—';
            $detail->save();
        }

        // Profile image: replace existing profile_image with newly uploaded one(s)
        if ($request->has('profile_image') && is_array($request->profile_image) && count($request->profile_image) > 0) {
            $user->images()->where('category', 'profile_image')->delete();
            $this->addImages('user', $request, $user, 'profile_image');
        }

        $user->load(['role', 'userDetail', 'images']);

        return response([
            'record' => $user,
        ]);
    }

    /**
     * Permanently delete a CMS user and their profile images.
     */
    public function destroy(User $user): Response
    {
        $user->images()->each(fn ($image) => $image->forceDelete());
        $user->forceDelete();

        return response()->noContent();
    }

    public function sendNewUser($userData)
    {

        $data = [
            'first_name' => $userData->first_name,
            'last_name' => $userData->last_name,
            'email' => $userData->email,
            'subject' => $userData->subject,
            'message' => $userData->message
        ];
        dispatch(new SendUserPasswordJob($data));

        return $data;
    }
}

