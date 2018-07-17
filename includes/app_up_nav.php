<?php

require_once 'includes/header.php';
//----------------redirect if no logging or s session key
if (!(isset($_SESSION["ogenius_nds_user_id_x2309999_990"]))&& !(isset($_COOKIE["ogenius_nds_user_id_x2309999_990"]))) {
    echo "<h4 style='text-align:center;'>...</h4>";
    @header("Location:index.php");
    ?>
<script type="text/javascript">
    window.location="index.php";
</script>

<?php
} else {
    
}

?>
<?php
//------------------------------Individual personal data-------------------------------
$id_xxxccc88 = $_SESSION["ogenius_nds_user_id_x2309999_990"];
require_once ("includes/conn/config.php");
?>
<?php
require_once ("includes/classes/database.php");
?>
<?php
$sql_profile_page_individual_user_gen = "SELECT * FROM  ogenius_nds_db_normal_users WHERE     ogenius_nds_db_normal_users_id='{$id_xxxccc88}' ORDER BY         ogenius_nds_db_normal_users_id DESC LIMIT 1";
$query_profile_page_individual_user_gen = $database->query("SELECT * FROM  ogenius_nds_db_normal_users WHERE     ogenius_nds_db_normal_users_id='{$id_xxxccc88}' ORDER BY         ogenius_nds_db_normal_users_id DESC LIMIT 1");
if ($query_profile_page_individual_user_gen) {
    //---------------------
    while ($res_profile_page_individual_user_gen = mysqli_fetch_array($query_profile_page_individual_user_gen)) {
        //--------------------------
        $indiv_fname_gen = $res_profile_page_individual_user_gen['ogenius_nds_db_normal_users_firstname'];
        $indiv_lname_gen = $res_profile_page_individual_user_gen['ogenius_nds_db_normal_users_lastname'];
        $indiv_birthdate_gen = $res_profile_page_individual_user_gen['ogenius_nds_db_normal_users_birthdate'];
        $indiv_marital_status_gen = $res_profile_page_individual_user_gen['ogenius_nds_db_normal_users_marital_status'];
        $indiv_profession_gen = $res_profile_page_individual_user_gen['ogenius_nds_db_normal_users_profession'];
        $indiv_tel_gen = $res_profile_page_individual_user_gen['ogenius_nds_db_normal_users_tel'];
        $indiv_province_gen = $res_profile_page_individual_user_gen['ogenius_nds_db_normal_users_province'];
        $indiv_district_gen = $res_profile_page_individual_user_gen['ogenius_nds_db_normal_users_district'];
        $indiv_sector_gen = $res_profile_page_individual_user_gen['ogenius_nds_db_normal_users_sector'];
        $indiv_username_gen = $res_profile_page_individual_user_gen['ogenius_nds_db_normal_users_names'];
        $indiv_email_gen = $res_profile_page_individual_user_gen['ogenius_nds_db_normal_users_email'];
        $indiv_gender_gen = $res_profile_page_individual_user_gen['ogenius_nds_db_normal_users_gender'];
        $indiv_avatar = $res_profile_page_individual_user_gen['ogenius_nds_db_normal_users_avatar'];
        $indiv_social_goo = $res_profile_page_individual_user_gen['ogenius_nds_db_normal_users_api_log_face_goo_id'];
        $indiv_vip_tag_goo = $res_profile_page_individual_user_gen['ogenius_nds_db_normal_users_user_vip_tag'];
        //-----------account type institution---
        $insitution_profile_2017 = $res_profile_page_individual_user_gen['ogenius_nds_db_normal_users_institution'];
        $temp_var_intitution_name = strtolower($insitution_profile_2017);
    }
}
?>



<nav class="navbar navbar-inverse navbar-fixed-top" id="main-nav">

    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <img class="image24"src="images/ic_settings_applications_white_24dp.png"/>
            </button>
            <?php
            switch ($indiv_vip_tag_goo) {
                case "0":
                    ?>
                    <a class="navbar-brand centerrow" href="main_page.php"> <img class="image24" src="system_images/nds_logo.png">Neza Digital Service </a> 
                    <?php
                    break;
                case "1":
                    $temp_var_intitution_name = strtolower($temp_var_intitution_name);
                    if ($temp_var_intitution_name == "rgb") {
                        ?>
                        <a class="navbar-brand centerrow" href="main_page_institution_rgb.php"> <img class="image24"  src="system_images/nds_logo.png">Neza Digital Service </a> 
                        <?php
                    } else {
                        ?>
                        <a class="navbar-brand centerrow" href="main_page_institution.php"> <img class="image24"  src="system_images/nds_logo.png">Neza Digital Service </a> 
                        <?php
                    }

                    break;

                case"2":
                    $temp_var_intitution_name = strtolower($temp_var_intitution_name);
                    if ($temp_var_intitution_name == "rgb") {
                        ?>
                        <a class="navbar-brand centerrow" href="main_page_institution_rgb.php"> <img class="image24"  src="system_images/nds_logo.png">Neza Digital Service </a> 
                        <?php
                    } else {
                        ?>
                        <a class="navbar-brand centerrow" href="main_page_institution_rgb.php"> <img class="image24" src="system_images/nds_logo.png">Neza Digital Service </a> 

                        <?php
                        break;
                    }
            }
            ?>
        </div>
        <div id="navbar" class="navbar-collapse collapse">

            <ul class="nav navbar-nav navbar-right startrow">

                <li> <a href="ajax_php_user_scripts/logout.php"> 
                        <?php
                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_header_2("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_header_2("system_config_xml/" . $_global_language)->item(0)->textContent;
                        } else {
                            ?>
                            Logout
                        <?php } ?></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right centerrow" >

                   
                <li><?php              
   
                
                
                    switch ($indiv_vip_tag_goo) {
                        case "0":
                            ?><a href="profile_page.php"> <?php
                                if ($indiv_social_goo < 1) {
                                    ?>
                                    <img src="uploaded_images/<?php echo "" . (!empty($indiv_avatar)) ? $indiv_avatar : "nds_avatar.png"; ?>" class="image24"/>
                                    <?php
                                } else {
                                    ?><img class="image24" src="<?php
                                    if (!empty($indiv_avatar)) {
                                        echo "" . (strlen($indiv_avatar) > 26) ? $indiv_avatar : "uploaded_images/" . $indiv_avatar;
                                    } else {
                                        echo "" . "uploaded_images/" . "nds_avatar.png";
                                    }
                                    ?>"  />

                                <?php } ?></a>


                            <?php
                            break;
                        case "1":
                            ?>

                            <a href="profile_page_institution.php">

                                <?php
                                if ($indiv_social_goo != 1) {
                                    ?>
                                    <input type="hidden" value="rgb" id="account_profile_institution_check9" />
                                    <img src="uploaded_images/<?php echo "" . (!empty($indiv_avatar)) ? $indiv_avatar : "nds_avatar.png"; ?>"class="image24" />

                                <?php } else { ?>
                                    <input type="hidden" value="insti" id="account_profile_institution_check9" />
                                    <img src="<?php echo "" . $indiv_avatar; ?>"  class="image24" />

                                <?php } ?></a>

                            <?php
                            break;
                        case "2":
                            ?>

                            <a href="profile_page_officials.php" >

                                <?php
                                if ($indiv_social_goo != 1) {
                                    ?>
                                    <input type="hidden" value="rgb" id="account_profile_institution_check9" />
                                    <img src="uploaded_images/<?php echo "" . (!empty($indiv_avatar)) ? $indiv_avatar : "nds_avatar.png"; ?>"  class="image24"/></td>

                                <?php } else { ?>
                                    <input type="hidden" value="insti" id="account_profile_institution_check9" />
                                    <img src="<?php echo "" . $indiv_avatar; ?>"  class="image24" />

                                <?php } ?></a>

                            <?php
                            break;
                    }
                    ?>                           
                <li><b><span><?php echo "" . $indiv_username_gen; ?></span></b></li>
                <li><?php
                    switch ($indiv_vip_tag_goo) {
                        case "0":
                            ?>
                            <a href="community_user_settings.php"><img src="images/ic_settings_white_48dp.png" class="image24" /></a>


                            <?php
                            break;
                        case "1":
                            ?>
                            <a href="institution_user_settings.php"><img src="images/ic_settings_white_48dp.png" class="image24"/></a>                      

                            <?php
                            break;
                        case "2":
                            ?>
                            <a href="official_user_settings.php"><img src="images/ic_settings_white_48dp.png" class="image24" /></a>


                            <?php
                            break;
                    }
                    ?>
                </li>
                <li><a href="#"><img src="images/ic_help_white_24dp.png"/></a></li>

            </ul>

        </div>
    </div>
</nav>

<div style="visibility:hidden;position: absolute;margin-left: 10%;margin-top:700px;border-radius: 8px;box-shadow: 2px 3px 5px #000000;width: 350px;z-index: 3000;padding: 8px;background: #ffffff">
    <p style="text-align: center;">
        <span >
            <?php
            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_header_3("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_header_3("system_config_xml/" . $_global_language)->item(0)->textContent;
            } else {
                ?>
                Are you sure, you want to Activate
            <?php } ?>
        </span><span style="visibility: hidden;position: absolute" >
            <?php
            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_header_4("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_header_4("system_config_xml/" . $_global_language)->item(0)->textContent;
            } else {
                ?>
                Are you sure, you want to Suspend
            <?php } ?>

        </span><span style="visibility: hidden;position: absolute" >
            <?php
            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_header_5("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_header_5("system_config_xml/" . $_global_language)->item(0)->textContent;
            } else {
                ?>
                Are you sure, you want to Reactivate
            <?php } ?>
        </span><span style="color: #0000FF">Mugabo Shyaka</span>
        <?php
        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_header_6("system_config_xml/" . $_global_language)->item(0)->textContent)) {
            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_header_6("system_config_xml/" . $_global_language)->item(0)->textContent;
        } else {
            ?>
            account
        <?php } ?>

    </p>
    <table style="margin: auto;">
        <tr>
            <td>
                <input class="btn" type="button" value="<?php
                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_header_7("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_header_7("system_config_xml/" . $_global_language)->item(0)->textContent;
                } else {
                    ?>
                           Cancel
                       <?php } ?>" />
            </td>
            <td>
                <input class="btn" type="button" value="<?php
                       if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_header_8("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                           echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_header_8("system_config_xml/" . $_global_language)->item(0)->textContent;
                       } else {
                           ?>
                           Confirm
                       <?php } ?> " />
            </td>
        </tr>
    </table>
</div>