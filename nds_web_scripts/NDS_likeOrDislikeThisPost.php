<?php

include ("../includes/conn/config.php");
include ("../includes/classes/database.php");
$postId = $_POST['theNdsPostId'];
$likeOrDislikeTag = $_POST['likeOrDislikeTag'];
$likeOrDislikePosterId = $_POST['common_user_settings_the_id'];

$Date = date("Y-m-d H:i:s");
//---
$appearCounter = 0;
$sql_Posts_Comments = "SELECT * FROM ogenius_nds_db_community_posts_i_flags WHERE
ogenius_nds_db_community_posts_i_flags_liker_id='{$likeOrDislikePosterId}'
AND ogenius_nds_db_community_posts_i_flags_post_id='{$postId}'
";
if ($query_Posts_Comments = $database->query($sql_Posts_Comments)) {
    while ($res_ = mysqli_fetch_array($query_Posts_Comments)) {
        $appearCounter++;
    }
}

//------------Sanitize the fields---------
if ($likeOrDislikeTag == "liked") {

    //-----------------
    if ($appearCounter == 0) {
        $sqlNDSquery = "INSERT INTO ogenius_nds_db_community_posts_i_flags
			(ogenius_nds_db_community_posts_i_flags_post_id,
			ogenius_nds_db_community_posts_i_flags_like_status,
			ogenius_nds_db_community_posts_i_flags_liker_id,
			ogenius_nds_db_community_posts_i_flags_regdate)VALUES
			('{$postId}','1','{$likeOrDislikePosterId}','{$Date}') ";
        if ($resNDS_reg = $database->query($sqlNDSquery)) {
            //-----------
            $sql_Posts = "SELECT ogenius_nds_db_community_posts_views FROM 
ogenius_nds_db_community_posts WHERE 
	ogenius_nds_db_community_posts_id='{$postId}' ";
            $views = 0;
            if ($query_Posts = $database->query($sql_Posts)) {
                while ($res_Posts = mysqli_fetch_array($query_Posts)) {
                    $views = $res_Posts['ogenius_nds_db_community_posts_views'];
                }
            }
            $views = $views + 1;
            $sqlNDSquery = "UPDATE ogenius_nds_db_community_posts
SET ogenius_nds_db_community_posts_views='{$views}' WHERE 
ogenius_nds_db_community_posts_id='{$postId}' ";
            if ($resNDS_reg = $database->query($sqlNDSquery)) {
                
            } else {
                
            }
            //--------------------------------------------------
            $val = 2017;
            $sqlGetCommentCount = "SELECT * From ogenius_nds_db_community_posts_i_flags"
                    . " WHERE ogenius_nds_db_community_posts_i_flags_post_id='{$postId}'"
                    . " AND ogenius_nds_db_community_posts_i_flags_like_status= '1' ";
            $res_num = $database->query($sqlGetCommentCount);
            //-----------------------
            $sqlGetCommentCount_000 = "SELECT * From ogenius_nds_db_community_posts_i_flags"
                    . " WHERE ogenius_nds_db_community_posts_i_flags_post_id='{$postId}'"
                    . " AND ogenius_nds_db_community_posts_i_flags_like_status= '2' ";
            $res_num_000 = $database->query($sqlGetCommentCount_000);
            //-----------
            echo $database->num_rows($res_num) . "," . $database->num_rows($res_num_000) . "," . $views;
            //echo "1000";
        } else {
            
        }
    } else {
        $sql_Posts = "SELECT ogenius_nds_db_community_posts_views FROM 
ogenius_nds_db_community_posts WHERE 
	ogenius_nds_db_community_posts_id='{$postId}' ";
        $views = 0;
        if ($query_Posts = $database->query($sql_Posts)) {
            while ($res_Posts = mysqli_fetch_array($query_Posts)) {
                $views = $res_Posts['ogenius_nds_db_community_posts_views'];
            }
        }
        $sqlNDSquery = "UPDATE ogenius_nds_db_community_posts_i_flags SET			
			ogenius_nds_db_community_posts_i_flags_like_status='1',			
			ogenius_nds_db_community_posts_i_flags_regdate= '{$Date}'
			WHERE  
			ogenius_nds_db_community_posts_i_flags_liker_id='{$likeOrDislikePosterId}'
AND ogenius_nds_db_community_posts_i_flags_post_id='{$postId}'";
        if ($resNDS_reg = $database->query($sqlNDSquery)) {
            //-------------
            //---
            $val = 2017;
            $sqlGetCommentCount = "SELECT * From ogenius_nds_db_community_posts_i_flags"
                    . " WHERE ogenius_nds_db_community_posts_i_flags_post_id='{$postId}'"
                    . " AND ogenius_nds_db_community_posts_i_flags_like_status= '1' ";
            $res_num = $database->query($sqlGetCommentCount);
            //-----------------------
            $sqlGetCommentCount_000 = "SELECT * From ogenius_nds_db_community_posts_i_flags"
                    . " WHERE ogenius_nds_db_community_posts_i_flags_post_id='{$postId}'"
                    . " AND ogenius_nds_db_community_posts_i_flags_like_status= '2' ";
            $res_num_000 = $database->query($sqlGetCommentCount_000);
            //-----------
            echo $database->num_rows($res_num) . "," . $database->num_rows($res_num_000) . "," . $views;
            //echo "1000";
        } else {
            echo "100";
        }
    }
} else if ($likeOrDislikeTag == "unliked") {
    if ($appearCounter == 0) {
        $sqlNDSquery = "INSERT INTO ogenius_nds_db_community_posts_i_flags
			(ogenius_nds_db_community_posts_i_flags_post_id,
			ogenius_nds_db_community_posts_i_flags_like_status,
			ogenius_nds_db_community_posts_i_flags_liker_id,
			ogenius_nds_db_community_posts_i_flags_regdate)VALUES
			('{$postId}','2','{$likeOrDislikePosterId}','{$Date}') ";
        if ($resNDS_reg = $database->query($sqlNDSquery)) {
            //--------------------------------------------------
            $sql_Posts = "SELECT ogenius_nds_db_community_posts_views FROM 
ogenius_nds_db_community_posts WHERE 
	ogenius_nds_db_community_posts_id='{$postId}' ";
            $views = 0;
            if ($query_Posts = $database->query($sql_Posts)) {
                while ($res_Posts = mysqli_fetch_array($query_Posts)) {
                    $views = $res_Posts['ogenius_nds_db_community_posts_views'];
                }
            }
            $views = $views + 1;
            $sqlNDSquery = "UPDATE ogenius_nds_db_community_posts
SET ogenius_nds_db_community_posts_views='{$views}' WHERE 
ogenius_nds_db_community_posts_id='{$postId}' ";
            if ($resNDS_reg = $database->query($sqlNDSquery)) {
                
            } else {
                
            }
            $val = 2017;
            $sqlGetCommentCount = "SELECT * From ogenius_nds_db_community_posts_i_flags"
                    . " WHERE ogenius_nds_db_community_posts_i_flags_post_id='{$postId}'"
                    . " AND ogenius_nds_db_community_posts_i_flags_like_status= '2' ";
            $res_num = $database->query($sqlGetCommentCount);
            //-----------------------
            $sqlGetCommentCount_000 = "SELECT * From ogenius_nds_db_community_posts_i_flags"
                    . " WHERE ogenius_nds_db_community_posts_i_flags_post_id='{$postId}'"
                    . " AND ogenius_nds_db_community_posts_i_flags_like_status= '1' ";
            $res_num_000 = $database->query($sqlGetCommentCount_000);
            echo $database->num_rows($res_num) . "," . $database->num_rows($res_num_000) . "," . $views;
        } else {
            echo "failed";
        }
    } else {
        $sql_Posts = "SELECT ogenius_nds_db_community_posts_views FROM 
ogenius_nds_db_community_posts WHERE 
	ogenius_nds_db_community_posts_id='{$postId}' ";
        $views = 0;
        if ($query_Posts = $database->query($sql_Posts)) {
            while ($res_Posts = mysqli_fetch_array($query_Posts)) {
                $views = $res_Posts['ogenius_nds_db_community_posts_views'];
            }
        }
        $sqlNDSquery = "UPDATE ogenius_nds_db_community_posts_i_flags SET			
			ogenius_nds_db_community_posts_i_flags_like_status='2',			
			ogenius_nds_db_community_posts_i_flags_regdate= '{$Date}'
			WHERE  
			ogenius_nds_db_community_posts_i_flags_liker_id='{$likeOrDislikePosterId}'
AND ogenius_nds_db_community_posts_i_flags_post_id='{$postId}'";
        if ($resNDS_reg = $database->query($sqlNDSquery)) {
            //---

            $val = 2017;
            $sqlGetCommentCount = "SELECT * From ogenius_nds_db_community_posts_i_flags"
                    . " WHERE ogenius_nds_db_community_posts_i_flags_post_id='{$postId}'"
                    . " AND ogenius_nds_db_community_posts_i_flags_like_status= '2' ";
            $res_num = $database->query($sqlGetCommentCount);
            //-----------------------
            $sqlGetCommentCount_000 = "SELECT * From ogenius_nds_db_community_posts_i_flags"
                    . " WHERE ogenius_nds_db_community_posts_i_flags_post_id='{$postId}'"
                    . " AND ogenius_nds_db_community_posts_i_flags_like_status= '1' ";
            $res_num_000 = $database->query($sqlGetCommentCount_000);
            //-----------
            echo $database->num_rows($res_num) . "," . $database->num_rows($res_num_000). "," .$views;
        } else {
            echo "failed";
        }
    }
}
?>
