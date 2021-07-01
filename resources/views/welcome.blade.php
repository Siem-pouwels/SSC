@extends('layouts.app')
@section('content')
{{-- <link rel="stylesheet" href="{{asset('css/app.css')}}"> --}}
<nav class="navbar navbar-expand-lg navbar-dark bg-dark m-0">
  {{-- <a class="navbar-brand" href="/"><img src="../storage/static/logo.png" class="logo" alt=""></a> --}}
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  {{-- <img src="../storage/static/logo.png" alt=""> --}}

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <img class="ssc-logo mr-sm-0" :src="'../storage/player_faces/SSC_LOGO.png'" height="50px">
      <li class="nav-item active">
        <router-link class="nav-link" to="/"><div class="gold-nav hoverable">Home</div></router-link>
      </li>
      <li class="nav-item ml-5">
        <router-link class="nav-link" to="/players"><div class="gold-nav hoverable">Top 100 players</div></router-link>
      </li>
      <li class="nav-item">
        <router-link class="nav-link" to="/teambuilder"><div class="gold-nav hoverable">Teambuilder</div></router-link>
      </li>
      <li class="nav-item">
        <router-link class="nav-link" to="/packstore"><div class="gold-nav hoverable">Packstore</div></router-link>
      </li>
      <li class="nav-item mr-sm-0">
        <router-link class="nav-link" to="/collection"><div class="gold-nav hoverable">Collection</div></router-link>
      </li>
      </ul>
      <ul class="navbar-nav">
      @if (Auth::check())
      <li class="nav-item mr-sm-0">
        <router-link class="nav-link" to="/logout"><div class="gold-nav hoverable">Logout</div></router-link>
      </li> 
      @else
      <li class="nav-item mr-sm-0">
        <router-link class="nav-link" to="/login"><div class="gold-nav hoverable">Login</div></router-link>
      </li>
      <li class="nav-item mr-sm-0">
        <router-link class="nav-link" to="/register"><div class="gold-nav hoverable">Register</div></router-link>
      </li>
      @endif
      
    </ul>
    
  </div>
</nav>
<div class="footer">
  <p class="footer-text">&copy;Webgang2.0 SSC</p>
</div>
        <router-view></router-view>

@endsection