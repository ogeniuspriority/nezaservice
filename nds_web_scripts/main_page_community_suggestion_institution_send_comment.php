<?php

include ("../includes/conn/config.php");
include ("../includes/classes/database.php");

//----

$queryID = $_POST['the2017_suggestId_MugaboS_Cedric'];
$common_user_settings_the_id = $_POST['common_user_settings_the_id'];
$CommentData = $_POST['main_page_institution_suggesttion_comment_data'];
$CommentData = addslashes($CommentData);
$date = date("Y-m-d H:i:s");

$external_visibility = $_POST['main_page_institution_suggest_comment_pool_view_strategy'];
$external_visibility = ($external_visibility == "visible_to_public") ? "0" : "1";

$sql_NDS_suggest_comment = "INSERT INTO  ogenius_nds_db_rgb_query_comment
(ogenius_nds_db_rgb_query_comment_query_id, ogenius_nds_db_rgb_query_comment_comment,
ogenius_nds_db_rgb_query_comment_regdate,ogenius_nds_db_rgb_query_comment_sender_id,
ogenius_nds_db_rgb_query_comment_suggestOrQuestion,
ogenius_nds_db_rgb_query_comment_external_visibility)VALUES
('{$queryID}','{$CommentData}','{$date}','{$common_user_settings_the_id}','suggestion','{$external_visibility}')";
if ($query_NDS_suggest_comment = $database -> query($sql_NDS_suggest_comment)) {
    //-------------------Trigger notifications before success-------------------------------
    //echo "cool ma nigga!";
    $sql_NDS_suggest_comment_latest_id = "SELECT   ogenius_nds_db_rgb_query_comment_id 
    FROM ogenius_nds_db_rgb_query_comment WHERE ogenius_nds_db_rgb_query_comment_query_id='{$queryID}'
     ORDER BY  ogenius_nds_db_rgb_query_comment_id DESC LIMIT 1
            ";
    if ($query_NDS_suggest_comment_latest_id = $database -> query($sql_NDS_suggest_comment_latest_id)) {
        //---------------------
        while ($res_NDS_suggest_comment_latest_id = mysqli_fetch_array($query_NDS_suggest_comment_latest_id)) {
            $theLatestIdCmmt = $res_NDS_suggest_comment_latest_id['ogenius_nds_db_rgb_query_comment_id'];
            //echo "---".$theLatestIdCmmt;
            //-------------trigger a notification archive--with--the--id--
            $sql_NDS_suggest_comment_notif_archive = "INSERT INTO ogenius_nds_db_rgb_notification
            (ogenius_nds_db_rgb_notification_comment_id,ogenius_nds_db_rgb_notification_notification_comment,
            ogenius_nds_db_rgb_notification_bywho_id,ogenius_nds_db_rgb_notification_intended_to_who_id,
                ogenius_nds_db_rgb_notification_regdate)VALUES
                ('{$theLatestIdCmmt}','{$external_visibility}','{$common_user_settings_the_id}',
                '{$queryID}','{$date}') ";
            if ($query_NDS_suggest_comment_notif_archive = $database -> query($sql_NDS_suggest_comment_notif_archive)) {
                //------------------Send a notifier broadcast to whoever is concerned---------
                //--find the notification id--------------------------------------------------
                $sql_NDS_suggest_comment_latest_id_notif_archive_load = "SELECT   ogenius_nds_db_rgb_notification_id 
    FROM ogenius_nds_db_rgb_notification WHERE  ogenius_nds_db_rgb_notification_intended_to_who_id='{$queryID}' ORDER BY  ogenius_nds_db_rgb_notification_id  DESC LIMIT 1
            ";
                if ($query_NDS_suggest_comment_latest_id_notif_archive_load = $database -> query($sql_NDS_suggest_comment_latest_id_notif_archive_load)) {
                    //---------------------
                    while ($res_NDS_suggest_comment_latest_id_notif_archive_load = mysqli_fetch_array($query_NDS_suggest_comment_latest_id_notif_archive_load)) {
                        $theNotif_Archive_Id = $res_NDS_suggest_comment_latest_id_notif_archive_load['ogenius_nds_db_rgb_notification_id'];
                        
                        //----------------------
                        $sql_NDS_suggest_comment_notif_archive_user_relationship = "INSERT INTO ogenius_nds_db_rgb_notification_to_user_relationship
                        (ogenius_nds_db_rgb_notification_to_user_relationship_notif_id,ogenius_nds_db_rgb_notification_to_user_relationship_to_who_id,ogenius_nds_db_rgb_notification_to_user_relationship_regdate)
                        VALUES('{$theNotif_Archive_Id}','{$queryID}','{$date}') ";
                        if ($query_NDS_suggest_comment_notif_archive_user_relationship = $database -> query($sql_NDS_suggest_comment_notif_archive_user_relationship)) {
                            echo "1000";
                        }
                    }

                }
            }

        }
    }

}


?>
