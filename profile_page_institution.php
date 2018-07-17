<?php require_once "includes/app_up_nav.php"
?>
<input type="hidden" id="theOurIdUser" value="<?php echo "" . $id_xxxccc88; ?>" />
<?php
$sql_profile_page_institution_user = "SELECT * FROM  ogenius_nds_db_normal_users WHERE     ogenius_nds_db_normal_users_id='{$id_xxxccc88}' ORDER BY         ogenius_nds_db_normal_users_id DESC LIMIT 1";
if ($query_profile_page_institution_user = $database->query($sql_profile_page_institution_user)) {
    //---------------------
    while ($res_profile_page_institution_user = mysqli_fetch_array($query_profile_page_institution_user)) {
        //--------------------------
        $institution_profile_page_institution = $res_profile_page_institution_user['ogenius_nds_db_normal_users_institution'];
        $institution_profile_page_website = $res_profile_page_institution_user['ogenius_nds_db_normal_users_website'];
        $institution_profile_page_email = $res_profile_page_institution_user['ogenius_nds_db_normal_users_email'];
        $institution_profile_page_province = $res_profile_page_institution_user['ogenius_nds_db_normal_users_province'];
        $institution_profile_page_district = $res_profile_page_institution_user['ogenius_nds_db_normal_users_district'];
        $institution_profile_page_sector = $res_profile_page_institution_user['ogenius_nds_db_normal_users_sector'];
        $institution_profile_page_motto = $res_profile_page_institution_user['ogenius_nds_db_normal_users_motto'];
        $institution_profile_page_username = $res_profile_page_institution_user['ogenius_nds_db_normal_users_names'];
    }
}
?>


<div class="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 centercolumn">
                <div>
                    <?php
                    if ($indiv_social_goo < 1) {
                        ?>

                        <img id="profile_page_institu_img_data" onclick="view_profile_page_institu_avatar_image()" src="uploaded_images/<?php echo "" . (!empty($indiv_avatar)) ? $indiv_avatar : "nds_avatar.png"; ?>" style="cursor:pointer;width: 150px;height: 150px;border-radius:150px;" />

                    <?php } else { ?>
                        <img id="profile_page_institu_img_data" onclick="view_profile_page_institu_avatar_image()" src="<?php
                        if (!empty($indiv_avatar)) {
                            echo "" . (filter_var($indiv_avatar)) ? $indiv_avatar : "uploaded_images/" . $indiv_avatar;
                        } else {
                            echo "" . "uploaded_images/" . "nds_avatar.png";
                        }
                        ?>" style="cursor:pointer;width: 150px;height: 150px;border-radius:150px;" />

                    <?php } ?>
                    <img onclick="upload_profile_page_institu_avatar_image()" src="system_images/edit_profile_image.png" class="image24" style="cursor: pointer;" />
                    <div id="profile_image_insti_choose_img_from_device" class="panel panel-shadow" style="z-index:1200; position: absolute;background:white">
                        <input type="button" onclick="hideTheProfile_instiPopProfileImage()" value="X" style="background:white;border:1px solid red;border-radius:3px;color:red;float: right;margin-right: 20px;margin-top: 10px;" />

                        <div id="profile_image_insti_choose_img_from_device_data" class="panel-body">
                            <table style="display: none">
                                <tr>
                                    <td><img src="system_images/imageEmoticon_choose.png" style="max-width:300px;max-height: 300px;border-radius: 4px;" /></td>
                                </tr>
                            </table>
                            <table style="margin: auto; display: none" id="profile_page_insti_tools_to_save_prof_img">
                                <tr>
                                    <td style="width: 50px;"><img src="system_images/dicard_image_uploaded.jpg" style="width: 30px;height: 30px;border-radius: 3px;" /></td><td style="width: 50px;"><img src="system_images/save_image_profile.jpg" style="width: 30px;height: 30px;border-radius: 3px;" /></td>
                                </tr>
                            </table> 

                        </div>                      
                    </div>
                    <!--<input type="button" value="Edit photo" style="margin-top:10px;margin-left:40px;;border:2px solid #009999;background:white;padding: 4px;" />
                    -->
                </div>
            </div>

            <div class="col-md-10" class="centercolumnspace">

                <div>
                    <h1 class="page-header">
                        <?php
                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_institution_0("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_institution_0("system_config_xml/" . $_global_language)->item(0)->textContent;
                        } else {
                            ?>
                            Your account
                        <?php } ?>
                    </h1>
                    <div style="padding-top: 8px;">
                        <div>
                            <div class = "form-group col-md-4">
                                <label class = "control-label"> <?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_institution_1("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_institution_1("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        Institution
                                    <?php } ?>
                                </label>
                                <div class="startrowstart">
                                    <input id="profile_page_institution_name" disabled="true" value="<?php echo "" . $institution_profile_page_institution; ?>" class="form-control accountRegPuts" placeholder="<?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_institution_1("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_institution_1("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                               Institution
                                           <?php } ?>" type="text" />
                                    <input type="checkbox" style="margin: 0 4px" onclick="enableThisIndivProfPageDiv(this, 'profile_page_institution_name')" id="profile_page_institution_name_check" />

                                </div>
                            </div>
                            <div class = "form-group col-md-4">
                                <label class = "control-label"> <?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_institution_2("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_institution_2("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        Website
                                    <?php } ?>
                                </label>
                                <div class="startrowstart">
                                    <input onkeyup="profile_page_institutionUser_nds_validate_Website(this)" onchange="profile_page_institutionUser_nds_validate_Website(this)" id="profile_page_institution_website" value="<?php echo "" . $institution_profile_page_website; ?>" disabled="true" class="form-control accountRegPuts" placeholder="<?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_institution_2("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_institution_2("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                               Website
                                           <?php } ?>" type="text" />
                                    <input type="checkbox" style="margin: 0 4px" onclick="enableThisIndivProfPageDiv(this, 'profile_page_institution_website')" id="profile_page_institution_website_check" />
                                    <div style="margin: 0 4px"><div class="loader_span" id="profile_page_institution_website_wait" style="position: absolute;"></div><div id="profile_page_institution_website_failed" style="position: absolute;color: red;">&#10008;</div><div id="profile_page_institution_website_okay" style="position: absolute;color: green">&#10004;</div></div>

                                </div>
                            </div>
                            <div class = "form-group col-md-4">
                                <label class = "control-label"> <?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_institution_3("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_institution_3("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        info email address
                                    <?php } ?>
                                </label>
                                <div class="startrowstart">
                                    <input onkeyup="profile_page_institutionUser_nds_validate_Email(this)" onchange="profile_page_institutionUser_nds_validate_Email(this)" id="profile_page_institution_email_add" value="<?php echo "" . $institution_profile_page_email; ?>" disabled="true" class="form-control accountRegPuts" placeholder="<?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_institution_4("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_institution_4("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                               Email address
                                           <?php } ?>" type="text" />
                                    <input type="checkbox" style="margin: 0 4px" onclick="enableThisIndivProfPageDiv(this, 'profile_page_institution_email_add')" id="profile_page_institution_email_add_check" />
                                    <div style="margin: 0 4px;position: absolute;"><div class="loader_span" id="profile_page_institution_email_add_wait"></div><div id="profile_page_institution_email_add_failed" style="position: absolute;color: red;">&#10008;</div><div id="profile_page_institution_email_add_okay" style="position: absolute;color: green">&#10004;</div></div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class = "form-group col-md-4">
                                <label class = "control-label"> <?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_institution_5("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_institution_5("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        Province
                                    <?php } ?>
                                </label>
                                <div class="startrowstart">
                                    <input id="profile_page_institution_province" value="<?php echo "" . $institution_profile_page_province; ?>" disabled="true" class="form-control accountRegPuts" placeholder="<?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_institution_5("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_institution_5("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                               Province
                                           <?php } ?>" type="text" />
                                    <input type="checkbox" style="margin: 0 4px;" onclick="enableThisIndivProfPageDiv(this, 'profile_page_institution_province')" id="profile_page_institution_province_check" />

                                </div>
                            </div>
                            <div class = "form-group col-md-4">
                                <label class = "control-label"><?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_institution_6("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_institution_6("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        District
                                    <?php } ?>
                                </label>
                                <div class="startrowstart">
                                    <input id="profile_page_institution_district" value="<?php echo "" . $institution_profile_page_district; ?>" disabled="true" class="form-control accountRegPuts" placeholder="<?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_institution_6("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_institution_6("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                               District
                                           <?php } ?>" type="text" />
                                    <input type="checkbox" style="margin: 0 4px;" onclick="enableThisIndivProfPageDiv(this, 'profile_page_institution_district')" id="profile_page_institution_district_check" />

                                </div>
                            </div>
                            <div class = "form-group col-md-4">
                                <label class = "control-label"> <?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_institution_7("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_institution_7("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        Sector
                                    <?php } ?>
                                </label>
                                <div class="startrowstart">
                                    <input id="profile_page_institution_sector" value="<?php echo "" . $institution_profile_page_sector; ?>" disabled="true" class="form-control accountRegPuts" placeholder="<?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_institution_7("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_institution_7("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                               Sector
                                           <?php } ?>" type="text" />
                                    <input type="checkbox" style="margin: 0 4px;" onclick="enableThisIndivProfPageDiv(this, 'profile_page_institution_sector')" id="profile_page_institution_sector_check" />

                                </div>
                            </div>
                        </div>
                        <div>
                            <div class = "form-group col-md-4">
                                <label class = "control-label"><?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_institution_8("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_institution_8("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        Motto
                                    <?php } ?>
                                </label>
                                <div class="startrowstart">
                                    <textarea onfocus="textAreaAdjust(this)" onkeyup="textAreaAdjust(this)" id="profile_page_institution_motto"  disabled="true" style="height: auto;" class="form-control accountRegPuts" ><?php echo "" . $institution_profile_page_motto; ?></textarea>
                                    <input type="checkbox" style="margin: 0 4px;" onclick="enableThisIndivProfPageDiv(this, 'profile_page_institution_motto')" id="profile_page_institution_motto_check" />

                                </div>
                            </div>
                            <div class = "form-group col-md-4">
                                <label class = "control-label"><?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_institution_9("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_institution_9("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        Username
                                    <?php } ?>
                                </label>
                                <div class="startrowstart">
                                    <input onchange="profile_page_institutionUser_nds_validate_Username(this)" onkeyup="profile_page_institutionUser_nds_validate_Username(this)" id="profile_page_institution_username" value="<?php echo "" . $institution_profile_page_username; ?>" disabled="true" class="form-control accountRegPuts" placeholder="<?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_institution_9("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_institution_9("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                               Username
                                           <?php } ?>" type="text" />
                                    <input type="checkbox" style="margin: 0 4px;" onclick="enableThisIndivProfPageDiv(this, 'profile_page_institution_username')" id="profile_page_institution_username_check" />
                                    <div style="margin: 0 4px;"><div class="loader_span" id="profile_page_institution_username_wait" style="position: absolute;"></div><div id="profile_page_institution_username_failed" style="position: absolute;color: red;">&#10008;</div><div id="profile_page_institution_username_okay" style="position: absolute;color: green">&#10004;</div></div>

                                </div>
                            </div>
                            <div class = "form-group col-md-4">
                                <input id="profile_page_institution_btn" onclick="showProfilePage_institution_PopUp_passwords(this)" value="<?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_institution_10("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_institution_10("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                           Change password
                                       <?php } ?>"class="btn btn-default" type="button" />

                            </div>
                        </div>
                        <div class="panel panel-shadow" id="profile_page_institution_password_popup" style="margin-top: 10%; margin-left: 45%;position: absolute;visibility: hidden;">
                            <div class="panel-heading startrowspace">
                                <span>Change password</span>
                                <button onclick="hideThePassProfileInstitutionPopUp()" class="btn">&times;</button>
                            </div>
                            <div class="panel-body">
                                <div class = "form-group">
                                    <input id="profile_page_institution_password_old" type="password" placeholder="Old <?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_32("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_32("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                               Password
                                           <?php } ?>" class="form-control accountRegPuts" />
                                </div>
                                <div class = "form-group">
                                    <input style="" id="profile_page_institution_password_new" type="password" placeholder="New <?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_32("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_32("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                               Password
                                           <?php } ?>" class="form-control accountRegPuts" />
                                </div>
                                <div class = "form-group">
                                    <input style="" id="profile_page_institution_password_repeat" type="password" placeholder="<?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_33("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_33("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                               confirm password
                                           <?php } ?>" class="form-control accountRegPuts" />
                                </div>
                                <input onclick="saveThisPasswordXchange_institution_profile_page(<?php echo "" . $id_xxxccc88; ?>)" type="button" class="btn btn-default" value="<?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_23("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_23("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                           Save changes
                                       <?php } ?>" />
                            </div>
                            <div id="profile_page_institution_password_change_cool"  style="height: 60px;">
                                <table  style="margin-left: 30%;">
                                    <tr>
                                        <td>
                                            <div id="balloon_1" style="background: #0080FF;width:6px;height: 6px;border-radius:30px;border: 3px solid green;border-style: none;"></div>
                                        </td>
                                        <td>
                                            <div id="balloon_2" style="background: #0080FF;width:6px;height: 6px;border-radius:30px;border: 3px solid green;border-style: none;"></div>
                                        </td>
                                        <td>
                                            <div id="balloon_3" style="margin-left:14px;background: #0080FF;width:6px;height: 6px;border-radius:30px;border: 3px solid green;border-style: none;"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div style="min-width: 20px">
                                                <div class="loader_span" id="profile_page_institution_password_wait" style="position: absolute;"></div><div id="profile_page_institution_password_failed" style="position: absolute;color: red;">&#10008;</div><div id="profile_page_institution_password_okay" style="position: absolute;color: green">&#10004;</div></div></td>

                                    </tr>
                                </table>
                            </div>


                        </div>




                    </div>

                </div>
                <div class="row">
                    <div class="container-fluid">
                        <div class = "col-md-6">
                            <input onclick="save_Institution_profilePageChanges()" type="button" value="<?php
                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_institution_11("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_institution_11("system_config_xml/" . $_global_language)->item(0)->textContent;
                            } else {
                                ?>
                                       Save changes
                                   <?php } ?>" class="btn btn-primary"/>

                        </div>
                        <div class = "col-md-6">
                            <div onclick="profile_page_institution_continue()" class="btn btn-default" style="cursor:pointer;">
                                <table>
                                    <tr>
                                        <td><label><?php
                                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_institution_12("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_institution_12("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                } else {
                                                    ?>
                                                    Continue
                                                <?php } ?></label></td>
                                        <td><img src="images/ic_navigate_next_black_48dp.png" style="width: 10px;height: 10px;" /></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>

</div>
<?php
require_once ("includes/app_footer.php");
?>


</body>
</html>