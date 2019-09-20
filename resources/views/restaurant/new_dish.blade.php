@extends('layouts.app')

@section('content')
    @if(Auth::user()->role_name == 'restaurant')
        <h1>Add a new dish</h1>
        <form method="POST" action="{{ url('dishes') }}">
            @csrf
            <div>
                <label for="name">Name of dish</label>
                <input name="name" type="text">
            </div>
            <div>
                <label for="price">Price</label>
                <input name="price" type="text">
            </div>
            {{-- <input name="restaurant_id" type="hidden" value="{{ Auth::user()->id }}"> --}}
            <button type="submit">Add to menu</button>
        </form>
    @else
        <h1>Whoops! Looks like you aren't authorised to view this page...</h1>
    @endif
@endsection