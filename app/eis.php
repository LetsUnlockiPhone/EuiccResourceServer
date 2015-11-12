<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class eis extends Model
{
	protected $table = 'eis';
	protected $primaryKey = 'eid';
	
	
	function getEisFromEid($eid){
		
		$eis = eis::find($eid);
		
		return $eis;
	}
	
	function profileinfo(){
		
		$this-hasMany('\App\profileinfo', 'eid', 'eid');
	}
}
