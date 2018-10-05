@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
<a href="/create" class="btn btn-success btn-lg">Create New Post</a>
    @if(count($posts)>0)
        @foreach($posts as $post)
      <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
          <h1 class="display-4 font-italic">
               <a href="{{ route('posts.show', $post->id) }}">
                 {{$post->title}}
              </a>
           </h1>
            <small>Created on {{$post->created_at}}</small>
          <p class="lead my-3">{!!$post->body!!}</p>
        </div>
      </div>
            @endforeach
    @else
        <p>No posts found</p>

    @endif
@endsection