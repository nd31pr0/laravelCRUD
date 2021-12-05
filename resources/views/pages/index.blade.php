@extends('Layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>Welcome To Laravel!</h1>
        <p>This is the a laravel application developed with assistance from the "Laravel from Scratch"
            youtube series</p>
        <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
        <a class="btn btn-success ben-lg" href="/register" role="button">Register</a></p>
    </div>
@endsection