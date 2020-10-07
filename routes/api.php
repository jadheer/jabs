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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('auth')->group(function(){
  //api/auth/register
  Route::post('/register','AuthController@register');
  Route::post('/login','AuthController@login');
  Route::get('/logout','AuthController@logout')->middleware('auth:api');
  Route::get('/user','AuthController@user')->middleware('auth:api');
  Route::get('/authentication-failed','AuthController@authFailed')->name('auth-failed');
});

Route::group(['prefix'=>'lookups'], function(){
// Route::group(['prefix'=>'lookups','middleware'=>'auth:api'], function(){
    Route::resource('opportunity','OpportunityController');
    Route::resource('category','CategoryController');
    Route::resource('country','CountryController');
});

