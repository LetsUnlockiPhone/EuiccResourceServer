<?php
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Database\Eloquent\Model;
use App\ProfileInfo;

/**
 *
 * @package    EuiccResourceServer
 * @subpackage Tests
 * @author     github.com/jk204
 *
 */
class ProfileInfoTest extends TestCase
{
	
	/**
	 * 
	 */
	function testAll()
	{
		//arrange
		$Profiles = new ProfileInfo;
		
		//act
		$Result = $Profiles->all();
		
		//assert
		$this->assertEquals(300, $Result->count());
	}
	
	function testGetProfilebyIccidNotFound()
	{
		//arrange
		$Profiles = new ProfileInfo;
		
		//act
		$Result = $Profiles->find('badiccid');
		
		//assert
		$this->assertNull($Result);
		
	}
	
	function testGetProfilebyIccidFound()
	{
	
	
	}
	
	function testGetProfilesbyEidNotFound()
	{
		//arrange
		$Profiles = new ProfileInfo;
		
		//act
		$Result = $Profiles->where('eid','badeid')->get();
		
		//assert
		$this->assertEquals(0,$Result->count());
		
	}
	
	function testGetProfilesbyEidFound()
	{
		//arrange
		$Profiles = new ProfileInfo;
		
		//act
		$Result = $Profiles->where('eid','eid98')->get();
		
		//assert
		$this->assertEquals(3, $Result->count());
	
	}
	
}