<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Announcement;
use App\Services\Announcement\AnnouncementService;
use App\Http\Requests\AnnouncementRequest;

class AnnouncementController extends Controller
{
    /**
     * @var AnnouncementService
     */
    protected $announcementService;

    public function __construct(AnnouncementService $announcementService)
    {
        $this->announcementService = $announcementService;
    }

    public function index(Request $request): Response
    {
        return $this->announcementService->index($request);
    }

    public function store(AnnouncementRequest $request): Response
    {
        return $this->announcementService->store($request);
    }

    public function show(Announcement $announcement, Request $request): Response
    {
        return $this->announcementService->show($announcement, $request);
    }

    public function update(Announcement $announcement, AnnouncementRequest $request): Response
    {
        return $this->announcementService->update($announcement, $request);
    }

    public function destroy(Announcement $announcement, Request $request): Response
    {
        return $this->announcementService->destroy($announcement, $request);
    }
}
