<?php
require_once ("../includes/conn/config.php");
?>
<?php
require_once ("../includes/classes/database.php");
?>
<?php

$database = new mysqldatabase();

$id = $_POST['id'];

$date = date("Y-m-d H:i:s");

//-----------------

$sql = "DELETE FROM boo_adverts_for
WHERE boo_adverts_for_id='{$id}'
 ";
if ($query = $database -> query($sql)) {
	echo "1000";
} else {
	echo "User has not  been created! " . mysqli_error();
}
?>