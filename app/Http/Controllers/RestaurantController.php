<?php

namespace App\Http\Controllers;
use App\User;
use App\Dish;
use App\OrderDish;
use Illuminate\Http\Request;
use Carbon\Carbon;

class RestaurantController extends Controller
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
        $restaurants = User::where('role_name', '=', 'restaurant')->get();
        $date = Carbon::today()->subDays(30);
        $dishes = OrderDish::where('created_at', '>=', $date)->get();
        $popularDishes = OrderDish::select('dish_id')->where('created_at', '>=', $date)->groupBy('dish_id')->orderByRaw('COUNT(*) DESC')->limit(5)->get();
        $dishNames = [];
        foreach ($popularDishes as $dish) {
            $name = Dish::where('id', '=', $dish->dish_id)->get();
            array_push($dishNames ,$name->first()->name);
        }

        return view('general.index', compact('restaurants', 'dishNames'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $dishes = Dish::where('restaurant_id', '=', $id)->get();
        return view('restaurant.dishes', compact('restaurant', 'dishes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
