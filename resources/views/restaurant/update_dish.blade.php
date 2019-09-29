@extends('layouts.app')

@section('content')
    @if(Auth::user()->role_name == 'restaurant')
        @if ($errors->any())                        
            <div class="alert alert-danger alert-dismissible fade show">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
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
                <button class="btn" style="background-color: #015E02; color: #fff" type="submit">Update dish</button>
            </form>
        </div>
    @else
        <h1>Whoops! Looks like you aren't authorised to view this page...</h1>
    @endif
@endsection
