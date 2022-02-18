@extends("layouts.theme")
@section("content")
<form method="post" action="/articles/{{$articleEdit->id}}">
    @csrf
    @method("PUT")
    <div class="form-group">
        <label>Article Title</label>
        <input type ="text" class="form-control" value="{{$articleEdit->title}}" name="title"></input>
    </div>
    <div class="form-group">
        <label>Article Content</label>
        <textarea class="form-control" name="body" > {{$articleEdit->body}}</textarea>
    </div>    
    <div class="form-group">
        <button class="btn btn-primary">Update</button>
    </div>
</form>
@endsection