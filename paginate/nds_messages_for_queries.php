<?php
session_start();
$common_user_settings_the_id = $_SESSION["ogenius_nds_user_id_x2309999_990"];
include ("../includes/functions.php");
require_once ("../includes/conn/config.php");
require_once ("../includes/classes/database.php");
require_once ("../includes/timeToSec.php");
if (renderTellIfCommonUser($common_user_settings_the_id)) {
    $limit = 5;
    if (isset($_GET["page"])) {
        $page = $_GET["page"];
    } else {
        $page = 1;
    };
    $start_from = ($page - 1) * $limit;
    $theUserId = $_GET['userId'];
    $common_user_settings_the_id = $theUserId;
    ?>


    <?php
//--------------Select All Active batches--

    $pieceOfCode = " 
                        AND ogenius_nds_db_rgb_query_query_provider='{$theUserId}'
                        ORDER BY ogenius_nds_db_rgb_query_id DESC";

    $otherPiece = " LIMIT $start_from, $limit";





    $sql_select_img_batch = "SELECT * FROM ogenius_nds_db_rgb_query LEFT JOIN ogenius_nds_db_normal_users
        ON ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_query_provider=ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id
         
                        WHERE   7>2 $pieceOfCode" . $otherPiece;
    $n_batch = 0;
    $cunn = 0;
    if ($query_select_img_batch = $database->query($sql_select_img_batch)) {
        while ($res_queries = mysqli_fetch_array($query_select_img_batch)) {
            ?>

            <div  class="message_collapse" >
                <div class="panel-collapse">
                    <?php ?>
                    <div class="message_record" title="<?php echo "" . $res_queries['ogenius_nds_db_rgb_query_id']; ?>" onclick="Messages_pop_all(this, 'query')" id="<?php echo"fdgdgd" . rand(0, 500) . $cunn; ?>">
                        <div class="startrowspace message-item" style="background-color: rgba(0,0,0,.2)" >
                            <?php
                            if ($res_queries['ogenius_nds_db_normal_users_api_log_face_goo_id'] < 1) {
                                ?>
                                <div>
                                    <img i src="uploaded_images/<?php echo "" . (!empty($res_queries['ogenius_nds_db_normal_users_avatar'])) ? $res_queries['ogenius_nds_db_normal_users_avatar'] : "nds_avatar.png"; ?>"  class="image48" />
                                </div>
                            <?php } else { ?>
                                <div>
                                    <img  src="<?php
                                    if (!empty($res_queries['ogenius_nds_db_normal_users_avatar'])) {
                                        echo "" . (strlen($res_queries['ogenius_nds_db_normal_users_avatar']) > 26) ? $res_queries['ogenius_nds_db_normal_users_avatar'] : "uploaded_images/" . $res_queries['ogenius_nds_db_normal_users_avatar'];
                                    } else {
                                        echo "" . "uploaded_images/" . "nds_avatar.png";
                                    }
                                    ?>" class="image48"/>
                                </div>

                            <?php } ?>   

                            <div class="startrowstart" style="height: 64px; margin: 2px 4px; overflow:hidden">
                                <p style="text-align: left">
                                    <?php echo "" . formatImagesInText($res_queries['ogenius_nds_db_rgb_query_query']); ?>
                                </p>
                            </div>
                            <div style="text-align: right">
                                <span><?php echo "" . time_to_sec($res_queries['ogenius_nds_db_rgb_query_date']); ?></span>
                                <?php if (returnNumberOfUnreadCommentsForthisQuery($res_queries['ogenius_nds_db_rgb_query_id'], 'query', $common_user_settings_the_id) > 0) {
                                    ?> <span class="badge" style="background-color: #0044cc"><?php echo "" . returnNumberOfUnreadCommentsForthisQuery($res_queries['ogenius_nds_db_rgb_query_id'], 'query', $common_user_settings_the_id); ?></span>
                                <?php } else {
                                    ?>
                                    <span class="badge"><?php echo "" . returnNumberOfUnreadCommentsForthisQuery($res_queries['ogenius_nds_db_rgb_query_id'], 'query', $common_user_settings_the_id); ?></span>
                                <?php }
                                ?>
                            </div>

                        </div>
                    </div>

                    <?php ?>
                </div>

            </div>

            <?php
            $cunn++;
        }
    }
} else {
    if ($_GET['insti'] == "rgb") {
        $limit = 5;
        if (isset($_GET["page"])) {
            $page = $_GET["page"];
        } else {
            $page = 1;
        };
        $start_from = ($page - 1) * $limit;
        $theUserId = $_GET['userId'];
        $common_user_settings_the_id = $theUserId;
        ?>


        <?php
//--------------Select All Active batches--
        $theAcId = renderTheSuggestionBoxIdAsInstitutionOrOfficial__($theUserId);
        $pieceOfCode = " 
                        ORDER BY ogenius_nds_db_rgb_query_id DESC";

        $otherPiece = " LIMIT $start_from, $limit";





        $sql_select_img_batch = "SELECT * FROM ogenius_nds_db_rgb_query LEFT JOIN ogenius_nds_db_normal_users
        ON ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_query_provider=ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id
         
                        WHERE   7>2 $pieceOfCode" . $otherPiece;
        $n_batch = 0;
        $cunn = 0;
        if ($query_select_img_batch = $database->query($sql_select_img_batch)) {
            while ($res_queries = mysqli_fetch_array($query_select_img_batch)) {
                ?>

                <div  class="message_collapse" >
                    <div class="panel-collapse">
                        <?php ?>
                        <div class="message_record" title="<?php echo "" . $res_queries['ogenius_nds_db_rgb_query_id']; ?>" onclick="Messages_pop_all(this, 'query')" id="<?php echo"fdgdgd" . rand(0, 500) . $cunn; ?>">
                            <div class="startrowspace message-item" style="background-color: rgba(0,0,0,.2)" >
                                <?php
                                if ($res_queries['ogenius_nds_db_normal_users_api_log_face_goo_id'] < 1) {
                                    ?>
                                    <div>
                                        <img i src="uploaded_images/<?php echo "" . (!empty($res_queries['ogenius_nds_db_normal_users_avatar'])) ? $res_queries['ogenius_nds_db_normal_users_avatar'] : "nds_avatar.png"; ?>"  class="image48" />
                                    </div>
                                <?php } else { ?>
                                    <div>
                                        <img  src="<?php
                                        if (!empty($res_queries['ogenius_nds_db_normal_users_avatar'])) {
                                            echo "" . (strlen($res_queries['ogenius_nds_db_normal_users_avatar']) > 26) ? $res_queries['ogenius_nds_db_normal_users_avatar'] : "uploaded_images/" . $res_queries['ogenius_nds_db_normal_users_avatar'];
                                        } else {
                                            echo "" . "uploaded_images/" . "nds_avatar.png";
                                        }
                                        ?>" class="image48"/>
                                    </div>

                                <?php } ?>   

                                <div class="startrowstart" style="height: 64px; margin: 2px 4px; overflow:hidden">
                                    <p style="text-align: left">
                                        <?php echo "" . formatImagesInText($res_queries['ogenius_nds_db_rgb_query_query']); ?>
                                    </p>
                                </div>
                                <div style="text-align: right">
                                    <span><?php echo "" . time_to_sec($res_queries['ogenius_nds_db_rgb_query_date']); ?></span>
                                    <?php if (returnNumberOfUnreadCommentsForthisQuery($res_queries['ogenius_nds_db_rgb_query_id'], 'query', $common_user_settings_the_id) > 0) {
                                        ?> <span class="badge" style="background-color: #0044cc"><?php echo "" . returnNumberOfUnreadCommentsForthisQuery($res_queries['ogenius_nds_db_rgb_query_id'], 'query', $common_user_settings_the_id); ?></span>
                                    <?php } else {
                                        ?>
                                        <span class="badge"><?php echo "" . returnNumberOfUnreadCommentsForthisQuery($res_queries['ogenius_nds_db_rgb_query_id'], 'query', $common_user_settings_the_id); ?></span>
                                    <?php }
                                    ?>
                                </div>

                            </div>
                        </div>

                        <?php ?>
                    </div>

                </div>

                <?php
                $cunn++;
            }
        }
    } else {
        echo 'No data!';
    }
}
?>
<script src="../js/jquery-3.2.1.js" type="text/javascript"></script>
<script>
            function Messages_pop_all(obj, queryIf) {
                $("#panel2").load("all_message_recipient.php?queryId=" + obj.title + "&type=" + queryIf);
            }

</script>