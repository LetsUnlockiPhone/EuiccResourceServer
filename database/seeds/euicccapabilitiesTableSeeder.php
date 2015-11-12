<?php

use Illuminate\Database\Seeder;

class euicccapabilitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for($i=0;$i<100;$i++){
    		 
        DB::table('euicccapabilities')->insert([
	
        	'eid' => 'eid'.strval($i), 
        	'cattpsupport' => 'N',
        	'cattpversion' => '',
        	'httpsupport' => 'Y',
        	'httpversion' => '1.0',
        	'securepacketsupport' => 'N',
        	'securepacketversion' => '',
        
        ]);
        
    	}
    }
}
