<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileinfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        
    	Schema::dropIfExists('profileinfo');
    	
    	Schema::create('profileinfo', function(Blueprint $table){

    		$table->string('iccid');              //ICCID 1 M
    		$table->string('isdpaid');            //AID 1 M
    		$table->string('mno-id');             //OID 1 M
    		$table->string('fallbackAttribute');  //boolean 1 M
    		$table->string('state');	          //enum 1 M
    		$table->string('smdpip');             //OID 1 C
    		$table->string('profiletype');        //String 1 O
    		$table->string('allocatedmemory');    //int 1 M
    		$table->string('freememory');         //int 1 C
 	   		//subscriptionaddress 1 M
 	   		//pol2 1 M
    		$table->string('eid');                //EIDType 1 M
    		$table->unique('iccid');
    		
    	});
    	
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('profileinfo');
    }
}
