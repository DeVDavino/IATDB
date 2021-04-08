<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class RequestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('question')->insert([
            'user_id' => 1,
            'phone_number' => "0636418677",
            'name' => "Davina",
            'email' => 'rijsdijk.j@hsleiden.nl',
            'description' => "Ik wil graag op je dieren opassen",
            'Accepted' => true,
        ]);
    }
}
