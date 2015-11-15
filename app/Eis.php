<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * This Laravel Model classes handles the EIS model
 * 
 * @package    EuiccResourceServer
 * @subpackage Models
 * @author github.com/jk204
 *
 */
class Eis extends Model
{
	protected $table = 'eis';
	protected $primaryKey = 'eid';
	
	function getEisFromEid($eid){
		
		$eis = Eis::find($eid);
		
		return $eis;
	}
	
	/**
	 * This function establishes relational link with ProfileInfo Model
	 * 
	 * @param none
	 * @return Model ProfileInfo 
	 */
	function profileInfo()
	{
		
		return $this-hasMany('\App\ProfileInfo', 'eid', 'eid');
	}
	
	/**
	 * Establishes relationship with Euicc Capabilities Model
	 * 
	 * @return Model EuiccCapabilities
	 */
	function euiccCapabilities()
	{

		return $this-hasMany('\App\EuiccCapabilities', 'eid', 'eid');
	}
	
	/**
	 * Establishes relationship with Audit Trail Model
	 * 
	 * @return Model AuditTrail
	 */
	function auditTrail()
	{
		return $this-hasMany('\App\AuditTrail', 'eid', 'eid');
	}
	
}
