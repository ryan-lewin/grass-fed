<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Ryan Lewin',
            'email' => 'ryan@gmail.com',
            'password' => bcrypt('password'),
            'address' => '1 Fake Street Taringa QLD 4068',
            'role_name' => 'customer'
        ]);
        DB::table('users')->insert([
            'name' => 'Natasha Gregory',
            'email' => 'nat@gmail.com',
            'password' => bcrypt('password'),
            'address' => '10 NotReal Street Taringa QLD 4068',
            'role_name' => 'customer'
        ]);
        DB::table('users')->insert([
            'name' => 'Green Canteen',
            'email' => 'admin@greencanteen.com',
            'password' => bcrypt('password'),
            'address' => '12/68 Manning Street South Brisbane 4101',
            'role_name' => 'restaurant'
        ]);
        DB::table('users')->insert([
            'name' => 'Hay Gurl plant-based-eats',
            'email' => 'admin@hargurl.com',
            'password' => bcrypt('password'),
            'address' => 'Shop 2 34 Coonan Street Indooroopilly QLD 4068',
            'role_name' => 'restaurant'
        ]);
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@grassfed.com',
            'password' => bcrypt('password'),
            'address' => '1 Bam Street Indooroopilly QLD 4068',
            'role_name' => 'admin'
        ]);
    }
}
