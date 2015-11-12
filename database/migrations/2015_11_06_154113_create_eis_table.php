<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
    	if (Schema::hasTable('eis')){
    		
    		Schema::drop('eis');	
    	}
    	
    	Schema::create('eis', function (Blueprint $table) {
            $table->string('eid');                //EID 1 M
            $table->string('eumid');              //OID 1 M
            $table->dateTime('productiondate');   //Datetime 1 M
            $table->string('platformtype');	      //string 1 M
            $table->string('platformversion');    //version 1 M
            $table->integer('remainingmemory');	  //integer 1 M
            $table->integer('availablememoryforprofiles'); //integer 1 M
            $table->date('lastauditdate');        //date 1 O
            $table->string('smsrid');             //OID 1 M
            $table->string('isdploadfileaid');    //AID 1 M
            $table->string('isdpmoduleaid');      //AID 1 M
            $table->string('eumcertificateid');   //string 1 M
            $table->string('signaturealgorithm'); //enumerated as per RFC4051 1 M
            $table->string('signature');          //bytes 1 M
            //profiles   profile 1..N M
            //ISDR		securitydomain 1 M
            //ECAS      securitydomain 1 M 
            //euicccapabilities  euicccapbilities 1 M
            //audittrail   audittrail 0..N M
            $table->timestamps();
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
        Schema::drop('eis');
    }
}
