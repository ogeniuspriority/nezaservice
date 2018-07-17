<?php

include ("../includes/conn/config.php");
include ("../includes/classes/database.php");
//$_POST['select_directive'] = "allposts";
$OldId = $_POST['OldId'];
$NewId = $_POST['NewId'];
$OldId = $OldId - 50;
$json_array = array();
$posts_USERS = array();
$posts_Info_Comments = array();
$posts_Info_likes_COUNT = array();
$posts_Info_Comments_COUNT = array();
$posts_Info_likes_un_COUNT = array();
//$_firstId = $_POST['FirstId'];
$sql_Posts = "SELECT COUNT(*) AS mugabo FROM ogenius_nds_db_community_posts P 
WHERE  P.ogenius_nds_db_community_posts_id>'{$NewId}'
";

if ($query_Posts = $database -> query($sql_Posts)) {
	while ($res_Posts = mysqli_fetch_array($query_Posts)) {
		echo "" . $res_Posts['mugabo'];
	}

}
?>
