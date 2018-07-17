<?php
// Where the file is going to be placed
include ("../includes/conn/config.php");
include ("../includes/classes/database.php");
error_reporting(E_ALL);

$schoolDateReg = date("Y-m-d H:i:s");
if (isset($_POST['ImageName'])) {
	$imgname = "pregnancycare_" . rand(22222, 9999999) . "profile" . $_POST['ImageName'];
	$imsrc = base64_decode($_POST['base64']);
	$fp = fopen("../uploaded_images/" . $imgname, 'w', "../uploaded_images/");
	$file_path = "../uploaded_images/";
	fwrite($fp, $imsrc);
	if (fclose($fp)) {
		foreach ($_SERVER as $key => $value) {
			//echo '$_SERVER["' . $key . '"] = ' . $value . "<br />";
		}
		$poster = $_POST['poster'];
		//---------------------detect duplicate email or tel in database

		$schoolDateReg = date("Y-m-d H:i:s");
		//-------------------------------fetch for profile avatar----
		$sqlCheck = "UPDATE preganacycare_users SET preganacycare_users_profileimage='{$imgname}' WHERE preganacycare_users_username= '{$poster}'";
		if($queryCheck = $database -> query($sqlCheck)){
			echo "Image uploaded";
		}else{
			echo "Error uploading image".mysqli_error();
		}
		//----Avatars
		

		
	} else {
		echo "Error uploading image";
	}
}
?>

?>