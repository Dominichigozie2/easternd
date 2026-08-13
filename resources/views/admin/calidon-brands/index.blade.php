@extends('layouts.admin')

@section('title', 'Manage Calidon Brands - EDFI Admin')

@section('content')
<div class="page-header">
    <h1>Calidon Brands</h1>
    <a href="{{ route('admin.calidon-brands.create') }}" class="btn-primary"><i class="fa-solid fa-plus"></i> Add Calidon Brand</a>
</div>

<div class="card">
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Primary Size</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($brands as $index => $brand)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>
                            <img src="{{ asset('uploads/' . ($brand->fimage ?: $brand->simage)) }}" alt="{{ $brand->name }}" style="height: 45px; width: 45px; object-fit: contain;" onerror="this.src='{{ asset('img/logo.png') }}'">
                        </td>
                        <td style="font-weight: 600; color: #fff;">{{ $brand->name }}</td>
                        <td style="color: #d9aa52;">{{ $brand->category }}</td>
                        <td>{{ $brand->fsize ?: '-' }} ({{ $brand->fbottle ?: '-' }})</td>
                        <td style="white-space: nowrap;">
                            <a href="{{ route('admin.calidon-brands.edit', $brand->id) }}" class="btn-edit"><i class="fa-solid fa-pen"></i> Edit</a>
                            <form action="{{ route('admin.calidon-brands.destroy', $brand->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Are you sure you want to delete this brand?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-danger"><i class="fa-solid fa-trash"></i> Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" style="text-align: center; color: #64748b; padding: 30px;">No Calidon brands found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
