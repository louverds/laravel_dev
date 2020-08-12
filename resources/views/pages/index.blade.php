@extends('layouts.app')

@section('content')
        <a class="text-success">{{ __('You are logged in!') }}</a>
        <hr>
        <div class="text-center">
        <img src="/img/PinClipartsmoke.png" alt="ANALYSIS LOGO">
        </div>
        <h1 class="text-center">{{$title}}</h1>
                @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                <h5 class="text-center text-primary">Home page for Beginners..</h5>
        
@endsection