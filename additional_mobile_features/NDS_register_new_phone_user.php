<?php

include ("../includes/conn/config.php");
include ("../includes/classes/database.php");
$userEmailPhone = $_POST['userName'];
$password_ = $_POST['passWord'];

$Date = date("Y-m-d H:i:s");

//------------Sanitize the fields---------
$userEmailPhone = addslashes($userEmailPhone);
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
	echo "failed";
	
}else{
	//---select all from Database--
				$outputRegCreds = array();
				$sqlGetUser = "SELECT * FROM ogenius_nds_db_normal_users  WHERE
		ogenius_nds_db_normal_users_tel='{$theNumber}' AND 
	   ogenius_nds_db_normal_users_activation_code='{$theCode}' 
		";
				$queryGetUser = $database -> query($sqlGetUser);
				while ($resGetUser = $database -> fetch_array($queryGetUser)) {

					$outputRegCreds[] = $resGetUser;

				}
				header("Content-type: application/json");
				print("{\"NDS_data_reg\":" . json_encode($outputRegCreds) . "}");
}



//-----CLOSE CONNECTION

//-----
?>
