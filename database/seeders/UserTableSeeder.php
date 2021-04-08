<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Admin",
            'email' => 'super_user@admin.nl',
            'phone_number' => '0636418677',
            'password' => bcrypt('laravel'),
            'role' => "Admin",
            
        ]);

        DB::table('users')->insert([
            'name' => "Pelle van Nieuwker",
            'email' => 'pelle_vk@gmail.com',
            'phone_number'=> '0636418677',
            'password' => bcrypt('laravel'),
            'role' => "owner",
            
        ]);

        DB::table('users')->insert([
            'name' => "Jeroen Rijsdijk",
            'email' => 'rijsdijk.j@hsleiden.nl',
            'phone_number'=> '0636418677',
            'password' => bcrypt('laravel'),
            'role' => "caretaker",
            'description' => "Ik wil graag op je dieren opassen",
            'available' => true,
        ]);

        DB::table('users')->insert([
            'name' => "Paula Rijsdijk",
            'email' => 'paula.j@hsleiden.nl',
            'phone_number'=> '0636418677',
            'password' => bcrypt('laravel'),
            'role' => "caretaker",
            'description' => "Ik ben dol op dieren",
            'available' => false,
            'blocked' => false,
        ]);

        DB::table('users')->insert([
            'name' => "Mats",
            'email' => 'mats@hsleiden.nl',
            'phone_number'=> '06364186123',
            'password' => bcrypt('laravel'),
            'role' => "caretaker",
            'description' => "Ewa",
            'available' => false,
            'blocked' => true,
        ]);
    }
}
