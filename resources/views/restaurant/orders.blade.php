@extends('layouts.app')

@section('content')
    <ul>
        @foreach ($orders as $order)
            <?php $order_dishes = unserialize($order->order_details) ?>
            {{-- {{ dd($order_details) }} --}}
            <li>
                <h3>Order Number: {{ $order->id }}</h3>
                <p>Customer: {{ App\User::find($order->customer_id)->name }}</p>
                <p>Date Ordered: {{ $order->created_at->format('F j, Y, g:i a') }}</p>
                @foreach ($order_dishes as $dish)
                    <p>{{ $dish['name'] }} x {{$dish['quantity']}} : $ {{$dish['price']*$dish['quantity']}}</p>
                @endforeach
                <p>Total ${{ number_format($order['price'], 2) }}</p>

            </li>
        @endforeach
    </ul>
@endsection