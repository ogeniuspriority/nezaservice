<?php
// Where the file is going to be placed
$file_path = "audio_uploads/";
include ("includes/conn/config.php");
include ("includes/classes/database.php");

/* Add the original filename to our target path.
 Result is "uploads/filename.extension" */
$file_path = $file_path . "digital_" . rand(22222, 9999999) . "neza_" . rand(1000000, 9999999) . basename($_FILES['uploaded_file']['name']);
if (move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $file_path)) {
	//-----------------insert to db file name=================
	$schoolDateReg = date("Y-m-d H:i:s");
	$sql = "INSERT INTO nezadiditalservice_voicereceiver (nezadiditalservice_voicereceiver_regdate,nezadiditalservice_voicereceiver_voicename,
	nezadiditalservice_voicereceiver_panel) 
	VALUES ('{$schoolDateReg}','{$file_path}','{$file_path}')";
	$query = $database -> query($sql);
	echo "success";
} else {
	echo "fail";
}
?>