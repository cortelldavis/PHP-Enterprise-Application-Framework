<?php

session_start(); 

/* Procedural file full of php functions for various tasks */


function login_and_get(){
	$servername = "localhost";
	$db_username = "root";
	$password = "password";
	$dbname = "application";

// Create connection
	$conn = new mysqli($servername, $db_username, $password, $dbname);

	$ACTIVE_USER = array("username","email","password","verification_key", "date_created","first_name", "last_name","birth_date","gender","user_id","verification_status","login_status","phone_number","last_login");

	$sql = "SELECT * FROM user WHERE user_id = 1";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
// output data of each row
		while($row = $result->fetch_assoc()) {

			$ACTIVE_USER['user_id'] = $row["user_id"];
			$ACTIVE_USER['username'] = $row["username"];
			$ACTIVE_USER['first_name'] = $row["first_name"];
			$ACTIVE_USER['last_name'] = $row["last_name"];
			$ACTIVE_USER['email'] = $row["email"];
		}
	} else {
		echo "0 results";
	}

	print_r($ACTIVE_USER);
	#echo $ACTIVE_USER['first_name'];
}


//get active user and store into an array
//active users id should be set on log in along with is logged in variable
//on log out the ACTIVE_USER array should be cleared and his login status should be set to 0



#$ACTIVE_USER["address"] = array("street_address","zip","city","state");

/*DEBUG FLAG , SHOWS ERRORS*/
$debug=false;
if($debug){
	ini_set('display_errors', 1);
	error_reporting(E_ALL ^ E_NOTICE);
}

function printUsers(){

	$servername = "localhost";
	$username = "root";
	$password = "password";
	$dbname = "application";

// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "SELECT user_id, first_name, last_name FROM user";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
// output data of each row
		while($row = $result->fetch_assoc()) {
			echo "id: " . $row["user_id"]. " - Name: " . $row["first_name"]. " " . $row["last_name"]. "<br>";
		}
	} else {
		echo "0 results";
	}
}

function insertUser(){
	$servername = "localhost";
	$username = "root";
	$password = "password";
	$dbname = "application";

// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "INSERT INTO user(first_name, last_name, email,username)
	VALUES ('John', 'Doe', 'john@example.com','johndoe417')";

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

}


/*Connect to database */

function getDatabaseConnection(){
	$servername = "localhost";
	$username = "root";
	$password = "password";

// Create connection
	$conn = new mysqli($servername, $username, $password);
	return $conn;
}

/*CRUD*/
/*Create*/
/*Read*/

function isLoggedIn(){

}

/*Update*/
/*Delete*/

/* VERIFICATION*/
function checkPasswordsMatch(){}
function checkInputLength($desired_length){}

/* CAPTCHA */

function checkCaptcha(){
	if ($securimage->check($_POST['captcha_code']) == false) {
// the code was incorrect
// you should handle the error so that the form processor doesn't continue

// or you can use the following code if there is no validation or you do not know how
		echo "The security code entered was incorrect.<br /><br />";
		echo "Please go <a href='javascript:history.go(-1)'>back</a> and try again.";
		exit;
	}
}
?>