<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Eastern Distilleries</title>

    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        body { background: #0b0d13; color: #e2e8f0; display: flex; align-items: center; justify-content: center; min-height: 100vh; }
        .login-card { width: 100%; max-width: 400px; background: #161922; border: 1px solid #232733; border-radius: 10px; padding: 35px 30px; box-shadow: 0 10px 25px rgba(0,0,0,0.5); }
        .logo-area { text-align: center; margin-bottom: 25px; }
        .logo-area img { height: 50px; margin-bottom: 12px; }
        .logo-area h2 { color: #d9aa52; font-size: 1.3rem; font-weight: 600; }
        .form-group { margin-bottom: 20px; }
        .form-group label { display: block; margin-bottom: 8px; font-size: 0.9rem; color: #cbd5e1; }
        .input-wrapper { position: relative; }
        .input-wrapper i { position: absolute; left: 14px; top: 50%; transform: translateY(-50%); color: #64748b; }
        .form-control { width: 100%; padding: 12px 14px 12px 42px; background: #0f1117; border: 1px solid #2e3444; border-radius: 6px; color: #fff; font-size: 0.95rem; }
        .form-control:focus { outline: none; border-color: #d9aa52; }
        .btn-submit { width: 100%; padding: 12px; background: #d9aa52; color: #000; font-weight: bold; border: none; border-radius: 6px; cursor: pointer; font-size: 1rem; margin-top: 10px; transition: 0.2s; }
        .btn-submit:hover { background: #c59740; }
        .alert-error { background: #991b1b; color: #fca5a5; padding: 10px 14px; border-radius: 6px; margin-bottom: 20px; font-size: 0.85rem; }
    </style>
</head>
<body>

    <div class="login-card">
        <div class="logo-area">
            <img src="{{ asset('img/EDFI LOGO.png') }}" alt="EDFI">
            <h2>Control Panel Login</h2>
        </div>

        @if($errors->any())
            <div class="alert-error">
                <i class="fa-solid fa-triangle-exclamation"></i> {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ route('admin.login.submit') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="username">Username / Email</label>
                <div class="input-wrapper">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" id="username" name="username" class="form-control" placeholder="Enter username" required value="{{ old('username') }}">
                </div>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <div class="input-wrapper">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Enter password" required>
                </div>
            </div>

            <button type="submit" class="btn-submit">Login <i class="fa-solid fa-arrow-right-to-bracket"></i></button>
        </form>
    </div>

</body>
</html>
