@extends('layouts.app')

@section('content')
    @if(Auth::user()->role_name == 'restaurant')
        <h1>{{ $restaurant[0]->name }}</h1>

        @foreach ($dishes as $dish)
            <p>{{ $dish->name }}</p>
            <p>${{ $dish->price }}</p>
            <a href="/dishes/{{ $dish->id }}/edit">Update</a>
            <form method="POST" action="{{ url('dishes', $dish->id) }}">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        @endforeach
    @else
        <h1>Whoops! Looks like you aren't authorised to be here...</h1>
    @endif
@endsection