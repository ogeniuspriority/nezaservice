<?php require_once "includes/app_up_nav.php"
?>
<input type="hidden" id="theOurIdUser" value="<?php echo "" . $id_xxxccc88; ?>" />
<?php
$sql_profile_page_institution_official_user = "SELECT * FROM  ogenius_nds_db_normal_users WHERE     ogenius_nds_db_normal_users_id='{$id_xxxccc88}' ORDER BY         ogenius_nds_db_normal_users_id DESC LIMIT 1";
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

<body style="background: white;">
    <div style="clear: both;margin-top: 2.5%;"></div>
    <div style="width: 100%;text-align: left;">
        <table style="width: 100%;">
            <tr>
                <td style="width: 20%;">
                    <div style="margin-left: 30%;margin-top: -120%;" >
                        <?php
                        if ($indiv_social_goo < 1) {
                            ?>

                            <img id="profile_page_official_img_data" src="uploaded_images/<?php echo "" . (!empty($indiv_avatar)) ? $indiv_avatar : "nds_avatar.png"; ?>" style="cursor:hand;width: 150px;height: 150px;border-radius:150px;" />

                        <?php } else { ?>
                            <img id="profile_page_official_img_data" src="<?php
                            if (!empty($indiv_avatar)) {
                                echo "" . (filter_var($indiv_avatar)) ? $indiv_avatar : "uploaded_images/" . $indiv_avatar;
                            } else {
                                echo "" . "uploaded_images/" . "nds_avatar.png";
                            }
                            ?>" style="cursor:hand;width: 150px;height: 150px;border-radius:150px;" />

                             <?php } ?>
                        <img onclick="upload_profile_page_official_avatar_image()" src="system_images/edit_profile_image.png" style="width:20px;height: 20px;cursor: hand;" />
                        <div id="profile_image_official_choose_img_from_device" style=";box-shadow: 2px 2px 2px gray;z-index: 5000;border:1px solid gray;width: auto;height: auto;z-index: 50000;position: absolute;background:white;">
                            <input type="button" onclick="hideTheProfile_official_PopProfileImage()" value="X" style="background:white;border:1px solid red;border-radius:3px;color:red;float: right;margin-right: 20px;margin-top: 10px;" />
                            <div id="profile_image_official_choose_img_from_device_data">
                                <table style="margin: auto;">
                                    <tr>
                                        <td><img src="system_images/imageEmoticon_choose.png" style="max-width:300px;max-height: 300px;border-radius: 4px;" /></td>
                                    </tr>
                                </table>
                                <table style="margin: auto;" id="profile_page_insti_tools_to_save_prof_img">
                                    <tr>
                                        <td style="width: 50px;"><img src="system_images/dicard_image_uploaded.jpg" style="width: 30px;height: 30px;border-radius: 3px;" /></td><td style="width: 50px;"><img src="system_images/save_image_profile.jpg" style="width: 30px;height: 30px;border-radius: 3px;" /></td>
                                    </tr>
                                </table>

                            </div>                      
                        </div><!--<input type="button" value="Edit photo" style="margin-top:10px;margin-left:40px;;border:2px solid #009999;background:white;padding: 4px;" />
                        --></div></td>
                <td style="width: 79%;border-left: 2px solid #cdcdcd;background: #CDCDCD;padding: 0px;">
                    <div style="height: auto">
                        <div style="width: 100%;background: #cdcdcd;margin-top: 0%;padding-top: 10px;padding-bottom: 10px;">
<?php
if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_0("system_config_xml/" . $_global_language)->item(0)->textContent)) {
    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_0("system_config_xml/" . $_global_language)->item(0)->textContent;
} else {
    ?>
                                Your account
                            <?php } ?>
                        </div>
                        <div style="width: 100%;background: white;height: 600px;padding-top: 8px;">
                            <table style="margin-left: 5%;">
                                <tr>
                                    <td><?php
                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_1("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_1("system_config_xml/" . $_global_language)->item(0)->textContent;
                            } else {
                                ?>
                                            First name
                                        <?php } ?></td>
                                    <td><?php
                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_2("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_2("system_config_xml/" . $_global_language)->item(0)->textContent;
                                        } else {
                                            ?>
                                            Last name
                                        <?php } ?></td>
                                </tr>
                                <tr>
                                    <td>
                                        <input disabled="disabled" id="official_fname" value="<?php echo "" . $official_fname; ?>" class="accountRegPuts" placeholder="<?php
                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_3("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_3("system_config_xml/" . $_global_language)->item(0)->textContent;
                                        } else {
                                            ?>
                                                   First name here
                                        <?php } ?>" type="text" />
                                        <input type="checkbox" onclick="enableThisIndivProfPageDiv(this, 'official_fname')" id="official_fname_check" />

                                    </td>
                                    <td>
                                        <input disabled="disabled" id="official_lname" value="<?php echo "" . $official_lname; ?>" class="accountRegPuts" placeholder="<?php
                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_4("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_4("system_config_xml/" . $_global_language)->item(0)->textContent;
                                        } else {
                                            ?>
                                                   Last name here
                                        <?php } ?>" type="text" />
                                        <input type="checkbox" onclick="enableThisIndivProfPageDiv(this, 'official_lname')" id="official_lname_check" />

                                    </td>
                                </tr>
                            </table>
                            <table style="margin-left: 5%;margin-top: 3%;color:#333333">
                                <tr>
                                    <td><h4 style="text-align: left;"><?php
                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_44("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_44("system_config_xml/" . $_global_language)->item(0)->textContent;
                                        } else {
                                            ?>
                                                Username
                                            <?php } ?></h4>
                                        <table>
                                            <tr>
                                                <td>
                                                    <input onkeyup="official_nds_validate_Username(this)" onchange="official_nds_validate_Username(this)" disabled="disabled" id="official_username" value="<?php echo "" . $official_username; ?>" class="accountRegPuts_small_" type="text" />
                                                    <input type="checkbox" onclick="enableThisIndivProfPageDiv(this, 'official_username')" id="official_username_check" />
                                                    <div style="min-width: 20px"><div class="loader_span" id="official_username_wait00" style="position: absolute;"></div><div id="official_username_failed00" style="position: absolute;color: red;">&#10008;</div><div id="official_username_okay00" style="position: absolute;color: green">&#10004;</div></div>
                                                </td>
                                            </tr>
                                        </table></td>
                                </tr>
                            </table>
                            <table style="margin-left: 5%;margin-top: 5%;">
                                <tr>
                                    <td><h4><?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_5("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_5("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                Gender
                                            <?php } ?><span style='color: red;'></span></h4>
                                        <table>
                                            <tr>
                                                <td>
                                                    <select id="official_gender_id" value='<?php echo "" . $official_gender; ?>' disabled="disabled"  class="accountRegPuts">
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
                                                    <input type="checkbox" onclick="enableThisIndivProfPageDiv(this, 'official_gender_id')" id="official_gender_id_check" />
                                                </td>
                                            </tr>
                                        </table></td>

                                </tr>
                            </table>
                            <table style="margin-left: 5%;margin-top: 5%;">
                                <tr>

                                    <td><?php
                                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_8("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_8("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                            } else {
                                                                ?>
                                            Marital status
                                        <?php } ?></td>
                                </tr>
                                <tr>

                                    <td>
                                        <table>
                                            <tr>
                                                <td>
                                                    <select value='' disabled="true" class="accountRegPuts" id="official_marital_status" type="text" >
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
                                                    <input type="checkbox" onclick="enableThisIndivProfPageDiv(this, 'official_marital_status')" id="official_marital_status_check" />
                                                </td>
                                            </tr>
                                        </table></td>

                                </tr>
                            </table>
                            <table style="margin-left: 5%;margin-top: 5%;">
                                <tr>
                                    <td><?php
                                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_14("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_14("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                            } else {
                                                                ?>
                                            Institution
                                        <?php } ?></td>
                                    <td><?php
                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_15("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_15("system_config_xml/" . $_global_language)->item(0)->textContent;
                                        } else {
                                            ?>
                                            Department
                                        <?php } ?></td>
                                    <td><?php
                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_16("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_16("system_config_xml/" . $_global_language)->item(0)->textContent;
                                        } else {
                                            ?>
                                            Position
                                        <?php } ?></td>
                                </tr>
                                <tr>
                                    <td>
                                        <input disabled="disabled" id="official_institution_name" disabled="disabled" value="<?php echo "" . $official_institution; ?>" type="text" class="accountRegPuts"  type="text" />
                                        <!-- <input type="checkbox" onclick="enableThisIndivProfPageDiv(this,'official_institution_name')" id="official_institution_name_check" />
                                        -->
                                    </td>
                                    <td>
                                        <input disabled="disabled" id="official_department" value="<?php echo "" . $official_department; ?>" class="accountRegPuts" placeholder="<?php
                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_15("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_15("system_config_xml/" . $_global_language)->item(0)->textContent;
                                        } else {
                                            ?>
                                                   Department
                                        <?php } ?>" type="text" />
                                        <input type="checkbox" onclick="enableThisIndivProfPageDiv(this, 'official_department')" id="official_department_check" />

                                    </td>
                                    <td>
                                        <input disabled="disabled" id="official_position" value="<?php echo "" . $official_position; ?>" class="accountRegPuts" placeholder="<?php
                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_16("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_16("system_config_xml/" . $_global_language)->item(0)->textContent;
                                        } else {
                                            ?>
                                                   Position
                                        <?php } ?>" type="text" />
                                        <input type="checkbox" onclick="enableThisIndivProfPageDiv(this, 'official_position')" id="official_position_check" />

                                    </td>
                                </tr>
                            </table>

                            <table style="margin-left: 5%;margin-top: 5%;">
                                <tr>
                                    <td><?php
                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_17("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_17("system_config_xml/" . $_global_language)->item(0)->textContent;
                                        } else {
                                            ?>
                                            Province
                                        <?php } ?></td>
                                    <td><?php
                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_18("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_18("system_config_xml/" . $_global_language)->item(0)->textContent;
                                        } else {
                                            ?>
                                            District
                                        <?php } ?></td>
                                    <td>Sector</td>
                                </tr>
                                <tr>
                                    <td>
                                        <input disabled="disabled" id="official_province" value='<?php echo "" . $official_province; ?>' class="accountRegPuts" placeholder="<?php
                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_17("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_17("system_config_xml/" . $_global_language)->item(0)->textContent;
                                        } else {
                                            ?>
                                                   Province
                                        <?php } ?>" type="text" />
                                        <input type="checkbox" onclick="enableThisIndivProfPageDiv(this, 'official_province')" id="official_province_check" />

                                    </td>
                                    <td>
                                        <input disabled="disabled" id="official_district" value="<?php echo "" . $official_district; ?>" class="accountRegPuts" placeholder="<?php
                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_18("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_18("system_config_xml/" . $_global_language)->item(0)->textContent;
                                        } else {
                                            ?>
                                                   District
                                        <?php } ?>" type="text" />
                                        <input type="checkbox" onclick="enableThisIndivProfPageDiv(this, 'official_district')" id="official_district_check" />

                                    </td>
                                    <td>
                                        <input disabled="disabled" id="official_sector" value="<?php echo "" . $official_sector; ?>" class="accountRegPuts" placeholder="<?php
                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_19("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_19("system_config_xml/" . $_global_language)->item(0)->textContent;
                                        } else {
                                            ?>
                                                   Sector
                                        <?php } ?>" type="text" />
                                        <input type="checkbox" onclick="enableThisIndivProfPageDiv(this, 'official_sector')" id="official_sector_check" />

                                    </td>

                                </tr>
                            </table>
                            <table style="margin-left: 5%;margin-top: 5%;">
                                <tr>
                                    <td><?php
                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_20("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_20("system_config_xml/" . $_global_language)->item(0)->textContent;
                                        } else {
                                            ?>
                                            Work phone
                                        <?php } ?></td>
                                    <td><?php
                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_21("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_21("system_config_xml/" . $_global_language)->item(0)->textContent;
                                        } else {
                                            ?>
                                            Company address mail
                                        <?php } ?></td>

                                </tr>
                                <tr>
                                    <td>
                                        <input onkeydown="official_profile_page_nds_validate_Phone(this, event)" onchange="official_profile_page_nds_validate_Phone(this, event)" disabled="disabled" maxlength="12" id="official_phone" value="<?php echo "" . $official_work_phone; ?>" class="accountRegPuts" placeholder="(+250)4494949" type="text" />
                                        <input type="checkbox" onclick="enableThisIndivProfPageDiv(this, 'official_phone')" id="official_phone_check" />
                                        <div style="min-width: 20px"><div class="loader_span" id="official_phone_wait00" style="position: absolute;"></div><div id="official_phone_failed00" style="position: absolute;color: red;">&#10008;</div><div id="official_phone_okay00" style="position: absolute;color: green">&#10004;</div></div>
                                    </td>
                                    <td>
                                        <input onkeydown="official_profile_page_email_validate(this, event)" onchange="official_profile_page_email_validate(this, event)" disabled="disabled" id="official_email" value="<?php echo "" . $official_address_mail; ?>" class="accountRegPuts" placeholder="" type="email" />
                                        <input type="checkbox" onclick="enableThisIndivProfPageDiv(this, 'official_email')" id="official_email_check" />
                                        <div style="min-width: 20px"><div class="loader_span" id="official_email_wait00" style="position: absolute;"></div><div id="official_email_failed00" style="position: absolute;color: red;">&#10008;</div><div id="official_email_okay00" style="position: absolute;color: green">&#10004;</div></div>

                                    </td>

                                    <td>
                                        <input id="official_password_change_0" onclick="show_official_ProfilePagePopUp_passwords(this)" value="<?php
                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_22("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_22("system_config_xml/" . $_global_language)->item(0)->textContent;
                                        } else {
                                            ?>
                                                   Change password
                                        <?php } ?>" style="padding: 5px;background: #009999;color: white;border: 3px solid #009999 ;" type="button" />
                                    </td>

                                </tr>
                            </table>
                            <div id="official_profile_page_password_popup" style="border:1px solid #0080FF;background: rgba(255,255,255,0.8);z-index:4000;position: absolute;visibility: hidden;border-radius: 10px;">
                                <input onclick="official_hideThePassPopUp()" type="button" class="btn" style="float: right;" value="<?php
                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_3("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_3("system_config_xml/" . $_global_language)->item(0)->textContent;
                                        } else {
                                            ?>
                                           Close
                                <?php } ?>" />
                                <div style="margin-top: 10px;">
                                    <table>
                                        <tr>
                                            <td><input style="color: black;font-size: 18px;" id="official_profile_page_password_old" type="password" placeholder="Old <?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_32("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_32("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                                           Password
                                                <?php } ?>" class="accountRegPuts" /></td>
                                        </tr>
                                        <tr>
                                            <td><input style="color: black;font-size: 18px;" id="official_profile_page_password_new" type="password" placeholder="New <?php
                                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_32("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_32("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                } else {
                                                    ?>
                                                           Password
                                                <?php } ?>" class="accountRegPuts" /></td>
                                        </tr>
                                        <tr>
                                            <td><input style="color: black;font-size: 18px;" id="official_profile_page_password_repeat" type="password" placeholder="<?php
                                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_33("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_33("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                } else {
                                                    ?>
                                                           confirm password
                                                <?php } ?>" class="accountRegPuts" /></td>
                                        </tr>
                                        <tr>
                                            <td><input onclick="saveThisPasswordXchange_official_profile_page(<?php echo "" . $id_xxxccc88; ?>)" style="margin-left: 30%;" type="button" class="btn" value="<?php
                                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_23("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_23("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                } else {
                                                    ?>
                                                           Save changes
                                                <?php } ?>" /></td>
                                        </tr>

                                    </table>
                                    <div id="official_password_change_cool"  style="height: 60px;">
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
                                                <td><div style="min-width: 20px"><div class="loader_span" id="official_profile_page_password_wait" style="position: absolute;"></div><div id="official_profile_page_password_failed" style="position: absolute;color: red;">&#10008;</div><div id="official_profile_page_password_okay" style="position: absolute;color: green">&#10004;</div></div></td>

                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <table style="margin-left: 35%;margin-top: 5%;padding-bottom: 4%;">
                                    <tr>
                                        <td>
                                            <input onclick="save_Official_profilePageChanges()" type="button" value="<?php
                                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_23("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_23("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                } else {
                                                    ?>
                                                       Save changes
                                            <?php } ?>" style="cursor:hand;border:2px solid #0080FF;background:white;padding: 5px; width: 120px; " />
                                        </td>
                                        <td>
                                            <div  onclick="official_profile_page_institution_continue()" style="cursor:hand;margin-left:30%;border:2px solid #0080FF;background:white;padding: 1px; width: 120px;text-align: center;padding-left:25%;">
                                                <table>
                                                    <tr>
                                                        <td><label><?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_24("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_profile_page_officials_24("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                                    Continue
                                                                <?php } ?></label></td>
                                                        <td><img src="images/ic_navigate_next_black_48dp.png" style="width: 10px;height: 10px;" /></td>
                                                    </tr>
                                                </table>
                                            </div></td>
                                    </tr>
                                </table>
                            </div>

                        </div>

                    </div></td>
            </tr>
        </table>

    </div>
<?php
require_once ("includes/app_footer.php");
?>

    <script src="jquery/jquery.js" type="text/javascript"></script>
    <script src="jquery/special_ui/jquery-ui.js" type="text/javascript"></script>
    <script src="js/nds_main.js" type="text/javascript"></script>
    <!-- Date picker -->
    <script type="text/javascript" src="jquery/ui_datepicker_lib/jquery.timepicker.js"></script>
    <link rel="stylesheet" type="text/css" href="jquery/ui_datepicker_lib/jquery.timepicker.css" />
    <script type="text/javascript" src="jquery/ui_datepicker_lib/lib/bootstrap-datepicker.js"></script>
    <link rel="stylesheet" type="text/css" href="jquery/ui_datepicker_lib/lib/bootstrap-datepicker.css" />
    <script type="text/javascript" src="jquery/ui_datepicker_lib/lib/site.js"></script>

</body>