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
class AuditTrail extends Model
{
	protected $table = 'audittrail';
	protected $primaryKey = 'audittrail_id';
	
	
	/*
	 * Establishes relationship with Eis Model
	*
	* @return Model Eis
	*/
	function eis(){
	
		return $this->belongsTo('App\Eis', 'eid', 'eid');
	
	}
	
}
