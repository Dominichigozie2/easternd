@extends('layouts.admin')

@section('title', 'Manage Premium Brands - EDFI Admin')

@section('content')
<div class="page-header">
    <h1>Premium Brands</h1>
    <a href="{{ route('admin.premium-brands.create') }}" class="btn-primary"><i class="fa-solid fa-plus"></i> Add New Brand</a>
</div>

<div class="card">
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Brand Name</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($brands as $index => $brand)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>
                            <img src="{{ asset('uploads/' . $brand->image) }}" alt="{{ $brand->name }}" style="height: 45px; width: 45px; object-fit: contain;" onerror="this.src='{{ asset('img/logo.png') }}'">
                        </td>
                        <td style="font-weight: 600; color: #fff;">{{ $brand->name }}</td>
                        <td style="color: #94a3b8;">{{ Str::limit($brand->description, 80) }}</td>
                        <td style="white-space: nowrap;">
                            <a href="{{ route('admin.premium-brands.edit', $brand->id) }}" class="btn-edit"><i class="fa-solid fa-pen"></i> Edit</a>
                            <form action="{{ route('admin.premium-brands.destroy', $brand->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Are you sure you want to delete this brand?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-danger"><i class="fa-solid fa-trash"></i> Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" style="text-align: center; color: #64748b; padding: 30px;">No premium brands found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
