@extends('layouts.app')

@section('content')
    <h1>Edit Posts</h1>
<div class="form-group">
    <form action="{{route('posts.update', $post->id)}}" method="post">
    {{ method_field('PUT') }}
    @csrf
    <label for="title">Title</label>
    <input name="title"type="text" class="form-control" value="{{ $post->title }}" placeholder="Title">

    <label for="body">Body</label>

    <textarea class="form-control"name="body" id="article-ckeditor" cols="30" rows="10">{!! $post->body !!}</textarea>

    <br>
    
    <input type="submit" value="Submit" class="btn btn-warning btn-lg">
    <a class="btn btn-warning btn-lg" href="{{ route('posts.show', $post->id) }}" role="button">Cancel</a>
    </form>
</div>
@endsection