@extends("layouts.theme")
@section("content")
<form method="post" action="/articles">
    @csrf
    <div class="form-group">
        <label>Article Title</label>
        <input type ="text" value="{{ old('title') }}" class="form-control" name="title"></input>
        @if($errors->has("title"))
        <p style="color: red;">{{$errors->first("title")}}</p>
        @endif
    </div>
    <div class="form-group">
        <label>Article Content</label>
        <textarea class="form-control" name="body">{{ old('body') }}</textarea>
        @error("body")
        <p style="color: red;">{{$errors->first("body")}}</p>
        @enderror
    </div>    
    <div class="form-group">
        <button class="btn btn-primary">Save</button>
    </div>
</form>
@endsection