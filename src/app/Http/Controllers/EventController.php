<?php

namespace App\Http\Controllers;

use App\Services\EventServiceInterface;
use Illuminate\Http\Request;

class EventController extends Controller
{
    protected $eventService;

    public function __construct(EventServiceInterface $eventService)
    {
        $this->eventService = $eventService;
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'answer' => 'required|string',
            'dateOfEvent' => 'required|date',
        ]);

        $this->eventService->create($request->all());

        return response()->json(['message' => 'Event created successfully'], 201);
    }

    public function index()
    {
        $events = $this->eventService->getAll();
        return response()->json($events);
    }

    public function showPage()
    {
        $events = $this->eventService->getAll();
        return view('events.index', ['events' => $events]);
    }
}

