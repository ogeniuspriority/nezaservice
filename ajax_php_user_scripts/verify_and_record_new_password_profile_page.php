<?php
require_once ("../includes/conn/config.php");
?>
<?php
require_once ("../includes/classes/database.php");
?>
<?php
if (isset($_POST["key"])) {
    $database = new mysqldatabase();
    $profile_page_password_old = $_POST['profile_page_password_old'];
    $profile_page_password_new = $_POST['profile_page_password_new'];
    $profile_page_password_repeat = $_POST['profile_page_password_repeat'];
    $theId = $_POST['theId'];

    $date = date("Y-m-d H:i:s");
    //-----------------
    $profile_page_password_new = md5($profile_page_password_new);
    $profile_page_password_old = md5($profile_page_password_old);

    $n = 0;
    $sql_new_password = "SELECT * FROM  ogenius_nds_db_normal_users WHERE     ogenius_nds_db_normal_users_id='{$theId}' AND  ogenius_nds_db_normal_users_password='{$profile_page_password_old}'  ";
    if ($query_new_password = $database -> query($sql_new_password)) {
        //---------------------
        while ($res_check_username = mysqli_fetch_array($query_new_password)) {
            //-------------------------
            $n++;
            $sqlNDSUpdateRegistration = "UPDATE ogenius_nds_db_normal_users SET 
            ogenius_nds_db_normal_users_password='{$profile_page_password_new}' WHERE ogenius_nds_db_normal_users_id='{$theId}'";

            if ($resQuery = $database -> query($sqlNDSUpdateRegistration)) {

                echo "1000";

            } else {
                echo "Resend Third";
            }
        }
        
        if($n==0){
            echo "Old Password is wrong!?";
        }
    } else {
        echo "Wrong old Password";
    }

}
?>