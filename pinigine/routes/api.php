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

//List gallery files name api
Route::get('gallery', 'GalleryController@index');

//List single
Route::get('gallery/{id}', 'GalleryController@show');

//List create
Route::post('gallery', 'GalleryController@store');

//List upadte
Route::put('gallery/{id}', 'GalleryController@store');

Route::delete('gallery/{id}', 'GalleryController@destroy');