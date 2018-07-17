 <?php
//--bring the language--------------------------
require_once ("../includes/conn/config.php");
require_once ("../includes/classes/database.php");
require_once ("../includes/classes/settingsReadFile.php");
//---------------

    if (isset($_SESSION["ogenius_nds_user_id_x2309999_990"])) {
        //--------if not set choose my chosen language here----------------------
        $id_link = $_SESSION["ogenius_nds_user_id_x2309999_990"];
        $sqllanguage_tools_link = "SELECT * FROM  ogenius_nds_languages_for_settings_language_user_link WHERE ogenius_nds_languages_for_settings_language_user_link_id_user='{$id_link}'     ";
        if ($querylanguage_tools_link = $database -> query($sqllanguage_tools_link)) {
            //---------------------
            while ($res_lan_link = mysqli_fetch_array($querylanguage_tools_link)) {
                //-----------------------------------------------------
                $language_id_0 = $res_lan_link['ogenius_nds_languages_for_settings_language_user_link_id_languag'];
                //-------------------Find the language name----------------
                $sqllanguage_tools_link_lang = "SELECT * FROM  ogenius_nds_languages_for_settings WHERE ogenius_nds_languages_for_settings_id='{$language_id_0}'";
                if ($querylanguage_tools_link_lang = $database -> query($sqllanguage_tools_link_lang)) {
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
if(isset($_SESSION["NDS_OGENIUS_session_lan"])){

$_global_language = "nothing";
    ?>
    <?php
    $thelan_09 = $_SESSION["NDS_OGENIUS_session_lan"];
    $sqllanguage_tools = "SELECT * FROM  ogenius_nds_languages_for_settings WHERE ogenius_nds_languages_for_settings_name_of_language='{$thelan_09}'";
    if ($querylanguage_tools = $database -> query($sqllanguage_tools)) {
        //---------------------
        while ($res_lan = mysqli_fetch_array($querylanguage_tools)) {
            $_global_language = $res_lan['ogenius_nds_languages_for_settings_language_file_name'];
            $_SESSION["NDS_OGENIUS_session_lan"] = $_global_language;

        }
    }

    }else{

    //--bring the language--------------------------
    require_once ("../includes/conn/config.php");
    require_once ("../includes/classes/database.php");
    require_once ("../includes/classes/settingsReadFile.php");
    //---------------
    $_global_language = "nothing";
    ?>
    <?php
    $sqllanguage_tools = "SELECT * FROM  ogenius_nds_languages_for_settings WHERE ogenius_nds_languages_for_settings_name_of_language='English'";
    if ($querylanguage_tools = $database -> query($sqllanguage_tools)) {
        //---------------------
        while ($res_lan = mysqli_fetch_array($querylanguage_tools)) {
            $_global_language = $res_lan['ogenius_nds_languages_for_settings_language_file_name'];

        }
    }

    }
    //---Declare the settings class to hold all The keywords--
    $NDS_OGENIUS_MAIN_settings = new myXML_CED_Settings("./system_config_xml/" . $_global_language);
    ?>
<div style="padding: 20px;border:1px solid gray; border-radius: 8px;">
                <?php
                //---------All my posts container
                  ?><br />
                  
                  <?php
                require_once ("../includes/conn/config.php");
                  ?>
                  <?php
                require_once ("../includes/classes/database.php");
                require_once "../includes/functions.php";
                require_once "../includes/timeToSec.php";
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
                if ($query_Posts = $database -> query($sql_Posts)) {
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
            ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id          
             FROM ogenius_nds_db_community_posts_comments
            LEFT JOIN ogenius_nds_db_normal_users
            ON ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_commentator_id=ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id
WHERE   ogenius_nds_db_community_posts_comments_posts_post_id='{$id_post}'   ORDER BY 
    ogenius_nds_db_community_posts_comments_regdate DESC LIMIT 60


";

                        if ($query_Posts_Comments = $database -> query($sql_Posts_Comments)) {
                            while ($res_ = mysqli_fetch_array($query_Posts_Comments)) {
                                $posts_Info_Comments[] = $res_;
                            }

                        }
                        //---------COMMENTS COUNT
                        $sql_Posts_Comments_COUNT = "SELECT COUNT(*) AS All_Attached_Comments FROM ogenius_nds_db_community_posts_comments WHERE
ogenius_nds_db_community_posts_comments_posts_post_id='{$id_post}'";

                        if ($query_Posts_Comments_COUNT = $database -> query($sql_Posts_Comments_COUNT)) {
                            while ($res__COUNT = mysqli_fetch_array($query_Posts_Comments_COUNT)) {
                                $posts_Info_Comments_COUNT[] = $res__COUNT;
                            }

                        }
                        //---likes_COUNT
                        $sql_Posts_likes_COUNT = "SELECT COUNT(*) AS LikeCompilations  FROM ogenius_nds_db_community_posts_i_flags   WHERE
ogenius_nds_db_community_posts_i_flags_post_id='{$id_post}'
AND ogenius_nds_db_community_posts_i_flags_like_status='1'";

                        if ($query_Posts_likes_COUNT = $database -> query($sql_Posts_likes_COUNT)) {
                            while ($res_likes_COUNT = mysqli_fetch_array($query_Posts_likes_COUNT)) {
                                $posts_Info_likes_COUNT[] = $res_likes_COUNT;
                            }

                        }
                        //---UNLIKE COUNT
                        $sql_Posts_un_likes_COUNT = "SELECT COUNT(*) AS UnLikeCompilations FROM ogenius_nds_db_community_posts_i_flags   WHERE
ogenius_nds_db_community_posts_i_flags_post_id='{$id_post}'
AND ogenius_nds_db_community_posts_i_flags_like_status='2'";

                        if ($query_Posts_un_likes_COUNT = $database -> query($sql_Posts_un_likes_COUNT)) {
                            while ($res_un_likes_COUNT = mysqli_fetch_array($query_Posts_un_likes_COUNT)) {
                                $posts_Info_likes_un_COUNT[] = $res_un_likes_COUNT;
                            }

                        }
                        //---
                        //---USERS TABLE
                        $sql_USERS = "SELECT * FROM ogenius_nds_db_normal_users   WHERE
ogenius_nds_db_normal_users_id='{$id_poster}' 
";

                        if ($query_USERS = $database -> query($sql_USERS)) {
                            while ($res_USERS = mysqli_fetch_array($query_USERS)) {
                                $posts_USERS[] = $res_USERS;
                            }

                        }
                        $posts_Info[] = $res_Posts;
                        //--

                    }

                }

                /*print("{\"posts\":" . json_encode($posts_Info) . "}");
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
                 print("--cyuma2017--");*/
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
                $check_2017_myposts_all_data=0;
                //------------last and first ids
                
                for ($i_mainPage_posts = 0; $i_mainPage_posts < $main_page_common_user_posts_count; $i_mainPage_posts++) {
                    //echo "<p>" . $books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_email'] . "</p>";
                      if($check_2017_myposts_all_data==0){
                          
                          echo "<input type='hidden' value='".$books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']."' id='main_page_post_first_id'/>";
                          
                      }else if($check_2017_myposts_all_data==($main_page_common_user_posts_count-1)){
                          echo "<input type='hidden' value='".$books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']."' id='main_page_post_last_id'/>";
                          
                      }
                      
                    
                    
                    $check_2017_myposts_all_data++;
                    
                  
                     ?> 
                     
                     <div style="margin-top:5px;padding: 5px;box-shadow:2px 2px 2px #cdcdcd;border-radius: 5px;border: 1px solid #CDCDCD">
                    <table style="margin-left: 4%;">
                        <tr>
                            <td><img src="uploaded_images/<?php echo "" . $books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_avatar']; ?>" style="width: 70px;height: 70px" /></td>
                            <td><h4 style="color: #0080FF;margin-top: -20px;"><label><?php echo "" . $books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_names']; ?></label></br><label><?php
                                if($books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_user_vip_tag']==2){
                                if(!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_30("system_config_xml/" . $_global_language)->item(0)-> textContent)){
                                  echo "".$NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_30("system_config_xml/" . $_global_language)->item(0)-> textContent;
                                }else{
                                ?>  ogenius_nds_db_normal_users_user_vip_tag
                                <?php } ?>: <?php echo "" . ($books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_user_vip_tag'] == 2) ? $books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_position'] : "";
                                    }
                                ?>
                    </label></h4></td>
                            <td>
                            <div style="margin-left:300px;">
                                <label><?php echo "" . time_to_sec($books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_regdate']); ?> ago</label>
                            </div></td>
                        </tr>
                    </table>
                    <div style="width: 80%;margin-left: 4%;color: black;<?php echo "".($books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_posts_caption']=="")?"":"overflow-x: scroll" ?>" >
                        <?php echo "" . formatImagesInText_withCaption(activateUrlStringsw($books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_postdata']), $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_posts_caption']); ?>
                        
                    </div>
                    <table class="likeTr" style="margin-left: 4%;">
                        <tr>
                            <td><h6><?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_views']; ?> <?php
                                if(!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_31("system_config_xml/" . $_global_language)->item(0)-> textContent)){
                                  echo "".$NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_31("system_config_xml/" . $_global_language)->item(0)-> textContent;
                                }else{
                                ?>
                  views
                        
                                <?php } ?></h6></td>
                            <td><h6><?php echo "" . $books_main_page_comments_likes_count[$i_mainPage_posts]['LikeCompilations']; ?> <?php
                                if(!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_32("system_config_xml/" . $_global_language)->item(0)-> textContent)){
                                  echo "".$NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_32("system_config_xml/" . $_global_language)->item(0)-> textContent;
                                }else{
                                ?>
                   likes
                                <?php } ?></h6></td>
                            <td><h6><?php echo "" . $books_main_page_comments_unlikes_count[$i_mainPage_posts]['UnLikeCompilations']; ?> <?php
                                if(!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_33("system_config_xml/" . $_global_language)->item(0)-> textContent)){
                                  echo "".$NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_33("system_config_xml/" . $_global_language)->item(0)-> textContent;
                                }else{
                                ?>
                   unlikes
                                <?php } ?></h6></td>
                            <td><h6><?php echo "" . $books_main_page_comments_stream_count[$i_mainPage_posts]['All_Attached_Comments']; ?> <?php
                                if(!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_34("system_config_xml/" . $_global_language)->item(0)-> textContent)){
                                  echo "".$NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_34("system_config_xml/" . $_global_language)->item(0)-> textContent;
                                }else{
                                ?>
                   comments
                                <?php } ?></h6></td>
                        </tr>
                    </table>
                    <table class="likeTr" style="margin-left: 4%;">
                        <tr>
                            <td><img id="a<?php echo "$i_mainPage_posts" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>" onclick="main_page_flag_this_post(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>)" src="images/flag_this_00.png" style="width: 20px;height: 20px;" /></td>
                            <td><img id="b<?php echo "$i_mainPage_posts" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>" onclick="main_page_like_this_post(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>)" src="images/ic_thumb_up_black_48dp1.png" style="width: 20px;height: 20px;" /></td>
                            <td><img id="c<?php echo "$i_mainPage_posts" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>"onclick="main_page_unlike_this_post(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>)" src="images/ic_thumb_down_black_48dp1.png" style="width: 20px;height: 20px;" /></td>
                            <td><img onclick="main_page_decollapse_this_comment(this)" name="main_page_comments_collapsible<?php echo "" . $i_mainPage_posts; ?>" id="d<?php echo "$i_mainPage_posts" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>" onclick="main_page_toggle_comment_of_this_post(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>)" src="images/ic_chat_black_48dp.png" style="width: 20px;height: 20px;" /></td>

                        </tr>
                    </table>
                    <div class="scrolls" style="margin-left: 10%;max-height: 240px;overflow-y: scroll;border-radius: 4px;">
                        <div> <!--New...--></div>
                        <div class="main_page_collapsibles_2017"  id="main_page_comments_collapsible<?php echo "" . $i_mainPage_posts; ?>">
                            <?php
                            ///--------------THE POST ID
                            $main_page_the_postId_2017=$books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id'];
                            require_once ("includes/conn/config.php");
                            require_once ("includes/classes/database.php");
                            //--------select the comments individually according to the id of the posts
                            $sql_main_page_posts_comments = "SELECT 
ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_comment,
ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_regdate,
ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_id,
ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_posts_post_id,
ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_avatar,
ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_names,
ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id

 FROM ogenius_nds_db_community_posts_comments INNER JOIN ogenius_nds_db_normal_users
 ON ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_commentator_id=ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id
 WHERE ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_posts_post_id='{$main_page_the_postId_2017}'
  ORDER BY ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_id DESC LIMIT 20";
                            if ($query_main_page_posts_comments = $database -> query($sql_main_page_posts_comments)) {
                                //---------------------
                                $main_page_cmmnens_c=0;
                                while ($res_main_page_posts_comments = mysqli_fetch_array($query_main_page_posts_comments)) {
                                     $theCommentIf_2017=$res_main_page_posts_comments['ogenius_nds_db_community_posts_comments_id'];  
                                    if($main_page_cmmnens_c==0){
                                        echo "<input type='hidden' value='$theCommentIf_2017' id='mainpage_first_comment_id' />";
                                    }else if($main_page_cmmnens_c==(count($res_main_page_posts_comments)-1)){
                                        echo "<input type='hidden' value='$theCommentIf_2017' id='mainpage_last_comment_id' />";
                                    }
                                    
                                    ?>
                                     <table style="border-bottom: 1px solid gray;">
                            <td style="width: auto">
                                <div><?php echo "" . $res_main_page_posts_comments['ogenius_nds_db_normal_users_names']; ?></div>
                                <img src="uploaded_images/<?php echo "" . $res_main_page_posts_comments['ogenius_nds_db_normal_users_avatar']; ?>" style="width: 70px;height: 70px;" /></td>
                            <td style="width: 80%">
                            <div style="text-align: left;">
                                <?php echo "" . activateUrlStringsw($res_main_page_posts_comments['ogenius_nds_db_community_posts_comments_comment']); ?>                            
                            </div></td>
                            <td><h6 style="font-size: 10px;"><?php echo "" . time_to_sec($res_main_page_posts_comments['ogenius_nds_db_community_posts_comments_regdate']); ?></h6></td>
                        </table>
                                    
                                    <?php
                                    $main_page_cmmnens_c++;
                                    }
                                    }
                             ?>
                       
                      </div>
                        <div> <!--More...--></div>

                    </div>
                    <table style="margin-left: 4%;">
                        <tr>
                            <td>                            <textarea id="<?php echo "commentOnMe" . $i_mainPage_posts; ?>" onkeyup="textAreaAdjust(this)" class="accountRegPuts" placeholder='<?php
                                if(!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_35("system_config_xml/" . $_global_language)->item(0)-> textContent)){
                                  echo "".$NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_35("system_config_xml/" . $_global_language)->item(0)-> textContent;
                                }else{
                                ?>
                   Comment
                                <?php } ?>' style="margin-top:20px;width:400px;border-radius: 7px;"></textarea></td>
                            <td>
                            <input title="<?php echo "commentOnMe" . $i_mainPage_posts; ?>"  onclick="main_page_send_comment(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>,<?php echo "commentOnMe" . $i_mainPage_posts; ?>)"  type="button" value="Send" style="background:blue;color: white;border: 1px solid blue; " />
                            </td>
                        </tr>
                    </table>
                    </div>
                                 
                    <?php
                    }

                    if($check_2017_myposts_all_data==0){

                    echo "<h4>No posts inside!</h4>";

                    }
     ?>
                
                
                </div>  