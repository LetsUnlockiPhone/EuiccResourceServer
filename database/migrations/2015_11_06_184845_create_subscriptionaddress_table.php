<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubscriptionaddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        if (Schema::hasTable('subscriptionaddress')){
        	
        	Schema::drop('subscriptionaddress');
        }
    	
        Schema::create('subscriptionaddress', function(Blueprint $table) {
			$table->increments('subscriptionaddress_id');
			$table->string('iccid');
			$table->string('msisdn');
			$table->string('imsi');
			$table->unique('subscriptionaddress_id');
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
    	Schema::drop('subscriptionaddress');
    	 
    }
}
