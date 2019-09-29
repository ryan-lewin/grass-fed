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
        $orders = Order::all()->where('restaurant_id', $id)->sortByDesc('created_at');
        $orderTotals = 0;
        foreach ($orders as $order) {
            $orderTotals += $order->price;
        }
        $weeklyTotals = [];
        $weeklyOrders = Order::all()->groupBy(function($date) {
            return Carbon::parse($date->created_at)->format('W');
        });
        $date = Carbon::today()->subDays(30);
        $now = Carbon::now()->weekOfYear;
        for($i = $now; $i >= $now - 8; $i--){
            $weekly = 0;
            $week = $weeklyOrders[$i];
            foreach ($week as $item) {
                $weekly += (int)$item->price;
            }
            array_push($weeklyTotals, $weekly);
        }

        return view('restaurant.dashboard', compact('restaurant', 'dishes', 'orders', 'orderTotals',
         'weeklyOrders', 'weeklyTotals', 'now', 'date'));
    }
}
