@extends('layouts.app')

@section('content')
    <h1>Page Creator</h1>
    <p>Login or register to create a page or service</p>
    <p><a class="btn btn-primary btn-lg"href="/pages" role="button">Configure Pages</a>
        <a class="btn btn-warning btn-lg" href="/register" role="button">Login</a>
    </p>
@endsection
