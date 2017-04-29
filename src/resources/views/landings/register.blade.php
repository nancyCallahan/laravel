@extends('layouts/layout-parent')
@section('landing')
    <h2 class="transparent-heading">Register</h2>
    <form method="POST" action="{{url('/auth/register')}}"  class="my-form">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="firtsname">name</label>
            <input type="text"
                   class="form-control"
                   id="firtsname"
                   placeholder="First name"
                   name="name">
            <div class="error">{{ $errors->first('name')}}</div>
        </div>
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email"
                   class="form-control"
                   id="email"
                   placeholder="Email"
                   name="email">
            <div class="error">{{ $errors->first('email')}}</div>
        </div>
        <div class="form-group">
            <label for="password">password</label>
            <input type="password"
                   class="form-control"
                   id="password"
                   placeholder="Password"
                   name="password">
            <div class="error">{{ $errors->first('password')}}</div>
        </div>
        <button type="submit"
                class="btn btn-primary">
            Register
        </button>
        <a href="{{url('login')}}"
           class="pull-right">
            Login
        </a>
    </form>

    @include('partials/dependencies/bundle')
@endsection