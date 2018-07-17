<?php

include ("../includes/conn/config.php");
include ("../includes/classes/database.php");
$comment = $_POST['comment_2017'];
$Commentator_id = $_POST['common_user_settings_the_id'];
$Parent_Post_id = $_POST['theNdsPostId'];
$Date = date("Y-m-d H:i:s");

//------------Sanitize the fields---------
$comment = addslashes($comment);
//--
$time_stamp = $Date;

//-----------------
$sqlNDS_post_commune = "INSERT INTO ogenius_nds_db_community_posts_comments
            (ogenius_nds_db_community_posts_comments_comment,ogenius_nds_db_community_posts_comments_posts_post_id,
             ogenius_nds_db_community_posts_comments_regdate,ogenius_nds_db_community_posts_comments_commentator_id)VALUES
            ('{$comment}','{$Parent_Post_id}','{$Date}','{$Commentator_id}') ";
if ($resNDS_post_commune = $database->query($sqlNDS_post_commune)) {
    //--------------------------------------------------
    $sqlGetCommentCount = "SELECT * From ogenius_nds_db_community_posts_comments"
            . " WHERE ogenius_nds_db_community_posts_comments_posts_post_id='{$Parent_Post_id}' ";
    $res_num = $database->query($sqlGetCommentCount);
    echo $database->num_rows($res_num);
} else {
    echo "100ee0";
}

//-----
?>
