@extends('layouts.app')

@section('content')
    <h1>Create Posts</h1>
<div class="form-group">
    <form action="{{route('posts.store')}}" method="post">
    @csrf
    <label for="title">Title</label>
    <input name="title"type="text" class="form-control" placeholder="Title">

    <label for="body">Body</label>
    <input type="text" name="body" class="form-control" placeholder="Body">
    <br>
    <input type="submit" value="Submit" class="btn btn-warning">
    </form>
</div>
@endsection