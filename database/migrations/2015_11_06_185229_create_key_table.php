<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKeyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::dropIfExists('key');
    	 
    	Schema::create('key', function(Blueprint $table){
    		 
    		$table->increments('key_id');
    		$table->integer('index');
    		$table->string('kcv');
    		// key component 1..N M
    		$table->unique('key_id');
    		
    	});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('key');
    }
}
