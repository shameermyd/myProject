@extends('layouts.app')
@section("title","About page content")
@section("page_content")
<h2>Details:</h2>
<ul>
    <li>{{$name}}</li>
    <li>{{$address}}</li>
    <li><h5>Services:</h5></li>
    <ol>
        @foreach ($services as $items)
        <li>{{$items}}</li>
        @endforeach
    </ol>
</ul>
@endsection
