<?php
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class StoreControllerTest extends TestCase{

	function testaddProfile(){
	
		$x = csrf_field();
		
		
		$response = $this->call('POST', '/api/eis/eid/34/profile');
	
		$this->assertEquals(200, $response->status());
	
	}
	
	function testaddAuditTrail(){

		$response = $this->call('POST', '/api/eis/eid/34/audittrail');

		$this->assertEquals(200, $response->status());

	}
	
	function testaddEIS(){
	
		$response = $this->call('POST', '/api/eis');
	
		$this->assertEquals(200, $response->status());
	
	}


}