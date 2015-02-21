<?php

class MilkshakeController extends BaseController{
	
	public function index($flavor=null){
		$availibleFlavors=array('banana', 'cokolada','jagoda');
		if($flavor === null ) dd($availibleFlavors);
		if(in_array($flavor, $availibleFlavors)){
			return 'Imamo:'. $flavor;
		} else{
			return 'Nemamo'. $flavor;
		}

	}


}