<?php

/*DEBUG FLAG , SHOWS ERRORS*/
$debug=false;
if($debug){
ini_set('display_errors', 1);
error_reporting(E_ALL ^ E_NOTICE);
}

session_start(); 

/* Procedural file full of php functions for various tasks */

/*Connect to database */

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