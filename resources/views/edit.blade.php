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
        <form action="{{ route('update',$row->id) }}" method="POST">
            <table>
                @csrf
                @method('PUT')
                <img src="{{ $row->logo ? asset('storage/'.$row->logo) : asset('storage/logos/xAENRmFi2X7rrOZqY1XjgYy3HvQx4oQdmzCxhgsC.jpg') }}" alt="">
                <tr>
                    <th><label for="title">Title</label></th>
                    <td><input type="text" name="title" id="title" value="{{ $row->title }}">
                    @error('title')
                        <p>{{ $message }}</p>
                    @enderror</td>
                </tr>
                <tr>
                    <th><label for="location">Location</label></th>
                    <td><input type="text" name="location" id="location" value="{{ $row->location }}">
                    @error('location')
                        <p>{{ $message }}</p>
                    @enderror</td>
                </tr>
                <tr>
                    <th><label for="website">Website</label></th>
                    <td><input type="text" name="website" id="website" value="{{ $row->website }}">
                    @error('website')
                        <p>{{ $message }}</p>
                    @enderror</td>
                </tr>
                <tr>
                    <th><label for="tag">Tag</label></th>
                    <td><input type="text" name="tag" id="tag" value="{{ $row->tag }}" placeholder="Example:abc,def">
                    @error('tag')
                        <p>{{ $message }}</p>
                    @enderror</td>
                </tr>
                <tr>
                    <th><label for="description">Description</label></th>
                    <td><textarea name="description" id="description" cols="30" rows="10">{{ $row->description }}</textarea>
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
                    <td><input type="submit" value="Edit"></td>
                </tr>      
            </table>  
        </form>   
        <form action="{{ route('delete',$row->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" class="delete" value="Delete">
        </form>
    </center>
</body>
</html>
<style>
    img{
        width: 300px;
    }
    p{
        color: red;
        margin: 0px;
    }
    .delete{
        background-color: red;
        cursor: pointer;
    }
    .delete:hover{
        color: yellow;
    }
</style>