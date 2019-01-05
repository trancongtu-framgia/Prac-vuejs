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

Route::group([
    'prefix' => '/v1/',
    'namespace' => 'Api\v1'
], function () {
    Route::get('get-posts', 'PostsController@getPosts')->name('getPost');
    Route::post('create-post', 'PostsController@store')->name('createPost');
    Route::delete('delete-post/{id}', 'PostsController@destroy')->name('deletePost');
    Route::get('edit-post/{id}', 'PostsController@edit')->name('editPost');
    Route::post('update-post/{id}', 'PostsController@update')->name('updatePost');
});