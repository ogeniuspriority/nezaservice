<?php

include ("../includes/conn/config.php");
include ("../includes/classes/database.php");
//$_POST['select_directive'] = "allposts";
$OldId = $_POST['OldId'];
$NewId=$_POST['NewId'];
$OldId=$OldId-50;
$json_array = array();
$posts_USERS = array();
$posts_Info_Comments = array();
$posts_Info_likes_COUNT = array();
$posts_Info_Comments_COUNT = array();
$posts_Info_likes_un_COUNT = array();
//$_firstId = $_POST['FirstId'];
$sql_Posts = "SELECT
ogenius_nds_db_community_posts_id,ogenius_nds_db_community_posts_postdata,
ogenius_nds_db_community_posts_poster_id,ogenius_nds_db_community_posts_regdate,
ogenius_nds_db_community_posts_sent,ogenius_nds_db_community_posts_local_id,
ogenius_nds_db_community_posts_poster_names,ogenius_nds_db_community_posts_views

FROM ogenius_nds_db_community_posts P 
WHERE  P.ogenius_nds_db_community_posts_id<='{$NewId}'
 AND P.ogenius_nds_db_community_posts_id>='{$OldId}'

 AND P.ogenius_nds_db_community_posts_active='0'
ORDER BY P.ogenius_nds_db_community_posts_id DESC LIMIT 100";

$posts_Info = array();
$id_post = "";
$id_poster = "";
if ($query_Posts = $database -> query($sql_Posts)) {
	while ($res_Posts = mysqli_fetch_array($query_Posts)) {
		$id_post = $res_Posts['ogenius_nds_db_community_posts_id'];
		$id_poster = $res_Posts['ogenius_nds_db_community_posts_poster_id'];

		//---
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
WHERE 	ogenius_nds_db_community_posts_comments_posts_post_id='{$id_post}'  
AND     ogenius_nds_db_community_posts_comments_active_status='0' ORDER BY 
	ogenius_nds_db_community_posts_comments_regdate DESC LIMIT 60


";

		if ($query_Posts_Comments = $database -> query($sql_Posts_Comments)) {
			while ($res_ = mysqli_fetch_array($query_Posts_Comments)) {
				$posts_Info_Comments[] = $res_;
			}

		}
		//---------COMMENTS COUNT
		$sql_Posts_Comments_COUNT = "SELECT COUNT(*) AS All_Attached_Comments FROM ogenius_nds_db_community_posts_comments WHERE
ogenius_nds_db_community_posts_comments_posts_post_id='{$id_post}'
AND     ogenius_nds_db_community_posts_comments_active_status='0'";

		if ($query_Posts_Comments_COUNT = $database -> query($sql_Posts_Comments_COUNT)) {
			while ($res__COUNT = mysqli_fetch_array($query_Posts_Comments_COUNT)) {
				$posts_Info_Comments_COUNT[] = $res__COUNT;
			}

		}
		//---likes_COUNT
		$sql_Posts_likes_COUNT = "SELECT COUNT(*) AS LikeCompilations  FROM ogenius_nds_db_community_posts_i_flags   WHERE
ogenius_nds_db_community_posts_i_flags_post_id='{$id_post}'
AND ogenius_nds_db_community_posts_i_flags_like_status='1'";

		if ($query_Posts_likes_COUNT = $database -> query($sql_Posts_likes_COUNT)) {
			while ($res_likes_COUNT = mysqli_fetch_array($query_Posts_likes_COUNT)) {
				$posts_Info_likes_COUNT[] = $res_likes_COUNT;
			}

		}
		//---UNLIKE COUNT
		$sql_Posts_un_likes_COUNT = "SELECT COUNT(*) AS UnLikeCompilations FROM ogenius_nds_db_community_posts_i_flags   WHERE
ogenius_nds_db_community_posts_i_flags_post_id='{$id_post}'
AND ogenius_nds_db_community_posts_i_flags_like_status='2'";

		if ($query_Posts_un_likes_COUNT = $database -> query($sql_Posts_un_likes_COUNT)) {
			while ($res_un_likes_COUNT = mysqli_fetch_array($query_Posts_un_likes_COUNT)) {
				$posts_Info_likes_un_COUNT[] = $res_un_likes_COUNT;
			}

		}
		//---
		//---USERS TABLE
		$sql_USERS = "SELECT * FROM ogenius_nds_db_normal_users   WHERE
ogenius_nds_db_normal_users_id='{$id_poster}' 
";

		if ($query_USERS = $database -> query($sql_USERS)) {
			while ($res_USERS = mysqli_fetch_array($query_USERS)) {
				$posts_USERS[] = $res_USERS;
			}

		}
		$posts_Info[] = $res_Posts;
		//--

	}

}
header("Content-type: application/json");
print("{\"posts\":" . json_encode($posts_Info) . "}");
print("--cyuma2017--");
print("{\"Comments\":" . json_encode($posts_Info_Comments) . "}");
print("--cyuma2017--");
print("{\"CmmentsCount\":" . json_encode($posts_Info_Comments_COUNT) . "}");
print("--cyuma2017--");
print("{\"LikesCount\":" . json_encode($posts_Info_likes_COUNT) . "}");
print("--cyuma2017--");
print("{\"UnlikesCount\":" . json_encode($posts_Info_likes_un_COUNT) . "}");
print("--cyuma2017--");
print("{\"UserCreds\":" . json_encode($posts_USERS) . "}");
print("--cyuma2017--");
?>
