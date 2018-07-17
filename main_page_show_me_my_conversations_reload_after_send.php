<?php
session_start();
$thIsUserId_2017 = $_POST['common_user_settings_the_id'];
//echo "--------".$_POST['theQueryId']."---".$_POST['orient'];
$_orient_89_cyuma = $_POST['orient'];
$_id_2017 = $_POST['theQueryId'];
?>
<?php
//--bring the language--------------------------
require_once ("includes/conn/config.php");
require_once ("includes/classes/database.php");
require_once ("includes/classes/settingsReadFile.php");
require_once ("includes/functions.php");
require_once ("includes/timeToSec.php");
//---------------

if (isset($_SESSION["ogenius_nds_user_id_x2309999_990"])) {
    //--------if not set choose my chosen language here----------------------
    $id_link = $_SESSION["ogenius_nds_user_id_x2309999_990"];
    $sqllanguage_tools_link = "SELECT * FROM  ogenius_nds_languages_for_settings_language_user_link WHERE ogenius_nds_languages_for_settings_language_user_link_id_user='{$id_link}'     ";
    if ($querylanguage_tools_link = $database->query($sqllanguage_tools_link)) {
        //---------------------
        while ($res_lan_link = mysqli_fetch_array($querylanguage_tools_link)) {
            //-----------------------------------------------------
            $language_id_0 = $res_lan_link['ogenius_nds_languages_for_settings_language_user_link_id_languag'];
            //-------------------Find the language name----------------
            $sqllanguage_tools_link_lang = "SELECT * FROM  ogenius_nds_languages_for_settings WHERE ogenius_nds_languages_for_settings_id='{$language_id_0}'";
            if ($querylanguage_tools_link_lang = $database->query($sqllanguage_tools_link_lang)) {
                //---------------------
                while ($res_lan_link_lang = mysqli_fetch_array($querylanguage_tools_link_lang)) {
                    //-----------------------------------------------------
                    $language_id_0_lang = $res_lan_link_lang['ogenius_nds_languages_for_settings_name_of_language'];
                    //-------------------Find the language name----------------
                    $_SESSION["NDS_OGENIUS_session_lan"] = $language_id_0_lang;
                    $theLanGuru = $_SESSION["NDS_OGENIUS_session_lan"];
                }
            }
        }
    } else {
        $_SESSION["NDS_OGENIUS_session_lan"] = "English";
        $theLanGuru = $_SESSION["NDS_OGENIUS_session_lan"];
    }
} else {
    //---------------------------------
    $_SESSION["NDS_OGENIUS_session_lan"] = "English";
    $theLanGuru = $_SESSION["NDS_OGENIUS_session_lan"];
}
?>
<?php
//-------------------------------------Check a session or create one--
if (isset($_SESSION["NDS_OGENIUS_session_lan"])) {

    $_global_language = "english_NDS_618485740hub5548.xml";
    ?>
    <?php
    $thelan_09 = $_SESSION["NDS_OGENIUS_session_lan"];
    $sqllanguage_tools = "SELECT * FROM  ogenius_nds_languages_for_settings WHERE ogenius_nds_languages_for_settings_name_of_language='{$thelan_09}'";
    if ($querylanguage_tools = $database->query($sqllanguage_tools)) {
        //---------------------
        while ($res_lan = mysqli_fetch_array($querylanguage_tools)) {
            $_global_language = $res_lan['ogenius_nds_languages_for_settings_language_file_name'];
            $_SESSION["NDS_OGENIUS_session_lan"] = $_global_language;
        }
    }
} else {

    //--bring the language--------------------------
    require_once ("includes/conn/config.php");
    require_once ("includes/classes/database.php");
    require_once ("includes/classes/settingsReadFile.php");
    //---------------
    $_global_language = "english_NDS_618485740hub5548.xml";
    ?>
    <?php
    $sqllanguage_tools = "SELECT * FROM  ogenius_nds_languages_for_settings WHERE ogenius_nds_languages_for_settings_name_of_language='English'";
    if ($querylanguage_tools = $database->query($sqllanguage_tools)) {
        //---------------------
        while ($res_lan = mysqli_fetch_array($querylanguage_tools)) {
            $_global_language = $res_lan['ogenius_nds_languages_for_settings_language_file_name'];
        }
    }
}
//---Declare the settings class to hold all The keywords--
$NDS_OGENIUS_MAIN_settings = new myXML_CED_Settings("./system_config_xml/" . $_global_language);
?>


<!--  the chats' load-->
<?php
//---------------------------------
$sql_2017_institution_suggestions_comnts_pool = "SELECT 
            Pamela.ogenius_nds_db_rgb_query_comment_comment,
            Pamela.ogenius_nds_db_rgb_query_comment_id,
            Pamela.ogenius_nds_db_rgb_query_comment_active,
            Pamela.ogenius_nds_db_rgb_query_comment_me_them_alt,
            Pamela.ogenius_nds_db_rgb_query_comment_sender_id,
            Pamela.ogenius_nds_db_rgb_query_comment_suggestOrQuestion,
            Pamela.ogenius_nds_db_rgb_query_comment_external_visibility,
            Pamela.ogenius_nds_db_rgb_query_comment_active,
            Pamela.ogenius_nds_db_rgb_query_comment_regdate,
            Pamela.ogenius_nds_db_rgb_query_comment_query_id,
            ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_avatar,
            ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_names,
            ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id ,
            ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_api_log_face_goo_id         
             FROM (SELECT * FROM ogenius_nds_db_rgb_query_comment 
             WHERE   ogenius_nds_db_rgb_query_comment_query_id='{$_id_2017}' AND     ogenius_nds_db_rgb_query_comment_active='0' 
             AND     ogenius_nds_db_rgb_query_comment_external_visibility='0' 
             AND ogenius_nds_db_rgb_query_comment_suggestOrQuestion='{$_orient_89_cyuma}'  ORDER BY 
    ogenius_nds_db_rgb_query_comment_id DESC ) AS Pamela
            LEFT JOIN ogenius_nds_db_normal_users
            ON Pamela.ogenius_nds_db_rgb_query_comment_sender_id=ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id
WHERE   Pamela.ogenius_nds_db_rgb_query_comment_query_id='{$_id_2017}' AND     Pamela.ogenius_nds_db_rgb_query_comment_active='0'   ORDER BY 
    ogenius_nds_db_rgb_query_comment_id DESC 

";
//-------Counter of comments----
$all_comments_count = 60;
$all_comments_count_temp_asc_id = "";
$theComments_count_2017 = 0;
if ($query_2017_institution_suggestions_comnts_pool = $database->query($sql_2017_institution_suggestions_comnts_pool)) {
    //---------------------
    while ($res_2017_institution_suggestions_comnts_pool = mysqli_fetch_array($query_2017_institution_suggestions_comnts_pool)) {
        echo "</br>";

        //-----------------------update the current id to read ------------------
        if ($thIsUserId_2017 != $res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_sender_id']) {
            $_X_2017_x_ID = $res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_id'];
            $sql_xx_2017_cyuma = "UPDATE  ogenius_nds_db_rgb_query_comment
               SET ogenius_nds_db_rgb_query_comment_read='1' WHERE
               ogenius_nds_db_rgb_query_comment_id='{$_X_2017_x_ID}' 
              XOR ogenius_nds_db_rgb_query_comment_consulting_who='{$thIsUserId_2017}' ";
            if ($query_xx_2017_cyuma = $database->query($sql_xx_2017_cyuma)) {
                
            }
        }


        //------------------------------------------

        if ($res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_normal_users_id'] == $thIsUserId_2017) {
            if ($res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_external_visibility'] == "0") {
                ?>
                <div class="chat-bubble right" onclick="selectmessage();">
                    <input type="checkbox" class="form-control bubble-select"/>



                    <div class="bubble-content">
                        <b> <span><?php echo "" . checkMyPostingPrivacyStatus($res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_normal_users_id'], $res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_normal_users_names']); ?></span></b>
                        <br>
                        <p> <?php echo "" . $res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_comment']; ?>
                        </p>
                        <div class="bubble-extra"><span><small><?php echo "" . time_to_sec($res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_regdate']); ?></small></span></div>
                        <?php
                        if ($res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_sender_id'] == $thIsUserId_2017) {
                            ?>
                            <div><img onclick="main_page_institution_delete_this_commnt_rgb_query_Messages(this)" name='<?php echo "" . $res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_id']; ?>' title='Delete this' src="images/send_to_dust_bin.png" class="image24" /></div>

                            <?php
                        }
                        ?>
                    </div>

                </div>


                <?php
            } else {
                ?>
                <div class="chat-bubble right" onclick="selectmessage();">
                    <input type="checkbox" class="form-control bubble-select"/>



                    <div class="bubble-content">
                        <b> <span><?php echo "" . checkMyPostingPrivacyStatus($res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_normal_users_id'], $res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_normal_users_names']); ?></span></b><br>
                        <p>  <?php echo "" . $res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_comment']; ?>
                        </p>
                        <div class="bubble-extra"><span>
                                <small><?php echo "" . time_to_sec($res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_regdate']); ?></small></span></div>
                        <?php
                        if ($res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_sender_id'] == $thIsUserId_2017) {
                            ?>
                            <div><img onclick="main_page_institution_delete_this_commnt_rgb_query_Messages(this)" name='<?php echo "" . $res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_id']; ?>' title='Delete this' src="images/send_to_dust_bin.png" class="image24" /></div>

                            <?php
                        }
                        ?>
                    </div>

                </div>
                <?php
            }
        } else {
            if ($res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_external_visibility'] == "0") {
                ?>
                <div class="chat-bubble left" onclick="selectmessage();">
                    <input type="checkbox" class="form-control bubble-select"/>



                    <div class="bubble-content">
                        <b>
                            <span>
                                <?php echo "" . checkMyPostingPrivacyStatus($res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_normal_users_id'], $res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_normal_users_names']); ?></span></b><br>
                        <p>   <?php echo "" . $res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_comment']; ?>
                        </p>
                        <div class="bubble-extra"><span>
                                <small>
                                    <?php echo "" . time_to_sec($res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_regdate']); ?></small></span></div>
                        <?php
                        if ($res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_sender_id'] == $thIsUserId_2017) {
                            ?>
                            <div><img onclick="main_page_institution_delete_this_commnt_rgb_query_Messages(this)" name='<?php echo "" . $res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_id']; ?>' title='Delete this' src="images/send_to_dust_bin.png" class="image24" /></div>

                            <?php
                        }
                        ?>
                    </div>

                </div>



                <?php
            } else {
                ?>
                <div class="chat-bubble left" onclick="selectmessage();">
                    <input type="checkbox" class="form-control bubble-select"/>



                    <div class="bubble-content">
                        <b> <span>
                                <?php echo "" . checkMyPostingPrivacyStatus($res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_normal_users_id'], $res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_normal_users_names']); ?></span></b><br>
                        <p>   <?php echo "" . $res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_comment']; ?>
                        </p>
                        <div class="bubble-extra"><span>
                                <small>
                                    <?php echo "" . time_to_sec($res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_regdate']); ?></small></span></div>
                        <?php
                        if ($res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_sender_id'] == $thIsUserId_2017) {
                            ?>
                            <div style='float:left'><img onclick="main_page_institution_delete_this_commnt_rgb_query_Messages(this)" name='<?php echo "" . $res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_id']; ?>' title='Delete this' src="images/send_to_dust_bin.png" style="width: 25px;height: 25px;margin-top:15px;border-radius:5px" /></div>

                            <?php
                        }
                        ?>
                    </div>

                </div>


                <?php
            }
        }

        //-------The more up loader--
        if ($all_comments_count == 60) {
            $all_comments_count_temp_asc_id = $res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_id'];
        }
        if ($all_comments_count == 1) {
            $the_Id_Suggest = $res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_query_id'];
            //echo "<div><img id='".$res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_query_id']."$theComments_count_2017' onclick='main_page_institution_load_more_cmmnts(this,$the_Id_Suggest)' name='".$all_comments_count_temp_asc_id."' src='images/up_new_load.png' style='max-width:50px;max-height:50px;' /></div>";
        }

        //---------------
        $theComments_count_2017++;
        $all_comments_count--;
    }
    if ($theComments_count_2017 == 0) {
        echo "<div style='margin:auto;'><img src='images/no_data_in.png' style='max-width:50px;max-height:50px;margin-top:20%;border-radius:6px;box-shadow:2px 2px 2px red;' /></div>";
    }
}
?>
                                        



