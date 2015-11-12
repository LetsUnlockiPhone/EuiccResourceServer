<?php

use Illuminate\Database\Seeder;

class audittrailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($eid=0; $eid<100; $eid++){
        
    		for($at=0; $at<3; $at++){
    		
    			DB::table('audittrail')->insert([
	
    				'eid'	        => 'eid'.$eid,     //OID 1 M
    				'smsrid'	    => '1',            //OID 1 M
    				'operationdate'	=> time(),         //datetime 1 M
    				'operationtype' => 3,              //integer 1 C
    				'requesterid'   => str_random(5),  //OID 1 C
    				'status'	    => '1.7',          //executionstatus 1 C
    				'isdpaid'	    => str_random(10), //AID 1 C
    				'iccid'         => str_random(10), //string 1 C
    				'imei'          => str_random(10), //hex 1 C
    				'meid'          => str_random(10),
    	
    			]);
    		}
    	}
    }
}
