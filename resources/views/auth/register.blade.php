<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>

<body style="height: 100vh; display: flex; align-items: center; justify-content: center; flex-direction: column">
    <x-SangPenyampai/>
    <form action="{{ route('validate.register') }}" method="post">
        @csrf
        <table align="center">
            <tr>
                <th>name</th>
                <td><input required type="text" name="name" id="name"></td>
            </tr>
            <tr>
                <th>email</th>
                <td><input required type="email" name="email" id="email"></td>
            </tr>
            <tr>
                <th>password</th>
                <td><input required type="text" name="password" id="password"></td>
            </tr>
            <tr>
                <td><a href="{{ route('login') }}">Login</a></td>
                <td><button type="submit">Register</button></td>
            </tr>
        </table>
    </form>
</body>

</html>