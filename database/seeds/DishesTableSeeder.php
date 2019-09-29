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
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae voluptatum magnam saepe magni, ullam quod veritatis? In cumque necessitatibus nostrum?',
            'image' => 'images/3_cw.jpeg',
            'restaurant_id' => 3
        ]);
        DB::table('dishes')->insert([
            'name' => 'Eggplant Parmigiana',
            'price' => 22.00,
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae voluptatum magnam saepe magni, ullam quod veritatis? In cumque necessitatibus nostrum?',
            'image' => 'images/eggplant.jpeg',
            'restaurant_id' => 3
        ]);
        DB::table('dishes')->insert([
            'name' => 'Brunch Burger',
            'price' => 13.00,
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae voluptatum magnam saepe magni, ullam quod veritatis? In cumque necessitatibus nostrum?',
            'image' => 'images/burger.jpeg',
            'restaurant_id' => 3
        ]);
        DB::table('dishes')->insert([
            'name' => '(Not) Salmon on Rye',
            'price' => 13.00,
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae voluptatum magnam saepe magni, ullam quod veritatis? In cumque necessitatibus nostrum?',
            'image' => 'images/salmon.jpeg',
            'restaurant_id' => 3
        ]);
        DB::table('dishes')->insert([
            'name' => 'Bangers and Mash',
            'price' => 13.00,
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae voluptatum magnam saepe magni, ullam quod veritatis? In cumque necessitatibus nostrum?',
            'image' => 'images/snags.jpeg',
            'restaurant_id' => 3
        ]);
        DB::table('dishes')->insert([
            'name' => 'Veg Pizza',
            'price' => 14.00,
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae voluptatum magnam saepe magni, ullam quod veritatis? In cumque necessitatibus nostrum?',
            'image' => 'images/pizza.jpeg',
            'restaurant_id' => 3
        ]);
        DB::table('dishes')->insert([
            'name' => 'Toastie',
            'price' => 22.00,
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae voluptatum magnam saepe magni, ullam quod veritatis? In cumque necessitatibus nostrum?',
            'image' => 'images/toastie.jpeg',
            'restaurant_id' => 3
        ]);
        DB::table('dishes')->insert([
            'name' => 'Soy Shake',
            'price' => 13.00,
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae voluptatum magnam saepe magni, ullam quod veritatis? In cumque necessitatibus nostrum?',
            'image' => 'images/shake.jpeg',
            'restaurant_id' => 3
        ]);
        DB::table('dishes')->insert([
            'name' => 'Banana Split',
            'price' => 13.00,
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae voluptatum magnam saepe magni, ullam quod veritatis? In cumque necessitatibus nostrum?',
            'image' => 'images/banana.jpeg',
            'restaurant_id' => 3
        ]);
        DB::table('dishes')->insert([
            'name' => 'Fried Rice',
            'price' => 13.00,
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae voluptatum magnam saepe magni, ullam quod veritatis? In cumque necessitatibus nostrum?',
            'image' => 'images/rice.jpeg',
            'restaurant_id' => 3
        ]);

        DB::table('dishes')->insert([
            'name' => 'Cauliflower Wings',
            'price' => 14.00,
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae voluptatum magnam saepe magni, ullam quod veritatis? In cumque necessitatibus nostrum?',
            'image' => 'images/3_cw.jpeg',
            'restaurant_id' => 4
        ]);
        DB::table('dishes')->insert([
            'name' => 'Eggplant Parmigiana',
            'price' => 22.00,
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae voluptatum magnam saepe magni, ullam quod veritatis? In cumque necessitatibus nostrum?',
            'image' => 'images/eggplant.jpeg',
            'restaurant_id' => 4
        ]);
        DB::table('dishes')->insert([
            'name' => 'Brunch Burger',
            'price' => 13.00,
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae voluptatum magnam saepe magni, ullam quod veritatis? In cumque necessitatibus nostrum?',
            'image' => 'images/burger.jpeg',
            'restaurant_id' => 4
        ]);
        DB::table('dishes')->insert([
            'name' => '(Not) Salmon on Rye',
            'price' => 13.00,
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae voluptatum magnam saepe magni, ullam quod veritatis? In cumque necessitatibus nostrum?',
            'image' => 'images/salmon.jpeg',
            'restaurant_id' => 4
        ]);
        DB::table('dishes')->insert([
            'name' => 'Bangers and Mash',
            'price' => 13.00,
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae voluptatum magnam saepe magni, ullam quod veritatis? In cumque necessitatibus nostrum?',
            'image' => 'images/snags.jpeg',
            'restaurant_id' => 4
        ]);
        DB::table('dishes')->insert([
            'name' => 'Veg Pizza',
            'price' => 14.00,
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae voluptatum magnam saepe magni, ullam quod veritatis? In cumque necessitatibus nostrum?',
            'image' => 'images/pizza.jpeg',
            'restaurant_id' => 4
        ]);
        DB::table('dishes')->insert([
            'name' => 'Toastie',
            'price' => 22.00,
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae voluptatum magnam saepe magni, ullam quod veritatis? In cumque necessitatibus nostrum?',
            'image' => 'images/toastie.jpeg',
            'restaurant_id' => 4
        ]);
        DB::table('dishes')->insert([
            'name' => 'Soy Shake',
            'price' => 13.00,
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae voluptatum magnam saepe magni, ullam quod veritatis? In cumque necessitatibus nostrum?',
            'image' => 'images/shake.jpeg',
            'restaurant_id' => 4
        ]);
        DB::table('dishes')->insert([
            'name' => 'Banana Split',
            'price' => 13.00,
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae voluptatum magnam saepe magni, ullam quod veritatis? In cumque necessitatibus nostrum?',
            'image' => 'images/banana.jpeg',
            'restaurant_id' => 4
        ]);
        DB::table('dishes')->insert([
            'name' => 'Fried Rice',
            'price' => 13.00,
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae voluptatum magnam saepe magni, ullam quod veritatis? In cumque necessitatibus nostrum?',
            'image' => 'images/rice.jpeg',
            'restaurant_id' => 4
        ]);
    }
}
