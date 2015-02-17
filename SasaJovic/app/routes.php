<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello')->with('list',array('banana', 'jabuka', 'breskva'));

});
Route::get('verify',function()
	{
		return 'Form submited';
	});
Route::post('verify',function()
	{
		return 'Form posted';
	});

