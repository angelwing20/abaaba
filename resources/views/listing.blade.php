@unless (count($listing)==0)
    
@foreach($listing as $listings)  

    <a href="/listing/{{$listings["id"]}}">{{ $listings["title"] }}</a>
    <li>{{ $listings["desc"] }}</li>

@endforeach

@else

<p>No listing found</p>

@endunless