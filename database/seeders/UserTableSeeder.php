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
            'user_id'=> '1',
            'naam' => 'Damion Uijldert',
            'leeftijd' => 27,
            'email'=> 'damion@hotmail.nl',
            'password' => bcrypt('damion'),
            'role'=> 'Admin',
        ]);

        DB::table('users')->insert([
            'user_id'=> '2',
            'naam'=> 'Marcel de Jong',
            'leeftijd'=> 34,
            'email'=> 'mdejong@hotmail.nl',
            'password' => bcrypt('damion'),
            'role'=> 'Gebruiker',
        ]);
    }
}
