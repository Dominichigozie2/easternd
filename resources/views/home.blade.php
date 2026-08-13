@extends('layouts.app')

@section('title', 'Eastern Distilleries & Food Industries Limited - Master Distillers')

@section('content')
<!-- High Contrast Hero Carousel Section -->
<section class="hero-luxury-brand">
    <div class="swiper heroSwiper" style="height: 100%;">
        <div class="swiper-wrapper">
            <!-- Hero Slide 1 -->
            <div class="swiper-slide hero-slide-brand" style="background-image: url('{{ asset('img/bright_hero_spirit.jpg') }}');">
                <div class="hero-overlay-brand"></div>
                <div class="container">
                    <div class="hero-content">
                        <div class="hero-badge-brand"><i class="fa-solid fa-award"></i> EST. 1994 • ONITSHA, NIGERIA</div>
                        <h1 class="hero-title-brand">Eastern Distilleries <span>& Food Industries</span></h1>
                        <p class="hero-desc-brand">Renowned manufacturers of premium alcoholic and non-alcoholic beverages. Combining heritage oak aging with state-of-the-art distillation to deliver uncompromised quality.</p>
                        <div class="hero-buttons">
                            <a href="#brandShowcase" class="btn-gold">Explore Portfolio <i class="fa-solid fa-arrow-down"></i></a>
                            <a href="{{ route('about') }}" class="btn-outline-navy" style="background: rgba(255,255,255,0.15); color: #fff; border-color: #fff;">Our Heritage <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Hero Slide 2 -->
            <div class="swiper-slide hero-slide-brand" style="background-image: url('{{ asset('img/bright_distillery_facility.jpg') }}');">
                <div class="hero-overlay-brand"></div>
                <div class="container">
                    <div class="hero-content">
                        <div class="hero-badge-brand"><i class="fa-solid fa-gem"></i> THE STANDARD OF INTEGRITY</div>
                        <h1 class="hero-title-brand">Crafted With <span>Passionate Integrity</span></h1>
                        <p class="hero-desc-brand">Integrity is the bedrock of our operations. From raw agricultural neutral spirits to fine botanicals, we craft taste profiles that define moments of celebration.</p>
                        <div class="hero-buttons">
                            <a href="#brandShowcase" class="btn-gold">View Premium Line <i class="fa-solid fa-wine-glass"></i></a>
                            <a href="{{ route('contact') }}" class="btn-outline-navy" style="background: rgba(255,255,255,0.15); color: #fff; border-color: #fff;">Order Now <i class="fa-solid fa-cart-shopping"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>

<!-- Deep Navy Stats Banner -->
<section class="stats-section-brand">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-item-brand">
                <div class="stat-number-brand">30+</div>
                <div class="stat-label-brand">Years of Craftsmanship</div>
            </div>
            <div class="stat-item-brand">
                <div class="stat-number-brand">20+</div>
                <div class="stat-label-brand">Master Beverage Brands</div>
            </div>
            <div class="stat-item-brand">
                <div class="stat-number-brand">100%</div>
                <div class="stat-label-brand">Quality & Integrity</div>
            </div>
            <div class="stat-item-brand">
                <div class="stat-number-brand">36</div>
                <div class="stat-label-brand">States Distribution</div>
            </div>
        </div>
    </div>
</section>

<!-- Corporate Intro Section -->
<section style="padding: 100px 0; background: #ffffff;">
    <div class="container" style="display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center;">
        <div style="position: relative;">
            <div style="border-radius: 16px; overflow: hidden; border: 2px solid var(--brand-gold); box-shadow: var(--shadow-hover);">
                <img src="{{ asset('img/bright_distillery_facility.jpg') }}" alt="EDFI Distillery Plant" style="width: 100%; height: 420px; object-fit: cover;">
            </div>
            <div style="position: absolute; bottom: -25px; right: -25px; background: #ffffff; border: 2px solid var(--brand-navy); padding: 25px; border-radius: 12px; box-shadow: var(--shadow-hover); text-align: center;">
                <img src="{{ asset('img/EDFI LOGO.png') }}" style="height: 48px; margin: 0 auto 10px;">
                <span style="color: var(--brand-gold); font-weight: 800; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 1px;">Krisoral Subsidiary</span>
            </div>
        </div>

        <div>
            <span class="subtitle">ABOUT EASTERN DISTILLERIES</span>
            <h2 class="section-title-navy" style="margin-bottom: 25px; text-align: left;">Pioneering Beverage Craftsmanship in Nigeria</h2>
            <p style="color: var(--text-body); font-size: 1.05rem; line-height: 1.8; margin-bottom: 25px;">
                Eastern Distilleries and Food Industries Limited (EDFI) is a leading force in Nigeria's food and beverage manufacturing sector. Established in 1994 as a premier subsidiary of Krisoral Group of Companies, EDFI delivers finest quality spirits, aromatic schnapps, dark rums, and premium non-alcoholic beverages.
            </p>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 30px;">
                <div style="display: flex; align-items: flex-start; gap: 12px;">
                    <i class="fa-solid fa-circle-check" style="color: var(--brand-gold); font-size: 1.3rem; margin-top: 3px;"></i>
                    <div>
                        <h4 style="color: var(--brand-navy); font-size: 1rem; font-weight: 700;">Integrity First</h4>
                        <p style="color: var(--text-muted); font-size: 0.88rem;">Ethical practices and complete transparency in operations.</p>
                    </div>
                </div>
                <div style="display: flex; align-items: flex-start; gap: 12px;">
                    <i class="fa-solid fa-circle-check" style="color: var(--brand-gold); font-size: 1.3rem; margin-top: 3px;"></i>
                    <div>
                        <h4 style="color: var(--brand-navy); font-size: 1rem; font-weight: 700;">Supreme Taste</h4>
                        <p style="color: var(--text-muted); font-size: 0.88rem;">Masterfully distilled neutral agricultural spirits.</p>
                    </div>
                </div>
            </div>
            <a href="{{ route('about') }}" class="btn-navy">Read Full Story <i class="fa-solid fa-arrow-right"></i></a>
        </div>
    </div>
</section>

<!-- Filterable Brand Showcase Section -->
<section id="brandShowcase" style="padding: 90px 0; background: var(--bg-alt);">
    <div class="container">
        <div class="section-title-wrap">
            <span class="subtitle">OUR PORTFOLIO</span>
            <h2 class="section-title-navy">Explore Master Brands</h2>
        </div>

        <!-- Filter Tabs -->
        <div class="filter-tabs">
            <button class="tab-btn-brand active" onclick="filterBrands('all', this)">All Brands</button>
            <button class="tab-btn-brand" onclick="filterBrands('premium', this)">Premium Series</button>
            <button class="tab-btn-brand" onclick="filterBrands('calidon', this)">Calidon Line</button>
        </div>

        <!-- Brands Grid -->
        <div class="brand-grid-container" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 30px;">
            <!-- Premium Brands -->
            @foreach($premiumBrands as $pb)
                <div class="brand-card-item premium-item">
                    <div class="brand-card">
                        <div class="card-img-wrap">
                            <span class="brand-badge-pill">PREMIUM</span>
                            <img src="{{ asset('uploads/' . $pb->image) }}" alt="{{ $pb->name }}" onerror="this.src='{{ asset('img/logo.png') }}'">
                        </div>
                        <h3 class="card-title-navy">{{ $pb->name }}</h3>
                        <p class="card-desc-muted">{{ Str::limit($pb->description, 100) }}</p>
                        <a href="{{ route('brands.premium.detail', $pb->id) }}" class="card-link-gold">Discover Product <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            @endforeach

            <!-- Calidon Brands -->
            @foreach($calidonBrands as $cb)
                <div class="brand-card-item calidon-item">
                    <div class="brand-card">
                        <div class="card-img-wrap">
                            <span class="brand-badge-pill" style="background: var(--brand-gold); color: #fff;">{{ $cb->category ?: 'CALIDON' }}</span>
                            <img src="{{ asset('uploads/' . ($cb->fimage ?: $cb->simage)) }}" alt="{{ $cb->name }}" onerror="this.src='{{ asset('img/logo.png') }}'">
                        </div>
                        <h3 class="card-title-navy">{{ $cb->name }}</h3>
                        <p class="card-desc-muted">{{ Str::limit($cb->description, 95) }}</p>
                        <a href="{{ route('brands.calidon.detail', $cb->id) }}" class="card-link-gold">View Specification <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- News & Events Section -->
@if($events->count())
<section style="padding: 100px 0; background: #ffffff;">
    <div class="container">
        <div class="section-title-wrap">
            <span class="subtitle">LATEST UPDATES</span>
            <h2 class="section-title-navy">News & Events</h2>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px;">
            @foreach($events as $event)
                <div class="brand-card" style="padding: 0; overflow: hidden;">
                    @if($event->image)
                        <div style="height: 220px; overflow: hidden; position: relative;">
                            <img src="{{ asset('uploads/' . $event->image) }}" alt="{{ $event->title }}" style="width: 100%; height: 100%; object-fit: cover;">
                            <div style="position: absolute; bottom: 15px; left: 15px; background: var(--brand-navy); padding: 5px 14px; border-radius: 50px; border: 1px solid var(--brand-gold); color: var(--brand-gold); font-size: 0.8rem; font-weight: 800;">
                                <i class="fa-regular fa-calendar"></i> {{ $event->date ? $event->date->format('M d, Y') : '' }}
                            </div>
                        </div>
                    @endif
                    <div style="padding: 28px; flex: 1; display: flex; flex-direction: column;">
                        <h3 style="font-family: var(--font-heading); color: var(--brand-navy); font-size: 1.35rem; margin-bottom: 12px;">{{ $event->title }}</h3>
                        <p style="color: var(--text-body); font-size: 0.93rem; line-height: 1.6; margin-bottom: 22px; flex: 1;">{{ Str::limit($event->writeup, 120) }}</p>
                        <a href="{{ route('events.show', $event->id) }}" class="card-link-gold">Read Full Story <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- Call To Action Banner -->
<section style="padding: 85px 0; background: linear-gradient(rgba(4, 4, 82, 0.93), rgba(4, 4, 82, 0.93)), url('{{ asset('img/bright_hero_spirit.jpg') }}') center/cover attachment; text-align: center; border-y: 3px solid var(--brand-gold);">
    <div class="container" style="max-width: 800px;">
        <span class="subtitle" style="color: var(--brand-gold);">DIRECT DISTRIBUTION & PARTNERSHIPS</span>
        <h2 style="font-family: var(--font-heading); font-size: 2.8rem; color: #ffffff; margin-bottom: 20px;">Partner With Eastern Distilleries</h2>
        <p style="color: #e2e8f0; font-size: 1.1rem; line-height: 1.7; margin-bottom: 35px;">
            Whether you are interested in wholesale distribution, corporate events, or custom beverage inquiries, our sales and customer support teams are ready 24/7.
        </p>
        <a href="{{ route('contact') }}" class="btn-gold">Get In Touch Now <i class="fa-solid fa-paper-plane"></i></a>
    </div>
</section>
@endsection

@push('scripts')
<script>
    var heroSwiper = new Swiper(".heroSwiper", {
        loop: true,
        autoplay: {
            delay: 6000,
            disableOnInteraction: false,
        },
        effect: "fade",
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });

    function filterBrands(category, btnElement) {
        const buttons = document.querySelectorAll('.tab-btn-brand');
        buttons.forEach(btn => btn.classList.remove('active'));
        btnElement.classList.add('active');

        const premiumItems = document.querySelectorAll('.premium-item');
        const calidonItems = document.querySelectorAll('.calidon-item');

        if (category === 'all') {
            premiumItems.forEach(item => item.style.display = 'block');
            calidonItems.forEach(item => item.style.display = 'block');
        } else if (category === 'premium') {
            premiumItems.forEach(item => item.style.display = 'block');
            calidonItems.forEach(item => item.style.display = 'none');
        } else if (category === 'calidon') {
            premiumItems.forEach(item => item.style.display = 'none');
            calidonItems.forEach(item => item.style.display = 'block');
        }
    }
</script>
@endpush
