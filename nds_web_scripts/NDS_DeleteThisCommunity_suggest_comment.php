<?php

include ("../includes/conn/config.php");
include ("../includes/classes/database.php");
$postId = $_POST['TheCommentID'];

$Date = date("Y-m-d H:i:s");
//---

$sqlNDSquery = "UPDATE ogenius_nds_db_rgb_query_comment
SET 	ogenius_nds_db_rgb_query_comment_active='1' WHERE 
ogenius_nds_db_rgb_query_comment_id='{$postId}' ";
if ($resNDS_reg = $database -> query($sqlNDSquery)) {
  echo "1000";
} else {

}
?>
