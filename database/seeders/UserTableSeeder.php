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
        DB::table('user')->insert([
            'user_id'=> '1',
            'leeftijd' => 27,
            'email'=> 'user1@hotmail.nl',
            'password' => bcrypt('damion'),
            'role'=> 'Admin',
        ]);
    }
}
