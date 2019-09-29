@extends('layouts.app')

@section('content')
    <div class="d-flex flex-column">
        <div class='d-flex justify-content-around' style="margin: 1em 0;">
            <h1>{{ $restaurant[0]->name }}</h1>
        </div>
        <div class="d-flex flex-wrap justify-content-around">
            @foreach ($dishes as $dish)
                    <div class="card" style="width: 16rem; border-color: #015E02; border-width: 2px;">
                        <div class="card-body">
                            <img class="card-img-top" style="padding-bottom: .5rem;" src="{{ asset('storage/'.$dish->image) }}" alt="product image">
                            <h5 class="card-title">{{ $dish->name }}</h5>
                            <p class='lead'>${{ number_format((float)$dish->price, 2, '.', '') }}</p>
                            <div class='d-flex flex-row button-group justify-content-around' role="group" >
                                <a href="/dishes/{{ $dish->id }}/edit" class='btn btn' style="background-color: #015E02; color: #fff">Update</a>
                                <form method="POST" action="{{ url('dishes', $dish->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-around" style="margin-top: 2rem;">
            {{ $dishes->links() }}
        </div>
    </div>
@endsection