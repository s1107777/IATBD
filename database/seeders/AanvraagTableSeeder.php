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
            'vraag'=> 'Ik ben geïnteresseerd om op uw huisdier Lion op te passen voor de gewilde datum.',
        ]);

        DB::table('aanvraag')->insert([
            'aanvraag_id'=> '2',
            'naam' => 'Marcel de Jong',
            'naamDier' => 'Riley',
            'vraag'=> 'Ik heb een vraag! Is het een speelse hond of is Riley rustig?',
        ]);
    }
}
