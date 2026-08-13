@extends('layouts.app')

@section('title', $brand->name . ' - Calidon Product Specification')

@section('content')
<div class="page-hero">
    <div class="container">
        <h3>{{ $brand->name }}</h3>
        <div class="click-back-menu">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><i class="fa-solid fa-chevron-right" style="font-size: 0.75rem;"></i></li>
            <li>Calidon Series</li>
            <li><i class="fa-solid fa-chevron-right" style="font-size: 0.75rem;"></i></li>
            <li>{{ $brand->name }}</li>
        </div>
    </div>
</div>

<section style="padding: 80px 0; background: var(--bg-light);">
    <div class="container">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: center; background: #ffffff; padding: 50px; border-radius: 16px; border: 2px solid var(--brand-gold); box-shadow: var(--shadow-hover); margin-bottom: 60px;">
            <div>
                <!-- Image Slider -->
                <div class="swiper calidonSwiper" style="border-radius: 12px; overflow: hidden; border: 1px solid var(--border-light); background: #f8fafc; padding: 30px;">
                    <div class="swiper-wrapper">
                        @foreach(['fimage', 'simage', 'timage', 'ftimage'] as $imgKey)
                            @if(!empty($brand->$imgKey))
                                <div class="swiper-slide" style="text-align: center;">
                                    <img src="{{ asset('uploads/' . $brand->$imgKey) }}" alt="{{ $brand->name }}" style="max-height: 360px; max-width: 100%; object-fit: contain;" onerror="this.src='{{ asset('img/logo.png') }}'">
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="swiper-button-next" style="color: var(--brand-gold);"></div>
                    <div class="swiper-button-prev" style="color: var(--brand-gold);"></div>
                </div>
            </div>

            <div>
                <span class="subtitle"><i class="fa-solid fa-whiskey-glass"></i> CALIDON SIGNATURE</span>
                <h1 style="font-family: var(--font-heading); font-size: 2.8rem; color: var(--brand-navy); margin-bottom: 15px;">{{ $brand->name }}</h1>
                
                <div style="display: flex; gap: 15px; margin-bottom: 20px;">
                    <span style="padding: 5px 16px; background: var(--brand-navy); color: var(--brand-gold); border: 1px solid var(--brand-gold); font-size: 0.85rem; font-weight: 800; border-radius: 50px;">
                        Category: {{ $brand->category }}
                    </span>
                    <span style="padding: 5px 16px; background: rgba(76, 175, 80, 0.12); border: 1px solid #4caf50; color: #2e7d32; font-size: 0.85rem; font-weight: 800; border-radius: 50px;">
                        In Stock
                    </span>
                </div>

                <p style="color: var(--text-body); font-size: 1.05rem; line-height: 1.8; margin-bottom: 30px;">
                    {!! nl2br(e($brand->description)) !!}
                </p>

                <a href="{{ route('contact') }}" class="btn-gold">Place Wholesale Order <i class="fa-solid fa-cart-shopping"></i></a>
            </div>
        </div>

        <!-- Packaging & Sizes Specification Table -->
        <div style="background: #ffffff; padding: 40px; border-radius: 16px; border: 1px solid var(--border-light); box-shadow: var(--shadow-soft); margin-bottom: 70px;">
            <h3 style="font-family: var(--font-heading); font-size: 1.6rem; color: var(--brand-navy); margin-bottom: 20px;"><i class="fa-solid fa-boxes-packing" style="color: var(--brand-gold);"></i> Packaging Specifications</h3>
            
            <table class="spec-table">
                <thead>
                    <tr>
                        <th>Volume / Size</th>
                        <th>Packaging Format</th>
                    </tr>
                </thead>
                <tbody>
                    @if($brand->fsize || $brand->fbottle)
                        <tr>
                            <td><strong>{{ $brand->fsize ?: '-' }}</strong></td>
                            <td>{{ $brand->fbottle ?: '-' }}</td>
                        </tr>
                    @endif
                    @if($brand->ssize || $brand->sbottle)
                        <tr>
                            <td><strong>{{ $brand->ssize ?: '-' }}</strong></td>
                            <td>{{ $brand->sbottle ?: '-' }}</td>
                        </tr>
                    @endif
                    @if($brand->tsize || $brand->tbottle)
                        <tr>
                            <td><strong>{{ $brand->tsize ?: '-' }}</strong></td>
                            <td>{{ $brand->tbottle ?: '-' }}</td>
                        </tr>
                    @endif
                    @if($brand->ftsize || $brand->ftbottle)
                        <tr>
                            <td><strong>{{ $brand->ftsize ?: '-' }}</strong></td>
                            <td>{{ $brand->ftbottle ?: '-' }}</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>

        <!-- Related Calidon Brands Grid -->
        @if($otherBrands->count())
        <div>
            <div class="section-title-wrap">
                <span class="subtitle">RELATED PRODUCTS</span>
                <h2 class="section-title-navy">Other Calidon Lines</h2>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(240px, 1fr)); gap: 25px;">
                @foreach($otherBrands as $other)
                    <div class="brand-card" style="text-align: center;">
                        <div class="card-img-wrap">
                            <img src="{{ asset('uploads/' . ($other->fimage ?: $other->simage)) }}" alt="{{ $other->name }}" onerror="this.src='{{ asset('img/logo.png') }}'">
                        </div>
                        <h3 class="card-title-navy" style="font-size: 1.25rem;">{{ $other->name }}</h3>
                        <a href="{{ route('brands.calidon.detail', $other->id) }}" class="card-link-gold" style="justify-content: center; margin-top: 10px;">View Product <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                @endforeach
            </div>
        </div>
        @endif
    </div>
</section>
@endsection

@push('scripts')
<script>
    var calidonSwiper = new Swiper(".calidonSwiper", {
        loop: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>
@endpush
