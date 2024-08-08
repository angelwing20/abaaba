@props(['data'])

@php
    $list= explode(',',$data)
@endphp

@foreach ($list as $lists)
    <input type="submit" name="tag" value="{{ $lists }}">
@endforeach
