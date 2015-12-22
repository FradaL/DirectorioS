<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDirectory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

         Schema::create('directories', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('first_name');
            $table->string('second_name');
            $table->string('first_surname');
            $table->string('second_surname');
            $table->string('address');
            $table->string('email');
            $table->integer('phone');
            $table->integer('cell_phone');
            $table->string('signature');
            $table->integer('institution_id')->unsigned();
            $table->integer('organization_id')->unsigned();
            $table->timestamps();

            $table->foreign('institution_id')->references('id')->on('institutions');

        });
         

    }

    public function down()
    {
        //
        Schema::drop('directories');
    }
}
