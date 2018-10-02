@extends('layouts.app')

@section('content')
    <h1>Create Posts</h1>
<div class="form-group">
    <form action="{{route('posts.store')}}" method="post">
    @csrf
    <label for="title">Title</label>
    <input name="title"type="text" class="form-control" placeholder="Title">

    <label for="body">Body</label>

    <textarea class="form-control"name="body" id="article-ckeditor" cols="30" rows="10"></textarea>

    <br>
    <input type="submit" value="Submit" class="btn btn-warning btn-lg">
    <a class="btn btn-warning btn-lg" href="/pages" role="button">Cancel</a>
    </form>
</div>
@endsection