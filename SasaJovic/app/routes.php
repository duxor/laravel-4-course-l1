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

	//delete article
	Article::destroy(3);
	return 'destroy 3';

	$victims= Article::where('id','<',3);
	$victims->delete();
	return 'mass delete';

	//update single article
	$article=Article::find(4);
	$article->title='how to drive';
	$article->save();
	return 'saved';
//update multiple article
	$articles=Article::where('id','<','4');
	$articles->update(array(
		'body'=>'test'
		));
	return 'mass update';


	//$articles=DB:table('articles')->where('id','>','1')->get();
	//$articles=Article::where('id','>','1')->get();

	// retriving single articles
	$article=Article::find(4);
	return $article->title;

	//retriving all articles
	$articles=Article::all();
	foreach($articles as $art){
		var_dump($art->title);
	}
	return;


	//Create article

	$article3=Article::create(array(
		'title'=>'HOw .. bike',
		'body'=>'body4'
		));
	return;

	$article2=new Article();
	$article2->title='How to be succ3';
	$article2->body='body3';
	$article2->save();
	return 'Saved articla. It has an id of '.$article2->id;

$article=Article::create(array(
	'title'=>'how to potates',
	'body'=>'This is body'
	));
return $article->id;

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