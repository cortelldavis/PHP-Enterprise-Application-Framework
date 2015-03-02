<?php



// Check connection
if (!getDatabaseConnection()) {
    die("Connection failed: " . mysqli_connect_error());
}

?>