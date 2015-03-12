<?php
	$con=mysqli_connect("localhost","mysql.user","66GkjOSDBd","customers");
	$callerId = $_REQUEST['Caller'];
	$date = new DateTime();
	$now = $date->format('Y-m-d H:i:s');

	if(mysqli_connect_errno($con)) {
		//Failed to connent to database. Return OzML Response with the original caller id
	}
	else {
		$sqlQuery = $con->prepare('SELECT FullName FROM customers.customerentries WHERE CallerId = ?');
		$sqlQuery->bind_param('s', $callerId);
		$sqlQuery->execute();

		$result = $sqlQuery->get_result();
		$row = $result->fetch_assoc();
		if($row) {
		    $callerId = $row["FullName"];
		}
	}

print <<<END
        <Response>
            <Delay>1</Delay>
            <Speak>Good day $callerId! You have called our customer support hotline at $now.</Speak>
            <Speak>Your call has been noted, our assistans will call you back shortly.</Speak>
            <Delay>1</Delay>
            <Speak>For more information, visit our website.</Speak>
        </Response>
END;

	mysqli_close($con);
?>