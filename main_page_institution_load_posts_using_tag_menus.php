<?php
session_start();
$thIsUserId_2017 = $_POST['common_user_settings_the_id'];
if ($_POST['select_directive'] == "all" || $_POST['select_directive'] == "latest") {
    ?>
    <?php
//--bring the language--------------------------
    require_once ("includes/conn/config.php");
    require_once ("includes/classes/database.php");
    require_once ("includes/classes/settingsReadFile.php");
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
    <div>
        <input type="hidden" value="New " id="main_page_institution_carousel_new_posts_uruhago_txt" />
        <input type="hidden" id="main_page_institution_carousel_new_posts_uruhago" />                   
        <div onclick="main_page_institution_load_the_new_posts_click()" id="main_page_institution_carousel_new_posts" style="color:black;text-shadow:2px 2px 2px white;z-index:1000;background:linear-gradient(to right, skyblue , white);border-top:1px solid gray;border-left:1px solid gray;cursor:hand;margin-bottom:5px;box-shadow:2px 2px 2px skyblue;position: absolute;margin-left:20%;padding: 6px;border-radius: 5px;"> </div>
        <?php
        //---------All my posts container
        ?><br />
        <?php
        require_once ("includes/conn/config.php");
        ?>
        <?php
        require_once ("includes/classes/database.php");
        require_once "includes/functions.php";
        require_once "includes/timeToSec.php";
        ?>
        <?php
        $json_array = array();
        $posts_USERS = array();
        $posts_Info_Comments = array();
        $posts_Info_likes_COUNT = array();
        $posts_Info_Comments_COUNT = array();
        $posts_Info_likes_un_COUNT = array();
        $_firstId = 0;
        $FirstId = 0;
        $sql_Posts = "SELECT
ogenius_nds_db_community_posts_id,ogenius_nds_db_community_posts_postdata,
ogenius_nds_db_community_posts_poster_id,ogenius_nds_db_community_posts_regdate,
ogenius_nds_db_community_posts_sent,ogenius_nds_db_community_posts_local_id,
ogenius_nds_db_community_posts_poster_names,ogenius_nds_db_community_posts_views,ogenius_nds_db_community_posts_posts_caption

FROM ogenius_nds_db_community_posts P 
WHERE P.ogenius_nds_db_community_posts_id>'{$FirstId}' AND P.ogenius_nds_db_community_posts_active='0'
ORDER BY P.ogenius_nds_db_community_posts_id DESC LIMIT 50";

        $posts_Info = array();
        $id_post = "";
        $id_poster = "";
        if ($query_Posts = $database->query($sql_Posts)) {
            while ($res_Posts = mysqli_fetch_array($query_Posts)) {
                $id_post = $res_Posts['ogenius_nds_db_community_posts_id'];
                $id_poster = $res_Posts['ogenius_nds_db_community_posts_poster_id'];

                //---
                $sql_Posts_Comments = "SELECT 
            ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_id,
            ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_commentator_name,
            ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_comment,
            ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_posts_post_id,
            ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_regdate,
            ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_commentator_id,
            ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_avatar,
            ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_names,
            ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id,
ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_api_log_face_goo_id          
             FROM ogenius_nds_db_community_posts_comments
            LEFT JOIN ogenius_nds_db_normal_users
            ON ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_commentator_id=ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id
WHERE   ogenius_nds_db_community_posts_comments_posts_post_id='{$id_post}' 
AND  ogenius_nds_db_community_posts_comments_active_status='0'  ORDER BY 
    ogenius_nds_db_community_posts_comments_regdate DESC LIMIT 60


";

                if ($query_Posts_Comments = $database->query($sql_Posts_Comments)) {
                    while ($res_ = mysqli_fetch_array($query_Posts_Comments)) {
                        $posts_Info_Comments[] = $res_;
                    }
                }
                //---------COMMENTS COUNT
                $sql_Posts_Comments_COUNT = "SELECT COUNT(*) AS All_Attached_Comments FROM ogenius_nds_db_community_posts_comments WHERE
ogenius_nds_db_community_posts_comments_posts_post_id='{$id_post}' AND  ogenius_nds_db_community_posts_comments_active_status='0'";

                if ($query_Posts_Comments_COUNT = $database->query($sql_Posts_Comments_COUNT)) {
                    while ($res__COUNT = mysqli_fetch_array($query_Posts_Comments_COUNT)) {
                        $posts_Info_Comments_COUNT[] = $res__COUNT;
                    }
                }
                //---likes_COUNT
                $sql_Posts_likes_COUNT = "SELECT COUNT(*) AS LikeCompilations  FROM ogenius_nds_db_community_posts_i_flags   WHERE
ogenius_nds_db_community_posts_i_flags_post_id='{$id_post}'
AND ogenius_nds_db_community_posts_i_flags_like_status='1'";

                if ($query_Posts_likes_COUNT = $database->query($sql_Posts_likes_COUNT)) {
                    while ($res_likes_COUNT = mysqli_fetch_array($query_Posts_likes_COUNT)) {
                        $posts_Info_likes_COUNT[] = $res_likes_COUNT;
                    }
                }
                //---UNLIKE COUNT
                $sql_Posts_un_likes_COUNT = "SELECT COUNT(*) AS UnLikeCompilations FROM ogenius_nds_db_community_posts_i_flags   WHERE
ogenius_nds_db_community_posts_i_flags_post_id='{$id_post}'
AND ogenius_nds_db_community_posts_i_flags_like_status='2'";

                if ($query_Posts_un_likes_COUNT = $database->query($sql_Posts_un_likes_COUNT)) {
                    while ($res_un_likes_COUNT = mysqli_fetch_array($query_Posts_un_likes_COUNT)) {
                        $posts_Info_likes_un_COUNT[] = $res_un_likes_COUNT;
                    }
                }
                //---
                //---USERS TABLE
                $sql_USERS = "SELECT * FROM ogenius_nds_db_normal_users   WHERE
ogenius_nds_db_normal_users_id='{$id_poster}' 
";

                if ($query_USERS = $database->query($sql_USERS)) {
                    while ($res_USERS = mysqli_fetch_array($query_USERS)) {
                        $posts_USERS[] = $res_USERS;
                    }
                }
                $posts_Info[] = $res_Posts;
                //--
            }
        }

        /* print("{\"posts\":" . json_encode($posts_Info) . "}");
          print("--cyuma2017--");
          print("{\"Comments\":" . json_encode($posts_Info_Comments) . "}");
          print("--cyuma2017--");
          print("{\"CmmentsCount\":" . json_encode($posts_Info_Comments_COUNT) . "}");
          print("--cyuma2017--");
          print("{\"LikesCount\":" . json_encode($posts_Info_likes_COUNT) . "}");
          print("--cyuma2017--");
          print("{\"UnlikesCount\":" . json_encode($posts_Info_likes_un_COUNT) . "}");
          print("--cyuma2017--");
          print("{\"UserCreds\":" . json_encode($posts_USERS) . "}");
          print("--cyuma2017--"); */
        //----------posts
        $main_page_common_user_posts = json_encode($posts_Info) . "";
        $main_page_common_user_comments_stream = json_encode($posts_Info_Comments) . "";
        $main_page_common_user_comments_stream_count = json_encode($posts_Info_Comments_COUNT) . "";
        $main_page_common_user_comments_likes_count = json_encode($posts_Info_likes_COUNT) . "";
        $main_page_common_user_comments_unlikes_count = json_encode($posts_Info_likes_un_COUNT) . "";
        $main_page_common_user_comments_users_creds = json_encode($posts_USERS) . "";
        ///------------Now reading the json data logically--
        //---posts  stream of data
        $books_main_page_posts = json_decode($main_page_common_user_posts, true);
        $books_main_page_comments_stream = json_decode($main_page_common_user_comments_stream, true);
        $books_main_page_comments_stream = json_decode($main_page_common_user_comments_stream, true);
        $books_main_page_comments_stream_count = json_decode($main_page_common_user_comments_stream_count, true);
        $books_main_page_comments_likes_count = json_decode($main_page_common_user_comments_likes_count, true);
        $books_main_page_comments_unlikes_count = json_decode($main_page_common_user_comments_unlikes_count, true);
        $books_main_page_users_creds = json_decode($main_page_common_user_comments_users_creds, true);
        $main_page_common_user_posts_count = count($books_main_page_posts);
        //---posts  stream of data
        $check_2017_myposts_all_data = 0;
        //------------last and first ids

        for ($i_mainPage_posts = 0; $i_mainPage_posts < $main_page_common_user_posts_count; $i_mainPage_posts++) {
            //echo "<p>" . $books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_email'] . "</p>";
            if ($check_2017_myposts_all_data == 0) {

                echo "<input type='hidden' value='" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id'] . "' id='main_page_institution_post_first_id'/>";
            } else if ($check_2017_myposts_all_data == 49) {
                echo "<input type='hidden' value='" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id'] . "' id='main_page_institution_post_last_id'/>";
                ?>
                <input type="hidden" value="New " id="main_page_institution_carousel_old_posts_uruhago_txt" />
                <input type="hidden" id="main_page_institution_carousel_old_posts_uruhago" />
                <div onclick="main_page_institution_load_the_old_posts_click()" id="main_page_institution_carousel_old_posts" style="margin-top:320px;color:black;text-shadow:2px 2px 2px white;z-index:1000;background:linear-gradient(to right, skyblue , white);border-top:1px solid gray;border-left:1px solid gray;cursor:hand;margin-bottom:5px;box-shadow:2px 2px 2px skyblue;position: absolute;margin-left:2%;padding: 6px;border-radius: 5px;">
                    Load Old Posts
                </div>


                <?php
            }

            $check_2017_myposts_all_data++;
            ?> 
            <div class="panel panel-default">

                <div class="panel-heading centerrowspace">
                    <div class="startrow">
                        <?php
                        //-------------The profile page dilemma--
                        if ($books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_api_log_face_goo_id'] < 1) {
                            ?>
                            <img class="image48" src="uploaded_images/<?php echo "" . ($books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_avatar'] != "") ? $books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_avatar'] : "nds_avatar.png"; ?>"/>
                            <?php
                        } else {
                            ?><img src="<?php
                            if (!empty($books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_avatar'])) {
                                echo "" . (strlen($books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_avatar']) > 26) ? $books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_avatar'] : "uploaded_images/" . $books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_avatar'];
                            } else {
                                echo "" . "uploaded_images/" . "nds_avatar.png";
                            }
                            ?>" class="image48" /> <?php
                             }
                             ?>
                        <b><span><?php echo "" . checkMyPostingPrivacyStatus($books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_poster_id'], $books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_names']); ?></span></br><span><?php
                                if ($books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_user_vip_tag'] == 2) {
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_30("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_30("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>  ogenius_nds_db_normal_users_user_vip_tag
                                    <?php } ?>: <?php
                                    echo "" . ($books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_user_vip_tag'] == 2) ? $books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_position'] : "";
                                }
                                ?>
                            </span></b>
                    </div>
                    <span> 
                        <small>
                            <i><?php echo "" . time_to_sec($books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_regdate']); ?> ago</i></small></span>


                </div>
                <div class="panel-body">
                    <div class="post-item startcolstart"   style="<?php echo "" . ($books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_posts_caption'] == "") ? "" : "overflow-x: scroll"; ?>" >
                        <?php echo "" . formatImagesInText_withCaption(activateUrlStringsw($books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_postdata']), $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_posts_caption']); ?>

                    </div>
                    <hr>
                    <div class="post-stats">
                        <ul class="post-item-stats startrow">
                            <li>
                                <small><span id="main_page_views<?php echo "" . $i_mainPage_posts; ?>"><?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_views']; ?></span> <?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_31("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_31("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        views

                                    <?php } ?></small>
                            </li>
                            <li>
                                <small><span id="main_page_likes<?php echo "" . $i_mainPage_posts; ?>"><?php echo "" . $books_main_page_comments_likes_count[$i_mainPage_posts]['LikeCompilations']; ?></span> <?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_32("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_32("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        likes
                                    <?php } ?></small>
                            </li>
                            <li>
                                <small><span id="main_page_unlikes<?php echo "" . $i_mainPage_posts; ?>"><?php echo "" . $books_main_page_comments_unlikes_count[$i_mainPage_posts]['UnLikeCompilations']; ?></span> <?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_33("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_33("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        unlikes
                                    <?php } ?></small></li>
                            <li ><small><span id="main_page_comments<?php echo "" . $i_mainPage_posts; ?>"><?php echo "" . $books_main_page_comments_stream_count[$i_mainPage_posts]['All_Attached_Comments']; ?></span> <?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_34("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_34("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        comments
                                    <?php } ?></small></li>
                        </ul> 
                        <ul class="post-item-button startrow">
                            <!-- the report div -->                                                
                            <div id="<?php echo "mainPageFlagOrReport" . $i_mainPage_posts; ?>" style="visibility:hidden;border:3px solid #CDCDCD;position: absolute;background: white;border-radius: 8px;width: 350px;"> 
                                <div>
                                    <input type="button" name="<?php echo "mainPageFlagOrReport" . $i_mainPage_posts; ?>" onclick="main_page_hide_flag_post_view(this)" class="btn" style="margin-left:75%;margin-top:8px;padding: 5px;color: blue;margin-right:15px;color: white" value="X" />
                                </div>

                                <form>
                                    <ul class="startcolstart">
                                        <li class="startrow">
                                            <input title="<?php echo "mainPageFlagOrReport" . $i_mainPage_posts; ?>" class="image24"  type="radio" onchange="main_page_like_flag_this_post_2017(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>, 'insulting')" id="<?php echo "theMeRadioFlag_a" . $i_mainPage_posts; ?>" name="meRadioInsulting<?php echo "" . $i_mainPage_posts; ?>" />
                                            <img src="images/insulting_2017.jpg" class="image24" />
                                            <span>Insulting</span>
                                        </li> 
                                        <li class="startrow">
                                            <input title="<?php echo "mainPageFlagOrReport" . $i_mainPage_posts; ?>" class="image24"type="radio" onchange="main_page_like_flag_this_post_2017(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>, 'inappropriate')" id="<?php echo "theMeRadioFlag_b" . $i_mainPage_posts; ?>" name="meRadioInsulting<?php echo "" . $i_mainPage_posts; ?>" />
                                            <img src="images/inappropriate_.jpg" class="image24" />
                                            <span>inappropriate</span>
                                        </li>  
                                        <li class="startrow">
                                            <input class="image24" type="radio" onchange="main_page_like_flag_this_post_2017(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>, 'other')" id="<?php echo "theMeRadioFlag_c" . $i_mainPage_posts; ?>" name="meRadioInsulting<?php echo "" . $i_mainPage_posts; ?>" />
                                            <img src="images/other_.png" class="image24" />
                                            <span>Other</span>
                                        </li> 
                                        <li class="startrowspace">
                                            <textarea title="<?php echo "theMeRadioFlag_c" . $i_mainPage_posts; ?>" onclick='main_page_flag_this_post_using_other_focus(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>,<?php echo "theMeRadioFlag_c" . $i_mainPage_posts; ?>)' name="" id="<?php echo "main_page_flag_motion" . $i_mainPage_posts; ?>" onkeyup="textAreaAdjust(this)" class="form-control"></textarea>

                                            <input  placeholder="<?php echo "mainPageFlagOrReport" . $i_mainPage_posts; ?>" title="<?php echo "main_page_flag_motion" . $i_mainPage_posts; ?>" name="<?php echo "main_page_flag_motion" . $i_mainPage_posts; ?>" onclick='main_page_flag_this_post_using_other(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>,<?php echo "theMeRadioFlag_c" . $i_mainPage_posts; ?>,<?php echo "" . $i_mainPage_posts; ?>)' type="button" class="btn btn-primary" style="padding: 5px;color: blue" value="---&#10004;---" />
                                        </li>
                                    </ul>
                                </form>
                            </div>
                            <li><img class="image24" style="cursor:pointer" name='<?php echo "mainPageFlagOrReport" . $i_mainPage_posts; ?>' id="a<?php echo "$i_mainPage_posts" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>" onclick="main_page_flag_this_post(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>)" src="images/flag_this_00.png"/></li>
                            <li><img class="image24" style="cursor:pointer"id="b<?php echo "$i_mainPage_posts" . "-" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>" onclick="main_page_like_this_post(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>)" src="images/ic_thumb_up_black_48dp1.png"/></li>
                            <li><img class="image24" style="cursor:pointer" id="c<?php echo "$i_mainPage_posts" . "-" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>"onclick="main_page_unlike_this_post(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>)" src="images/ic_thumb_down_black_48dp1.png"/></li>
                            <li><img class="image24" style="cursor:pointer" onclick="main_page_decollapse_this_comment(this)" name="main_page_comments_collapsible<?php echo "" . $i_mainPage_posts; ?>" id="d<?php echo "$i_mainPage_posts" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>" onclick="main_page_toggle_comment_of_this_post(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>)" src="images/ic_chat_black_48dp.png" onclick="pullcommentmodal()"src="images/ic_chat_black_48dp.png"/></li>
                            <?php
                            if ($books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_id'] == $_SESSION["ogenius_nds_user_id_x2309999_990"]) {
                                ?>
                                <li><img id="a<?php echo "$i_mainPage_posts" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>" onclick="main_page_delete_this_post(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>)" src="images/send_to_dust_bin.png"class="image24" /></li>

                                <?php
                            } else {
                                
                            }
                            ?>  
                        </ul>
                    </div>
                </div>

                <div class="scrolls" style="margin-left: 5%;margin-bottom: 10px;max-height: 240px; min-width: 95%;overflow-y: auto">
                    <div> <!--New...--></div>
                    <div class="post-item-comments startcolstart main_page_collapsibles_2017" id="main_page_comments_collapsible<?php echo "" . $i_mainPage_posts; ?>">
                        <?php
                        ///--------------THE POST ID
                        $main_page_the_postId_2017 = $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id'];
                        require_once ("includes/conn/config.php");
                        require_once ("includes/classes/database.php");
                        //--------select the comments individually according to the id of the posts
                        $sql_main_page_posts_comments = "SELECT 
ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_comment,
ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_regdate,
ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_id,
ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_posts_post_id,
ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_commentator_id,
ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_avatar,
ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_names,
ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id,
ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_api_log_face_goo_id

 FROM ogenius_nds_db_community_posts_comments INNER JOIN ogenius_nds_db_normal_users
 ON ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_commentator_id=ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id
 WHERE ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_posts_post_id='{$main_page_the_postId_2017}'
  AND  ogenius_nds_db_community_posts_comments_active_status='0'
  ORDER BY ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_id DESC LIMIT 20";
                        if ($query_main_page_posts_comments = $database->query($sql_main_page_posts_comments)) {
                            //---------------------
                            $main_page_cmmnens_c = 0;
                            while ($res_main_page_posts_comments = mysqli_fetch_array($query_main_page_posts_comments)) {
                                $theCommentIf_2017 = $res_main_page_posts_comments['ogenius_nds_db_community_posts_comments_id'];
                                if ($main_page_cmmnens_c == 0) {
                                    ?>
                                    <img class="image24 main_page_institution_comments_collapsible<?php echo "" . $i_mainPage_posts; ?>" onclick="main_page_institution_posts_comments_refresh_up(<?php echo "" . $main_page_the_postId_2017; ?>, this)" src="images/up_new_load.png" style="cursor:pointer;margin-left:48%;" />
                                    <?php
                                    echo "<input type='hidden' value='$theCommentIf_2017' id='mainpage_institution_first_comment_id' />";
                                }
                                ?>
                                <div class="startcolstart" style="min-width:95%">
                                    <div class="startrowspace" style="min-width:100%">
                                        <div class="startrowspace">
                                            <?php
                                            //-------------The profile page dilemma--
                                            if ($res_main_page_posts_comments['ogenius_nds_db_normal_users_api_log_face_goo_id'] < 1) {
                                                ?>
                                                <img src="uploaded_images/<?php echo "" . ($res_main_page_posts_comments['ogenius_nds_db_normal_users_avatar'] != "") ? $res_main_page_posts_comments['ogenius_nds_db_normal_users_avatar'] : "nds_avatar.png"; ?>" class="image48" /></td>
                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php
                                                if (!empty($res_main_page_posts_comments['ogenius_nds_db_normal_users_avatar'])) {
                                                    echo "" . (strlen($res_main_page_posts_comments['ogenius_nds_db_normal_users_avatar']) > 26) ? $res_main_page_posts_comments['ogenius_nds_db_normal_users_avatar'] : "uploaded_images/" . $res_main_page_posts_comments['ogenius_nds_db_normal_users_avatar'];
                                                } else {
                                                    echo "" . "uploaded_images/" . "nds_avatar.png";
                                                }
                                                ?>" class="image48" />

                                                <?php
                                            }
                                            ?>
                                            <div><?php echo "" . checkMyPostingPrivacyStatus($res_main_page_posts_comments['ogenius_nds_db_community_posts_comments_commentator_id'], $res_main_page_posts_comments['ogenius_nds_db_normal_users_names']); ?></div>
                                        </div>
                                        <div>
                                            <div><h6><?php echo "" . time_to_sec($res_main_page_posts_comments['ogenius_nds_db_community_posts_comments_regdate']); ?></h6></div>
                                            <?php
                                            if ($res_main_page_posts_comments['ogenius_nds_db_community_posts_comments_commentator_id'] == $_SESSION["ogenius_nds_user_id_x2309999_990"]) {
                                                ?>
                                                <div><img onclick="main_page_delete_this_post_comment(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>,<?php echo "" . $res_main_page_posts_comments['ogenius_nds_db_community_posts_comments_id']; ?>,<?php echo "" . $i_mainPage_posts; ?>,<?php echo "" . $i_mainPage_posts; ?>)" id="a<?php echo "$i_mainPage_posts" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>" src="images/send_to_dust_bin.png" class="image24" /></div>

                                                <?php
                                            } else {
                                                
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <p class="post-item-text"><?php echo "" . activateUrlStringsw($res_main_page_posts_comments['ogenius_nds_db_community_posts_comments_comment']); ?>                            
                                    </p>



                                </div>

                                <?php
                                $main_page_cmmnens_c++;
                            }
                            if ($main_page_cmmnens_c != 0) {
                                echo "<input type='hidden' value='$theCommentIf_2017' id='mainpage_last_comment_id' />";
                                ?>
                                <br/>
                                <img class="image24 main_page_comments_collapsible<?php echo "" . $i_mainPage_posts; ?>" onclick="main_page_posts_comments_refresh_down(<?php echo "" . $main_page_the_postId_2017; ?>, this)" src="images/down_new_load.png" style="cursor:pointer;margin-left:48%;" />

                                <br/>
                                <?php
                            }
                        }
                        ?>


                    </div>
                    <div> <!--More...--></div>
                </div>

                <div class="panel-footer centerrowspacearound post-area" id="post-item-comment">

                    <textarea type="textarea" class="form-control" id="<?php echo "commentOnMe" . $i_mainPage_posts; ?>"  onkeyup="enlarge(this)" placeholder='<?php
                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_35("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_35("system_config_xml/" . $_global_language)->item(0)->textContent;
                    } else {
                        ?>
                                  Comment
                              <?php } ?>'></textarea>

                    <div id="sendmessage"> 
                        <img src="images/ic_send_black_24dp.png" name="main_page_comments_collapsible<?php echo "" . $i_mainPage_posts; ?>" title="<?php echo "commentOnMe" . $i_mainPage_posts; ?>"  onclick="main_page_send_comment(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>,<?php echo "commentOnMe" . $i_mainPage_posts; ?>)"  type="button" value="Send" > 
                        <input type="hidden" title="main_page_comments_collapsible<?php echo "" . $i_mainPage_posts; ?>" value='' id="manu2017_<?php echo "" . $i_mainPage_posts; ?>" />

                    </div>
                </div>
            </div>
            <?php
        }

        if ($check_2017_myposts_all_data == 0) {

            echo "<h4><img src='images/no_data_in.png' style='max-width:50px;max-height:50px;margin-left:30%;' /></h4>";
        }
        ?>


    </div>  
    <?php ?>
    </div>  
    <?php
} else if ($_POST['select_directive'] == "where_i_am_tagged") {
//--bring the language--------------------------
    //--bring the language--------------------------
    require_once ("includes/conn/config.php");
    require_once ("includes/classes/database.php");
    require_once ("includes/classes/settingsReadFile.php");
    //---------------
    //-----------find all special keywords for this user---
    $main_page_array_of_keywords_2017 = array();
    //--------------------
    $main_page_keywords_count = 0;
    $sql_main_page_array_of_keywords_2017 = "SELECT * FROM     ogenius_nds_db_tags_identifiers_keyword WHERE      ogenius_nds_db_tags_identifiers_keyword_id_user='{$thIsUserId_2017}' AND    ogenius_nds_db_tags_identifiers_keyword_status='1' ORDER BY ogenius_nds_db_tags_identifiers_keyword_id_user DESC";
    if ($query_main_page_array_of_keywords_2017 = $database->query($sql_main_page_array_of_keywords_2017)) {
        //---------------------
        while ($res_main_page_array_of_keywords_2017 = mysqli_fetch_array($query_main_page_array_of_keywords_2017)) {
            $tags_keywords_tag_main_page = $res_main_page_array_of_keywords_2017['ogenius_nds_db_tags_identifiers_keyword_keyword'];
            $tags_keywords_tag_id_main_page = $res_main_page_array_of_keywords_2017['ogenius_nds_db_tags_identifiers_keyword_id'];
            //------------------------------------
            $main_page_array_of_keywords_2017[$main_page_keywords_count] = $tags_keywords_tag_main_page;

            $main_page_keywords_count++;
        }
    }
    //------------------------------------find all the keywords identifiers-
    $main_page_array_of_keywords_identifiers_2017 = array();
    $main_page_keywords_identifier_count = 0;
    //---------------
    $sql_main_page_tag_identifier_2017 = "SELECT * FROM    ogenius_nds_db_tags_identifiers WHERE    ogenius_nds_db_tags_identifiers_id_user='{$thIsUserId_2017}' AND ogenius_nds_db_tags_identifiers_status='1' ORDER BY ogenius_nds_db_tags_identifiers_id_user DESC";
    if ($query_main_page_tag_identifier_2017 = $database->query($sql_main_page_tag_identifier_2017)) {
        //---------------------
        while ($res_main_page_tag_identifier_2017 = mysqli_fetch_array($query_main_page_tag_identifier_2017)) {
            $tags_identifier_tag_main_page_2017 = $res_main_page_tag_identifier_2017['ogenius_nds_db_tags_identifiers_tag'];
            $tags_identifier_tag_id_main_page_2017 = $res_main_page_tag_identifier_2017['ogenius_nds_db_tags_identifiers_id'];
            //----------------------------------
            $main_page_array_of_keywords_identifiers_2017[$main_page_keywords_identifier_count] = $tags_identifier_tag_main_page_2017;

            $main_page_keywords_identifier_count++;
        }
    }
    //---------Match each keyword with all the identifiers--
    $main_page_array_of_keywords_identifiers_2017_combo_for_use = array();
    $main_page_array_of_keywords_identifiers_2017_combo_for_use_startingWith = array();
    $main_page_keywords_identifier_combo_count = 0;
    for ($i = 0; $i < sizeof($main_page_array_of_keywords_2017); $i++) {
        for ($n = 0; $n < sizeof($main_page_array_of_keywords_identifiers_2017); $n++) {
            //---concatenating tags and keywords-------------
            $main_page_array_of_keywords_identifiers_2017_combo_for_use[$main_page_keywords_identifier_combo_count] = $main_page_array_of_keywords_identifiers_2017[$n] . $main_page_array_of_keywords_2017[$i];
            $main_page_array_of_keywords_identifiers_2017_combo_for_use_startingWith[$main_page_keywords_identifier_combo_count] = $main_page_array_of_keywords_identifiers_2017[$n];
            $main_page_keywords_identifier_combo_count++;
        }
    }
    //-------use the arrays for display------------------
    for ($i = 0; $i < sizeof($main_page_array_of_keywords_identifiers_2017_combo_for_use); $i++) {
        echo "</br></br><span style='margin-left:30%;padding:8px;z-index:5000;background:#cdcdcd;color:#333333;text-shadow:2px 2px 2px #ffffff;box-shadow:2px 2px 2px #000000;border-top:1px solid gray;border-left:1px solid gray;border-radius:4px;'>" . $main_page_array_of_keywords_identifiers_2017_combo_for_use[$i] . "</span>";
        //----------find the posts------------------
        ?>
        <?php
//--bring the language--------------------------
        require_once ("includes/conn/config.php");
        require_once ("includes/classes/database.php");
        require_once ("includes/classes/settingsReadFile.php");
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

            $_global_language = "nothing";
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
            $_global_language = "nothing";
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
        <div>
            <input type="hidden" value="New " id="main_page_institution_carousel_new_posts_uruhago_txt" />
            <input type="hidden" id="main_page_institution_carousel_new_posts_uruhago" />                   
            <div onclick="main_page_institution_load_the_new_posts_click()" id="main_page_institution_carousel_new_posts" style="color:black;text-shadow:2px 2px 2px white;z-index:1000;background:linear-gradient(to right, skyblue , white);border-top:1px solid gray;border-left:1px solid gray;cursor:hand;margin-bottom:5px;box-shadow:2px 2px 2px skyblue;position: absolute;margin-left:20%;padding: 6px;border-radius: 5px;"> </div>
            <?php
            //---------All my posts container
            ?><br/>
            <?php
            require_once ("includes/conn/config.php");
            ?>
            <?php
            require_once ("includes/classes/database.php");
            require_once "includes/functions.php";
            require_once "includes/timeToSec.php";
            ?>
            <?php
            $json_array = array();
            $posts_USERS = array();
            $posts_Info_Comments = array();
            $posts_Info_likes_COUNT = array();
            $posts_Info_Comments_COUNT = array();
            $posts_Info_likes_un_COUNT = array();
            $_firstId = 0;
            $FirstId = 0;
            $temp_var_post_like = $main_page_array_of_keywords_identifiers_2017_combo_for_use[$i];
            $sql_Posts = "SELECT
ogenius_nds_db_community_posts_id,ogenius_nds_db_community_posts_postdata,
ogenius_nds_db_community_posts_poster_id,ogenius_nds_db_community_posts_regdate,
ogenius_nds_db_community_posts_sent,ogenius_nds_db_community_posts_local_id,
ogenius_nds_db_community_posts_poster_names,ogenius_nds_db_community_posts_views,ogenius_nds_db_community_posts_posts_caption

FROM ogenius_nds_db_community_posts P 
WHERE P.ogenius_nds_db_community_posts_id>'{$FirstId}' AND P.ogenius_nds_db_community_posts_active='0'
AND LOWER(ogenius_nds_db_community_posts_postdata) LIKE  '%" . strtolower($temp_var_post_like) . "%'
ORDER BY P.ogenius_nds_db_community_posts_id DESC LIMIT 100";

            $posts_Info = array();
            $id_post = "";
            $id_poster = "";
            if ($query_Posts = $database->query($sql_Posts)) {
                while ($res_Posts = mysqli_fetch_array($query_Posts)) {
                    $id_post = $res_Posts['ogenius_nds_db_community_posts_id'];
                    $id_poster = $res_Posts['ogenius_nds_db_community_posts_poster_id'];

                    //---
                    $sql_Posts_Comments = "SELECT 
            ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_id,
            ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_commentator_name,
            ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_comment,
            ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_posts_post_id,
            ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_regdate,
            ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_commentator_id,
            ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_avatar,
            ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_names,
            ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id,
ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_api_log_face_goo_id          
             FROM ogenius_nds_db_community_posts_comments
            LEFT JOIN ogenius_nds_db_normal_users
            ON ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_commentator_id=ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id
WHERE   ogenius_nds_db_community_posts_comments_posts_post_id='{$id_post}' 
AND  ogenius_nds_db_community_posts_comments_active_status='0'  ORDER BY 
    ogenius_nds_db_community_posts_comments_regdate DESC LIMIT 60


";

                    if ($query_Posts_Comments = $database->query($sql_Posts_Comments)) {
                        while ($res_ = mysqli_fetch_array($query_Posts_Comments)) {
                            $posts_Info_Comments[] = $res_;
                        }
                    }
                    //---------COMMENTS COUNT
                    $sql_Posts_Comments_COUNT = "SELECT COUNT(*) AS All_Attached_Comments FROM ogenius_nds_db_community_posts_comments WHERE
ogenius_nds_db_community_posts_comments_posts_post_id='{$id_post}' AND  ogenius_nds_db_community_posts_comments_active_status='0'";

                    if ($query_Posts_Comments_COUNT = $database->query($sql_Posts_Comments_COUNT)) {
                        while ($res__COUNT = mysqli_fetch_array($query_Posts_Comments_COUNT)) {
                            $posts_Info_Comments_COUNT[] = $res__COUNT;
                        }
                    }
                    //---likes_COUNT
                    $sql_Posts_likes_COUNT = "SELECT COUNT(*) AS LikeCompilations  FROM ogenius_nds_db_community_posts_i_flags   WHERE
ogenius_nds_db_community_posts_i_flags_post_id='{$id_post}'
AND ogenius_nds_db_community_posts_i_flags_like_status='1'";

                    if ($query_Posts_likes_COUNT = $database->query($sql_Posts_likes_COUNT)) {
                        while ($res_likes_COUNT = mysqli_fetch_array($query_Posts_likes_COUNT)) {
                            $posts_Info_likes_COUNT[] = $res_likes_COUNT;
                        }
                    }
                    //---UNLIKE COUNT
                    $sql_Posts_un_likes_COUNT = "SELECT COUNT(*) AS UnLikeCompilations FROM ogenius_nds_db_community_posts_i_flags   WHERE
ogenius_nds_db_community_posts_i_flags_post_id='{$id_post}'
AND ogenius_nds_db_community_posts_i_flags_like_status='2'";

                    if ($query_Posts_un_likes_COUNT = $database->query($sql_Posts_un_likes_COUNT)) {
                        while ($res_un_likes_COUNT = mysqli_fetch_array($query_Posts_un_likes_COUNT)) {
                            $posts_Info_likes_un_COUNT[] = $res_un_likes_COUNT;
                        }
                    }
                    //---
                    //---USERS TABLE
                    $sql_USERS = "SELECT * FROM ogenius_nds_db_normal_users   WHERE
ogenius_nds_db_normal_users_id='{$id_poster}' 
";

                    if ($query_USERS = $database->query($sql_USERS)) {
                        while ($res_USERS = mysqli_fetch_array($query_USERS)) {
                            $posts_USERS[] = $res_USERS;
                        }
                    }
                    $posts_Info[] = $res_Posts;
                    //--
                }
            }

            /* print("{\"posts\":" . json_encode($posts_Info) . "}");
              print("--cyuma2017--");
              print("{\"Comments\":" . json_encode($posts_Info_Comments) . "}");
              print("--cyuma2017--");
              print("{\"CmmentsCount\":" . json_encode($posts_Info_Comments_COUNT) . "}");
              print("--cyuma2017--");
              print("{\"LikesCount\":" . json_encode($posts_Info_likes_COUNT) . "}");
              print("--cyuma2017--");
              print("{\"UnlikesCount\":" . json_encode($posts_Info_likes_un_COUNT) . "}");
              print("--cyuma2017--");
              print("{\"UserCreds\":" . json_encode($posts_USERS) . "}");
              print("--cyuma2017--"); */
            //----------posts
            $main_page_common_user_posts = json_encode($posts_Info) . "";
            $main_page_common_user_comments_stream = json_encode($posts_Info_Comments) . "";
            $main_page_common_user_comments_stream_count = json_encode($posts_Info_Comments_COUNT) . "";
            $main_page_common_user_comments_likes_count = json_encode($posts_Info_likes_COUNT) . "";
            $main_page_common_user_comments_unlikes_count = json_encode($posts_Info_likes_un_COUNT) . "";
            $main_page_common_user_comments_users_creds = json_encode($posts_USERS) . "";
            ///------------Now reading the json data logically--
            //---posts  stream of data
            $books_main_page_posts = json_decode($main_page_common_user_posts, true);
            $books_main_page_comments_stream = json_decode($main_page_common_user_comments_stream, true);
            $books_main_page_comments_stream = json_decode($main_page_common_user_comments_stream, true);
            $books_main_page_comments_stream_count = json_decode($main_page_common_user_comments_stream_count, true);
            $books_main_page_comments_likes_count = json_decode($main_page_common_user_comments_likes_count, true);
            $books_main_page_comments_unlikes_count = json_decode($main_page_common_user_comments_unlikes_count, true);
            $books_main_page_users_creds = json_decode($main_page_common_user_comments_users_creds, true);
            $main_page_common_user_posts_count = count($books_main_page_posts);
            //---posts  stream of data
            $check_2017_myposts_all_data = 0;
            //------------last and first ids

            for ($i_mainPage_posts = 0; $i_mainPage_posts < $main_page_common_user_posts_count; $i_mainPage_posts++) {
                //echo "<p>" . $books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_email'] . "</p>";
                if ($check_2017_myposts_all_data == 0) {

                    echo "<input type='hidden' value='" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id'] . "' id='main_page_institution_post_first_id'/>";
                } else if ($check_2017_myposts_all_data == 49) {
                    echo "<input type='hidden' value='" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id'] . "' id='main_page_institution_post_last_id'/>";
                    ?>
                    <input type="hidden" value="New " id="main_page_institution_carousel_old_posts_uruhago_txt" />
                    <input type="hidden" id="main_page_institution_carousel_old_posts_uruhago" />
                    <div onclick="main_page_institution_load_the_old_posts_click()" id="main_page_institution_carousel_old_posts" style="margin-top:320px;color:black;text-shadow:2px 2px 2px white;z-index:1000;background:linear-gradient(to right, skyblue , white);border-top:1px solid gray;border-left:1px solid gray;cursor:hand;margin-bottom:5px;box-shadow:2px 2px 2px skyblue;position: absolute;margin-left:2%;padding: 6px;border-radius: 5px;">
                        Load Old Posts
                    </div>


                    <?php
                }

                $check_2017_myposts_all_data++;
                ?> 



                <div class="panel panel-default">

                    <div class="panel-heading centerrowspace">
                        <div class="startrow">
                            <?php
                            //-------------The profile page dilemma--
                            if ($books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_api_log_face_goo_id'] < 1) {
                                ?>
                                <img class="image48" src="uploaded_images/<?php echo "" . ($books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_avatar'] != "") ? $books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_avatar'] : "nds_avatar.png"; ?>"/>
                                <?php
                            } else {
                                ?><img src="<?php
                                if (!empty($books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_avatar'])) {
                                    echo "" . (strlen($books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_avatar']) > 26) ? $books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_avatar'] : "uploaded_images/" . $books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_avatar'];
                                } else {
                                    echo "" . "uploaded_images/" . "nds_avatar.png";
                                }
                                ?>" class="image48" /> <?php
                                 }
                                 ?>
                            <b><span><?php echo "" . checkMyPostingPrivacyStatus($books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_poster_id'], $books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_names']); ?></span></br><span><?php
                                    if ($books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_user_vip_tag'] == 2) {
                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_30("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_30("system_config_xml/" . $_global_language)->item(0)->textContent;
                                        } else {
                                            ?>  ogenius_nds_db_normal_users_user_vip_tag
                                        <?php } ?>: <?php
                                        echo "" . ($books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_user_vip_tag'] == 2) ? $books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_position'] : "";
                                    }
                                    ?>
                                </span></b>
                        </div>
                        <span> <small><i><?php echo "" . time_to_sec($books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_regdate']); ?> ago</i></small></span>


                    </div>
                    <div class="panel-body">
                        <div class="post-item startcolstart"<?php echo "" . ($books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_posts_caption'] == "") ? "" : "overflow-x: scroll" ?> >
                            <?php echo "" . formatImagesInText_withCaption(activateUrlStringsw($books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_postdata']), $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_posts_caption']); ?>

                        </div>
                        <hr>
                        <div class="post-stats">
                            <ul class="post-item-stats startrow">
                                <li>
                                    <small><span id="main_page_views<?php echo "" . $i_mainPage_posts; ?>"><?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_views']; ?></span> <?php
                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_31("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_31("system_config_xml/" . $_global_language)->item(0)->textContent;
                                        } else {
                                            ?>
                                            views

                                        <?php } ?></small>
                                </li>
                                <li>
                                    <small><span id="main_page_likes<?php echo "" . $i_mainPage_posts; ?>"><?php echo "" . $books_main_page_comments_likes_count[$i_mainPage_posts]['LikeCompilations']; ?></span> <?php
                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_32("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_32("system_config_xml/" . $_global_language)->item(0)->textContent;
                                        } else {
                                            ?>
                                            likes
                                        <?php } ?></small>
                                </li>
                                <li>
                                    <small><span id="main_page_unlikes<?php echo "" . $i_mainPage_posts; ?>"><?php echo "" . $books_main_page_comments_unlikes_count[$i_mainPage_posts]['UnLikeCompilations']; ?></span> <?php
                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_33("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_33("system_config_xml/" . $_global_language)->item(0)->textContent;
                                        } else {
                                            ?>
                                            unlikes
                                        <?php } ?></small></li>
                                <li ><small><span id="main_page_comments<?php echo "" . $i_mainPage_posts; ?>"><?php echo "" . $books_main_page_comments_stream_count[$i_mainPage_posts]['All_Attached_Comments']; ?></span> <?php
                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_34("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_34("system_config_xml/" . $_global_language)->item(0)->textContent;
                                        } else {
                                            ?>
                                            comments
                                        <?php } ?></small></li>
                            </ul> 
                            <ul class="post-item-button startrow">
                                <!-- the report div -->                                                
                                <div id="<?php echo "mainPageFlagOrReport" . $i_mainPage_posts; ?>" style="visibility:hidden;border:3px solid #CDCDCD;position: absolute;background: white;border-radius: 8px;width: 350px;"> 
                                    <div>
                                        <input type="button" name="<?php echo "mainPageFlagOrReport" . $i_mainPage_posts; ?>" onclick="main_page_hide_flag_post_view(this)" class="btn" style="margin-left:75%;margin-top:8px;padding: 5px;color: blue;margin-right:15px;color: white" value="X" />
                                    </div>

                                    <form>
                                        <ul class="startcolstart">
                                            <li class="startrow">
                                                <input title="<?php echo "mainPageFlagOrReport" . $i_mainPage_posts; ?>" class="image24"  type="radio" onchange="main_page_like_flag_this_post_2017(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>, 'insulting')" id="<?php echo "theMeRadioFlag_a" . $i_mainPage_posts; ?>" name="meRadioInsulting<?php echo "" . $i_mainPage_posts; ?>" />
                                                <img src="images/insulting_2017.jpg" class="image24" />
                                                <span>Insulting</span>
                                            </li> 
                                            <li class="startrow">
                                                <input title="<?php echo "mainPageFlagOrReport" . $i_mainPage_posts; ?>" class="image24"type="radio" onchange="main_page_like_flag_this_post_2017(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>, 'inappropriate')" id="<?php echo "theMeRadioFlag_b" . $i_mainPage_posts; ?>" name="meRadioInsulting<?php echo "" . $i_mainPage_posts; ?>" />
                                                <img src="images/inappropriate_.jpg" class="image24" />
                                                <span>inappropriate</span>
                                            </li>  
                                            <li class="startrow">
                                                <input class="image24" type="radio" onchange="main_page_like_flag_this_post_2017(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>, 'other')" id="<?php echo "theMeRadioFlag_c" . $i_mainPage_posts; ?>" name="meRadioInsulting<?php echo "" . $i_mainPage_posts; ?>" />
                                                <img src="images/other_.png" class="image24" />
                                                <span>Other</span>
                                            </li> 
                                            <li class="startrowspace">
                                                <textarea title="<?php echo "theMeRadioFlag_c" . $i_mainPage_posts; ?>" onclick='main_page_flag_this_post_using_other_focus(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>,<?php echo "theMeRadioFlag_c" . $i_mainPage_posts; ?>)' name="" id="<?php echo "main_page_flag_motion" . $i_mainPage_posts; ?>" onkeyup="textAreaAdjust(this)" class="form-control"></textarea>

                                                <input  placeholder="<?php echo "mainPageFlagOrReport" . $i_mainPage_posts; ?>" title="<?php echo "main_page_flag_motion" . $i_mainPage_posts; ?>" name="<?php echo "main_page_flag_motion" . $i_mainPage_posts; ?>" onclick='main_page_flag_this_post_using_other(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>,<?php echo "theMeRadioFlag_c" . $i_mainPage_posts; ?>,<?php echo "" . $i_mainPage_posts; ?>)' type="button" class="btn btn-primary" style="padding: 5px;color: blue" value="---&#10004;---" />
                                            </li>
                                        </ul>
                                    </form>
                                </div>
                                <li><img class="image24" style="cursor:pointer" name='<?php echo "mainPageFlagOrReport" . $i_mainPage_posts; ?>' id="a<?php echo "$i_mainPage_posts" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>" onclick="main_page_flag_this_post(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>)" src="images/flag_this_00.png"/></li>
                                <li><img class="image24" style="cursor:pointer"id="b<?php echo "$i_mainPage_posts" . "-" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>" onclick="main_page_like_this_post(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>)" src="images/ic_thumb_up_black_48dp1.png"/></li>
                                <li><img class="image24" style="cursor:pointer" id="c<?php echo "$i_mainPage_posts" . "-" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>"onclick="main_page_unlike_this_post(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>)" src="images/ic_thumb_down_black_48dp1.png"/></li>
                                <li><img class="image24" style="cursor:pointer" onclick="main_page_decollapse_this_comment(this)" name="main_page_comments_collapsible<?php echo "" . $i_mainPage_posts; ?>" id="d<?php echo "$i_mainPage_posts" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>" onclick="main_page_toggle_comment_of_this_post(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>)" src="images/ic_chat_black_48dp.png" onclick="pullcommentmodal()"src="images/ic_chat_black_48dp.png"/></li>
                                <?php
                                if ($books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_id'] == $_SESSION["ogenius_nds_user_id_x2309999_990"]) {
                                    ?>
                                    <li><img id="a<?php echo "$i_mainPage_posts" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>" onclick="main_page_delete_this_post(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>)" src="images/send_to_dust_bin.png" class="image24" /></li>

                                    <?php
                                } else {
                                    
                                }
                                ?>  
                            </ul>
                        </div>
                    </div>
                    <div class="scrolls" style="margin-left: 5%;margin-bottom: 10px;max-height: 240px; min-width: 95%;overflow-y: auto">
                        <div> <!--New...--></div>
                        <div class="post-item-comments startcolstart main_page_collapsibles_2017" id="main_page_comments_collapsible<?php echo "" . $i_mainPage_posts; ?>">
                            <?php
                            ///--------------THE POST ID
                            $main_page_the_postId_2017 = $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id'];
                            require_once ("includes/conn/config.php");
                            require_once ("includes/classes/database.php");
                            //--------select the comments individually according to the id of the posts
                            $sql_main_page_posts_comments = "SELECT 
ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_comment,
ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_regdate,
ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_id,
ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_posts_post_id,
ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_commentator_id,
ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_avatar,
ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_names,
ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id,
ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_api_log_face_goo_id

 FROM ogenius_nds_db_community_posts_comments INNER JOIN ogenius_nds_db_normal_users
 ON ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_commentator_id=ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id
 WHERE ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_posts_post_id='{$main_page_the_postId_2017}'
  AND  ogenius_nds_db_community_posts_comments_active_status='0'
  ORDER BY ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_id DESC LIMIT 20";
                            if ($query_main_page_posts_comments = $database->query($sql_main_page_posts_comments)) {
                                //---------------------
                                $main_page_cmmnens_c = 0;
                                while ($res_main_page_posts_comments = mysqli_fetch_array($query_main_page_posts_comments)) {
                                    $theCommentIf_2017 = $res_main_page_posts_comments['ogenius_nds_db_community_posts_comments_id'];
                                    if ($main_page_cmmnens_c == 0) {
                                        ?>
                                        <img class="image24 main_page_institution_comments_collapsible<?php echo "" . $i_mainPage_posts; ?>" onclick="main_page_institution_posts_comments_refresh_up(<?php echo "" . $main_page_the_postId_2017; ?>, this)" src="images/up_new_load.png" style="cursor:pointer;margin-left:48%;" />
                                        <?php
                                        echo "<input type='hidden' value='$theCommentIf_2017' id='mainpage_institution_first_comment_id' />";
                                    }
                                    ?>
                                    <div class="startcolstart" style="min-width:95%">
                                        <div class="startrowspace" style="min-width:100%">
                                            <div class="startrowspace">
                                                <?php
                                                //-------------The profile page dilemma--
                                                if ($res_main_page_posts_comments['ogenius_nds_db_normal_users_api_log_face_goo_id'] < 1) {
                                                    ?>
                                                    <img src="uploaded_images/<?php echo "" . ($res_main_page_posts_comments['ogenius_nds_db_normal_users_avatar'] != "") ? $res_main_page_posts_comments['ogenius_nds_db_normal_users_avatar'] : "nds_avatar.png"; ?>" class="image48" /></td>
                                                    <?php
                                                } else {
                                                    ?>
                                                    <img src="<?php
                                                    if (!empty($res_main_page_posts_comments['ogenius_nds_db_normal_users_avatar'])) {
                                                        echo "" . (strlen($res_main_page_posts_comments['ogenius_nds_db_normal_users_avatar']) > 26) ? $res_main_page_posts_comments['ogenius_nds_db_normal_users_avatar'] : "uploaded_images/" . $res_main_page_posts_comments['ogenius_nds_db_normal_users_avatar'];
                                                    } else {
                                                        echo "" . "uploaded_images/" . "nds_avatar.png";
                                                    }
                                                    ?>" class="image48" />

                                                    <?php
                                                }
                                                ?>
                                                <span>&nbsp;&nbsp;<b><?php echo "" . checkMyPostingPrivacyStatus($res_main_page_posts_comments['ogenius_nds_db_community_posts_comments_commentator_id'], $res_main_page_posts_comments['ogenius_nds_db_normal_users_names']); ?></b></span>
                                            </div>
                                            <div>
                                                <span><i><?php echo "" . time_to_sec($res_main_page_posts_comments['ogenius_nds_db_community_posts_comments_regdate']); ?></i></span>
                                                <?php
                                                if ($res_main_page_posts_comments['ogenius_nds_db_community_posts_comments_commentator_id'] == $_SESSION["ogenius_nds_user_id_x2309999_990"]) {
                                                    ?>
                                                    <img onclick="main_page_delete_this_post_comment(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>,<?php echo "" . $res_main_page_posts_comments['ogenius_nds_db_community_posts_comments_id']; ?>,<?php echo "" . $i_mainPage_posts; ?>,<?php echo "" . $i_mainPage_posts; ?>)" id="a<?php echo "$i_mainPage_posts" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>" onclick="main_page_flag_this_post(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>)" src="images/send_to_dust_bin.png" class="image24" />

                                                    <?php
                                                } else {
                                                    
                                                }
                                                ?>
                                            </div>
                                        </div>
                                        <p class="post-item-text"><?php echo "" . activateUrlStringsw($res_main_page_posts_comments['ogenius_nds_db_community_posts_comments_comment']); ?>                            
                                        </p>



                                    </div>

                                    <?php
                                    $main_page_cmmnens_c++;
                                }
                                if ($main_page_cmmnens_c != 0) {
                                    echo "<input type='hidden' value='$theCommentIf_2017' id='mainpage_last_comment_id' />";
                                    ?>
                                    <br/>
                                    <img class="image24 main_page_comments_collapsible<?php echo "" . $i_mainPage_posts; ?>" onclick="main_page_posts_comments_refresh_down(<?php echo "" . $main_page_the_postId_2017; ?>, this)" src="images/down_new_load.png" style="cursor:pointer;margin-left:48%;" />

                                    <br/>
                                    <?php
                                }
                            }
                            ?>


                        </div>
                        <div> <!--More...--></div>
                    </div>

                    <div class="panel-footer centerrowspacearound post-area" id="post-item-comment">


                        <textarea type="textarea" class="form-control" id="<?php echo "commentOnMe" . $i_mainPage_posts; ?>"  onkeyup="enlarge(this)" placeholder='<?php
                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_35("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_35("system_config_xml/" . $_global_language)->item(0)->textContent;
                        } else {
                            ?>
                                      Comment
                                  <?php } ?>'></textarea>

                        <div id="sendmessage"> 
                            <img src="images/ic_send_black_24dp.png" name="main_page_comments_collapsible<?php echo "" . $i_mainPage_posts; ?>" title="<?php echo "commentOnMe" . $i_mainPage_posts; ?>"  onclick="main_page_send_comment(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>,<?php echo "commentOnMe" . $i_mainPage_posts; ?>)"  type="button" value="Send" >  </a>
                            <input type="hidden" title="main_page_comments_collapsible<?php echo "" . $i_mainPage_posts; ?>" value='' id="manu2017_<?php echo "" . $i_mainPage_posts; ?>" />

                        </div>
                    </div>
                </div>

                <?php
            }

            if ($check_2017_myposts_all_data == 0) {

                echo "<h4><img src='images/no_data_in.png' style='max-width:50px;max-height:50px;margin-left:30%;' /></h4>";
            }
            ?>


        </div>  
    <?php } ?>
    </div>  
    <?php
} else if ($_POST['select_directive'] == "trending") {
    ?>
    <?php
//--bring the language--------------------------
    require_once ("includes/conn/config.php");
    require_once ("includes/classes/database.php");
    require_once ("includes/classes/settingsReadFile.php");
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

        $_global_language = "nothing";
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
        $_global_language = "nothing";
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
    <div>
        <input type="hidden" value="New " id="main_page_institution_carousel_new_posts_uruhago_txt" />
        <input type="hidden" id="main_page_institution_carousel_new_posts_uruhago" />                   
        <div onclick="main_page_institution_load_the_new_posts_click()" id="main_page_institution_carousel_new_posts" style="color:black;text-shadow:2px 2px 2px white;z-index:1000;background:linear-gradient(to right, skyblue , white);border-top:1px solid gray;border-left:1px solid gray;cursor:hand;margin-bottom:5px;box-shadow:2px 2px 2px skyblue;position: absolute;margin-left:20%;padding: 6px;border-radius: 5px;"> </div>
        <?php
        //---------All my posts container
        ?><br />
        <?php
        require_once ("includes/conn/config.php");
        ?>
        <?php
        require_once ("includes/classes/database.php");
        require_once "includes/functions.php";
        require_once "includes/timeToSec.php";
        ?>
        <?php
        $json_array = array();
        $posts_USERS = array();
        $posts_Info_Comments = array();
        $posts_Info_likes_COUNT = array();
        $posts_Info_Comments_COUNT = array();
        $posts_Info_likes_un_COUNT = array();
        $_firstId = 0;
        $FirstId = 0;
        //$temp_var_post_like=$main_page_array_of_keywords_identifiers_2017_combo_for_use[$i];
        $sql_Posts = "SELECT
ogenius_nds_db_community_posts_id,ogenius_nds_db_community_posts_postdata,
ogenius_nds_db_community_posts_poster_id,ogenius_nds_db_community_posts_regdate,
ogenius_nds_db_community_posts_sent,ogenius_nds_db_community_posts_local_id,
ogenius_nds_db_community_posts_poster_names,ogenius_nds_db_community_posts_views,ogenius_nds_db_community_posts_posts_caption

FROM ogenius_nds_db_community_posts P 
WHERE P.ogenius_nds_db_community_posts_id>'{$FirstId}' AND P.ogenius_nds_db_community_posts_active='0'
ORDER BY P.ogenius_nds_db_community_posts_views DESC LIMIT 50";

        $posts_Info = array();
        $id_post = "";
        $id_poster = "";
        if ($query_Posts = $database->query($sql_Posts)) {
            while ($res_Posts = mysqli_fetch_array($query_Posts)) {
                $id_post = $res_Posts['ogenius_nds_db_community_posts_id'];
                $id_poster = $res_Posts['ogenius_nds_db_community_posts_poster_id'];

                //---
                $sql_Posts_Comments = "SELECT 
            ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_id,
            ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_commentator_name,
            ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_comment,
            ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_posts_post_id,
            ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_regdate,
            ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_commentator_id,
            ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_avatar,
            ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_names,
            ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id,
ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_api_log_face_goo_id          
             FROM ogenius_nds_db_community_posts_comments
            LEFT JOIN ogenius_nds_db_normal_users
            ON ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_commentator_id=ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id
WHERE   ogenius_nds_db_community_posts_comments_posts_post_id='{$id_post}' 
AND  ogenius_nds_db_community_posts_comments_active_status='0'  ORDER BY 
    ogenius_nds_db_community_posts_comments_regdate DESC LIMIT 60


";

                if ($query_Posts_Comments = $database->query($sql_Posts_Comments)) {
                    while ($res_ = mysqli_fetch_array($query_Posts_Comments)) {
                        $posts_Info_Comments[] = $res_;
                    }
                }
                //---------COMMENTS COUNT
                $sql_Posts_Comments_COUNT = "SELECT COUNT(*) AS All_Attached_Comments FROM ogenius_nds_db_community_posts_comments WHERE
ogenius_nds_db_community_posts_comments_posts_post_id='{$id_post}' AND  ogenius_nds_db_community_posts_comments_active_status='0'";

                if ($query_Posts_Comments_COUNT = $database->query($sql_Posts_Comments_COUNT)) {
                    while ($res__COUNT = mysqli_fetch_array($query_Posts_Comments_COUNT)) {
                        $posts_Info_Comments_COUNT[] = $res__COUNT;
                    }
                }
                //---likes_COUNT
                $sql_Posts_likes_COUNT = "SELECT COUNT(*) AS LikeCompilations  FROM ogenius_nds_db_community_posts_i_flags   WHERE
ogenius_nds_db_community_posts_i_flags_post_id='{$id_post}'
AND ogenius_nds_db_community_posts_i_flags_like_status='1'";

                if ($query_Posts_likes_COUNT = $database->query($sql_Posts_likes_COUNT)) {
                    while ($res_likes_COUNT = mysqli_fetch_array($query_Posts_likes_COUNT)) {
                        $posts_Info_likes_COUNT[] = $res_likes_COUNT;
                    }
                }
                //---UNLIKE COUNT
                $sql_Posts_un_likes_COUNT = "SELECT COUNT(*) AS UnLikeCompilations FROM ogenius_nds_db_community_posts_i_flags   WHERE
ogenius_nds_db_community_posts_i_flags_post_id='{$id_post}'
AND ogenius_nds_db_community_posts_i_flags_like_status='2'";

                if ($query_Posts_un_likes_COUNT = $database->query($sql_Posts_un_likes_COUNT)) {
                    while ($res_un_likes_COUNT = mysqli_fetch_array($query_Posts_un_likes_COUNT)) {
                        $posts_Info_likes_un_COUNT[] = $res_un_likes_COUNT;
                    }
                }
                //---
                //---USERS TABLE
                $sql_USERS = "SELECT * FROM ogenius_nds_db_normal_users   WHERE
ogenius_nds_db_normal_users_id='{$id_poster}' 
";

                if ($query_USERS = $database->query($sql_USERS)) {
                    while ($res_USERS = mysqli_fetch_array($query_USERS)) {
                        $posts_USERS[] = $res_USERS;
                    }
                }
                $posts_Info[] = $res_Posts;
                //--
            }
        }

        /* print("{\"posts\":" . json_encode($posts_Info) . "}");
          print("--cyuma2017--");
          print("{\"Comments\":" . json_encode($posts_Info_Comments) . "}");
          print("--cyuma2017--");
          print("{\"CmmentsCount\":" . json_encode($posts_Info_Comments_COUNT) . "}");
          print("--cyuma2017--");
          print("{\"LikesCount\":" . json_encode($posts_Info_likes_COUNT) . "}");
          print("--cyuma2017--");
          print("{\"UnlikesCount\":" . json_encode($posts_Info_likes_un_COUNT) . "}");
          print("--cyuma2017--");
          print("{\"UserCreds\":" . json_encode($posts_USERS) . "}");
          print("--cyuma2017--"); */
        //----------posts
        $main_page_common_user_posts = json_encode($posts_Info) . "";
        $main_page_common_user_comments_stream = json_encode($posts_Info_Comments) . "";
        $main_page_common_user_comments_stream_count = json_encode($posts_Info_Comments_COUNT) . "";
        $main_page_common_user_comments_likes_count = json_encode($posts_Info_likes_COUNT) . "";
        $main_page_common_user_comments_unlikes_count = json_encode($posts_Info_likes_un_COUNT) . "";
        $main_page_common_user_comments_users_creds = json_encode($posts_USERS) . "";
        ///------------Now reading the json data logically--
        //---posts  stream of data
        $books_main_page_posts = json_decode($main_page_common_user_posts, true);
        $books_main_page_comments_stream = json_decode($main_page_common_user_comments_stream, true);
        $books_main_page_comments_stream = json_decode($main_page_common_user_comments_stream, true);
        $books_main_page_comments_stream_count = json_decode($main_page_common_user_comments_stream_count, true);
        $books_main_page_comments_likes_count = json_decode($main_page_common_user_comments_likes_count, true);
        $books_main_page_comments_unlikes_count = json_decode($main_page_common_user_comments_unlikes_count, true);
        $books_main_page_users_creds = json_decode($main_page_common_user_comments_users_creds, true);
        $main_page_common_user_posts_count = count($books_main_page_posts);
        //---posts  stream of data
        $check_2017_myposts_all_data = 0;
        //------------last and first ids

        for ($i_mainPage_posts = 0; $i_mainPage_posts < $main_page_common_user_posts_count; $i_mainPage_posts++) {
            //echo "<p>" . $books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_email'] . "</p>";
            if ($check_2017_myposts_all_data == 0) {

                echo "<input type='hidden' value='" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id'] . "' id='main_page_institution_post_first_id'/>";
            } else if ($check_2017_myposts_all_data == 49) {
                echo "<input type='hidden' value='" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id'] . "' id='main_page_institution_post_last_id'/>";
                ?>
                <input type="hidden" value="New " id="main_page_institution_carousel_old_posts_uruhago_txt" />
                <input type="hidden" id="main_page_institution_carousel_old_posts_uruhago" />
                <div onclick="main_page_institution_load_the_old_posts_click()" id="main_page_institution_carousel_old_posts" style="margin-top:320px;color:black;text-shadow:2px 2px 2px white;z-index:1000;background:linear-gradient(to right, skyblue , white);border-top:1px solid gray;border-left:1px solid gray;cursor:hand;margin-bottom:5px;box-shadow:2px 2px 2px skyblue;position: absolute;margin-left:2%;padding: 6px;border-radius: 5px;">
                    Load Old Posts
                </div>


                <?php
            }

            $check_2017_myposts_all_data++;
            ?> 


            <div class="panel panel-default">

                <div class="panel-heading centerrowspace">
                    <div class="startrow">
                        <?php
                        //-------------The profile page dilemma--
                        if ($books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_api_log_face_goo_id'] < 1) {
                            ?>
                            <img class="image48" src="uploaded_images/<?php echo "" . ($books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_avatar'] != "") ? $books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_avatar'] : "nds_avatar.png"; ?>"/>
                            <?php
                        } else {
                            ?><img src="<?php
                            if (!empty($books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_avatar'])) {
                                echo "" . (strlen($books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_avatar']) > 26) ? $books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_avatar'] : "uploaded_images/" . $books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_avatar'];
                            } else {
                                echo "" . "uploaded_images/" . "nds_avatar.png";
                            }
                            ?>" class="image48" /> <?php
                             }
                             ?> &nbsp;&nbsp;
                        <b><span><?php echo "" . checkMyPostingPrivacyStatus($books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_poster_id'], $books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_names']); ?></span></br><span><?php
                                if ($books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_user_vip_tag'] == 2) {
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_30("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_30("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>  ogenius_nds_db_normal_users_user_vip_tag
                                    <?php } ?>: <?php
                                    echo "" . ($books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_user_vip_tag'] == 2) ? $books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_position'] : "";
                                }
                                ?>
                            </span></b>
                    </div>
                    <span> <small><i><?php echo "" . time_to_sec($books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_regdate']); ?> ago</i></small></span>


                </div>
                <div class="panel-body">
                    <div class="post-item startcolstart"<?php echo "" . ($books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_posts_caption'] == "") ? "" : "overflow-x: scroll" ?> >
                        <?php echo "" . formatImagesInText_withCaption(activateUrlStringsw($books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_postdata']), $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_posts_caption']); ?>

                    </div>
                    <hr>
                    <div class="post-stats">
                        <ul class="post-item-stats startrow">
                            <li>
                                <small><span id="main_page_views<?php echo "" . $i_mainPage_posts; ?>"><?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_views']; ?></span> <?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_31("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_31("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        views

                                    <?php } ?></small>
                            </li>
                            <li>
                                <small><span id="main_page_likes<?php echo "" . $i_mainPage_posts; ?>"><?php echo "" . $books_main_page_comments_likes_count[$i_mainPage_posts]['LikeCompilations']; ?></span> <?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_32("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_32("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        likes
                                    <?php } ?></small>
                            </li>
                            <li>
                                <small><span id="main_page_unlikes<?php echo "" . $i_mainPage_posts; ?>"><?php echo "" . $books_main_page_comments_unlikes_count[$i_mainPage_posts]['UnLikeCompilations']; ?></span> <?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_33("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_33("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        unlikes
                                    <?php } ?></small></li>
                            <li ><small><span id="main_page_comments<?php echo "" . $i_mainPage_posts; ?>"><?php echo "" . $books_main_page_comments_stream_count[$i_mainPage_posts]['All_Attached_Comments']; ?></span> <?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_34("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_34("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        comments
                                    <?php } ?></small></li>
                        </ul> 
                        <ul class="post-item-button startrow">
                            <!-- the report div -->                                                
                            <div id="<?php echo "mainPageFlagOrReport" . $i_mainPage_posts; ?>" style="visibility:hidden;border:3px solid #CDCDCD;position: absolute;background: white;border-radius: 8px;width: 350px;"> 
                                <div>
                                    <input type="button" name="<?php echo "mainPageFlagOrReport" . $i_mainPage_posts; ?>" onclick="main_page_hide_flag_post_view(this)" class="btn" style="margin-left:75%;margin-top:8px;padding: 5px;color: blue;margin-right:15px;color: white" value="X" />
                                </div>

                                <form>
                                    <ul class="startcolstart">
                                        <li class="startrow">
                                            <input title="<?php echo "mainPageFlagOrReport" . $i_mainPage_posts; ?>" class="image24"  type="radio" onchange="main_page_like_flag_this_post_2017(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>, 'insulting')" id="<?php echo "theMeRadioFlag_a" . $i_mainPage_posts; ?>" name="meRadioInsulting<?php echo "" . $i_mainPage_posts; ?>" />
                                            <img src="images/insulting_2017.jpg" class="image24" />
                                            <span>Insulting</span>
                                        </li> 
                                        <li class="startrow">
                                            <input title="<?php echo "mainPageFlagOrReport" . $i_mainPage_posts; ?>" class="image24"type="radio" onchange="main_page_like_flag_this_post_2017(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>, 'inappropriate')" id="<?php echo "theMeRadioFlag_b" . $i_mainPage_posts; ?>" name="meRadioInsulting<?php echo "" . $i_mainPage_posts; ?>" />
                                            <img src="images/inappropriate_.jpg" class="image24" />
                                            <span>inappropriate</span>
                                        </li>  
                                        <li class="startrow">
                                            <input class="image24" type="radio" onchange="main_page_like_flag_this_post_2017(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>, 'other')" id="<?php echo "theMeRadioFlag_c" . $i_mainPage_posts; ?>" name="meRadioInsulting<?php echo "" . $i_mainPage_posts; ?>" />
                                            <img src="images/other_.png" class="image24" />
                                            <span>Other</span>
                                        </li> 
                                        <li class="startrowspace">
                                            <textarea title="<?php echo "theMeRadioFlag_c" . $i_mainPage_posts; ?>" onclick='main_page_flag_this_post_using_other_focus(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>,<?php echo "theMeRadioFlag_c" . $i_mainPage_posts; ?>)' name="" id="<?php echo "main_page_flag_motion" . $i_mainPage_posts; ?>" onkeyup="textAreaAdjust(this)" class="form-control"></textarea>

                                            <input  placeholder="<?php echo "mainPageFlagOrReport" . $i_mainPage_posts; ?>" title="<?php echo "main_page_flag_motion" . $i_mainPage_posts; ?>" name="<?php echo "main_page_flag_motion" . $i_mainPage_posts; ?>" onclick='main_page_flag_this_post_using_other(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>,<?php echo "theMeRadioFlag_c" . $i_mainPage_posts; ?>,<?php echo "" . $i_mainPage_posts; ?>)' type="button" class="btn btn-primary" style="padding: 5px;color: blue" value="---&#10004;---" />
                                        </li>
                                    </ul>
                                </form>
                            </div>
                            <li><img class="image24" style="cursor:pointer" name='<?php echo "mainPageFlagOrReport" . $i_mainPage_posts; ?>' id="a<?php echo "$i_mainPage_posts" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>" onclick="main_page_flag_this_post(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>)" src="images/flag_this_00.png"/></li>
                            <li><img class="image24" style="cursor:pointer"id="b<?php echo "$i_mainPage_posts" . "-" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>" onclick="main_page_like_this_post(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>)" src="images/ic_thumb_up_black_48dp1.png"/></li>
                            <li><img class="image24" style="cursor:pointer" id="c<?php echo "$i_mainPage_posts" . "-" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>"onclick="main_page_unlike_this_post(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>)" src="images/ic_thumb_down_black_48dp1.png"/></li>
                            <li><img class="image24" style="cursor:pointer" onclick="main_page_decollapse_this_comment(this)" name="main_page_comments_collapsible<?php echo "" . $i_mainPage_posts; ?>" id="d<?php echo "$i_mainPage_posts" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>" onclick="main_page_toggle_comment_of_this_post(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>)" src="images/ic_chat_black_48dp.png" onclick="pullcommentmodal()"src="images/ic_chat_black_48dp.png"/></li>
                            <?php
                            if ($books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_id'] == $_SESSION["ogenius_nds_user_id_x2309999_990"]) {
                                ?>
                                <li><img id="a<?php echo "$i_mainPage_posts" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>" onclick="main_page_delete_this_post(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>)" src="images/send_to_dust_bin.png" style="width: 24px;height: 24px;" /></li>

                                <?php
                            } else {
                                
                            }
                            ?>  
                        </ul>
                    </div>
                </div>
                <div class="scrolls" style="margin-left: 5%;margin-bottom: 10px;max-height: 240px; min-width: 95%;overflow-y: auto">
                    <div> <!--New...--></div>
                    <div class="post-item-comments startcolstart main_page_collapsibles_2017" id="main_page_comments_collapsible<?php echo "" . $i_mainPage_posts; ?>">
                        <?php
                        ///--------------THE POST ID
                        $main_page_the_postId_2017 = $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id'];
                        require_once ("includes/conn/config.php");
                        require_once ("includes/classes/database.php");
                        //--------select the comments individually according to the id of the posts
                        $sql_main_page_posts_comments = "SELECT 
ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_comment,
ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_regdate,
ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_id,
ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_posts_post_id,
ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_commentator_id,
ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_avatar,
ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_names,
ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id,
ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_api_log_face_goo_id

 FROM ogenius_nds_db_community_posts_comments INNER JOIN ogenius_nds_db_normal_users
 ON ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_commentator_id=ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id
 WHERE ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_posts_post_id='{$main_page_the_postId_2017}'
  AND  ogenius_nds_db_community_posts_comments_active_status='0'
  ORDER BY ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_id DESC LIMIT 20";
                        if ($query_main_page_posts_comments = $database->query($sql_main_page_posts_comments)) {
                            //---------------------
                            $main_page_cmmnens_c = 0;
                            while ($res_main_page_posts_comments = mysqli_fetch_array($query_main_page_posts_comments)) {
                                $theCommentIf_2017 = $res_main_page_posts_comments['ogenius_nds_db_community_posts_comments_id'];
                                if ($main_page_cmmnens_c == 0) {
                                    ?>
                                    <img class="image24 main_page_institution_comments_collapsible<?php echo "" . $i_mainPage_posts; ?>" onclick="main_page_institution_posts_comments_refresh_up(<?php echo "" . $main_page_the_postId_2017; ?>, this)" src="images/up_new_load.png" style="cursor:pointer;margin-left:48%;" />
                                    <?php
                                    echo "<input type='hidden' value='$theCommentIf_2017' id='mainpage_institution_first_comment_id' />";
                                }
                                ?>
                                <div class="startcolstart" style="min-width:95%">
                                    <div class="startrowspace" style="min-width:100%">
                                        <div class="startrowspace">
                                            <?php
                                            //-------------The profile page dilemma--
                                            if ($res_main_page_posts_comments['ogenius_nds_db_normal_users_api_log_face_goo_id'] < 1) {
                                                ?>
                                                <img src="uploaded_images/<?php echo "" . ($res_main_page_posts_comments['ogenius_nds_db_normal_users_avatar'] != "") ? $res_main_page_posts_comments['ogenius_nds_db_normal_users_avatar'] : "nds_avatar.png"; ?>" class="image48" /></td>
                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php
                                                if (!empty($res_main_page_posts_comments['ogenius_nds_db_normal_users_avatar'])) {
                                                    echo "" . (strlen($res_main_page_posts_comments['ogenius_nds_db_normal_users_avatar']) > 26) ? $res_main_page_posts_comments['ogenius_nds_db_normal_users_avatar'] : "uploaded_images/" . $res_main_page_posts_comments['ogenius_nds_db_normal_users_avatar'];
                                                } else {
                                                    echo "" . "uploaded_images/" . "nds_avatar.png";
                                                }
                                                ?>" class="image48" />

                                                <?php
                                            }
                                            ?>
                                            <div><?php echo "" . checkMyPostingPrivacyStatus($res_main_page_posts_comments['ogenius_nds_db_community_posts_comments_commentator_id'], $res_main_page_posts_comments['ogenius_nds_db_normal_users_names']); ?></div>
                                        </div>
                                        <div>
                                            <div><h6><?php echo "" . time_to_sec($res_main_page_posts_comments['ogenius_nds_db_community_posts_comments_regdate']); ?></h6></div>
                                            <?php
                                            if ($res_main_page_posts_comments['ogenius_nds_db_community_posts_comments_commentator_id'] == $_SESSION["ogenius_nds_user_id_x2309999_990"]) {
                                                ?>
                                                <div><img onclick="main_page_delete_this_post_comment(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>,<?php echo "" . $res_main_page_posts_comments['ogenius_nds_db_community_posts_comments_id']; ?>,<?php echo "" . $i_mainPage_posts; ?>,<?php echo "" . $i_mainPage_posts; ?>)" id="a<?php echo "$i_mainPage_posts" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>"src="images/send_to_dust_bin.png" class="image24" /></div>

                                                <?php
                                            } else {
                                                
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <p class="post-item-text"><?php echo "" . activateUrlStringsw($res_main_page_posts_comments['ogenius_nds_db_community_posts_comments_comment']); ?>                            
                                    </p>



                                </div>

                                <?php
                                $main_page_cmmnens_c++;
                            }
                            if ($main_page_cmmnens_c != 0) {
                                echo "<input type='hidden' value='$theCommentIf_2017' id='mainpage_last_comment_id' />";
                                ?>
                                <br/>
                                <img class="image24 main_page_comments_collapsible<?php echo "" . $i_mainPage_posts; ?>" onclick="main_page_posts_comments_refresh_down(<?php echo "" . $main_page_the_postId_2017; ?>, this)" src="images/down_new_load.png" style="cursor:pointer;margin-left:48%;" />

                                <br/>
                                <?php
                            }
                        }
                        ?>


                    </div>
                    <div> <!--More...--></div>
                </div>

                <div class="panel-footer centerrowspacearound post-area" id="post-item-comment">


                    <textarea type="textarea" class="form-control" id="<?php echo "commentOnMe" . $i_mainPage_posts; ?>"  onkeyup="enlarge(this)" placeholder='<?php
                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_35("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_35("system_config_xml/" . $_global_language)->item(0)->textContent;
                    } else {
                        ?>
                                  Comment
                              <?php } ?>'></textarea>

                    <div id="sendmessage"> 
                        <img src="images/ic_send_black_24dp.png" name="main_page_comments_collapsible<?php echo "" . $i_mainPage_posts; ?>" title="<?php echo "commentOnMe" . $i_mainPage_posts; ?>"  onclick="main_page_send_comment(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>,<?php echo "commentOnMe" . $i_mainPage_posts; ?>)"  type="button" value="Send" >  </a>
                        <input type="hidden" title="main_page_comments_collapsible<?php echo "" . $i_mainPage_posts; ?>" value='' id="manu2017_<?php echo "" . $i_mainPage_posts; ?>" />

                    </div>
                </div>
            </div>

            <?php
        }

        if ($check_2017_myposts_all_data == 0) {

            echo "<h4><img src='images/no_data_in.png' style='max-width:50px;max-height:50px;margin-left:30%;' /></h4>";
        }
        ?>


    </div>  
    <?php ?>
    </div>
    <?php
} else if ($_POST['select_directive'] == "myposts") {
    ?>
    <?php
//--bring the language--------------------------
    require_once ("includes/conn/config.php");
    require_once ("includes/classes/database.php");
    require_once ("includes/classes/settingsReadFile.php");
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

        $_global_language = "nothing";
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
        $_global_language = "nothing";
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
    <div>
        <input type="hidden" value="New " id="main_page_institution_carousel_new_posts_uruhago_txt" />
        <input type="hidden" id="main_page_institution_carousel_new_posts_uruhago" />                   
        <div onclick="main_page_institution_load_the_new_posts_click()" id="main_page_institution_carousel_new_posts" style="color:black;text-shadow:2px 2px 2px white;z-index:1000;background:linear-gradient(to right, skyblue , white);border-top:1px solid gray;border-left:1px solid gray;cursor:hand;margin-bottom:5px;box-shadow:2px 2px 2px skyblue;position: absolute;margin-left:20%;padding: 6px;border-radius: 5px;"> </div>
        <?php
        //---------All my posts container
        ?><br />
        <?php
        require_once ("includes/conn/config.php");
        ?>
        <?php
        require_once ("includes/classes/database.php");
        require_once "includes/functions.php";
        require_once "includes/timeToSec.php";
        ?>
        <?php
        $json_array = array();
        $posts_USERS = array();
        $posts_Info_Comments = array();
        $posts_Info_likes_COUNT = array();
        $posts_Info_Comments_COUNT = array();
        $posts_Info_likes_un_COUNT = array();
        $_firstId = 0;
        $FirstId = 0;
        // $temp_var_post_like=$main_page_array_of_keywords_identifiers_2017_combo_for_use[$i];
        $sql_Posts = "SELECT
ogenius_nds_db_community_posts_id,ogenius_nds_db_community_posts_postdata,
ogenius_nds_db_community_posts_poster_id,ogenius_nds_db_community_posts_regdate,
ogenius_nds_db_community_posts_sent,ogenius_nds_db_community_posts_local_id,
ogenius_nds_db_community_posts_poster_names,ogenius_nds_db_community_posts_views,ogenius_nds_db_community_posts_posts_caption

FROM ogenius_nds_db_community_posts P 
WHERE P.ogenius_nds_db_community_posts_id>'{$FirstId}' AND P.ogenius_nds_db_community_posts_active='0'
AND P.ogenius_nds_db_community_posts_poster_id='{$thIsUserId_2017}'
ORDER BY P.ogenius_nds_db_community_posts_views DESC LIMIT 90";

        $posts_Info = array();
        $id_post = "";
        $id_poster = "";
        if ($query_Posts = $database->query($sql_Posts)) {
            while ($res_Posts = mysqli_fetch_array($query_Posts)) {
                $id_post = $res_Posts['ogenius_nds_db_community_posts_id'];
                $id_poster = $res_Posts['ogenius_nds_db_community_posts_poster_id'];

                //---
                $sql_Posts_Comments = "SELECT 
            ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_id,
            ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_commentator_name,
            ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_comment,
            ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_posts_post_id,
            ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_regdate,
            ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_commentator_id,
            ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_avatar,
            ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_names,
            ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id,
ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_api_log_face_goo_id          
             FROM ogenius_nds_db_community_posts_comments
            LEFT JOIN ogenius_nds_db_normal_users
            ON ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_commentator_id=ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id
WHERE   ogenius_nds_db_community_posts_comments_posts_post_id='{$id_post}' 
AND  ogenius_nds_db_community_posts_comments_active_status='0'  ORDER BY 
    ogenius_nds_db_community_posts_comments_regdate DESC LIMIT 60


";

                if ($query_Posts_Comments = $database->query($sql_Posts_Comments)) {
                    while ($res_ = mysqli_fetch_array($query_Posts_Comments)) {
                        $posts_Info_Comments[] = $res_;
                    }
                }
                //---------COMMENTS COUNT
                $sql_Posts_Comments_COUNT = "SELECT COUNT(*) AS All_Attached_Comments FROM ogenius_nds_db_community_posts_comments WHERE
ogenius_nds_db_community_posts_comments_posts_post_id='{$id_post}' AND  ogenius_nds_db_community_posts_comments_active_status='0'";

                if ($query_Posts_Comments_COUNT = $database->query($sql_Posts_Comments_COUNT)) {
                    while ($res__COUNT = mysqli_fetch_array($query_Posts_Comments_COUNT)) {
                        $posts_Info_Comments_COUNT[] = $res__COUNT;
                    }
                }
                //---likes_COUNT
                $sql_Posts_likes_COUNT = "SELECT COUNT(*) AS LikeCompilations  FROM ogenius_nds_db_community_posts_i_flags   WHERE
ogenius_nds_db_community_posts_i_flags_post_id='{$id_post}'
AND ogenius_nds_db_community_posts_i_flags_like_status='1'";

                if ($query_Posts_likes_COUNT = $database->query($sql_Posts_likes_COUNT)) {
                    while ($res_likes_COUNT = mysqli_fetch_array($query_Posts_likes_COUNT)) {
                        $posts_Info_likes_COUNT[] = $res_likes_COUNT;
                    }
                }
                //---UNLIKE COUNT
                $sql_Posts_un_likes_COUNT = "SELECT COUNT(*) AS UnLikeCompilations FROM ogenius_nds_db_community_posts_i_flags   WHERE
ogenius_nds_db_community_posts_i_flags_post_id='{$id_post}'
AND ogenius_nds_db_community_posts_i_flags_like_status='2'";

                if ($query_Posts_un_likes_COUNT = $database->query($sql_Posts_un_likes_COUNT)) {
                    while ($res_un_likes_COUNT = mysqli_fetch_array($query_Posts_un_likes_COUNT)) {
                        $posts_Info_likes_un_COUNT[] = $res_un_likes_COUNT;
                    }
                }
                //---
                //---USERS TABLE
                $sql_USERS = "SELECT * FROM ogenius_nds_db_normal_users   WHERE
ogenius_nds_db_normal_users_id='{$id_poster}' 
";

                if ($query_USERS = $database->query($sql_USERS)) {
                    while ($res_USERS = mysqli_fetch_array($query_USERS)) {
                        $posts_USERS[] = $res_USERS;
                    }
                }
                $posts_Info[] = $res_Posts;
                //--
            }
        }

        /* print("{\"posts\":" . json_encode($posts_Info) . "}");
          print("--cyuma2017--");
          print("{\"Comments\":" . json_encode($posts_Info_Comments) . "}");
          print("--cyuma2017--");
          print("{\"CmmentsCount\":" . json_encode($posts_Info_Comments_COUNT) . "}");
          print("--cyuma2017--");
          print("{\"LikesCount\":" . json_encode($posts_Info_likes_COUNT) . "}");
          print("--cyuma2017--");
          print("{\"UnlikesCount\":" . json_encode($posts_Info_likes_un_COUNT) . "}");
          print("--cyuma2017--");
          print("{\"UserCreds\":" . json_encode($posts_USERS) . "}");
          print("--cyuma2017--"); */
        //----------posts
        $main_page_common_user_posts = json_encode($posts_Info) . "";
        $main_page_common_user_comments_stream = json_encode($posts_Info_Comments) . "";
        $main_page_common_user_comments_stream_count = json_encode($posts_Info_Comments_COUNT) . "";
        $main_page_common_user_comments_likes_count = json_encode($posts_Info_likes_COUNT) . "";
        $main_page_common_user_comments_unlikes_count = json_encode($posts_Info_likes_un_COUNT) . "";
        $main_page_common_user_comments_users_creds = json_encode($posts_USERS) . "";
        ///------------Now reading the json data logically--
        //---posts  stream of data
        $books_main_page_posts = json_decode($main_page_common_user_posts, true);
        $books_main_page_comments_stream = json_decode($main_page_common_user_comments_stream, true);
        $books_main_page_comments_stream = json_decode($main_page_common_user_comments_stream, true);
        $books_main_page_comments_stream_count = json_decode($main_page_common_user_comments_stream_count, true);
        $books_main_page_comments_likes_count = json_decode($main_page_common_user_comments_likes_count, true);
        $books_main_page_comments_unlikes_count = json_decode($main_page_common_user_comments_unlikes_count, true);
        $books_main_page_users_creds = json_decode($main_page_common_user_comments_users_creds, true);
        $main_page_common_user_posts_count = count($books_main_page_posts);
        //---posts  stream of data
        $check_2017_myposts_all_data = 0;
        //------------last and first ids

        for ($i_mainPage_posts = 0; $i_mainPage_posts < $main_page_common_user_posts_count; $i_mainPage_posts++) {
            //echo "<p>" . $books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_email'] . "</p>";
            if ($check_2017_myposts_all_data == 0) {

                echo "<input type='hidden' value='" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id'] . "' id='main_page_institution_post_first_id'/>";
            } else if ($check_2017_myposts_all_data == 49) {
                echo "<input type='hidden' value='" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id'] . "' id='main_page_institution_post_last_id'/>";
                ?>
                <input type="hidden" value="New " id="main_page_institution_carousel_old_posts_uruhago_txt" />
                <input type="hidden" id="main_page_institution_carousel_old_posts_uruhago" />
                <div onclick="main_page_institution_load_the_old_posts_click()" id="main_page_institution_carousel_old_posts" style="margin-top:320px;color:black;text-shadow:2px 2px 2px white;z-index:1000;background:linear-gradient(to right, skyblue , white);border-top:1px solid gray;border-left:1px solid gray;cursor:hand;margin-bottom:5px;box-shadow:2px 2px 2px skyblue;position: absolute;margin-left:2%;padding: 6px;border-radius: 5px;">
                    Load Old Posts
                </div>


                <?php
            }

            $check_2017_myposts_all_data++;
            ?> 


            <div class="panel panel-default">

                <div class="panel-heading centerrowspace">
                    <div class="startrow">
                        <?php
                        //-------------The profile page dilemma--
                        if ($books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_api_log_face_goo_id'] < 1) {
                            ?>
                            <img class="image48" src="uploaded_images/<?php echo "" . ($books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_avatar'] != "") ? $books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_avatar'] : "nds_avatar.png"; ?>"/>
                            <?php
                        } else {
                            ?><img src="<?php
                            if (!empty($books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_avatar'])) {
                                echo "" . (strlen($books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_avatar']) > 26) ? $books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_avatar'] : "uploaded_images/" . $books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_avatar'];
                            } else {
                                echo "" . "uploaded_images/" . "nds_avatar.png";
                            }
                            ?>" class="image48" /> <?php
                             }
                             ?>
                        <b><span><?php echo "" . checkMyPostingPrivacyStatus($books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_poster_id'], $books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_names']); ?></span></br><span><?php
                                if ($books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_user_vip_tag'] == 2) {
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_30("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_30("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>  ogenius_nds_db_normal_users_user_vip_tag
                                    <?php } ?>: <?php
                                    echo "" . ($books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_user_vip_tag'] == 2) ? $books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_position'] : "";
                                }
                                ?>
                            </span></b>
                    </div>
                    <span> <small><i><?php echo "" . time_to_sec($books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_regdate']); ?> ago</i></small></span>


                </div>
                <div class="panel-body">
                    <div class="post-item startcolstart"<?php echo "" . ($books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_posts_caption'] == "") ? "" : "overflow-x: scroll" ?> >
                        <?php echo "" . formatImagesInText_withCaption(activateUrlStringsw($books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_postdata']), $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_posts_caption']); ?>

                    </div>
                    <hr>
                    <div class="post-stats">
                        <ul class="post-item-stats startrow">
                            <li>
                                <small><span id="main_page_views<?php echo "" . $i_mainPage_posts; ?>"><?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_views']; ?></span> <?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_31("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_31("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        views

                                    <?php } ?></small>
                            </li>
                            <li>
                                <small><span id="main_page_likes<?php echo "" . $i_mainPage_posts; ?>"><?php echo "" . $books_main_page_comments_likes_count[$i_mainPage_posts]['LikeCompilations']; ?></span> <?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_32("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_32("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        likes
                                    <?php } ?></small>
                            </li>
                            <li>
                                <small><span id="main_page_unlikes<?php echo "" . $i_mainPage_posts; ?>"><?php echo "" . $books_main_page_comments_unlikes_count[$i_mainPage_posts]['UnLikeCompilations']; ?></span> <?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_33("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_33("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        unlikes
                                    <?php } ?></small></li>
                            <li ><small><span id="main_page_comments<?php echo "" . $i_mainPage_posts; ?>"><?php echo "" . $books_main_page_comments_stream_count[$i_mainPage_posts]['All_Attached_Comments']; ?></span> <?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_34("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_34("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        comments
                                    <?php } ?></small></li>
                        </ul> 
                        <ul class="post-item-button startrow">
                            <!-- the report div -->                                                
                            <div id="<?php echo "mainPageFlagOrReport" . $i_mainPage_posts; ?>" style="visibility:hidden;border:3px solid #CDCDCD;position: absolute;background: white;border-radius: 8px;width: 350px;"> 
                                <div>
                                    <input type="button" name="<?php echo "mainPageFlagOrReport" . $i_mainPage_posts; ?>" onclick="main_page_hide_flag_post_view(this)" class="btn" style="margin-left:75%;margin-top:8px;padding: 5px;color: blue;margin-right:15px;color: white" value="X" />
                                </div>

                                <form>
                                    <ul class="startcolstart">
                                        <li class="startrow">
                                            <input title="<?php echo "mainPageFlagOrReport" . $i_mainPage_posts; ?>" class="image24"  type="radio" onchange="main_page_like_flag_this_post_2017(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>, 'insulting')" id="<?php echo "theMeRadioFlag_a" . $i_mainPage_posts; ?>" name="meRadioInsulting<?php echo "" . $i_mainPage_posts; ?>" />
                                            <img src="images/insulting_2017.jpg" class="image24" />
                                            <span>Insulting</span>
                                        </li> 
                                        <li class="startrow">
                                            <input title="<?php echo "mainPageFlagOrReport" . $i_mainPage_posts; ?>" class="image24"type="radio" onchange="main_page_like_flag_this_post_2017(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>, 'inappropriate')" id="<?php echo "theMeRadioFlag_b" . $i_mainPage_posts; ?>" name="meRadioInsulting<?php echo "" . $i_mainPage_posts; ?>" />
                                            <img src="images/inappropriate_.jpg" class="image24" />
                                            <span>inappropriate</span>
                                        </li>  
                                        <li class="startrow">
                                            <input class="image24" type="radio" onchange="main_page_like_flag_this_post_2017(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>, 'other')" id="<?php echo "theMeRadioFlag_c" . $i_mainPage_posts; ?>" name="meRadioInsulting<?php echo "" . $i_mainPage_posts; ?>" />
                                            <img src="images/other_.png" class="image24" />
                                            <span>Other</span>
                                        </li> 
                                        <li class="startrowspace">
                                            <textarea title="<?php echo "theMeRadioFlag_c" . $i_mainPage_posts; ?>" onclick='main_page_flag_this_post_using_other_focus(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>,<?php echo "theMeRadioFlag_c" . $i_mainPage_posts; ?>)' name="" id="<?php echo "main_page_flag_motion" . $i_mainPage_posts; ?>" onkeyup="textAreaAdjust(this)" class="form-control"></textarea>

                                            <input  placeholder="<?php echo "mainPageFlagOrReport" . $i_mainPage_posts; ?>" title="<?php echo "main_page_flag_motion" . $i_mainPage_posts; ?>" name="<?php echo "main_page_flag_motion" . $i_mainPage_posts; ?>" onclick='main_page_flag_this_post_using_other(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>,<?php echo "theMeRadioFlag_c" . $i_mainPage_posts; ?>,<?php echo "" . $i_mainPage_posts; ?>)' type="button" class="btn btn-primary" style="padding: 5px;color: blue" value="---&#10004;---" />
                                        </li>
                                    </ul>
                                </form>
                            </div>
                            <li><img class="image24" style="cursor:pointer" name='<?php echo "mainPageFlagOrReport" . $i_mainPage_posts; ?>' id="a<?php echo "$i_mainPage_posts" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>" onclick="main_page_flag_this_post(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>)" src="images/flag_this_00.png"/></li>
                            <li><img class="image24" style="cursor:pointer"id="b<?php echo "$i_mainPage_posts" . "-" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>" onclick="main_page_like_this_post(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>)" src="images/ic_thumb_up_black_48dp1.png"/></li>
                            <li><img class="image24" style="cursor:pointer" id="c<?php echo "$i_mainPage_posts" . "-" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>"onclick="main_page_unlike_this_post(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>)" src="images/ic_thumb_down_black_48dp1.png"/></li>
                            <li><img class="image24" style="cursor:pointer" onclick="main_page_decollapse_this_comment(this)" name="main_page_comments_collapsible<?php echo "" . $i_mainPage_posts; ?>" id="d<?php echo "$i_mainPage_posts" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>" onclick="main_page_toggle_comment_of_this_post(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>)" src="images/ic_chat_black_48dp.png" onclick="pullcommentmodal()"src="images/ic_chat_black_48dp.png"/></li>
                            <?php
                            if ($books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_id'] == $_SESSION["ogenius_nds_user_id_x2309999_990"]) {
                                ?>
                                <li><img id="a<?php echo "$i_mainPage_posts" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>" onclick="main_page_delete_this_post(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>)" src="images/send_to_dust_bin.png" style="width: 24px;height: 24px;" /></li>

                                <?php
                            } else {
                                
                            }
                            ?>  
                        </ul>
                    </div>
                </div>
                <div class="scrolls" style="margin-left: 5%;margin-bottom: 10px;max-height: 240px; min-width: 95%;overflow-y: auto">
                    <div> <!--New...--></div>
                    <div class="post-item-comments startcolstart main_page_collapsibles_2017" id="main_page_comments_collapsible<?php echo "" . $i_mainPage_posts; ?>">
                        <?php
                        ///--------------THE POST ID
                        $main_page_the_postId_2017 = $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id'];
                        require_once ("includes/conn/config.php");
                        require_once ("includes/classes/database.php");
                        //--------select the comments individually according to the id of the posts
                        $sql_main_page_posts_comments = "SELECT 
ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_comment,
ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_regdate,
ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_id,
ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_posts_post_id,
ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_commentator_id,
ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_avatar,
ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_names,
ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id,
ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_api_log_face_goo_id

 FROM ogenius_nds_db_community_posts_comments INNER JOIN ogenius_nds_db_normal_users
 ON ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_commentator_id=ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id
 WHERE ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_posts_post_id='{$main_page_the_postId_2017}'
  AND  ogenius_nds_db_community_posts_comments_active_status='0'
  ORDER BY ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_id DESC LIMIT 20";
                        if ($query_main_page_posts_comments = $database->query($sql_main_page_posts_comments)) {
                            //---------------------
                            $main_page_cmmnens_c = 0;
                            while ($res_main_page_posts_comments = mysqli_fetch_array($query_main_page_posts_comments)) {
                                $theCommentIf_2017 = $res_main_page_posts_comments['ogenius_nds_db_community_posts_comments_id'];
                                if ($main_page_cmmnens_c == 0) {
                                    ?>
                                    <img class="main_page_institution_comments_collapsible<?php echo "" . $i_mainPage_posts; ?>" onclick="main_page_institution_posts_comments_refresh_up(<?php echo "" . $main_page_the_postId_2017; ?>, this)" src="images/up_new_load.png" style="cursor:hand;margin-left:40%;width: 30px;height: 30px;border-radius: 5px;box-shadow: 2px 2px 2px gray;border-top: 1px solid gray;border-left: 1px solid gray;" />
                                    <?php
                                    echo "<input type='hidden' value='$theCommentIf_2017' id='mainpage_institution_first_comment_id' />";
                                }
                                ?>
                                <div class="startcolstart" style="min-width:95%">
                                    <div class="startrowspace" style="min-width:100%">
                                        <div class="startrowspace">
                                            <?php
                                            //-------------The profile page dilemma--
                                            if ($res_main_page_posts_comments['ogenius_nds_db_normal_users_api_log_face_goo_id'] < 1) {
                                                ?>
                                                <img src="uploaded_images/<?php echo "" . ($res_main_page_posts_comments['ogenius_nds_db_normal_users_avatar'] != "") ? $res_main_page_posts_comments['ogenius_nds_db_normal_users_avatar'] : "nds_avatar.png"; ?>" class="image48" /></td>
                                                <?php
                                            } else {
                                                ?>
                                                <img src="<?php
                                                if (!empty($res_main_page_posts_comments['ogenius_nds_db_normal_users_avatar'])) {
                                                    echo "" . (strlen($res_main_page_posts_comments['ogenius_nds_db_normal_users_avatar']) > 26) ? $res_main_page_posts_comments['ogenius_nds_db_normal_users_avatar'] : "uploaded_images/" . $res_main_page_posts_comments['ogenius_nds_db_normal_users_avatar'];
                                                } else {
                                                    echo "" . "uploaded_images/" . "nds_avatar.png";
                                                }
                                                ?>" class="image48" />

                                                <?php
                                            }
                                            ?>
                                            <div><?php echo "" . checkMyPostingPrivacyStatus($res_main_page_posts_comments['ogenius_nds_db_community_posts_comments_commentator_id'], $res_main_page_posts_comments['ogenius_nds_db_normal_users_names']); ?></div>
                                        </div>
                                        <div>
                                            <div><h6><?php echo "" . time_to_sec($res_main_page_posts_comments['ogenius_nds_db_community_posts_comments_regdate']); ?></h6></div>
                                            <?php
                                            if ($res_main_page_posts_comments['ogenius_nds_db_community_posts_comments_commentator_id'] == $_SESSION["ogenius_nds_user_id_x2309999_990"]) {
                                                ?>
                                                <div><img onclick="main_page_delete_this_post_comment(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>,<?php echo "" . $res_main_page_posts_comments['ogenius_nds_db_community_posts_comments_id']; ?>,<?php echo "" . $i_mainPage_posts; ?>,<?php echo "" . $i_mainPage_posts; ?>)" id="a<?php echo "$i_mainPage_posts" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>" src="images/send_to_dust_bin.png" class="image24" /></div>

                                                <?php
                                            } else {
                                                
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <p class="post-item-text"><?php echo "" . activateUrlStringsw($res_main_page_posts_comments['ogenius_nds_db_community_posts_comments_comment']); ?>                            
                                    </p>



                                </div>

                                <?php
                                $main_page_cmmnens_c++;
                            }
                            if ($main_page_cmmnens_c != 0) {
                                echo "<input type='hidden' value='$theCommentIf_2017' id='mainpage_last_comment_id' />";
                                ?>
                                <br/>
                                <img class="image24 main_page_comments_collapsible<?php echo "" . $i_mainPage_posts; ?>" onclick="main_page_posts_comments_refresh_down(<?php echo "" . $main_page_the_postId_2017; ?>, this)" src="images/down_new_load.png" style="cursor:pointer;margin-left:48%;" />

                                <br/>
                                <?php
                            }
                        }
                        ?>


                    </div>
                    <div> <!--More...--></div>
                </div>

                <div class="panel-footer centerrowspacearound post-area" id="post-item-comment">


                    <textarea type="textarea" class="form-control" id="<?php echo "commentOnMe" . $i_mainPage_posts; ?>"  onkeyup="enlarge(this)" placeholder='<?php
                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_35("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_35("system_config_xml/" . $_global_language)->item(0)->textContent;
                    } else {
                        ?>
                                  Comment
                              <?php } ?>'></textarea>

                    <div id="sendmessage"> 
                        <img src="images/ic_send_black_24dp.png" name="main_page_comments_collapsible<?php echo "" . $i_mainPage_posts; ?>" title="<?php echo "commentOnMe" . $i_mainPage_posts; ?>"  onclick="main_page_send_comment(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>,<?php echo "commentOnMe" . $i_mainPage_posts; ?>)"  type="button" value="Send" > 
                        <input type="hidden" title="main_page_comments_collapsible<?php echo "" . $i_mainPage_posts; ?>" value='' id="manu2017_<?php echo "" . $i_mainPage_posts; ?>" />

                    </div>
                </div>
            </div>

            <?php
        }

        if ($check_2017_myposts_all_data == 0) {

            echo "<h4><img src='images/no_data_in.png' style='max-width:50px;max-height:50px;margin-left:30%;' /></h4>";
        }
        ?>


    </div>  
    <?php ?>
    </div> 
    <?php
}
?>
