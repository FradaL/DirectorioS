<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroups extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
            Schema::create('groups', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('name');
            $table->integer('organization_id')->unsigned();
            $table->timestamps();

            
            $table->foreign('organization_id')->references('id')->on('organizations');
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
    }
}
