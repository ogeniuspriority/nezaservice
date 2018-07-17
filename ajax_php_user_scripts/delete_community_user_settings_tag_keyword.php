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
    
    $date = date("Y-m-d H:i:s");

    $sql_999 = "UPDATE   ogenius_nds_db_tags_identifiers_keyword
    SET     ogenius_nds_db_tags_identifiers_keyword_status='0' WHERE        ogenius_nds_db_tags_identifiers_keyword_id='{$common_user_settings_the_id}'";
    if ($query_999 = $database -> query($sql_999)) {
        echo "1000";

    }

}
?>