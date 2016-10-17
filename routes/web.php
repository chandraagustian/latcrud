<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Route::get('/uploads','ImagesController@upload');
Route::get('/index','TestController@index');
Route::get('/', function () {
    return view('welcome');
});
// Route::get('imageUploadForm', 'ImageController@upload' );
// Route::post('imageUploadForm', 'ImageController@store' );
//Route::get('showLists', 'ImageController@show' );

// Route::group(['middleware' => ['web']], function () {
    // Route::resource('images', 'ImageController@index');
// });