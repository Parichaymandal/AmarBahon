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


Route::get('/', function () {
    return view('HomePage');
});


Route::get('/owner_reg', function () {
    return view('VehicleOwnerRegPage');
});

Route::get('/importer_reg', function () {
    return view('ImporterRegPage');
});

Route::get('/edit_importer', function () {
    $importer = \App\Importer::find(1);
    return view('ImporterEditProfilePage',compact('importer'));
});

Route::get('/edit_owner', function () {
    $owner = \App\Importer::find(1);
    return view('VehicleOwnerEditProfilePage',compact('owner'));
});


Route::resource('importer','ImporterController');
Route::resource('job','JobController');
Route::resource('vehicle_owner','VehicleOwnerController');
Route::resource('company','CompanyController');
Route::resource('driver','DriverController');
Route::resource('vehicle','VehicleController');
Route::resource('owner','OwnerDashboardController');
Route::resource('logindir','LoginController');
Route::resource('bidding','BidController');






Route::auth();

Route::get('/home', 'HomeController@index');
