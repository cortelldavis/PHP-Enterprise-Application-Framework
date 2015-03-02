<?php
/*
user controller should call the user model's methods to get the data ready to be passed to the view. The controller shouldn't perform any changes to the data, but it should test it to get the necessary action done properly.
*/
include('classes/models/user_model.php');


class User_Controller{
	
	public $user_model;
	   function __construct(){
	   $user_model = new User_Model();
    }

    function login(){

    }

    function register(){

    }

    function change(){

    }

    function logout(){

    }

    function __get(){

    }

    function __set(){

    }

}