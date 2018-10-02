@extends('layouts.app')

@section('content')
    <h1>Posts</h1>

    

    <form action="{{route('posts.destroy', $id)}}" method="delete">
    @csrf
        @foreach($posts as $post)
          <h1 class="display-4 font-italic">
           
                 {{$post->title}}
              
           </h1>
        @endforeach
    <br>
    <input type="submit" value="Submit" class="btn btn-warning btn-lg">
    <a class="btn btn-warning btn-lg" href="/pages" role="button">Cancel</a>
    </form>

    
@endsection