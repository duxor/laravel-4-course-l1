<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);



Route::get('test/{anything?}',function($anything=''){
return View::make('hello')->with('var',$anything);
});


Route:: get('/', function()
	{
		return View::make('home'); 

		//$list = array('Harry','Ron','Saša' );
		//return View::make('hello')->withFriends($list) ;
		//$animal1='Lav';
		//$animal2='Zebra';
		//$capital1='London';
		//$capital2='Beograd';

		//$list=array($animal1, $animal2, $capital2, $capital1);

		//return View ::make('hello')->with ('list',$list);
		//return View:: make('hello',  array('var' =>$animal2));
		//return View:: make('hello')->with('var', $animal1);
	});

Route::get('about',function(){
	return View::make('about'); 
});
Route::get('contact',function(){
	return View::make('contact'); 
});

