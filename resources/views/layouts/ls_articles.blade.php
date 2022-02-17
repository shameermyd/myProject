@extends("layouts.theme");
@section("post")

@foreach($articles as $article)
    <div class="news_box">
        <h3>{{$article->title}}</h3>
        <p class="post_info">{{$article->body}}<strong> From Database</strong></p>
    </div>
@endforeach    
@endsection