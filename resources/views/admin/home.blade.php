<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <style>
    td {width: 300px; height: 50px}
    </style>
</head>
<body>
    <table style="cellspacing:100; border: 1px solid black">
        <thead>
            <td>Username</td>
            <td>Password</td>
        </thead>
        @foreach ($details as $detail)
            <tr>
                <td>{{$detail->email}}</td>
                <td>{{$detail->password}}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>