<?php

use Illuminate\Database\Seeder;

class profileinfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($eid=0; $eid<100; $eid++){
        	
        	for($iccid=0; $iccid<3; $iccid++){
    	
    			DB::table('profileinfo')->insert([
	 			   	'iccid'   => 'iccid'.strval($eid).'a'.strval($iccid),           //ICCID 1 M
   				 	'isdpaid' => '1',           //AID 1 M
   				 	'mno-id' => 'mno1',            //OID 1 M
   				 	'fallbackAttribute'  =>'N', //boolean 1 M
   				 	'state'	=> 'enabled',          //enum 1 M
   				 	'smdpip' => '1',             //OID 1 C
   				 	'profiletype' => 'type2',       //String 1 O
   				 	'allocatedmemory' => 45000,   //int 1 M
   				 	'freememory' => 25000,         //int 1 C
   				 	'eid' => 'eid'.strval($eid)                //EIDType 1 M    	
 			   	]);
        	}
    	
        }
    }
}
