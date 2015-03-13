<?php
/*
user controller should call the user model's methods to get the data ready to be passed to the view. The controller shouldn't perform any changes to the data, but it should test it to get the necessary action done properly.
*/
include('classes/models/user_model.php');


class User_Controller{
	
	private $user_model;
    private $user_data;

    public function __construct(){

        $this->user_model = new User_Model();
        $this->user_data = array();


    }

    function login($username,$password){

        if($this->user_model->verifyCredentials($username,$password)){
            echo "<br>Username and Password Match!";

            $this->user_data =  $result = $this->user_model->getUser($username);

            $this->user_data['login_status'] = true;         
            $this->user_data['last_login'] =  date('Y-m-d H:i:s');       

        }
    }

    function logout(){
        //set log out status to 0, and clear user array
    }

    function isLoggedIn()
{        //return login status
    return $this->user_data['login_status'];
}

function isValid($username){
        //checks whether the user is exists
       # $user_model = new User_Model();
    return $this->user_model->checkUsernameExists($username);
}

function register(){

}

function update(){
        //saves changes to database
        //copies $user_data elements into $user_model database rows
}

function getActiveUser(){
    return $this->user_data;
}
function setActiveUser($user){
    $this->user_data = $user;
}


}