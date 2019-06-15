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

Route::middleware('auth:api')->get('/user', 'Api\UserController');
Route::middleware('auth:api')->get('/organizations', 'Api\OrganizationsController@index');
Route::middleware('auth:api')->post('/organizations', 'Api\OrganizationsController@store');
