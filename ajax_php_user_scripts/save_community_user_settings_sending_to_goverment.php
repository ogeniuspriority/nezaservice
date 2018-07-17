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
    $whichChoice = $_POST['whichChoice'];

    //------------
    //$community_user_settings_new_keyword = addslashes($community_user_settings_new_keyword);
    $date = date("Y-m-d H:i:s");
    switch($whichChoice) {
        case "one" :
            $sql_999 = "INSERT INTO  ogenius_nds_db_privacy_sending_to_gov(ogenius_nds_db_privacy_sending_to_gov_user_id,
                                    ogenius_nds_db_privacy_sending_to_gov_allMyDetails,
                                    ogenius_nds_db_privacy_sending_to_gov_only_username,
                                    ogenius_nds_db_privacy_sending_to_gov_username_and_loc,
                                    ogenius_nds_db_privacy_sending_to_gov_regdate                                 
        )VALUES('{$common_user_settings_the_id}','1','0'
        ,'0','{$date}')";
            if ($query_999 = $database -> query($sql_999)) {
                echo "1000";

            }
            break;
        case "two" :
            $sql_999 = "INSERT INTO  ogenius_nds_db_privacy_sending_to_gov(ogenius_nds_db_privacy_sending_to_gov_user_id,
                                    ogenius_nds_db_privacy_sending_to_gov_allMyDetails,
                                    ogenius_nds_db_privacy_sending_to_gov_only_username,
                                    ogenius_nds_db_privacy_sending_to_gov_username_and_loc,
                                    ogenius_nds_db_privacy_sending_to_gov_regdate                                 
        )VALUES('{$common_user_settings_the_id}','0','1'
        ,'0','{$date}')";
            if ($query_999 = $database -> query($sql_999)) {
                echo "1000";

            }
            break;
        case "three" :
            $sql_999 = "INSERT INTO  ogenius_nds_db_privacy_sending_to_gov(ogenius_nds_db_privacy_sending_to_gov_user_id,
                                    ogenius_nds_db_privacy_sending_to_gov_allMyDetails,
                                    ogenius_nds_db_privacy_sending_to_gov_only_username,
                                    ogenius_nds_db_privacy_sending_to_gov_username_and_loc,
                                    ogenius_nds_db_privacy_sending_to_gov_regdate                                 
        )VALUES('{$common_user_settings_the_id}','0','0'
        ,'1','{$date}')";
            if ($query_999 = $database -> query($sql_999)) {
                echo "1000";

            }
            break;
    }

}
?>