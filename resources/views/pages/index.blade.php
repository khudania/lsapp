@extends('layouts.app')

@section('content')
<div class="jumbotron text-center bg-light p-4">
    <h1>Welcome To LSAPP</h1>
    <p>This is My First laravel Project</p>
    <p>
        <a href="/login" class="btn btn-primary btn-lg" role="button">Login</a>
        <a href="/register" class="btn btn-success btn-lg" role="button">Register</a>
    </p>
</div>
@endsection  
