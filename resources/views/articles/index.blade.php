@extends("layouts.theme")
@section("content")

@foreach($article as $articles)
    <div class="news_box">
        <h3>{{$articles->title}}</h3>
        <p class="post_info">{{$articles->body}}<strong> From Database</strong></p>
    </div>
@endforeach    
@endsection