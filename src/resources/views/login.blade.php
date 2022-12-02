<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>
    <form action="/handleLogin" method="post">
        <div class="imgcontainer">
            <img style="width: 100px" src="https://cdn-icons-png.flaticon.com/512/5087/5087579.png" alt="Avatar"
                class="avatar">
        </div>

        <div class="container">
            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <button type="submit">Login</button>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
        </div>

        <div class="container" style="background-color:#f1f1f1">
            <button type="button" class="cancelbtn">Cancel</button>
            <span class="psw">Forgot <a href="#">password?</a></span>
            <a href="{{ route('register') }}">
                <button type="button" style="background-color: aqua">Sign Up</button>
            </a>
        </div>
        @csrf
    </form>
</body>

</html>
