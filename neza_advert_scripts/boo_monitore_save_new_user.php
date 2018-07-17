<?php
require_once ("../includes/conn/config.php");
?>
<?php
require_once ("../includes/classes/database.php");
?>
<?php
$database = new mysqldatabase();
$Names_boo_reg = $_POST['Names_boo_reg'];
$Username_boo_reg = $_POST['Username_boo_reg'];
$Email_boo_reg = $_POST['Email_boo_reg'];
$Tel_boo_reg = $_POST['Tel_boo_reg'];
$Password_boo_reg = $_POST['Password_boo_reg'];
$Password_boo_reg = md5($Password_boo_reg);

$sqlCheck = "SELECT * FROM boo_monitor_users WHERE  boo_monitor_users_username ='{$Username_boo_reg}' ";
$queryCheck = $database -> query($sqlCheck);
$counterCheck = 0;
while ($row = mysqli_fetch_array($queryCheck)) {
	$counterCheck++;
}
if ($counterCheck == 0) {

	$date = date("Y-m-d H:i:s");

	$sql = "INSERT INTO boo_monitor_users (boo_monitor_users_names,boo_monitor_users_username,boo_monitor_users_email,boo_monitor_users_tel,boo_monitor_users_password,boo_monitor_users_regdate) 
	VALUES ('{$Names_boo_reg}','{$Username_boo_reg}','{$Email_boo_reg}','{$Tel_boo_reg}','{$Password_boo_reg}','{$date}') ";
	if ($query = $database -> query($sql)) {
		echo "1000";
	} else {
		echo "User has not  been created! " . mysqli_error();
	}
} else {
	echo "username not available.";
}
?>