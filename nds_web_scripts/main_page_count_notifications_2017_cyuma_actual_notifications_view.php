<?php
include ("../includes/conn/config.php");
include ("../includes/classes/database.php");
include ("../includes/functions.php");
include ("../includes/timeToSec.php");

//----

$common_user_settings_the_id = $_POST['common_user_settings_the_id'];
//----------Go in the in the query comments find all my places where i am the intended to read--
//--find the notification id--------------------------------------------------
$sql_notifications_count_2017 = " SELECT * FROM(SELECT   * 
    FROM ogenius_nds_db_rgb_notification
    LEFT JOIN 
    ogenius_nds_db_rgb_query_comment ON 
    ogenius_nds_db_rgb_query_comment.ogenius_nds_db_rgb_query_comment_id=ogenius_nds_db_rgb_notification.ogenius_nds_db_rgb_notification_comment_id
   ) AS Pamela 
     LEFT JOIN
    ogenius_nds_db_normal_users ON
    ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id=Pamela.ogenius_nds_db_rgb_notification_bywho_id
     WHERE  ogenius_nds_db_rgb_notification_receiver='{$common_user_settings_the_id}'
    AND ogenius_nds_db_rgb_notification_seen='0'
     ORDER BY  ogenius_nds_db_rgb_notification_id  DESC 
            ";
$nber_of_notifications = 0;
if ($query_notifications_count_2017 = $database->query($sql_notifications_count_2017)) {
    //---------------------
    while ($res_notifications_count_2017 = mysqli_fetch_array($query_notifications_count_2017)) {
        ?>
        <div class="uv_0000" title='<?php echo "" . $res_notifications_count_2017['ogenius_nds_db_rgb_notification_id']; ?>' onclick="notification_pop(this)" style="margin-top:4px;" id="notify_0_0">


            <div class="startrowspace notify_record centerrow" style="cursor: pointer; border-bottom: 1px #ccc solid">
                <div style="margin: 0px 4px 0px 0px"> <?php
                    if ($res_notifications_count_2017['ogenius_nds_db_normal_users_api_log_face_goo_id'] < 1) {
                        ?>

                        <img i src="uploaded_images/<?php echo "" . (!empty($res_notifications_count_2017['ogenius_nds_db_normal_users_avatar'])) ? $res_notifications_count_2017['ogenius_nds_db_normal_users_avatar'] : "nds_avatar.png"; ?>"  class="image48" />

                    <?php } else { ?>
                        <img class="image48"style="border-radius: 24px;" src="<?php
                        if (!empty($res_notifications_count_2017['ogenius_nds_db_normal_users_avatar'])) {
                            echo "" . (strlen($res_notifications_count_2017['ogenius_nds_db_normal_users_avatar']) > 26) ? $res_notifications_count_2017['ogenius_nds_db_normal_users_avatar'] : "uploaded_images/" . $res_2017_institution_suggestions_user_data['ogenius_nds_db_normal_users_avatar'];
                        } else {
                            echo "" . "uploaded_images/" . "nds_avatar.png";
                        }
                        ?>" />

                    <?php } ?>   
                </div>
                <div class="centerrowspace">
                    <div>
                        <p style="font-size: 13px;" >
                            <?php echo "" . formatImagesInText($res_notifications_count_2017['ogenius_nds_db_rgb_query_comment_comment']); ?>
                        </p>
                    </div>
                    <div>
                        <label style="font-size: 11px;"><?php echo "" . time_to_sec($res_notifications_count_2017['ogenius_nds_db_rgb_notification_regdate']); ?></label>
                    </div>
                </div>
            </div>
        </div>

        <?php
    }
}

exit;
?>
