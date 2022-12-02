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
    <form method="POST" action="/handleEdit">
        <div class="container">
            <h1>Edit</h1>
            <hr>
            <input type="hidden" value="{{ $item->id }}" name="id">
            <label for="name"><b>Your Name</b></label>
            <input type="text" placeholder="Enter Your Name" name="name" id="name"
                value="{{ $item->name }}" required>

            <label for="age"><b>Your age</b></label>
            <input type="text" placeholder="Enter Your age" name="age" id="age" value="{{ $item->age }}"
                required>

            <label for="address"><b>Your Address</b></label>
            <input type="text" placeholder="Enter your Address" name="address" id="address"
                value="{{ $item->address }}" required>
            <hr>

            <button type="submit" class="registerbtn">Confirm</button>
        </div>
        @csrf
    </form>
</body>

</html>
