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
            'foto640' => '/image/eevee.jpeg',
            'foto1280' => '/image/eevee.jpeg',
            'foto1920' => '/image/eevee.jpeg',
            'leeftijd'=> 4,
            'begin_dag' => '2021-04-30',
            'aantal_dagen' => 3,
            'dagtarief' => 10.50,
            'plaatsnaam' => 'Lisse',
        ]);

        DB::table('huisdier')->insert([
            'user_id'=> '1',
            'huisdier_id' => '2',
            'naam' => 'Lion',
            'soort'=> 'konijn',
            'foto640' => '/image/lion.jpeg',
            'foto1280' => '/image/lion.jpeg',
            'foto1920' => '/image/lion.jpeg',
            'leeftijd'=> 2,
            'begin_dag' => '2021-04-24',
            'aantal_dagen' => 5,
            'dagtarief' => 12.75,
            'plaatsnaam' => 'Lisserbroek',
        ]);

        DB::table('huisdier')->insert([
            'user_id'=> '1',
            'huisdier_id' => '3',
            'naam' => 'Floortje',
            'soort'=> 'hond',
            'foto640' => '/image/Floortje640.jpg',
            'foto1280' => '/image/Floortje1280.jpg',
            'foto1920' => '/image/Floortje1920.jpg',
            'leeftijd'=> 3,
            'begin_dag' => '2021-04-26',
            'aantal_dagen' => 2,
            'dagtarief' => 9.00,
            'plaatsnaam' => 'Lisse',
        ]);

        DB::table('huisdier')->insert([
            'user_id'=> '1',
            'huisdier_id' => '4',
            'naam' => 'Riley',
            'soort'=> 'hond',
            'foto640' => '/image/riley640.jpg',
            'foto1280' => '/image/riley1280.jpg',
            'foto1920' => '/image/riley1920.jpg',
            'leeftijd'=> 7,
            'begin_dag' => '2021-05-02',
            'aantal_dagen' => 5,
            'dagtarief' => 11.00,
            'plaatsnaam' => 'Lisserbroek',
        ]);
    }
}
