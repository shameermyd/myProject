@extends('layouts.theme')

@section('content')
<a href="/articles">View all Articles</a>
<h3>{{$articleShow->title}}</h3>
<p>
    {{$articleShow->body}}
</p>
<form method="post" action="/articles/{{$articleShow->id}}">
    @csrf
    @method("DELETE")
    <button onclick="return confirm('Delete,are you sure');" class="btn btn-danger">Delete</button>
</form>
@endsection