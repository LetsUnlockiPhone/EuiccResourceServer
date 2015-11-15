<?php
namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * A Laravel Controller class to Store Euicc Resources
 * 
 * @package      EuiccResourceServer
 * @subpackage   Controllers
 * @author       github.com/jk204
 *
 */
class StoreController extends Controller
{
	/**
	 * Show the profile for the given user.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function addEIS(Request $Request)
	{

		$message = $Request->input('message');
		
		//$EIS	= jsondecode($message);
		
		return 'done';
	}
	
	
	public function addAuditTrail($eid)
	{
	
	
		return $eid;
	}
	
	public function addProfile($eid)
	{
	
	
		return $eid;
	}
	
}