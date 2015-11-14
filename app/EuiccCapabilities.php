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
class EuiccCapabilities extends Model
{

	protected $table = 'euicccapabilities';
	protected $primaryKey = 'eid';
	
	/*
	 * Establishes relationship with Eis Model
	*
	* @return Model Eis
	*/
	function eis(){
	
		return $this->belongsTo('App\Eis', 'eid', 'eid');
	
	}
	
}
