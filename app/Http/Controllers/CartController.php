<?php

namespace App\Http\Controllers;

use App\Dish;
use App\Order;
use App\OrderDish;
use Auth;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart()
    {
        return view('customer.cart');
    }
    public function addToCart($id)
    {
        $dish = Dish::find($id);
        $cart = session()->get('cart');
        if(!$cart){
            $cart = [
                $id => [
                    'name' => $dish->name,
                    'quantity' => 1,
                    'price' => $dish->price,
                    'dish_id' => $dish->id,
                    'restaurant_id' => $dish->restaurant_id
                ]
            ];
            session()->put('cart', $cart);
            return redirect()->back();
        }
        if(isset($cart[$id])){
            $cart[$id]['quantity']++;
            session()->put('cart', $cart);
            return redirect()->back();
        }
        if(reset($cart)['restaurant_id'] != $dish->restaurant_id){
            dd('error');
        }
        $cart[$id] = [
                'name' => $dish->name,
                'quantity' => 1,
                'price' => $dish->price,
                'dish_id' => $dish->id,
                'restaurant_id' => $dish->restaurant_id
        ];
        session()->put('cart', $cart);
        return redirect()->back();        
    }
    
    public function removeFromCart($id){
        if($id) {
            $cart = session()->get('cart');
            if(isset($cart[$id])) {
                if($cart[$id]['quantity'] > 1){
                    $cart[$id]['quantity']--;
                    session()->put('cart', $cart);
                } else{
                    unset($cart[$id]);
                    session()->put('cart', $cart);
                }
            }
            return redirect()->back(); 
        }
    }

    // public function updateCart($quantity)
    // {
    //         $cart = session()->get('cart');
 
    //         $cart[$request->id]["quantity"] = $request->quantity;
 
    //         session()->put('cart', $cart);
 
    //         session()->flash('success', 'Cart updated successfully');
    // }

    public function purchaseCart(){
        $cart = session()->get('cart');

        $order = new Order;
        $order->order_details = serialize(session('cart'));
        $order->customer_id = Auth::user()->id;
        $order->restaurant_id = reset($cart)['restaurant_id'];
        $order->save();

        foreach (session('cart') as $id => $orderedDish) {
            $toAdd = new OrderDish;
            $toAdd->price = $orderedDish['price'];
            $toAdd->quantity = $orderedDish['quantity'];
            $toAdd->dish_id = $orderedDish['dish_id'];
            $toAdd->restaurant_id = $orderedDish['restaurant_id'];
            $toAdd->save();
        }
        session()->remove('cart');
        return redirect()->back();
    }
}

// 'name' => $dish->name,
// 'quantity' => 1,
// 'price' => $dish->price,
// 'dish_id' => $dish->id,
// 'restaurant_id' => $dish->restaurant_id

// $table->increments('order_dish_id');
// $table->float('price');
// $table->integer('order_id');
// $table->integer('dish_id');
// $table->integer('quantity');
// $table->integer('customer_id');
// $table->integer('restaurant_id');
// $table->timestamps();

// $dish = new Dish;
// $dish->name = $request->input('name');
// $dish->price = $request->input('price');
// $dish->restaurant_id = Auth::user()->id;
// $dish->save();
// return redirect('/ourDishes/' .Auth::user()->id);