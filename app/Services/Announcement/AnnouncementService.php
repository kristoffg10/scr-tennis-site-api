<?php

namespace App\Services\Announcement;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\Announcement;
use App\Traits\GlobalTrait;

class AnnouncementService
{
    use GlobalTrait;

    /**
     * AnnouncementService index
     * @param  \Illuminate\Http\Request $request
     * @return Response
     */
    public function index($request): Response
    {
        $records = Announcement::orderBy('date', 'desc')
            ->when($request->filled('keyword'), function ($query) use ($request) {
                $query->where('title', 'LIKE', '%' . $request->keyword . '%');
            })
            ->when(in_array($request->query('enabled'), ['0', '1'], true), function ($query) use ($request) {
                $query->where('enabled', (int) $request->query('enabled'));
            })
            ->when($request->filled('all'), function ($query) {
                return $query->get();
            }, function ($query) {
                return $query->paginate(20);
            });

        return response([
            'records' => $records
        ]);
    }

    /**
     * AnnouncementService store
     * @param  \Illuminate\Http\Request $request
     * @return Response
     */
    public function store($request): Response
    {
        $record = Announcement::create([
            'title'   => $request->title,
            'content' => $request->content,
            'date'    => $request->date,
            'slug'    => $this->slugify($request->title, 'Announcement'),
            'enabled' => $request->enabled ?? 1,
        ]);

        $this->generateLog(Auth::guard('api')->user(), "Created", "Announcement", $record);

        return response([
            'record' => $record
        ]);
    }

    /**
     * AnnouncementService show
     * @param  Announcement $announcement
     * @param  \Illuminate\Http\Request $request
     * @return Response
     */
    public function show($announcement, $request): Response
    {
        return response([
            'record' => $announcement
        ]);
    }

    /**
     * AnnouncementService update
     * @param  Announcement $announcement
     * @param  \Illuminate\Http\Request $request
     * @return Response
     */
    public function update($announcement, $request): Response
    {
        $data = [
            'title'   => $request->title,
            'content' => $request->content,
            'date'    => $request->date,
            'enabled' => $request->enabled ?? 1,
        ];

        if ($announcement->title !== $request->title) {
            $data['slug'] = $this->slugify($request->title, 'Announcement', $announcement->id);
        }

        $announcement->update($data);

        $this->generateLog(Auth::guard('api')->user(), "Changed", "Announcement", $announcement);

        return response([
            'record' => $announcement
        ]);
    }

    /**
     * AnnouncementService destroy
     * @param  Announcement $announcement
     * @param  \Illuminate\Http\Request $request
     * @return Response
     */
    public function destroy($announcement, $request): Response
    {
        $announcement->delete();
        $this->generateLog(Auth::guard('api')->user(), "Deleted", "Announcement", $announcement);

        return response([
            'record' => 'Announcement deleted'
        ]);
    }
}
