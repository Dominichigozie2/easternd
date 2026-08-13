@extends('layouts.admin')

@section('title', 'Add Event - EDFI Admin')

@section('content')
<div class="page-header">
    <h1>Add Event</h1>
    <a href="{{ route('admin.events.index') }}" class="btn-primary" style="background: #334155; color: #fff;"><i class="fa-solid fa-arrow-left"></i> Back to List</a>
</div>

<div class="card">
    <form action="{{ route('admin.events.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="form-group">
            <label for="title">Event Title *</label>
            <input type="text" id="title" name="title" class="form-control" placeholder="e.g. Wakeup Raves" required value="{{ old('title') }}">
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
            <div class="form-group">
                <label for="date">Event Date *</label>
                <input type="date" id="date" name="date" class="form-control" required value="{{ old('date', date('Y-m-d')) }}">
            </div>

            <div class="form-group">
                <label for="link">External Article Link (Optional)</label>
                <input type="url" id="link" name="link" class="form-control" placeholder="https://..." value="{{ old('link') }}">
            </div>
        </div>

        <div class="form-group">
            <label for="image">Event Image</label>
            <input type="file" id="image" name="image" class="form-control">
        </div>

        <div class="form-group">
            <label for="writeup">Event Details / Writeup *</label>
            <textarea id="writeup" name="writeup" class="form-control" rows="6" required>{{ old('writeup') }}</textarea>
        </div>

        <button type="submit" class="btn-primary"><i class="fa-solid fa-floppy-disk"></i> Save Event</button>
    </form>
</div>
@endsection
