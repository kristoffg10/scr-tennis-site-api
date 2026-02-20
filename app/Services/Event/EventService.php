<?php

namespace App\Services\Event;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\Event;
use App\Traits\GlobalTrait;

class EventService
{
    use GlobalTrait;

    public function index($request): Response
    {
        $records = Event::orderBy('date', 'desc')
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

    public function store($request): Response
    {
        $record = Event::create([
            'title'           => $request->title,
            'content'         => $request->content ?? null,
            'date'            => $request->date,
            'location'        => $request->location ?? null,
            'event_type'      => $request->event_type ?? null,
            'slug'            => $this->slugify($request->title, 'Event'),
            'enabled'         => $request->enabled ?? 1,
            'match_type'      => $request->match_type ?? null,
            'format'          => $request->format ?? null,
            'scoring_format'  => $request->scoring_format ?? null,
            'assigned_coach'  => $request->assigned_coach ?? null,
            'event_status'    => $request->event_status ?? null,
        ]);

        $galleryFiles = $request->file('event_gallery');
        if ($galleryFiles) {
            $files = is_array($galleryFiles) ? $galleryFiles : [$galleryFiles];
            $request->merge(['event_gallery' => $files]);
            $this->addImages('event', $request, $record, 'event_gallery');
        }

        $this->generateLog(Auth::guard('api')->user(), "Created", "Event", $record);

        return response([
            'record' => $record->load('images')
        ]);
    }

    public function show($event, $request): Response
    {
        $event->load('images');

        return response([
            'record' => $event
        ]);
    }

    public function update($event, $request): Response
    {
        $data = [
            'title'           => $request->title,
            'content'         => $request->content ?? null,
            'date'            => $request->date,
            'location'        => $request->location ?? null,
            'event_type'      => $request->event_type ?? null,
            'enabled'         => $request->enabled ?? 1,
            'match_type'      => $request->match_type ?? null,
            'format'          => $request->format ?? null,
            'scoring_format'  => $request->scoring_format ?? null,
            'assigned_coach'  => $request->assigned_coach ?? null,
            'event_status'    => $request->event_status ?? null,
        ];

        if ($event->title !== $request->title) {
            $data['slug'] = $this->slugify($request->title, 'Event', $event->id);
        }

        $event->update($data);

        $galleryFiles = $request->file('event_gallery');
        if ($galleryFiles || $request->filled('event_gallery_id')) {
            if ($galleryFiles) {
                $files = is_array($galleryFiles) ? $galleryFiles : [$galleryFiles];
                $request->merge(['event_gallery' => $files]);
            }
            $this->updateImages('event', $request, $event, 'event_gallery');
        }

        $this->generateLog(Auth::guard('api')->user(), "Changed", "Event", $event);

        return response([
            'record' => $event->load('images')
        ]);
    }

    public function destroy($event, $request): Response
    {
        $event->delete();
        $this->generateLog(Auth::guard('api')->user(), "Deleted", "Event", $event);

        return response([
            'record' => 'Event deleted'
        ]);
    }
}
