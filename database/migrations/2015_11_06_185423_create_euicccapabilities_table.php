<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEuicccapabilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::dropIfExists('euiccapabilities');
    	 
    	Schema::create('euicccapabilities', function(Blueprint $table){
    		 $table->string('eid');
    		 $table->boolean('cattpsupport');
    		 $table->string('cattpversion');
    		 $table->boolean('httpsupport');
    		 $table->string('httpversion');
    		 $table->boolean('securepacketsupport');
    		 $table->string('securepacketversion');
    		 $table->unique('eid');
    	});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('euicccapabilities');
    }
}
