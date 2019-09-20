@extends('layouts.app')

@section('content')
    {{-- @auth
        <h2>Welcome {{ Auth::user()->name}}</h2>
    @endauth --}}
    <h1>Restaurants</h1>
    <ul>
        @foreach ($restaurants as $restaurant)
        <li><a href="{{ url('dishes', $restaurant->id) }}">{{ $restaurant->name }}</a></li>
        @endforeach
    </ul>
@endsectionß