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
/*
Route::get('/', function () {
    return view('welcome');
});


Route::get('/users/{id}/{name}',function($id,$name){
    return 'This is user '.$name.' with an id of '.$id;
});
*/

Route::get('/','PagesController@index');
Route::get('/service','PagesController@service');
Route::get('/contact','PagesController@contact');
Route::resource('posts','PostsController');

