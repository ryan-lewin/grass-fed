@extends('layouts.app')

@section('content')
    @if(Auth::user()->role_name == 'restaurant')
        <div class='d-flex flex-column'>
            <h1 class='align-self-center'>Add a new dish</h1>
            <form class='align-self-center' method="POST" action="/dishes" enctype="multipart/form-data" style="max-width: 1200px; min-width: 50vw;">
                @csrf
                <div class="form-group">
                    <label for="name">Name of dish</label>
                    <input class='form-control' name="name" type="text">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input class='form-control' name="price" type="text">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class='form-control' name="description"></textarea>
                </div>
                <div class="form-group">
                    <label for="image">Please upload image file</label>
                    <input class='form-control-file' type="file" name="image">
                </div>
                <button class="btn btn-success" type="submit">Add to menu</button>
            </form>
        </div>
    @else
        <h1>Whoops! Looks like you aren't authorised to view this page...</h1>
    @endif
@endsection