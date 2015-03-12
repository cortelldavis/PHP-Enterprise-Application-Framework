<?php
	$receiveTime = date("c");
	$outString = "Date: " . $receiveTime . "\r\n";
	$outString .= "Sender: " . $_REQUEST['Sender'] . "\r\n";
	$outString .= "Message: " . $_REQUEST['Message'];
	file_put_contents('sms.txt', $outString);	
?>