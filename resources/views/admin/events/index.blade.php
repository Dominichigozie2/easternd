@extends('layouts.admin')

@section('title', 'Manage News & Events - EDFI Admin')

@section('content')
<div class="page-header">
    <h1>News & Events</h1>
    <a href="{{ route('admin.events.create') }}" class="btn-primary"><i class="fa-solid fa-plus"></i> Add Event</a>
</div>

<div class="card">
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Event Date</th>
                    <th>Summary</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($events as $index => $event)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>
                            @if($event->image)
                                <img src="{{ asset('uploads/' . $event->image) }}" alt="{{ $event->title }}" style="height: 45px; width: 45px; object-fit: cover; border-radius: 4px;">
                            @else
                                <span style="color: #64748b;">No img</span>
                            @endif
                        </td>
                        <td style="font-weight: 600; color: #fff;">{{ $event->title }}</td>
                        <td style="color: #d9aa52;">{{ $event->date ? $event->date->format('Y-m-d') : '-' }}</td>
                        <td style="color: #94a3b8;">{{ Str::limit($event->writeup, 70) }}</td>
                        <td style="white-space: nowrap;">
                            <a href="{{ route('admin.events.edit', $event->id) }}" class="btn-edit"><i class="fa-solid fa-pen"></i> Edit</a>
                            <form action="{{ route('admin.events.destroy', $event->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Are you sure you want to delete this event?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-danger"><i class="fa-solid fa-trash"></i> Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" style="text-align: center; color: #64748b; padding: 30px;">No events found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
