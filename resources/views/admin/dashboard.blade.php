@extends('layouts.admin')

@section('title', 'Admin Dashboard - EDFI')

@section('content')
<div class="page-header">
    <h1>Dashboard Overview</h1>
</div>

<!-- Stats Grid -->
<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 20px; margin-bottom: 30px;">
    <div style="background: #161922; border: 1px solid #232733; padding: 22px; border-radius: 8px; border-left: 4px solid #d9aa52;">
        <div style="display: flex; justify-content: space-between; align-items: center;">
            <div>
                <p style="color: #94a3b8; font-size: 0.85rem; text-transform: uppercase;">Premium Brands</p>
                <h2 style="font-size: 2rem; color: #fff; margin-top: 5px;">{{ $premiumCount }}</h2>
            </div>
            <i class="fa-solid fa-wine-glass" style="font-size: 2.2rem; color: #d9aa52; opacity: 0.8;"></i>
        </div>
    </div>

    <div style="background: #161922; border: 1px solid #232733; padding: 22px; border-radius: 8px; border-left: 4px solid #3b82f6;">
        <div style="display: flex; justify-content: space-between; align-items: center;">
            <div>
                <p style="color: #94a3b8; font-size: 0.85rem; text-transform: uppercase;">Calidon Brands</p>
                <h2 style="font-size: 2rem; color: #fff; margin-top: 5px;">{{ $calidonCount }}</h2>
            </div>
            <i class="fa-solid fa-bottle-droplet" style="font-size: 2.2rem; color: #3b82f6; opacity: 0.8;"></i>
        </div>
    </div>

    <div style="background: #161922; border: 1px solid #232733; padding: 22px; border-radius: 8px; border-left: 4px solid #10b981;">
        <div style="display: flex; justify-content: space-between; align-items: center;">
            <div>
                <p style="color: #94a3b8; font-size: 0.85rem; text-transform: uppercase;">News & Events</p>
                <h2 style="font-size: 2rem; color: #fff; margin-top: 5px;">{{ $eventCount }}</h2>
            </div>
            <i class="fa-solid fa-calendar-days" style="font-size: 2.2rem; color: #10b981; opacity: 0.8;"></i>
        </div>
    </div>
</div>

<div style="display: grid; grid-template-columns: 1fr 1fr; gap: 25px;">
    <!-- Recent Premium Brands -->
    <div class="card">
        <h3 style="font-size: 1.1rem; color: #d9aa52; margin-bottom: 15px;"><i class="fa-solid fa-wine-glass"></i> Premium Brands</h3>
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($latestPremium as $brand)
                        <tr>
                            <td><img src="{{ asset('uploads/' . $brand->image) }}" style="height: 35px; width: 35px; object-fit: contain;" onerror="this.src='{{ asset('img/logo.png') }}'"></td>
                            <td style="font-weight: 500;">{{ $brand->name }}</td>
                            <td><a href="{{ route('admin.premium-brands.edit', $brand->id) }}" class="btn-edit"><i class="fa-solid fa-pen"></i> Edit</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Recent Calidon Brands -->
    <div class="card">
        <h3 style="font-size: 1.1rem; color: #3b82f6; margin-bottom: 15px;"><i class="fa-solid fa-bottle-droplet"></i> Calidon Brands</h3>
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($latestCalidon as $brand)
                        <tr>
                            <td><img src="{{ asset('uploads/' . ($brand->fimage ?: $brand->simage)) }}" style="height: 35px; width: 35px; object-fit: contain;" onerror="this.src='{{ asset('img/logo.png') }}'"></td>
                            <td style="font-weight: 500;">{{ $brand->name }}</td>
                            <td>{{ $brand->category }}</td>
                            <td><a href="{{ route('admin.calidon-brands.edit', $brand->id) }}" class="btn-edit"><i class="fa-solid fa-pen"></i> Edit</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
