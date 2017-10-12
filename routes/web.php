<?php

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

Route::get('/', ['uses'=>'HomeController@index', 'as'=>'home']);

Route::auth();

Route::get('/home', 'HomeController@index');

//Admin route
Route::group(['middleware'=>'roles', 'roles'=> ['admin'], 'prefix' => 'admin'], function(){
    Route::get('/', ['uses' => 'Admin\DashboardController@index', 'as' => 'admin.index']);

});

//Agent route
Route::group(['middleware'=>'roles', 'roles'=> ['agent'], 'prefix' => 'agent'], function(){
    Route::get('/', ['uses' => 'Agent\DashboardController@index', 'as' => 'agent.index']);
    Route::resource('/auto', 'Agent\AutoController');
    Route::post('/select-type', ['uses' => 'Agent\AutoController@selectType', 'as' => 'agent.select_type']);

});