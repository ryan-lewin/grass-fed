<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Dish;

class DishesController extends Controller
{
    function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('restaurant.new_dish');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required|unique:dishes|max:50',
            'price' => 'required|numeric|min:0',
            'description' => 'required',
            'image' => 'required'
        ]);
        $image_store = request()->file('image')->store('images', 'public');
        $dish = new Dish;
        $dish->name = $request->input('name');
        $dish->price = $request->input('price');
        $dish->restaurant_id = Auth::user()->id;
        $dish->description = $request->input('description');
        $dish->image = $image_store;
        $dish->save();
        return redirect('/ourDishes/' .Auth::user()->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $restaurant = User::where('id', '=', $id)->get();
        $dishes = Dish::where('restaurant_id', '=', $id)->paginate(5);
        return view('general.dishes', compact('restaurant', 'dishes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dish = Dish::find($id);
        return view('restaurant.update_dish', compact('dish'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate([
            'name' => 'required|max:50',
            'price' => 'required|numeric|min:0',
            'description' => 'required|max:255',
        ]);
        $dish = Dish::find($id);
        $dish->name = $request->input('name');
        $dish->price = $request->input('price');
        $dish->description = $request->input('description');
        $dish->save();
        return redirect('/ourDishes/' .Auth::user()->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dish = Dish::find($id);
        $dish->delete($dish->id);
        return back();
    }
}
