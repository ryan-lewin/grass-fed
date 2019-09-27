<?php

namespace App\Http\Controllers;
use App\User;
use App\Dish;
use App\Order;
use Illuminate\Http\Request;
use Carbon\Carbon;

class RestaurantUserController extends Controller
{
    public function ourDishes($id)
    {
        $restaurant = User::where('id', '=', $id)->get();
        $dishes = Dish::where('restaurant_id', '=', $id)->paginate(5);
        return view('restaurant.dishes', compact('restaurant', 'dishes'));
    }

    public function dashboard($id)
    {
        $restaurant = User::where('id', '=', $id)->get();
        $dishes = Dish::where('restaurant_id', '=', $id)->get();
        $orders = Order::all()->where('restaurant_id', $id);
        $orderTotals = 0;
        foreach ($orders as $order) {
            $orderTotals += $order->price;
        }
        $weeklyTotals = [];
        $weeklyOrders = Order::all()->groupBy(function($date) {
            return Carbon::parse($date->created_at)->format('W');
        });
        $now = Carbon::now()->weekOfYear;
        for($i = $now; $i >= $now - 8; $i--){
            $weekly = 0;
            $week = $weeklyOrders[$i];
            foreach ($week as $item) {
                $weekly += (int)$item->price;
            }
            array_push($weeklyTotals, $weekly);
        }

        return view('restaurant.dashboard', compact('restaurant', 'dishes', 'orders', 'orderTotals', 'weeklyOrders', 'weeklyTotals', 'now'));
    }
    
    // /**
    //  * Display a listing of the resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function index()
    // {
    //     //
    // }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show($id)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit($id)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, $id)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id)
    // {
    //     //
    // }
}
