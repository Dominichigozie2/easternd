@extends('layouts.admin')

@section('title', 'Edit Calidon Brand - EDFI Admin')

@section('content')
<div class="page-header">
    <h1>Edit Calidon Brand</h1>
    <a href="{{ route('admin.calidon-brands.index') }}" class="btn-primary" style="background: #334155; color: #fff;"><i class="fa-solid fa-arrow-left"></i> Back to List</a>
</div>

<div class="card">
    <form action="{{ route('admin.calidon-brands.update', $brand->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
            <div class="form-group">
                <label for="name">Brand Name *</label>
                <input type="text" id="name" name="name" class="form-control" required value="{{ old('name', $brand->name) }}">
            </div>

            <div class="form-group">
                <label for="category">Category *</label>
                <input type="text" id="category" name="category" class="form-control" required value="{{ old('category', $brand->category) }}">
            </div>
        </div>

        <div class="form-group">
            <label for="description">Description *</label>
            <textarea id="description" name="description" class="form-control" rows="4" required>{{ old('description', $brand->description) }}</textarea>
        </div>

        <h3 style="color: #d9aa52; font-size: 1.1rem; margin: 25px 0 15px;">Packaging Sizes & Images</h3>

        <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 15px;">
            <div class="form-group">
                <label>1st Size</label>
                <input type="text" name="fsize" class="form-control" value="{{ old('fsize', $brand->fsize) }}">
            </div>
            <div class="form-group">
                <label>1st Type</label>
                <input type="text" name="fbottle" class="form-control" value="{{ old('fbottle', $brand->fbottle) }}">
            </div>
            <div class="form-group">
                <label>1st Image</label>
                @if($brand->fimage)<img src="{{ asset('uploads/' . $brand->fimage) }}" style="height: 35px; margin-bottom: 5px; display: block;">@endif
                <input type="file" name="fimage" class="form-control">
            </div>

            <div class="form-group">
                <label>2nd Size</label>
                <input type="text" name="ssize" class="form-control" value="{{ old('ssize', $brand->ssize) }}">
            </div>
            <div class="form-group">
                <label>2nd Type</label>
                <input type="text" name="sbottle" class="form-control" value="{{ old('sbottle', $brand->sbottle) }}">
            </div>
            <div class="form-group">
                <label>2nd Image</label>
                @if($brand->simage)<img src="{{ asset('uploads/' . $brand->simage) }}" style="height: 35px; margin-bottom: 5px; display: block;">@endif
                <input type="file" name="simage" class="form-control">
            </div>

            <div class="form-group">
                <label>3rd Size</label>
                <input type="text" name="tsize" class="form-control" value="{{ old('tsize', $brand->tsize) }}">
            </div>
            <div class="form-group">
                <label>3rd Type</label>
                <input type="text" name="tbottle" class="form-control" value="{{ old('tbottle', $brand->tbottle) }}">
            </div>
            <div class="form-group">
                <label>3rd Image</label>
                @if($brand->timage)<img src="{{ asset('uploads/' . $brand->timage) }}" style="height: 35px; margin-bottom: 5px; display: block;">@endif
                <input type="file" name="timage" class="form-control">
            </div>

            <div class="form-group">
                <label>4th Size</label>
                <input type="text" name="ftsize" class="form-control" value="{{ old('ftsize', $brand->ftsize) }}">
            </div>
            <div class="form-group">
                <label>4th Type</label>
                <input type="text" name="ftbottle" class="form-control" value="{{ old('ftbottle', $brand->ftbottle) }}">
            </div>
            <div class="form-group">
                <label>4th Image</label>
                @if($brand->ftimage)<img src="{{ asset('uploads/' . $brand->ftimage) }}" style="height: 35px; margin-bottom: 5px; display: block;">@endif
                <input type="file" name="ftimage" class="form-control">
            </div>
        </div>

        <button type="submit" class="btn-primary" style="margin-top: 15px;"><i class="fa-solid fa-floppy-disk"></i> Update Calidon Brand</button>
    </form>
</div>
@endsection
