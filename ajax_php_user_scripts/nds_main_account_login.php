<?php
require_once ("../includes/conn/config.php");
?>
<?php
require_once ("../includes/classes/database.php");
?>
<?php
if (isset($_POST["key"])) {
    $database = new mysqldatabase();
    $login_panel_username = $_POST['login_panel_username'];
    $login_panel_password = $_POST['login_panel_password'];

    //--validations-----------
    $login_panel_username = addslashes($login_panel_username);
    $login_panel_password = md5($login_panel_password);

    $date = date("Y-m-d H:i:s");
    //-----------
    $n_m_00 = 0;
    $sql_user_count = "SELECT * FROM  ogenius_nds_db_normal_users WHERE     ogenius_nds_db_normal_users_names='{$login_panel_username}' AND ogenius_nds_db_normal_users_password='{$login_panel_password}' AND  ogenius_nds_db_normal_users_activated='1' ORDER BY     ogenius_nds_db_normal_users_id DESC";
    if ($query_user_count = $database -> query($sql_user_count)) {
        //---------------------
        while ($res_user_count = mysqli_fetch_array($query_user_count)) {
            $account_user_type = $res_user_count['ogenius_nds_db_normal_users_user_vip_tag'];
            $accountRGB_Detection = $res_user_count['ogenius_nds_db_normal_users_institution'];
            $theId = $res_user_count['ogenius_nds_db_normal_users_id'];

            $n_m_00++;
        }
    }
    if ($n_m_00 == 0) {
        echo "110";
    } else if ($n_m_00 > 0) {
        if ($account_user_type == 0) {
            echo "1000";

        } else if ($account_user_type == 1) {
            //---institution
            $temp_var = strtolower($accountRGB_Detection);
            switch ($temp_var) {
                case 'rgb' :
                    echo "4000";
                    break;
                default :
                    echo "2000";
                    break;
            }

        } else if ($account_user_type == 2) {
            //---official
            $temp_var = strtolower($accountRGB_Detection);
            switch ($temp_var) {
                case 'rgb' :
                    echo "4000";
                    break;
                default :
                    echo "3000";
                    break;
            }
        }
        session_start();
        $_SESSION["ogenius_nds_user_id_x2309999_990"] = $theId;

    }

}
?>