<?php
require_once ("../includes/conn/config.php");
?>
<?php
require_once ("../includes/classes/database.php");
?>
<?php
if (isset($_POST["key"])) {
    $database = new mysqldatabase();

    $first_name = $_POST['first_name'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $id = $_POST['id'];
    $date = date("Y-m-d H:i:s");
    $choiceLng_name = $_POST['choiceLng_name'];
    $imgUrl=$_POST['imgUrl'];
    //--------------------------
    $first_name = addslashes($first_name);
    $name = addslashes($name);
    $gender = addslashes($gender);
    $email = addslashes($email);
    $id = addslashes($id);
    $imgUrl="";

    //-----------------
    $n = 0;
    $sql_facebook_log = "SELECT * FROM  ogenius_nds_db_normal_users WHERE    ogenius_nds_db_normal_users_api_log_face_goo_id='{$id}' ";
    if ($query_facebook_log = $database -> query($sql_facebook_log)) {
        //---------------------
        while ($res_facebook_log = mysqli_fetch_array($query_facebook_log)) {
            $n++;
        }
    }
    if ($n == 0) {
        //---first register------
        $sql = "INSERT INTO  ogenius_nds_db_normal_users(ogenius_nds_db_normal_users_firstname, ogenius_nds_db_normal_users_lastname,
            ogenius_nds_db_normal_users_gender, ogenius_nds_db_normal_users_email,  ogenius_nds_db_normal_users_api_log_face_goo_id,
            ogenius_nds_db_normal_users_registr_tool_user_or_social,    ogenius_nds_db_normal_users_registra_model,
            ogenius_nds_db_normal_users_avatar
        )VALUES('{$first_name}','{$name}','{$gender}','{$email}','{$id}','used_social','web','{$imgUrl}')";
        if ($query = $database -> query($sql)) {
            //-------------------------------
            $sql_facebook_log_00 = "SELECT * FROM  ogenius_nds_db_normal_users WHERE    ogenius_nds_db_normal_users_api_log_face_goo_id='{$id}' ";
            if ($query_facebook_log_00 = $database -> query($sql_facebook_log_00)) {
                //---------------------
                while ($res_facebook_log_00 = mysqli_fetch_array($query_facebook_log_00)) {
                    $id_000 = $res_facebook_log_00['ogenius_nds_db_normal_users_id'];
                    //setcookie("ogenius_nds_user_id_x2309999_990", $id_000, time() + 3600, "/", "", 0);
                    //--------------------------
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

                                session_start();
                                $_SESSION["ogenius_nds_user_id_x2309999_990"] = $id_000;
                                echo "1000";
                            }

                        }
                    }
                }
            }

        } else {
            echo "User has not  been created! " . mysqli_error();
        }

    } else {
        //------------------already registered----
        $sql_facebook_log_00 = "SELECT * FROM  ogenius_nds_db_normal_users WHERE    ogenius_nds_db_normal_users_api_log_face_goo_id='{$id}' ";
        if ($query_facebook_log_00 = $database -> query($sql_facebook_log_00)) {
            //---------------------
            while ($res_facebook_log_00 = mysqli_fetch_array($query_facebook_log_00)) {
                $id_000 = $res_facebook_log_00['ogenius_nds_db_normal_users_id'];
                session_start();
                $_SESSION["ogenius_nds_user_id_x2309999_990"] = $id_000;
                //setcookie("ogenius_nds_user_id_x2309999_990", $id, time() + 3600, "/", "", 0);
                echo "2000";
                //----------------

            }
        }

        //-------------------------------
        $sql_facebook_log_00 = "SELECT * FROM  ogenius_nds_db_normal_users WHERE    ogenius_nds_db_normal_users_api_log_face_goo_id='{$id}' ";
        if ($query_facebook_log_00 = $database -> query($sql_facebook_log_00)) {
            //---------------------
            while ($res_facebook_log_00 = mysqli_fetch_array($query_facebook_log_00)) {
                $id_000 = $res_facebook_log_00['ogenius_nds_db_normal_users_id'];
                //setcookie("ogenius_nds_user_id_x2309999_990", $id_000, time() + 3600, "/", "", 0);
                //--------------------------
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

                            $sql_facebook_log_00 = "SELECT * FROM  ogenius_nds_db_normal_users WHERE    ogenius_nds_db_normal_users_api_log_face_goo_id='{$id}' ";
                            if ($query_facebook_log_00 = $database -> query($sql_facebook_log_00)) {
                                //---------------------
                                while ($res_facebook_log_00 = mysqli_fetch_array($query_facebook_log_00)) {
                                    $id_000 = $res_facebook_log_00['ogenius_nds_db_normal_users_id'];
                                    session_start();
                                    $_SESSION["ogenius_nds_user_id_x2309999_990"] = $id_000;
                                    //setcookie("ogenius_nds_user_id_x2309999_990", $id, time() + 3600, "/", "", 0);
                                    echo "2000";
                                    //----------------

                                }
                            }
                        }

                    }
                }
            }
        }

    }

}
?>