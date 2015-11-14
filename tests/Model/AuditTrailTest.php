<?php
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Database\Eloquent\Model;
use App\AuditTrail;

/**
 *
 * @package    EuiccResourceServer
 * @subpackage Tests
 * @author     github.com/jk204
 *
 */
class AuditTrailTest extends TestCase
{
	
	/**
	 * Find AuditTrail from Eid
	 */
	function testFindAuditTrailwithEid()
	{
		//arange
		$AuditTrail = new AuditTrail;
		
		//act
		$result = $AuditTrail->where('eid','eid98')->get();
		
		//assert
		$this->assertNotNull($result);
	}
	
	/**
	 * test when AuditTrail cannot be found with wrong Eid
	 */
	function testFindAuditTrailwithEidNotFound()
	{
		//arange
		$AuditTrail = new AuditTrail;
	
		//act
		$result = $AuditTrail->where('eid','badeid')->get();
	
		//assert
		$this->assertEquals(0,$result->count());	
	}
	
	/**
	 * Find audit trail from index
	 */
	function testFindAuditTrailwithIndexFound()
	{
		//arange
		$AuditTrail = new AuditTrail;
	
		//act
		$result = $AuditTrail->find('100');
	
		//assert
		$this->assertNotNull($result);
	}
	
	/**
	 * test when audit trai is not found with bad index
	 */
	function testFindAuditTrailwithIndexNotFound()
	{
		//arange
		$AuditTrail = new AuditTrail;
	
		//act
		$result = $AuditTrail->find('100000');
	
		//assert
		$this->assertNull($result);
	}
}