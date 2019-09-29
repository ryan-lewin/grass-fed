@extends('layouts.app')

@section('content')
    @if(session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session()->get('message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    @if (Auth::user()->role_name == 'customer')
        <div class="d-flex flex-column">
            <div class="card text-center column align-self-center" style="width: 80vw">
                <div class="card-header">
                    <h1>Cart</h1>
                </div>
                @if (session('cart'))
                    <?php $total = 0 ?>
                    <?php $test = serialize(session('cart')) ?>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            @foreach (session('cart') as $id => $dish)
                            <?php $total += $dish['price'] * $dish['quantity'] ?>
                            <li class="list-group-item">
                                <p>{{ $dish['name'] }} x {{ $dish['quantity'] }}</p>
                                <p>Item price: ${{ $dish['price'] * $dish['quantity'] }}</p>
                                <form method="POST" action="{{ url('removeFromCart', $id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class='btn btn-danger' type="submit">Delete</button>
                                </form>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="card-footer">
                        <h3>Total Price ${{ $total }}</h3>
                        <a class='btn btn' style="background-color: #015E02; color: #fff" href="{{ url('purchaseCart', $total) }}">Purchase</a>
                    </div>
                @else
                    <div class="card-body">
                        <p>Looks like your cart is empty...</p>
                    </div>
                @endif 
            </div>       
        </div>
    @endif

@endsection