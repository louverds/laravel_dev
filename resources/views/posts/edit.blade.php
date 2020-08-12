@extends('layouts.app')

@section('content')
    <h1>Edit Posts</h1>
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST']) !!}
    <!--Subject Title of the post -->
    <div class="form-group">
        {{Form::label('title','Title')}}
        {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
    </div>
    <!--Body create remarks of the post -->
    <div class="form-group">
        {{Form::label('body','Body')}}
        {{Form::textarea('body', $post->body, ['class' => 'form-control', 'placeholder' => 'Title'])}}
    </div>
    {{Form::hidden('_method', 'PUT')}}
    <!--Submit button of the post -->
    {{Form::submit('Submit', ['class' => 'btn-btn-primary'])}}
    {!! Form::close() !!}
@endsection