@extends('master')
@section('content')

<h2 class="transparent-heading">Register</h2>
<form method="POST" action="{{url('register')}}"  class="my-form">
    {{ csrf_field() }}
  <div class="form-group">
    <label for=">firstname">First name</label>
    <input type="text" class="form-control" id="firstname" placeholder="First name" name="firstname">
    <div class="error">{{ $errors->first('firstname')}}</div>
  </div>
  <div class="form-group">
    <label for=">lastname">First name</label>
    <input type="text" class="form-control" id="lastname" placeholder="Last name" name="lastname">
        <div class="error">{{ $errors->first('lastname')}}</div>
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="email" placeholder="Email" name="email">
        <div class="error">{{ $errors->first('email')}}</div>
  </div>
  <div class="form-group">
      <label for="exampleInputEmail1">password</label>
    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
        <div class="error">{{ $errors->first('password')}}</div>
  </div>
   <button type="submit" class="btn btn-primary">Register</button>
     <a href="{{url('login')}}" class="pull-right">Login</a>
</form>

@endsection