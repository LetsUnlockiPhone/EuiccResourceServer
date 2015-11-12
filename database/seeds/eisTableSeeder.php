<?php

use Illuminate\Database\Seeder;

class eisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for($i=0;$i<100;$i++){
    	
    		DB::table('eis')->insert([
 		   		'eid' => 'eid'.strval($i),		//EID	1	M
   		 		'eumid'=> str_random(10),		//OID	1	M
   		 		'productiondate' => time(),	//Datetime 1 M
   		 		'platformtype' => str_random(10),	//string 1 M
 		   		'platformversion' => str_random(10), //version 1 M
	    		'remainingmemory'=> 40,	//integer 1 M
   		 		'availablememoryforprofiles' => 70, //integer 1 M
   		 		'lastauditdate' => time(), //date 1 O
  		  		'smsrid'=>str_random(10),  //OID 1 M
  		  		'isdploadfileaid' =>str_random(10), //AID 1 M
   		 		'isdpmoduleaid' =>str_random(10),  //AID 1 M
   		 		'eumcertificateid'=>str_random(10), //string 1 M
   		 		'signaturealgorithm' => str_random(10), //enumarated as per RFC4051 1 M
   		 		'signature' =>str_random(10) //bytes 1 M
   		 	]);
    	
    		
    	}
    }
}
