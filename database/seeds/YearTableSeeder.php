<?php

use Illuminate\Database\Seeder;

class YearTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('years')->insert([
          	'year' => '2006',
        ]);

        \DB::table('years')->insert([
            'year' => '2007',
        ]);

        \DB::table('years')->insert([
            'year' => '2008',
        ]);

        \DB::table('years')->insert([
            'year' => '2009',
        ]);

        \DB::table('years')->insert([
            'year' => '2010',
        ]);

        \DB::table('years')->insert([
            'year' => '2011',
        ]);

        \DB::table('years')->insert([
            'year' => '2012',
        ]);

        \DB::table('years')->insert([
            'year' => '2013',
        ]);

        \DB::table('years')->insert([
            'year' => '2014',
        ]);

        \DB::table('years')->insert([
            'year' => '2015',
        ]);
    }
}
