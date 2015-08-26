<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('files', function (Blueprint $table) {
            $table->increments('id')->unique();    
            $table->integer('snip')->unique();
            $table->integer('town');
            $table->integer('year');
            $table->integer('numberbag');
            $table->string('locker');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('files');
    }
}
