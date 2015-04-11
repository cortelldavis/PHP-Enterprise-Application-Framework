<?php

/*
address model performs all operations on the location data (be it incoming, outgoing, database, files ... data)
*/

class Address_Model{
	
	private $connection;

	public function __construct(){

		$servername = "localhost";
		$db_username = "root";
		$password = "password";
		$dbname = "application";

        // Create connection
		$this->connection = new mysqli($servername, $db_username, $password, $dbname);
	}

	function getAddress($user_id){
		$sql = "SELECT * FROM address WHERE user_id = '$user_id' AND primary_location = 1 LIMIT 1";
		$result = $this->connection->query($sql);

		return $result->fetch_assoc();
	}

	function insertAddress($user_id){
		$sql = "INSERT INTO address (street_number, street_name, city, state, country, postal_code, unit, user_id, address_id, primary_location)
		VALUES ('$username', '$street_number', '$street_name', '$city', '$state', '$country', '$postal_code', '$unit', '$user_id', '$address_id', '$primary_location')";
	}

}
