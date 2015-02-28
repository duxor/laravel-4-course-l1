<?php
/**
 * Created by PhpStorm.
 * User: Dušan
 * Date: 2/28/2015
 * Time: 5:41 PM
 */
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;

class AdministracijaController extends Controller{

    public function getIndex(){
        return 'Index Administracije. <a href="/administracija/login">Login</a>';
    }

    public function getLogin(){
        return view('stranice.administracija.login');
    }

    public function postLogin(){
        dd(Input::all());
    }

}