<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('front.home');
});
Route::get('/cronaevent', function () {
    return view('front.cronaevent');
});
/*Route::get('/student', function () {
    return view('front.student');
});*/
Route::get('/staff', 'AseStaffController@index');
Route::post('/staffname/{id}', array('as' => '.staffname', 'uses' => 'AseStaffController@findname'));
Route::post('/staffotp/{id}', array('as' => '.staffotp', 'uses' => 'AseStaffController@staffotp')); 
Route::get('/mailtest', 'AseStaffController@mailtest');



Route::get('/student', 'AseStaffController@student');
Route::post('/eventname/{id}', array('as' => '.eventname', 'uses' => 'AseStaffController@eventname')); 
//Route::post('/finalsubmit', array('as' => '.finalsubmit', 'uses' => 'AseStaffController@finalsubmit'));

Route::post('/selectedevent/{batch}', array('as' => '.selectedevent', 'uses' => 'AseStaffController@studentsubmit'));
Route::post('/student/submit', array('as' => '.student.submit', 'uses' => 'AseStaffController@finalsubmit')); 





/*Route::get('/ajax',function() {
   return view('front.help');
});
Route::post('/getmsg','AseStaffController@help');
Route::get('/getUser', array('as' => '.getuser', 'uses' => 'Admin\UserManagementController@getdata'));

Route::get('/data/{id}/editgate', array('as' => '.data.editgate', 'uses' => 'Admin\GateManagementController@edit'));*/
//Route::get('/getmsg','AseStaffController@help');