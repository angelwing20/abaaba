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
        <form action="/main" method="POST" enctype="multipart/form-data">
            @csrf
            <h1>Create a GIG</h1>
            <table>
                <tr>
                    <th><label for="title">Title</label></th>
                    <td><input type="text" name="title" id="title">
                    @error('title')
                        <p>{{ $message }}</p>
                    @enderror</td>
                </tr>
                <tr>
                    <th><label for="company">Company</label></th>
                    <td><input type="text" name="company" id="company">
                    @error('company')
                        <p>{{ $message }}</p>
                    @enderror</td>
                </tr>
                <tr>
                    <th><label for="location">Location</label></th>
                    <td><input type="text" name="location" id="location">
                    @error('location')
                        <p>{{ $message }}</p>
                    @enderror</td>
                </tr>
                <tr>
                    <th><label for="website">Website</label></th>
                    <td><input type="text" name="website" id="website">
                    @error('website')
                        <p>{{ $message }}</p>
                    @enderror</td>
                </tr>
                <tr>
                    <th><label for="email">Email</label></th>
                    <td><input type="email" name="email" id="email">
                    @error('email')
                        <p>{{ $message }}</p>
                    @enderror</td>
                </tr>
                <tr>
                    <th><label for="tag">Tag</label></th>
                    <td><input type="text" name="tag" id="tag" placeholder="Example:abc,def">
                    @error('tag')
                        <p>{{ $message }}</p>
                    @enderror</td>
                </tr>
                <tr>
                    <th><label for="description">Description</label></th>
                    <td><input type="text" name="description" id="description">
                    @error('description')
                        <p>{{ $message }}</p>
                    @enderror</td>
                </tr>
                <tr>
                    <th><label for="logo">Company Logo</label></th>
                    <td><input type="file" name="logo" id="logo"></td>
                </tr>
                <tr>
                    <th><a href="/"><button type="button">Back</button></a></th>
                    <td><input type="submit"></td>
                </tr>
            </table>           
        </form>
    </center>
</body>
</html>
<style>
    p{
        color: red;
        margin: 0px;
    }
</style>