<?php

use Illuminate\Database\Seeder;

class TownTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

         \DB::table('municipalities')->insert([
          	'town' => 'Mazatenango',
        ]);

         \DB::table('municipalities')->insert([
            'town' => 'Cuyotenango',
        ]);

         \DB::table('municipalities')->insert([
            'town' => 'San Francisco',
        ]);

         \DB::table('municipalities')->insert([
            'town' => 'San Bernardino',
        ]);

         \DB::table('municipalities')->insert([
            'town' => 'San José el ídolo',
        ]);

         \DB::table('municipalities')->insert([
            'town' => 'Santo Domingo Suchitepéquez',
        ]);

         \DB::table('municipalities')->insert([
            'town' => 'San Lorenzo',
        ]);

         \DB::table('municipalities')->insert([
            'town' => 'Samayac',
        ]);

         \DB::table('municipalities')->insert([
            'town' => 'San Pablo Jocopilas',
        ]);

         \DB::table('municipalities')->insert([
            'town' => 'San Antonio Such.',
        ]);

         \DB::table('municipalities')->insert([
            'town' => 'San Gabriel',
        ]);

         \DB::table('municipalities')->insert([
            'town' => 'Chicacao',
        ]);

         \DB::table('municipalities')->insert([
            'town' => 'Patulul',
        ]);

         \DB::table('municipalities')->insert([
            'town' => 'Santa Bárbara',
        ]);

         \DB::table('municipalities')->insert([
            'town' => 'San Juan Bautista',
        ]);

         \DB::table('municipalities')->insert([
            'town' => 'Santo Tomás la Union',
        ]);

         \DB::table('municipalities')->insert([
            'town' => 'Zunilito',
        ]);

         \DB::table('municipalities')->insert([
            'town' => 'Pueblo Nuevo',
        ]);

         \DB::table('municipalities')->insert([
            'town' => 'Río Bravo',
        ]);

         \DB::table('municipalities')->insert([
            'town' => 'San José la Máquina',
        ]);

         \DB::table('municipalities')->insert([
            'town' => 'Sin Programación',
        ]);

    }
}
