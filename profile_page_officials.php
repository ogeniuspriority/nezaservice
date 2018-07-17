<?php require_once "includes/app_up_nav.php"
?>
<input type="hidden" id="theOurIdUser" value="<?php echo "" . $id_xxxccc88; ?>" />
<?php
$sql_profile_page_institution_official_user = "SELECT * FROM  ogenius_nds_db_normal_users WHERE ogenius_nds_db_normal_users_id='{$id_xxxccc88}' ORDER BY         ogenius_nds_db_normal_users_id DESC LIMIT 1";
if ($query_profile_page_institution_official_user = $database->query($sql_profile_page_institution_official_user)) {
    //---------------------
    while ($res_profile_page_institution_official_user = mysqli_fetch_array($query_profile_page_institution_official_user)) {
        //--------------------------
        $official_fname = $res_profile_page_institution_official_user['ogenius_nds_db_normal_users_firstname'];
        $official_lname = $res_profile_page_institution_official_user['ogenius_nds_db_normal_users_lastname'];
        $official_username = $res_profile_page_institution_official_user['ogenius_nds_db_normal_users_names'];
        $official_gender = $res_profile_page_institution_official_user['ogenius_nds_db_normal_users_gender'];
        $official_marital_status = $res_profile_page_institution_official_user['ogenius_nds_db_normal_users_marital_status'];
        $official_institution = $res_profile_page_institution_official_user['ogenius_nds_db_normal_users_institution'];
        $official_department = $res_profile_page_institution_official_user['ogenius_nds_db_normal_users_department'];
        $official_position = $res_profile_page_institution_official_user['ogenius_nds_db_normal_users_position'];
        $official_province = $res_profile_page_institution_official_user['ogenius_nds_db_normal_users_province'];
        $official_district = $res_profile_page_institution_official_user['ogenius_nds_db_normal_users_district'];
        $official_sector = $res_profile_page_institution_official_user['ogenius_nds_db_normal_users_sector'];
        $official_work_phone = $res_profile_page_institution_official_user['ogenius_nds_db_normal_users_tel'];
        $official_address_mail = $res_profile_page_institution_official_user['ogenius_nds_db_normal_users_email'];
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

                        <img id="profile_page_official_img_data" class="img-responsive" src="uploaded_images/<?php echo "" . (!empty($indiv_avatar)) ? $indiv_avatar : "nds_avatar.png"; ?>"/>

                    <?php } else { ?>
                        <img id="profile_page_official_img_data" src="<?php
                        if (!empty($indiv_avatar)) {
                            echo "" . (filter_var($indiv_avatar)) ? $indiv_avatar : "uploaded_images/" . $indiv_avatar;
                        } else {
                            echo "" . "uploaded_images/" . "nds_avatar.png";
                        }
                        ?>" class="img-responsive" />

                    <?php } ?>
                    <img onclick="upload_profile_page_official_avatar_image()" src="system_images/edit_profile_image.png" class="image24" style="cursor: pointer;" />


                    <div id="profile_image_official_choose_img_from_device" class="panel panel-shadow" style="z-index:1200; position: absolute;background:white">
                        <input type="button" onclick="hideTheProfile_official_PopProfileImage()" value="X" style="background:white;border:1px solid red;border-radius:3px;color:red;float: right;margin-right: 20px;margin-top: 10px;" />

                        <div id="profile_image_official_choose_img_from_device_data" class="panel-body">
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
                </div>
            </div>
            <div class="col-md-10">
                <div class="container-fluid">
                    <h1 class="page-header">

                        <?php
                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_0("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_0("system_config_xml/" . $_global_language)->item(0)->textContent;
                        } else {
                            ?>
                            Your account
                        <?php } ?>

                    </h1>
                    <div>
                        <div class = "form-group col-md-4">
                            <label class = "control-label"> <?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_1("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_1("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                    First name
                                <?php } ?>
                            </label>
                            <div class="startrowstart">
                                <input disabled="disabled" id="official_fname" value="<?php echo "" . $official_fname; ?>" class="accountRegPuts form-control" placeholder="<?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_3("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_3("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                           First name here
                                       <?php } ?>" type="text" />
                                <input type="checkbox" style="margin: 0 4px" onclick="enableThisIndivProfPageDiv(this, 'official_fname')" id="official_fname_check" />
                            </div>
                        </div>
                        <div class = "form-group col-md-4">
                            <label class = "control-label"> <?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_2("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_2("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                    Last name
                                <?php } ?>
                            </label>
                            <div class="startrowstart">
                                <input disabled="disabled" id="official_lname" value="<?php echo "" . $official_lname; ?>" class="form-control" placeholder="<?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_4("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_4("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                           Last name here
                                       <?php } ?>" type="text" />
                                <input type="checkbox" style="margin: 0 4px" onclick="enableThisIndivProfPageDiv(this, 'official_lname')" id="official_lname_check" />

                            </div>
                        </div>
                        <div class = "form-group col-md-4">
                            <label class = "control-label"> <?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_44("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_44("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                    Username
                                <?php } ?>
                            </label>
                            <div class="startrowstart">
                                <input onkeyup="official_nds_validate_Username(this)" onchange="official_nds_validate_Username(this)" disabled="disabled" id="official_username" value="<?php echo "" . $official_username; ?>" class="form-control accountRegPuts_small_" type="text" />

                                <input type="checkbox" onclick="enableThisIndivProfPageDiv(this, 'official_username')" style="margin: 0 4px" id="official_username_check" />
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class = "form-group col-md-4">
                            <label class = "control-label"><?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_5("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_5("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                    Gender
                                <?php } ?>
                            </label>
                            <div class="startrowstart">
                                <select id="official_gender_id" value='<?php echo "" . $official_gender; ?>' disabled="disabled"  class="accountRegPuts form-control">
                                    <option value='male' <?php echo "" . ($official_gender == "male") ? "selected" : ""; ?>><?php
                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_6("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_6("system_config_xml/" . $_global_language)->item(0)->textContent;
                                        } else {
                                            ?>
                                            Male
                                        <?php } ?></option>
                                    <option value="female" <?php echo "" . ($official_gender == "female") ? "selected" : ""; ?>><?php
                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_7("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_7("system_config_xml/" . $_global_language)->item(0)->textContent;
                                        } else {
                                            ?>
                                            Female
                                        <?php } ?></option>
                                </select>
                                <input type="checkbox" onclick="enableThisIndivProfPageDiv(this, 'official_gender_id')" style="margin: 0 4px" id="official_gender_id_check" />
                            </div>
                        </div>
                        <div class = "form-group col-md-offset-1 col-md-4">
                            <label class = "control-label"><?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_8("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_8("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                    Marital status
                                <?php } ?>
                            </label>
                            <div class="startrowstart">
                                <select value='' disabled="true" class="accountRegPuts form-control" id="official_marital_status" type="text" >
                                    <option value='single' <?php echo "" . ($official_marital_status == "single") ? "selected" : ""; ?>><?php
                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_15("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_15("system_config_xml/" . $_global_language)->item(0)->textContent;
                                        } else {
                                            ?>
                                            Single
                                        <?php } ?></option>
                                    <option value="married" <?php echo "" . ($official_marital_status == "married") ? "selected" : ""; ?>><?php
                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_16("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_16("system_config_xml/" . $_global_language)->item(0)->textContent;
                                        } else {
                                            ?>
                                            Married
                                        <?php } ?></option>
                                    <option value="divorced" <?php echo "" . ($official_marital_status == "divorced") ? "selected" : ""; ?>><?php
                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_17("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_17("system_config_xml/" . $_global_language)->item(0)->textContent;
                                        } else {
                                            ?>
                                            Divorced
                                        <?php } ?></option>
                                    <option value="widow" <?php echo "" . ($official_marital_status == "widow") ? "selected" : ""; ?>><?php
                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_18("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_18("system_config_xml/" . $_global_language)->item(0)->textContent;
                                        } else {
                                            ?>
                                            Widow
                                        <?php } ?></option>
                                    <option value="widower" <?php echo "" . ($official_marital_status == "widower") ? "selected" : ""; ?>><?php
                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_19("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_19("system_config_xml/" . $_global_language)->item(0)->textContent;
                                        } else {
                                            ?>
                                            Widower
                                        <?php } ?></option>
                                </select>
                                <input type="checkbox" style="margin: 0 4px" onclick="enableThisIndivProfPageDiv(this, 'official_marital_status')" id="official_marital_status_check" />
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class = "form-group col-md-4">
                            <label class = "control-label"><?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_14("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_14("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                    Institution
                                <?php } ?>
                            </label>

                            <input disabled="disabled" id="official_institution_name" disabled="disabled" value="<?php echo "" . $official_institution; ?>" type="text" style="margin: 0 4px"  type="text" />


                        </div>
                        <div class = "form-group col-md-4">
                            <label class = "control-label"><?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_15("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_15("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                    Department
                                <?php } ?>
                            </label>
                            <div class="startrowstart">
                                <input disabled="disabled" id="official_department" value="<?php echo "" . $official_department; ?>" class="accountRegPuts form-control" placeholder="<?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_15("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_15("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                           Department
                                       <?php } ?>" type="text" />
                                <input type="checkbox" onclick="enableThisIndivProfPageDiv(this, 'official_department')" style="margin: 0 4px" id="official_department_check" />
                            </div>
                        </div>
                        <div class = "form-group col-md-4">
                            <label class = "control-label"><?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_16("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_16("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                    Position
                                <?php } ?>
                            </label>
                            <div class="startrowstart">
                                <input disabled="disabled" id="official_position" value="<?php echo "" . $official_position; ?>" class="accountRegPuts form-control" placeholder="<?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_16("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_16("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                           Position
                                       <?php } ?>" type="text" />
                                <input type="checkbox" style="margin: 0 4px" onclick="enableThisIndivProfPageDiv(this, 'official_position')" id="official_position_check" />
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class = "form-group col-md-4">
                            <label class = "control-label"><?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_17("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_17("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                    Province
                                <?php } ?>
                            </label>
                            <div class="startrowstart">
                                <input disabled="disabled" id="official_province" value='<?php echo "" . $official_province; ?>' class="form-control accountRegPuts" placeholder="<?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_17("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_17("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                           Province
                                       <?php } ?>" type="text" />
                                <input type="checkbox" style="margin: 0 4px" onclick="enableThisIndivProfPageDiv(this, 'official_province')" id="official_province_check" />
                            </div>
                        </div>
                        <div class = "form-group col-md-4">
                            <label class = "control-label"><?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_18("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_18("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                    District
                                <?php } ?>
                            </label>
                            <div class="startrowstart">
                                <input disabled="disabled" id="official_district" value="<?php echo "" . $official_district; ?>" class="form-control accountRegPuts" placeholder="<?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_18("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_18("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                           District
                                       <?php } ?>" type="text" />
                                <input type="checkbox" style="margin: 0 4px" onclick="enableThisIndivProfPageDiv(this, 'official_district')" id="official_district_check" />
                            </div>
                        </div>
                        <div class = "form-group col-md-4">
                            <label class = "control-label"> Sector
                            </label>
                            <div class="startrowstart">
                                <input disabled="disabled" id="official_sector" value="<?php echo "" . $official_sector; ?>" class="form-control accountRegPuts" placeholder="<?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_19("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_19("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                           Sector
                                       <?php } ?>" type="text" />
                                <input type="checkbox" onclick="enableThisIndivProfPageDiv(this, 'official_sector')" style="margin: 0 4px" id="official_sector_check" />
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class = "form-group col-md-4">
                            <label class = "control-label"><?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_20("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_20("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                    Work phone
                                <?php } ?>
                            </label>
                            <div class="startrowstart">
                                <input onkeydown="official_profile_page_nds_validate_Phone(this, event)" onchange="official_profile_page_nds_validate_Phone(this, event)" disabled="disabled" maxlength="12" id="official_phone" value="<?php echo "" . $official_work_phone; ?>" class="accountRegPuts form-control" placeholder="(+250)4494949" type="text" />

                                <input style="margin: 0 4px" type="checkbox" onclick="enableThisIndivProfPageDiv(this, 'official_phone')" id="official_phone_check" />
                            </div>
                        </div>
                        <div class = "form-group col-md-4">
                            <label class = "control-label"><?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_21("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_21("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                    Company address mail
                                <?php } ?>
                            </label>
                            <div class="startrowstart">
                                <input onkeydown="official_profile_page_email_validate(this, event)" onchange="official_profile_page_email_validate(this, event)" disabled="disabled" id="official_email" value="<?php echo "" . $official_address_mail; ?>" class="accountRegPuts form-control" placeholder="" type="email" />
                                <input type="checkbox" style="margin: 0 4px" onclick="enableThisIndivProfPageDiv(this, 'official_email')" id="official_email_check" />
                            </div>
                        </div>
                        <div class = "form-group col-md-4">
                            <input id="official_password_change_0" onclick="show_official_ProfilePagePopUp_passwords(this)" value="<?php
                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_22("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_22("system_config_xml/" . $_global_language)->item(0)->textContent;
                            } else {
                                ?>
                                       Change password
                                   <?php } ?>" style="padding: 5px;background: #009999;color: white;border: 3px solid #009999 ;" type="button" />
                        </div>
                    </div>
                </div>
                <div>
                    <div class = "form-group col-md-6">
                        <input onclick="save_Official_profilePageChanges()" type="button" class="btn btn-primary" value="<?php
                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_23("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_23("system_config_xml/" . $_global_language)->item(0)->textContent;
                        } else {
                            ?>
                                   Save changes
                               <?php } ?>"/>

                    </div>
                    <div class = "form-group col-md-6">
                        <button onclick="official_profile_page_institution_continue()" class="btn btn-info "> <?php
                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_24("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_24("system_config_xml/" . $_global_language)->item(0)->textContent;
                            } else {
                                ?>
                                Continue
                            <?php } ?><img src="images/ic_navigate_next_black_48dp.png" class="image24" /></button>

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
