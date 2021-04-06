<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB; 
class AanvraagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('aanvraag')->insert([
            'aanvraag_id'=> '1',
            'naam' => 'Marcel',
            'naamDier' => 'Lion',
            'vraag'=> 'test test test',
        ]);
    }
}
