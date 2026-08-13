@extends('layouts.app')

@section('title', $brand->name . ' - Premium Brand Specification')

@section('content')
<div class="page-hero">
    <div class="container">
        <h3>{{ $brand->name }}</h3>
        <div class="click-back-menu">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><i class="fa-solid fa-chevron-right" style="font-size: 0.75rem;"></i></li>
            <li>Premium Brands</li>
            <li><i class="fa-solid fa-chevron-right" style="font-size: 0.75rem;"></i></li>
            <li>{{ $brand->name }}</li>
        </div>
    </div>
</div>

<section style="padding: 80px 0; background: var(--bg-light);">
    <div class="container">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: center; background: #ffffff; padding: 50px; border-radius: 16px; border: 2px solid var(--brand-gold); box-shadow: var(--shadow-hover); margin-bottom: 70px;">
            <div style="text-align: center; position: relative; background: #f8fafc; padding: 30px; border-radius: 12px;">
                <img src="{{ asset('uploads/' . $brand->image) }}" alt="{{ $brand->name }}" style="max-height: 420px; max-width: 100%; object-fit: contain;" onerror="this.src='{{ asset('img/logo.png') }}'">
            </div>

            <div>
                <span class="subtitle"><i class="fa-solid fa-crown"></i> PREMIUM SELECTION</span>
                <h1 style="font-family: var(--font-heading); font-size: 2.8rem; color: var(--brand-navy); margin-bottom: 20px;">{{ $brand->name }}</h1>
                <p style="color: var(--text-body); font-size: 1.08rem; line-height: 1.8; margin-bottom: 30px;">
                    {{ $brand->description }}
                </p>

                <div style="display: flex; gap: 20px; margin-bottom: 35px;">
                    <div style="background: var(--bg-alt); border: 1px solid var(--border-gold); padding: 15px 22px; border-radius: 8px;">
                        <span style="color: var(--brand-gold); font-size: 0.8rem; text-transform: uppercase; font-weight: 800;">Status</span>
                        <h4 style="color: #2e7d32; font-size: 1rem; margin-top: 4px;"><i class="fa-solid fa-circle-check"></i> In Stock</h4>
                    </div>
                    <div style="background: var(--bg-alt); border: 1px solid var(--border-gold); padding: 15px 22px; border-radius: 8px;">
                        <span style="color: var(--brand-gold); font-size: 0.8rem; text-transform: uppercase; font-weight: 800;">Origin</span>
                        <h4 style="color: var(--brand-navy); font-size: 1rem; margin-top: 4px;">EDFI Nigeria</h4>
                    </div>
                </div>

                <a href="{{ route('contact') }}" class="btn-gold">Order This Product <i class="fa-solid fa-cart-shopping"></i></a>
            </div>
        </div>

        <!-- Other Premium Brands -->
        @if($otherBrands->count())
        <div>
            <div class="section-title-wrap">
                <span class="subtitle">EXPLORE MORE</span>
                <h2 class="section-title-navy">Other Premium Brands</h2>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(240px, 1fr)); gap: 25px;">
                @foreach($otherBrands as $other)
                    <div class="brand-card" style="text-align: center;">
                        <div class="card-img-wrap">
                            <img src="{{ asset('uploads/' . $other->image) }}" alt="{{ $other->name }}" onerror="this.src='{{ asset('img/logo.png') }}'">
                        </div>
                        <h3 class="card-title-navy" style="font-size: 1.25rem;">{{ $other->name }}</h3>
                        <a href="{{ route('brands.premium.detail', $other->id) }}" class="card-link-gold" style="justify-content: center; margin-top: 10px;">View Product <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                @endforeach
            </div>
        </div>
        @endif
    </div>
</section>
@endsection
