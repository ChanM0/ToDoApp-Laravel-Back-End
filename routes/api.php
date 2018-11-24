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

Route::post('/quote', 'QuoteController@postQuote');
Route::get('/quotes', 'QuoteController@getQuotes');
Route::put('/quote/{id}', 'QuoteController@putQuote');
Route::delete('/quote/{id}', 'QuoteController@deleteQuote');


Route::post('/user', 'UserController@signUp');
Route::post('/user/signIn ', 'UserController@signIn');

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
