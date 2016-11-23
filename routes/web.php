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
Route::get('/posts', 'PostController@index');

/*

Route::get('/hallo/{vorname?}/{nachname?}', function($vorname = 'Jon', $nachname = 'Doe')
{
	return '<h1>Hallo '.$vorname.' '.$nachname.'!</h1>';
})->where(array('vorname' => '[A-Za-z]+', 'nachname' => '[A-Za-z]+'));

Route::get('/', function () {
    return view('welcome');
});




Route::get('/hallo/{name?}', function($name = 'Vorname')
{
	return '<h1>Hallo '.$name.'!</h1>';
})->where('name', '[A-Za-z]+');

*/