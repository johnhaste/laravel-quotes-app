@extends('layouts.master')

@section('content')
    <a href="{{ route('home') }}">Home</a>
    <div class="centered">
        <h1>I {{ $action === null? 'fuck' : $action }} {{ $name === null? 'you' : $name }}</h1>
    </div>
@endsection