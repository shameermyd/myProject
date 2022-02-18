@extends("layouts.theme")
@section("content")
<form method="post" action="/articles">
    @csrf
    <div class="form-group">
        <label>Article Title</label>
        <input type ="text" class="form-control" name="title"></input>
    </div>
    <div class="form-group">
        <label>Article Content</label>
        <textarea class="form-control" name="body"></textarea>
    </div>    
    <div class="form-group">
        <button class="btn btn-primary">Save</button>
    </div>
</form>
@endsection