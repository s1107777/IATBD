<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB; 
class ImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('image')->insert([
            'huis_id' => '1',
            'image'=> '/image/huiskamer1.jpg',
        ]);
        DB::table('image')->insert([
            'huis_id' => '1',
            'image'=> '/image/huiskamer2.jpg',
        ]);
        DB::table('image')->insert([
            'huis_id' => '1',
            'image'=> '/image/huiskamer3.jpg',
        ]); 
    }
}
