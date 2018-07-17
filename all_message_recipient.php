<?php
session_start();
$common_user_settings_the_id = $_SESSION["ogenius_nds_user_id_x2309999_990"];
$thIsUserId_2017 = $common_user_settings_the_id;
//echo "--------".$_POST['theQueryId']."---".$_POST['orient'];
$_orient_89_cyuma = $_GET['type'];
$_id_2017 = $_GET['queryId'];
echo "<input type='hidden' value='$_id_2017' id='the_popped_up_query_suggst_id'/>";
echo "<input type='hidden' value='$_orient_89_cyuma' id='okay_good_orientation'/>";
//--------------------------
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

<?php
switch ($_GET['type']) {
    case "query":
        ?>

        <div class="chat-header">
            <div>
                <div class="chat-header-avatar">
                    <?php
                    $sql_select_img_avatar = "SELECT * FROM ogenius_nds_db_normal_users WHERE ogenius_nds_db_normal_users_id = '{$thIsUserId_2017}' ";
                    if ($query_find_img_avatar = $database->query($sql_select_img_avatar)) {
                        while ($res_img_queries = mysqli_fetch_array($query_find_img_avatar)) {
                            //-------------===
                            //$indiv_avatar = $res_profile_page_individual_user_gen['ogenius_nds_db_normal_users_avatar'];
                            $indiv_social_goo = $res_img_queries['ogenius_nds_db_normal_users_api_log_face_goo_id'];
                            $indiv_vip_tag_goo = $res_img_queries['ogenius_nds_db_normal_users_user_vip_tag'];
                            //-----------account type institution---
                            $insitution_profile_2017 = $res_img_queries['ogenius_nds_db_normal_users_institution'];
                            $temp_var_intitution_name = strtolower($insitution_profile_2017);
                            //---
                            $indiv_avatar = $res_img_queries['ogenius_nds_db_normal_users_avatar'];
                            $res_name_result0 = $res_img_queries['ogenius_nds_db_normal_users_names'];
                            //-------------------
                            switch ($indiv_vip_tag_goo) {
                                case "0":
                                    ?><a href="profile_page.php"> <?php
                                        if ($indiv_social_goo < 1) {
                                            ?>
                                            <img src="uploaded_images/<?php echo "" . (!empty($indiv_avatar)) ? $indiv_avatar : "nds_avatar.png"; ?>" alt="pp" class="avatar-icon image48"/>
                                            <?php
                                        } else {
                                            ?><img alt="pp" class="avatar-icon image48" src="<?php
                                            if (!empty($indiv_avatar)) {
                                                echo "" . (strlen($indiv_avatar) > 26) ? $indiv_avatar : "uploaded_images/" . $indiv_avatar;
                                            } else {
                                                echo "" . "uploaded_images/" . "nds_avatar.png";
                                            }
                                            ?>"  />

                                        <?php } ?></a>


                                    <?php
                                    break;
                                case "1":
                                    ?>

                                    <a href="profile_page_institution.php">

                                        <?php
                                        if ($indiv_social_goo != 1) {
                                            ?>
                                            <img src="uploaded_images/<?php echo "" . (!empty($indiv_avatar)) ? $indiv_avatar : "nds_avatar.png"; ?>" alt="pp" class="avatar-icon image48">

                                        <?php } else { ?>
                                            <img src="<?php echo "" . $indiv_avatar; ?>" alt="pp" class="avatar-icon image48">

                                        <?php } ?></a>

                                    <?php
                                    break;
                                case"2":
                                    ?>

                                    <a href="profile_page_officials.php" >

                                        <?php
                                        if ($indiv_social_goo != 1) {
                                            ?>
                                            <img src="uploaded_images/<?php echo "" . (!empty($indiv_avatar)) ? $indiv_avatar : "nds_avatar.png"; ?>" alt="pp" class="avatar-icon image48">

                                            </td>

                                        <?php } else { ?>
                                            <img src="<?php echo "" . $indiv_avatar; ?>" alt="pp" class="avatar-icon image48">

                                        <?php } ?></a>

                                    <?php
                                    break;
                            }
                            //------
                            ?>

                        </div>
                        <div class="chat-header-metas">
                            <span class="name-meta"> <?php echo $res_name_result0; ?></span><br>

                        </div>
                        <?php
                    }
                }
                ?>


            </div>

            <div class="chat-header-options">
                <div class="chat-header-options-more">
                    <img src="images/icons/ic_reply_black_24dp.png"/>
                    <img src="images/icons/ic_delete_black_24dp.png"/>
                </div>
                <i class="fa fa-gear fa-2x" onclick="chatdropdown()"></i>
            </div>
            <ul class="chat-header-options-dropdown">
                <li>view profile</li>
                <li>mute</li>
                <li>add to favorite</li>
                <li>add to group</li>
                <li>delete conversation</li>
                <li>block person</li>

            </ul>
        </div>
        <div id="chat-message" class="chat-message">
            <div>
                <?php
                $_query_id = $_id_2017;
                $sql_orient_find_queries = "SELECT * FROM  ogenius_nds_db_rgb_query
                                             LEFT JOIN ogenius_nds_db_normal_users
                                             ON ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id=ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_query_provider
                                               WHERE ogenius_nds_db_rgb_query_id='{$_query_id}'
                                             ORDER BY   ogenius_nds_db_rgb_query_id DESC LIMIT 1";
                if ($query_orient_find_queries = $database->query($sql_orient_find_queries)) {
                    //---------------------
                    while ($res_orient_find_queries = mysqli_fetch_array($query_orient_find_queries)) {
                        ?>
                        <div class="post-recipient panel-heading startrowspace" style="text-align: left">
                            <div>
                                <span class="text-primary">
                                    <?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_7("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_7("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        SENT TO 
                                    <?php } ?> <?php echo "<i>" . "RGB" . "</i>"; ?>
                                </span>
                                <br>
                                <b> 
                                    <span class="text-success">
                                        --Query--
                                    </span>
                                </b>
                            </div>

                        </div>
                        <div class="messagedialog-text">
                            <span>
                                <?php echo "" . activateUrlStringsw($res_orient_find_queries['ogenius_nds_db_rgb_query_query']); ?>
                            </span>

                        </div>



                        <?php
                    }
                }
                ?>

            </div>

        </div>
        <div class="chat-body" style="height:350px; overflow-y: auto">
            <div id="main_scroll_msgs_page_cyuma_2017">
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
            </div>
        </div>


        <div class="post-area startrowstart" >
            <textarea type="textarea" class="form-control"  id="main_page_message_post_field" onkeyup="enlarge(this)" placeholder="<?php
            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_28("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_28("system_config_xml/" . $_global_language)->item(0)->textContent;
            } else {
                ?>
                          Share your opinion with our community
                      <?php } ?>"></textarea>
            <div id="sendmessage"> 
                <i class="fa fa-send-o fa-2x" onclick="sendMessage_commonUser(<?php echo $_GET['queryId']; ?>,<?php echo $thIsUserId_2017; ?>,<?php echo "'" . $_GET['type'] . "'"; ?>)"></i>

            </div>      


        </div>

        <?php
        break;
    case "suggestion":
        ?>

        <div class="chat-header">
            <div>
                <div class="chat-header-avatar">
                    <?php
                    $sql_select_img_avatar = "SELECT * FROM ogenius_nds_db_normal_users WHERE ogenius_nds_db_normal_users_id = '{$thIsUserId_2017}' ";
                    if ($query_find_img_avatar = $database->query($sql_select_img_avatar)) {
                        while ($res_img_queries = mysqli_fetch_array($query_find_img_avatar)) {
                            //-------------===
                            //$indiv_avatar = $res_profile_page_individual_user_gen['ogenius_nds_db_normal_users_avatar'];
                            $indiv_social_goo = $res_img_queries['ogenius_nds_db_normal_users_api_log_face_goo_id'];
                            $indiv_vip_tag_goo = $res_img_queries['ogenius_nds_db_normal_users_user_vip_tag'];
                            //-----------account type institution---
                            $insitution_profile_2017 = $res_img_queries['ogenius_nds_db_normal_users_institution'];
                            $temp_var_intitution_name = strtolower($insitution_profile_2017);
                            //---
                            $indiv_avatar = $res_img_queries['ogenius_nds_db_normal_users_avatar'];
                            $res_name_result0 = $res_img_queries['ogenius_nds_db_normal_users_names'];
                            //-------------------
                            switch ($indiv_vip_tag_goo) {
                                case "0":
                                    ?><a href="profile_page.php"> <?php
                                        if ($indiv_social_goo < 1) {
                                            ?>
                                            <img src="uploaded_images/<?php echo "" . (!empty($indiv_avatar)) ? $indiv_avatar : "nds_avatar.png"; ?>" alt="pp" class="avatar-icon image48"/>
                                            <?php
                                        } else {
                                            ?><img alt="pp" class="avatar-icon image48" src="<?php
                                            if (!empty($indiv_avatar)) {
                                                echo "" . (strlen($indiv_avatar) > 26) ? $indiv_avatar : "uploaded_images/" . $indiv_avatar;
                                            } else {
                                                echo "" . "uploaded_images/" . "nds_avatar.png";
                                            }
                                            ?>"  />

                                        <?php } ?></a>


                                    <?php
                                    break;
                                case "1":
                                    ?>

                                    <a href="profile_page_institution.php">

                                        <?php
                                        if ($indiv_social_goo != 1) {
                                            ?>
                                            <img src="uploaded_images/<?php echo "" . (!empty($indiv_avatar)) ? $indiv_avatar : "nds_avatar.png"; ?>" alt="pp" class="avatar-icon image48">

                                        <?php } else { ?>
                                            <img src="<?php echo "" . $indiv_avatar; ?>" alt="pp" class="avatar-icon image48">

                                        <?php } ?></a>

                                    <?php
                                    break;
                                case"2":
                                    ?>

                                    <a href="profile_page_officials.php" >

                                        <?php
                                        if ($indiv_social_goo != 1) {
                                            ?>
                                            <img src="uploaded_images/<?php echo "" . (!empty($indiv_avatar)) ? $indiv_avatar : "nds_avatar.png"; ?>" alt="pp" class="avatar-icon image48">

                                            </td>

                                        <?php } else { ?>
                                            <img src="<?php echo "" . $indiv_avatar; ?>" alt="pp" class="avatar-icon image48">

                                        <?php } ?></a>

                                    <?php
                                    break;
                            }
                            //------
                            ?>

                        </div>
                        <div class="chat-header-metas">
                            <span class="name-meta"> <?php echo $res_name_result0; ?></span><br>

                        </div>
                        <?php
                    }
                }
                ?>


            </div>
            <div class="chat-header-options">
                <div class="chat-header-options-more">
                    <img src="images/icons/ic_reply_black_24dp.png"/>
                    <img src="images/icons/ic_delete_black_24dp.png"/>
                </div>
                <i class="fa fa-gear fa-2x" onclick="chatdropdown()"></i>
            </div>
            <ul class="chat-header-options-dropdown">
                <li>view profile</li>
                <li>mute</li>
                <li>add to favorite</li>
                <li>add to group</li>
                <li>delete conversation</li>
                <li>block person</li>

            </ul>
        </div>
        <div id="chat-message" class="chat-message">
            <div> 
                <?php
                //echo "--------------".$_POST['orient'];
                $_suggestion_id = $_GET['queryId'];
                $sql_orient_find_suggestions = "SELECT * FROM  ogenius_nds_db_suggestions
                                             LEFT JOIN ogenius_nds_db_normal_users
                                             ON ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id=ogenius_nds_db_suggestions.ogenius_nds_db_suggestions_provider_id
                                               WHERE ogenius_nds_db_suggestions_id='{$_suggestion_id}'
                                             ORDER BY   ogenius_nds_db_suggestions_id DESC LIMIT 1";
                if ($query_orient_find_suggestions = $database->query($sql_orient_find_suggestions)) {
                    //---------------------
                    while ($res_orient_find_suggestions = mysqli_fetch_array($query_orient_find_suggestions)) {
                        switch ($res_orient_find_suggestions['ogenius_nds_db_suggestions_type']) {
                            case "text":
                                ?>

                                <div class="post-recipient panel-heading startrowspace" style="text-align: left">
                                    <div>
                                        <span class="text-primary">
                                            <?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_7("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_7("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                SENT TO 
                                            <?php } ?> <?php echo "<i>" . renderTheRecipientOfThisSuggestion($res_orient_find_suggestions['ogenius_nds_db_suggestions_box_id']) . "</i>"; ?>
                                        </span>
                                        <br>
                                        <b> 
                                            <span class="text-info">
                                                --suggestion--
                                            </span>
                                        </b>
                                    </div>

                                </div>
                                <div class="messagedialog-text">
                                    <span>
                                        <?php echo "" . activateUrlStringsw($res_orient_find_suggestions['ogenius_nds_db_suggestions_data']); ?>
                                    </span>
                                </div>

                                <?php
                                break;
                            case "image":
                                ?>
                                <div class="post-recipient panel-heading startrowstart" style="text-align: left">
                                    <div>
                                        <span class="text-primary">
                                            <?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_7("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_7("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                SENT TO 
                                            <?php } ?> <?php echo "<i>" . renderTheRecipientOfThisSuggestion($res_orient_find_suggestions['ogenius_nds_db_suggestions_box_id']) . "</i>"; ?>
                                        </span>
                                        <br>
                                        <b> 
                                            <span class="text-info">
                                                --suggestion--
                                            </span>
                                        </b>
                                    </div>
                                    <div class="dragImagebox">
                                        <!-- <?php echo "" . activateUrlStringsw($res_orient_find_suggestions['ogenius_nds_db_suggestions_data']); ?>
                                        -->
                                        <div class="chooseImageFromDevice centercolumn" style="overflow: hidden"> <?php
                                            $theMainPageImgsTemp_store_IMGs_array = explode("~", $res_orient_find_suggestions['ogenius_nds_db_suggestions_data']);

                                            for ($i = 0; $i < sizeof($theMainPageImgsTemp_store_IMGs_array); $i++) {
                                                ?>
                                                <div id="imgBull<?php echo "" . $i; ?>344">
                                                    <img class="fullimage" id="<?php echo "err34555" . $i; ?>fddffdf"  onclick="main_page_institution_pic_view_this_img_enlarge(this)" src="Community_Admin/NDS_suggested_images/<?php echo "" . $theMainPageImgsTemp_store_IMGs_array[$i]; ?>" /></br>


                                                </div>

                                                <?php
                                            }
                                            ?>

                                        </div>
                                        <div class="messagedialog-text">
                                            <span>
                                                <?php echo "" . activateUrlStringsw($res_orient_find_suggestions['ogenius_nds_db_suggestions_support_text']); ?>
                                            </span>
                                        </div>
                                    </div>
                                </div>




                                <?php
                                break;
                            case "audio":
                                ?>
                                <div class="post-recipient panel-heading startrowspace" style="text-align: left">
                                    <div>
                                        <span class="text-primary">
                                            <?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_7("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_7("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                SENT TO 
                                            <?php } ?> <?php echo "<i>" . renderTheRecipientOfThisSuggestion($res_orient_find_suggestions['ogenius_nds_db_suggestions_box_id']) . "</i>"; ?>
                                        </span>
                                        <br>
                                        <b> 
                                            <span class="text-info">
                                                --suggestion--
                                            </span>
                                        </b>
                                    </div>


                                </div>
                                <div class="dragImagebox">
                                    <div class="chooseImageFromDevice centercolumn" style="overflow: hidden">
                                        <audio preload="true" src="Community_Admin/NDS_suggested_audios/<?php echo "" . $res_orient_find_suggestions['ogenius_nds_db_suggestions_data']; ?>" controls="" style="width: 60%;">

                                        </audio>   
                                    </div>

                                </div>

                                <div class="messagedialog-text">
                                    <span>
                                        <?php echo "" . activateUrlStringsw($res_orient_find_suggestions['ogenius_nds_db_suggestions_support_text']); ?>
                                    </span>
                                </div>



                            </div>


                            <?php
                            break;
                        case "video":
                            ?>
                            <div class="post-recipient panel-heading startrowspace" style="text-align: left">
                                <div>
                                    <span class="text-primary">
                                        <?php
                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_7("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_7("system_config_xml/" . $_global_language)->item(0)->textContent;
                                        } else {
                                            ?>
                                            SENT TO 
                                        <?php } ?> <?php echo "<i>" . renderTheRecipientOfThisSuggestion($res_orient_find_suggestions['ogenius_nds_db_suggestions_box_id']) . "</i>"; ?>
                                    </span>
                                    <br>
                                    <b> 
                                        <span class="text-info">
                                            --suggestion--
                                        </span>
                                    </b>
                                </div>
                                <div class="dragImagebox">
                                    <div class="chooseImageFromDevice centercolumn" style="overflow: hidden">
                                        <video preload="true" src="Community_Admin/NDS_suggested_videos/<?php echo "" . $res_orient_find_suggestions['ogenius_nds_db_suggestions_data']; ?>" controls="" style="width: 60%;">

                                        </video>  
                                    </div>
                                    <div class="messagedialog-text">
                                        <span>
                                            <?php echo "" . activateUrlStringsw($res_orient_find_suggestions['ogenius_nds_db_suggestions_support_text']); ?>
                                        </span>  


                                    </div>
                                </div>
                            </div>




                            <?php
                            break;
                    }
                }
                //------------------
            }
            ?>
        </div>
        </div>
        <div class="chat-body" style="height:350px; overflow-y: auto">
            <div id="main_scroll_msgs_page_cyuma_2017" class="startcolstartinverse">
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
                                        <b> <span>
                                                <?php echo "" . checkMyPostingPrivacyStatus($res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_normal_users_id'], $res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_normal_users_names']); ?></span></b><br>
                                        <p>  <?php echo "" . $res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_comment']; ?>
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
                                <div class="chat-bubble right" onclick="selectmessage();">
                                    <input type="checkbox" class="form-control bubble-select"/>



                                    <div class="bubble-content">
                                        <b> <span>
                                                <?php echo "" . checkMyPostingPrivacyStatus($res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_normal_users_id'], $res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_normal_users_names']); ?></span></b><br>
                                        <p>  
                                            <?php echo "" . $res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_comment']; ?>
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
                            }
                        } else {
                            if ($res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_external_visibility'] == "0") {
                                ?>
                                <div class="chat-bubble left" onclick="selectmessage();">
                                    <input type="checkbox" class="form-control bubble-select"/>
                                    <div class="bubble-content">
                                        <b> <span>
                                                <?php echo "" . checkMyPostingPrivacyStatus($res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_normal_users_id'], $res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_normal_users_names']); ?></span></b><br>
                                        <p>  
                                            <?php echo "" . $res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_comment']; ?>
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
                            } else {
                                ?>
                                <div class="chat-bubble left" onclick="selectmessage();">
                                    <input type="checkbox" class="form-control bubble-select"/>
                                    <div class="bubble-content">
                                        <b> <span><?php echo "" . checkMyPostingPrivacyStatus($res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_normal_users_id'], $res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_normal_users_names']); ?></span></b><br>
                                        <p>  
                                            <?php echo "" . $res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_comment']; ?>
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
                        echo "<div class='centercenter' style='margin:auto;'><img src='images/no_data_in.png' class='image48'/></div>";
                    }
                }
                ?>
            </div>


        </div>

        <div class="post-area startrowstart">
            <textarea type="textarea" class="form-control" id="main_page_message_post_field" onkeyup="enlarge(this)" placeholder="<?php
            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_28("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_28("system_config_xml/" . $_global_language)->item(0)->textContent;
            } else {
                ?>
                          Share your opinion with our community
                      <?php } ?>"></textarea>
            <div id="sendmessage"> 
                <i class="fa fa-send-o fa-2x" onclick="sendMessage_commonUser(<?php echo $_GET['queryId']; ?>,<?php echo $thIsUserId_2017; ?>,<?php echo "'" . $_GET['type'] . "'"; ?>)"></i>
            </div>      
        </div>

        <?php
        break;
}
?>
<script src="js/nds_main.js" type="text/javascript"></script>