<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePol2ruleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::dropIfExists('pol2rule');
    	 
    	Schema::create('pol2rule', function(Blueprint $table){
			$table->increments('pol2rule_id');
			$table->string('iccid');
			
			$table->string('subject');
			$table->string('action');
			$table->string('qualification');
			
			$table->unique('pol2rule_id');
    		
    	});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pol2rule');
    }
}
