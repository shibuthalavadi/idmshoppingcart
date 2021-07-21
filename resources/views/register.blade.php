@extends('master')
@section('content')
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-8">
<form action="/register" method="POST">
@csrf
<div class="form-group">
    <label for="username">UserName</label>
    <input type="text" name="name" class="form-control" id="name" placeholder="User Name">
  </div>
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" name="email" class="form-control" id="email" placeholder="email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
 
  <button type="submit" class="btn btn-default">Register</button>
</form>
            </div>
    </div>
</div>
@endsection

