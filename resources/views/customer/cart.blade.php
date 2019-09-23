@extends('layouts.app')

@section('content')
    <h1>Cart</h1>
    @if (session('cart'))
        <?php $total = 0 ?>
        <?php $test = serialize(session('cart')) ?>
        {{-- {{dd($test)}} --}}

        @foreach (session('cart') as $id => $dish)
            <?php $total += $dish['price'] * $dish['quantity'] ?>
            <p>{{ $dish['name'] }} x {{ $dish['quantity'] }}</p>
            <p>Item price: ${{ $dish['price'] * $dish['quantity'] }}</p>
            <form method="POST" action="{{ url('removeFromCart', $id) }}">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        @endforeach
        <h3>Total Price ${{ $total }}</h3>
        <a href="{{ url('purchaseCart') }}">Purchase</a>
    @endif
@endsection