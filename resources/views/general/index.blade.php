@extends('layouts.app')

@section('content')
    <h1>Restaurants</h1>
    <ul>
        @foreach ($restaurants as $restaurant)
        <li><a href="{{ url('dishes', $restaurant->id) }}">{{ $restaurant->name }}</a></li>
        @endforeach
    </ul>
@endsection