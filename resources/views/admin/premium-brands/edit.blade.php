@extends('layouts.admin')

@section('title', 'Edit Premium Brand - EDFI Admin')

@section('content')
<div class="page-header">
    <h1>Edit Premium Brand</h1>
    <a href="{{ route('admin.premium-brands.index') }}" class="btn-primary" style="background: #334155; color: #fff;"><i class="fa-solid fa-arrow-left"></i> Back to List</a>
</div>

<div class="card">
    <form action="{{ route('admin.premium-brands.update', $brand->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="name">Brand Name *</label>
            <input type="text" id="name" name="name" class="form-control" required value="{{ old('name', $brand->name) }}">
        </div>

        <div class="form-group">
            <label for="image">Brand Image</label>
            @if($brand->image)
                <div style="margin-bottom: 10px;">
                    <img src="{{ asset('uploads/' . $brand->image) }}" alt="Current Image" style="height: 80px; object-fit: contain; border-radius: 4px; border: 1px solid #333;">
                </div>
            @endif
            <input type="file" id="image" name="image" class="form-control">
            <small style="color: #64748b;">Leave blank to keep current image</small>
        </div>

        <div class="form-group">
            <label for="description">Brand Description *</label>
            <textarea id="description" name="description" class="form-control" rows="6" required>{{ old('description', $brand->description) }}</textarea>
        </div>

        <button type="submit" class="btn-primary"><i class="fa-solid fa-floppy-disk"></i> Update Brand</button>
    </form>
</div>
@endsection
