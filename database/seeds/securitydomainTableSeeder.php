<?php

use Illuminate\Database\Seeder;

class securitydomainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    	for ($eid=0; $eid<0; $eid++){
    		
    		DB::table('securitydomain')->insert([

    			'securitydomain_id' => $eid,
    			'aid' => str_random(10),	//AID 1 M
    			'tars' => str_random(10),//tar 1-N
    			'sin' => str_random(10),//hex 1 M
    			'sdin' => str_random(10), //hex 1 M
    			'role' => 'ISDR', //enum ECASD or ISDR
    			'eid' => 'eid'.strval($eid)
    			
    		]);	
    			
    		}
    
    	
    }
}
