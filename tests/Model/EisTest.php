<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Database\Eloquent\Model;
use App\Eis;

/**
 * 
 * @package    EuiccResourceServer
 * @subpackage Tests
 * @author     github.com/jk204
 *
 */
class eisTest extends TestCase{

	/**
	 * test EIS not found with EID
	 */
	function testgetEISfromEidnull()
	{

		//arrange
		$model = new Eis;
		
		//act
		$result = $model->find('badcode');
		
		//assert
		$this->assertEquals(null, $result);
	}
	
	/**
	 * test EIS found with EID
	 */
	function testgetEISfromEid()
	{
	
		//arrange
	
		$model = new Eis;
	
		//act
	
		$result = $model->find('eid98');
	
		//assert
	
		$this->assertNotEquals(null, $result);
	}

	/**
	 * test retrieve all EIS
	 */
	function testAll()
	{
		
		//arrange
		$model = new Eis;
		
		//act
		$result = $model->all();
		
		//assert
		$this->assertCount(100,$result);
	}
}