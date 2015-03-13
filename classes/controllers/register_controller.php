<?php
include('classes/controllers/user_controller.php');
$register = new Register_Controller();

class Register_Controller{
	
	public function __construct (){
		
		if($this->registerAttempted()){
			echo "attempting to register new user";
			echo "<br>";
			$user = new User_Controller();

			//check if username is already taken
			if(!$user->isValid($_POST['username'],"username")){	
			//check if email is already taken
				if(!$user->isValid($_POST['email'],"email")){	
					echo "username and email address are available";

					$user_post['email'] = 	$_POST['email'];
					$user_post['username'] = $_POST['username'];
					$user_post['first_name'] = $_POST['first_name'];
					$user_post['last_name'] = $_POST['last_name'];
					$user_post['password'] = $_POST['password'];
					echo "<br>user is being registered";
					$user->register($user_post);
					header('Location:login');

				}else{
					echo "email address is not available";
					header('Location:home');					
				}
			}else{
					echo "username is not available";									
					header('Location:home');
			}


		}
		else{
			header('Location:home');
		}


	}

	public function registerAttempted(){
		$result = false;
		if(isset($_POST['submit'])){
			$result=true;
		}
		return $result;
	}
}

?>