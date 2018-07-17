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
    $profile_page_fname = $_POST['profile_page_fname'];
    $profile_page_lname = $_POST['profile_page_lname'];
    $profile_page_gender = $_POST['profile_page_gender'];
    $profile_page_username = $_POST['profile_page_username'];
    $profile_page_email = $_POST['profile_page_email'];
    $profile_page_indiv_phone = $_POST['profile_page_indiv_phone'];
    $profile_page_indiv_profession = $_POST['profile_page_indiv_profession'];
    $profile_page_indiv_province = $_POST['profile_page_indiv_province'];
    $profile_page_indiv_district = $_POST['profile_page_indiv_district'];
    $profile_page_indiv_sector = $_POST['profile_page_indiv_sector'];
    $profile_page_indiv_marital_status = $_POST['profile_page_indiv_marital_status'];
    $pickBirthDay = $_POST['pickBirthDay'];

    //--validations-----------
    $profile_page_fname = addslashes($profile_page_fname);
    $profile_page_lname = addslashes($profile_page_lname);
    $profile_page_username = addslashes($profile_page_username);
    $profile_page_email = addslashes($profile_page_email);
    $profile_page_indiv_profession = addslashes($profile_page_indiv_profession);
    $profile_page_indiv_province = addslashes($profile_page_indiv_province);
    $profile_page_indiv_district = addslashes($profile_page_indiv_district);
    $profile_page_indiv_sector = addslashes($profile_page_indiv_sector);

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
            VALUES('{$old_email}','{$old_phone}','{$theOurIdUser}')";
            if ($query_save_the_old_creds = $database -> query($sql_save_the_old_creds)) {
                $sql_update_the_old_creds = "UPDATE ogenius_nds_db_normal_users
                SET ogenius_nds_db_normal_users_firstname='{$profile_page_fname}',
                ogenius_nds_db_normal_users_lastname='{$profile_page_lname}', 
                 ogenius_nds_db_normal_users_gender='{$profile_page_gender}',
                 ogenius_nds_db_normal_users_names='{$profile_page_username}', 
                 ogenius_nds_db_normal_users_email='{$profile_page_email}',
                 ogenius_nds_db_normal_users_tel='{$profile_page_indiv_phone}',
                 ogenius_nds_db_normal_users_profession='{$profile_page_indiv_profession}',
                 ogenius_nds_db_normal_users_province='{$profile_page_indiv_province}',
                  ogenius_nds_db_normal_users_district='{$profile_page_indiv_district}',
                    ogenius_nds_db_normal_users_sector='{$profile_page_indiv_sector}',
                        ogenius_nds_db_normal_users_marital_status='{$profile_page_indiv_marital_status}',
                        ogenius_nds_db_normal_users_birthdate='{$pickBirthDay}' WHERE ogenius_nds_db_normal_users_id='{$theOurIdUser}' ";
                if ($query_update_the_old_creds = $database -> query($sql_update_the_old_creds)) {

                    echo "1000";
                    //----------------

                }

            }

        }

    }
}
?>