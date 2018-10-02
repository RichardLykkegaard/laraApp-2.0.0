@extends('layouts.app')

@section('content')

    <a href="/posts" class="btn btn-warning">Go Back</a>
      <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
          <h1 class="display-4 font-italic">
           
                 {{$post->title}}
              
           </h1>
            <small>Created on {{$post->created_at}}</small>
          <p class="lead my-3">{!!$post->body!!}</p>
        </div>
      </div>
@endsection