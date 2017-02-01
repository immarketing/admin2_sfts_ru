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
    'prefix' => 'agpplgroup', 'middleware' => 'auth'
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


Route::group(
[
    'prefix' => 'agtest', 'middleware' => 'auth'
], function () {

    Route::get('/', 'AgTestsController@index')
         ->name('agtest.agtest.index');

    Route::get('/create','AgTestsController@create')
         ->name('agtest.agtest.create');

    Route::get('/show/{agtest}','AgTestsController@show')
         ->name('agtest.agtest.show')
         ->where('id', '[0-9]+');

    Route::get('/{agtest}/edit','AgTestsController@edit')
         ->name('agtest.agtest.edit')
         ->where('id', '[0-9]+');

    Route::post('/', 'AgTestsController@store')
         ->name('agtest.agtest.store');
               
    Route::put('agtest/{agtest}', 'AgTestsController@update')
         ->name('agtest.agtest.update')
         ->where('id', '[0-9]+');

    Route::delete('/agtest/{agtest}','AgTestsController@destroy')
         ->name('agtest.agtest.destroy')
         ->where('id', '[0-9]+');

});

Route::group(
[
    'prefix' => 'agcourse', 'middleware' => 'auth',
], function () {

    Route::get('/', 'AgCoursesController@index')
         ->name('agcourse.agcourse.index');

    Route::get('/create','AgCoursesController@create')
         ->name('agcourse.agcourse.create');

    Route::get('/show/{agcourse}','AgCoursesController@show')
         ->name('agcourse.agcourse.show')
         ->where('id', '[0-9]+');

    Route::get('/{agcourse}/edit','AgCoursesController@edit')
         ->name('agcourse.agcourse.edit')
         ->where('id', '[0-9]+');

    Route::post('/', 'AgCoursesController@store')
         ->name('agcourse.agcourse.store');
               
    Route::put('agcourse/{agcourse}', 'AgCoursesController@update')
         ->name('agcourse.agcourse.update')
         ->where('id', '[0-9]+');

    Route::delete('/agcourse/{agcourse}','AgCoursesController@destroy')
         ->name('agcourse.agcourse.destroy')
         ->where('id', '[0-9]+');

});
