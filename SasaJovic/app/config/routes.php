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
	DB:: statement("ALTER TABLE users ADD email VARCHAR(60)");
	return 'Statement Succesful';

	DB::delete("DELETE from users where id=?", array(4));
	return 'delete Succesful';


	DB::update("UPDATE users SET occupation=? where name=?", array('Cook','valter'));
	return 'update Succesful!';

	DB::insert("INSERT into users(name, occupation) VALUES (?,?)", array('hanik','DEA oficer'));
	return 'Insert Succesful!';

	$user = DB::selectOne("SELECT * from users where id=1");
	return $user->name. 'is an'.$user->occupation;

	$user = DB::selectOne("SELECT * from users where id=1");
	dd($user);
	$users=DB::select("SELECT * FROM users");
	var_dump($users);  

});





