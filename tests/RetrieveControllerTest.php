<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RetrieveControllerTest extends TestCase{
	
	function testgetEIS(){
		
		$response = $this->call('GET', '/api/eis/eid/34');
		
		$this->assertEquals(200, $response->status());
		
	}
	
}