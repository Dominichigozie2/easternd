@extends('layouts.admin')

@section('title', 'Add Premium Brand - EDFI Admin')

@section('content')
<div class="page-header">
    <h1>Add Premium Brand</h1>
    <a href="{{ route('admin.premium-brands.index') }}" class="btn-primary" style="background: #334155; color: #fff;"><i class="fa-solid fa-arrow-left"></i> Back to List</a>
</div>

<div class="card">
    <form action="{{ route('admin.premium-brands.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="form-group">
            <label for="name">Brand Name *</label>
            <input type="text" id="name" name="name" class="form-control" placeholder="e.g. Palmy Cola" required value="{{ old('name') }}">
        </div>

        <div class="form-group">
            <label for="image">Brand Display Image</label>
            <input type="file" id="image" name="image" class="form-control">
        </div>

        <div class="form-group">
            <label for="description">Brand Description *</label>
            <textarea id="description" name="description" class="form-control" rows="6" placeholder="Enter detailed brand description" required>{{ old('description') }}</textarea>
        </div>

        <button type="submit" class="btn-primary"><i class="fa-solid fa-floppy-disk"></i> Save Brand</button>
    </form>
</div>
@endsection
