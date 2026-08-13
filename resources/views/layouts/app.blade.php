<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Eastern Distilleries & Food Industries Limited')</title>

    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/loader.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    @stack('styles')
</head>
<body>

    <!-- Top Contact Bar (#040452 background with #ad8231 icons) -->
    <div class="firstnav">
        <div class="container firstnav-container">
            <ul class="contact-nav">
                <li><a href="tel:+2348033166700"><i class="fa-solid fa-phone"></i> <span>+234(0)803-316-6700</span></a></li>
                <li><a href="mailto:sales@easterndistilleries.com"><i class="fa-solid fa-envelope"></i> <span>sales@easterndistilleries.com</span></a></li>
                <li><a href="{{ route('contact') }}"><i class="fa-solid fa-clock"></i> <span>24/7 Customer Support</span></a></li>
            </ul>
            <div class="media">
                <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#" aria-label="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
                <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                <a href="#" aria-label="Twitter"><i class="fa-brands fa-x-twitter"></i></a>
            </div>
        </div>
    </div>

    <!-- Main Crisp White Navigation Bar -->
    <nav>
        <div class="container nav-container">
            <div class="logo">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('img/EDFI LOGO.png') }}" alt="Eastern Distilleries Logo">
                </a>
            </div>
            <ul class="nav-list" id="navList">
                <li class="list-items {{ request()->routeIs('home') ? 'active' : '' }}"><a href="{{ route('home') }}">Home</a></li>
                <li class="list-items {{ request()->routeIs('about') ? 'active' : '' }}"><a href="{{ route('about') }}">Our Company</a></li>
                <li class="list-items {{ request()->routeIs('events.*') ? 'active' : '' }}"><a href="{{ route('events.index') }}">News & Events</a></li>
                <li class="list-items dropdown {{ request()->routeIs('brands.*') ? 'active' : '' }}">
                    <a>Products <i class="fa-solid fa-chevron-down" style="font-size: 0.75rem;"></i></a>
                    <div class="dropdown-menu">
                        @if(isset($globalPremiumBrands) && $globalPremiumBrands->count())
                            <ul>
                                <h1><i class="fa-solid fa-crown" style="color: var(--brand-gold);"></i> Premium Brands</h1>
                                @foreach($globalPremiumBrands as $pb)
                                    <li><a href="{{ route('brands.premium.detail', $pb->id) }}">{{ $pb->name }}</a></li>
                                @endforeach
                            </ul>
                        @endif

                        @if(isset($globalCalidonBrands) && $globalCalidonBrands->count())
                            <ul>
                                <h1><i class="fa-solid fa-whiskey-glass" style="color: var(--brand-gold);"></i> Calidon's Line</h1>
                                @foreach($globalCalidonBrands as $cb)
                                    <li><a href="{{ route('brands.calidon.detail', $cb->id) }}">{{ $cb->name }}</a></li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </li>
                <li class="list-items"><a href="https://krisoralgroup.com/" target="_blank">CSR Responsibilities</a></li>
                <li class="list-items {{ request()->routeIs('contact') ? 'active' : '' }}"><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
            <div class="menu-btn" id="menuBtn">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    @yield('content')

    <!-- Master Footer -->
    <footer class="footer">
        <div class="container footer-container">
            <div class="footer-logo">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('img/EDFI LOGO.png') }}" alt="Eastern Distilleries Logo">
                </a>
                <p>Leading manufacturers of non-alcoholic and alcoholic beverages in Nigeria. Renowned for innovation, supreme quality, and unyielding integrity since 1994.</p>
            </div>
            <div class="footer-ul">
                <h5>Quick Links</h5>
                <ul>
                    <li><a href="{{ route('home') }}"><i class="fa-solid fa-angle-right" style="font-size: 0.75rem; color: var(--brand-gold);"></i> Home</a></li>
                    <li><a href="{{ route('about') }}"><i class="fa-solid fa-angle-right" style="font-size: 0.75rem; color: var(--brand-gold);"></i> About EDFI</a></li>
                    <li><a href="{{ route('events.index') }}"><i class="fa-solid fa-angle-right" style="font-size: 0.75rem; color: var(--brand-gold);"></i> News & Events</a></li>
                    <li><a href="https://krisoralgroup.com/" target="_blank"><i class="fa-solid fa-angle-right" style="font-size: 0.75rem; color: var(--brand-gold);"></i> Krisoral Group CSR</a></li>
                </ul>
            </div>
            <div class="footer-ul">
                <h5>Our Products</h5>
                <ul>
                    @if(isset($globalPremiumBrands) && $globalPremiumBrands->count())
                        @foreach($globalPremiumBrands->take(4) as $pb)
                            <li><a href="{{ route('brands.premium.detail', $pb->id) }}"><i class="fa-solid fa-wine-bottle" style="font-size: 0.75rem; color: var(--brand-gold);"></i> {{ $pb->name }}</a></li>
                        @endforeach
                    @endif
                </ul>
            </div>
            <div class="footer-ul">
                <h5>Contact Info</h5>
                <ul>
                    <li><a href="tel:+2348033166700"><i class="fa-solid fa-phone" style="color: var(--brand-gold);"></i> +234(0)803-316-6700</a></li>
                    <li><a href="mailto:sales@easterndistilleries.com"><i class="fa-solid fa-envelope" style="color: var(--brand-gold);"></i> sales@easterndistilleries.com</a></li>
                    <li><a href="{{ route('contact') }}"><i class="fa-solid fa-location-dot" style="color: var(--brand-gold);"></i> Onitsha, Anambra State, Nigeria</a></li>
                </ul>
            </div>
        </div>
        <div class="container">
            <h6>&copy; {{ date('Y') }} Eastern Distilleries and Food Industries Limited. All Rights Reserved.</h6>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        const menuBtn = document.getElementById('menuBtn');
        const navList = document.getElementById('navList');
        if (menuBtn && navList) {
            menuBtn.addEventListener('click', () => {
                navList.style.display = navList.style.display === 'flex' ? 'none' : 'flex';
                if (navList.style.display === 'flex') {
                    navList.style.flexDirection = 'column';
                    navList.style.position = 'absolute';
                    navList.style.top = '100%';
                    navList.style.left = '0';
                    navList.style.right = '0';
                    navList.style.background = '#ffffff';
                    navList.style.padding = '20px';
                    navList.style.borderBottom = '2px solid var(--brand-gold)';
                    navList.style.boxShadow = '0 10px 30px rgba(0,0,0,0.1)';
                }
            });
        }
    </script>
    @stack('scripts')
</body>
</html>
