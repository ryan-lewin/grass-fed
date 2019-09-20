@extends('layouts.app')

@section('content')
    <h1>Restaurants</h1>
    {{-- {{ dd($restaurants) }} --}}
    <ul>
        @foreach ($restaurants as $restaurant)
        <li><a href="{{ url('restaurant', $restaurant->id) }}">{{ $restaurant->name }}</a></li>
        @endforeach
    </ul>
@endsection