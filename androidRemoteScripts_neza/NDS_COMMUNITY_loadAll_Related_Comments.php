<?php

include ("../includes/conn/config.php");
include ("../includes/classes/database.php");
$PostId=$_POST['PostId'];
$LastComment_id=$_POST['LastComment_id'];
$orientation=$_POST['orientation'];

//--------------------------
$sql_Posts_Comments = "SELECT 
			ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_id,
			ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_commentator_name,
			ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_comment,
			ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_posts_post_id,
			ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_regdate,
			ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_commentator_id,
			ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_avatar,
			ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_names,
			ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id	
			 FROM ogenius_nds_db_community_posts_comments
			LEFT JOIN ogenius_nds_db_normal_users
			ON ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_commentator_id=ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id
WHERE 	ogenius_nds_db_community_posts_comments_posts_post_id='{$PostId}'
AND     ogenius_nds_db_community_posts_comments_active_status='0'
 ORDER BY 
	ogenius_nds_db_community_posts_comments_regdate DESC limit 60


";

if ($query_Posts_Comments = $database -> query($sql_Posts_Comments)) {
	while ($res_ = mysqli_fetch_array($query_Posts_Comments)) {
		$posts_Info_Comments[] = $res_;
	}

}
print("{\"Comments\":" . json_encode($posts_Info_Comments) . "}");


?>
