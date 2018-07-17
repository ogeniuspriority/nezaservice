<?php

include ("../includes/conn/config.php");
include ("../includes/classes/database.php");
$theNumber = $_POST['number_field'];
$key_code = mt_rand(1000, 9999);
$Date = date("Y-m-d H:i:s");
$sqlNDSUpdateRegistration = "UPDATE ogenius_nds_db_normal_users SET
	ogenius_nds_db_normal_users_activation_code='{$key_code}',
		ogenius_nds_db_normal_users_regdate='{$Date}'
	 WHERE 
	ogenius_nds_db_normal_users_tel='{$theNumber}' 
	 ";

if ($resQuery = $database -> query($sqlNDSUpdateRegistration)) {
	$number = $phone;
	$message = $key_code;
	$page = file_get_contents("https://api.clockworksms.com/http/send.aspx?key=5d173c94c7a6ed0346a23fa759188ceb14c2caec&to=" . $number . "&content=" . $message . "");
	echo "" . $page;
	echo "1000";
}else{
	echo "Resend";
}

//-----CLOSE CONNECTION

//-----
?>
