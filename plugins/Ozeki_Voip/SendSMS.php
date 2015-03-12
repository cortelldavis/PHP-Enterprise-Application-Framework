<?php
	$serverUrl = $_POST['tbServerUrl'];
	$apiExtension = $_POST['tbApiExtension'];
	$sender = $_POST['tbSender'];
	$recipient = $_POST['tbRecipient'];
	$message = $_POST['tbMessage'];
	$url = $_POST['tbUrl'];	
	
	echo "<b>Response: </b>";
	echo Send( CreateUrl($serverUrl, $apiExtension, $sender, $recipient, $message, $url) );	
	
	function CreateUrl($pServerUrl, $pApiExtension, $pSender, $pRecipient, $pMessage, $pUrl)
	{
		$server = $pServerUrl;
		
		if ( substr($server, -1) != '/' )
			$server = $server . '/';
			
		$server = $server . '?';
		
		$commandParams['Command'] = "SendSMS";	
		$commandParams['ApiExtension'] = $pApiExtension;
		$commandParams['Sender'] = $pSender;
		$commandParams['Recipient'] = $pRecipient;
		$commandParams['Message'] = $pMessage;
		$commandParams['DeliveryReportUrl'] = $pUrl;
		
		$command = http_build_query($commandParams);
		
		return $server . $command;
	}
	
	function Send($pUrl)
	{
		$ch = curl_init();
		
		curl_setopt($ch, CURLOPT_URL, $pUrl);	
		curl_setopt($ch, CURLOPT_POST, False);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		
		$response = curl_exec($ch);
		
		curl_close($ch);
		
		return $response;
	}
?>