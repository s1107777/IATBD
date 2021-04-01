<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class HuisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('huis')->insert([
            'huis_id'=> '1',
            'userOppas_id' => '1',
            'straatnaam'=> 'Forsythiastraat',
            'huisnummer'=> 35,
            'postcode'=> '2165 CG',
            'woonplaats' => 'Lisserbroek',
            'image'=> '/image/default.JPG',
        ]);
    }
}
