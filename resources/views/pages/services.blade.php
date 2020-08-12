@extends('layouts.app')

@section('content')
        <h1>Services</h1>
        <ul>
        @if(count($services) > 0)
                @foreach($services as $service)
                       <li> {{$service}}</li>
                @endforeach
        @endif
        </ul>
@endsection
