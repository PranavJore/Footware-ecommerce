<?php
	// Account details
	$apiKey = urlencode('umEqKtYk3zY-OSkCWZtEra8eqBX6gbwcn1rpezzC2y');
	
    // Message details
    $ran= rand(111111,999999);
	$numbers = array(918779624069);
	$sender = urlencode('TXTLCL');
	$message = rawurlencode($ran.' ye le ONE TIME PASSWORD(OTP)');
 
	$numbers = implode(',', $numbers);
?>