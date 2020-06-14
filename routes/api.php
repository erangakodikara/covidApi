<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::resource('district', 'DistrictCovidInfomationController');
Route::get('district', 'DistrictController@index');
Route::get('district/{id}', 'DistrictController@getDistrict');
Route::get('local-all-infomation', 'DistrictCovidInfomationController@index');
Route::get('local-all-infomation/{district}', 'DistrictCovidInfomationController@getDistrictData');