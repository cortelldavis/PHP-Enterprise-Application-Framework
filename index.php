<?php 
session_start();


switch ($_GET["uri"]) {
    case "home":
        include('classes/controllers/home_controller.php');
        break;
    case "dashboard":
        include('classes/controllers/dashboard_controller.php');
        break;
    case "login":
        include('classes/controllers/login_controller.php');
        break;
    case "logout":
        include('classes/controllers/logout_controller.php');
        break;
       default:
    echo "page not found";
    phpinfo();
}

?>

