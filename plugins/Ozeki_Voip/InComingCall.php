<?php
	if (getdate()['hours'] < "20")
	{
		print "<Response>";
		print "<Speak>Have a good day!</Speak>";
		print "</Response>";
	}
	else
	{
		print "<Response>";
		print "<Speak>Have a good night!</Speak>";
		print "</Response>";
	}
?>