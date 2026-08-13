@extends('layouts.admin')

@section('title', 'Edit Event - EDFI Admin')

@section('content')
<div class="page-header">
    <h1>Edit Event</h1>
    <a href="{{ route('admin.events.index') }}" class="btn-primary" style="background: #334155; color: #fff;"><i class="fa-solid fa-arrow-left"></i> Back to List</a>
</div>

<div class="card">
    <form action="{{ route('admin.events.update', $event->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="title">Event Title *</label>
            <input type="text" id="title" name="title" class="form-control" required value="{{ old('title', $event->title) }}">
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
            <div class="form-group">
                <label for="date">Event Date *</label>
                <input type="date" id="date" name="date" class="form-control" required value="{{ old('date', $event->date ? $event->date->format('Y-m-d') : '') }}">
            </div>

            <div class="form-group">
                <label for="link">External Article Link (Optional)</label>
                <input type="url" id="link" name="link" class="form-control" value="{{ old('link', $event->link) }}">
            </div>
        </div>

        <div class="form-group">
            <label for="image">Event Image</label>
            @if($event->image)
                <div style="margin-bottom: 10px;">
                    <img src="{{ asset('uploads/' . $event->image) }}" style="height: 70px; object-fit: cover; border-radius: 4px;">
                </div>
            @endif
            <input type="file" id="image" name="image" class="form-control">
        </div>

        <div class="form-group">
            <label for="writeup">Event Details / Writeup *</label>
            <textarea id="writeup" name="writeup" class="form-control" rows="6" required>{{ old('writeup', $event->writeup) }}</textarea>
        </div>

        <button type="submit" class="btn-primary"><i class="fa-solid fa-floppy-disk"></i> Update Event</button>
    </form>
</div>
@endsection
