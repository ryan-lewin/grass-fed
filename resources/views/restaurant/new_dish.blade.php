@extends('layouts.app')

@section('content')
    @if(Auth::user()->role_name == 'restaurant')
        @if (Auth::user()->approved == 'true')
            <div class='d-flex flex-column'>
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
                <h1 class='align-self-center'>Add a new dish</h1>
                <form class='align-self-center' method="POST" action="/dishes" enctype="multipart/form-data" style="max-width: 1200px; min-width: 50vw;">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name of dish</label>
                        <input class='form-control' name="name" type="text" value="{{ old('name') }}">
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input class='form-control' name="price" type="text" value="{{ old('price') }}">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class='form-control' name="description">{{ old('description') }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="image">Please upload image file</label>
                        <input class='form-control-file' type="file" name="image">
                    </div>
                    <button class="btn btn-success" type="submit">Add to menu</button>
                </form>
            </div>
        @else
            <h1>Sit tight! We are still waiting to approve your account...</h1>
        @endif
    @else
        <h1>Whoops! Looks like you aren't authorised to view this page...</h1>
    @endif
@endsection