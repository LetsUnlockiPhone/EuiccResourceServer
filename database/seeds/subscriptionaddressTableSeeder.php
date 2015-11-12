<?php

use Illuminate\Database\Seeder;

class subscriptionaddressTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    	for ($eid=0; $eid<100; $eid++){
    	
    		for ($iccid=0; $iccid<3; $iccid++){
    		
		    	DB::table('subscriptionaddress')->insert([
   				 	'iccid' => 'iccid'.$eid.'i'.$iccid,
			    	'msisdn' => '1212551212',
			    	'imsi' => '894512365878',    	
  			  	]);
    		}
    	
    	}
    }
}
