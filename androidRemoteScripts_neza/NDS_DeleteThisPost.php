<?php

include ("../includes/conn/config.php");
include ("../includes/classes/database.php");
$postId = $_POST['postId'];

$Date = date("Y-m-d H:i:s");
//---

$sqlNDSquery = "UPDATE ogenius_nds_db_community_posts
SET 	ogenius_nds_db_community_posts_deletion='deleted'
,ogenius_nds_db_community_posts_active='1' WHERE 
ogenius_nds_db_community_posts_id='{$postId}' ";
if ($resNDS_reg = $database -> query($sqlNDSquery)) {
  echo "1000";
} else {

}
?>
