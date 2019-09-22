@extends('layouts.app')

@section('content')
    <ul>
        @foreach ($orders as $order)
            <li>
                <h3>Order Number: {{ $order->id }}</h3>
                <p>Customer: {{ App\User::find($order->customer_id)->name }}</p>
                <p>Date Ordered: {{ $order->created_at }}</p>
                <p>Dish: {{ App\Dish::find($order->dish_id)->name }}</p>
            </li>
        @endforeach
    </ul>
@endsection