<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class ResponseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Pelle van Nieuwker",
            'email' => 'pelle_vk@gmail.com',
            'phone_number'=> '0636418677',
            'password' => bcrypt('laravel'),
            'role' => "owner",
            
        ]);
    }
}
