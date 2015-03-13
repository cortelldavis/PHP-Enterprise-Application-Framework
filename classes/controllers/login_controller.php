<?php


include('classes/controllers/user_controller.php');
$login = new Login_Controller();

class Login_Controller{

	private $user;

	public	function __construct(){
		
		if ($this->loginAttempted()){
		$user = new User_Controller();
			//if no user is stored in session then proceed to log in
			if(empty($_SESSION['user'])){
				echo "attempting log in user " . $_POST['username'];
			echo "<br>";
			if($user->isValid($_POST['username'],"username")){				
				echo "username exists";	

				//...
				$user->login($_POST['username'],$_POST['password']);
				
				if($user->isLoggedIn()){

					echo "<pre>";
					print_r($user->getActiveUser());
					echo "</pre>";
					$_SESSION['user']=$user->getActiveUser();
					echo "<br>User has been logged in";
					header('Location:dashboard');
				}

			}else{
				echo "username does not exist";
			}
		}
		}	
		//if an user has already been stored in session then redirect to home page
		else{
			header('Location:home');
		}
	}

	public function loginAttempted(){
		$result = false;
		if(isset($_POST['submit'])){
			$result=true;
		}
		return $result;
	}
}

?>