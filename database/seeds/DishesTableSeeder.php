<?php

use Illuminate\Database\Seeder;

class DishesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dishes')->insert([
            'name' => 'Cauliflower Wings',
            'price' => 14.00,
            'restaurant_id' => 1
        ]);
        DB::table('dishes')->insert([
            'name' => 'Eggplant Parmigiana',
            'price' => 22.00,
            'restaurant_id' => 1
        ]);
        DB::table('dishes')->insert([
            'name' => 'Brunch Burger',
            'price' => 13.00,
            'restaurant_id' => 2
        ]);
        DB::table('dishes')->insert([
            'name' => '(Not) Salmon on Rye',
            'price' => 13.00,
            'restaurant_id' => 2
        ]);
    }
}
