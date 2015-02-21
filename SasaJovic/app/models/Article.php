<?php
class Article extends Eloquent{

	//override tablenaming convention
	//protected $table = 'notes';

	public $timestamps=false;

	protected $fillable=array('title', 'body');

	public function dumpInfo(){
		dd($this->title, $this->body);
	}
  
	public function containsLetter($letter){
		if(strpos($this->title, $letter)===false){
			return false;
		}  return true;
	}

}