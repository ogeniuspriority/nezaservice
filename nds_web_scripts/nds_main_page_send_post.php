<?php

include ("../includes/conn/config.php");
include ("../includes/classes/database.php");
$postData = $_POST['main_page_community_post_field'];
$Id_poster = $_POST['common_user_settings_the_id'];
$old_id = 0;
$Date = date("Y-m-d H:i:s");

//------------Sanitize the fields---------
$postData = addslashes($postData);
//--
$time_stamp = $Date;

//-----------------
$sqlNDS_post_commune = "INSERT INTO ogenius_nds_db_community_posts
            (ogenius_nds_db_community_posts_postdata,ogenius_nds_db_community_posts_poster_id,
             ogenius_nds_db_community_posts_regdate,ogenius_nds_db_community_posts_local_id)VALUES
            ('{$postData}','{$Id_poster}','{$Date}','{$old_id}') ";
if ($resNDS_post_commune = $database -> query($sqlNDS_post_commune)) {
    //--------------------------------------------------
    $sqlNDS_user = "SELECT * FROM ogenius_nds_db_community_posts
    WHERE ogenius_nds_db_community_posts_local_id='{$old_id}'
    ORDER BY ogenius_nds_db_community_posts_id DESC  ";
    if ($queryNDS_user = $database -> query($sqlNDS_user)) {
        echo "1000";
    }
} else {
    echo "10r00";
}

//-----
?>
