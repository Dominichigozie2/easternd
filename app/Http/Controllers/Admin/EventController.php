<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::latest()->get();
        return view('admin.events.index', compact('events'));
    }

    public function create()
    {
        return view('admin.events.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'writeup' => 'required|string',
            'link' => 'nullable|string|max:255',
            'date' => 'required|date',
            'image' => 'nullable|image|max:10240',
        ]);

        $data = $request->only(['title', 'writeup', 'link', 'date']);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads'), $imageName);
            $data['image'] = $imageName;
        }

        Event::create($data);

        return redirect()->route('admin.events.index')->with('success', 'Event created successfully!');
    }

    public function edit($id)
    {
        $event = Event::findOrFail($id);
        return view('admin.events.edit', compact('event'));
    }

    public function update(Request $request, $id)
    {
        $event = Event::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'writeup' => 'required|string',
            'link' => 'nullable|string|max:255',
            'date' => 'required|date',
            'image' => 'nullable|image|max:10240',
        ]);

        $data = $request->only(['title', 'writeup', 'link', 'date']);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads'), $imageName);
            $data['image'] = $imageName;
        }

        $event->update($data);

        return redirect()->route('admin.events.index')->with('success', 'Event updated successfully!');
    }

    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();

        return redirect()->route('admin.events.index')->with('success', 'Event deleted successfully!');
    }
}
