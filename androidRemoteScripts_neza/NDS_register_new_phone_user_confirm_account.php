<?php

include ("../includes/conn/config.php");
include ("../includes/classes/database.php");
$theCode = $_POST['theCode'];
$theNumber = $_POST['theNumber'];

$Date = date("Y-m-d H:i:s");

$sqlNDS_user = "SELECT * FROM ogenius_nds_db_normal_users WHERE 
ogenius_nds_db_normal_users_tel='{$theNumber}' AND 
	ogenius_nds_db_normal_users_activation_code='{$theCode}'  ";
if ($queryNDS_user = $database -> query($sqlNDS_user)) {
	while ($resG = $database -> fetch_array($queryNDS_user)) {
		//----check timer date stamp--
		$Date = date("Y-m-d H:i:s");
		$datetime1 = new DateTime($resG['ogenius_nds_db_normal_users_regdate']);

		$datetime2 = new DateTime($Date);
		$interval = $datetime1 -> diff($datetime2);
		$hours = $interval -> format('%h');
		$minutes = $interval -> format('%i');
		$seconds = $interval -> format('%s');
		//---check if the codes match--
		$code = $resG['ogenius_nds_db_normal_users_activation_code'];
		if ($minutes < 5 && $code == $theCode) {
			//---------
			$sqlNDSUpdateRegistration = "UPDATE ogenius_nds_db_normal_users SET
	ogenius_nds_db_normal_users_activated=1,ogenius_nds_db_normal_users_regdate='{$Date}'
	 WHERE 
	ogenius_nds_db_normal_users_tel='{$theNumber}' AND 
	ogenius_nds_db_normal_users_activation_code='{$theCode}'  ";

			if ($resQuery = $database -> query($sqlNDSUpdateRegistration)) {
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

			} else {
				echo "Resend Third";
			}
		} else {
			echo "Resend second".$code."=".$theCode;
		}
	}

} else {
	echo "Resend first";
}
//------------Sanitize the fields---------

//-----CLOSE CONNECTION

//-----
?>
