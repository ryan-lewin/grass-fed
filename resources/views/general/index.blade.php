@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-around flex-wrap">
        <div>
            <h2 >Restaurants</h2>
            <ul class='list-group' style="width: 45vw;">
                @foreach ($restaurants as $restaurant)
                <li class='list-group-item' style="border-width: 2px; border-color: #015e02; margin-bottom: 1rem; padding: 2rem 2rem">
                    <a style="color: #015e02;" href="{{ url('dishes', $restaurant->id) }}">{{ $restaurant->name }}</a>
                </li>
                @endforeach
            </ul>
        </div>
        <div>
            <h2>Hot this month</h2>
            <ul class='list-group' style="width: 45vw;">
                @foreach ($dishNames as $dish)
                    <li class='list-group-item' style=" border-width: 2px; border-color: #015e02; margin-bottom: 1rem; padding: 2rem 2rem; color: #015e02;">                   
                        {{ $dish }}
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection