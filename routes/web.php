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

Route::get('/', function () {
    return view('welcome');
});


//Route::namespace('Front')->group(function(){
//    Route::get('users', 'UsersController@showUsers');
//});

//Route::prefix('users')->group(function (){
//    Route::get('show', 'UsersController@showUsers');
//    Route::get('edit', 'UsersController@showUsers');
//    Route::get('delete', 'UsersController@showUsers');
//    Route::get('update', 'UsersController@showUsers');
//});

/*Route::group(['prefix' => 'users'], function () {
    Route::get('/', function (){
        return 'users test...';
    });

    Route::get('show', 'UsersController@showUsers');
    Route::get('edit', 'UsersController@showUsers');
    Route::get('delete', 'UsersController@showUsers');
    Route::get('update', 'UsersController@showUsers');
});*/


Route::get('/landing', function () {
    return view('landing');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
