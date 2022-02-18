@extends("layouts.theme")
@section("content")
<form>
    <div class="form-group">
        <label>Article Title</label>
        <input type ="text" class="form-control"></input>
    </div>
    <div class="form-group">
        <label>Article Content</label>
        <textarea class="form-control"></textarea>
    </div>    
    <div class="form-group">
        <button class="btn btn-primary">Save</button>
    </div>
</form>
@endsection