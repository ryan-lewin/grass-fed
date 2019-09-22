@extends('layouts.app')

@section('content')
    <h1>{{ $restaurant[0]->name }}</h1>

    @foreach ($dishes as $dish)
        <p>{{ $dish->name }}</p>
        <p>${{ $dish->price }}</p>
        @auth
            @if(Auth::user()->role_name == 'customer')
                <a href="{{ url('addToCart/'.$dish->id) }}">Add to cart</a>
            @endif
        @endauth
    @endforeach

@endsection