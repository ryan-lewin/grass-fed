<?php

namespace App\Rules;
use App\Dish;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class UniqueDish implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        // $dish = Dish::where('name', '=', $value);
        // dd($dish);
        // if($dish->count() === 0);
    }

    // ->andWhere('restaurant_id', '=', Auth::user()->id)
        // if(Dish::where('name', '=', $value)->count() == 0);


    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'You already have a dish with that name.';
    }
}
