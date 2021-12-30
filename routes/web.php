<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [
    'as' => 'home',
    'uses' => 'App\Http\Controllers\PagesController@home'
]);

Route::group(['prefix' => 'auth'], function() {

    Route::get('register', [
        'as' => 'get_register',
        'uses' => 'App\Http\Controllers\Auth\AuthController@getRegister'
    ]);

    Route::post('register', [
        'as' => 'post_register',
        'uses' => 'App\Http\Controllers\Auth\AuthController@postRegister'
    ]);

    Route::get('login', [
        'as' => 'get_login',
        'uses' => 'App\Http\Controllers\Auth\AuthController@getLogin'
    ]);

    Route::post('login', [
        'as' => 'post_login',
        'uses' => 'App\Http\Controllers\Auth\AuthController@postLogin'
    ]);

    Route::get('logout', [
        'as' => 'get_logout',
        'uses' => 'App\Http\Controllers\Auth\AuthController@getLogout'
    ]);
});

Route::group(['prefix' => 'question'], function() {

    Route::get('post', [
        'as' => 'get_post',
        'uses' => 'App\Http\Controllers\ForumController@getPost'
    ]);

    Route::post('post', [
        'as' => 'post_question',
        'uses' => 'App\Http\Controllers\ForumController@postQuestion'
    ]);

    Route::get('{id}/edit', [
        'as' => 'get_edit_post',
        'uses' => 'App\Http\Controllers\ForumController@getEditPost'
    ]);

    Route::post('edit', [
        'as' => 'edit_post',
        'uses' => 'App\Http\Controllers\ForumController@saveEditPost'
    ]);

    Route::delete('post', [
        'as' => 'delete_question',
        'uses' => 'App\Http\Controllers\ForumController@deleteQuestion'
    ]);

    Route::get('{slug}', [
        'as' => 'view_post',
        'uses' => 'App\Http\Controllers\ForumController@viewPost'
    ]);

    Route::post('reply', [
        'as' => 'save_reply',
        'uses' => 'App\Http\Controllers\ForumController@saveReply'
    ]);

    Route::delete('reply', [
        'as' => 'delete_reply',
        'uses' => 'App\Http\Controllers\ForumController@deleteReply'
    ]);
});
