@extends('master')
@section('title', 'Welcome Page')
@section('content')

    Hello {{$foo}}
    <ul>
        @foreach($company as $tassk)
            <li>{{ $tassk }}</li>
        @endforeach
    </ul>

@endsection
