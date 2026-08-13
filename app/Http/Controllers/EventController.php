<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::orderBy('date', 'desc')->get();
        return view('events.index', compact('events'));
    }

    public function show($id)
    {
        $event = Event::findOrFail($id);
        $otherEvents = Event::where('id', '!=', $id)->orderBy('date', 'desc')->get();
        return view('events.show', compact('event', 'otherEvents'));
    }
}
