@extends('layouts.app')

@section('content')
    <h1>Welcome back {{ $restaurant[0]->name }}</h1>
    <h3>Restaurant Overview</h3>
    <p>Total Sales: {{count($orders)}}</p>
    <p>Total Revenue: ${{ $orderTotals }}</p>
    <p>First Order: {{$orders[0]->created_at->format('F j, Y, g:i a') }}</p>
    <p>Last Order: {{ $orders[0]->created_at->format('F j, Y, g:i a') }}</p>

    <hr>

    <h3>Weekly Performance</h3>
        @for ($i = 0; $i = $12; $i++)
            
        @endfor
@endsection