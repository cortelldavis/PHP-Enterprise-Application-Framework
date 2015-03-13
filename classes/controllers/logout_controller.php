<?php


include('classes/controllers/user_controller.php');
$logout = new Logout_Controller();

class Logout_Controller{

	public	function __construct(){
		if ($this->logoutAttempted()){
			echo "logout has been attempted";
			$_SESSION['user']=null;
			header('Location:home');
		}
	}

	public function logoutAttempted(){
		$result = false;
		if(isset($_POST['submit'])){
			$result=true;
		}
		return $result;
	}

}