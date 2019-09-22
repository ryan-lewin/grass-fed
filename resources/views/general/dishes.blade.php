@extends('layouts.app')

@section('content')
    <h1>{{ $restaurant[0]->name }}</h1>

    @foreach ($dishes as $dish)
        <p>{{ $dish->name }}</p>
        <p>${{ $dish->price }}</p>
        @auth
            @if(Auth::user()->role_name == 'customer')
                <button>Add to cart</button>
            @endif
        @endauth
    @endforeach

@endsection