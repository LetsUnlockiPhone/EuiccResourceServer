<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

	//welcome

	Route::get('/', function () {
		return view('welcome');
	});
	
	//retrieve a full eis from eid
	
	Route::get('/api/eis/eid/{eid?}', 'RetrieveController@getEIS');
	
	Route::get('/api/eis/eid/{eid}/profile/{iccid?}', 'RetrieveController@getProfile');
	
	Route::get('/api/eis/eid/{eid}/audittrail', 'RetrieveController@getAuditTrail');
	
	Route::get('/api/eis/eid/{eid}/euicccapabilities', 'RetrieveController@getEuiccCapabilities');
	
	//register a new eis 
	
	Route::post('/api/eis', 'StoreController@addEIS');
	
	//add an audit trail
	
	Route::post('/api/eis/eid/{eid}/audittrail', 'StoreController@addAuditTrail');	
	
	//add a new profile to EIS
	
	Route::post('/api/eis/eid/{eid}/profile', 'StoreController@addProfile');	
	
	//update profile state
	
	Route::put('/api/eis/eid/{eid}/profile/{iccid}/state', 'UpdateController@updateProfileState');	
	
	//update subscription address
	
	Route::put('/api/eis/eid/{eid}/profile/{iccid}/address', 'UpdateController@updateSubscriptionAddress');
	
	/*
	Route::delete('foo/bar', function () {
					//
				});
	*/			
				
