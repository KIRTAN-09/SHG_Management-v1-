<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Login</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="container">
        <!-- Left Section (Logo & Text) -->
        <div class="left-section">
            <img src="{{ asset('images/df.jpg') }}" alt="Logo">
            <h1>Deep Jyot Mahila <br> Co. Operative Credit Society Limited</h1>
        </div>

        <!-- Right Section (Login Form) -->
        <div class="right-section">
            <h2>Login</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <label for="email">Your Email</label>
                <input type="email" name="email" id="email" placeholder="Enter your email" required>

                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Enter your password" required>

                <div class="options">
                    <a href="{{ route('password.request') }}">Forgot password?</a>
                </div>

                <button type="submit">Login</button>
            </form>
        </div>
    </div>

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>