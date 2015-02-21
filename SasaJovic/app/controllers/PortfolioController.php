
<?php 
class PortfolioController extends BaseController{
	
	public function getIndex(){
		return 'Index portfolio';
	}
	//this is for request  portfolio/paintings using get methods
	public function getPaintings(){
			return 'working';
	}
	public function getMusic(){
		return 'LIst of my Music';
	}
	
	public function postProces(){

		return 'Form posted';
	}


}