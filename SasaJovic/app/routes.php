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

Route::get('/', function(){
	$article=new Article('how to ..');
	//$article->dumpInfo();
	$letter='w';
	if($article->containsLetter($letter)){
		return 'Contains: '.$letter;
	}
	return 'Nope ';

});

//resorce controllers
//Route::resource('recipes','RecipeController');



//Restful controllers
 //grab every suburl of portfoliourl
/*
Route:: controller('portfolio','PortfolioController');

//Basic controllers

Route::get('/', 'HomeController@showWelcome');
Route::get('about','HomeController@showAbout');
Route::get('milkshakes/{flawor?}','MilkshakeController@index');

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
*/