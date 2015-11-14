<?php
namespace App\Http\Controllers;

use App\User;
use App\Eis;
use App\ProfileInfo;
use App\EuiccCapabilities;
use App\AuditTrail;
use App\Http\Controllers\Controller;

/**
 * This is a Laravel Controller class for handling data retrieval functions in the eUICC Resource Server
 * 
 * @package EuiccResourceServer
 * @subpackage Controllers
 * @author github.com/jk204
 *
 */
class RetrieveController extends Controller
{
	
	/**
	 * This function retrieves a EIS given a EID
	 *
	 * The function receives as inputs SMSR-Id (required) and EID (Optional)
	 * It searches for the EIS in the EIS Model. When no EID is supplied, all EIS are collected.
	 * the function returns a HTTP response object. This response object contains the EIS or error codes.
	 *
	 * @param  string     $smsrid    Required. SMSR in which search for EIS.
	 * @param  string     $eid       Optional. EID of EIS requested. When omitted, all EIS of SMSR are returned
	 * @return Response              EIS, collection of EIS or error code
	 * 
	 */
	public function getEIS($SmsrId, $Eid = null)
	{
	
		$Eis = new Eis;
		
		if ($SmsrId == 'all') { 
			
			if ($Eid == null) {
				
				$result = $Eis->all();
				
			} else {

				$result = $Eis->find($Eid);
			}
			
		} else {
			
			if ($Eid == null) {
			
				$result = $Eis->all();
			
			} else {

				$result = $Eis->find($Eid);
				
			}
		}
		return response()->json($result);

	}
	
	/**
	 * This function retrieves a profile given a ICCID
	 * 
	 * The function receives as inputs SMSR-Id (Mandatory), eid and ICCID (Optional)
	 * It searched for the profile in the profileinfo Model. When no Iccid is supplied, all profiles are collected
	 * The function returns a HTTP response object. This response object contains the profile or error codes.
	 * 
	 * @param string $eid
	 * @param string $iccid
	 * 
	 */
	public function getProfile($SmsrId, $Eid, $Iccid=null)
	{
		
		$ProfileInfo = new ProfileInfo;
		
		if ($SmsrId == 'all') {
				
			if ($Eid == 'all') {
		
				if ($Iccid == null) {
						
					//return all profiles in base
					$Result = $ProfileInfo->all();
						
				} else {
						
					//return Profile with id from all smsr and all eis
					$Result = $ProfileInfo->find($Iccid);
				}
		
			} else {
		
				if ($Iccid == null) {
						
					//return all Profiles with id for a specific EIS on any SMSR
					$Result = $ProfileInfo->where('eid',$Eid)->all();
						
				} else {
						
					//return a specific profile from a specific EIS on any SMSR
					$Result = $ProfileInfo->where('eid',$Eid)->find($Iccid);
						
				}
			}
				
		} else {
				
			if ($Eid == 'all') {
		
				if ($Iccid == null) {
						
					//return all profiles in base
					$Result = $ProfileInfo->all();
						
				} else {
						
					//return profile with iccid from all smsr and all eis
					$Result = $ProfileInfo->find($Iccid);
				}
		
			} else {
		
				if ($Iccid == null) {
						
					//return all profiles for a specific EIS on any SMSR
					$Result = $ProfileInfo->where('eid',$Eid)->all();
						
				} else {
						
					//return a specific profile from a specific EIS on any SMSR
					$Result = $ProfileInfo->where('eid',$Eid)->find($Iccid);
						
				}
			}
		}
		
		return response()->json($Result);
	}
	
	/**
	 * This function retrieves EuiccCapabilities
	 *
	 * It receives as inputs Smsr-Id (Mandatory), EID (Optional) 
	 * It searches in the EuiccCapabilities model and retrieves the capabilities requested
	 * Smsr-Id, EID input paramater may include the 'all' wilcard
	 * When EID is omitted, it searches all capabilities in the scope of the SMSSRId.
	 * The function returns a HTTP response object. It contains the either the result of the search or an eror code.
	 *
	 * @param string $smsrid
	 * @param string $eid
	 * @return response
	 * 
	 */
	public function getEuiccCapabilities($SmsrId, $Eid = null)
	{

		$EuiccCapabilities = new EuiccCapabilities;
		
		if ($SmsrId == 'all') { 
			
			if ($Eid == null) {
				
				$result = $EuiccCapabilities->all();
				
			} else {

				$result = $EuiccCapabilities->find($Eid);
			}
			
		} else {
			
			if ($Eid == null) {
			
				$result = $EuiccCapabilities->all();
			
			} else {

				$result = $EuiccCapabilities->find($Eid);
				
			}
		}
		return response()->json($result);
	}
	
	/**
	 * This function retrieves AuditTrails
	 *
	 * It receives as inputs Smsr-Id (Mandatory), EID (Mandatory) and AuditTrail identifier (Optional)
	 * It searches in the audittrail model and retrieves the audittrail requested
	 * Smsr-Id, EID and AuditTrail input paramater may include the 'all' wilcard
	 * When Audittrail is omitted, it searches all audit trails in the scope of the SMSSRId and Eid.
	 * The function returns a HTTP response object. It contains the either the result of the search or an eror code. 
	 * 
	 * @param string $smsrid
	 * @param string $eid
	 * @param string $audittrailid
	 * @return response
	 * 
	 */
	public function getAuditTrail($SmsrId, $Eid, $AuditTrailId=null)
	{
		$AuditTrail = new AuditTrail;
		
		if ($SmsrId == 'all') {
			
			if ($Eid == 'all') {
				
				if ($AuditTrailId == null) {
					
					//return all Audit Trails in base
					$Result = $AuditTrail->all();
					
				} else {
					
					//return Audit Trail with id from all smsr and all eis
					$Result = $AuditTrail->find($AuditTrailId);
				}
				
			} else {
				
				if ($AuditTrail == null) {
					
					//return all Audit Trails with id for a specific EIS on any SMSR
					$Result = $AuditTrail->where('eid',$Eid)->all();
											
				} else {
					
					//return a specific Audit Trail from a specific EIS on any SMSR
					$Result = $AuditTrail->where('eid',$Eid)->find($AuditTrailId);
					
				}
			}
			
		} else {
			
			if ($Eid == 'all') {
				
				if ($AuditTrailId == null) {
					
					//return all Audit Trails in base
					$Result = $AuditTrail->all();
					
				} else {
					
					//return Audit Trail with id from all smsr and all eis
					$Result = $AuditTrail->find($AuditTrailId);
				}
				
			} else {
				
				if ($AuditTrailId == null) {
					
					//return all Audit Trails with id for a specific EIS on any SMSR
					$Result = $AuditTrail->where('eid',$Eid)->all();
											
				} else {
					
					//return a specific Audit Trail from a specific EIS on any SMSR
					$Result = $AuditTrail->where('eid',$Eid)->find($AuditTrailId);
					
				}
			}
		}
		
		return response()->json($Result);
	}
}