@extends('master')
@section('content')
<h2>This is the login page</h2>
<div class="custom-login">
    <div class="row">
<div class="col-sm-4 col-sm-offset-4">
<form action="/login" method="POST">
    @csrf
  <div class="form-group">
    <label> Email address</label>
    <input type="email" name="email" class="form-control"  placeholder="Enter email">
    <br>
  </div>
  <div class="form-group">
    <label> Password</label>
    <input type="password" name="password" class="form-control"  placeholder="Password">
    <br>
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
</form>
</div>
</div>
</div>
@stop