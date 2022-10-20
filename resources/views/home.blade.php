@extends('layouts.app')

@section('content')
<div class="container text-center">
  <br>
  @if ($message = Session::get('logout'))
  <div class="alert alert-success alert-block">
    <strong>{{ $message }}</strong>
  </div>
  @endif
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
    @auth
      <h1 class="display-3">Hi! <br><b>{{ Auth::user()->name }}</b></h1>
    @endauth
    @guest
      <h1 class="display-3">Hi!</h1>
    @endguest
      <h2 class="display-6">Welcome to my portfolio page</h2>
      <p class="lead">Hello, I am Ridha Fauziyya Rahma. This Webpage contains my portfolio.</p>
    </div>
  </div>
</div>
@endsection


