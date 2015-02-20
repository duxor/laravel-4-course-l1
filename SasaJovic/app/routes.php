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
	$projects=DB::table('projects')->get();
	return View::make('hello')->with('projects', $projects);
});

Route::post('add', function()
{
	$name= Input::get('name');
	if(DB::table('projects')->where('name', $name)->first() !== null) return 'Vec postoji';
		
				DB::table('projects')->insert(array('name' => $name));
	
	 
	return Redirect::to('/');

});


Route::post('donate', function()
{
	$donation =Input::get('donation');
	$id=Input::get('id');
	DB::table('projects')->where('id',$id)-> increment('money',$donation);
	return Redirect::to('/');
});
