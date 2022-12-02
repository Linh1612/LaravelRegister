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
    <div style="display: flex; justify-content: space-between;">
        <table>
            <thead>
                <th>Username</th>
                <th>Create At</th>
                <th>Change Password</th>
                <th>Edit</th>
                <th>Delete</th>
            </thead>
            <tbody>
                @foreach ($showall as $item)
                    <tr>
                        <td>{{ $item->username }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td><a href="{{ route('changePassword', ['id' => $item->id]) }}"><button>Change
                                    Password</button></a>
                        </td>
                        <td><a href="{{ route('edit', ['id' => $item->id]) }}"><button>Edit</button></a></td>
                        <td><a href="{{ route('delete', ['id' => $item->id]) }}"><button>Delete</button></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div>
            <a href="{{ route('logout') }}"><button>Logout</button></a>
        </div>
    </div>

</body>

</html>
