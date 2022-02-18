@extends("layouts.theme")
@section("content")

<a href="articles/create">Add new post</a>
@foreach($article as $articles)
    <div class="news_box">
        <h3><a href="articles/{{$articles->id}}">{{$articles->title}}</a></h3>
        <p class="post_info">{{$articles->body}}<strong> From Database</strong></p>
    </div>
@endforeach    
@endsection