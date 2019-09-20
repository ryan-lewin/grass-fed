<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'customer',
            'description' => 'Website customer',
        ]);
        DB::table('roles')->insert([
            'name' => 'restaurant',
            'description' => 'Restaurant partner',
        ]);
        DB::table('roles')->insert([
            'name' => 'admin',
            'description' => 'Website manager',
        ]);
    }
}
