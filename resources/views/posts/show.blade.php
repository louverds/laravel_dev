@extends('layouts.app')

@section('content')
    <a href="/posts">Go Back</a>
    <h1>{{$post->title}}</h1>
    <p>{{$post->body}}</p>
    <hr>
    <small>Written on {{$post->created_at}}</small>
    <hr>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
    <a class="btn btn-default"
        onclick="event.preventDefault();
        document.getElementById('delete-post').submit();">
        {{ __('Delete') }}
    </a>
    <form id="delete-post" method="post" action="/posts/delete/{{$post->id}}" style="display:none">
        @csrf
    </form>
@endsection