<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Http\Controllers\Retrievecontroller;

/**
 * A Laravel Test Class to validate RetrieveController
 * 
 * @package    EuiccResourceServer
 * @subpackage Tests
 * @author     github.com/jk204
 *
 */
class RetrieveControllerTest extends TestCase
{
	
	/**
	 * Searches a EIS entry by Eid and Checks if entry found
	 * 
	 */
	function testGetEISNominalbyEid()
	{
		
		// arrange
		$Controller = new RetrieveController;
		
		//act
		$result = $Controller->getEis('all','eid88');
		$decoded = json_decode($result->content());
		
		//assert
		
		$this->assertEquals('eid88', $decoded->eid);
		
	}
	
	/**
	 * Seaches all Profile entries by Eid and checks if 3 entries found
	 */
	function testGetProfile()
	{
		// arrange
		$Controller = new RetrieveController;
		
		//act
		$result = $Controller->getProfile('all','eid98');
		$decoded = json_decode($result->content());
		
		//assert
		$this->assertEquals(3, count($decoded));
		$this->assertEquals('eid98',$decoded[0]->eid);
	}
	
	/**
	 * Retrieves audit trails for a specific eid
	 */
	function testGetAuditTrail()
	{
		// arrange
		$Controller = new RetrieveController;
		
		//act
		$result = $Controller->getAuditTrail('all', 'eid88');
		$decoded = json_decode($result->content());

		//assert
		$this->assertEquals(3,count($decoded));
		$this->assertEquals('eid88',$decoded[0]->eid);
		
	}
	
	/**
	 * Retrieves euicc capabilities
	 */
	function testGetEuiccCapabilities()
	{
		// arrange
		$Controller = new RetrieveController;
		
		//act
		$result = $Controller->getEuiccCapabilities('all','eid98');
		$decoded = json_decode($result->content());
		
		//assert
		$this->assertEquals('eid98', $decoded->eid);
	}
}