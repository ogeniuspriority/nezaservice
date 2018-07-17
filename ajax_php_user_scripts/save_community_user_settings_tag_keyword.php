<?php
require_once ("../includes/conn/config.php");
?>
<?php
require_once ("../includes/classes/database.php");
?>
<?php
if (isset($_POST["key"])) {
    $database = new mysqldatabase();
    $community_user_settings_new_keyword = $_POST['community_user_settings_new_keyword'];
    $common_user_settings_the_id = $_POST['common_user_settings_the_id'];
    //------------
    $community_user_settings_new_keyword = addslashes($community_user_settings_new_keyword);

    $date = date("Y-m-d H:i:s");

    $sql_999 = "INSERT INTO  ogenius_nds_db_tags_identifiers_keyword(ogenius_nds_db_tags_identifiers_keyword_keyword,
                                ogenius_nds_db_tags_identifiers_keyword_id_user,    ogenius_nds_db_tags_identifiers_keyword_regdate,
                            ogenius_nds_db_tags_identifiers_keyword_status
        )VALUES('{$community_user_settings_new_keyword}','{$common_user_settings_the_id}','{$date}','1')";
    if ($query_999 = $database -> query($sql_999)) {
        echo "1000";

    }

}
?>