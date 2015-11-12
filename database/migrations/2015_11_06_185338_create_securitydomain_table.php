<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSecuritydomainTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        
    	Schema::dropIfExists('securitydomain');
    	 
    	Schema::create('securitydomain', function(Blueprint $table){

    		$table->increments('securitydomain_id');
    		$table->string('aid'); 	//AID 1 M
    		$table->string('tars'); //tar 1-N 
    		$table->string('sin'); //hex 1 M
    		$table->string('sdin'); //hex 1 M
    		$table->string('role'); //enum ECASD or ISDR
    		$table->string('eid');
    		//keyset 1...127 M
    		$table->unique('securitydomain_id');
    		
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
