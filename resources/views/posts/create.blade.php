@extends('layouts.app')

@section('content')
    <h1>Create Posts</h1>
    {!! Form::open(['action' => 'PostsController@store','method' => 'Post']) !!}
    <!--Subject Title of the post -->
    <div class="form-group">
        {{Form::label('title','Title')}}
        {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
    </div>
    <!--Body create remarks of the post -->
    <div class="form-group">
        {{Form::label('body','Body')}}
        {{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
    </div>
    <!--Submit button of the post -->
    {{Form::submit('Submit', ['class' => 'btn-btn-primary'])}}
    {!! Form::close() !!}
    <div>
    <a href="/posts" class="btn btn-default">Cancel</a>
    </div>
@endsection