<?php
require_once ("../includes/conn/config.php");
?>
<?php
require_once ("../includes/classes/database.php");
?>
<?php
if (isset($_POST["key"])) {
    $database = new mysqldatabase();
    $theOurIdUser = $_POST['theOurIdUser'];
    $profile_page_institution_name = $_POST['profile_page_institution_name'];
    $profile_page_institution_website = $_POST['profile_page_institution_website'];
    $profile_page_institution_email_add = $_POST['profile_page_institution_email_add'];
    $profile_page_institution_province = $_POST['profile_page_institution_province'];
    $profile_page_institution_district = $_POST['profile_page_institution_district'];
    $profile_page_institution_sector = $_POST['profile_page_institution_sector'];
    $profile_page_institution_motto = $_POST['profile_page_institution_motto'];
    $profile_page_institution_username = $_POST['profile_page_institution_username'];

    //--validations-----------
    $profile_page_institution_name = addslashes($profile_page_institution_name);
    $profile_page_institution_website = addslashes($profile_page_institution_website);
    $profile_page_institution_email_add = addslashes($profile_page_institution_email_add);
    $profile_page_institution_province = addslashes($profile_page_institution_province);
    $profile_page_institution_district = addslashes($profile_page_institution_district);
    $profile_page_institution_sector = addslashes($profile_page_institution_sector);
    $profile_page_institution_motto = addslashes($profile_page_institution_motto);
    $profile_page_institution_username = addslashes($profile_page_institution_username);

    $date = date("Y-m-d H:i:s");

    //---------------------
    $sql_find_old_email_phone = "SELECT * FROM  ogenius_nds_db_normal_users WHERE    ogenius_nds_db_normal_users_id='{$theOurIdUser}' ";
    if ($query_find_old_email_phone = $database -> query($sql_find_old_email_phone)) {
        //---------------------
        while ($res_find_old_email_phone = mysqli_fetch_array($query_find_old_email_phone)) {
            $old_email = $res_find_old_email_phone['ogenius_nds_db_normal_users_email'];
            $old_phone = $res_find_old_email_phone['ogenius_nds_db_normal_users_tel'];
            ///------------------
            $sql_save_the_old_creds = "INSERT INTO ogenius_nds_db_users_email_and_phone_change
            (ogenius_nds_db_users_email_and_phone_change_useremail, ogenius_nds_db_users_email_and_phone_change_userphone,
                ogenius_nds_db_users_email_and_phone_change_user_id)
            VALUES('{$profile_page_institution_email_add}','','{$theOurIdUser}')";
            if ($query_save_the_old_creds = $database -> query($sql_save_the_old_creds)) {
                $sql_update_the_old_creds = "UPDATE ogenius_nds_db_normal_users
                SET     ogenius_nds_db_normal_users_institution='{$profile_page_institution_name}',
                    ogenius_nds_db_normal_users_website='{$profile_page_institution_website}', 
                 ogenius_nds_db_normal_users_email='{$profile_page_institution_email_add}',
                 ogenius_nds_db_normal_users_names='{$profile_page_institution_username}',                
                 ogenius_nds_db_normal_users_province='{$profile_page_institution_province}',
                 ogenius_nds_db_normal_users_district='{$profile_page_institution_district}',
                 ogenius_nds_db_normal_users_sector='{$profile_page_institution_sector}',
                    ogenius_nds_db_normal_users_motto='{$profile_page_institution_motto}' WHERE ogenius_nds_db_normal_users_id='{$theOurIdUser}' ";
                if ($query_update_the_old_creds = $database -> query($sql_update_the_old_creds)) {

                    echo "1000";
                    //----------------

                }

            }

        }

    }
}
?>