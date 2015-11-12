<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Database\Eloquent\Model;
use App\eis;

class eisTest extends TestCase{

	function testgetEISfromEid(){

		//arrange
		
		$model = new eis;
		
		//act

		$result = $model->getEisFromEid(1);
		
		//assert
		
		$this->assertEquals(NULL, $result);

	}

}