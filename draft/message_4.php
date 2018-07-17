<?php

$sendsms = "";
//initialise the sendsms variable

$param[To] = "250787374821";

$param[Message] = "Hello World";

$param[UserName] = "userxxxx";

$param[Password] = "passxxxx";

$param[Mask] = "DEMOSG";

$param[v] = "1.1";
//optional

$param[Type] = "Individual";
//Can be "Bulk/Group”

//We need to URL encode the values

foreach ($param as $key => $val) {

	$sendsms .= $key . "=" . urlencode($val);

	$sendsms .= "&";
	//append the ampersand (&) sign after each parameter/value

}

$sendsms = substr($sendsms, 0, strlen($sendsms) - 1);
//remove last ampersand (&) sign from the sendsms

$url = "http://www.smsgatewaycenter.com/library/send_sms_2.php?" . $sendsms;

$ch = curl_init($url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$curl_scraped_page = curl_exec($ch);

curl_close($ch);

echo $curl_scraped_page;
?>