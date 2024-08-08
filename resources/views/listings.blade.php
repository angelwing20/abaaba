<h1>{{  $heading  }}</h1>

@unless (count($listings)==0)
    
@foreach($listings as $listing)  

    <a href="/listings/{{$listing["id"]}}">{{ $listing["title"] }}</a>
    <li>{{ $listing["description"] }}</li>

@endforeach

@else

<p>No listing found</p>

@endunless