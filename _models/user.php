<?php
class User{
	function __construct(){
		
	}
	
	function validate_login($data){
		$db = new DB();
		$password = $data['password'];

		$salt = md5($password);
		$password=md5($password.$salt);

		$param = array(
				'username'=>$_POST['username'],
				'password'=>$password
			);
		$stmt = $db->query("SELECT ID, photo, user_type, username, status FROM users WHERE username=:username AND password=:password",$param);
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		if(empty($result))
			return false;
		else{
			$_SESSION['user_ID'] = $result[0]['ID'];
			$_SESSION['user_type'] = $result[0]['user_type'];
			$_SESSION['photo'] = $result[0]['photo'];
			$_SESSION['username'] = $result[0]['username'];
			$_SESSION['status'] = $result[0]['status'];

			return true;

		}			
	}

	function signup($username, $email, $password){
		$db = new DB();
		$db->set('table_name','users');
		$param['username'] = $username;
		$param['email'] = $email;
		$param['password'] = $password;
		$param['_status'] = 0;
		$param['user_type'] = "User";
		$param['date_added'] = date("Y-m-d H:i:s");
		$db->insert($param);
		

	}

	

}