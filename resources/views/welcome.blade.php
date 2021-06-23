@extends('layouts.app')
@section('content')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark m-0">
  <a class="navbar-brand" href="/"><img src="{{url('public/static/logo.png')}}" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"><div class="gold-nav hoverable">Home</div><span class="sr-only gold-nav">(current)</span></a>
      </li>
      <li class="nav-item ml-5">
        <router-link class="nav-link" to="/players"><div class="gold-nav hoverable">Players</div></router-link>
      </li>
      <li class="nav-item">
        <router-link class="nav-link" to="/teambuilder"><div class="gold-nav hoverable">Teambuilder</div></router-link>
      </li>
      <li class="nav-item">
        <router-link class="nav-link" to="/packstore"><div class="gold-nav hoverable">Packstore</div></router-link>
      </li>
      <li class="nav-item mr-sm-0">
        <router-link class="nav-link" to="/login"><div class="gold-nav hoverable">Login</div></router-link>
      </li>
    <li class="nav-item mr-sm-0">
      <router-link class="nav-link" to="/register"><div class="gold-nav hoverable">Register</div></router-link>
    </li>
    </ul>
    
  </div>
</nav>
        <router-view></router-view>
        
@endsection