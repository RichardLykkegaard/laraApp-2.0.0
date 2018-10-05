@extends('layouts.app')

@section('content')

    <a href="/posts" class="btn btn-warning">Go Back</a>
      <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
          <h1 class="display-4 font-italic">
           
                 {{$post->title}}
              
           </h1>
            <small>Created on {{$post->created_at}}</small>
          {!!$post->body!!}
        </div>
      </div>
        <a href="/posts/{{$post->id}}/edit" class="btn btn-warning btn-lg">Edit</a>


    <form action="{{route('posts.destroy', $post->id)}}"class="pull-right">
    {{ method_field('DELETE') }}
    {!! csrf_field() !!}
    <input type="submit" class="btn btn-danger btn-lg" value="Delete" href="/posts">

    </form>
@endsection