<?php
include('classes/controllers/user_controller.php');
$dashboard = new Dashboard_Controller();

class Dashboard_Controller{

	private $user;

	public function __construct(){

		if (!empty($_SESSION['user']))
		{
			$user = new User_Controller();
			$user->setActiveUser($_SESSION['user']);
			include('classes/views/dashboard/header.php');
			include('classes/views/dashboard/page.php');
			include('classes/views/dashboard/footer.php');
		}else{
			$_SESSION['errors'] = "no user superglobal set";
			header('Location:home');
		}


	}

}
?>