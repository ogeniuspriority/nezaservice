<?php
require_once ("../includes/conn/config.php");
?>
<?php
require_once ("../includes/classes/database.php");
?>
<?php
if (isset($_POST["key"])) {
    $database = new mysqldatabase();

    $insitution_user_settings_the_id = $_POST['insitution_user_settings_the_id'];

    
    //-----------
    
    $date = date("Y-m-d H:i:s");

    //------------
    //$community_user_settings_new_keyword = addslashes($community_user_settings_new_keyword);

    $sql_999 = "UPDATE ogenius_nds_db_normal_users SET ogenius_nds_db_normal_users_activated='0' WHERE
        ogenius_nds_db_normal_users_id='{$insitution_user_settings_the_id}'  ";
    if ($query_999 = $database -> query($sql_999)) {
        echo "1000";

    }

}
?>