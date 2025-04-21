<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Create Account</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>
    <div class="wrapper">
        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <form id="loginForm" action="{{ route('login.submit') }}" method="POST">
            @csrf
            <h2>WELCOME</h2>

            <div class="input-field">
                <input type="text" class="form-control" id="username" name="username" required>
                <label>Enter Your Username*</label>
            </div>

            <div class="input-field">
                <input type="email" class="form-control" id="email" name="email" required>
                <label>Enter Your Email*</label>
            </div>

            <div class="input-field">
                <select class="form-label" id="role" name="role" required>
                    <option value="" disabled selected>Choose your role</option>
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                    <option value="Owner">Owner</option>
                </select>
            </div>

            <div class="input-field">
                <input type="password" class="form-control" id="password" name="password" required>
                <label>Enter Your Password*</label>
            </div>

            <button type="submit">Log In</button>

            <div class="register">
                <p>Don't have an account? <a href="{{ route('register') }}">Create Account</a></p>
            </div>
        </form>
    </div>
</body>
</html>
