<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/index" method="post">
        @csrf
        <label for="">Name:</label>
        <input type="text" name="name">
        <label for="">Age:</label>
        <input type="text" name="age">
        <input type="submit" name="login" value="Login">
    </form>
</body>
</html>