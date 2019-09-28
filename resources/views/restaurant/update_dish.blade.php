@extends('layouts.app')

@section('content')
    @if(Auth::user()->role_name == 'restaurant')
        <div class='d-flex flex-column'>
            <h1 class='align-self-center'>Update {{$dish->name}}</h1>
            <form class='align-self-center' method="POST" action="{{ url('dishes', $dish->id) }}" enctype="multipart/form-data" style="max-width: 1200px; min-width: 50vw;">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="name">Name of dish</label>
                    <input class='form-control' name="name" type="text" value='{{ $dish->name }}'>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input class='form-control' name="price" type="text" value="{{ $dish->price }}">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class='form-control' name="description">{{ $dish->description }}"</textarea>
                </div>
                {{-- <div class="form-group">
                    <label for="image">Please upload image file</label>
                    <input class='form-control-file' type="file" name="image">
                </div> --}}
                <button class="btn btn-success" type="submit">Update dish</button>
            </form>
        </div>
    @else
        <h1>Whoops! Looks like you aren't authorised to view this page...</h1>
    @endif
@endsection

    {{-- <h1>Change your dish</h1>
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
    </form> --}}