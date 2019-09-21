@extends('layouts.app')

@section('content')
    @if(Auth::user()->role_name == 'restaurant')
        <h1>Change your dish</h1>
        <form method="POST" action="{{ url('dishes', $dish->id) }}">
            @csrf
            @method('PATCH')
            <div>
                <label for="name">Name of dish</label>
                <input name="name" type="text" value="{{ $dish->name }}">
            </div>
            <div>
                <label for="price">Price</label>
                <input name="price" type="text" value="{{ $dish->price }}">
            </div>
            <button type="submit">Update item in menu</button>
        </form>
    @else
        <h1>Whoops! Looks like you aren't authorised to view this page...</h1>
    @endif
@endsection
        