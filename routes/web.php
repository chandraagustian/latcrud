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

// routes picture
Route::resource('gambar', 'GambarController');
Route::resource('marketingimage', 'MarketingImageController');
Route::get('/list', 'PictureController@showPictureList');
Route::get('/pic/{id}', 'PictureController@showPicture');
Route::get('/add', 'PictureController@addPicture');
Route::post('/add', 'PictureController@savePicture');
// endof
Route::resource('Page', 'PageController');  
Route::resource('Dynamic', 'DynamicController');  
Route::get('/page','ImagesloadController@page')->name('page');
Route::get('/load','DynamicloadController@load');
Route::get('/load','ImagesloadController@load');
Route::get('/car','CarController@index');
Route::get('/lihat','TestController@lihat');
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