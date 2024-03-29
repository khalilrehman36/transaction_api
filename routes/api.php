<?php

use Illuminate\Http\Request;

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

Route::post('register', 'UserController@register');
Route::post('login', 'UserController@authenticate');
Route::group(['middleware' => ['jwt.verify']], function () {

    //Users Routs.
    Route::get('user', 'UserController@getAuthenticatedUser');

    //Trasactions Routs.
    Route::get('get/transactions', 'TransactionController@getData');
});