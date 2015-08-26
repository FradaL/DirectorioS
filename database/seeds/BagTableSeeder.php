<?php

use Illuminate\Database\Seeder;

class BagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //      
         \DB::table('Bags')->insert([
          	'bag' => '132012',
        ]);
    }
}
