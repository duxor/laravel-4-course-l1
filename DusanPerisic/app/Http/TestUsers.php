<?php
/**
 * Created by PhpStorm.
 * User: Dušan
 * Date: 2/28/2015
 * Time: 11:41 AM
 */

namespace App\Http;

use Illuminate\Database\Eloquent\Model;
class TestUsers extends Model{
    protected $table = 'testusers';
    protected $fillable = ['prezime', 'ime', 'updated_at'];
}