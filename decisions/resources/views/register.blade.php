@extends('master')
@section('content')

<h2 class="transparent-heading">Register</h2>
<form method="POST" action="{{url('register')}}"  class="my-form">
    {{ csrf_field() }}
  <div class="form-group">
    <label for="firtsname">First name</label>
    <input type="text" class="form-control" id="firtsname" placeholder="First name" name="firtsname">
    <div class="error">{{ $errors->first('firtsname')}}</div>
  </div>
  <div class="form-group">
    <label for="lastname">First name</label>
    <input type="text" class="form-control" id="lastname" placeholder="Last name" name="lastname">
        <div class="error">{{ $errors->first('lastname')}}</div>
  </div>
   <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" placeholder="Email" name="email">
        <div class="error">{{ $errors->first('email')}}</div>
  </div>
  <div class="form-group">
      <label for="password">password</label>
    <input type="password" class="form-control" id="pasword" placeholder="Password" name="pasword">
        <div class="error">{{ $errors->first('pasword')}}</div>
  </div>
   <button type="submit" class="btn btn-primary">Register</button>
     <a href="{{url('login')}}" class="pull-right">Login</a>
</form>

@endsection