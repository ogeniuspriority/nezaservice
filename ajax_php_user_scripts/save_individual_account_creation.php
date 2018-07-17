<?php
require_once ("../includes/conn/config.php");
?>
<?php
require_once ("../includes/classes/database.php");
?>
<?php
if (isset($_POST["key"])) {
    $database = new mysqldatabase();
    $home_individual_fname = $_POST['home_individual_fname'];
    $home_individual_lname = $_POST['home_individual_lname'];
    $pickBirthDay = $_POST['pickBirthDay'];
    $home_individual_gender = $_POST['home_individual_gender'];
    $home_individual_profession = $_POST['home_individual_profession'];
    $home_individual_username = $_POST['home_individual_username'];
    $home_individual_marital_status = $_POST['home_individual_marital_status'];
    $home_individual_province = $_POST['home_individual_province'];
    $home_individual_district = $_POST['home_individual_district'];
    $home_individual_sector = $_POST['home_individual_sector'];
    $home_individual_email_add = $_POST['home_individual_email_add'];
    $home_individual_password = $_POST['home_individual_password'];
    $home_individual_phone = $_POST['home_individual_phone'];
    $choiceLng_name = $_POST['choiceLng_name'];

    $choiceLng_name = $_POST['choiceLng_name'];
    //--validations-----------
    $home_individual_fname = addslashes($home_individual_fname);
    $home_individual_lname = addslashes($home_individual_lname);
    $home_individual_profession = addslashes($home_individual_profession);
    $home_individual_username = addslashes($home_individual_username);
    $home_individual_province = addslashes($home_individual_province);
    $home_individual_district = addslashes($home_individual_district);
    $home_individual_sector = addslashes($home_individual_sector);
    $home_individual_email_add = addslashes($home_individual_email_add);

    $home_individual_password = md5($home_individual_password);

    $date = date("Y-m-d H:i:s");
    //-----------
    $the_rnd_code = mt_rand(1000, 9999);
    //-----------------
    $n = 0;
    $sql_save_individual_user = "INSERT INTO ogenius_nds_db_normal_users  (ogenius_nds_db_normal_users_password,ogenius_nds_db_normal_users_user_vip_tag,ogenius_nds_db_normal_users_firstname,
        ogenius_nds_db_normal_users_lastname,ogenius_nds_db_normal_users_birthdate, ogenius_nds_db_normal_users_gender,
            ogenius_nds_db_normal_users_profession,ogenius_nds_db_normal_users_names,ogenius_nds_db_normal_users_marital_status,
            ogenius_nds_db_normal_users_activation_code,ogenius_nds_db_normal_users_regdate,ogenius_nds_db_normal_users_province,
            ogenius_nds_db_normal_users_district,ogenius_nds_db_normal_users_sector,
            ogenius_nds_db_normal_users_email,  ogenius_nds_db_normal_users_tel)
                VALUES('{$home_individual_password}','0','{$home_individual_fname}','{$home_individual_lname}','{$pickBirthDay}'
                ,'{$home_individual_gender}','{$home_individual_profession}','{$home_individual_username}'
                ,'{$home_individual_marital_status}','{$the_rnd_code}','{$date}','{$home_individual_province}'
                ,'{$home_individual_district}','{$home_individual_sector}','{$home_individual_email_add}','{$home_individual_phone}')";
    if ($query_save_individual_user = $database->query($sql_save_individual_user)) {
        //---------------------
        $sql_facebook_log_00 = "SELECT * FROM  ogenius_nds_db_normal_users WHERE    ogenius_nds_db_normal_users_email='{$home_individual_email_add}' ";
        if ($query_facebook_log_00 = $database -> query($sql_facebook_log_00)) {
            //---------------------
            while ($res_facebook_log_00 = mysqli_fetch_array($query_facebook_log_00)) {
                $id_000 = $res_facebook_log_00['ogenius_nds_db_normal_users_id'];
                ///------------------
                $choiceLng_name = strtolower($choiceLng_name);
                $sql_facebook_log_00_lang = "SELECT * FROM  ogenius_nds_languages_for_settings WHERE    LOWER(ogenius_nds_languages_for_settings_name_of_language)='{$choiceLng_name}' ";
                if ($query_facebook_log_00_lang = $database -> query($sql_facebook_log_00_lang)) {
                    //---------------------
                    while ($res_facebook_log_00 = mysqli_fetch_array($query_facebook_log_00_lang)) {
                        //--
                        $id_lan_2017 = $res_facebook_log_00['ogenius_nds_languages_for_settings_id'];
                        //--
                        $sql_999 = "INSERT INTO  ogenius_nds_languages_for_settings_language_user_link(ogenius_nds_languages_for_settings_language_user_link_id_user,
                    ogenius_nds_languages_for_settings_language_user_link_id_languag,ogenius_nds_languages_for_settings_language_user_link_regtime
        )VALUES('{$id_000}','{$id_lan_2017}','{$date}')";
                        if ($query_999 = $database -> query($sql_999)) {
                            //setcookie("ogenius_nds_user_id_x2309999_990", $id, time() + 3600, "/", "", 0);
                            //-----------Insert into Suggestion Boxes-------

                            //------------------------------Send the mail with the right attatchment--------------------------------------------------
                            session_start();
                            $_SESSION["ogenius_nds_user_id_x2309999_990"] = $id_000;
                            echo "1000";
                            //--------------
                            

                             $to = $home_individual_email_add;
                             $subject = "HTML email";

                             $message = "
                             <html>
                             <head>
                             <title>NDS Registration</title>
                             </head>
                             <p>code is:$the_rnd_code</p>
                             <div style='text-align:center;'>The code is valid for 15 minutes.</br>
                             You can also use this link: </br>
                             <a href='http://www.nezaservice.com/waiting_pagex.php?userId=$id_000&theCode_xxx_0000=$the_rnd_code&sfsfsf=131313&theaccountType_xxx_0000=individxbnnmm' style='color:blue;text-decoration:none;font-size:18px;'>Click here to activate the account!</a>
                             </div>

                             </body>
                             </html>
                             ";

                             // Always set content-type when sending HTML email
                             $headers = "MIME-Version: 1.0" . "\r\n";
                             $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

                             // More headers
                             $headers .= 'From: <registry@nds.com>' . "\r\n";
                             $headers .= 'Cc: info@ogeniuspriority.com' . "\r\n";

                             if(mail($to, $subject, $message, $headers))
                             //--------------
                             

                            //--------------------------------------------------------------------------------

                            //----------------------------------
                             {echo "1000";exit;}
                            //----------------

                            //---------------------
                            //$to = "somebody@example.com, somebodyelse@example.com";

                        }

                    }
                }

            }
        }

    } else {
        echo "2000" . mysqli_error();
    }

}
