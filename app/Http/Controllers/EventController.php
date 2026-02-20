<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Event;
use App\Services\Event\EventService;
use App\Http\Requests\EventRequest;

class EventController extends Controller
{
    protected $eventService;

    public function __construct(EventService $eventService)
    {
        $this->eventService = $eventService;
    }

    public function index(Request $request): Response
    {
        return $this->eventService->index($request);
    }

    public function store(EventRequest $request): Response
    {
        return $this->eventService->store($request);
    }

    public function show(Event $event, Request $request): Response
    {
        return $this->eventService->show($event, $request);
    }

    public function update(Event $event, EventRequest $request): Response
    {
        return $this->eventService->update($event, $request);
    }

    public function destroy(Event $event, Request $request): Response
    {
        return $this->eventService->destroy($event, $request);
    }
}
