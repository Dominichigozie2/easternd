@extends('layouts.admin')

@section('title', 'Add Calidon Brand - EDFI Admin')

@section('content')
<div class="page-header">
    <h1>Add Calidon Brand</h1>
    <a href="{{ route('admin.calidon-brands.index') }}" class="btn-primary" style="background: #334155; color: #fff;"><i class="fa-solid fa-arrow-left"></i> Back to List</a>
</div>

<div class="card">
    <form action="{{ route('admin.calidon-brands.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
            <div class="form-group">
                <label for="name">Brand Name *</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="e.g. Calidon's Brandy" required value="{{ old('name') }}">
            </div>

            <div class="form-group">
                <label for="category">Category *</label>
                <input type="text" id="category" name="category" class="form-control" placeholder="e.g. Brandy, Dry Gin, Liqueur" required value="{{ old('category') }}">
            </div>
        </div>

        <div class="form-group">
            <label for="description">Description *</label>
            <textarea id="description" name="description" class="form-control" rows="4" required>{{ old('description') }}</textarea>
        </div>

        <h3 style="color: #d9aa52; font-size: 1.1rem; margin: 25px 0 15px;">Packaging Sizes & Images</h3>

        <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 15px;">
            <div class="form-group">
                <label>1st Size (e.g. 750 ml)</label>
                <input type="text" name="fsize" class="form-control" value="{{ old('fsize') }}">
            </div>
            <div class="form-group">
                <label>1st Type (e.g. Bottle)</label>
                <input type="text" name="fbottle" class="form-control" value="{{ old('fbottle') }}">
            </div>
            <div class="form-group">
                <label>1st Image</label>
                <input type="file" name="fimage" class="form-control">
            </div>

            <div class="form-group">
                <label>2nd Size (e.g. 200 ml)</label>
                <input type="text" name="ssize" class="form-control" value="{{ old('ssize') }}">
            </div>
            <div class="form-group">
                <label>2nd Type (e.g. PET Bottle)</label>
                <input type="text" name="sbottle" class="form-control" value="{{ old('sbottle') }}">
            </div>
            <div class="form-group">
                <label>2nd Image</label>
                <input type="file" name="simage" class="form-control">
            </div>

            <div class="form-group">
                <label>3rd Size (e.g. 120 ml)</label>
                <input type="text" name="tsize" class="form-control" value="{{ old('tsize') }}">
            </div>
            <div class="form-group">
                <label>3rd Type (e.g. PET Bottle)</label>
                <input type="text" name="tbottle" class="form-control" value="{{ old('tbottle') }}">
            </div>
            <div class="form-group">
                <label>3rd Image</label>
                <input type="file" name="timage" class="form-control">
            </div>

            <div class="form-group">
                <label>4th Size (e.g. 30 ml)</label>
                <input type="text" name="ftsize" class="form-control" value="{{ old('ftsize') }}">
            </div>
            <div class="form-group">
                <label>4th Type (e.g. Sachet)</label>
                <input type="text" name="ftbottle" class="form-control" value="{{ old('ftbottle') }}">
            </div>
            <div class="form-group">
                <label>4th Image</label>
                <input type="file" name="ftimage" class="form-control">
            </div>
        </div>

        <button type="submit" class="btn-primary" style="margin-top: 15px;"><i class="fa-solid fa-floppy-disk"></i> Save Calidon Brand</button>
    </form>
</div>
@endsection
