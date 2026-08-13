@extends('layouts.app')

@section('title', 'About Us - Eastern Distilleries & Food Industries Limited')

@section('content')
<!-- Page Hero -->
<div class="page-hero">
    <div class="container">
        <h3>Who We Are</h3>
        <div class="click-back-menu">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><i class="fa-solid fa-chevron-right" style="font-size: 0.75rem;"></i></li>
            <li>Our Company</li>
        </div>
    </div>
</div>

<!-- Main About Content -->
<section style="padding: 90px 0; background: #ffffff;">
    <div class="container">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: center; margin-bottom: 80px;">
            <div>
                <span class="subtitle">EDFI CORPORATE OVERVIEW</span>
                <h2 class="section-title-navy" style="text-align: left; margin-bottom: 20px;">Welcome to Eastern Distilleries</h2>
                <p style="color: var(--text-body); font-size: 1.05rem; line-height: 1.8; margin-bottom: 20px;">
                    Eastern Distilleries and Food Industries Nig. Ltd is a leading name in the food and beverage manufacturing sector in Nigeria. Founded with an unyielding commitment to quality, cost effectiveness, and ethical business practices, we have grown into one of West Africa's most trusted spirit brands.
                </p>
                <p style="color: var(--text-body); font-size: 1.05rem; line-height: 1.8;">
                    Located at Harbour Industrial Layout, Onitsha in Anambra State, our world-class manufacturing facility crafts premium spirits, dark rums, aromatic schnapps, and wines using raw neutral spirits of agricultural origin.
                </p>
            </div>
            <div>
                <div style="border-radius: 20px; overflow: hidden; border: 2px solid var(--brand-gold); box-shadow: var(--shadow-hover);">
                    <img src="{{ asset('img/bright_distillery_facility.jpg') }}" alt="Distillery Facility" style="width: 100%; height: 390px; object-fit: cover;">
                </div>
            </div>
        </div>

        <!-- Corporate Journey & Vision Grid -->
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; margin-bottom: 80px;">
            <div class="brand-card-perfect">
                <div style="width: 55px; height: 55px; border-radius: 14px; background: rgba(173, 130, 49, 0.15); display: flex; align-items: center; justify-content: center; color: var(--brand-gold); font-size: 1.4rem; margin-bottom: 20px; border: 1px solid var(--brand-gold);">
                    <i class="fa-solid fa-timeline"></i>
                </div>
                <h3 class="card-title-perfect">Our Journey (Est. 1994)</h3>
                <p class="card-desc-perfect">
                    Established in 1994 as a proud subsidiary of Krisoral Group of Companies, EDFI holds a rich history rooted in traditions and forward-looking innovations. Over three decades, we have continually adapted to market needs while setting standards in beverage quality.
                </p>
            </div>

            <div class="brand-card-perfect">
                <div style="width: 55px; height: 55px; border-radius: 14px; background: rgba(173, 130, 49, 0.15); display: flex; align-items: center; justify-content: center; color: var(--brand-gold); font-size: 1.4rem; margin-bottom: 20px; border: 1px solid var(--brand-gold);">
                    <i class="fa-solid fa-eye"></i>
                </div>
                <h3 class="card-title-perfect">Our Vision</h3>
                <p class="card-desc-perfect">
                    To be the undisputed market leader in the food and beverage industry across Africa, celebrated for top-grade products, sustainable operations, and enduring value for consumers and stakeholders.
                </p>
            </div>

            <div class="brand-card-perfect">
                <div style="width: 55px; height: 55px; border-radius: 14px; background: rgba(173, 130, 49, 0.15); display: flex; align-items: center; justify-content: center; color: var(--brand-gold); font-size: 1.4rem; margin-bottom: 20px; border: 1px solid var(--brand-gold);">
                    <i class="fa-solid fa-whiskey-glass"></i>
                </div>
                <h3 class="card-title-perfect">Our Products</h3>
                <p class="card-desc-perfect">
                    An extensive selection including Calidon Brandy, Varga Dry Gin, Omega Schnapps, TopSquad Dark Rum, Palmy Cola, and Aston Malt—distilled to perfection with pure botanicals and pristine water.
                </p>
            </div>
        </div>

        <!-- Core Values Section -->
        <div style="background: var(--brand-navy); color: #fff; padding: 55px; border-radius: 20px; border: 2px solid var(--brand-gold); margin-bottom: 80px;">
            <div class="section-title-wrap" style="margin-bottom: 40px;">
                <span class="subtitle" style="color: var(--brand-gold);">OUR CORE VALUES</span>
                <h2 style="font-family: var(--font-heading); font-size: 2.6rem; color: #ffffff;">The EDFI Pillars</h2>
            </div>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 25px;">
                <div style="text-align: center; padding: 25px; background: rgba(255,255,255,0.06); border-radius: 14px; border: 1px solid var(--border-gold);">
                    <i class="fa-solid fa-shield-halved" style="font-size: 2.2rem; color: var(--brand-gold); margin-bottom: 15px;"></i>
                    <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Integrity</h4>
                    <p style="color: #cbd5e1; font-size: 0.88rem;">Honesty and transparency in all business dealings.</p>
                </div>
                <div style="text-align: center; padding: 25px; background: rgba(255,255,255,0.06); border-radius: 14px; border: 1px solid var(--border-gold);">
                    <i class="fa-solid fa-award" style="font-size: 2.2rem; color: var(--brand-gold); margin-bottom: 15px;"></i>
                    <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Quality</h4>
                    <p style="color: #cbd5e1; font-size: 0.88rem;">Uncompromising commitment to superior taste and safety.</p>
                </div>
                <div style="text-align: center; padding: 25px; background: rgba(255,255,255,0.06); border-radius: 14px; border: 1px solid var(--border-gold);">
                    <i class="fa-solid fa-bolt" style="font-size: 2.2rem; color: var(--brand-gold); margin-bottom: 15px;"></i>
                    <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Speed & Discipline</h4>
                    <p style="color: #cbd5e1; font-size: 0.88rem;">Prompt execution with rigorous operational standards.</p>
                </div>
                <div style="text-align: center; padding: 25px; background: rgba(255,255,255,0.06); border-radius: 14px; border: 1px solid var(--border-gold);">
                    <i class="fa-solid fa-users" style="font-size: 2.2rem; color: var(--brand-gold); margin-bottom: 15px;"></i>
                    <h4 style="color: #ffffff; font-size: 1.1rem; margin-bottom: 8px;">Teamwork</h4>
                    <p style="color: #cbd5e1; font-size: 0.88rem;">Collaborative passion across our master distillers and staff.</p>
                </div>
            </div>
        </div>

        <!-- Gallery Section -->
        @if(isset($gallery) && ($gallery->afimage || $gallery->asimage || $gallery->atimage))
        <div>
            <div class="section-title-wrap">
                <span class="subtitle">INSIDE OUR FACTORY</span>
                <h2 class="section-title-navy">Facility & Operations Gallery</h2>
            </div>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px;">
                @foreach(['afimage', 'asimage', 'atimage', 'aftimage', 'afthimage', 'asximage', 'asvimage', 'aetimage'] as $imgKey)
                    @if(!empty($gallery->$imgKey))
                        <div style="border-radius: 14px; overflow: hidden; height: 240px; border: 1px solid var(--border-light); box-shadow: var(--shadow-soft);">
                            <img src="{{ asset('uploads/about/' . $gallery->$imgKey) }}" alt="EDFI Facility" style="width: 100%; height: 100%; object-fit: cover;" onerror="this.src='{{ asset('img/bright_distillery_facility.jpg') }}'">
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        @endif
    </div>
</section>
@endsection
