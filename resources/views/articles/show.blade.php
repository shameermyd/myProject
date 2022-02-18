@extends('layouts.theme')

@section('content')
<a href="/articles">View all Articles</a>
<h3>{{$articleShow->title}}</h3>
<p>
    {{$articleShow->body}}
</p>
@endsection