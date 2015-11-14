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
	 */
	function testGetEISNominalbyEid()
	{
		
		// arrange
		$Controller = new RetrieveController;
		
		//act
		$result = $Controller->getEis('all','eid98');
		//$this->assertCount(1, $result);
		
	}
	
	/**
	 * Seaches all Profile entries by Eid and checks if 3 entries found
	 */
	function testGetProfile()
	{
		// arrange
		$Controller = new RetrieveController;
		
		//act
		//$result = $Controller->getProfile('all','eid98');
		//$this->assertCount(3, $result);
	}
	
	/**
	 * 
	 */
	function testGetAuditTrail()
	{
		// arrange
		$Controller = new RetrieveController;
		
		//act
		$result = $Controller->getAuditTrail('all','eid98');
		//$this->assertCount(3, $result);
	}
	
	/**
	 * 
	 */
	function testGetEuiccCapabilities()
	{
		// arrange
		$Controller = new RetrieveController;
		
		//act
		$result = $Controller->getEuiccCapabilities('all','eid98');
		//$this->assertCount(1, $result);
	}
}