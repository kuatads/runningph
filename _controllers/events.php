<?php
include_once('admin.php');
class Events extends Admin {
	private $param = array();
	
	function __construct(){
	
	}
	function FIRST(){
		$data = array("successmsg"=>"Welcome to your RunningPH account!");

		Load::view('admin/events_vw',$data);
		Load::hook_js('modal');
	}



}