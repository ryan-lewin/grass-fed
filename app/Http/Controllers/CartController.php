<?php

namespace App\Http\Controllers;
use App\User;
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

    public function purchaseCart($total){
        $cart = session()->get('cart');
        $order = new Order;
        $order->order_details = serialize(session('cart'));
        $order->price = $total;
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
        $purchaser = User::where('id', '=', Auth::user()->id)->get();
        $name = $purchaser[0]->name;
        $address = $purchaser[0]->address;
        $success = "Thank you for your order $name, it will be delivered to $address.";
        session()->remove('cart');
        return redirect()->back()->with('message', $success);
    }
}