<?php
require_once ("../includes/conn/config.php");
?>
<?php
require_once ("../includes/classes/database.php");
?>
<?php
if (isset($_POST["key"])) {
    $database = new mysqldatabase();
    $Names_2017 = $_POST['Names_2017'];
    $email_add_2017 = $_POST['email_add_2017'];
    $message_2017 = $_POST['message_2017'];

    $Names_2017 = addslashes($Names_2017);
    $email_add_2017 = addslashes($email_add_2017);
    $message_2017 = addslashes($message_2017);

    $date = date("Y-m-d H:i:s");
    //-----------
    $the_rnd_code = mt_rand(1000, 9999);
    //-----------------
    $n = 0;
    $sql_save_individual_user = "INSERT INTO ogenius_nds_db_common_sugg_bo
      (ogenius_nds_db_common_sugg_bo_names,ogenius_nds_db_common_sugg_bo_email, ogenius_nds_db_common_sugg_bo_messsage)
                VALUES('{$Names_2017}','{$email_add_2017}','{$message_2017}')";
    if ($query_save_individual_user = $database -> query($sql_save_individual_user)) {
        //---------------------
        echo "1000";

    }

} else {
    echo "2000" . mysqli_error();
}
?>