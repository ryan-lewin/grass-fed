@extends('layouts.app')

@section('content')
    @if (Auth::user()->role_name == 'restaurant')
        <div class="d-flex flex-column">
            <div class="card text-center column align-self-center" style="width: 80vw">
                <div class="card-header" style="background-color: #015e03; color: #fff;">
                    <h3 style="color: #fff;">Restaurant Overview</h3>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Total Revenue: ${{ $orderTotals }}</h5>
                    <p class="card-text">Total Sales: {{count($orders)}}</p>
                    <p class="card-text">First Order: {{$orders->last()->created_at->format('F j, Y, g:i a') }}</p>
                    <p class="card-text">{{ $orders->first()->created_at->format('F j, Y, g:i a') }}</p>
                </div>
            {{-- </div> --}}
                <ul class="list-group list-group-flush">
                @foreach ($weeklyTotals as $week)
                    <li class="list-group-item">
                        <h5 class="card-title">Week {{ $now }} of 2019</h5>
                        <p class="card-text">Total Revenue: ${{ $week }}</p>
                    </li>
                    <?php $now-- ?>
                @endforeach
                </ul>
                <div class="card-footer" style="background-color: #015e03; color: #fff;"> 
                    <p>Last updated {{$date->format('F j, Y, g:i a')}}</p>
                </div>
            </div>
        </div>
    @else
        <h1>Whoops! Looks like you aren't authorised to view this page...</h1>
    @endif
@endsection