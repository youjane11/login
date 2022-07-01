<?php 
class LoginUser{
	// class properties
	private $username;
	private $password;
	public $error;
	public $success;
	private $storage = "data.json";
	private $stored_users;

	// class methods
	public function __construct($username, $password){
		$this->username = $username;
		$this->password = $password;
		$this->stored_users = json_decode(file_get_contents($this->storage), true);
		$this->login();
	}


	private function login(){
		foreach ($this->stored_users as $user) {
			if($user['username'] == $this->username){
				if(password_verify($this->password, $user['password'])){
					session_start();
					$_SESSION['user'] = $this->username;
					header("location: https://youjane11.github.io/profilehome"); exit();
				}
			}
		}
		return $this->error = "Wrong username or password";
	}

}