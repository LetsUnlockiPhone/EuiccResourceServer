<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAudittrailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::dropIfExists('audittrail');
    	 
    	Schema::create('audittrail', function(Blueprint $table){
			$table->increments('audittrail_id');
    		$table->string('eid'); //OID 1 M
			$table->string('smsrid'); //OID 1 M
			$table->string('operationdate'); //datetime 1 M
			$table->string('operationtype'); //integer 1 C
			$table->string('requesterid'); //OID 1 C
			$table->string('status'); //executionstatus 1 C
			$table->string('isdpaid'); //AID 1 C 
			$table->string('iccid'); //string 1 C
			$table->string('imei'); //hex 1 C
			$table->string('meid'); //hex 1 C
    		$table->unique('audittrail_id');
    	});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('audittrail');
    }
}
