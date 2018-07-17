<?php require_once "includes/app_up_nav.php"
?>
<input type="hidden" id="whichPageSettings" value="institution_user" />
<input type="hidden" value="<?php echo "" . $id_xxxccc88; ?>" id="common_user_settings_the_id" />

<div class="main-content" style="width:100%">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <ul class="nav nav-sidebar">
                    <li id="settings_list_li_Admin">
                        <a href="#"><?php
                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_official_user_settings_0("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_official_user_settings_0("system_config_xml/" . $_global_language)->item(0)->textContent;
                            } else {
                                ?>
                                Admin
                            <?php } ?><span class="sr-only">(current)</span></a>
                    </li>
                    <li id="settings_list_li_Language"><a href="#"><?php
                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_official_user_settings_1("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_official_user_settings_1("system_config_xml/" . $_global_language)->item(0)->textContent;
                            } else {
                                ?>
                                Language
                            <?php } ?></a>
                    </li>
                    <li id="settings_list_li_Notification"><a href="#"><?php
                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_official_user_settings_2("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_official_user_settings_2("system_config_xml/" . $_global_language)->item(0)->textContent;
                            } else {
                                ?>
                                Notification
                            <?php } ?></a></li>
                    <li id="settings_list_li_Preferences"><a href="#"><?php
                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_official_user_settings_3("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_official_user_settings_3("system_config_xml/" . $_global_language)->item(0)->textContent;
                            } else {
                                ?>
                                Preferences
                            <?php } ?></a></li>
                    <li id="settings_list_li_Privacy"><a href="#"><?php
                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_official_user_settings_4("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_official_user_settings_4("system_config_xml/" . $_global_language)->item(0)->textContent;
                            } else {
                                ?>
                                Privacy
                            <?php } ?></a></li>
                    <li id="settings_list_li_Ads">
                        <a href="#">
                            <?php
                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_official_user_settings_5("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_official_user_settings_5("system_config_xml/" . $_global_language)->item(0)->textContent;
                            } else {
                                ?>
                                Ads
                            <?php } ?>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-6" id="screen_Language">
                <h1 class="page-header"> <?php
                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_official_user_settings_1("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_official_user_settings_1("system_config_xml/" . $_global_language)->item(0)->textContent;
                    } else {
                        ?>
                        Language
                    <?php } ?>
                </h1>
                <div>
                    <form>                                        
                        <ul>
                            <?php
                            //------------------find the chosen language----
                            require_once ("includes/conn/config.php");
                            require_once ("includes/classes/database.php");
                            //echo "The id is=>" . $id_xxxccc88;
                            $sql_community_user_settings_2017_lang_id = "SELECT * FROM   ogenius_nds_languages_for_settings_language_user_link WHERE ogenius_nds_languages_for_settings_language_user_link_id_user='{$id_xxxccc88}' ORDER BY ogenius_nds_languages_for_settings_language_user_link_id DESC LIMIT 1";
                            if ($query_community_user_settings_2017_lang_id = $database->query($sql_community_user_settings_2017_lang_id)) {
                                //---------------------
                                while ($res_community_user_settings_2017_lang_id = mysqli_fetch_array($query_community_user_settings_2017_lang_id)) {
                                    //----------------------The language id----------
                                    $language_id_2017 = $res_community_user_settings_2017_lang_id['ogenius_nds_languages_for_settings_language_user_link_id_languag'];
                                    //---------------------find all the languages----
                                    $sql_community_user_settings_2017_lang_name = "SELECT * FROM    ogenius_nds_languages_for_settings ORDER BY ogenius_nds_languages_for_settings_id DESC";
                                    if ($query_community_user_settings_2017_lang_name = $database->query($sql_community_user_settings_2017_lang_name)) {
                                        //---------------------
                                        while ($res_community_user_settings_2017_lang_name = mysqli_fetch_array($query_community_user_settings_2017_lang_name)) {
                                            //----------------------The language id----------
                                            $language_name_2017 = $res_community_user_settings_2017_lang_name['ogenius_nds_languages_for_settings_name_of_language'];
                                            $language_id_check_2017 = $res_community_user_settings_2017_lang_name['ogenius_nds_languages_for_settings_id'];
                                            //---------------------find all the languages----
                                            ?>

                                            <li class="startrow">
                                                <div><input style="width: 50px;height: 50px;" <?php echo ($language_id_2017 == $language_id_check_2017) ? "checked='true'" : ""; ?> onchange="official_user_settings_change_language(<?php echo "" . $language_id_check_2017; ?>,<?php echo "" . $id_xxxccc88; ?>)" name="lan_2017_community_settings" type="radio" /></div><div><?php echo "" . $language_name_2017; ?></div>
                                            </li>
                                            <?php
                                        }
                                    }
                                }
                            }
                            ?>
                        </ul>
                    </form>
                </div>
            </div>
            <div class="col-md-6" id="screen_Admin">

                <div class="page-header">
                    <h1>
                        <?php
                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_0("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_0("system_config_xml/" . $_global_language)->item(0)->textContent;
                        } else {
                            ?>
                            Admin
                        <?php } ?></h1>
                </div>
                <div>
                    <table style="margin: auto;">
                        <td>
                            <button class="btn btn-info adminUsersManu" id="activated_users">
                                <?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_6("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_6("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                    Activated users
                                <?php } ?>
                            </button></td>
                        <td>
                            <button class="btn btn-success adminUsersManu" id="not_activated_users">
                                <?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_7("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_7("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                    Not Activated users
                                <?php } ?>
                            </button></td>
                        <td>
                            <button class="btn btn-danger adminUsersManu" id="suspended_users">
                                <?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_8("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_8("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                    Suspended users
                                <?php } ?>
                            </button></td>
                    </table>
                </div>
                <div id="activated_users_view">
                    <?php
                    //----------------activated users of the instituion---------------
                    ?>
                    <?php
                    $_2017_insti = $insitution_profile_2017;
                    $_2017_insti = addslashes($_2017_insti);
                    $sql_institution_user_settings_active = "SELECT * FROM  ogenius_nds_db_normal_users WHERE           ogenius_nds_db_normal_users_institution='{$_2017_insti}' 
                    AND     ogenius_nds_db_normal_users_activated='1' 
                    AND     ogenius_nds_db_normal_users_id!='{$id_xxxccc88}' ORDER BY     ogenius_nds_db_normal_users_id DESC";
                    if ($query_institution_user_settings_active = $database->query($sql_institution_user_settings_active)) {
                        //---------------------

                        while ($res_institution_user_settings_active = mysqli_fetch_array($query_institution_user_settings_active)) {
                            $names_institution_user_settings_active = $res_institution_user_settings_active['ogenius_nds_db_normal_users_names'];
                            $position_institution_user_settings_active = $res_institution_user_settings_active['ogenius_nds_db_normal_users_position'];
                            $levelOfPriviledge_institution_user_settings_active = $res_institution_user_settings_active['ogenius_nds_db_normal_users_level_of_access'];
                            $regDate_institution_user_settings_active = $res_institution_user_settings_active['ogenius_nds_db_normal_users_regdate'];
                            $Email_institution_user_settings_active = $res_institution_user_settings_active['ogenius_nds_db_normal_users_email'];
                            $id_2017_institution_user_settings_active = $res_institution_user_settings_active['ogenius_nds_db_normal_users_id'];
                            ?>
                            <div class="table-responsive">

                                <table class="table table-striped">
                                    <thead>
                                    <th> <?php
                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_9("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_9("system_config_xml/" . $_global_language)->item(0)->textContent;
                                        } else {
                                            ?>
                                            Names
                                        <?php } ?> 
                                    </th>
                                    <th> <?php
                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_10("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_10("system_config_xml/" . $_global_language)->item(0)->textContent;
                                        } else {
                                            ?>
                                            Position
                                        <?php } ?>
                                    </th>
                                    <th>  <?php
                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_11("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_11("system_config_xml/" . $_global_language)->item(0)->textContent;
                                        } else {
                                            ?>
                                            Level of priviledge
                                        <?php } ?>  
                                    </th>
                                    <th>  <?php
                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_12("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_12("system_config_xml/" . $_global_language)->item(0)->textContent;
                                        } else {
                                            ?>
                                            Start Date
                                        <?php } ?>
                                    </th>
                                    <th> <?php
                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_13("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_13("system_config_xml/" . $_global_language)->item(0)->textContent;
                                        } else {
                                            ?>
                                            Email address
                                        <?php } ?> 
                                    </th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> <?php echo "" . $names_institution_user_settings_active; ?> </td>
                                            <td> <?php echo "" . $position_institution_user_settings_active; ?> </td>
                                            <td>
                                            <!--<select class="accountRegPuts" style="width: 200px;">-->
                                                <?php
                                                //---------------------The hierachical levels of priviledge---
                                                switch ($levelOfPriviledge_institution_user_settings_active) {
                                                    case '5' :
                                                        //--------------------
                                                        ?>
                                                        <div>
                                                            <?php
                                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_14("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_14("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                            } else {
                                                                ?>
                                                                Level 5(All + System configurations)
                                                            <?php } ?>
                                                        </div>

                                                        <?php
                                                        //-----------------------
                                                        break;
                                                    case '4' :
                                                        //--------------------
                                                        ?>
                                                        <div>
                                                            <?php
                                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_15("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_15("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                            } else {
                                                                ?>
                                                                Level 4(Read, Write, Delete ,Update ,Forward and Delegate to External Communication)
                                                            <?php } ?>
                                                        </div>


                                                        <?php
                                                        //-----------------------
                                                        break;
                                                    case '3' :
                                                        //--------------------
                                                        ?>
                                                        <div>
                                                            <?php
                                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_16("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_16("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                            } else {
                                                                ?>
                                                                Level 3(Read, Write, Delete, Update and External Communication)
                                                            <?php } ?>
                                                        </div>


                                                        <?php
                                                        //-----------------------
                                                        break;
                                                    case '2' :
                                                        //--------------------
                                                        ?>
                                                        <div>
                                                            <?php
                                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_17("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_17("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                            } else {
                                                                ?>
                                                                Level 2(Read, Write and Update)
                                                            <?php } ?>
                                                        </div>


                                                        <?php
                                                        //-----------------------
                                                        break;
                                                    case '1' :
                                                        //--------------------
                                                        ?>
                                                        <div>
                                                            <?php
                                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_18("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_18("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                            } else {
                                                                ?>
                                                                Level 1(Read, Write)
                                                            <?php } ?>
                                                        </div>


                                                        <?php
                                                        //-----------------------
                                                        break;
                                                    case '0' :
                                                        //--------------------
                                                        ?>
                                                        <div>
                                                            <?php
                                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_19("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_19("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                            } else {
                                                                ?>
                                                                Level 0(Read)
                                                            <?php } ?>
                                                        </div>


                                                        <?php
                                                        //-----------------------
                                                        break;

                                                    default :
                                                        break;
                                                }
                                                ?>




                                                <!--<option><?php
                                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_14("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_14("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                } else {
                                                    ?>
                                                              Level 5(All + System configurations)
                                                <?php } ?></option>
                                                <option><?php
                                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_15("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_15("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                } else {
                                                    ?>
                                                              Level 4(Read, Write, Delete ,Update ,Forward and Delegate to External Communication)
                                                <?php } ?></option>
                                                <option><?php
                                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_16("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_16("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                } else {
                                                    ?>
                                                              Level 3(Read, Write, Delete, Update and External Communication)
                                                <?php } ?></option>
                                                <option><?php
                                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_17("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_17("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                } else {
                                                    ?>
                                                              Level 2(Read, Write and Update)
                                                <?php } ?></option>
                                                <option><?php
                                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_18("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_18("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                } else {
                                                    ?>
                                                              Level 1(Read, Write)
                                                <?php } ?></option>
                                                <option><?php
                                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_19("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_19("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                } else {
                                                    ?>
                                                              Level 0(Read)
                                                <?php } ?></option>
                                            </select>--></td>
                                            <td><?php echo "" . $regDate_institution_user_settings_active; ?></td>
                                            <td> <?php echo "" . $Email_institution_user_settings_active; ?></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input id="" onclick="institution_user_settings_suspend_user(this)" name="<?php echo "" . $id_2017_institution_user_settings_active; ?>" type="button" style="background: white;border-radius: 5px;border:2px solid #0080FF;" value="<?php
                                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_20("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_20("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                } else {
                                                    ?>
                                                           Suspend User
                                                       <?php } ?>" />
                                                <input id="" onclick="institution_user_settings_reedit_user(this)" name="<?php echo "" . $id_2017_institution_user_settings_active; ?>" type="button" style="background: white;border-radius: 5px;border:2px solid #0080FF;color: blue;" value='Reset' class='btn'/>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>


                            </div>

                            <?php
                        }
                    }
                    ?>

                </div>
                <div id="not_activated_users_users_view">
                    <?php
                    //----------------Not activated users of the instituion---------------
                    ?>
                    <?php
                    $sql_institution_user_settings_not_active = "SELECT * FROM  ogenius_nds_db_normal_users WHERE    ogenius_nds_db_normal_users_institution='{$_2017_insti}' 
                    AND     ogenius_nds_db_normal_users_activated='0' 
                    AND     ogenius_nds_db_normal_users_id!='{$id_xxxccc88}' ORDER BY     ogenius_nds_db_normal_users_id DESC";
                    if ($query_institution_user_settings_not_active = $database->query($sql_institution_user_settings_not_active)) {
                        //---------------------

                        while ($res_institution_user_settings_not_active = mysqli_fetch_array($query_institution_user_settings_not_active)) {
                            $names_institution_user_settings_not_active = $res_institution_user_settings_not_active['ogenius_nds_db_normal_users_names'];
                            $position_institution_user_settings_not_active = $res_institution_user_settings_not_active['ogenius_nds_db_normal_users_position'];
                            $levelOfPriviledge_institution_user_settings_not_active = $res_institution_user_settings_not_active['ogenius_nds_db_normal_users_level_of_access'];
                            $regDate_institution_user_settings_not_active = $res_institution_user_settings_not_active['ogenius_nds_db_normal_users_regdate'];
                            $Email_institution_user_settings_not_active = $res_institution_user_settings_not_active['ogenius_nds_db_normal_users_email'];
                            $id_2017_institution_user_settings_not_active = $res_institution_user_settings_not_active['ogenius_nds_db_normal_users_id'];
                            ?>

                            <div class="table-responsive">
                                <table class="table table-striped users_community">
                                    <thead>
                                    <th> <?php
                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_9("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_9("system_config_xml/" . $_global_language)->item(0)->textContent;
                                        } else {
                                            ?>
                                            Names
                                        <?php } ?> </th>
                                    <th>  <?php
                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_10("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_10("system_config_xml/" . $_global_language)->item(0)->textContent;
                                        } else {
                                            ?>
                                            Position
                                        <?php } ?> </th>
                                    <th> <?php
                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_11("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_11("system_config_xml/" . $_global_language)->item(0)->textContent;
                                        } else {
                                            ?>
                                            Level of priviledge
                                        <?php } ?> </th>
                                    <th><?php
                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_12("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_12("system_config_xml/" . $_global_language)->item(0)->textContent;
                                        } else {
                                            ?>
                                            Start Date
                                        <?php } ?>   </th>
                                    <th> <?php
                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_13("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_13("system_config_xml/" . $_global_language)->item(0)->textContent;
                                        } else {
                                            ?>
                                            Email address
                                        <?php } ?> </th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><?php echo "" . $names_institution_user_settings_not_active; ?> </td>
                                            <td> <?php echo "" . $position_institution_user_settings_not_active; ?> </td>
                                            <td>
                                                <select class="accountRegPuts" id="institution_not_active<?php echo "" . $id_2017_institution_user_settings_not_active; ?>" style="width: 200px;">
                                                    <option value="5"><?php
                                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_14("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_14("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                        } else {
                                                            ?>
                                                            Level 5(All + System configurations)
                                                        <?php } ?></option>
                                                    <option value="4"><?php
                                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_15("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_15("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                        } else {
                                                            ?>
                                                            Level 4(Read, Write, Delete ,Update ,Forward and Delegate to External Communication)
                                                        <?php } ?></option>
                                                    <option value="3"><?php
                                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_16("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_16("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                        } else {
                                                            ?>
                                                            Level 3(Read, Write, Delete, Update and External Communication)
                                                        <?php } ?></option>
                                                    <option value="2"><?php
                                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_17("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_17("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                        } else {
                                                            ?>
                                                            Level 2(Read, Write and Update)
                                                        <?php } ?></option>
                                                    <option value="1"><?php
                                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_18("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_18("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                        } else {
                                                            ?>
                                                            Level 1(Read, Write)
                                                        <?php } ?></option>
                                                    <option value="0"><?php
                                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_19("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_19("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                        } else {
                                                            ?>
                                                            Level 0(Read)
                                                        <?php } ?></option>
                                                </select></td>
                                            <td><?php echo "" . $regDate_institution_user_settings_not_active; ?></td>
                                            <td> <?php echo "" . $Email_institution_user_settings_not_active; ?></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="button" id="" onclick="institution_user_settings_activate_user(this)"  name="<?php echo "" . $id_2017_institution_user_settings_not_active; ?>" style="background: white;border-radius: 5px;border:2px solid #0080FF;" value="<?php
                                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_21("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_21("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                } else {
                                                    ?>
                                                           Activate User
                                                       <?php } ?>" />
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>                        

                            </div>




                            <?php
                        }
                    }
                    ?>

                </div>
                <div id="suspended_users_view">
                    <?php
                    //------------------The suspended users------------
                    ?>
                    <?php
                    $sql_institution_user_settings_suspended = "SELECT * FROM  ogenius_nds_db_normal_users WHERE    ogenius_nds_db_normal_users_institution='{$_2017_insti}' 
                    AND     ogenius_nds_db_normal_users_activated='2' 
                    AND     ogenius_nds_db_normal_users_id!='{$id_xxxccc88}' ORDER BY     ogenius_nds_db_normal_users_id DESC";
                    if ($query_institution_user_settings_suspended = $database->query($sql_institution_user_settings_suspended)) {
                        //---------------------

                        while ($res_institution_user_settings_suspended = mysqli_fetch_array($query_institution_user_settings_suspended)) {
                            $names_institution_user_settings_suspended = $res_institution_user_settings_suspended['ogenius_nds_db_normal_users_names'];
                            $position_institution_user_settings_suspended = $res_institution_user_settings_suspended['ogenius_nds_db_normal_users_position'];
                            $levelOfPriviledge_institution_user_settings_suspended = $res_institution_user_settings_suspended['ogenius_nds_db_normal_users_level_of_access'];
                            $regDate_institution_user_settings_suspended = $res_institution_user_settings_suspended['ogenius_nds_db_normal_users_regdate'];
                            $Email_institution_user_settings_suspended = $res_institution_user_settings_suspended['ogenius_nds_db_normal_users_email'];
                            $id_2017_institution_user_settings_suspended = $res_institution_user_settings_suspended['ogenius_nds_db_normal_users_id'];
                            ?>
                            <div class="table-responsive">

                                <table class="table table-striped users_community">
                                    <thead>
                                    <th> <?php
                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_9("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_9("system_config_xml/" . $_global_language)->item(0)->textContent;
                                        } else {
                                            ?>
                                            Names
                                        <?php } ?> </th>
                                    <th> <?php
                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_10("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_10("system_config_xml/" . $_global_language)->item(0)->textContent;
                                        } else {
                                            ?>
                                            Position
                                        <?php } ?> </th>
                                    <th> <?php
                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_11("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_11("system_config_xml/" . $_global_language)->item(0)->textContent;
                                        } else {
                                            ?>
                                            Level of priviledge
                                        <?php } ?> </th>
                                    <th> <?php
                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_12("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_12("system_config_xml/" . $_global_language)->item(0)->textContent;
                                        } else {
                                            ?>
                                            Start Date
                                        <?php } ?> </th>
                                    <th> <?php
                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_13("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_13("system_config_xml/" . $_global_language)->item(0)->textContent;
                                        } else {
                                            ?>
                                            Email address
                                        <?php } ?> </th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> <?php echo "" . $names_institution_user_settings_suspended; ?> </td>
                                            <td> <?php echo "" . $position_institution_user_settings_suspended; ?> </td>
                                            <td>

                                                <?php
                                                //---------------------The hierachical levels of priviledge---
                                                switch ($levelOfPriviledge_institution_user_settings_suspended) {
                                                    case '5' :
                                                        //--------------------
                                                        ?>
                                                        <div>
                                                            <?php
                                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_14("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_14("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                            } else {
                                                                ?>
                                                                Level 5(All + System configurations)
                                                            <?php } ?>
                                                        </div>

                                                        <?php
                                                        //-----------------------
                                                        break;
                                                    case '4' :
                                                        //--------------------
                                                        ?>
                                                        <div>
                                                            <?php
                                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_15("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_15("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                            } else {
                                                                ?>
                                                                Level 4(Read, Write, Delete ,Update ,Forward and Delegate to External Communication)
                                                            <?php } ?>
                                                        </div>


                                                        <?php
                                                        //-----------------------
                                                        break;
                                                    case '3' :
                                                        //--------------------
                                                        ?>
                                                        <div>
                                                            <?php
                                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_16("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_16("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                            } else {
                                                                ?>
                                                                Level 3(Read, Write, Delete, Update and External Communication)
                                                            <?php } ?>
                                                        </div>


                                                        <?php
                                                        //-----------------------
                                                        break;
                                                    case '2' :
                                                        //--------------------
                                                        ?>
                                                        <div>
                                                            <?php
                                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_17("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_17("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                            } else {
                                                                ?>
                                                                Level 2(Read, Write and Update)
                                                            <?php } ?>
                                                        </div>


                                                        <?php
                                                        //-----------------------
                                                        break;
                                                    case '1' :
                                                        //--------------------
                                                        ?>
                                                        <div>
                                                            <?php
                                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_18("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_18("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                            } else {
                                                                ?>
                                                                Level 1(Read, Write)
                                                            <?php } ?>
                                                        </div>


                                                        <?php
                                                        //-----------------------
                                                        break;
                                                    case '0' :
                                                        //--------------------
                                                        ?>
                                                        <div>
                                                            <?php
                                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_19("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_19("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                            } else {
                                                                ?>
                                                                Level 0(Read)
                                                            <?php } ?>
                                                        </div>


                                                        <?php
                                                        //-----------------------
                                                        break;

                                                    default :
                                                        break;
                                                }
                                                ?>
                                        <!--<select class="accountRegPuts" style="width: 200px;">
                                        <option><?php
                                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_14("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_14("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                } else {
                                                    ?>
                                                            Level 5(All + System configurations)
                                                <?php } ?> </option>
                                        <option><?php
                                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_15("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_15("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                } else {
                                                    ?>
                                                            Level 4(Read, Write, Delete ,Update ,Forward and Delegate to External Communication)
                                                <?php } ?></option>
                                        <option><?php
                                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_16("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_16("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                } else {
                                                    ?>
                                                            Level 3(Read, Write, Delete, Update and External Communication)
                                                <?php } ?></option>
                                        <option><?php
                                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_17("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_17("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                } else {
                                                    ?>
                                                            Level 2(Read, Write and Update)
                                                <?php } ?></option>
                                        <option><?php
                                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_18("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_18("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                } else {
                                                    ?>
                                                            Level 1(Read, Write)
                                                <?php } ?></option>
                                        <option><?php
                                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_19("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_19("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                } else {
                                                    ?>
                                                            Level 0(Read)
                                                <?php } ?></option>
                                        </select>--></td>
                                            <td><?php echo "" . $regDate_institution_user_settings_suspended; ?></td>
                                            <td> <?php echo "" . $Email_institution_user_settings_suspended; ?> </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="button" id="" name="<?php echo "" . $id_2017_institution_user_settings_suspended; ?>" onclick="institution_user_settings_reactivate_user(this)" style="background: white;border-radius: 5px;border:2px solid #0080FF;" value="<?php
                                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_22("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_22("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                } else {
                                                    ?>
                                                           Reactivate User
                                                       <?php } ?>" />
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>


                            <?php
                        }
                    }
                    ?>

                </div>
            </div>
            <div class="col-md-6" id="screen_Notification">
                <h1 class="page-header">
                    <?php
                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_official_user_settings_2("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_official_user_settings_2("system_config_xml/" . $_global_language)->item(0)->textContent;
                    } else {
                        ?>
                        Notification
                    <?php } ?>
                </h1>
                <div>
                    <?php
//----the validators ids-----
                    $notification_validators_2017_ids = array();
                    $sql_notification_set = "SELECT * FROM    ogenius_nds_db_notifications_static_values ORDER BY ogenius_nds_db_Notifications_static_values_id DESC";
                    if ($query_notification_set = $database->query($sql_notification_set)) {
                        //---------------------
                        while ($res_notification_set = mysqli_fetch_array($query_notification_set)) {
                            //----------------------The language id----------
                            $notification_set_id = $res_notification_set['ogenius_nds_db_Notifications_static_values_id'];
                            $notification_set_txt_descr_1 = $res_notification_set['ogenius_nds_db_Notifications_static_values_new_msg_coming'];
                            $notification_set_txt_descr_2 = $res_notification_set['ogenius_nds_db_Notifications_static_values_cc_my_email_add'];
                            $notification_set_txt_descr_3 = $res_notification_set['ogenius_nds_db_Notifications_static_values_all_notifications'];
                            $notification_set_txt_descr_4 = $res_notification_set['ogenius_nds_db_Notifications_static_values_send_notifi_on_my_num'];
                            //----------Save the notify essesntials--------------
                            if (!empty($notification_set_txt_descr_1)) {
                                $notification_validators_2017_ids["new_msg_coming"] = $notification_set_id;
                            }
                            if (!empty($notification_set_txt_descr_2)) {
                                $notification_validators_2017_ids["cc_my_mail_add"] = $notification_set_id;
                            }
                            if (!empty($notification_set_txt_descr_3)) {
                                $notification_validators_2017_ids["all_notifications"] = $notification_set_id;
                            }
                            if (!empty($notification_set_txt_descr_4)) {
                                $notification_validators_2017_ids["notify_my_nber"] = $notification_set_id;
                            }
                        }
                    }
//--------------------------------------
                    ?>
                    <table>
                        <?php
                        //---------------New messages coming---find in relation links----------------
                        $gingle_2017_new_msg_come = $notification_validators_2017_ids["new_msg_coming"];
                        $notification_new_msg_coming = 0;
                        $sql_notification_new_msg_coming = "SELECT * FROM    notifications_static_values_users_link WHERE   notifications_static_values_users_link_id_user='{$id_xxxccc88}' AND notifications_static_values_users_link_id_notification='{$gingle_2017_new_msg_come}' ORDER BY notifications_static_values_users_link_id DESC LIMIT 1";
                        if ($query_notification_new_msg_coming = $database->query($sql_notification_new_msg_coming)) {
                            //---------------------
                            while ($res_notification_new_msg_coming = mysqli_fetch_array($query_notification_new_msg_coming)) {
                                $notification_new_msg_coming++;
                                $notification_new_msg_coming_status = $res_notification_new_msg_coming['notifications_static_values_users_link_status'];
                            }
                            //-----------Display the goodies New messages coming---------------
                            if ($notification_new_msg_coming == 0) {
                                ?>
                                <tr>
                                    <td>
                                        <input checked="true" onclick="official_user_settings_change_notify_status(<?php echo "" . $notification_validators_2017_ids["new_msg_coming"]; ?>, 'newmsg', '1')"   type="checkbox" />
                                    </td>
                                    <td><label><?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_18("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_18("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                New Messages Coming
                                            <?php } ?></label></td>
                                </tr>                                
                                <?php
                            } else {
                                if ($notification_new_msg_coming_status == 0) {
                                    ?>
                                    <tr>
                                        <td>
                                            <input style=""  onclick="official_user_settings_change_notify_status(<?php echo "" . $notification_validators_2017_ids["new_msg_coming"]; ?>, 'newmsg', '0')"  type="checkbox" />
                                        </td>
                                        <td><label><?php
                                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_18("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_18("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                } else {
                                                    ?>
                                                    New Messages Coming
                                                <?php } ?></label></td>
                                    </tr>                                     
                                    <?php
                                } else {
                                    ?>                                    
                                    <tr>
                                        <td>
                                            <input style="" checked="true" onclick="official_user_settings_change_notify_status(<?php echo "" . $notification_validators_2017_ids["new_msg_coming"]; ?>, 'newmsg', '1')"   type="checkbox" />
                                        </td>
                                        <td><label><?php
                                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_18("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_18("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                } else {
                                                    ?>
                                                    New Messages Coming
                                                <?php } ?></label></td>
                                    </tr>  
                                    <?php
                                }
                            }
                        }
                        ?>
                        <?php
///---------------copy my mail address on notification-------------
                        ?>
                        <?php
                        //---------------Copy my mail address---find in relation links----------------
                        $gingle_2017_cc_mail_add = $notification_validators_2017_ids["cc_my_mail_add"];
                        $notification_copy_my_mail_add = 0;
                        $sql_notification_copy_my_mail_add = "SELECT * FROM    notifications_static_values_users_link WHERE   notifications_static_values_users_link_id_user='{$id_xxxccc88}' AND notifications_static_values_users_link_id_notification='{$gingle_2017_cc_mail_add}' ORDER BY notifications_static_values_users_link_id DESC LIMIT 1";
                        if ($query_notification_copy_my_mail_add = $database->query($sql_notification_copy_my_mail_add)) {
                            //---------------------
                            while ($res_notification_copy_my_mail_add = mysqli_fetch_array($query_notification_copy_my_mail_add)) {
                                $notification_copy_my_mail_add++;
                                $notification_copy_my_mail_add_status = $res_notification_copy_my_mail_add['notifications_static_values_users_link_status'];
                            }
                            //-----------Display the goodies New messages coming---------------
                            if ($notification_copy_my_mail_add == 0) {
                                ?>
                                <tr>
                                    <td>
                                        <input checked="true" onclick="official_user_settings_change_notify_status(<?php echo "" . $notification_validators_2017_ids["cc_my_mail_add"]; ?>, 'newmsg', '1')"   type="checkbox" />
                                    </td>
                                    <td><label><?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_19("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_19("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                Copy My Email Address
                                            <?php } ?></label></td>
                                </tr>                                
                                <?php
                            } else {
                                if ($notification_copy_my_mail_add_status == 0) {
                                    ?>
                                    <tr>
                                        <td>
                                            <input style=""  onclick="official_user_settings_change_notify_status(<?php echo "" . $notification_validators_2017_ids["cc_my_mail_add"]; ?>, 'newmsg', '0')"  type="checkbox" />
                                        </td>
                                        <td><label><?php
                                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_19("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_19("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                } else {
                                                    ?>
                                                    Copy My Email Address
                                                <?php } ?></label></td>
                                    </tr>                                     
                                    <?php
                                } else {
                                    ?>                                    
                                    <tr>
                                        <td>
                                            <input style="" checked="true" onclick="official_user_settings_change_notify_status(<?php echo "" . $notification_validators_2017_ids["cc_my_mail_add"]; ?>, 'newmsg', '1')"   type="checkbox" />
                                        </td>
                                        <td><label><?php
                                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_19("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_19("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                } else {
                                                    ?>
                                                    Copy My Email Address
                                                <?php } ?></label></td>
                                    </tr>  
                                    <?php
                                }
                            }
                        }
                        ?>
                        <?php
///---------------All my notifications-------------
                        ?>
                        <?php
//---------------Copy my mail address---find in relation links----------------
                        $gingle_2017_cc_all_notifications = $notification_validators_2017_ids["all_notifications"];
                        $notification_all_notifications_add = 0;
                        $sql_notification_all_notifications_add = "SELECT * FROM    notifications_static_values_users_link WHERE   notifications_static_values_users_link_id_user='{$id_xxxccc88}' AND notifications_static_values_users_link_id_notification='{$gingle_2017_cc_all_notifications}' ORDER BY notifications_static_values_users_link_id DESC LIMIT 1";
                        if ($query_notification_all_notifications_add = $database->query($sql_notification_all_notifications_add)) {
                            //---------------------
                            while ($res_notification_all_notifications_add = mysqli_fetch_array($query_notification_all_notifications_add)) {
                                $notification_all_notifications_add++;
                                $notification_all_notification_status = $res_notification_all_notifications_add['notifications_static_values_users_link_status'];
                            }
                            //-----------Display the goodies New messages coming---------------
                            if ($notification_all_notifications_add == 0) {
                                ?>
                                <tr>
                                    <td>
                                        <input checked="true" onclick="official_user_settings_change_notify_status(<?php echo "" . $notification_validators_2017_ids["all_notifications"]; ?>, 'newmsg', '1')"   type="checkbox" />
                                    </td>
                                    <td><label><?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_20("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_20("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                All Notifications
                                            <?php } ?></label></td>
                                </tr>                                
                                <?php
                            } else {
                                if ($notification_all_notification_status == 0) {
                                    ?>
                                    <tr>
                                        <td>
                                            <input style=""  onclick="official_user_settings_change_notify_status(<?php echo "" . $notification_validators_2017_ids["all_notifications"]; ?>, 'newmsg', '0')"  type="checkbox" />
                                        </td>
                                        <td><label><?php
                                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_20("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_20("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                } else {
                                                    ?>
                                                    All Notifications
                                                <?php } ?></label></td>
                                    </tr>                                     
                                    <?php
                                } else {
                                    ?>                                    
                                    <tr>
                                        <td>
                                            <input style="" checked="true" onclick="official_user_settings_change_notify_status(<?php echo "" . $notification_validators_2017_ids["all_notifications"]; ?>, 'newmsg', '1')"   type="checkbox" />
                                        </td>
                                        <td><label><?php
                                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_20("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_20("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                } else {
                                                    ?>
                                                    All Notifications
                                                <?php } ?></label></td>
                                    </tr>  
                                    <?php
                                }
                            }
                        }
                        ?>
                        </tr>
                        <?php
///---------------Send notifications to my number-------------
                        ?>
                        <?php
                        //---------------find in relation links----------------
                        $gingle_2017_notify_my_nber = $notification_validators_2017_ids["notify_my_nber"];
                        $notification_notify_my_nber = 0;
                        $sql_notification_notify_my_nber = "SELECT * FROM    notifications_static_values_users_link WHERE   notifications_static_values_users_link_id_user='{$id_xxxccc88}' AND notifications_static_values_users_link_id_notification='{$gingle_2017_notify_my_nber}' ORDER BY notifications_static_values_users_link_id DESC LIMIT 1";
                        if ($query_notification_all_notifications_add = $database->query($sql_notification_notify_my_nber)) {
                            //---------------------
                            while ($res_notification_notify_my_nber = mysqli_fetch_array($query_notification_all_notifications_add)) {
                                $notification_notify_my_nber++;
                                $notification_notification_notify_my_nber_status = $res_notification_notify_my_nber['notifications_static_values_users_link_status'];
                            }
                            //-----------Display the goodies New messages coming---------------
                            if ($notification_notify_my_nber == 0) {
                                ?>
                                <tr>
                                    <td>
                                        <input checked="true" onclick="official_user_settings_change_notify_status(<?php echo "" . $notification_validators_2017_ids["notify_my_nber"]; ?>, 'newmsg', '1')"   type="checkbox" />
                                    </td>
                                    <td><label><?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_21("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_21("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                Send Notifications On My Number
                                            <?php } ?></label></td>
                                </tr>                                
                                <?php
                            } else {
                                if ($notification_notification_notify_my_nber_status == 0) {
                                    ?>
                                    <tr>
                                        <td>
                                            <input style=""  onclick="official_user_settings_change_notify_status(<?php echo "" . $notification_validators_2017_ids["notify_my_nber"]; ?>, 'newmsg', '0')"  type="checkbox" />
                                        </td>
                                        <td><label><?php
                                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_21("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_21("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                } else {
                                                    ?>
                                                    Send Notifications On My Number
                                                <?php } ?></label></td>
                                    </tr>                                     
                                    <?php
                                } else {
                                    ?>                                    
                                    <tr>
                                        <td>
                                            <input style="" checked="true" onclick="official_user_settings_change_notify_status(<?php echo "" . $notification_validators_2017_ids["notify_my_nber"]; ?>, 'newmsg', '1')"   type="checkbox" />
                                        </td>
                                        <td><label><?php
                                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_21("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_21("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                } else {
                                                    ?>
                                                    Send Notifications On My Number
                                                <?php } ?></label></td>
                                    </tr>  
                                    <?php
                                }
                            }
                        }
                        ?>
                    </table>
                </div>
            </div>
            <!---Preferences---->
            <div class="col-md-6" id="screen_Preferences">
                <h1 class="page-header">
                    <?php
                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_official_user_settings_3("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_official_user_settings_3("system_config_xml/" . $_global_language)->item(0)->textContent;
                    } else {
                        ?>
                        Preferences
                    <?php } ?>
                </h1>
                <div>
                    <?php
//--------------Preferences account features--------------
                    ?>
                    <?php
//----the validators ids-----
                    $preferences_validators_2017_ids = array();
                    $sql_preferences_set = "SELECT * FROM    ogenius_nds_db_preferences_static_values ORDER BY ogenius_nds_db_preferences_static_values_id DESC";
                    if ($query_preferences_set = $database->query($sql_preferences_set)) {
                        //---------------------
                        while ($res_preferences_set = mysqli_fetch_array($query_preferences_set)) {
                            //----------------------The language id----------
                            $preferences_set_id = $res_preferences_set['ogenius_nds_db_preferences_static_values_id'];
                            $preferences_set_txt_descr_1 = $res_preferences_set['ogenius_nds_db_preferences_static_values_stay_loggedin'];
                            $preferences_set_txt_descr_2 = $res_preferences_set['ogenius_nds_db_preferences_static_values_receive_mail_updates'];
                            //----------Save the notify essesntials--------------
                            if (!empty($preferences_set_txt_descr_1)) {
                                $preferences_validators_2017_ids["stay_logged_in"] = $preferences_set_id;
                            }
                            if (!empty($preferences_set_txt_descr_2)) {
                                $preferences_validators_2017_ids["receive_mail_updates"] = $preferences_set_id;
                            }
                        }
                    }
//--------------------------------------
                    ?>
                    <table>
                        <?php
                        ///-------------Stay logged in
                        ?>
                        <?php
                        //---------------find in relation links----------------
                        $preference_2017_stay_logged_in = $preferences_validators_2017_ids["stay_logged_in"];
                        $preference_stay_logged_in = 0;
                        $sql_preference_stay_logged_in = "SELECT * FROM    ogenius_nds_preferences_static_values_users_link WHERE       ogenius_nds_preferences_static_values_users_link_id_user='{$id_xxxccc88}' AND   ogenius_nds_preferences_static_values_users_link_preference_id='{$preference_2017_stay_logged_in}' ORDER BY ogenius_nds_preferences_static_values_users_link_id DESC LIMIT 1";
                        if ($query_preference_stay_logged_in = $database->query($sql_preference_stay_logged_in)) {
                            //---------------------
                            while ($res_preference_stay_logged_in = mysqli_fetch_array($query_preference_stay_logged_in)) {
                                $preference_stay_logged_in++;
                                $preference_stay_logged_in_status = $res_preference_stay_logged_in['ogenius_nds_preferences_static_values_users_link_status'];
                            }
                            //-----------Display the goodies New messages coming---------------
                            if ($preference_stay_logged_in == 0) {
                                ?>
                                <tr>
                                    <td>
                                        <input checked="true" onclick="official_user_settings_change_preferences_status(<?php echo "" . $preferences_validators_2017_ids["stay_logged_in"]; ?>, 'newmsg', '1')"   type="checkbox" />
                                    </td>
                                    <td><label><?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_22("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_22("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                Stay logged in
                                            <?php } ?></label></td>
                                </tr>                                
                                <?php
                            } else {
                                if ($preference_stay_logged_in_status == 0) {
                                    ?>
                                    <tr>
                                        <td>
                                            <input style=""  onclick="official_user_settings_change_preferences_status(<?php echo "" . $preferences_validators_2017_ids["stay_logged_in"]; ?>, 'newmsg', '0')"  type="checkbox" />
                                        </td>
                                        <td><label><?php
                                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_22("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_22("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                } else {
                                                    ?>
                                                    Stay logged in
                                                <?php } ?></label></td>
                                    </tr>                                     
                                    <?php
                                } else {
                                    ?>                                    
                                    <tr>
                                        <td>
                                            <input style="" checked="true" onclick="official_user_settings_change_preferences_status(<?php echo "" . $preferences_validators_2017_ids["stay_logged_in"]; ?>, 'newmsg', '1')"   type="checkbox" />
                                        </td>
                                        <td><label><?php
                                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_22("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_22("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                } else {
                                                    ?>
                                                    Stay logged in
                                                <?php } ?></label></td>
                                    </tr>  
                                    <?php
                                }
                            }
                        }
                        ?>
                    </table>
                    <table>
                        <?php
///-------------Mail updates
                        ?>
                        <?php
                        //---------------find in relation links----------------
                        $preference_2017_receive_mail_updates = $preferences_validators_2017_ids["receive_mail_updates"];
                        $preference_stay_receive_mail_updates = 0;
                        $sql_preference_receive_mail_updates = "SELECT * FROM    ogenius_nds_preferences_static_values_users_link WHERE       ogenius_nds_preferences_static_values_users_link_id_user='{$id_xxxccc88}' AND   ogenius_nds_preferences_static_values_users_link_preference_id='{$preference_2017_receive_mail_updates}' ORDER BY ogenius_nds_preferences_static_values_users_link_id DESC LIMIT 1";
                        if ($query_preference_receive_mail_updates = $database->query($sql_preference_receive_mail_updates)) {
                            //---------------------
                            while ($res_preference_receive_mail_updates = mysqli_fetch_array($query_preference_receive_mail_updates)) {
                                $preference_stay_receive_mail_updates++;
                                $preference_receive_mail_updates_status = $res_preference_receive_mail_updates['ogenius_nds_preferences_static_values_users_link_status'];
                            }
                            //-----------Display the goodies New messages coming---------------
                            if ($preference_stay_receive_mail_updates == 0) {
                                ?>
                                <tr>
                                    <td>
                                        <input checked="true" onclick="official_user_settings_change_preferences_status(<?php echo "" . $preferences_validators_2017_ids["receive_mail_updates"]; ?>, 'newmsg', '1')"   type="checkbox" />
                                    </td>
                                    <td><label><?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_23("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_23("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                Receive Email Updates
                                            <?php } ?></label></td>
                                </tr>                                
                                <?php
                            } else {
                                if ($preference_receive_mail_updates_status == 0) {
                                    ?>
                                    <tr>
                                        <td>
                                            <input style=""  onclick="official_user_settings_change_preferences_status(<?php echo "" . $preferences_validators_2017_ids["receive_mail_updates"]; ?>, 'newmsg', '0')"  type="checkbox" />
                                        </td>
                                        <td><label><?php
                                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_23("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_23("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                } else {
                                                    ?>
                                                    Receive Email Updates
                                                <?php } ?></label></td>
                                    </tr>                                     
                                    <?php
                                } else {
                                    ?>                                    
                                    <tr>
                                        <td>
                                            <input style="" checked="true" onclick="official_user_settings_change_preferences_status(<?php echo "" . $preferences_validators_2017_ids["receive_mail_updates"]; ?>, 'newmsg', '1')"   type="checkbox" />
                                        </td>
                                        <td><label><?php
                                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_23("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_23("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                } else {
                                                    ?>
                                                    Receive Email Updates
                                                <?php } ?></label></td>
                                    </tr>  
                                    <?php
                                }
                            }
                        }
                        ?>
                    </table>
                    <div>
                        <div>
                            <h4><?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_24("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_24("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                    Tags special keywords:
                                <?php } ?></h4>
                            <div style="margin-left: 5%;float: left;width: 40%;">
                                <h4><?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_25("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_25("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        Tags Identifier:
                                    <?php } ?></h4>
                                <table>
                                    <tr>
                                        <td>
                                            <input id="community_user_settings_new_ident" type="text"   style="padding: 8px;font-size: 16px;" placeholder="<?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_26("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_26("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                       New Tag Identifier here
                                                   <?php } ?>"  />
                                        </td>
                                        <td>
                                            <input onclick="official_user_settings_create_tag_identifier()" type="button" maxlength="4" class="btn" value="<?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_27("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_27("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                       Create New Tag Identifier
                                                   <?php } ?>" />
                                        </td>
                                    </tr>
                                </table>
                                <div  style="border-left: 3px solid black;height: 300px;overflow-y: scroll;">
                                    <?php
                                    //--------------Tag identifier-------------------
                                    $sql_tags_identifier_2017 = "SELECT * FROM    ogenius_nds_db_tags_identifiers WHERE    ogenius_nds_db_tags_identifiers_id_user='{$id_xxxccc88}' AND ogenius_nds_db_tags_identifiers_status='1' ORDER BY ogenius_nds_db_tags_identifiers_id_user DESC";
                                    if ($query_tags_identifier_2017 = $database->query($sql_tags_identifier_2017)) {
                                        //---------------------
                                        while ($res_tags_identifier_2017 = mysqli_fetch_array($query_tags_identifier_2017)) {
                                            $tags_identifier_tag = $res_tags_identifier_2017['ogenius_nds_db_tags_identifiers_tag'];
                                            $tags_identifier_tag_id = $res_tags_identifier_2017['ogenius_nds_db_tags_identifiers_id'];
                                            //----------------------------------
                                            ?>
                                            <table>
                                                <tr>
                                                    <td>
                                                        <input type="text"  maxlength="4" style="padding: 8px;font-size: 16px;" value="<?php echo "" . $tags_identifier_tag; ?>" disabled="disabled" />
                                                    </td>
                                                    <!--<td>
                                                    <input type="button" class="btn" value="<?php
                                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_28("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_28("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                    } else {
                                                        ?>
                                                                                                               Save changes
                                                    <?php } ?>" />
                                                    </td>-->
                                                    <td>
                                                        <input onclick="official_user_settings_create_tag_identifier_delete(<?php echo "" . $tags_identifier_tag_id; ?>)" type="button"  class="btn" value="<?php
                                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_29("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_29("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                        } else {
                                                            ?>
                                                                   Delete
                                                               <?php } ?>" />
                                                    </td>
                                                </tr>
                                            </table>
                                            <?php
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <div style="float: left;">
                                <h4><?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_30("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_30("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        Tags keywords:
                                    <?php } ?> </h4>
                                <div>
                                    <table>
                                        <tr>
                                            <td>
                                                <input type="text" id="community_user_settings_new_keyword"   style="padding: 8px;font-size: 16px;" placeholder="<?php
                                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_31("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_31("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                } else {
                                                    ?>
                                                           New Keyword Here
                                                       <?php } ?>"  />
                                            </td>
                                            <td>
                                                <input type="button" onclick="official_user_settings_create_tag_keyword()"  class="btn" value="<?php
                                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_32("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_32("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                } else {
                                                    ?>
                                                           Create New Keyword
                                                       <?php } ?>" />
                                            </td>
                                        </tr>
                                    </table>
                                    <div style="height: 300px;overflow-y: scroll;">
                                        <?php
//----------tags keywords-------
                                        ?>
                                        <?php
//--------------Tag identifier-------------------
                                        $sql_tags_keywords_2017 = "SELECT * FROM     ogenius_nds_db_tags_identifiers_keyword WHERE      ogenius_nds_db_tags_identifiers_keyword_id_user='{$id_xxxccc88}' AND    ogenius_nds_db_tags_identifiers_keyword_status='1' ORDER BY ogenius_nds_db_tags_identifiers_keyword_id_user DESC";
                                        if ($query_tags_keywords_2017 = $database->query($sql_tags_keywords_2017)) {
                                            //---------------------
                                            while ($res_tags_keywords_2017 = mysqli_fetch_array($query_tags_keywords_2017)) {
                                                $tags_keywords_tag = $res_tags_keywords_2017['ogenius_nds_db_tags_identifiers_keyword_keyword'];
                                                $tags_keywords_tag_id = $res_tags_keywords_2017['ogenius_nds_db_tags_identifiers_keyword_id'];
                                                //----------------------------------                                                
                                                ?>
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <input type="text"   style="padding: 8px;font-size: 11px;" disabled="disabled" value="<?php echo "" . $tags_keywords_tag; ?>"  />
                                                        </td>
                                                        <td>
                                                            <input onclick="official_user_settings_create_tag_keyword_delete(<?php echo "" . $tags_keywords_tag_id; ?>)" type="button"  class="btn" value="<?php
                                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_34("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_34("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                            } else {
                                                                ?>
                                                                       Delete
                                                                   <?php } ?>" />
                                                        </td>
                                                    </tr>
                                                </table>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!---Privacy---->
            <div class="col-md-6" id="screen_Privacy">
                <h1 class="page-header">
                    <?php
                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_official_user_settings_4("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_official_user_settings_4("system_config_xml/" . $_global_language)->item(0)->textContent;
                    } else {
                        ?>
                        Privacy
                    <?php } ?>
                </h1>
                <div>
                    <div style="margin-left: 40px;">
                        <h4><?php
                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_official_user_settings_34("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_official_user_settings_34("system_config_xml/" . $_global_language)->item(0)->textContent;
                            } else {
                                ?>
                                When I Make a forward a query to other person or institution
                            <?php } ?></h4>

                        <?php
//--------official  user settings---
                        ?>
                        <form>
                            <table>
                                <?php
                                $_2017_check_if_real = 0;
//----the validators ids-----
//$privacy_suggest_2017_ids = array();
                                $sql_privacy_suggest = "SELECT * FROM    ogenius_nds_db_privacy_suggest_records  WHERE ogenius_nds_db_privacy_suggest_records_user_id='{$id_xxxccc88}' ORDER BY   ogenius_nds_db_privacy_suggest_records_id DESC LIMIT 1";
                                if ($query_privacy_suggest = $database->query($sql_privacy_suggest)) {
                                    //---------------------
                                    while ($res_privacy_suggest = mysqli_fetch_array($query_privacy_suggest)) {
                                        $_2017_check_if_real++;
                                        //----------------------The language id----------
                                        $privacy_suggest_set_id = $res_privacy_suggest['ogenius_nds_db_privacy_suggest_records_id'];
                                        $privacy_suggest_set_txt_descr_1 = $res_privacy_suggest['ogenius_nds_db_privacy_suggest_records_only_username'];
                                        $privacy_suggest_set_txt_descr_2 = $res_privacy_suggest['ogenius_nds_db_privacy_suggest_records_username_and_location'];
                                        $privacy_suggest_set_txt_descr_3 = $res_privacy_suggest['ogenius_nds_db_privacy_suggest_records_let_all_my_details_avail'];
                                        //$privacy_suggest_which_choice_2017 = $res_privacy_suggest['ogenius_nds_db_privacy_suggest_records_let_all_my_details_avail'];
                                        //----------Save the notify essesntials--------------
                                        if ($privacy_suggest_set_txt_descr_1 == 1) {
                                            ?>
                                            <tr>
                                                <td>
                                                    <input checked="true" onchange="nds_privacy_suggest_action_tools_official(this,<?php echo "" . $privacy_suggest_set_id; ?>, '0')" id="nds_privacy_suggest_all_details"  name="suggestionInstan" type="radio" />
                                                </td>
                                                <td><?php
                                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_official_user_settings_35("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_official_user_settings_35("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                    } else {
                                                        ?>
                                                        All details will be seen(My institution, position, and contacts)
                                                    <?php } ?></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input onchange="nds_privacy_suggest_action_tools_official(this,<?php echo "" . $privacy_suggest_set_id; ?>, '1')" id="nds_privacy_suggest_username_and_loc" name="suggestionInstan" type="radio" />
                                                </td>
                                                <td><?php
                                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_official_user_settings_36("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_official_user_settings_36("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                    } else {
                                                        ?>
                                                        Only  details of my institution
                                                    <?php } ?></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input onchange="nds_privacy_suggest_action_tools_official(this,<?php echo "" . $privacy_suggest_set_id; ?>, '2')" id="nds_privacy_suggest_username_only"  name="suggestionInstan" type="radio" />
                                                </td>
                                                <td><?php
                                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_official_user_settings_37("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_official_user_settings_37("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                    } else {
                                                        ?>
                                                        Only  details of my institution + my position
                                                    <?php } ?></td>
                                            </tr>
                                            <?php
                                        } else if ($privacy_suggest_set_txt_descr_2 == 1) {
                                            ?>
                                            <tr>
                                                <td>
                                                    <input  onchange="nds_privacy_suggest_action_tools_official(this,<?php echo "" . $privacy_suggest_set_id; ?>, '0')" id="nds_privacy_suggest_all_details"  name="suggestionInstan" type="radio" />
                                                </td>
                                                <td><?php
                                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_official_user_settings_35("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_official_user_settings_35("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                    } else {
                                                        ?>
                                                        All details will be seen(My institution, position, and contacts)
                                                    <?php } ?></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input checked="true" onchange="nds_privacy_suggest_action_tools_official(this,<?php echo "" . $privacy_suggest_set_id; ?>, '1')" id="nds_privacy_suggest_username_and_loc" name="suggestionInstan" type="radio" />
                                                </td>
                                                <td><?php
                                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_official_user_settings_36("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_official_user_settings_36("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                    } else {
                                                        ?>
                                                        Only  details of my institution
                                                    <?php } ?></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input onchange="nds_privacy_suggest_action_tools_official(this,<?php echo "" . $privacy_suggest_set_id; ?>, '2')" id="nds_privacy_suggest_username_only"  name="suggestionInstan" type="radio" />
                                                </td>
                                                <td><?php
                                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_official_user_settings_37("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_official_user_settings_37("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                    } else {
                                                        ?>
                                                        Only  details of my institution + my position
                                                    <?php } ?></td>
                                            </tr>
                                            <?php
                                        } else if ($privacy_suggest_set_txt_descr_3 == 1) {
                                            ?>
                                            <tr>
                                                <td>
                                                    <input  onchange="nds_privacy_suggest_action_tools_official(this,<?php echo "" . $privacy_suggest_set_id; ?>, '0')" id="nds_privacy_suggest_all_details"  name="suggestionInstan" type="radio" />
                                                </td>
                                                <td><?php
                                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_official_user_settings_35("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_official_user_settings_35("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                    } else {
                                                        ?>
                                                        All details will be seen(My institution, position, and contacts)
                                                    <?php } ?></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input onchange="nds_privacy_suggest_action_tools_official(this,<?php echo "" . $privacy_suggest_set_id; ?>, '1')" id="nds_privacy_suggest_username_and_loc" name="suggestionInstan" type="radio" />
                                                </td>
                                                <td><?php
                                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_official_user_settings_36("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_official_user_settings_36("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                    } else {
                                                        ?>
                                                        Only  details of my institution
                                                    <?php } ?></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input checked="true" onchange="nds_privacy_suggest_action_tools_official(this,<?php echo "" . $privacy_suggest_set_id; ?>, '2')" id="nds_privacy_suggest_username_only"  name="suggestionInstan" type="radio" />
                                                </td>
                                                <td><?php
                                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_official_user_settings_37("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_official_user_settings_37("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                    } else {
                                                        ?>
                                                        Only  details of my institution + my position
                                                    <?php } ?></td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                }
//------When nothing is registered yet!--------------------------------
                                ?> 
                                <?php
                                if ($_2017_check_if_real == 0) {
                                    ?>
                                    <tr>
                                        <td>
                                            <input checked="true" onchange="nds_privacy_suggest_action_tools_official(this,<?php echo "23"; ?>, '0')" id="nds_privacy_suggest_all_details"  name="suggestionInstan" type="radio" />
                                        </td>
                                        <td><?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_official_user_settings_35("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_official_user_settings_35("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                All details will be seen(My institution, position, and contacts)
                                            <?php } ?></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input onchange="nds_privacy_suggest_action_tools_official(this,<?php echo "23"; ?>, '1')" id="nds_privacy_suggest_username_and_loc" name="suggestionInstan" type="radio" />
                                        </td>
                                        <td><?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_official_user_settings_36("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_official_user_settings_36("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                Only  details of my institution
                                            <?php } ?></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input onchange="nds_privacy_suggest_action_tools_official(this,<?php echo "23"; ?>, '2')" id="nds_privacy_suggest_username_only"  name="suggestionInstan" type="radio" />
                                        </td>
                                        <td><?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_official_user_settings_37("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_official_user_settings_37("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                Only  details of my institution + my position
                                            <?php } ?></td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </table>
                        </form>
                        <h4><?php
                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_official_user_settings_38("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_official_user_settings_38("system_config_xml/" . $_global_language)->item(0)->textContent;
                            } else {
                                ?>
                                Posts
                            <?php } ?></h4>
                        <form>
                            <?php
                            //-------------------------------Posts filtering--------------------
                            ?>
                            <?php
                            $_2017_check_privacy_posts = 0;
//----the validators ids-----
//$privacy_suggest_2017_ids = array();
                            $sql_privacy_posts = "SELECT * FROM  ogenius_nds_db_privacy_posts_records  WHERE ogenius_nds_db_privacy_posts_records_user_id='{$id_xxxccc88}' ORDER BY   ogenius_nds_db_privacy_posts_records_id DESC LIMIT 1";
                            if ($query_privacy_posts = $database->query($sql_privacy_posts)) {
                                //---------------------
                                while ($res_privacy_posts = mysqli_fetch_array($query_privacy_posts)) {
                                    $_2017_check_privacy_posts++;
                                    //----------------------The language id----------
                                    $_privacy_posts_set_id = $res_privacy_posts['ogenius_nds_db_privacy_posts_records_id'];
                                    $_privacy_posts_set_txt_descr_1 = $res_privacy_posts['ogenius_nds_db_privacy_posts_records_username_appear'];
                                    $_privacy_posts_set_txt_descr_2 = $res_privacy_posts['ogenius_nds_db_privacy_posts_records_use_another_name'];
                                    //$_privacy_posts_set_txt_descr_3 = $res_privacy_posts['ogenius_nds_db_privacy_suggest_records_let_all_my_details_avail'];
                                    //$privacy_suggest_which_choice_2017 = $res_privacy_suggest['ogenius_nds_db_privacy_suggest_records_let_all_my_details_avail'];
                                    //----------Save the notify essesntials--------------
                                    if ($_privacy_posts_set_txt_descr_1 == 1) {
                                        ?>
                                        <table>
                                            <tr>
                                                <td>
                                                    <input checked="true" id="community_user_settings_privacy_posts_0" onclick="nds_privacy_check_which_posts_0_official(this)" name="usernameChoice" type="radio" />
                                                </td>
                                                <td><?php
                                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_40("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_40("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                    } else {
                                                        ?>
                                                        My Username will appear
                                                    <?php } ?></td>
                                            </tr>
                                        </table>
                                        <table>
                                            <tr>
                                                <td>
                                                    <input name="usernameChoice" id="community_user_settings_privacy_posts_1" onclick="nds_privacy_check_which_posts_0_official(this)" type="radio" />
                                                </td>
                                                <td><?php
                                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_41("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_41("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                    } else {
                                                        ?>
                                                        Use another name
                                                    <?php } ?></td>
                                                <td>
                                                    <input id="comm_user_settings_MyOtherName" onclick="nds_privacy_check_which_posts_0_official(this)" type="text" class="accountRegPuts" disabled="disabled" placeholder="<?php
                                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_42("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_42("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                    } else {
                                                        ?>
                                                               MyOtherName
                                                           <?php } ?>" /><input onclick="enableThisIndivProfPageDiv(this, 'comm_user_settings_MyOtherName')" type="checkbox" id="community_user_settings_myOther_Name" />
                                                </td>
                                                <td>
                                                    <input onclick="nds_privacy_save_which_posts_1_official()" type="button" value="<?php
                                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_43("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_43("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                    } else {
                                                        ?>
                                                               Save New Name
                                                           <?php } ?>" class="btn" />
                                                </td>
                                            </tr>
                                        </table> 
                                        <?php
                                    } else {
                                        ?>
                                        <table>
                                            <tr>
                                                <td>
                                                    <input onclick="nds_privacy_check_which_posts_0_official(this)" id="community_user_settings_privacy_posts_0" name="usernameChoice" type="radio" />
                                                </td>
                                                <td><?php
                                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_40("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_40("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                    } else {
                                                        ?>
                                                        My Username will appear
                                                    <?php } ?></td>
                                            </tr>
                                        </table>
                                        <table>
                                            <tr>
                                                <td>
                                                    <input checked="true" id="community_user_settings_privacy_posts_1" onclick="nds_privacy_check_which_posts_0_official(this)" name="usernameChoice" type="radio" />
                                                </td>
                                                <td><?php
                                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_41("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_41("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                    } else {
                                                        ?>
                                                        Use another name
                                                    <?php } ?></td>
                                                <td>
                                                    <input id="comm_user_settings_MyOtherName" value="<?php echo "" . $_privacy_posts_set_txt_descr_2; ?>" type="text" class="accountRegPuts" disabled="disabled" placeholder="<?php
                                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_42("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_42("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                    } else {
                                                        ?>
                                                               MyOtherName
                                                           <?php } ?>" /><input onclick="enableThisIndivProfPageDiv(this, 'comm_user_settings_MyOtherName')" type="checkbox" id="community_user_settings_myOther_Name" />
                                                </td>
                                                <td>
                                                    <input onclick="nds_privacy_save_which_posts_1_official()" type="button" value="<?php
                                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_43("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_43("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                    } else {
                                                        ?>
                                                               Save New Name
                                                           <?php } ?>" class="btn" />
                                                </td>
                                            </tr>
                                        </table> 
                                        <?php
                                    }
                                }
                            }
                            //------When nothing is registered yet!--------------------------------
                            ?>
                            <?php
                            if ($_2017_check_privacy_posts == 0) {
                                ?>
                                <table>
                                    <tr>
                                        <td>
                                            <input checked="true" id="community_user_settings_privacy_posts_0" onclick="nds_privacy_check_which_posts_0_official(this)" name="usernameChoice" type="radio" />
                                        </td>
                                        <td><?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_40("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_40("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                My Username will appear
                                            <?php } ?></td>
                                    </tr>
                                </table>
                                <table>
                                    <tr>
                                        <td>
                                            <input name="usernameChoice" id="community_user_settings_privacy_posts_1" onclick="nds_privacy_check_which_posts_0_official(this)" type="radio" />
                                        </td>
                                        <td><?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_41("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_41("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                Use another name
                                            <?php } ?></td>
                                        <td>
                                            <input id="comm_user_settings_MyOtherName" type="text" class="accountRegPuts" disabled="disabled" placeholder="<?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_42("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_42("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                       MyOtherName
                                                   <?php } ?>" /><input onclick="enableThisIndivProfPageDiv(this, 'comm_user_settings_MyOtherName')" type="checkbox" id="community_user_settings_myOther_Name" />
                                        </td>
                                        <td>
                                            <input onclick="nds_privacy_save_which_posts_1_official()" type="button" value="<?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_43("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_43("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                       Save New Name
                                                   <?php } ?>" class="btn" />
                                        </td>
                                    </tr>
                                </table>                
                                <?php
                            }
                            ?>
                        </form>
                    </div>
                </div>
            </div>
            <!---Ads---->
            <div class="col-md-6" id="screen_Ads">
                <h1 class="page-header">
                    <?php
                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_official_user_settings_43("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_official_user_settings_43("system_config_xml/" . $_global_language)->item(0)->textContent;
                    } else {
                        ?>
                        Manage Ads
                    <?php } ?>
                </h1>
                <div>
                    <div style="border-bottom: 2px solid black;margin-left: 30px;margin-top: 20px">
                        <?php
                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_49("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_49("system_config_xml/" . $_global_language)->item(0)->textContent;
                        } else {
                            ?>
                            My Ads
                        <?php } ?>
                    </div>
                    <div style="margin: 30px">
                        <input onclick="common_user_settings_create_your_own_advert(this)" type="button" style="padding: 5px;border: 2px solid #0080FF;background:white;border-radius: 8px;" value="<?php
                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_58("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_58("system_config_xml/" . $_global_language)->item(0)->textContent;
                        } else {
                            ?>
                                   Create your own advert
                               <?php } ?>" />
                    </div>
                    <div id="community_user_settings_create_advert_here" style="border:2px solid #CDCDCD;visibility:hidden;position: absolute;background: white;border-radius: 8px;padding: 8px;margin-top: -70px;width: 470px">
                        <input type="button" onclick="common_user_settings_create_your_own_advert_hide()" class="btn" value="X" style="color: red;float: right;" />
                        <div style="margin-top: 20px;">
                            <table>
                                <tr>
                                    <td style="width: 80px"><?php
                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_51("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_51("system_config_xml/" . $_global_language)->item(0)->textContent;
                                        } else {
                                            ?>
                                            Start date
                                        <?php } ?></td><td><input  type="date" class="accountRegPuts_small" id="community_user_settings_advert_start_date" /></td>
                                </tr>
                                <tr>
                                    <td><?php
                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_52("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_52("system_config_xml/" . $_global_language)->item(0)->textContent;
                                        } else {
                                            ?>
                                            Finish date
                                        <?php } ?></td><td><input type="date" class="accountRegPuts_small" id="community_user_settings_advert_finish_date" /></td>
                                </tr>
                                <tr>
                                    <td><?php
                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_53("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_53("system_config_xml/" . $_global_language)->item(0)->textContent;
                                        } else {
                                            ?>
                                            Start time
                                        <?php } ?></td><td><input type="time" class="accountRegPuts_small" id="community_user_settings_advert_start_time" /></td>
                                </tr>
                                <tr>
                                    <td><?php
                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_54("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_54("system_config_xml/" . $_global_language)->item(0)->textContent;
                                        } else {
                                            ?>
                                            Finish time
                                        <?php } ?></td><td><input class="accountRegPuts_small" type="time" id="community_user_settings_advert_finish_time" /></td>
                                </tr>
                            </table>
                            <form id="community_user_settings_advert_upload_form">
                                <table>
                                    <tr>
                                        <td>
                                            <input id="community_user_settings_advert_name" type="text" placeholder="<?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_55("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_55("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                       Name
                                                   <?php } ?>" class="accountRegPuts_small" />                                        
                                        </td>
                                        <td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input onchange="upload_community_user_settings_advert_image()" id="community_user_settings_up_img_file" type="file" /></td><td><img id="community_user_settings_up_img_preview" style="width: 120px;height: 120px;" src="" /></td>
                                    </tr>
                                    <tr>
                                        <td><input type="hidden" id="community_user_settings_up_img_val" /></br>
                                            <label id="community_user_settings_up_img_messenger"></label>
                                        </td>
                                    </tr>
                                    <tr> <td><input onclick="official_user_settings_save_advert_data()" type="button" style="margin-left: 30%;" class="btn" value="<?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_39("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_institution_user_settings_39("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                        Save Changes
                                                    <?php } ?>" /></td></tr>
                                </table>
                            </form>
                        </div>
                    </div>
                    <div>
                        <div style="border: 1px solid #0080FF;padding: 20px;">
                            <h3><?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_50("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_50("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                    My paid adverts
                                <?php } ?></h3>
                            <?php
                            //  find my paid adverts
                            $sql_common_user_settings_adverts = "SELECT * FROM  ogenius_nds_db_adverts_proposed WHERE   ogenius_nds_db_adverts_proposed_user_id='{$id_xxxccc88}' AND    ogenius_nds_db_adverts_proposed_approval_status='1' ORDER BY ogenius_nds_db_adverts_proposed_id DESC";
                            if ($query_common_user_settings_adverts = $database->query($sql_common_user_settings_adverts)) {
                                //---------------------

                                while ($res_common_user_settings_adverts = mysqli_fetch_array($query_common_user_settings_adverts)) {

                                    $startDate = $res_common_user_settings_adverts['ogenius_nds_db_adverts_proposed_start_date'];
                                    $finishDate = $res_common_user_settings_adverts['ogenius_nds_db_adverts_proposed_end_date'];
                                    $startTime = $res_common_user_settings_adverts['ogenius_nds_db_adverts_proposed_start_time'];
                                    $finishTime = $res_common_user_settings_adverts['ogenius_nds_db_adverts_proposed_end_time'];
                                    $NameOfAdvert = $res_common_user_settings_adverts['ogenius_nds_db_adverts_proposed_name'];
                                    $advertReach = $res_common_user_settings_adverts['ogenius_nds_db_adverts_proposed_advert_reach'];
                                    $advertPrice = $res_common_user_settings_adverts['ogenius_nds_db_adverts_proposed_price'];
                                    $advertImgAdvert = $res_common_user_settings_adverts['ogenius_nds_db_adverts_proposed_filename'];
                                    ?>
                                    <table class="advert_community" style="border: 1px solid #cdcdcd;">
                                        <thead>
                                        <th></th>
                                        <th><?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_51("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_51("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                Start date
                                            <?php } ?></th>
                                        <th><?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_52("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_52("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                Finish date
                                            <?php } ?></th>
                                        <th><?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_53("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_53("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                Start time
                                            <?php } ?></th>
                                        <th><?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_54("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_54("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                Finish time
                                            <?php } ?></th>
                                        <th><?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_55("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_55("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                Name
                                            <?php } ?></th>
                                        <th><?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_56("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_56("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                Reach
                                            <?php } ?></th>
                                        <th><?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_57("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_community_user_settings_57("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                Price
                                            <?php } ?></th>
                                        </thead>
                                        <tr>
                                            <td><img style="width: 75px;height: 75px;border-radius: 7px;cursor: hand;" onclick="enlargeMe(this, event)" src="neza_advert_images/<?php echo "" . $advertImgAdvert; ?>" />
                                                <div id="common_user_settings_enlarge_this_image" style="border-radius: 5px;border: 2px solid #cdcdcd;visibility:hidden;position: absolute;background: #CDECDC ">
                                                    <div>
                                                        <input onclick="hideThisEnlarge()" type="button" value="X" style="color: black;" class="btn" />
                                                        <div> <img src=""  id="common_user_settings_enlarge_this_image_preview"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><?php echo "" . $startDate; ?></td>
                                            <td><?php echo "" . $finishDate; ?></td>
                                            <td><?php echo "" . $startTime; ?></td>
                                            <td><?php echo "" . $finishTime; ?></td>
                                            <td><?php echo "" . $NameOfAdvert; ?></td>
                                            <td><?php echo "" . $advertReach; ?></td>
                                            <td><?php echo "" . $advertPrice; ?> Rwf</td>
                                            <td><input type="button" value="X" style="border-style: none;color:red;" /></td>
                                        </tr>
                                    </table>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">

            </div>
        </div>
    </div>
</div>
<?php
require_once ("includes/app_footer.php");
?>
<!--
        <link rel="stylesheet" href="css/jquery-ui.css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

        <script src="jquery/jquery.js" type="text/javascript"></script>
        <script src="jquery/special_ui/jquery-ui.js" type="text/javascript"></script>
        <script src="js/nds_main.js" type="text/javascript"></script>
         Date picker 
        <script type="text/javascript" src="jquery/ui_datepicker_lib/jquery.timepicker.js"></script>
        <link rel="stylesheet" type="text/css" href="jquery/ui_datepicker_lib/jquery.timepicker.css" />
        <script type="text/javascript" src="jquery/ui_datepicker_lib/lib/bootstrap-datepicker.js"></script>
        <link rel="stylesheet" type="text/css" href="jquery/ui_datepicker_lib/lib/bootstrap-datepicker.css" />
        <script type="text/javascript" src="jquery/ui_datepicker_lib/lib/site.js"></script>-->

</body>
</html>