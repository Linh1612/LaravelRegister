<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Change Password</title>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>

<body>
    <form method="POST" action="/handleChangePsw">
        <div class="container">
            <h1>Change Password</h1>
            <hr>
            <input type="hidden" value="{{ $id }}" name="id">
            <label for="psw"><b>Your Password</b></label>
            <input type="password" placeholder="Enter Your Password" name="psw" id="psw" required>

            <label for="new-psw"><b>New Password</b></label>
            <input type="password" placeholder="Enter New Password" name="new-psw" id="new-psw" required>

            <label for="new-psw-repeat"><b>Repeat New Password</b></label>
            <input type="password" placeholder="Repeat New Password" name="new-psw-repeat" id="new-psw-repeat" required>
            <hr>

            <button type="submit" class="registerbtn">Change Password</button>
        </div>
        @csrf
    </form>
</body>

</html>
