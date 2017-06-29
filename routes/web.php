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



Route::get('helloword', function () {
    return  view('helloword');
});
/*
Route::get('user/{id?}', function ($id=0) {
    return 'User id:'.$id;
});
*/
Route::get('user/{id}/class/{class?}', function ($id=0,$class=null) {
    return 'User id:'.$id.' class: '.$class;
});

Route::get('entry/popular', 'EntryController@popular');

Route::resource('entry', 'EntryController');


//Route::get('entry/popular', 'EntryController@popular');
Route::resource('user', 'UserController');

Route::get('/', 'EntryController@index');
