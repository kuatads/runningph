<?php
include_once('admin.php');
class Events_form extends Admin {
	private $param = array();
	
	function __construct(){
	
	}
	function FIRST(){

		Load::view('admin/events_form_vw');
		Load::hook_js('modal');
	}



}