@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-primary">Go Back</a>
    <h1>{{$post->title}}</h1>
   
    <div>
        {{$post->body}}
    </div>
    <hr>
    <small>Post Created at: {{$post->created_at}}</small>
@endsection