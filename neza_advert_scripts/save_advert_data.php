<?php
require_once ("../includes/conn/config.php");
?>
<?php
require_once ("../includes/classes/database.php");
?>
<?php

$database = new mysqldatabase();

$your_Title = $_POST['your_Title'];
$repeat_number = $_POST['repeat_number'];
$interval_hours = $_POST['interval_hours'];
$advertUploaded = $_POST['advertUploaded'];
$advertSummary = $_POST['advertSummary'];
$url_link = $_POST['url_link'];



$date = date("Y-m-d H:i:s");

//-----------------

$sql = "INSERT INTO boo_adverts_for
(boo_adverts_for_title,boo_adverts_for_image,boo_adverts_for_summary,
boo_adverts_for_regdate,boo_adverts_for_repeat_time,
boo_adverts_for_interval,boo_adverts_for_link)
VALUES('{$your_Title}','{$advertUploaded}','{$advertSummary}',
'{$date}','{$repeat_number}','{$interval_hours}','{$url_link}'
)
 ";
if ($query = $database -> query($sql)) {
	echo "1000";
} else {
	echo "User has not  been created! " . mysqli_error();
}
?>