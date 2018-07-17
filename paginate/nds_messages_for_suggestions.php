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
    require_once ("../includes/conn/config.php");
    require_once ("../includes/classes/database.php");
    require_once ("../includes/timeToSec.php");
//--------------Select All Active batches--

    $pieceOfCode = " 
                        AND ogenius_nds_db_suggestions_provider_id='{$theUserId}'
                        ORDER BY ogenius_nds_db_suggestions_id DESC";

    $otherPiece = " LIMIT $start_from, $limit";





    $sql_select_img_batch = "SELECT * FROM ogenius_nds_db_suggestions LEFT JOIN ogenius_nds_db_normal_users
        ON ogenius_nds_db_suggestions.ogenius_nds_db_suggestions_provider_id=ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id
         
                        WHERE   7>2 $pieceOfCode" . $otherPiece;
    $n_batch = 0;
    $cunn = 0;
    if ($query_suggestions = $database->query($sql_select_img_batch)) {
        $cunn = 0;
        ?>
        <div class ="message_collapse">
            <div class ="panel-collapse">
                <?php
                while ($res_suggestions = mysqli_fetch_array($query_suggestions)) {
                    ?>
                    <div class="message_record" title="<?php echo "" . $res_suggestions['ogenius_nds_db_suggestions_id']; ?>" onclick="Messages_pop_all(this, 'suggestion')" id="<?php echo"fdgdgd" . rand(0, 500) . $cunn; ?>">

                        <div class="startrowspace message-item">
                            <?php
                            $cunn++;
                            if ($res_suggestions['ogenius_nds_db_normal_users_api_log_face_goo_id'] < 1) {
                                ?>
                                <div>
                                    <img i src="uploaded_images/<?php echo "" . (!empty($res_suggestions['ogenius_nds_db_normal_users_avatar'])) ? $res_suggestions['ogenius_nds_db_normal_users_avatar'] : "nds_avatar.png"; ?>" class="image48" />
                                </div>
                            <?php } else { ?>
                                <div>
                                    <img  src="<?php
                                    if (!empty($res_suggestions['ogenius_nds_db_normal_users_avatar'])) {
                                        echo "" . (strlen($res_suggestions['ogenius_nds_db_normal_users_avatar']) > 26) ? $res_suggestions['ogenius_nds_db_normal_users_avatar'] : "uploaded_images/" . $res_suggestions['ogenius_nds_db_normal_users_avatar'];
                                    } else {
                                        echo "" . "uploaded_images/" . "nds_avatar.png";
                                    }
                                    ?>" class="image48" /></div>

                            <?php } ?>   
                                                                                                                                                                                                                                                                                                                                                        <!--<img src="images/32210901391_becdb7c654_c-ca7f3.jpg" style="width: 50px;height: 50px;border-radius: 50px;" /></td>
                            -->
                            <div class="startrowstart" style="height: 64px; margin: 2px 4px; overflow:hidden">
                                <p style="text-align: left">
                                    <?php
                                    //--------------arrange display---
                                    if ($res_suggestions['ogenius_nds_db_suggestions_type'] == 'video') {
                                        echo "<div style='background-color:#a5a5a5;border-radius:3px; padding:5px 10px'><img class='image18' src='images/ic_ondemand_video_black_24dp.png'><span>Video Content</span></div>";
                                    } else if ($res_suggestions['ogenius_nds_db_suggestions_type'] == 'audio') {
                                        echo "<div style='background-color:#a5a5a5; border-radius:3px; padding:5px 10px; color:white><img class='image18' src='images/ic_audiotrack_black_24dp.png'/><span>Audio Content</span></div>";
                                    } else if ($res_suggestions['ogenius_nds_db_suggestions_type'] == 'image') {
                                        echo "<div style='background-color:#a5a5a5;border-radius:3px; padding:5px 10px'><img class='image18' src='images/ic_image_black_24dp.png'/><span>Image Content</span></div>";
                                    } else if ($res_suggestions['ogenius_nds_db_suggestions_type'] == 'text') {
                                        echo "" . formatImagesInText($res_suggestions['ogenius_nds_db_suggestions_data']);
                                    }
                                    ?>
                                </p>
                            </div>
                            <div style="text-align: right">
                                <span><?php echo "" . time_to_sec($res_suggestions['ogenius_nds_db_suggestions_regdate']); ?></span>
                                <?php if (returnNumberOfUnreadCommentsForthisQuery($res_suggestions['ogenius_nds_db_suggestions_id'], 'suggestion', $common_user_settings_the_id) > 0) {
                                    ?> <span class="badge" style="background-color: #0044cc"><?php echo "" . returnNumberOfUnreadCommentsForthisQuery($res_suggestions['ogenius_nds_db_suggestions_id'], 'suggestion', $common_user_settings_the_id); ?></span>
                                <?php } else {
                                    ?>
                                    <span class="badge"><?php echo "" . returnNumberOfUnreadCommentsForthisQuery($res_suggestions['ogenius_nds_db_suggestions_id'], 'suggestion', $common_user_settings_the_id); ?></span>
                                <?php }
                                ?> </div>
                        </div>
                    </div>                
                    <?php
                    $cunn++;
                }
                ?>
            </div>

        </div><?php
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
        require_once ("../includes/conn/config.php");
        require_once ("../includes/classes/database.php");
        require_once ("../includes/timeToSec.php");
//--------------Select All Active batches--ogenius_nds_db_suggestions_box_id 
        $theAcId = renderTheSuggestionBoxIdAsInstitutionOrOfficial__($theUserId);



        $pieceOfCode = " 
                        AND ogenius_nds_db_suggestions_box_id ='{$theAcId}'
                        ORDER BY ogenius_nds_db_suggestions_id DESC";

        $otherPiece = " LIMIT $start_from, $limit";





        $sql_select_img_batch = "SELECT * FROM ogenius_nds_db_suggestions LEFT JOIN ogenius_nds_db_normal_users
        ON ogenius_nds_db_suggestions.ogenius_nds_db_suggestions_provider_id=ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id
         
                        WHERE   7>2 $pieceOfCode" . $otherPiece;
        $n_batch = 0;
        $cunn = 0;
        if ($query_suggestions = $database->query($sql_select_img_batch)) {
            $cunn = 0;
            ?>
            <div class ="message_collapse">
                <div class ="panel-collapse">
                    <?php
                    while ($res_suggestions = mysqli_fetch_array($query_suggestions)) {
                        ?>
                        <div class="message_record" title="<?php echo "" . $res_suggestions['ogenius_nds_db_suggestions_id']; ?>" onclick="Messages_pop_all(this, 'suggestion')" id="<?php echo"fdgdgd" . rand(0, 500) . $cunn; ?>">

                            <div class="startrowspace message-item">
                                <?php
                                $cunn++;
                                if ($res_suggestions['ogenius_nds_db_normal_users_api_log_face_goo_id'] < 1) {
                                    ?>
                                    <div>
                                        <img i src="uploaded_images/<?php echo "" . (!empty($res_suggestions['ogenius_nds_db_normal_users_avatar'])) ? $res_suggestions['ogenius_nds_db_normal_users_avatar'] : "nds_avatar.png"; ?>" class="image48" />
                                    </div>
                                <?php } else { ?>
                                    <div>
                                        <img  src="<?php
                                    if (!empty($res_suggestions['ogenius_nds_db_normal_users_avatar'])) {
                                        echo "" . (strlen($res_suggestions['ogenius_nds_db_normal_users_avatar']) > 26) ? $res_suggestions['ogenius_nds_db_normal_users_avatar'] : "uploaded_images/" . $res_suggestions['ogenius_nds_db_normal_users_avatar'];
                                    } else {
                                        echo "" . "uploaded_images/" . "nds_avatar.png";
                                    }
                                    ?>" class="image48" /></div>

                                <?php } ?>   
                                                                                                                                                                                                                                                                                                                                                                <!--<img src="images/32210901391_becdb7c654_c-ca7f3.jpg" style="width: 50px;height: 50px;border-radius: 50px;" /></td>
                                -->
                                <div class="startrowstart" style="height: 64px; margin: 2px 4px; overflow:hidden">
                                    <p style="text-align: left">
                                        <?php
                                        //--------------arrange display---
                                        if ($res_suggestions['ogenius_nds_db_suggestions_type'] == 'video') {
                                            echo "<div style='background-color:#a5a5a5;border-radius:3px; padding:5px 10px'><img class='image18' src='images/ic_ondemand_video_black_24dp.png'><span>Video Content</span></div>";
                                        } else if ($res_suggestions['ogenius_nds_db_suggestions_type'] == 'audio') {
                                            echo "<div style='background-color:#a5a5a5; border-radius:3px; padding:5px 10px; color:white><img class='image18' src='images/ic_audiotrack_black_24dp.png'/><span>Audio Content</span></div>";
                                        } else if ($res_suggestions['ogenius_nds_db_suggestions_type'] == 'image') {
                                            echo "<div style='background-color:#a5a5a5;border-radius:3px; padding:5px 10px'><img class='image18' src='images/ic_image_black_24dp.png'/><span>Image Content</span></div>";
                                        } else if ($res_suggestions['ogenius_nds_db_suggestions_type'] == 'text') {
                                            echo "" . formatImagesInText($res_suggestions['ogenius_nds_db_suggestions_data']);
                                        }
                                        ?>
                                    </p>
                                </div>
                                <div style="text-align: right">
                                    <span><?php echo "" . time_to_sec($res_suggestions['ogenius_nds_db_suggestions_regdate']); ?></span>
                                    <?php if (returnNumberOfUnreadCommentsForthisQuery($res_suggestions['ogenius_nds_db_suggestions_id'], 'suggestion', $common_user_settings_the_id) > 0) {
                                        ?> <span class="badge" style="background-color: #0044cc"><?php echo "" . returnNumberOfUnreadCommentsForthisQuery($res_suggestions['ogenius_nds_db_suggestions_id'], 'suggestion', $common_user_settings_the_id); ?></span>
                                    <?php } else {
                                        ?>
                                        <span class="badge"><?php echo "" . returnNumberOfUnreadCommentsForthisQuery($res_suggestions['ogenius_nds_db_suggestions_id'], 'suggestion', $common_user_settings_the_id); ?></span>
                                    <?php }
                                    ?> </div>
                            </div>
                        </div>                
                        <?php
                        $cunn++;
                    }
                    ?>
                </div>

            </div><?php
        }
    } else {
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
        require_once ("../includes/conn/config.php");
        require_once ("../includes/classes/database.php");
        require_once ("../includes/timeToSec.php");
//--------------Select All Active batches--ogenius_nds_db_suggestions_box_id 
        $theAcId = renderTheSuggestionBoxIdAsInstitutionOrOfficial__($theUserId);



        $pieceOfCode = " 
                        AND ogenius_nds_db_suggestions_box_id ='{$theAcId}'
                        ORDER BY ogenius_nds_db_suggestions_id DESC";

        $otherPiece = " LIMIT $start_from, $limit";





        $sql_select_img_batch = "SELECT * FROM ogenius_nds_db_suggestions LEFT JOIN ogenius_nds_db_normal_users
        ON ogenius_nds_db_suggestions.ogenius_nds_db_suggestions_provider_id=ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id
         
                        WHERE   7>2 $pieceOfCode" . $otherPiece;
        $n_batch = 0;
        $cunn = 0;
        if ($query_suggestions = $database->query($sql_select_img_batch)) {
            $cunn = 0;
            ?>
            <div class ="message_collapse">
                <div class ="panel-collapse">
            <?php
            while ($res_suggestions = mysqli_fetch_array($query_suggestions)) {
                ?>
                        <div class="message_record" title="<?php echo "" . $res_suggestions['ogenius_nds_db_suggestions_id']; ?>" onclick="Messages_pop_all(this, 'suggestion')" id="<?php echo"fdgdgd" . rand(0, 500) . $cunn; ?>">

                            <div class="startrowspace message-item">
                <?php
                $cunn++;
                if ($res_suggestions['ogenius_nds_db_normal_users_api_log_face_goo_id'] < 1) {
                    ?>
                                    <div>
                                        <img i src="uploaded_images/<?php echo "" . (!empty($res_suggestions['ogenius_nds_db_normal_users_avatar'])) ? $res_suggestions['ogenius_nds_db_normal_users_avatar'] : "nds_avatar.png"; ?>" class="image48" />
                                    </div>
                <?php } else { ?>
                                    <div>
                                        <img  src="<?php
                    if (!empty($res_suggestions['ogenius_nds_db_normal_users_avatar'])) {
                        echo "" . (strlen($res_suggestions['ogenius_nds_db_normal_users_avatar']) > 26) ? $res_suggestions['ogenius_nds_db_normal_users_avatar'] : "uploaded_images/" . $res_suggestions['ogenius_nds_db_normal_users_avatar'];
                    } else {
                        echo "" . "uploaded_images/" . "nds_avatar.png";
                    }
                    ?>" class="image48" /></div>

                                          <?php } ?>   
                                                                                                                                                                                                                                                                                                                                                                <!--<img src="images/32210901391_becdb7c654_c-ca7f3.jpg" style="width: 50px;height: 50px;border-radius: 50px;" /></td>
                                -->
                                <div class="startrowstart" style="height: 64px; margin: 2px 4px; overflow:hidden">
                                    <p style="text-align: left">
                <?php
                //--------------arrange display---
                if ($res_suggestions['ogenius_nds_db_suggestions_type'] == 'video') {
                    echo "<div style='background-color:#a5a5a5;border-radius:3px; padding:5px 10px'><img class='image18' src='images/ic_ondemand_video_black_24dp.png'><span>Video Content</span></div>";
                } else if ($res_suggestions['ogenius_nds_db_suggestions_type'] == 'audio') {
                    echo "<div style='background-color:#a5a5a5; border-radius:3px; padding:5px 10px; color:white><img class='image18' src='images/ic_audiotrack_black_24dp.png'/><span>Audio Content</span></div>";
                } else if ($res_suggestions['ogenius_nds_db_suggestions_type'] == 'image') {
                    echo "<div style='background-color:#a5a5a5;border-radius:3px; padding:5px 10px'><img class='image18' src='images/ic_image_black_24dp.png'/><span>Image Content</span></div>";
                } else if ($res_suggestions['ogenius_nds_db_suggestions_type'] == 'text') {
                    echo "" . formatImagesInText($res_suggestions['ogenius_nds_db_suggestions_data']);
                }
                ?>
                                    </p>
                                </div>
                                <div style="text-align: right">
                                    <span><?php echo "" . time_to_sec($res_suggestions['ogenius_nds_db_suggestions_regdate']); ?></span>
                <?php if (returnNumberOfUnreadCommentsForthisQuery($res_suggestions['ogenius_nds_db_suggestions_id'], 'suggestion', $common_user_settings_the_id) > 0) {
                    ?> <span class="badge" style="background-color: #0044cc"><?php echo "" . returnNumberOfUnreadCommentsForthisQuery($res_suggestions['ogenius_nds_db_suggestions_id'], 'suggestion', $common_user_settings_the_id); ?></span>
                                    <?php } else {
                                        ?>
                                        <span class="badge"><?php echo "" . returnNumberOfUnreadCommentsForthisQuery($res_suggestions['ogenius_nds_db_suggestions_id'], 'suggestion', $common_user_settings_the_id); ?></span>
                                    <?php }
                                    ?> </div>
                            </div>
                        </div>                
                <?php
                $cunn++;
            }
            ?>
                </div>

            </div><?php
        }
    }
}
?>
<script src="../js/jquery-3.2.1.js" type="text/javascript"></script>
<script>
            function Messages_pop_all(obj, queryIf) {
                $("#panel2").load("all_message_recipient.php?queryId=" + obj.title + "&type=" + queryIf);
            }

</script>