@extends('layouts.app')

@section('content')
    <h1>Welcome back {{ $restaurant[0]->name }}</h1>
    <h3>Restaurant Overview</h3>
    <p>Total Sales: {{count($orders)}}</p>
    <p>Total Revenue: ${{ $orderTotals }}</p>
    <p>First Order: {{$orders->last()->created_at->format('F j, Y, g:i a') }}</p>
    <p>Last Order: {{ $orders->first()->created_at->format('F j, Y, g:i a') }}</p>

    <hr>

    <h3>Weekly Performance</h3>
    @foreach ($weeklyTotals as $week)
        <p>Week {{ $now }} of 2019</p>
        <p>Sales: ${{ $week }}</p>
        <?php $now-- ?>
        <hr>
    @endforeach
@endsection