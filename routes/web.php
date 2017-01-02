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

//declare that we are using Imgapp model here
use App\Imgapp;



Route::get('/', function () {
    $imgs = Imgapp::all();
    return view('welcome',['imgs'=>$imgs]);
});


Route::get('test', function () {
    return view('test');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/uploadfile', 'FileUpload@index');

Route::post('/uploadfile', 'FileUpload@uploadFile');

Route::get('/editImg/{id}', 'ImgController@edit');

Route::post('/updateImg/{id}', 'ImgController@update');

Route::get('/delImg/{id}', 'ImgController@destroy');