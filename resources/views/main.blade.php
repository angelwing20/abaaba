@extends("layout")
@section('content')

@if (session()->has('message'))
    <script>window.alert("{{ session('message') }}")</script>
@endif
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="/main/create">Create GIG</a>
    <form action="/" method="get">
        <input type="text" name="search">
        <input type="submit">
    </form>
    
    <form action="/" method="get">
        <table>
            <tr>
                <th>Title</th>
                <th>Logo</th>
                <th>Tag</th>
                <th>Company</th>
                <th>Location</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
            @foreach ($search as $searchs)
            <tr>
                <td>{{ $searchs->title }}</td>
                <td><img src="{{ $searchs->logo ? asset("storage/".$searchs->logo) : asset("storage/logos/xAENRmFi2X7rrOZqY1XjgYy3HvQx4oQdmzCxhgsC.jpg") }}" alt=""></td>
                <td><x-list :data='$searchs->tag'/></td>
                <td>{{ $searchs->company }}</td>
                <td>{{ $searchs->location }}</td>
                <td>{{ $searchs->description }}</td>
                <td><a href="{{ route('edit',$searchs->id) }}">Check</a></td>
            </tr>
            @endforeach
        </table>
        <div class="mt-6 p-4">
            {{ $search->links() }}
        </div>
    </form>
</body>
</html>

@endsection
<style>
    table,th,td{
        border:1px solid;
    }
    img{
        width: 200px;
    }
    svg{
        width: 50px;
    }
</style>