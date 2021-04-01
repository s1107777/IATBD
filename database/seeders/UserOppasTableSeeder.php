<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UserOppasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_oppas')->insert([
            'userOppas_id'=> '1',
            'naam'=> 'Marcel de Jong',
            'leeftijd'=> 34,
            'email'=> 'mdejong@hotmail.nl',
            'password' => bcrypt('damion'),
            'role'=> 'Gebruiker',
        ]);
    }
}
