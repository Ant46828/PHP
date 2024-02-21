<?php
class Users {
	public $id;
	public $fullname;
	public $email;
	public $password;
	public $token;
	public $hashPwd;

	public function processForm() {
		$this->id = getPost('id');
		$this->fullname = getPost('fullname');
		$this->email = getPost('email');
		$this->password = getPost('password');
		$this->token = getPost('token');
		//Cung la 1 mat khau $this->password. Nhung tai cac thoi diem khac nhau thi password_hash -> tao ra cac hash khac nhau
		$this->hashPwd = password_hash($this->password, PASSWORD_DEFAULT);
	}

	public function autoLogin() {
		if(isset($_SESSION['user'])) {
			return $_SESSION['user'];
		}
		if(isset($_COOKIE['token'])) {
			$token = $_COOKIE['token'];
			$sql = "select * from users where token = '$token'";
			$dataList = select($sql);

			if($dataList != null && count($dataList) > 0) {
				$_SESSION['user'] = $dataList[0];

				return $_SESSION['user'];
			}
		}
		return null;
	}

	public function login() {
		//$this->email = ' or email is not null or email = '
		//sql injection -> Fixed
		$sql = "select * from users where email = '".$this->email."'";
		// echo $sql;
		$dataList = select($sql);

		if($dataList != null && count($dataList) > 0) {
			$hashPwd = $dataList[0]['password'];
			//Verify $this->password & $hashPwd -> Co phai la 1 khong
			$verify = password_verify($this->password, $hashPwd);

			if($verify) {
				//Login thanh cong
				$_SESSION['user'] = $dataList[0];
				$token = $dataList[0]['id'].password_hash($dataList[0]['id'], PASSWORD_DEFAULT).password_hash($dataList[0]['email'], PASSWORD_DEFAULT);
				setcookie('token', $token, time() + 30 * 24 * 60 * 60, '/');
				$sql = "update users set token = '".$token."' where id = ".$dataList[0]['id'];
				// echo $sql;
				query($sql);
				// die();
				return true;
			}
		}

		return false;
	}

	public function register() {
		$sql = "insert into users(fullname, email, password) values ('".$this->fullname."', '".$this->email."', '".$this->hashPwd."')";
		query($sql);
	}
}