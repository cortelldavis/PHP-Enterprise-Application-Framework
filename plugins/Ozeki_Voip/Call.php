<?php
	$serverUrl = $_POST['tbServerUrl'];
	$dialed = $_POST['tbDialed'];
	$apiExtension = $_POST['tbApiExtension'];
	$callerId = $_POST['tbCallerId'];
	$callerDisplayName = $_POST['tbCallerDisplayName'];
	$url = $_POST['tbUrl'];	
	$errorUrl = $_POST['tbErrorUrl'];
	
	echo "<b>Response: </b>";
	echo Call( CreateUrl($serverUrl, $dialed, $apiExtension, $callerId, $callerDisplayName, $url, $ErrorUrl) );	
	
	function CreateUrl($pServerUrl, $pDialed, $pApiExtension, $pcallerId, $pCallerDisplayName, $pUrl, $pErroUrl)
	{
		$server = $pServerUrl;
		
		if ( substr($server, -1) != '/' )
			$server = $server . '/';
			
		$server = $server . '?';
		
		$commandParams['Command'] = "Call";	
		$commandParams['Dialed'] = $pDialed;
		$commandParams['ApiExtension'] = $pApiExtension;
		$commandParams['CallerId'] = $pCallerId;
		$commandParams['CallerDisplayName'] = $pCallerDisplayName;
		$commandParams['Url'] = $pUrl;
		$commandParams['ErrorUrl'] = $pErrorUrl;
		
		$command = http_build_query($commandParams);
		
		return $server . $command;
	}
	
	function Call($pUrl)
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