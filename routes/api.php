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

//localhost:8000/api/posts
// Route::get('/posts', 'Api\PostController@index');


Route::namespace('Api')->prefix('/posts')->group(function(){
    //localhost:8000/api/posts
    Route::get('/', 'PostController@index');
    //localhost:8000/api/posts/12
    Route::get('/{id}', 'PostController@show');

});


//localhost:8000/api/tag
Route::namespace('Api')->prefix('/tags')->group(function(){
    //localhost:8000/api/posts
    Route::get('/', 'TagsController@index');
    //localhost:8000/api/posts/12
    Route::get('/{name}', 'TagsController@show');

});