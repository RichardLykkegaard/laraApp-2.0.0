@extends('layouts.app')

@section('content')
    <h1>Register</h1>
    <p>Create a new user</p>
    <p>
        <a class="btn btn-warning btn-lg" href="/register" role="button">Register</a>
    </p>
<div class="form-check">
  <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
</div>
<div class="form-check">
  <input class="form-check-input position-static" type="radio" name="blankRadio" id="blankRadio1" value="option1" aria-label="...">
</div>
@endsection
