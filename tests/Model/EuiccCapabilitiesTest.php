<?php
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Database\Eloquent\Model;
use App\EuiccCapabilities;

/**
 *
 * @package    EuiccResourceServer
 * @subpackage Tests
 * @author     github.com/jk204
 *
 */
class EuiccCapabilitiesTest extends TestCase
{
	
	/**
	 *
	 */
	function testAll()
	{
		//arrange
		$Euicc = new EuiccCapabilities;
	
		//act
		$Result = $Euicc->all();
	
		//assert
		$this->assertEquals(100, $Result->count());
	}
	
	/**
	 * 
	 */
	function testGetEuiccbyEidNotFound()
	{
		//arrange
		$Euicc = new EuiccCapabilities;
	
		//act
		$Result = $Euicc->find('badeid');
	
		//assert
		$this->assertNull($Result);
	
	}
	
	/**
	 * 
	 */
	function testGetEuiccbyEidFound()
	{
	    //arrange
		$Euicc = new EuiccCapabilities;
		
		//act
		$Result = $Euicc->where('eid','eid98')->get();
		
		//assert
		$this->assertEquals(1,$Result->count());
		
	}
}