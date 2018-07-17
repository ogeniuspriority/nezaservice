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
    $official_fname = $_POST['official_fname'];
    $official_lname = $_POST['official_lname'];
    $official_username = $_POST['official_username'];
    $official_gender_id = $_POST['official_gender_id'];
    $official_marital_status = $_POST['official_marital_status'];
    $official_institution_name = $_POST['official_institution_name'];
    $official_department = $_POST['official_department'];
    $official_position = $_POST['official_position'];
    $official_province = $_POST['official_province'];
    $official_district = $_POST['official_district'];
    $official_sector = $_POST['official_sector'];
    $official_phone = $_POST['official_phone'];
    $official_email = $_POST['official_email'];

    //--validations-----------
    $official_fname = addslashes($official_fname);
    $official_lname = addslashes($official_lname);
    $official_username = addslashes($official_username);
    $official_institution_name = addslashes($official_institution_name);
    $official_department = addslashes($official_department);
    $official_position = addslashes($official_position);
    $official_province = addslashes($official_province);
    $official_district = addslashes($official_district);
    $official_sector = addslashes($official_sector);
    $official_email = addslashes($official_email);

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
            VALUES('{$official_email}','{$official_phone}','{$theOurIdUser}')";
            if ($query_save_the_old_creds = $database -> query($sql_save_the_old_creds)) {
                $sql_update_the_old_creds = "UPDATE ogenius_nds_db_normal_users
                SET     ogenius_nds_db_normal_users_firstname='{$official_fname}',
                        ogenius_nds_db_normal_users_lastname='{$official_lname}', 
                    ogenius_nds_db_normal_users_names='{$official_username}',
                 ogenius_nds_db_normal_users_gender='{$official_gender_id}',                
                    ogenius_nds_db_normal_users_marital_status='{$official_marital_status}',
                    ogenius_nds_db_normal_users_institution='{$official_institution_name}',
                    ogenius_nds_db_normal_users_department='{$official_department}',
                        ogenius_nds_db_normal_users_position='{$official_position}',
                        ogenius_nds_db_normal_users_province='{$official_province}',
                        ogenius_nds_db_normal_users_district='{$official_district}',
                        ogenius_nds_db_normal_users_sector='{$official_sector}',
                        ogenius_nds_db_normal_users_email='{$official_email}' WHERE ogenius_nds_db_normal_users_id='{$theOurIdUser}' ";
                if ($query_update_the_old_creds = $database -> query($sql_update_the_old_creds)) {

                    echo "1000";
                    //----------------

                }

            }

        }

    }
}
?>