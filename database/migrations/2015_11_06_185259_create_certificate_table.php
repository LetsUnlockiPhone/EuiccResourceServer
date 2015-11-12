<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCertificateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::dropIfExists('certificate');
    	 
    	Schema::create('certificate', function(Blueprint $table){
    		 
    		$table->increments('certificate_id'); 
    		$table->integer('index');	//int 1 M
    		$table->string('caid');		//OID 1 M
    		$table->string('value');	//hex 1 M
    		$table->unique('certificate_id');
    	});
    	
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('certificate');
    }
}
