<?php

namespace App\Services\User;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Models\Role;
use App\Traits\GlobalTrait;

class RoleService
{
    use GlobalTrait;

    /**
     * Default rows per page for CMS listings.
     *
     * @var int
     */
    private $queryRows = 10;

    /**
     * Role IDs that are protected (cannot be deleted).
     *
     * @var array<string>
     */
    private $protectedRoleIds = [
        'fa5e772f-5715-4dea-9922-351e8e27bdab',
        'f269b653-5ef6-4fed-aa4b-1e1c81bdbc99',
    ];

    /**
     * List roles with pagination, search, and sorting.
     */
    public function index(object $request): Response
    {
        $page           = $request->has('page') ? (int) $request->page : 1;
        $sortBy         = $request->has('sortBy') ? $request->sortBy : 'updated_at';
        $sortDirection  = $request->has('sortDirection') && $request->sortDirection === 'asc' ? 'asc' : 'desc';
        $keyword        = $request->has('keyword') ? trim($request->keyword) : null;

        $query = Role::query()
            ->withCount('users')
            ->orderBy($sortBy, $sortDirection);

        if (!empty($keyword)) {
            $query->where('name', 'LIKE', '%' . $keyword . '%');
        }

        // If ?all=1 or ?all=true is provided, return all (for dropdowns)
        $wantAll = $request->has('all') && (
            $request->all === 1
            || $request->all === '1'
            || $request->all === true
            || strtolower((string) $request->all) === 'true'
        );
        if ($wantAll) {
            $records = $query->get();

            return response([
                'records' => $records,
            ]);
        }

        $records = $query->paginate($this->queryRows, ['*'], 'page', $page);

        return response([
            'records' => $records,
        ]);
    }

    /**
     * Store a new role.
     */
    public function store(object $request): Response
    {
        $validator = Validator::make($request->all(), [
            'name'        => ['required', 'max:50'],
            'permissions' => ['required'],
        ]);

        if ($validator->fails()) {
            return response([
                'errors' => $validator->errors()->all(),
            ], 400);
        }

        $identifier = $this->uniqueRoleIdentifier(Str::slug($request->name));

        $role = new Role();
        $role->name        = $request->name;
        $role->identifier  = $identifier;
        $role->permissions = $request->permissions; // already JSON from CMS
        $role->save();

        return response([
            'record' => $role,
        ], 201);
    }

    /**
     * Show role.
     */
    public function show(Role $role): Response
    {
        return response([
            'record' => $role,
        ]);
    }

    /**
     * Update role.
     */
    public function update(Role $role, object $request): Response
    {
        $validator = Validator::make($request->all(), [
            'name'        => ['sometimes', 'required', 'max:50'],
            'permissions' => ['sometimes', 'required'],
        ]);

        if ($validator->fails()) {
            return response([
                'errors' => $validator->errors()->all(),
            ], 400);
        }

        if ($request->has('name')) {
            $role->name = $request->name;
        }
        if ($request->has('permissions')) {
            $role->permissions = $request->permissions;
        }

        $role->save();

        return response([
            'record' => $role,
        ]);
    }

    /**
     * Generate a unique identifier for a role (slug, with suffix if needed).
     */
    private function uniqueRoleIdentifier(string $base): string
    {
        $identifier = $base ?: 'role';
        $original   = $identifier;
        $counter    = 1;

        while (Role::where('identifier', $identifier)->exists()) {
            $identifier = $original . '-' . $counter;
            $counter++;
        }

        return $identifier;
    }

    /**
     * Delete role. Cannot delete if at least one user is assigned.
     */
    public function destroy(Role $role): Response
    {
        // Block deletion of protected roles regardless of assignments
        if (in_array($role->id, $this->protectedRoleIds, true)) {
            return response([
                'message' => 'Cannot delete protected role.',
            ], 422);
        }

        $usersCount = $role->users()->count();
        if ($usersCount > 0) {
            return response([
                'message' => 'Cannot delete role: at least one user is assigned to this role.',
            ], 422);
        }

        $role->delete();

        return response()->noContent();
    }
}

