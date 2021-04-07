<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class ReviewSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('review')->insert([
            'naam'=> 'Damion Uijldert',
            'bericht'=> 'Marcel de Jong is een zorgzame oppas geweest voor mijn hond Riley!',
        ]);
    }
}
