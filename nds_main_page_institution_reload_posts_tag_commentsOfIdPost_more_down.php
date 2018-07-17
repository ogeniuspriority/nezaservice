<?php
session_start();
require_once ("includes/conn/config.php");
require_once ("includes/classes/database.php");
require_once ("includes/classes/settingsReadFile.php");
require_once "includes/functions.php";
require_once "includes/timeToSec.php";

///--------------THE POST ID
$main_page_the_postId_2017 = $_POST['NdsPostId'];
$main_page_more_down = $_POST['last_id_comment'];
$main_page_more_down = $main_page_more_down - 20;
if ($main_page_more_down < 0) {
    $main_page_more_down = 0;
}
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
 AND ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_id>='{$main_page_more_down}'
 AND  ogenius_nds_db_community_posts_comments_active_status='0'
  ORDER BY ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_id DESC LIMIT 20";
//-------------------the apparent divs
?>
<div id=''>
    <?php
    if ($query_main_page_posts_comments = $database->query($sql_main_page_posts_comments)) {
        //---------------------
        $main_page_cmmnens_c = 0;
        while ($res_main_page_posts_comments = mysqli_fetch_array($query_main_page_posts_comments)) {
            $theCommentIf_2017 = $res_main_page_posts_comments['ogenius_nds_db_community_posts_comments_id'];
            if ($main_page_cmmnens_c == 0) {
                ?>
                <img class='' onclick="main_page_institution_posts_comments_refresh_up(<?php echo "" . $main_page_the_postId_2017; ?>, this)" src="images/up_new_load.png" style="cursor:hand;margin-left:40%;width: 30px;height: 30px;border-radius: 5px;box-shadow: 2px 2px 2px gray;border-top: 1px solid gray;border-left: 1px solid gray;" />
                <?php
                echo "<input type='hidden' value='$theCommentIf_2017' id='mainpage_institution_first_comment_id' />";
            }
            ?>
            <div class="startcolstart" style="width:95%">
                <div class="startrowspace">
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
            echo "<input type='hidden' value='$theCommentIf_2017' id='mainpage_institution_last_comment_id' />";
            ?>
            <br/>
            <img class='' onclick="main_page_institution_posts_comments_refresh_down(<?php echo "" . $main_page_the_postId_2017; ?>, this)" src="images/down_new_load.png" style="cursor:hand;margin-left:40%;width: 30px;height: 30px;border-radius: 5px;box-shadow: 2px 2px 2px gray;border-top: 1px solid gray;border-left: 1px solid gray;" />

            <br/>
            <?php
        }
    }
    ?>
</div>