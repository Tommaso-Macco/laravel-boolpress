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

Route::middleware('auth')->get('/user', function (Request $request) {
    return $request->user();
});

route::get('logout', 'Api\AuthController@logout')->middleware('auth:api');

route::get("/posts", "Api\PostController@index");
Route::get("/posts/{post}", "Api\PostController@show");
Route::post("/contacts", "Api\ContactController@store");

// route::post("/posts", "Api\PostController@store");

