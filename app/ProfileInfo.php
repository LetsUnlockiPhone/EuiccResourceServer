<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 * @package    EuiccResourceServer
 * @subpackage Models
 * @author     github.com/jk204
 *
 */
class ProfileInfo extends Model
{
	protected $table = 'profileinfo';
	protected $primarykey = 'iccid';
	
	
	/*
	 * Establishes relationship with Eis Model
	 * 
	 * @return Model Eis
	 */
	function eis(){
		
		return $this->belongsTo('App\Eis', 'eid', 'eid');
		
	}
}
