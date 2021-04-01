<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB; 

class HuisdierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('huisdier')->insert([
            'user_id'=> '1',
            'huisdier_id' => '1',
            'naam' => 'Eevee',
            'soort'=> 'konijn',
            'foto' => '/image/default.jpg',
            'leeftijd'=> 4,
            'begin_dag' => '2021-04-30',
            'aantal_dagen' => 3,
            'uurtarief' => 10.50,
        ]);
    }
}
