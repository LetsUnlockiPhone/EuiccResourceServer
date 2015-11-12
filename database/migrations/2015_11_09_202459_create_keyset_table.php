<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKeysetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::dropIfExists('keyset');
    	 
    	Schema::create('keyset', function(Blueprint $table){
    		
    		$table->increments('keyset_id');
    		$table->integer('version');
    		$table->string('type');
    		$table->string('cntr');
    		
    		$table->string('sd_id');
    		$table->unique('keyset_id');
    	});
    		 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('keyset');
    }
}
