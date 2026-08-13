@extends('layouts.admin')

@section('title', 'Manage About Gallery - EDFI Admin')

@section('content')
<div class="page-header">
    <h1>About Page Gallery Images</h1>
</div>

<div class="card">
    <form action="{{ route('admin.about.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <p style="color: #94a3b8; margin-bottom: 20px;">Upload facility, factory, or corporate gallery photos to display on the public About Us page.</p>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px;">
            @foreach(['afimage' => 'Gallery Photo 1', 'asimage' => 'Gallery Photo 2', 'atimage' => 'Gallery Photo 3', 'aftimage' => 'Gallery Photo 4', 'afthimage' => 'Gallery Photo 5', 'asximage' => 'Gallery Photo 6', 'asvimage' => 'Gallery Photo 7', 'aetimage' => 'Gallery Photo 8'] as $field => $label)
                <div class="form-group" style="background: #0f1117; padding: 15px; border-radius: 6px; border: 1px solid #232733;">
                    <label>{{ $label }}</label>
                    @if($gallery && !empty($gallery->$field))
                        <div style="margin-bottom: 10px;">
                            <img src="{{ asset('uploads/about/' . $gallery->$field) }}" style="width: 100%; height: 120px; object-fit: cover; border-radius: 4px;" onerror="this.src='{{ asset('img/about-baner-2.jpg') }}'">
                        </div>
                    @endif
                    <input type="file" name="{{ $field }}" class="form-control">
                </div>
            @endforeach
        </div>

        <button type="submit" class="btn-primary" style="margin-top: 20px;"><i class="fa-solid fa-floppy-disk"></i> Update Gallery Images</button>
    </form>
</div>
@endsection
