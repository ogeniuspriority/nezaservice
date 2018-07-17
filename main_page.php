INSERT INTO `observationfinal` (`recordedFrom`, `describedBy`, `obsDatetime`, `obsLevel`, `obsValue`, `flag`, `period`, `qcStatus`, `qcTypeLog`, `acquisitionType`, `dataForm`, `capturedBy`, `mark`, `temperatureUnits`, `precipitationUnits`, `cloudHeightUnits`, `visUnits`, `dataSourceTimeZone`) VALUES ('Murindi001', '0786653152', '2018-03-14 00:00:00', 'surface', NULL, 'N', NULL, '0', NULL, '0', NULL, 'Kanyengabo', NULL, '23', '12', '25', '15', '0');
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
require_once "includes/app_up_nav.php";
require_once "includes/functions.php";
require_once "includes/timeToSec.php";
?>
<input type="hidden" id="main_page_carousel" />
<input type="hidden" value="<?php echo "" . $id_xxxccc88; ?>" id="common_user_settings_the_id" />
<input type="hidden" id="main_page_2017_" />
<div class="main-content">
    <div class="container-fluid">
        <div id="panel1" class="col-md-3">
            <div class="notifpanel panel-default">
                <div class="panel-heading centerrowspace">
                    <h5><?php
                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_0("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_0("system_config_xml/" . $_global_language)->item(0)->textContent;
                        } else {
                            ?>
                            Notification
                        <?php } ?></h5><span class="badge" id="main_page_notification_counter">0</span>
                </div>
                <div class="panel-body">
                    <div id="main_page_notification_counter_messenger">
                        <div class="centerrow">
                            <img class="image48" src="images/ic_notifications_active_black_48dp.png"/>

                        </div>

                        <p style="text-align: center"><i><?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_1("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_1("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                    You have no new notifications right now
                                <?php } ?> </i></p>
                    </div>
                    <div id="notifications_panel" style="width: 100%;height: 100%;" >
                        <div id="notifications_panel_data_pool_2017">

                        </div>
                    </div>
                </div>
            </div>
            <div class="messagepanel panel-default" id="mainpageMessage">
                <div class="panel-heading centerrowspace">
                    <h5><?php
                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_5("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_5("system_config_xml/" . $_global_language)->item(0)->textContent;
                        } else {
                            ?>
                            Message
                        <?php } ?>
                    </h5><div class="centerrowspace"><a href="messages.php" data-toggle="tooltip" data-placement="bottom" title="View all messages" target="_blank" style="text-decoration: none"><i style="margin:0px 6px; cursor: pointer; color: #0B1022" class="fa fa-external-link-square"></i></a><span class="badge" id="mainpageMessage_message_count">0</span></div>
               
                </div>
                <div class="panel-body">
                    <div id="main_page_noification_tag_2017" >
                        <div class="centerrow">
                            <img class="image48" src="images/ic_mail_48pt_3x.png"/>
                        </div>
                        <p style="text-align: center"><i><?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_6("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_6("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                    You will receive messages from institutions
                                    of which you have suggested.
                                <?php } ?> </i></p>
                    </div>
                    <div id="notifications_panel_for_message">

                    </div>

                </div>
            </div>
        </div>

        <!--        <div class="messagedialog startcolcenter col-md-offset-3" id="messages_panel_mainpop">-->
        <div id="messages_panel_mainpop" style="box-shadow: inset 0 0 1em gold, 0 0 1em #0080FF;height: 500px;border-radius:5px;border:3px solid #0080FF;position: absolute;visibility: hidden;z-index: 20000;background: white;overflow: hidden;">

            <div class="innerMessagePopUp" id="messages_panel_mainpop_note" style="background: #ffffff;width:600px;height: auto;">
            </div>
        </div>


        <div id="panel2" class="col-md-6">
            <div class="mainpanel" style="overflow-y: auto">
                <div class="panel-heading centerrowspace">
                    <div class="startrowspace col-md-10" id="panelindicator">
                        <div class="">
                            <a class="centerrowspace header_0_forum" id="All_mainPage"> <h5><?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_22("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_22("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        All
                                    <?php } ?></h5><span class="badge"></span></a>
                        </div>
                        <div class="">
                            <a id="Latest_mainPage" class="header_0_forum centerrowspace"> <h5><?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_23("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_23("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        Latest
                                    <?php } ?></h5><span class="badge"></span></a>
                        </div>
                        <div class="">
                            <a id="whereIamTagged_mainPage" class="header_0_forum centerrowspace"> <h5><?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_24("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_24("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        Where i am tagged
                                    <?php } ?></h5><span class="badge"></span></a>
                        </div>
                        <div class="">
                            <a id="Trending_mainPage" class="header_0_forum centerrowspace"><h5><?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_25("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_25("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        Trending
                                    <?php } ?></h5><span class="badge"></span></a>
                        </div>
                        <div class="">
                            <a id="Myposts_mainPage" class="header_0_forum centerrowspace"> <h5><?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_26("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_26("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        My posts
                                    <?php } ?></h5><span class="badge"></span></a>
                        </div>
                    </div>
                    <div class="centerrow">
                        <img onclick="searchpanel();" src="images/ic_search_black_24dp.png"/>
                    </div>
                    <script>
                        function searchpanel() {

                            $("#panel-search").css('visibility', 'visible');
                            $("#panel-search").css('width', '95%');
                        }
                    </script>
                    <div id="panel-search" class="panel-heading startrowspace">
                        <input id="main_page_search_posts" onkeyup="main_page_load_all_posts_search(this)" type="search" placeholder="<?php
                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_27("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_27("system_config_xml/" . $_global_language)->item(0)->textContent;
                        } else {
                            ?>
                                   Search here
                               <?php } ?>" class="form-control"/>

                        <img class="image24" onclick="main_page_load_all_posts_search_click()" src="images/ic_search_72pt_3x.png"  /><img onclick="hidepanel();" src="images/ic_close_black_24dp.png"/>
                    </div>
                    <script>
                        function hidepanel() {

                            $("#panel-search").css('visibility', 'hidden');
                            $("#panel-search").css('width', '0%');
                        }
                    </script>
                </div>

                <div class="panel-body">

                    <div class="panel panel-primary">
                        <div class="panel-heading post-preview">
                            <?php
                            //-------------The profile page dilemma--
                            if ($indiv_social_goo < 1) {
                                ?>
                                <img class="image48"src="uploaded_images/<?php echo "" . ($indiv_avatar != "") ? $indiv_avatar : "nds_avatar.png"; ?>"/>
                                <?php
                            } else {
                                ?><img class="image48" src="<?php
                                if (!empty($indiv_avatar)) {
                                    echo "" . (strlen($indiv_avatar) > 26) ? $indiv_avatar : "uploaded_images/" . $indiv_avatar;
                                } else {
                                    echo "" . "uploaded_images/" . "nds_avatar.png";
                                }
                                ?>" />
                                     <?php
                                 }
                                 ?>
                        </div>

                        <div class="panel-footer centerrowspacearound post-area">
                            <div id="addmedia"> 

                                <img src="images/ic_add_a_photo_black_24dp.png" id="addMedia" onclick="addmediabtn();"  alt="123">
                            </div>

                            <textarea type="textarea" class="form-control" id="main_page_community_post_field" onkeyup="enlarge(this)" placeholder="<?php
                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_28("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_28("system_config_xml/" . $_global_language)->item(0)->textContent;
                            } else {
                                ?>
                                          Share your opinion with our community
                                      <?php } ?>"></textarea>
                            <div id="sendmessage"> 
                                <img src="images/ic_send_black_24dp.png" onclick="main_page_post_inTheCommunity()" alt="<?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_29("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_29("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                         Send
                                     <?php } ?>">  
                            </div>
                        </div>
                    </div>
                    <div id="main_page_common_user_posts_preview">
                        <div>
                            <input type="hidden" value="New " id="main_page_carousel_new_posts_uruhago_txt" />
                            <input type="hidden" id="main_page_carousel_new_posts_uruhago" />
                            <div onclick="main_page_load_the_new_posts_click()" id="main_page_carousel_new_posts" style="color:black;text-shadow:2px 2px 2px white;z-index:1000;background:linear-gradient(to right, skyblue , white);border-top:1px solid gray;border-left:1px solid gray;cursor:pointer;margin-bottom:5px;box-shadow:2px 2px 2px skyblue;position: absolute;margin-left:20%;padding: 6px;border-radius: 5px;"> </div>
                            <?php
//---------All my posts container
                            ?><br />
                            <?php
                            require_once ("includes/conn/config.php");
                            ?>
                            <?php
                            require_once ("includes/classes/database.php");
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
            ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id ,
            ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_api_log_face_goo_id         
             FROM ogenius_nds_db_community_posts_comments
            LEFT JOIN ogenius_nds_db_normal_users
            ON ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_commentator_id=ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id
WHERE   ogenius_nds_db_community_posts_comments_posts_post_id='{$id_post}' AND  ogenius_nds_db_community_posts_comments_active_status='0'   ORDER BY 
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

                                    echo "<input type='hidden' value='" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id'] . "' id='main_page_post_first_id'/>";
                                } else if ($check_2017_myposts_all_data == 49) {
                                    echo "<input type='hidden' value='" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id'] . "' id='main_page_post_last_id'/>";
                                    ?>
                                    <input type="hidden" value="New " id="main_page_carousel_old_posts_uruhago_txt" />
                                    <input type="hidden" id="main_page_carousel_old_posts_uruhago" />
                                    <div onclick="main_page_load_the_old_posts_click()" id="main_page_carousel_old_posts" style="bottom: 30px; margin-top:10px;margin-bottom: 20px; color:black;text-shadow:2px 2px 2px white;z-index:100;background:linear-gradient(to right, skyblue , white);border-top:1px solid gray;border-left:1px solid gray;cursor:pointer;box-shadow:2px 2px 2px skyblue;margin-left:40%;border-radius: 5px;position: absolute;">
                                        Load Old Posts
                                    </div>


                                    <?php
                                }

                                // echo "<h4> The recors number $check_2017_myposts_all_data</h4>";

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
                                                 ?>&nbsp;&nbsp;
                                            <b>
                                                <span><?php echo "" . checkMyPostingPrivacyStatus($books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_poster_id'], $books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_names']); ?></span></br><span><?php
                                                    if ($books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_user_vip_tag'] == 2) {
                                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_30("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_30("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                        } else {
                                                            ?>  ogenius_nds_db_normal_users_user_vip_tag
                                                        <?php } ?>: <?php
                                                        echo "" . ($books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_user_vip_tag'] == 2) ? $books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_position'] : "";
                                                    }
                                                    ?>
                                                </span>
                                            </b>
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
                                                        <?php } ?></small>
                                                </li>
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
                                                if ($books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_id'] == $id_xxxccc88) {
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
                                                        <img class="image24 main_page_comments_collapsible<?php echo "" . $i_mainPage_posts; ?>" onclick="main_page_posts_comments_refresh_up(<?php echo "" . $main_page_the_postId_2017; ?>, this)" src="images/up_new_load.png" style="cursor:pointer;margin-left:48%;" />
                                                        <?php
                                                        echo "<input type='hidden' value='$theCommentIf_2017' id='mainpage_first_comment_id' />";
                                                    }
                                                    ?>

                                                    <div class="startcolstart" style="min-width:95%">
                                                        <div class="startrowspace"style="min-width:100%">
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
                                                                <span>
                                                                    <i><?php echo "" . time_to_sec($res_main_page_posts_comments['ogenius_nds_db_community_posts_comments_regdate']); ?></i>
                                                                </span>
                                                                <?php
                                                                if ($res_main_page_posts_comments['ogenius_nds_db_community_posts_comments_commentator_id'] == $id_xxxccc88) {
                                                                    ?>
                                                                    <img onclick="main_page_delete_this_post_comment(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>,<?php echo "" . $res_main_page_posts_comments['ogenius_nds_db_community_posts_comments_id']; ?>,<?php echo "" . $i_mainPage_posts; ?>,<?php echo "" . $i_mainPage_posts; ?>)" id="a<?php echo "$i_mainPage_posts" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>" src="images/send_to_dust_bin.png" class="image24" />

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
                                                //---------the old load of the main page
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


                                        <textarea type="textarea" class="form-control" id="<?php echo "commentOnMe" . $i_mainPage_posts; ?>" onkeyup="enlarge(this)" onchange="enlarge(this)" placeholder='<?php
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
<!--                                    <div style="visibility: hidden;height:60px;"></div>-->


                        </div>  



                    </div>
                </div>
            </div>
        </div>
        <div id="panel3" class="col-md-3">
            <div class="govpanel panel-default">
                <div class="panel-heading centerrowspace">
                    
                    <h5>Suggest to the Government</h5>
                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Send suggestions to the government about different sectors">
                        <img class="info" src="images/ic_info_outline_black_18dp.png"/></a>
                </div>
                <div class="panel-body startcolstart">
                    <script>
                        var m = "mutuelle";
                        var g = "girinka";
                        var u = "umurenge";
                        var vu = "vup";
                        var ib = "ibibazo";
                    </script>

                    <button onclick="pullgovsuggestion(m)" class="btn btn-link">
                        MUTUELLE
                    </button>
                    <button  onclick="pullgovsuggestion(g)"class="btn btn-link">
                        GIRINKA
                    </button>
                    <button onclick="pullgovsuggestion(u)" class="btn btn-link">
                        UMURENGE SACCO
                    </button>
                    <button onclick="pullgovsuggestion(vu)"class="btn btn-link">
                        VUP
                    </button>

                    <button onclick="pullgovsuggestion(ib)"class="btn btn-link">
                        IBIBAZO BY'ABATURAGE
                    </button>
                </div>
            </div>
            <div class="suggestpanel panel-default">
                <div class="panel-heading centerrowspace">
                    <h5>Suggestion Panel</h5>
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Send suggestions to the companies using different media">
                        <img class="info" src="images/ic_info_outline_black_18dp.png"/></a>
                </div>
                <div class="panel-body">
                    <p style="text-align: center">Send your suggestion to any company through the following means:</p>
                    <div class="centerrow">
                        <script>
                            var t = "text";
                            var i = "image";
                            var o = "audio";
                            var v = "video";
                        </script>
                        <img src="images/ic_format_strikethrough_black_24dp.png" id="addtext" style="cursor:pointer" onclick="addsuggestionmediadialog(t);">
                        <img class="image24" src="images/ic_image_black_24dp.png"id="addimage" style="cursor:pointer" onclick="addsuggestionmediadialog(i);" >
                        <img class="image24" src="images/ic_audiotrack_black_24dp.png" id="addaudio" style="cursor:pointer" onclick="addsuggestionmediadialog(o);">
                        <img class="image24" src="images/ic_ondemand_video_black_24dp.png" id="addvideo" style="cursor:pointer" onclick="addsuggestionmediadialog(v);">


                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="panel panel-default panel-shadow dialog showcommentsdialog">

    <div class="panel-heading centerrowspace">
        <div class="startrow">
            <img src="images/ic_account_circle_black_48dp.png"/>
            <span>Username username</span>
        </div>
        <span> <small><i>12:00am</i></small></span>


    </div>
    <div class="panel-body hasmedia">
        <div>
            <div class="post-item startcolstart">
                <div id="img-post" class="startcolstart">
                    <img class="fullimage"src="images/background1.svg"/>
                    <p>rftrvyvty vtyvytv ytv iygiygu gu ygyugy rftrvyvty vtyvytv ytv iygiygu gu ygyugy</p>
                </div>
            </div>

            <div class="post-item-comments startcolstart">

                <div class="startcolstart">
                    <div class="startrow">
                        <img src="images/ic_account_circle_black_48dp.png"/>
                        <span>Username username</span>
                    </div>
                    <p class="post-item-text">rftrvyvty vtyvytv ytv iygiygu gu ygyugy rftrvyvty vtyvytv ytv iygiygu gu ygyugy</p>
                </div>
                <div class="startcolstart">
                    <div class="startrow">
                        <img src="images/ic_account_circle_black_48dp.png"/>
                        <span>Username username</span>
                    </div>
                    <p class="post-item-text">rftrvyvty vtyvytv ytv iygiygu gu ygyugy rftrvyvty vtyvytv ytv iygiygu gu ygyugy</p>
                </div>
                <div class="startcolstart">
                    <div class="startrow">
                        <img src="images/ic_account_circle_black_48dp.png"/>
                        <span>Username username</span>
                    </div>
                    <p class="post-item-text">rftrvyvty vtyvytv ytv iygiygu gu ygyugy rftrvyvty vtyvytv ytv iygiygu gu ygyugy</p>
                </div>
                <div class="startcolstart">
                    <div class="startrow">
                        <img src="images/ic_account_circle_black_48dp.png"/>
                        <span>Username username</span>
                    </div>
                    <p class="post-item-text">rftrvyvty vtyvytv ytv iygiygu gu ygyugy rftrvyvty vtyvytv ytv iygiygu gu ygyugy</p>
                </div>
                <div class="startcolstart">
                    <div class="startrow">
                        <img src="images/ic_account_circle_black_48dp.png"/>
                        <span>Username username</span>
                    </div>
                    <p class="post-item-text">rftrvyvty vtyvytv ytv iygiygu gu ygyugy rftrvyvty vtyvytv ytv iygiygu gu ygyugy</p>


                </div>
                <div class="startcolstart">
                    <div class="startrow">
                        <img src="images/ic_account_circle_black_48dp.png"/>
                        <span>Username username</span>
                    </div>
                    <p class="post-item-text">rftrvyvty vtyvytv ytv iygiygu gu ygyugy rftrvyvty vtyvytv ytv iygiygu gu ygyugy</p>


                </div>
                <div class="startcolstart">
                    <div class="startrow">
                        <img src="images/ic_account_circle_black_48dp.png"/>
                        <span>Username username</span>
                    </div>
                    <p class="post-item-text">rftrvyvty vtyvytv ytv iygiygu gu ygyugy rftrvyvty vtyvytv ytv iygiygu gu ygyugy</p>


                </div>



            </div>

        </div>

    </div>
    <div class="panel-footer centerrowspacearound post-area">

        <input type="textarea" placeholder="Comment"/>
        <div id="sendmessage"> 
            <img src="images/ic_send_black_24dp.png" alt="send">  </a>
        </div>
    </div>
</div>

<div class="mediadialog dialog panel-shadow" style="display: none">
    <div class="post-recipient panel-heading centerrowspace">
        <b><h4>Post Image</h4></b><button class="btn btn-danger" onclick="pushdialogsuggestion();">&times;</button>
    </div>
    <div class="dragImagebox">
        <div class="chooseImageFromDevice centercolumn">
            <form id="main_page_post_image_2017_up_file_form" class="startcolcenter" style="width:100%; height: 200px;overflow-y: auto">
                <div class="govdialog-media">
                    <input onchange="upload_main_page_post_img_2017()" id="main_page_post_image_2017_file" type="file" class="btn btn-primary" placeholder="add video file"/>
                    <button class="btn btn-success"><i class="fa fa-camera"></i>&nbsp; add image</button>

                </div>
                <div>
                    <input id="main_page_post_image_2017_up_file_name" type="hidden" />
                    <span id="main_page_post_image_2017_up_file_msger"></span>
                </div>
                <div  style="width:100%; height:100%;overflow-y: scroll">
                    <img id="main_page_post_image_2017_up_file_preview" class="" />

                </div>
            </form>
        </div>
    </div>

    <div id="addimagecaption" class="centerrowspacearound post-area">
        <textarea type="textarea" class="form-control" id="main_page_post_image_2017_up_file_caption" onkeyup="enlarge(this)" onchange="enlarge(this)" placeholder='<?php
        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_35("system_config_xml/" . $_global_language)->item(0)->textContent)) {
            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_35("system_config_xml/" . $_global_language)->item(0)->textContent;
        } else {
            ?>
                      Comment
                  <?php } ?>'></textarea>
        <div id="sendmessage"> 
            <img src="images/ic_send_black_24dp.png" onclick="main_page_send_img_post()" alt="<?php
            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_29("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_29("system_config_xml/" . $_global_language)->item(0)->textContent;
            } else {
                ?>
                     Send
                 <?php } ?>"/>  
        </div>
    </div>
</div>

<div class="imagedialog dialog">
    <div class="post-recipient panel-heading centerrowspace">
        <b><h4>Suggestion box</h4></b><button class="btn btn-danger" onclick="pushdialogsuggestion();">&times;</button>
    </div>
    <div class="post-recipient centerrow">
        <input class="my-form-control search" id="main_page_find_the_companies_reg" onkeyup="main_page_suggest_to_community_view_all_bySearch(this)" placeholder="<?php
        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_48("system_config_xml/" . $_global_language)->item(0)->textContent)) {
            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_48("system_config_xml/" . $_global_language)->item(0)->textContent;
        } else {
            ?>
                   Search a company Or type in a new company
               <?php } ?>" type="text"/>

        <input class="btn btn-info" onclick="main_page_suggest_to_community_view_all('image')" type="button" value="<?php
        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_49("system_config_xml/" . $_global_language)->item(0)->textContent)) {
            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_49("system_config_xml/" . $_global_language)->item(0)->textContent;
        } else {
            ?>
                   View All
               <?php } ?>" style="width:15%; height: 48px" />
    </div>

    <div class="post-search-dropdown" id="mainpage_suggest_image_search_company_results" style="visibility:hidden;">
        <span type="button" class="btn btn-danger image24 centerrow" onclick="main_page_hide_search_company_results('image')">&times;</span>

        <div id="mainpage_suggest_image_search_company_results_data" style="max-height: 350px; margin: 2px 4px">
        </div>
        <input type="hidden" id="mainpage_id_of_selected_company_suggestion_box" />
    </div>                    
    <div id="image_0">
        <input type="hidden" value="" id="main_page_image_company_preview_data_id" />
        <div id="main_page_image_company_preview_data">

        </div>
        <div class="dragImagebox">
            <div class="chooseImageFromDevice startcolcenter">

                <form id="main_page_suggest_img_form_2017">
                    <div class="govdialog-media">
                        <input onchange="upload_mainpage_img_suggest()" id="main_page_suggest_img_form_2017_file" type="file" class="btn" placeholder="add image"/>
                        <button class="btn btn-success"><i class="fa fa-image"></i>&nbsp; add image </button>

                    </div>
                    <label id="mainpage_community_suggest_img_msg"></label>
                </form>
                <div class="row" style="width: 100%; height: 300px; overflow-y: auto" >
                    <div id="main_page_community_suggest_IMG_clouds" style="width: 100%; height: 200px;" class="container-fluid">

                    </div>
                </div>

            </div>
        </div>
        <div id="addimagecaption" class="centerrowspacearound post-area" >
            <textarea type="textarea" class="form-control" id="main_pagee_community_suggest_an_Image_2017_caption" onkeyup="enlarge(this)" onchange="enlarge(this)" placeholder='<?php
            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_55("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_55("system_config_xml/" . $_global_language)->item(0)->textContent;
            } else {
                ?>
                          Your caption
                      <?php } ?>'></textarea>


            <div id="sendmessage"> 
                <img src="images/ic_send_black_24dp.png" onclick="main_page_send_this_suggestionToTheCompany('image')" class="image24" type="button" alt="<?php
                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_51("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_51("system_config_xml/" . $_global_language)->item(0)->textContent;
                } else {
                    ?>
                         Send
                     <?php } ?>">  
            </div>
        </div>
    </div>
</div>

<div class="videodialog dialog">
    <div class="post-recipient panel-heading centerrowspace">
        <b><h4>Suggestion box</h4></b><button class="btn btn-danger" onclick="pushdialogsuggestion();">&times;</button>
    </div>
    <div class="post-recipient centerrow">
        <input class="my-form-control search" id="main_page_find_the_companies_reg" onkeyup="main_page_suggest_to_community_view_all_bySearch(this)" placeholder="<?php
        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_48("system_config_xml/" . $_global_language)->item(0)->textContent)) {
            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_48("system_config_xml/" . $_global_language)->item(0)->textContent;
        } else {
            ?>
                   Search a company Or type in a new company
               <?php } ?>" type="text"/>

        <input class="btn btn-info" onclick="main_page_suggest_to_community_view_all('video')" type="button" value="<?php
        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_49("system_config_xml/" . $_global_language)->item(0)->textContent)) {
            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_49("system_config_xml/" . $_global_language)->item(0)->textContent;
        } else {
            ?>
                   View All
               <?php } ?>" style="width:15%; height: 48px" />
    </div>

    <div class="post-search-dropdown" id="mainpage_suggest_video_search_company_results" style="visibility:hidden;">
        <span type="button" class="btn btn-danger image24 centerrow" onclick="main_page_hide_search_company_results('video')">&times;</span>

        <div id="mainpage_suggest_video_search_company_results_data" style="max-height: 350px;  margin: 2px 4px">
        </div>
        <input type="hidden" id="mainpage_id_of_selected_company_suggestion_box" />
    </div>
    <div id="video_0">
        <input type="hidden" value="" id="main_page_video_company_preview_data_id" />
        <div id="main_page_video_company_preview_data">

        </div>
        <div class="dragImagebox">
            <div class="chooseImageFromDevice startcolcenter">

                <form id="main_page_community_suggest_video_2017_form">
                    <div class="govdialog-media">
                        <input onchange="upload_mainpage_video_suggest()" id="main_page_community_suggest_video_2017_form_file" type="file" class="btn btn-primary" placeholder="add video file"/>
                        <button class="btn btn-success"><i class="fa fa-camera"></i>&nbsp; add video</button>

                    </div>
                    <label id="main_page_community_suggest_video_2017_form_file_msg"></label>
                    <input type="hidden" id="main_page_community_suggest_video_2017_form_file_val" />
                </form>
                <div class="row" style="width: 100%; height: 300px; overflow-y: scroll">
                    <div id="main_page_community_suggest_video_clouds" class="container-fluid">

                    </div>
                </div>

            </div>
        </div>
        <div id="addimagecaption" class="centerrowspacearound post-area">

            <textarea type="textarea" class="form-control" id="main_page_community_suggest_video_caption" onkeyup="enlarge(this)" onchange="enlarge(this)" placeholder='<?php
            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_55("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_55("system_config_xml/" . $_global_language)->item(0)->textContent;
            } else {
                ?>
                          Your caption
                      <?php } ?>'></textarea>

            <div id="sendmessage"> 

                <img src="images/ic_send_black_24dp.png" id="main_page_community_suggest_video_caption" alt="<?php
                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_51("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_51("system_config_xml/" . $_global_language)->item(0)->textContent;
                } else {
                    ?>
                         Send
                     <?php } ?>" class="image24" onclick="main_page_send_this_suggestionToTheCompany('video')">  
            </div>
        </div>
    </div>

</div>
<div class="audiodialog dialog">
    <div class="post-recipient panel-heading centerrowspace">
        <b><h4>Suggestion box</h4></b><button class="btn btn-danger" onclick="pushdialogsuggestion();">&times;</button>
    </div>
    <div class="post-recipient centerrow">
        <input class="my-form-control search" id="main_page_find_the_companies_reg" onkeyup="main_page_suggest_to_community_view_all_bySearch(this)" placeholder="<?php
        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_48("system_config_xml/" . $_global_language)->item(0)->textContent)) {
            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_48("system_config_xml/" . $_global_language)->item(0)->textContent;
        } else {
            ?>
                   Search a company Or type in a new company
               <?php } ?>" type="text"/>

        <input class="btn btn-info" onclick="main_page_suggest_to_community_view_all('audio')" type="button" value="<?php
        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_49("system_config_xml/" . $_global_language)->item(0)->textContent)) {
            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_49("system_config_xml/" . $_global_language)->item(0)->textContent;
        } else {
            ?>
                   View All
               <?php } ?>" style="width:15%; height: 48px" />
    </div>

    <div class="post-search-dropdown" id="mainpage_suggest_audio_search_company_results" style="visibility:hidden;">
        <span type="button" class="btn btn-danger image24 centerrow" onclick="main_page_hide_search_company_results('audio')">&times;</span>

        <div id="mainpage_suggest_audio_search_company_results_data" style="max-height: 350px;  margin: 2px 4px">
        </div>
        <input type="hidden" id="mainpage_id_of_selected_company_suggestion_box" />
    </div>
    <div id="audio_0">
        <input type="hidden" value="" id="main_page_audio_company_preview_data_id" />
        <div id="main_page_audio_company_preview_data">

        </div>
        <div class="dragImagebox">
            <div class="chooseImageFromDevice startcolcenter">

                <form id="main_page_community_suggest_audio_2017">
                    <div class="govdialog-media">
                        <input onchange="upload_mainpage_audio_suggest()" type="file" id="main_page_community_suggest_audio_2017_file" class="btn btn-primary" placeholder="add audio file"/>
                        <button class="btn btn-success"><i class="fa fa-image"></i>&nbsp; add audio file </button>

                    </div>
                    <label id="main_page_community_suggest_audio_2017_file_msg">                                            
                    </label>
                    <input type="hidden" id="main_page_community_suggest_audio_2017_file_val"/>
                </form>
                <div class="row" style="width: 100%; height: 300px; overflow-y: scroll">
                    <div id="main_page_community_suggested_audio_2017_preview" class="container-fluid">


                    </div>
                </div>

            </div>
        </div>
        <div id="addimagecaption" class="centerrowspacearound post-area">

            <textarea type="textarea" class="form-control" id="main_page_community_suggest_audio_2017_we" onkeyup="enlarge(this)" onchange="enlarge(this)" placeholder='<?php
            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_55("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_55("system_config_xml/" . $_global_language)->item(0)->textContent;
            } else {
                ?>
                          Your caption
                      <?php } ?>'></textarea>


            <div id="sendmessage"> 
                <img src="images/ic_send_black_24dp.png" onclick="main_page_send_this_suggestionToTheCompany('audio')" class="image24" type="button" alt="<?php
                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_51("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_51("system_config_xml/" . $_global_language)->item(0)->textContent;
                } else {
                    ?>
                         Send
                     <?php } ?>">  
            </div>
        </div>
    </div>
</div>
<div class="sitecover startcolcenter">

    <div class="textdialog dialog">
        <div class="post-recipient panel-heading centerrowspace">
            <b><h4>Suggestion box</h4></b><button class="btn btn-danger" onclick="pushdialogsuggestion();">&times;</button>
        </div>
        <div class="post-recipient centerrow">
            <input class="my-form-control search" id="main_page_find_the_companies_reg" onkeyup="main_page_suggest_to_community_view_all_bySearch(this)" placeholder="<?php
            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_48("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_48("system_config_xml/" . $_global_language)->item(0)->textContent;
            } else {
                ?>
                       Search a company Or type in a new company
                   <?php } ?>" type="text"/>

            <button class="btn btn-info" onclick="main_page_suggest_to_community_view_all('text')" type="button" style="width:15%; height: 48px" ><?php
                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_49("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_49("system_config_xml/" . $_global_language)->item(0)->textContent;
                } else {
                    ?>
                    View All
                <?php } ?></button>
        </div>
        <div class="post-search-dropdown" id="mainpage_suggest_text_search_company_results" style="visibility:hidden;">
            <span type="button" class="btn btn-danger image24 centerrow" onclick="main_page_hide_search_company_results('text')">&times;</span>

            <div id="mainpage_suggest_text_search_company_results_data" style="max-height: 350px;  margin: 2px 4px">
            </div>
            <input type="hidden" id="mainpage_id_of_selected_company_suggestion_box" />
        </div>                    
        <div id="text_0">
            <div class="dragImagebox">
                <input type="hidden" value="" id="main_page_text_company_preview_data_id" />
                <div class="chooseImageFromDevice startcolstart container-fluid">                   
                    <div id="main_page_text_company_preview_data" class="startcolstart container" style="width:95%;">
                    </div>
                </div>
            </div>
            <div id="addimagecaption" class="centerrowspacearound post-area">
                <textarea type="textarea" class="form-control" id="main_page_community_suggest_To_text2017" onkeyup="enlarge(this)" onchange="enlarge(this)" placeholder='<?php
                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_50("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_50("system_config_xml/" . $_global_language)->item(0)->textContent;
                } else {
                    ?>
                              Your question
                          <?php } ?>'></textarea>

                <div id="sendmessage"> 
                    <img src="images/ic_send_black_24dp.png" class="image24" alt="send" onclick="main_page_send_this_suggestionToTheCompany('text')" type="button" alt="<?php
                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_51("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_51("system_config_xml/" . $_global_language)->item(0)->textContent;
                    } else {
                        ?>
                             Send
                         <?php } ?>"> 
                </div>
            </div>
        </div>
    </div>
</div>
<div class="govdialog dialog startcolcenter panel-shadow">
    <div class="post-recipient panel-heading centerrowspace" >
        <b><h4>Rwanda Governance Board</h4></b><button class="btn btn-danger" onclick="pushgovsuggestion();">&times;</button>
    </div>

    <div class="dragImagebox">
        <div class="chooseImageFromDevice centercolumn">
            <h2 class="govdialog-issue" style="text-align: center"></h2>
        </div>
    </div>
    <div id="addimagecaption" class="centerrowspacearound post-area" >
        <div class="startrowstart container">





            <textarea type="textarea" class="form-control" id="main_page_rgb_ask_question_2017" onkeyup="enlarge(this)" onchange="enlarge(this)" placeholder='<?php
            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_38("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_38("system_config_xml/" . $_global_language)->item(0)->textContent;
            } else {
                ?>Your question here<?php } ?>'></textarea>
            <div id="sendmessage"> 
                <button onclick="main_page_rgb_ask_question()" class="btn btn-primary" type="button" value="<?php
                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_39("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_39("system_config_xml/" . $_global_language)->item(0)->textContent;
                        } else {
                            ?>
                            Send
                        <?php } ?>" ><?php
                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_39("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_39("system_config_xml/" . $_global_language)->item(0)->textContent;
                            } else {
                                ?>
                        Send
                    <?php } ?></button>
            </div>
        </div>
    </div>
</div>

<?php
require_once ("includes/app_footer.php");
?>


</body>
</html>
