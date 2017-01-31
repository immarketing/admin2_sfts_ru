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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(
[
    'prefix' => 'agpplgroup',
], function () {

    Route::get('/', 'AGPplGroupsController@index')
         ->name('agpplgroup.agpplgroup.index');

    Route::get('/create','AGPplGroupsController@create')
         ->name('agpplgroup.agpplgroup.create');

    Route::get('/show/{agpplgroup}','AGPplGroupsController@show')
         ->name('agpplgroup.agpplgroup.show')
         ->where('id', '[0-9]+');

    Route::get('/{agpplgroup}/edit','AGPplGroupsController@edit')
         ->name('agpplgroup.agpplgroup.edit')
         ->where('id', '[0-9]+');

    Route::post('/', 'AGPplGroupsController@store')
         ->name('agpplgroup.agpplgroup.store');
               
    Route::put('agpplgroup/{agpplgroup}', 'AGPplGroupsController@update')
         ->name('agpplgroup.agpplgroup.update')
         ->where('id', '[0-9]+');

    Route::delete('/agpplgroup/{agpplgroup}','AGPplGroupsController@destroy')
         ->name('agpplgroup.agpplgroup.destroy')
         ->where('id', '[0-9]+');

});
