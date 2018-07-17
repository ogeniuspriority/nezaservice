<?php

include ("../includes/conn/config.php");
include ("../includes/classes/database.php");
$postId = $_POST['TheCommentID'];

$Date = date("Y-m-d H:i:s");
//---

$sqlNDSquery = "UPDATE ogenius_nds_db_community_posts_comments
SET 	ogenius_nds_db_community_posts_comments_active_status='1' WHERE 
ogenius_nds_db_community_posts_comments_id='{$postId}' ";
if ($resNDS_reg = $database -> query($sqlNDSquery)) {
  echo "1000";
} else {

}
?>
