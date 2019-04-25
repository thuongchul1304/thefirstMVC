<?php 
class __Register 
{
	public $model='';
	public function __construct()
	{
		$this->model=new Database();
	}
	public function register($Name, $Username, $email, $Password, $Role, $Created)
	{
		$this->model->query
		("
			INSERT INTO `users`(`Name`, `Username`, `email`, `Password`, `Role`, `Created`) VALUES ('$Name', '$Username', '$email', '$Password', '$Role', '$Created')
		");
	}
	public function checkUser($username)
	{
		$result=$this->model->fetch("SELECT Username,Password FROM users WHERE Username='$username'");
 		return $result;
	}
	

}