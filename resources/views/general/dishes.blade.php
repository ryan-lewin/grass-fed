@extends('layouts.app')

@section('content')
    <div class="d-flex flex-column">
        <div>
            <h1 class='d-flex justify-content-around'>{{ $restaurant[0]->name }}</h1>
        </div>
        <div class="d-flex flex-wrap justify-content-around">
            @foreach ($dishes as $dish)
                <div class="row">
                    <div class="">
                        <div class="card" style="width: 16rem; margin-right: 2em;">
                            <div class="card-body">
                                <img class="card-img-top" style="padding-bottom: .5rem;" src="{{ asset('storage/'.$dish->image) }}" alt="product image">
                                <h5 class="card-title">{{ $dish->name }}</h5>
                                <p class="card-text">{{ $dish->description }}</p>
                                <p class='lead'>${{ number_format((float)$dish->price, 2, '.', '') }}</p>
                                @auth
                                    @if(Auth::user()->role_name == 'customer')
                                        <a href="{{ url('addToCart/'.$dish->id) }}" class='btn' style="background-color: #015e03; color: #fff;">Add to cart</a>
                                    @endif
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-around" style="margin-top: 1rem;">
            {{ $dishes->links() }}
        </div>
    </div>

@endsection