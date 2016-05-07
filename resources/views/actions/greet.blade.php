@extends('layouts.master')

@section('content')
    <a href="{{ route('home') }}">Home</a>
    <div class="centered">
        <h1>I Greet {{ $name === null? 'you' : $name }}</h1>
    </div>
@endsection