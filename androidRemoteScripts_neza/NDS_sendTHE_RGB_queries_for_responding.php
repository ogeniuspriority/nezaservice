<?php

include ("../includes/conn/config.php");
include ("../includes/classes/database.php");

$query = $_POST['query'];
$local_query_id = $_POST['local_query_id'];
$myId = $_POST['myId'];
$queryOrientation = $_POST['queryOrientation'];
$query = addslashes($query);
$queryOrientation = addslashes($queryOrientation);

$Date = date("Y-m-d H:i:s");
$sqlNDSquery = "INSERT INTO ogenius_nds_db_rgb_query
			(ogenius_nds_db_rgb_query_query,ogenius_nds_db_rgb_query_date,
			ogenius_nds_db_rgb_query_query_provider,ogenius_nds_db_rgb_query_orientation,
			ogenius_nds_db_rgb_query_local_query_id
			)VALUES
			('{$query}','{$Date}','{$myId}','{$queryOrientation}','{$local_query_id}') ";
if ($resNDS_reg = $database -> query($sqlNDSquery)) {

	//----------------
	$outputRegCreds = array();
	//-----------
	$sqlGetUser = "SELECT * FROM ogenius_nds_db_rgb_query  WHERE
		ogenius_nds_db_rgb_query_local_query_id='{$local_query_id}' 
		ORDER BY ogenius_nds_db_rgb_query_id DESC LIMIT 1
		";
	$queryGetUser = $database -> query($sqlGetUser);
	while ($resGetUser = $database -> fetch_array($queryGetUser)) {
		//---update query status now--ogenius_nds_db_rgb_query_sent
		$sqlNDSUpdateRegistration = "UPDATE ogenius_nds_db_rgb_query SET 
			ogenius_nds_db_rgb_query_sent=1 WHERE 
			ogenius_nds_db_rgb_query_local_query_id='{$local_query_id}' ";

		if ($resQuery = $database -> query($sqlNDSUpdateRegistration)) {
			$outputRegCreds[] = $resGetUser;
		}

	}
	header("Content-type: application/json");
	print("{\"NDS_data_query_send\":" . json_encode($outputRegCreds) . "}");

}
?>
