<?php
class Article{
	public $title;
	public $body;
	
	public function __construct($title='', $body=''){
		$this->title=$title;
		$this->body=$body;

	}
	public function dumpInfo(){
		dd($this->title, $this->body);
	}

	public function containsLetter($letter){
		if(strpos($this->title, $letter)===false){
			return false;
		}  return true;
	}

}