<?php
require_once ("../includes/conn/config.php");
?>
<?php
require_once ("../includes/classes/database.php");
?>
<?php
if (isset($_POST["key"])) {
    $database = new mysqldatabase();
    $notification_type_id = $_POST['notification_type_id'];
    $status = $_POST['status'];
    $common_user_settings_the_id = $_POST['common_user_settings_the_id'];
    $date = date("Y-m-d H:i:s");
  

    $sql_999 = "INSERT INTO  ogenius_nds_preferences_static_values_users_link(ogenius_nds_preferences_static_values_users_link_preference_id,
                        ogenius_nds_preferences_static_values_users_link_id_user,ogenius_nds_preferences_static_values_users_link_regdate,
                        ogenius_nds_preferences_static_values_users_link_status
        )VALUES('{$notification_type_id}','{$common_user_settings_the_id}','{$date}','$status')";
    if ($query_999 = $database -> query($sql_999)) {
        echo "1000";

    }

}
?>