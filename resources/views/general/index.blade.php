@extends('layouts.app')

@section('content')
    <h1>Restaurants</h1>
    <ul class='list-group'>
        @foreach ($restaurants as $restaurant)
        <li class='list-group-item'>
            <a href="{{ url('dishes', $restaurant->id) }}">{{ $restaurant->name }}</a>
        </li>
        @endforeach
    </ul>
    <h2>What's hot this month</h2>
        <ul class='list-group'>
            @foreach ($dishNames as $dish)
                <li class='list-group-item'>
                    {{ $dish }}
                </li>
            @endforeach
        </ul>
@endsection