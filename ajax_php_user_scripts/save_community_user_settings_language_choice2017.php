<?php
require_once ("../includes/conn/config.php");
?>
<?php
require_once ("../includes/classes/database.php");
?>
<?php
if (isset($_POST["key"])) {
    $database = new mysqldatabase();
    $idLanguage = $_POST['idLanguage'];
    $idTheUser = $_POST['idTheUser'];
    $date = date("Y-m-d H:i:s");
  

    $sql_999 = "INSERT INTO  ogenius_nds_languages_for_settings_language_user_link(ogenius_nds_languages_for_settings_language_user_link_id_user,
                    ogenius_nds_languages_for_settings_language_user_link_id_languag,ogenius_nds_languages_for_settings_language_user_link_regtime
        )VALUES('{$idTheUser}','{$idLanguage}','{$date}')";
    if ($query_999 = $database -> query($sql_999)) {
        echo "1000";

    }

}
?>