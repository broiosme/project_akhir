<!DOCTYPE html>
<html>
<head>
    <title>Daftar User</title>
</head>
<body>
    <h1>Daftar User</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Address</th>
            <th>Created at</th>
            <th></th>
        </tr>
        @foreach($users as $user)
        <tr>
            <td>{{ $user->user_id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->phone }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->address }}</td>
            <td>{{ $user->created_at }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
