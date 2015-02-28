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

Route::get('/', 'GlavniController@index');

Route::get('blog/{objava?}/{edit?}', function($objava = null, $edit = null){
    if($objava)
        if(!$edit)
            return view('stranice.prikaz', ['var'=>'Naziv objave: '.$objava]);
        else
            return view('stranice.prikaz', ['var'=>'<div class="col-sm-9"><input type="text" name="slug" class="form-control" value="'.$objava.'"></div><button class="btn btn-success">Submit</button>']);
    else return view('stranice.prikaz', ['var'=>'Blog sa objavama']);
});

Route::get('kontrola', function(){
    return view('stranice.prikaz', ['uslov'=>true, 'lista'=>['1'=>'jedan','3'=>'tri','20'=>'dvadeset'], 'n'=>5]); 
});

Route::post('/identifikacija/update',function(){
    if(\App\Http\TestUsers::where('prezime', Input::get('prezime'))->where('ime', Input::get('ime'))->where('jmbg', Input::get('jmbg'))->first()!==null)
        return 'Nisu navedene nikakve promjene.<br><a href="/" class="btn btn-lg btn-info">Nazad</a>';
    $korisnik = \App\Http\TestUsers::whereId(Input::get('id'))->first();
    $korisnik->prezime = Input::get('prezime');
    $korisnik->ime = Input::get('ime');
    $korisnik->jmbg = Input::get('jmbg');
    $korisnik->save();
    return Redirect::back();
});

Route::controller('administracija', 'AdministracijaController');

//Route::controllers([
//	'auth' => 'Auth\AuthController',
//	'password' => 'Auth\PasswordController',
//]);
