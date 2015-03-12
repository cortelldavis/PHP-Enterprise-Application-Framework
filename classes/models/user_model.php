<?php
/*
user model performs all operations on the data (be it incoming, outgoing, database, files ... data)
*/

class User_Model
{
    private $connection;

    function __construct(){

        $servername = "localhost";
        $db_username = "root";
        $password = "password";
        $dbname = "application";

// Create connection
        $this->connection = new mysqli($servername, $db_username, $password, $dbname);
    }

    function verifyCredentials($username,$password){
        $sql = "SELECT * FROM user WHERE username = '$username'  ";
        $result = $this->connection->query($sql);
        while($row = $result->fetch_assoc()) {
            if($username==$row["username"]&&$password==$row["password"]){
                return true;
            }
        }
        return false;
    }

    function checkUsernameExists($username){

        $sql = "SELECT * FROM user WHERE username = '$username' LIMIT 1";
        $result = $this->connection->query($sql);
        return $result->num_rows;

    }

    function getUser($username){
        $sql = "SELECT * FROM user WHERE username = '$username' LIMIT 1";
        $result = $this->connection->query($sql);

        return $result;
    }
}

/*
public function __get($var) {
throw new Exception("Invalid property $var");
}

public function __set($key, $value) {
$whitelist = array("firstname", "lastname");
if(!in_array($key, $whitelist))
throw new Exception("Invalid property");
}
*/
/*

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

*/
?>