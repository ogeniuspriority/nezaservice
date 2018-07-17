<?php
require_once ("../includes/conn/config.php");
?>
<?php
require_once ("../includes/classes/database.php");
?>
<?php
if (isset($_POST["key"])) {
    $database = new mysqldatabase();

    $common_user_settings_the_id = $_POST['common_user_settings_the_id'];
    $comm_user_settings_MyOtherName = $_POST['comm_user_settings_MyOtherName'];
    $comm_user_settings_MyOtherName = addslashes($comm_user_settings_MyOtherName);

    //------------
    //$community_user_settings_new_keyword = addslashes($community_user_settings_new_keyword);

    $date = date("Y-m-d H:i:s");

    $sql_999 = "INSERT INTO  ogenius_nds_db_privacy_posts_records(ogenius_nds_db_privacy_posts_records_user_id,
                                    ogenius_nds_db_privacy_posts_records_use_another_name,
                                    ogenius_nds_db_privacy_posts_records_regdate                                 
        )VALUES('{$common_user_settings_the_id}','{$comm_user_settings_MyOtherName}','{$date}')";
    if ($query_999 = $database -> query($sql_999)) {
        echo "1000";

    }

}
?>