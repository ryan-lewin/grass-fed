@extends('layouts.app')

@section('content')
    <h1>{{ $restaurant[0]->name }}</h1>

    @foreach ($dishes as $dish)
        <p>{{ $dish->name }}</p>
        <p>${{ $dish->price }}</p>
        @auth
            <button>Add to cart</button>
        @endauth
    @endforeach

@endsection