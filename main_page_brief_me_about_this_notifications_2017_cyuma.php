<?php
include ("includes/conn/config.php");
include ("includes/classes/database.php");
include ("includes/functions.php");
include ("includes/timeToSec.php");

//----


$common_user_settings_the_id = $_POST['common_user_settings_the_id'];
$institution_User_Cred = $common_user_settings_the_id;
$notifId = $_POST['notifId'];
//----------Go in the in the query comments find all my places where i am the intended to read--
//--find the notification id--------------------------------------------------
$sql_notifications_count_2017 = " SELECT * FROM ogenius_nds_db_rgb_notification
WHERE ogenius_nds_db_rgb_notification_id='{$notifId}'
            ";
$nber_of_notifications = 0;
if ($query_notifications_count_2017 = $database->query($sql_notifications_count_2017)) {
    //---------------------
    while ($res_notifications_count_2017 = mysqli_fetch_array($query_notifications_count_2017)) {
        //-----------find the original query id--------------
        $commnt_id = $res_notifications_count_2017['ogenius_nds_db_rgb_notification_comment_id'];
        //----------------find the query id---------------
        $sql_notifications_count_2017_from_query = "SELECT * FROM ogenius_nds_db_rgb_query_comment
        LEFT JOIN ogenius_nds_db_normal_users
        ON ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id=ogenius_nds_db_rgb_query_comment.ogenius_nds_db_rgb_query_comment_sender_id
WHERE ogenius_nds_db_rgb_query_comment_id='{$commnt_id}'
            ";
        $nber_of_notifications = 0;
        if ($query_notifications_count_2017_from_query = $database->query($sql_notifications_count_2017_from_query)) {
            //---------------------
            while ($res_notifications_count_2017_from_query = mysqli_fetch_array($query_notifications_count_2017_from_query)) {
                //-----------find the original query id--------------
                $commnt_id_from_query = $res_notifications_count_2017_from_query['ogenius_nds_db_rgb_query_comment_query_id'];
                //----------------find the query id---------------
                $sql_notifications_count_2017_from_query_only = "SELECT * FROM ogenius_nds_db_rgb_query
        LEFT JOIN ogenius_nds_db_normal_users
        ON ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id=ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_query_provider
WHERE ogenius_nds_db_rgb_query_id='{$commnt_id_from_query}'
            ";
                $nber_of_notifications = 0;
                $theComments_count_2017 = 0;
                if ($query_notifications_count_2017_from_query_only = $database->query($sql_notifications_count_2017_from_query_only)) {
                    //---------------------
                    while ($res_notifications_count_2017_from_query_only = mysqli_fetch_array($query_notifications_count_2017_from_query_only)) {
                        //-----------find the original query id--------------
                        $commnt_id_from_query = $res_notifications_count_2017_from_query_only['ogenius_nds_db_rgb_query_id'];
                        //----------------find the query id---------------
                        //----------------update this notification thread-------------$notifId
                        $sql_notifications_update = "UPDATE ogenius_nds_db_rgb_notification
                         SET ogenius_nds_db_rgb_notification_seen='1' WHERE
                         ogenius_nds_db_rgb_notification_id='{$notifId}'";

                        if ($query_notifications__update = $database->query($sql_notifications_update)) {
                            
                        }


                        //--------------
                        ?>
                        <!--<input onclick="hideThis_notifications_panel()" type="button" style="float: right;margin-right: 10%;" value="Close" />-->
                        <div class="panel-body" style="height: 110%;">

                            <table style="padding-left: 2.5%;margin-top: 2%;">
                                <tr>
                                    <td>
                                        <?php
                                        if ($res_notifications_count_2017_from_query_only['ogenius_nds_db_normal_users_api_log_face_goo_id'] < 1) {
                                            ?>

                                            <img i src="uploaded_images/<?php echo "" . (!empty($res_notifications_count_2017_from_query_only['ogenius_nds_db_normal_users_avatar'])) ? $res_notifications_count_2017_from_query_only['ogenius_nds_db_normal_users_avatar'] : "nds_avatar.png"; ?>" style="width: 100px;height:100px;" />

                                        <?php } else { ?>
                                            <img  src="<?php
                                            if (!empty($res_notifications_count_2017_from_query_only['ogenius_nds_db_normal_users_avatar'])) {
                                                echo "" . (strlen($res_notifications_count_2017_from_query_only['ogenius_nds_db_normal_users_avatar']) > 26) ? $res_notifications_count_2017_from_query_only['ogenius_nds_db_normal_users_avatar'] : "uploaded_images/" . $res_2017_institution_suggestions_user_data['ogenius_nds_db_normal_users_avatar'];
                                            } else {
                                                echo "" . "uploaded_images/" . "nds_avatar.png";
                                            }
                                            ?>"  style="width: 100px;height:100px;" />

                                        <?php } ?>  
                                                                                                <!--<img src="images/32210901391_becdb7c654_c-ca7f3.jpg" style="width: 100px;height:100px;" /></td>
                                        --><td>
                                        <div style="margin-top: -50px;">
                                            <?php echo "" . checkMyPostingPrivacyStatus($res_notifications_count_2017_from_query_only['ogenius_nds_db_normal_users_id'], $res_notifications_count_2017_from_query_only['ogenius_nds_db_normal_users_names']); ?>
                                        </div>
                                        <div>
                                            <?php echo "" . time_to_sec($res_notifications_count_2017_from_query_only['ogenius_nds_db_rgb_query_date']); ?>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            <div style="text-align: left;padding-left: 2.5%;margin-top:2.5%;color: #000000;font-size: 13px">
                                <?php echo "" . $res_notifications_count_2017_from_query_only['ogenius_nds_db_rgb_query_query']; ?>
                            </div>
                            <div style="overflow-y: scroll;height: 250px;margin: 0px;padding: 5px;background:#ccc;" class="scrolls">
                                <?php
                                //---------------------------------
                                $sql_2017_institution_suggestions_comnts_pool = "SELECT 
            Pamela.ogenius_nds_db_rgb_query_comment_comment,
            Pamela.ogenius_nds_db_rgb_query_comment_id,
            Pamela.ogenius_nds_db_rgb_query_comment_active,
            Pamela.ogenius_nds_db_rgb_query_comment_me_them_alt,
            Pamela.ogenius_nds_db_rgb_query_comment_sender_id,
            Pamela.ogenius_nds_db_rgb_query_comment_suggestOrQuestion,
            Pamela.ogenius_nds_db_rgb_query_comment_external_visibility,
            Pamela.ogenius_nds_db_rgb_query_comment_active,
            Pamela.ogenius_nds_db_rgb_query_comment_regdate,
            Pamela.ogenius_nds_db_rgb_query_comment_query_id,
            ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_avatar,
            ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_names,
            ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id ,
            ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_api_log_face_goo_id         
             FROM (SELECT * FROM ogenius_nds_db_rgb_query_comment 
             WHERE   ogenius_nds_db_rgb_query_comment_query_id='{$commnt_id_from_query}' AND     ogenius_nds_db_rgb_query_comment_active='0' 
             AND     ogenius_nds_db_rgb_query_comment_suggestOrQuestion='query'   ORDER BY 
    ogenius_nds_db_rgb_query_comment_id DESC LIMIT 80) AS Pamela
            LEFT JOIN ogenius_nds_db_normal_users
            ON Pamela.ogenius_nds_db_rgb_query_comment_sender_id=ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id
WHERE   Pamela.ogenius_nds_db_rgb_query_comment_query_id='{$commnt_id_from_query}' AND     Pamela.ogenius_nds_db_rgb_query_comment_active='0'   ORDER BY 
    ogenius_nds_db_rgb_query_comment_id DESC 

";
//-------Counter of comments----
                                $all_comments_count = 60;
                                $all_comments_count_temp_asc_id = "";
                                if ($query_2017_institution_suggestions_comnts_pool = $database->query($sql_2017_institution_suggestions_comnts_pool)) {
                                    //---------------------
                                    while ($res_2017_institution_suggestions_comnts_pool = mysqli_fetch_array($query_2017_institution_suggestions_comnts_pool)) {

                                        if ($res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_normal_users_id'] == $institution_User_Cred) {
                                            if ($res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_external_visibility'] == "0") {
                                                ?>
                                                <div class="bubble bubble-alt meTra" style="font-size: 13px;">
                                                    <table style="margin-left: 40%;">
                                                        <tr>
                                                            <td><span style="color: #1A5A7A;text-shadow: 1px 1px 1px #333333;"><?php echo "" . checkMyPostingPrivacyStatus($res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_normal_users_id'], $res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_normal_users_names']); ?></span></td>                                 
                                                        </tr>
                                                    </table> 
                                                    <div style="text-align: left;">
                                                        <?php echo "" . $res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_comment']; ?>

                                                    </div> 
                                                    <table style="margin-left: 40%;">
                                                        <tr>
                                                            <td>
                                                                <!--<img src="images/special_mail_comm.png" title="Marked as visible to External User" style="max-height: 80px;max-width: 150px;" />
                                                                --></td>
                                                            <td><span style="color: blue;text-shadow: 1px 1px 1px #333333;font-size:11px;"><?php echo "" . time_to_sec($res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_regdate']); ?></span></td>                                 

                                                            <?php
                                                            if ($res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_sender_id'] == $institution_User_Cred) {
                                                                ?>
                                                            <div style='float:left'><img onclick="main_page_institution_delete_this_commnt_rgb_query(this)" name='<?php echo "" . $res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_id']; ?>' title='Delete this' src="images/send_to_dust_bin.png" style="width: 25px;height: 25px;margin-top:15px;border-radius:5px" /></div>

                                                            <?php
                                                        }
                                                        ?>


                                                        </tr>
                                                    </table>   

                                                </div>               

                                                <?php
                                            } else {
                                                ?>
                                                <div class="bubble bubble-alt meTra" style="font-size: 13px;">
                                                    <table style="margin-left: 40%;">
                                                        <tr>
                                                            <td><span style="color: #1A5A7A;text-shadow: 1px 1px 1px #333333;"><?php echo "" . checkMyPostingPrivacyStatus($res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_normal_users_id'], $res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_normal_users_names']); ?></span></td>                                 
                                                        </tr>
                                                    </table> 
                                                    <div style="text-align: left;">
                                                        <?php echo "" . $res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_comment']; ?>

                                                    </div> 
                                                    <table style="margin-left: 40%;">
                                                        <tr>
                                                            <td>
                                                               <!-- <img src="images/normal_internal_message.png" title="Marked as invisible to External User" style="max-height: 80px;max-width: 150px;" />
                                                                --></td>
                                                            <td><span style="color: blue;text-shadow: 1px 1px 1px #333333;font-size:11px;"><?php echo "" . time_to_sec($res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_regdate']); ?></span></td>                                 
                                                            <?php
                                                            if ($res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_sender_id'] == $institution_User_Cred) {
                                                                ?>
                                                            <div style='float:left'><img onclick="main_page_institution_delete_this_commnt_rgb_query(this)" name='<?php echo "" . $res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_id']; ?>' title='Delete this' src="images/send_to_dust_bin.png" style="width: 25px;height: 25px;margin-top:15px;border-radius:5px" /></div>

                                                            <?php
                                                        }
                                                        ?>
                                                        </tr>
                                                    </table>   

                                                </div>  


                                                <?php
                                            }
                                        } else {
                                            if ($res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_external_visibility'] == "0") {
                                                ?>
                                                <div class="bubble red" style="font-size: 13px;">
                                                    <table style="margin-left: 40%;">
                                                        <tr>

                                                            <td><span style="color: #1A5A7A;text-shadow: 2px 2px 2px #333333;"><?php echo "" . checkMyPostingPrivacyStatus($res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_normal_users_id'], $res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_normal_users_names']); ?></span></td>                                 
                                                        </tr>
                                                    </table> 
                                                    <div style="text-align: left;">
                                                        <?php echo "" . $res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_comment']; ?>

                                                    </div> 
                                                    <table style="margin-left: 40%;">
                                                        <tr>
                                                            <td>
                                                                <!--<img src="images/special_mail_comm.png" title="Marked as visible to External User" style="max-height: 80px;max-width: 150px;" />
                                                                --></td>
                                                            <td><span style="color: blue;text-shadow: 1px 1px 1px #333333;font-size:11px;"><?php echo "" . time_to_sec($res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_regdate']); ?></span></td>                                 
                                                            <?php
                                                            if ($res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_sender_id'] == $institution_User_Cred) {
                                                                ?>
                                                            <div style='float:left'><img onclick="main_page_institution_delete_this_commnt_rgb_query(this)" name='<?php echo "" . $res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_id']; ?>' title='Delete this' src="images/send_to_dust_bin.png" style="width: 25px;height: 25px;margin-top:15px;border-radius:5px" /></div>

                                                            <?php
                                                        }
                                                        ?>
                                                        </tr>
                                                    </table>   

                                                </div>


                                                <?php
                                            } else {
                                                ?>
                                                <div class="bubble red" style="font-size: 13px;">
                                                    <table style="margin-left: 40%;">
                                                        <tr>

                                                            <td><span style="color: #1A5A7A;text-shadow: 1px 1px 1px #333333;"><?php echo "" . checkMyPostingPrivacyStatus($res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_normal_users_id'], $res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_normal_users_names']); ?></span></td>                                 
                                                        </tr>
                                                    </table> 
                                                    <div style="text-align: left;">
                                                        <?php echo "" . $res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_comment']; ?>

                                                    </div> 
                                                    <table style="margin-left: 40%;">
                                                        <tr>
                                                            <td>
                                                                <!--<img src="images/normal_internal_message.png" title="Marked as invisible to External User" style="max-height: 80px;max-width: 150px;" />
                                                                --></td>
                                                            <td><span style="color: blue;text-shadow: 1px 1px 1px #333333;font-size:11px;"><?php echo "" . time_to_sec($res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_regdate']); ?></span></td>                                 
                                                            <?php
                                                            if ($res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_sender_id'] == $institution_User_Cred) {
                                                                ?>
                                                            <div style='float:left'><img onclick="main_page_institution_delete_this_commnt_rgb_query(this)" name='<?php echo "" . $res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_id']; ?>' title='Delete this' src="images/send_to_dust_bin.png" style="width: 25px;height: 25px;margin-top:15px;border-radius:5px" /></div>

                                                            <?php
                                                        }
                                                        ?>
                                                        </tr>
                                                    </table>   

                                                </div>


                                                <?php
                                            }
                                        }

                                        //-------The more up loader--
                                        if ($all_comments_count == 60) {
                                            $all_comments_count_temp_asc_id = $res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_id'];
                                        }
                                        if ($all_comments_count == 1) {
                                            $the_Id_Suggest = $res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_query_id'];
                                            echo "<div><img id='" . $res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_query_id'] . "$theComments_count_2017' onclick='main_page_institution_load_more_cmmnts(this,$the_Id_Suggest)' name='" . $all_comments_count_temp_asc_id . "' src='images/up_new_load.png' style='max-width:50px;max-height:50px;' /></div>";
                                        }

                                        //---------------
                                        $theComments_count_2017++;
                                        $all_comments_count--;
                                    }
                                    if ($theComments_count_2017 == 0) {
                                        echo "<div style='margin:auto;'><img src='images/no_data_in.png' style='max-width:50px;max-height:50px;margin-top:20%;border-radius:6px;box-shadow:2px 2px 2px red;' /></div>";
                                    }
                                }
                                ?>

                            </div>

                        </div>


                        <?php
                    }
                }
                //---------------other features all----------------
            }
        }
    }
}

exit;
?>
