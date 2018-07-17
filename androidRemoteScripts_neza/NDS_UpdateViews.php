<?php

include ("../includes/conn/config.php");
include ("../includes/classes/database.php");
$postId = $_POST['postId'];

$Date = date("Y-m-d H:i:s");
//---
$sql_Posts = "SELECT ogenius_nds_db_community_posts_views FROM 
ogenius_nds_db_community_posts WHERE 
	ogenius_nds_db_community_posts_id='{$postId}' ";
$views = 0;
if ($query_Posts = $database -> query($sql_Posts)) {
	while ($res_Posts = mysqli_fetch_array($query_Posts)) {
		$views = $res_Posts['ogenius_nds_db_community_posts_views'];
	}
}
$views = $views + 1;
$sqlNDSquery = "UPDATE ogenius_nds_db_community_posts
SET ogenius_nds_db_community_posts_views='{$views}' WHERE 
ogenius_nds_db_community_posts_id='{$postId}' ";
if ($resNDS_reg = $database -> query($sqlNDSquery)) {
	$val = 2017;
	echo "" . $val;
} else {
	echo "100";
}
?>
