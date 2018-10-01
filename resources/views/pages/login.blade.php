@extends('layouts.app')

@section('content')
    <h1>Login Page</h1>
    <p>Enter your account information to login</p>


<form class="form-inline">
  <div class="form-group mb-2">
    <label for="username" class="sr-only">Username</label>
    <input type="text" class="form-control" id="username" value="Username">
  </div>
  <div class="form-group mx-sm-3 mb-2">
    <label for="inputPassword2" class="sr-only">Password</label>
    <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary mb-2">Login</button>
</form>
@endsection
