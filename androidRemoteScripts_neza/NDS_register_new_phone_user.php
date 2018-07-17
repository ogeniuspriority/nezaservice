<?php

include ("../includes/conn/config.php");
include ("../includes/classes/database.php");
$amazinaYombi = $_POST['amazinaYombi'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password_ = $_POST['password_'];

$Date = date("Y-m-d H:i:s");

//------------Sanitize the fields---------
$amazinaYombi = addslashes($amazinaYombi);
$email = addslashes($email);
//----------------Check if number exists---
$password_ = md5($password_);
$n_b = 0;
$sqlNDS_user = "SELECT * FROM ogenius_nds_db_normal_users WHERE 
ogenius_nds_db_normal_users_tel='{$phone}' AND ogenius_nds_db_normal_users_activated=1 ORDER BY ogenius_nds_db_normal_users_id  DESC LIMIT 1";
if ($queryNDS_user = $database -> query($sqlNDS_user)) {
	while ($resG = $database -> fetch_array($queryNDS_user)) {
		$n_b++;
	}
}
if ($n_b == 0) {
	//------------hash password--------------------
	
	$key_code = mt_rand(1000, 9999);
	//-----------------
	$sqlNDSquery = "INSERT INTO ogenius_nds_db_normal_users
			(ogenius_nds_db_normal_users_email,ogenius_nds_db_normal_users_tel,
			ogenius_nds_db_normal_users_password,ogenius_nds_db_normal_users_regdate,
			ogenius_nds_db_normal_users_names,ogenius_nds_db_normal_users_activation_code)VALUES
			('{$email}','{$phone}','{$password_}'
			,'{$Date}','{$amazinaYombi}','{$key_code}') ";
	if ($resNDS_reg = $database -> query($sqlNDSquery)) {
		//--------------------------------------------------
		$number = $phone;
		$message = $key_code;
		$page = file_get_contents("https://api.clockworksms.com/http/send.aspx?key=5d173c94c7a6ed0346a23fa759188ceb14c2caec&to=" . $number . "&content=" . $message . "");
		echo "" . $page;
		echo "1000";

	} else {
		echo "1000";
	}
} else {
	$key_code = mt_rand(1000, 9999);
	$sqlNDSUpdateRegistration = "UPDATE ogenius_nds_db_normal_users SET
	ogenius_nds_db_normal_users_activation_code='{$key_code}'
	,ogenius_nds_db_normal_users_regdate='{$Date}',
	ogenius_nds_db_normal_users_email='{$email}',
	ogenius_nds_db_normal_users_names='{$amazinaYombi}',
	ogenius_nds_db_normal_users_password='{$password_}'
	 WHERE 
	ogenius_nds_db_normal_users_tel='{$phone}' 
	 ";

	if ($resQuery = $database -> query($sqlNDSUpdateRegistration)) {
		$number = $phone;
		$message = $key_code;
		$page = file_get_contents("https://api.clockworksms.com/http/send.aspx?key=5d173c94c7a6ed0346a23fa759188ceb14c2caec&to=" . $number . "&content=" . $message . "");
		//echo "" . $page;
		echo "1000";
	}

}

//-----CLOSE CONNECTION

//-----
?>
