@foreach($fruits as $fruit)
    <a href="/search/{{ $fruit->id }}">{{ $fruit->title }}</a><br>
@endforeach