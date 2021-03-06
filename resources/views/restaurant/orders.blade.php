@extends('layouts.app')

@section('content')
    @if(Auth::user()->role_name == 'restaurant')
        <div class="d-flex flex-column">
            @if (count($orders) > 0)
                @foreach ($orders as $order)
                    <?php $order_dishes = unserialize($order->order_details) ?> 
                    <div class="card text-center column align-self-center" style="width: 80vw">
                        <div class="card-header" style="background-color: #015e03; color: #fff;">
                            <strong>Order # {{ $order->id }}</strong> 
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ App\User::find($order->customer_id)->name }}</h5>
                            @foreach ($order_dishes as $dish)
                                <p class="card-text">{{ $dish['name'] }} x {{$dish['quantity']}} : $ {{$dish['price']*$dish['quantity']}}</p>
                            @endforeach
                        </div>
                        <div class="card-footer text-muted">
                            Date Ordered: {{ $order->created_at->format('F j, Y, g:i a') }}
                        </div>
                    </div>
                @endforeach
            @else
                <div class="card text-center column align-self-center" style="width: 80vw">
                    <div class="card-header" style="background-color: #015e03; color: #fff;">
                        <strong>It looks like you're yet to recieve an order...</strong> 
                    </div>
                </div>
            @endif

        </div>
    @else
        <h1>Whoops! Looks like you aren't authorised to view this page...</h1>
    @endif    
@endsection