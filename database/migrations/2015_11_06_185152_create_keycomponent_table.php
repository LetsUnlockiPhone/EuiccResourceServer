<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKeycomponentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::dropIfExists('keycomponent');
    	 
    	Schema::create('keycomponent', function(Blueprint $table){
    		 
    		$table->increments('keycomponent_id');
    		$table->string('type');
    		$table->string('value');
    		
    		$table->string('key_id');
    		$table->unique('keycomponent_id');
    		
    	});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('keycomponent');
    }
}
