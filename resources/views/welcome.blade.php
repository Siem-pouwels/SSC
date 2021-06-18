@extends('layouts.app')
@section('content')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<div>
    <router-view></router-view>
</div>
    <div class="container bg-dark">
        hello
    </div>
    <div class="test">saADSSAd</div>
    <div id="app"></div>
    <router-link to='/login' exact>Login</router-link>
    <router-link to='/register'>Register</router-link>
@endsection