@extends('layouts.app')

@section('content')
    @if(Auth::user()->role_name == 'restaurant')
        <ul>
            @foreach ($orders as $order)
                <?php $order_dishes = unserialize($order->order_details) ?>
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
    @else
        <h1>Whoops! Looks like you aren't authorised to view this page...</h1>
    @endif    
@endsection