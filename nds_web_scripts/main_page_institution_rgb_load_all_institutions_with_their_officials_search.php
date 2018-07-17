<div id="rgb_forward_query" style="width: 300px">
    <?php
    include ("../includes/conn/config.php");
    include ("../includes/classes/database.php");

//----

    $queryID = $_POST['main_page_institution_RGB_TheQueryID'];
    $myRGBid = $_POST['common_user_settings_the_id'];
    $actOnThisQueryLogic = $_POST['theRgbForwardSpecs'];
    $instiSearch = strtolower($_POST['instiSearch']);
//-------------------Trigger notifications before success-------------------------------
//echo "cool ma nigga!";
    $sql_institutions_only = "SELECT   *
    FROM ogenius_nds_db_normal_users WHERE ogenius_nds_db_normal_users_user_vip_tag='1'
    AND ogenius_nds_db_normal_users_activated='1' AND
    ogenius_nds_db_normal_users_id!='{$myRGBid}'     
     ORDER BY  ogenius_nds_db_normal_users_institution ASC
            ";

    if ($query_institutions_only = $database->query($sql_institutions_only)) {
        //---------------------

        $bnm = 0;
        while ($res_institutions_only = mysqli_fetch_array($query_institutions_only)) {
            $institution_profile_page_institution = $res_institutions_only['ogenius_nds_db_normal_users_institution'];
            $institution_profile_page_website = $res_institutions_only['ogenius_nds_db_normal_users_website'];
            $institution_profile_page_email = $res_institutions_only['ogenius_nds_db_normal_users_email'];
            $institution_profile_page_province = $res_institutions_only['ogenius_nds_db_normal_users_province'];
            $institution_profile_page_district = $res_institutions_only['ogenius_nds_db_normal_users_district'];
            $institution_profile_page_sector = $res_institutions_only['ogenius_nds_db_normal_users_sector'];
            $institution_profile_page_motto = $res_institutions_only['ogenius_nds_db_normal_users_motto'];
            $institution_profile_page_username = $res_institutions_only['ogenius_nds_db_normal_users_names'];
            $indiv_social_goo = $res_institutions_only['ogenius_nds_db_normal_users_api_log_face_goo_id'];
            $indiv_avatar = $res_institutions_only['ogenius_nds_db_normal_users_avatar'];
            //--------------------
            $bnm++;
            //--------------------------
            ?>
            
                <div class="startrowstart"><?php
                    if ($indiv_social_goo < 1) {
                        ?><img  src="uploaded_images/<?php echo "" . (!empty($indiv_avatar)) ? $indiv_avatar : "nds_avatar.png"; ?>" class="image48" />

                    <?php } else { ?><img  src="<?php
                        if (!empty($indiv_avatar)) {
                            echo "" . (filter_var($indiv_avatar)) ? $indiv_avatar : "uploaded_images/" . $indiv_avatar;
                        } else {
                            echo "" . "uploaded_images/" . "nds_avatar.png";
                        }
                        ?>" class="image48" style="margin: 0px 3px" /> <?php } ?><span style="margin: 0px 4px;"><b><?php echo "" . $institution_profile_page_institution; ?></b></span>
                </div>
            
            <div style="border-bottom: 1px solid rgba(55,55,55,.5); cursor: pointer; margin: 0px 2px 2px 4px;">
                <?php
                $sql_find_institution = "SELECT * FROM  ogenius_nds_db_normal_users  WHERE ogenius_nds_db_normal_users_institution LIKE \"%{$institution_profile_page_institution}%\"
AND  ogenius_nds_db_normal_users_user_vip_tag ='2' AND  ogenius_nds_db_normal_users_activated ='1' 
ORDER BY   ogenius_nds_db_normal_users_id DESC";
                $theOtherId = 0;
                if ($query_find_institution = $database->query($sql_find_institution)) {
//---------------------
                    echo "<form>";
                    while ($res_find_institution = mysqli_fetch_array($query_find_institution)) {
                        $theOtherId = $res_find_institution['ogenius_nds_db_normal_users_id'];
//-----------------------
                        ?>
                        <div class="startrowstart" style="cursor:pointer">
                            <input type="radio" style="margin: 0px 2px" title="<?php echo "" . $theOtherId; ?>" id="<?php echo "" . $actOnThisQueryLogic; ?>" onchange="main_page_institution_forwardOrDelegateThisQuery(this,<?php echo "" . $queryID; ?>)" name="rgb_form_suggest<?php echo "" . $queryID; ?>"  /></td>

                            <div style="margin: 0px 2px">
                                <?php
                                if ($res_find_institution['ogenius_nds_db_normal_users_api_log_face_goo_id'] < 1) {
                                    ?><img  src="uploaded_images/<?php echo "" . (!empty($res_find_institution['ogenius_nds_db_normal_users_avatar'])) ? $res_find_institution['ogenius_nds_db_normal_users_avatar'] : "nds_avatar.png"; ?>" class="image24" />

                                <?php } else { ?><img  src="<?php
                                    if (!empty($res_find_institution['ogenius_nds_db_normal_users_avatar'])) {
                                        echo "" . (filter_var($res_find_institution['ogenius_nds_db_normal_users_avatar'])) ? $res_find_institution['ogenius_nds_db_normal_users_avatar'] : "uploaded_images/" . $res_find_institution['ogenius_nds_db_normal_users_avatar'];
                                    } else {
                                        echo "" . "uploaded_images/" . "nds_avatar.png";
                                    }
                                    ?>"class="image24" /> <?php } ?>


                            </div>
                            <div class="startcolstart" style="margin: 0px 2px">
                                <label><b><?php echo "" . $res_find_institution['ogenius_nds_db_normal_users_firstname'] . " " . $res_find_institution['ogenius_nds_db_normal_users_lastname']; ?>
                                    </b></label>
                                <span>
                                    Position:<?php echo "" . $res_find_institution['ogenius_nds_db_normal_users_position']; ?> 
                                </span>
                            </div>

                        </div>


                        <?php
                    }
                    echo "</form>";
                }
                ?>

            </div>
            <?php
        }
    }
    ?>
</div>
