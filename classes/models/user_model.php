<?php
/*
 user model performs all operations on the data (be it incoming, outgoing, database, files ... data)
*/

class User_Model
{
    public $user_model;
    private $conn;

    function __construct(){
	
	$servername = "localhost";
	$username = "root";
	$password = "password";
	$dbname = "application";

// Create connection
	$this->conn = new mysqli($servername, $username, $password, $dbname);
    }


   public function __get($var) {
        throw new Exception("Invalid property $var");
    }

	public function __set($key, $value) {
    $whitelist = array("firstname", "lastname");
    if(!in_array($key, $whitelist))
        throw new Exception("Invalid property");
}

       
}
?>