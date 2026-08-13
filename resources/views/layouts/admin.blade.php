<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard - EDFI')</title>

    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        body { background: #0f1117; color: #e2e8f0; display: flex; min-height: 100vh; }
        
        /* Sidebar */
        .sidebar { width: 260px; background: #161922; border-right: 1px solid #232733; display: flex; flex-direction: column; }
        .sidebar-brand { padding: 25px 20px; border-bottom: 1px solid #232733; display: flex; align-items: center; gap: 12px; }
        .sidebar-brand img { height: 38px; }
        .sidebar-brand h2 { color: #d9aa52; font-size: 1.1rem; font-weight: bold; }
        
        .sidebar-menu { list-style: none; padding: 20px 0; flex: 1; }
        .sidebar-menu li a { display: flex; align-items: center; gap: 12px; padding: 12px 25px; color: #94a3b8; text-decoration: none; font-size: 0.95rem; transition: 0.2s; }
        .sidebar-menu li a:hover, .sidebar-menu li a.active { color: #f1f5f9; background: #202430; border-left: 4px solid #d9aa52; }
        .sidebar-menu li a i { width: 20px; color: #d9aa52; }
        
        /* Main Content */
        .main-wrapper { flex: 1; display: flex; flex-direction: column; }
        .topbar { height: 65px; background: #161922; border-bottom: 1px solid #232733; display: flex; align-items: center; justify-content: space-between; padding: 0 30px; }
        .user-info { display: flex; align-items: center; gap: 15px; }
        .user-avatar { width: 38px; height: 38px; border-radius: 50%; object-fit: cover; border: 2px solid #d9aa52; }
        .logout-btn { color: #ef4444; background: none; border: none; font-size: 0.9rem; cursor: pointer; display: flex; align-items: center; gap: 6px; text-decoration: none; }
        
        .content { padding: 30px; flex: 1; }
        .page-header { margin-bottom: 25px; display: flex; align-items: center; justify-content: space-between; }
        .page-header h1 { font-size: 1.6rem; color: #f8fafc; font-weight: 600; }
        
        /* Cards & Tables */
        .btn-primary { background: #d9aa52; color: #000; padding: 10px 20px; font-weight: 600; border-radius: 6px; text-decoration: none; border: none; cursor: pointer; display: inline-flex; align-items: center; gap: 8px; font-size: 0.9rem; }
        .btn-primary:hover { background: #c59740; }
        .btn-danger { background: #ef4444; color: #fff; padding: 6px 12px; border-radius: 4px; text-decoration: none; border: none; cursor: pointer; font-size: 0.85rem; }
        .btn-edit { background: #3b82f6; color: #fff; padding: 6px 12px; border-radius: 4px; text-decoration: none; font-size: 0.85rem; }
        
        .card { background: #161922; border: 1px solid #232733; border-radius: 8px; padding: 25px; margin-bottom: 25px; }
        .table-responsive { width: 100%; overflow-x: auto; }
        table { width: 100%; border-collapse: collapse; text-align: left; }
        th, td { padding: 14px 18px; border-bottom: 1px solid #232733; font-size: 0.9rem; }
        th { background: #1e222d; color: #cbd5e1; font-weight: 600; }
        tr:hover { background: #1a1e28; }
        
        .alert-success { background: #065f46; color: #34d399; padding: 14px 20px; border-radius: 6px; margin-bottom: 20px; font-size: 0.95rem; }
        .alert-danger { background: #991b1b; color: #fca5a5; padding: 14px 20px; border-radius: 6px; margin-bottom: 20px; font-size: 0.95rem; }
        
        /* Form inputs */
        .form-group { margin-bottom: 20px; }
        .form-group label { display: block; margin-bottom: 8px; font-size: 0.9rem; color: #cbd5e1; font-weight: 500; }
        .form-control { width: 100%; padding: 11px 15px; background: #0f1117; border: 1px solid #2e3444; border-radius: 6px; color: #fff; font-size: 0.95rem; }
        .form-control:focus { outline: none; border-color: #d9aa52; }
    </style>
    @stack('styles')
</head>
<body>

    <!-- Sidebar -->
    <aside class="sidebar">
        <div class="sidebar-brand">
            <img src="{{ asset('img/EDFI LOGO.png') }}" alt="EDFI">
            <h2>EDFI Admin</h2>
        </div>
        <ul class="sidebar-menu">
            <li><a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}"><i class="fa-solid fa-gauge"></i> Dashboard</a></li>
            <li><a href="{{ route('admin.premium-brands.index') }}" class="{{ request()->routeIs('admin.premium-brands.*') ? 'active' : '' }}"><i class="fa-solid fa-wine-glass"></i> Premium Brands</a></li>
            <li><a href="{{ route('admin.calidon-brands.index') }}" class="{{ request()->routeIs('admin.calidon-brands.*') ? 'active' : '' }}"><i class="fa-solid fa-bottle-droplet"></i> Calidon Brands</a></li>
            <li><a href="{{ route('admin.events.index') }}" class="{{ request()->routeIs('admin.events.*') ? 'active' : '' }}"><i class="fa-solid fa-calendar-days"></i> News & Events</a></li>
            <li><a href="{{ route('admin.about.index') }}" class="{{ request()->routeIs('admin.about.*') ? 'active' : '' }}"><i class="fa-solid fa-images"></i> About Gallery</a></li>
            <li><a href="{{ route('admin.profile.edit') }}" class="{{ request()->routeIs('admin.profile.*') ? 'active' : '' }}"><i class="fa-solid fa-user-gear"></i> Account Profile</a></li>
            <li><a href="{{ route('home') }}" target="_blank"><i class="fa-solid fa-globe"></i> View Website</a></li>
        </ul>
    </aside>

    <!-- Main Wrapper -->
    <div class="main-wrapper">
        <header class="topbar">
            <div style="font-size: 0.95rem; color: #94a3b8;">
                Welcome back, <strong style="color: #f1f5f9;">{{ Auth::user()->name ?? 'Admin' }}</strong>
            </div>
            <div class="user-info">
                @if(Auth::user()->avatar)
                    <img src="{{ asset('uploads/' . Auth::user()->avatar) }}" class="user-avatar" alt="User">
                @else
                    <div class="user-avatar" style="display: flex; align-items: center; justify-content: center; background: #202430; color: #d9aa52; font-weight: bold;">{{ strtoupper(substr(Auth::user()->name ?? 'A', 0, 1)) }}</div>
                @endif
                <form action="{{ route('admin.logout') }}" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit" class="logout-btn"><i class="fa-solid fa-right-from-bracket"></i> Logout</button>
                </form>
            </div>
        </header>

        <main class="content">
            @if(session('success'))
                <div class="alert-success">
                    <i class="fa-solid fa-circle-check"></i> {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div class="alert-danger">
                    <i class="fa-solid fa-triangle-exclamation"></i> {{ session('error') }}
                </div>
            @endif

            @yield('content')
        </main>
    </div>

    @stack('scripts')
</body>
</html>
