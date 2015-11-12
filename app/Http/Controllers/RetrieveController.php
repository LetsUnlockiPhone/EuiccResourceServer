<?php
namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class RetrieveController extends Controller
{
	/**
	 * Show the profile for the given user.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getEIS($eid)
	{
	
		
		return $eid;
	}
	
	public function getProfile($eid, $iccid=null)
	{
		
		return $eid.$iccid;
	}
	
	public function getEuiccCapabilities($eid)
	{
		
		
		return $eid.$iccid;
	}
	
	public function getAuditTrail($eid)
	{
		
		return $eid;
	}
}