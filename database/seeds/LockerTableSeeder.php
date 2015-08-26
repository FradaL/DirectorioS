<?php

use Illuminate\Database\Seeder;

class LockerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         \DB::table('lockers')->insert([
          	'locker' => 'A40',
        ]);
    }
}
