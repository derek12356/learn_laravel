@extends('layouts.default')

@section('content')
  @if (Auth::check())
    <div class="row">
      <div class="col-md-8">
        <section class="status_form">
          @include('shared._status_form')
        </section>
        <h4>User Posts</h4>
        <hr>
        @include('shared._feed')
      </div>
      <aside class="col-md-4">
        <section class="user_info">
          @include('shared._user_info', ['user' => Auth::user()])
        </section>
        <section class="stats mt-2">
          @include('shared._stats', ['user' => Auth::user()])
        </section>
      </aside>
    </div>
  @else
  <div class="jumbotron">
    <h1>Hello Laravel</h1>
    <p class="lead">
       <a href="https://learnku.com/courses/laravel-essential-training">Laravel Guide</a>
    </p>
    <p>
      Start From Here
    </p>
    <p>
      <a class="btn btn-lg btn-success" href="{{ route('signup') }}" role="button">Sign Up Now</a>
    </p>
  </div>
  @endif
@stop
