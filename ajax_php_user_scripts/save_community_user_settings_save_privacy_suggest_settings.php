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
    $whichTypeChosen = $_POST['whichTypeChosen'];
    //------------
    //$community_user_settings_new_keyword = addslashes($community_user_settings_new_keyword);

    $date = date("Y-m-d H:i:s");

    if ($whichTypeChosen == 0) {
        $sql_999 = "INSERT INTO  ogenius_nds_db_privacy_suggest_records(ogenius_nds_db_privacy_suggest_records_user_id,
                                ogenius_nds_db_privacy_suggest_records_only_username,ogenius_nds_db_privacy_suggest_records_username_and_location,
                                ogenius_nds_db_privacy_suggest_records_let_all_my_details_avail,ogenius_nds_db_privacy_suggest_records_regdate 
        )VALUES('{$common_user_settings_the_id}','1','0','0','{$date}')";
        if ($query_999 = $database -> query($sql_999)) {
            echo "1000";

        }
    } else if ($whichTypeChosen == 1) {
        $sql_999 = "INSERT INTO  ogenius_nds_db_privacy_suggest_records(ogenius_nds_db_privacy_suggest_records_user_id,
                                ogenius_nds_db_privacy_suggest_records_only_username,ogenius_nds_db_privacy_suggest_records_username_and_location,
                                ogenius_nds_db_privacy_suggest_records_let_all_my_details_avail,ogenius_nds_db_privacy_suggest_records_regdate 
        )VALUES('{$common_user_settings_the_id}','0','1','0','{$date}')";
        if ($query_999 = $database -> query($sql_999)) {
            echo "1000";

        }
    } else {
        $sql_999 = "INSERT INTO  ogenius_nds_db_privacy_suggest_records(ogenius_nds_db_privacy_suggest_records_user_id,
                                ogenius_nds_db_privacy_suggest_records_only_username,ogenius_nds_db_privacy_suggest_records_username_and_location,
                                ogenius_nds_db_privacy_suggest_records_let_all_my_details_avail,ogenius_nds_db_privacy_suggest_records_regdate 
        )VALUES('{$common_user_settings_the_id}','0','0','1','{$date}')";
        if ($query_999 = $database -> query($sql_999)) {
            echo "1000";

        }
    }

}
?>