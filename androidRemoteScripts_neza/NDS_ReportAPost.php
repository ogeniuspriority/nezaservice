<?php

include ("../includes/conn/config.php");
include ("../includes/classes/database.php");
$postId = $_POST['postId'];
$theComment = $_POST['theComment'];
$theCommentator = $_POST['theCommentator'];

$Date = date("Y-m-d H:i:s");
//-------------
$reportFladCount = 0;
$sql_Posts_Comments_COUNT = "SELECT COUNT(*) FROM  ogenius_nds_db_community_posts_i_flags WHERE
	ogenius_nds_db_community_posts_i_flags_post_id='{$postId}' AND
		ogenius_nds_db_community_posts_i_flags_report_comment IS NOT NULL";

if ($query_Posts_Comments_COUNT = $database -> query($sql_Posts_Comments_COUNT)) {
	while ($res__COUNT = mysqli_fetch_array($query_Posts_Comments_COUNT)) {
		$reportFladCount = $res__COUNT;
	}

}
//---
$count = 0;
$sql_Posts = "SELECT *  FROM 
ogenius_nds_db_community_posts_i_flags WHERE 
	ogenius_nds_db_community_posts_i_flags_liker_id='{$theCommentator}'
	AND ogenius_nds_db_community_posts_i_flags_post_id='{$postId}'
	AND ogenius_nds_db_community_posts_i_flags_report_comment!='' ";

if ($query_Posts = $database -> query($sql_Posts)) {
	while ($res_Posts = mysqli_fetch_array($query_Posts)) {
		$reports = $res_Posts['ogenius_nds_db_community_posts_i_flags_report_comment'];

		$count++;

	}
}
if ($count == 0) {
	//-----------------
	$sqlNDSquery = "INSERT INTO ogenius_nds_db_community_posts_i_flags
			(ogenius_nds_db_community_posts_i_flags_post_id,
			ogenius_nds_db_community_posts_i_flags_report_comment,
			ogenius_nds_db_community_posts_i_flags_liker_id,
			ogenius_nds_db_community_posts_i_flags_regdate)VALUES
			('{$postId}','{$theComment}','{$theCommentator}','{$Date}') ";
	if ($resNDS_reg = $database -> query($sqlNDSquery)) {
		//-----------
		if ($reportFladCount >= 50) {
			$sqlNDSquery = "UPDATE ogenius_nds_db_community_posts
SET 	ogenius_nds_db_community_posts_active='{1}' WHERE 
ogenius_nds_db_community_posts_id='{$postId}' ";
			if ($resNDS_reg = $database -> query($sqlNDSquery)) {

			} else {

			}

		}
		//---
		echo "cyuma";
	} else {
		echo "14";
	}
} else {
	echo "cyuma";
}
?>
