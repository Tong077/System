<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('Login') }}</title>

    <!-- Google Sans Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Google+Sans:wght@400;500;700&display=swap" rel="stylesheet">

    <style>
        body {
            background: #f0f2f5 !important;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            font-family: 'Google Sans', sans-serif;
        }

        .login-container {
            max-width: 400px;
            width: 100%;
            padding: 20px;
        }

        .login-card {
            background: #ffffff;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
            padding: 40px;
            border: 1px solid #eaeaea;
            text-align: center;
        }

        .login-logo {
            width: 80px;
            height: 80px;
            background: #1d9e75;
            border-radius: 20px;
            margin: 0 auto 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 32px;
            font-weight: bold;
        }

        .login-title {
            font-size: 24px;
            font-weight: 500;
            color: #111;
            margin-bottom: 8px;
            margin-top: 0;
        }

        .login-subtitle {
            font-size: 14px;
            color: #666;
            margin-bottom: 30px;
        }

        .form-group {
            text-align: left;
            margin-bottom: 20px;
        }

        .form-label {
            font-size: 13px;
            font-weight: 600;
            color: #555;
            margin-bottom: 6px;
            display: block;
        }

        .form-control-custom {
            width: 100%;
            padding: 12px 15px;
            font-size: 14px;
            border: 1px solid #ddd;
            border-radius: 10px;
            transition: all 0.2s;
            outline: none;
            box-sizing: border-box;
        }

        .form-control-custom:focus {
            border-color: #1d9e75;
            box-shadow: 0 0 0 3px rgba(29, 158, 117, 0.1);
        }

        .btn-login {
            width: 100%;
            padding: 12px;
            background: #1d9e75;
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 15px;
            font-weight: 500;
            cursor: pointer;
            transition: background 0.2s;
            margin-top: 10px;
        }

        .btn-login:hover {
            background: #0f6e56;
        }

        .footer-links {
            margin-top: 20px;
            font-size: 13px;
            color: #888;
        }

        .footer-links a {
            color: #1d9e75;
            text-decoration: none;
            font-weight: 500;
        }

        .error-msg {
            color: #d9534f;
            font-size: 12px;
            margin-top: 5px;
            text-align: left;
        }
    </style>
</head>
<body>

<div class="login-container">
    <div class="login-card">
        <div class="login-logo">
            C
        </div>
        <h1 class="login-title">Welcome Back</h1>
        <p class="login-subtitle">Please enter your details to login</p>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
                <label class="form-label">Email Address</label>
                <input type="email" name="email" class="form-control-custom"
                       value="{{ old('email') }}" required autofocus placeholder="email@example.com">
                @error('email')
                    <div class="error-msg">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control-custom"
                       required placeholder="••••••••">
                @error('password')
                    <div class="error-msg">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group" style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 25px;">
                <div style="display: flex; align-items: center; gap: 8px;">
                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} style="width: 16px; height: 16px;">
                    <label for="remember" style="font-size: 13px; color: #666; cursor: pointer;">Remember me</label>
                </div>
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" style="font-size: 13px; color: #1d9e75; text-decoration: none;">Forgot password?</a>
                @endif
            </div>

            <button type="submit" class="btn-login">Login to Account</button>
        </form>

        <div class="footer-links">
            Don't have an account? <a href="{{ route('register') }}">Sign up</a>
        </div>
    </div>
</div>

</body>
</html>
