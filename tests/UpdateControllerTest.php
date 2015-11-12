<?php
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UpdateControllerTest extends TestCase{

	
	function testupdateProfileState(){
	
		$response = $this->call('PUT', '/api/eis/eid/34/profile/123456/state', ['csrf' => csrf_field()]);
	
		$this->assertEquals(200, $response->status());
	
	}
	
	function testupdateSubscriptionAddress(){
	
		$response = $this->call('PUT', '/api/eis/eid/34/profile/123456/address', ['csrf' => csrf_field()]);
	
		$this->assertEquals(200, $response->status());
	
	}

}