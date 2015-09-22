<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePivotOrganizationAndDirectory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
            Schema::create('directories_organizations', function (Blueprint $table) {
            $table->integer('directory_id')->unsigned();
            $table->integer('organization_id')->unsigned();


            $table->foreign('directory_id')->references('id')->on('directories');
            $table->foreign('organization_id')->references('id')->on('organizations');
        });
    }

    public function down()
    {
        //
        Schema::drop('directories_organizations');
    }
}

