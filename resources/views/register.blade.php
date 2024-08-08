<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>
        <form action="{{ route('store') }}" method="POST">
            @csrf
            <h1>Register Page</h1>
            <table>
                <tr>
                    <th><label for="name">Name:</label></th>
                    <td><input type="text" name="name" id="name" value="{{ old('name') }}">
                    @error('name')
                        <p class="red">{{ $message }}</p>
                    @enderror</td>
                </tr>
                <tr>
                    <th><label for="email">Email:</label></th>
                    <td><input type="email" name="email" id="email" value="{{ old('email') }}">
                    @error('email')
                        <p class="red">{{ $message }}</p>
                    @enderror</td>
                </tr>
                <tr>
                    <th><label for="password">Password:</label></th>
                    <td><input type="password" name="password" id="password">
                    @error('password')
                        <p class="red">{{ $message }}</p>
                    @enderror</td>
                </tr>
                <tr>
                    <th><label for="password_confirmation">Confirm Password:</label></th>
                    <td><input type="password" name="password_confirmation" id="password_confirmation"></td>
                </tr>
                <tr>
                    <th></th>
                    <td><input type="submit" value="Sign Up"><br>
                        <p>Already have an account? <a href="{{ route('login') }}">Login</a></p>
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>
<style>
    .red{
        margin:0px;
        color: red;
    }
</style>