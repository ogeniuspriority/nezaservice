<?php
include ("../includes/conn/config.php");
include ("../includes/classes/database.php");
include ("../includes/functions.php");
include ("../includes/timeToSec.php");

//----

$common_user_settings_the_id = $_POST['common_user_settings_the_id'];
//echo "-----------------okay okay---".$common_user_settings_the_id;
if (renderTellIfCommonUser($common_user_settings_the_id)) {
//echo "true";
    $sql_queries = "SELECT * FROM ogenius_nds_db_rgb_query
        LEFT JOIN ogenius_nds_db_normal_users
        ON ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_query_provider=ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id
         WHERE ogenius_nds_db_rgb_query_query_provider='{$common_user_settings_the_id}'
ORDER BY ogenius_nds_db_rgb_query_id  DESC LIMIT 5";

    if ($query_queries = $database->query($sql_queries)) {
//---------------------
        $cunn = 0;
        ?>
        <div class="message_collapse">
            <div class="panel-collapse">
                <?php
                while ($res_queries = mysqli_fetch_array($query_queries)) {
                    ?>
                    <div class="message_record" title="<?php echo "" . $res_queries['ogenius_nds_db_rgb_query_id']; ?>" onclick="Messages_pop(this, 'query')" id="<?php echo"fdgdgd" . rand(0, 500) . $cunn; ?>">
                        <div class="startrowspace message-item" style="background-color: rgba(0,0,0,.2)" >
                            <?php
                            $cunn++;
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

                    <?php
                }
                ?>
            </div>

        </div>
        <?php
    }
//--------------------Load the Suggestion------
    $sql_suggestions = "SELECT * FROM ogenius_nds_db_suggestions
                LEFT JOIN ogenius_nds_db_normal_users
                ON ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id=ogenius_nds_db_suggestions.ogenius_nds_db_suggestions_provider_id
                WHERE ogenius_nds_db_suggestions_provider_id='{$common_user_settings_the_id}'
                ORDER BY ogenius_nds_db_suggestions_id DESC LIMIT 5";

    if ($query_suggestions = $database->query($sql_suggestions)) {
//---------------------
        $cunn = 0;
        ?>
        <div class ="message_collapse">
            <div class ="panel-collapse">
                <?php
                while ($res_suggestions = mysqli_fetch_array($query_suggestions)) {
                    ?>
                    <div class="message_record" title="<?php echo "" . $res_suggestions['ogenius_nds_db_suggestions_id']; ?>" onclick="Messages_pop(this, 'suggestion')" id="<?php echo"fdgdgd" . rand(0, 500) . $cunn; ?>">

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
                }
                ?>
            </div>

        </div><?php
    }
} else {
    $theAcId = renderTheSuggestionBoxIdAsInstitutionOrOfficial__($common_user_settings_the_id);
//----------Go in the in the query comments find all my places where i am the intended to read--
//--find all the queries i sent--------------------------------------------------
//--------------load the queries------------------------------------
//--------------------Load the Suggestion------
    $theAcId = renderTheSuggestionBoxIdAsInstitutionOrOfficial__($common_user_settings_the_id);

    $sql_suggestions = "SELECT * FROM ogenius_nds_db_suggestions
                LEFT JOIN ogenius_nds_db_normal_users
                ON ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id=ogenius_nds_db_suggestions.ogenius_nds_db_suggestions_provider_id
                WHERE  	ogenius_nds_db_suggestions_box_id ='$theAcId'
                ORDER BY ogenius_nds_db_suggestions_id DESC LIMIT 10";

    if ($query_suggestions = $database->query($sql_suggestions)) {
//---------------------
        $cunn = 0;
        ?>
        <div class ="message_collapse">
            <div class ="panel-collapse"><?php
        while ($res_suggestions = mysqli_fetch_array($query_suggestions)) {
            ?>
                    <div class="message_record" title="<?php echo "" . $res_suggestions['ogenius_nds_db_suggestions_id']; ?>"  onclick="Messages_pop(this, 'suggestion')" id="<?php echo"fdgdgd" . rand(0, 500) . $cunn; ?>">

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
                ?>" class="image48" />
                                </div>
                                      <?php } ?>   
                                        <!--<img src="images/32210901391_becdb7c654_c-ca7f3.jpg" style="width: 50px;height: 50px;border-radius: 50px;" /></td>
                            -->
                            <div class="startrowstart" style="height: 64px; margin:2px 4px; overflow:hidden">
                                <p style="text-align: left"><?php
                          //--------------arrange display---
                          if ($res_suggestions['ogenius_nds_db_suggestions_type'] == 'video') {
                              echo "<div style='border:1px solid green; border-radius:4px; padding:4px 8px' class='startrowspace'><img class='image24' src='images/ic_ondemand_video_black_24dp.png'/>Video Content</div>";
                          } else if ($res_suggestions['ogenius_nds_db_suggestions_type'] == 'audio') {
                              echo "<div style='border:1px solid green;border-radius:4px;padding:4px 8px' class='startrowspace'><img class='image24' src='images/ic_audiotrack_black_24dp.png'/>Audio Content</div>";
                          } else if ($res_suggestions['ogenius_nds_db_suggestions_type'] == 'image') {
                              echo "<div style='border:1px solid green;border-radius:4px;padding:4px 8px' class='startrowspace'><img class='image24' src='images/ic_image_black_24dp.png'/>Image Content</div>";
                          } else if ($res_suggestions['ogenius_nds_db_suggestions_type'] == 'text') {
                              echo "" . formatImagesInText($res_suggestions['ogenius_nds_db_suggestions_data']);
                          }
                                      ?>
                                </p>
                            </div>
                            <div style="text-align: right">
                                <span><?php echo "" . time_to_sec($res_suggestions['ogenius_nds_db_suggestions_regdate']) ?></span>
            <?php if (returnNumberOfUnreadCommentsForthisQuery($res_suggestions['ogenius_nds_db_suggestions_id'], 'suggestion', $common_user_settings_the_id) > 0) {
                ?> <span class="badge" style="background-color: #0044cc"><?php echo "" . returnNumberOfUnreadCommentsForthisQuery($res_suggestions['ogenius_nds_db_suggestions_id'], 'suggestion', $common_user_settings_the_id); ?></span>
                                <?php } else {
                                    ?>
                                    <span class="badge"><?php echo "" . returnNumberOfUnreadCommentsForthisQuery($res_suggestions['ogenius_nds_db_suggestions_id'], 'suggestion', $common_user_settings_the_id); ?></span>
                                <?php }
                                ?>
                            </div>
                        </div>
                    </div>                
            <?php
        }
        ?>
            </div>
        </div>
        <?php
    }
}
    


