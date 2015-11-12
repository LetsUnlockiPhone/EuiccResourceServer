<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profileinfo extends Model
{
	protected $table = 'profileinfo';
	protected $primarykey = 'iccid';
	
	function eis(){
		
		$this->belongsTo('App\eis', 'eid', 'eid');
		
	}
}
