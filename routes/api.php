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

//Post Quotes
Route::post('/quote' , [
	'uses' => 'QuoteController@postQuote',
	'middleware' => 'auth.jwt'
]);

//Fetch all Quotes
Route::get('/quotes' , [
	'uses' => 'QuoteController@getQuote'
]);

//Update Quotes
Route::put('/quote/{id}' , [
	'uses' => 'QuoteController@putQuote',
	'middleware' => 'auth.jwt'
]);

//Delete Quotes
Route::delete('/quote/{id}' , [
	'uses' => 'QuoteController@deleteQuote',
	'middleware' => 'auth.jwt'
]);

//User signup
Route::post('/user' , [
	'uses' => 'UserController@signup'
]);

//User signin
Route::post('/user/signin' , [
	'uses' => 'UserController@signin'
]);
