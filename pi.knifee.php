<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$info = ee('App')->get('chainsaw');

class Knifee {
	public $return_data = '';

	function Knifee() {
		$vars = '';
		//Get parameters
  	$words = ee()->TMPL->fetch_param('words');
  	$words -= 1;
  	$allowtags = ee()->TMPL->fetch_param('allowtags');
    	
    	//remove x amount of words and append ...
		$newstr = preg_replace('/((\w+\W*){'.$words.'}(\w+))(.*)/', '${1}', ee()->TMPL->tagdata);
		
		if(empty($allowtags)){
			$newstr = strip_tags($newstr);
		}else{
			$newstr = strip_tags($newstr, $allowtags);
		}		
		
		$this->return_data = $newstr."...";
	}
	
	

}
/* End of file pi.knifee.php */ 
/* Location: /__ee_admin/user/addons/knifee/pi.knifee.php */