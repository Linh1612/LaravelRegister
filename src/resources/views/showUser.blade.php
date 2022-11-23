<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show User</title>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/table.css') }}">
</head>

<body>

    <table>
        <thead>
            <th>Username</th>
            <th>Create At</th>
        </thead>
        <tbody>
            @foreach ($showall as $item)
                <tr>
                    <td>{{ $item->username }}</td>
                    <td>{{ $item->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
