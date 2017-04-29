@extends('layouts/layout-parent')
@section('landing')
    <h2 class="transparent-heading">login</h2>
    <form method="POST"
          action="{{url('/auth/login')}}"
          class="my-form">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email"
                   class="form-control"
                   id="email"
                   placeholder="Email"
                   name="email">
            <div class="error">{{ $errors->first('email')}}</div>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">password</label>
            <input type="password"
                   class="form-control"
                   id="password"
                   placeholder="Password"
                   name="password">
            <div class="error">{{ $errors->first('password')}}</div>
        </div>
        <button type="submit"
                class="btn btn-primary">
            Login
        </button>
        <a href="{{url('register')}}"
           class="pull-right">
            Register
        </a>
    </form>

    @include('partials/dependencies/bundle')
@endsection