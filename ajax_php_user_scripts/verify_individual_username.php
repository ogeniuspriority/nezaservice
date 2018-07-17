<?php
require_once ("../includes/conn/config.php");
?>
<?php
require_once ("../includes/classes/database.php");
?>
<?php
if (isset($_POST["key"])) {
    $database = new mysqldatabase();
    $userNameVal = $_POST['userNameVal'];

    $date = date("Y-m-d H:i:s");

    //-----------------
    $n = 0;
    $sql_check_username = "SELECT * FROM  ogenius_nds_db_normal_users WHERE     ogenius_nds_db_normal_users_names='{$userNameVal}' ";
    if ($query_check_username = $database -> query($sql_check_username)) {
        //---------------------
        while ($res_check_username = mysqli_fetch_array($query_check_username)) {
            $n++;
        }
    }

    if ($n == 0) {
        echo "1000";
    } else {
        echo "nope";
    }

}
?>