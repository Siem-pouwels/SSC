@extends('layouts.app')
@section('content')
<div>
    <router-view></router-view>
</div>
    <div class="container bg-dark">
        hello
    </div>
    <div id="app"></div>
    <router-link to='/login' exact>Login</router-link>
    <router-link to='/register'>Register</router-link>
@endsection