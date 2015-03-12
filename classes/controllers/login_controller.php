<?php


include('classes/controllers/user_controller.php');
$login = new Login_Controller();

class Login_Controller{

private $user;

	public	function __construct(){
	$user = new User_Controller();
		
		if ($this->loginAttempted()){
			echo "attempting log in user " . $_POST['username'];
			echo "<br>";
			if($user->isValid($_POST['username'])){				
				echo "username exists";	

				//...
				$user->login($_POST['username'],$_POST['password']);
				#$user->isLoggedIn();	

			}else{
			echo "username does not exist";
		}
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