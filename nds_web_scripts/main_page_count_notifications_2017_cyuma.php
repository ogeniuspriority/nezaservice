<?php

include ("../includes/conn/config.php");
include ("../includes/classes/database.php");

//----

$common_user_settings_the_id = $_POST['common_user_settings_the_id'];
//----------Go in the in the query comments find all my places where i am the intended to read--

//--find the notification id--------------------------------------------------
$sql_notifications_count_2017 = "SELECT   * 
    FROM ogenius_nds_db_rgb_notification WHERE  ogenius_nds_db_rgb_notification_receiver='{$common_user_settings_the_id}'
    AND ogenius_nds_db_rgb_notification_seen='0'
     ORDER BY  ogenius_nds_db_rgb_notification_id  DESC 
            ";
$nber_of_notifications = 0;
if ($query_notifications_count_2017 = $database -> query($sql_notifications_count_2017)) {
    //---------------------
    while ($res_notifications_count_2017 = mysqli_fetch_array($query_notifications_count_2017)) {
        $nber_of_notifications++;

    }
}

echo "".$nber_of_notifications;
exit;
?>
