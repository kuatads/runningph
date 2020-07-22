<?php
include_once('admin.php');
class User_account extends Admin {
	private $param = array();
	
	function __construct(){
	
	}
	function FIRST(){
		$data = array("successmsg"=>"Welcome to your RunningPH account!");

		Load::view('admin/user_account_vw',$data);
		Load::hook_js('modal');
	}



}