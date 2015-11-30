<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeOfValueSnip extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
 public function up()
    {
            Schema::table('files', function (Blueprint $table) {
            
            $table->dropUnique('files_snip_unique');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('files', function ($table) {
            $table->integer('snip')->unique();
        });
        //
    }
}
