<?php

include ("../includes/conn/config.php");
include ("../includes/classes/database.php");
$PostId = $_POST['PostId'];
$LastComment_id = $_POST['LastComment_id'];
$FirstComment_id = $_POST['FirstComment_id'];

//--------------------------
$sql_Posts_Comments = "SELECT COUNT(*) AS mugabo		
			 FROM ogenius_nds_db_community_posts_comments
		WHERE ogenius_nds_db_community_posts_comments_posts_post_id='{$PostId}'	AND
		ogenius_nds_db_community_posts_comments_id >'{$FirstComment_id}' 
		AND     ogenius_nds_db_community_posts_comments_active_status='0'


";

if ($query_Posts_Comments = $database -> query($sql_Posts_Comments)) {
	while ($res_ = mysqli_fetch_array($query_Posts_Comments)) {

		echo "" . $res_['mugabo'];
	}

}
?>
