@extends('layouts/layout-parent')
@section('landing')
    <h1>Home</h1>
    <a href="{{url('/auth/logout')}}">Logout</a>

    @include('partials/dependencies/bundle')
@endsection