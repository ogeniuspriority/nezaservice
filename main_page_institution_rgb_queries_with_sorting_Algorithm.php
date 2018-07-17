<?php
session_start();
//---------------LOAD all suggesttions of this institution-
//------------------
require_once ("includes/conn/config.php");
require_once ("includes/classes/database.php");
require_once ("includes/classes/settingsReadFile.php");
require_once ("includes/timeToSec.php");
require_once ("includes/functions.php");
//---------------Link user to suggestion box--
if (isset($_SESSION["ogenius_nds_user_id_x2309999_990"])) {
    //--------if not set choose my chosen language here----------------------
    $id_link = $_SESSION["ogenius_nds_user_id_x2309999_990"];
    $sqllanguage_tools_link = "SELECT * FROM  ogenius_nds_languages_for_settings_language_user_link WHERE ogenius_nds_languages_for_settings_language_user_link_id_user='{$id_link}'     ";
    if ($querylanguage_tools_link = $database->query($sqllanguage_tools_link)) {
        //---------------------
        while ($res_lan_link = mysqli_fetch_array($querylanguage_tools_link)) {
            //-----------------------------------------------------
            $language_id_0 = $res_lan_link['ogenius_nds_languages_for_settings_language_user_link_id_languag'];
            //-------------------Find the language name----------------
            $sqllanguage_tools_link_lang = "SELECT * FROM  ogenius_nds_languages_for_settings WHERE ogenius_nds_languages_for_settings_id='{$language_id_0}'";
            if ($querylanguage_tools_link_lang = $database->query($sqllanguage_tools_link_lang)) {
                //---------------------
                while ($res_lan_link_lang = mysqli_fetch_array($querylanguage_tools_link_lang)) {
                    //-----------------------------------------------------
                    $language_id_0_lang = $res_lan_link_lang['ogenius_nds_languages_for_settings_name_of_language'];
                    //-------------------Find the language name----------------
                    $_SESSION["NDS_OGENIUS_session_lan"] = $language_id_0_lang;
                    $theLanGuru = $_SESSION["NDS_OGENIUS_session_lan"];
                }
            }
        }
    } else {
        $_SESSION["NDS_OGENIUS_session_lan"] = "English";
        $theLanGuru = $_SESSION["NDS_OGENIUS_session_lan"];
    }
} else {
    //---------------------------------
    $_SESSION["NDS_OGENIUS_session_lan"] = "English";
    $theLanGuru = $_SESSION["NDS_OGENIUS_session_lan"];
}
?>
<?php
//-------------------------------------Check a session or create one--
if (isset($_SESSION["NDS_OGENIUS_session_lan"])) {

    $_global_language = "english_NDS_618485740hub5548.xml";
    ?>
    <?php
    $thelan_09 = $_SESSION["NDS_OGENIUS_session_lan"];
    $sqllanguage_tools = "SELECT * FROM  ogenius_nds_languages_for_settings WHERE ogenius_nds_languages_for_settings_name_of_language='{$thelan_09}'";
    if ($querylanguage_tools = $database->query($sqllanguage_tools)) {
        //---------------------
        while ($res_lan = mysqli_fetch_array($querylanguage_tools)) {
            $_global_language = $res_lan['ogenius_nds_languages_for_settings_language_file_name'];
            $_SESSION["NDS_OGENIUS_session_lan"] = $_global_language;
        }
    }
} else {

//---------------
    $_global_language = "english_NDS_618485740hub5548.xml";

    $sqllanguage_tools = "SELECT * FROM  ogenius_nds_languages_for_settings WHERE ogenius_nds_languages_for_settings_name_of_language='English'";
    if ($querylanguage_tools = $database->query($sqllanguage_tools)) {
//---------------------
        while ($res_lan = mysqli_fetch_array($querylanguage_tools)) {
            $_global_language = $res_lan['ogenius_nds_languages_for_settings_language_file_name'];
        }
    }
}
//---Declare the settings class to hold all The keywords--
$NDS_OGENIUS_MAIN_settings = new myXML_CED_Settings("./system_config_xml/" . $_global_language);
//-------------------------
$common_user_settings_the_id = renderTheSuggestionBoxIdAsInstitutionOrOfficial($_POST['common_user_settings_the_id']);

$main_page_institution_sort_tag = $_POST['target'];
//---------------------
switch ($main_page_institution_sort_tag) {
    case "ascending" :
        $order_tag = $_POST['order_tag'];
//-------------------------------
        ?>
        <?php
        //-----------rgbmarker---------
        //echo "rgb--questions".$id_xxxccc88;
        ?>

        <?php
        //---------------LOAD all suggesttions of this institution-
        require_once ("includes/conn/config.php");
        require_once ("includes/classes/database.php");
        require_once ("includes/classes/settingsReadFile.php");
        require_once ("includes/timeToSec.php");
        require_once ("includes/functions.php");
        //---------------Link user to suggestion box--
        $sql_main_page_institution_queries = "SELECT 
                ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_id,
                ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_query,
                ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_date,
                ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_query_provider,
                ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_answered,
                ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_commented_on,
                ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_orientation,
                ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_local_query_id,
                ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_sent,
                ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id,
                ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_names
                  FROM  ogenius_nds_db_rgb_query 
                LEFT JOIN ogenius_nds_db_normal_users
            ON ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_query_provider=ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id
                
                 ORDER BY ogenius_nds_db_rgb_query_id ASC LIMIT 100      ";
        if ($query_main_page_institution_queries = $database->query($sql_main_page_institution_queries)) {
            //---------------------
            $n = 0;

            while ($res_main_page_institution_queries = mysqli_fetch_array($query_main_page_institution_queries)) {
                $n++;
                ?>
                <div class="startcolstart" style="border-bottom: 1px solid rgba(15,15,15,.2); margin: 10px 0px">
                    <div class="startrowstart"><img id='view_rgb<?php echo "d" . $n . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_id']; ?>' name='<?php echo "" . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_id']; ?>' onclick="main_page_institution_visualize_suggestion_details_rgb(this)" src="images/view_this.png" style="width: 30px;height: 30px;margin: 10px;box-shadow: 2px 2px 2px #cdcdcd;" />
                        <span><?php
                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_45("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_45("system_config_xml/" . $_global_language)->item(0)->textContent;
                            } else {
                                ?>
                                Category:
                            <?php } ?> <span style="color: #999933;font-weight:100"><?php echo "" . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_orientation']; ?></span>
                        </span></div>
                    <div>
                        <p> <?php echo "" . activateUrlStringsw($res_main_page_institution_queries['ogenius_nds_db_rgb_query_query']); ?>
                        </p>  
                    </div>
                    <div class="startrowstart">
                        <button id='wex_<?php echo "" . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_id']; ?>' onclick="main_page_rgb_reply_to_query(this,<?php echo "" . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_query_provider']; ?>,<?php echo "" . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_id']; ?>)" class="btn btn-primary">
                            <?php
                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_46("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_46("system_config_xml/" . $_global_language)->item(0)->textContent;
                            } else {
                                ?>
                                Reply
                            <?php } ?>
                        </button>
                        <button id='weeex_<?php echo "" . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_id']; ?>' onclick="main_page_rgb_forward_this_query(this,<?php echo "" . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_query_provider']; ?>,<?php echo "" . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_id']; ?>)" class="btn btn-primary">
                            <?php
                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_47("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_47("system_config_xml/" . $_global_language)->item(0)->textContent;
                            } else {
                                ?>
                                Forward as:
                            <?php } ?>
                        </button> 
                        <span style="margin-left:80px;color: #0000FF;">
                            <?php echo "" . time_to_sec($res_main_page_institution_queries['ogenius_nds_db_rgb_query_date']); ?>
                        </span>
                    </div>

                    <div style="background:#cdcdcd;border-radius: 5px;position: absolute;padding: 8px;;visibility: hidden;">
                        <ul  style="list-style: none;">
                            <li class="delegationThings">
                                <?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_48("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_48("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                    Delegation
                                <?php } ?>
                            </li>
                            <li class="delegationThings">
                                <?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_49("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_49("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                    Consulation
                                <?php } ?>
                            </li>
                        </ul>
                    </div>
                </div>



                <?php
            }
        }
        ?>


        <?php
//------------------
//echo "" . $main_page_institution_sort_tag."--".$order_tag;
        break;
    case "descending" :
        $order_tag = $_POST['order_tag'];
        ?>
        <?php
        //-----------rgbmarker---------
        //echo "rgb--questions".$id_xxxccc88;
        ?>

        <?php
        //---------------LOAD all suggesttions of this institution-
        require_once ("includes/conn/config.php");
        require_once ("includes/classes/database.php");
        require_once ("includes/classes/settingsReadFile.php");
        require_once ("includes/timeToSec.php");
        require_once ("includes/functions.php");
        //---------------Link user to suggestion box--
        $sql_main_page_institution_queries = "SELECT 
                ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_id,
                ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_query,
                ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_date,
                ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_query_provider,
                ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_answered,
                ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_commented_on,
                ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_orientation,
                ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_local_query_id,
                ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_sent,
                ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id,
                ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_names
                  FROM  ogenius_nds_db_rgb_query 
                LEFT JOIN ogenius_nds_db_normal_users
            ON ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_query_provider=ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id
                
                 ORDER BY ogenius_nds_db_rgb_query_id DESC LIMIT 100      ";
        if ($query_main_page_institution_queries = $database->query($sql_main_page_institution_queries)) {
            //---------------------
            $n = 0;

            while ($res_main_page_institution_queries = mysqli_fetch_array($query_main_page_institution_queries)) {
                $n++;
                ?>
                <div class="startcolstart" style="border-bottom: 1px solid rgba(15,15,15,.2); margin: 10px 0px">
                    <div class="startrowstart"><img id='view_rgb<?php echo "d" . $n . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_id']; ?>' name='<?php echo "" . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_id']; ?>' onclick="main_page_institution_visualize_suggestion_details_rgb(this)" src="images/view_this.png" style="width: 30px;height: 30px;margin: 10px;box-shadow: 2px 2px 2px #cdcdcd;" />
                        <span><?php
                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_45("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_45("system_config_xml/" . $_global_language)->item(0)->textContent;
                            } else {
                                ?>
                                Category:
                            <?php } ?> <span style="color: #999933;font-weight:100"><?php echo "" . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_orientation']; ?></span>
                        </span></div>
                    <div>
                        <p> <?php echo "" . activateUrlStringsw($res_main_page_institution_queries['ogenius_nds_db_rgb_query_query']); ?>
                        </p>  
                    </div>
                    <div class="startrowstart">
                        <button id='wex_<?php echo "" . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_id']; ?>' onclick="main_page_rgb_reply_to_query(this,<?php echo "" . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_query_provider']; ?>,<?php echo "" . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_id']; ?>)" class="btn btn-primary">
                            <?php
                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_46("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_46("system_config_xml/" . $_global_language)->item(0)->textContent;
                            } else {
                                ?>
                                Reply
                            <?php } ?>
                        </button>
                        <button id='weeex_<?php echo "" . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_id']; ?>' onclick="main_page_rgb_forward_this_query(this,<?php echo "" . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_query_provider']; ?>,<?php echo "" . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_id']; ?>)" class="btn btn-primary">
                            <?php
                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_47("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_47("system_config_xml/" . $_global_language)->item(0)->textContent;
                            } else {
                                ?>
                                Forward as:
                            <?php } ?>
                        </button> 
                        <span style="margin-left:80px;color: #0000FF;">
                            <?php echo "" . time_to_sec($res_main_page_institution_queries['ogenius_nds_db_rgb_query_date']); ?>
                        </span>
                    </div>

                    <div style="background:#cdcdcd;border-radius: 5px;position: absolute;padding: 8px;;visibility: hidden;">
                        <ul  style="list-style: none;">
                            <li class="delegationThings">
                                <?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_48("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_48("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                    Delegation
                                <?php } ?>
                            </li>
                            <li class="delegationThings">
                                <?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_49("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_49("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                    Consulation
                                <?php } ?>
                            </li>
                        </ul>
                    </div>
                </div>



                <?php
            }
        }
        ?>


        <?php
//------------------
//echo "" . $main_page_institution_sort_tag."--".$order_tag;
        break;
    case "byname" :
//------------------
        $byname = $_POST['byname'];
        $byname = strtolower($byname);
        ?>
        <?php
        //-----------rgbmarker---------
        //echo "rgb--questions".$id_xxxccc88;
        ?>

        <?php
        //---------------LOAD all suggesttions of this institution-
        require_once ("includes/conn/config.php");
        require_once ("includes/classes/database.php");
        require_once ("includes/classes/settingsReadFile.php");
        require_once ("includes/timeToSec.php");
        require_once ("includes/functions.php");
        //---------------Link user to suggestion box--
        $sql_main_page_institution_queries = "SELECT 
                ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_id,
                ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_query,
                ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_date,
                ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_query_provider,
                ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_answered,
                ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_commented_on,
                ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_orientation,
                ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_local_query_id,
                ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_sent,
                ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id,
                ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_names
                  FROM  ogenius_nds_db_rgb_query 
                LEFT JOIN ogenius_nds_db_normal_users
            ON ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_query_provider=ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id
                WHERE LOWER(ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_query) LIKE '%{$byname}%'
                 ORDER BY ogenius_nds_db_rgb_query_id DESC LIMIT 100      ";
        if ($query_main_page_institution_queries = $database->query($sql_main_page_institution_queries)) {
            //---------------------
            $n = 0;

            while ($res_main_page_institution_queries = mysqli_fetch_array($query_main_page_institution_queries)) {
                $n++;
                ?>
                <div class="startcolstart" style="border-bottom: 1px solid rgba(15,15,15,.2); margin: 10px 0px">
                    <div class="startrowstart"><img id='view_rgb<?php echo "d" . $n . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_id']; ?>' name='<?php echo "" . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_id']; ?>' onclick="main_page_institution_visualize_suggestion_details_rgb(this)" src="images/view_this.png" style="width: 30px;height: 30px;margin: 10px;box-shadow: 2px 2px 2px #cdcdcd;" />
                        <span><?php
                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_45("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_45("system_config_xml/" . $_global_language)->item(0)->textContent;
                            } else {
                                ?>
                                Category:
                            <?php } ?> <span style="color: #999933;font-weight:100"><?php echo "" . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_orientation']; ?></span>
                        </span></div>
                    <div>
                        <p> <?php echo "" . activateUrlStringsw($res_main_page_institution_queries['ogenius_nds_db_rgb_query_query']); ?>
                        </p>  
                    </div>
                    <div class="startrowstart">
                        <button id='wex_<?php echo "" . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_id']; ?>' onclick="main_page_rgb_reply_to_query(this,<?php echo "" . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_query_provider']; ?>,<?php echo "" . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_id']; ?>)" class="btn btn-primary">
                            <?php
                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_46("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_46("system_config_xml/" . $_global_language)->item(0)->textContent;
                            } else {
                                ?>
                                Reply
                            <?php } ?>
                        </button>
                        <button id='weeex_<?php echo "" . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_id']; ?>' onclick="main_page_rgb_forward_this_query(this,<?php echo "" . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_query_provider']; ?>,<?php echo "" . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_id']; ?>)" class="btn btn-primary">
                            <?php
                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_47("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_47("system_config_xml/" . $_global_language)->item(0)->textContent;
                            } else {
                                ?>
                                Forward as:
                            <?php } ?>
                        </button> 
                        <span style="margin-left:80px;color: #0000FF;">
                            <?php echo "" . time_to_sec($res_main_page_institution_queries['ogenius_nds_db_rgb_query_date']); ?>
                        </span>
                    </div>

                    <div style="background:#cdcdcd;border-radius: 5px;position: absolute;padding: 8px;;visibility: hidden;">
                        <ul  style="list-style: none;">
                            <li class="delegationThings">
                                <?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_48("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_48("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                    Delegation
                                <?php } ?>
                            </li>
                            <li class="delegationThings">
                                <?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_49("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_49("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                    Consulation
                                <?php } ?>
                            </li>
                        </ul>
                    </div>
                </div>



                <?php
            }
        }
        ?>

        <?php
//echo "" . $main_page_institution_sort_tag."---".$byname;
        break;
    case "bykeyword" :
//------------------
        $bykeyword = $_POST['bykeyword'];
        $bykeyword = strtolower($bykeyword);
        ?>
        <?php
        //-----------rgbmarker---------
        //echo "rgb--questions".$id_xxxccc88;
        ?>

        <?php
        //---------------LOAD all suggesttions of this institution-
        require_once ("includes/conn/config.php");
        require_once ("includes/classes/database.php");
        require_once ("includes/classes/settingsReadFile.php");
        require_once ("includes/timeToSec.php");
        require_once ("includes/functions.php");
        //---------------Link user to suggestion box--
        $sql_main_page_institution_queries = "SELECT 
                ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_id,
                ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_query,
                ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_date,
                ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_query_provider,
                ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_answered,
                ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_commented_on,
                ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_orientation,
                ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_local_query_id,
                ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_sent,
                ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id,
                ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_names
                  FROM  ogenius_nds_db_rgb_query 
                LEFT JOIN ogenius_nds_db_normal_users
            ON ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_query_provider=ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id
                WHERE LOWER(ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_query) LIKE '%{$bykeyword}%'
                 ORDER BY ogenius_nds_db_rgb_query_id DESC LIMIT 100      ";
        if ($query_main_page_institution_queries = $database->query($sql_main_page_institution_queries)) {
            //---------------------
            $n = 0;

            while ($res_main_page_institution_queries = mysqli_fetch_array($query_main_page_institution_queries)) {
                $n++;
                ?>
                <div class="startcolstart" style="border-bottom: 1px solid rgba(15,15,15,.2); margin: 10px 0px">
                    <div class="startrowstart"><img id='view_rgb<?php echo "d" . $n . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_id']; ?>' name='<?php echo "" . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_id']; ?>' onclick="main_page_institution_visualize_suggestion_details_rgb(this)" src="images/view_this.png" style="width: 30px;height: 30px;margin: 10px;box-shadow: 2px 2px 2px #cdcdcd;" />
                        <span><?php
                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_45("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_45("system_config_xml/" . $_global_language)->item(0)->textContent;
                            } else {
                                ?>
                                Category:
                            <?php } ?> <span style="color: #999933;font-weight:100"><?php echo "" . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_orientation']; ?></span>
                        </span></div>
                    <div>
                        <p> <?php echo "" . activateUrlStringsw($res_main_page_institution_queries['ogenius_nds_db_rgb_query_query']); ?>
                        </p>  
                    </div>
                    <div class="startrowstart">
                        <button id='wex_<?php echo "" . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_id']; ?>' onclick="main_page_rgb_reply_to_query(this,<?php echo "" . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_query_provider']; ?>,<?php echo "" . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_id']; ?>)" class="btn btn-primary">
                            <?php
                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_46("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_46("system_config_xml/" . $_global_language)->item(0)->textContent;
                            } else {
                                ?>
                                Reply
                            <?php } ?>
                        </button>
                        <button id='weeex_<?php echo "" . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_id']; ?>' onclick="main_page_rgb_forward_this_query(this,<?php echo "" . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_query_provider']; ?>,<?php echo "" . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_id']; ?>)" class="btn btn-primary">
                            <?php
                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_47("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_47("system_config_xml/" . $_global_language)->item(0)->textContent;
                            } else {
                                ?>
                                Forward as:
                            <?php } ?>
                        </button> 
                        <span style="margin-left:80px;color: #0000FF;">
                            <?php echo "" . time_to_sec($res_main_page_institution_queries['ogenius_nds_db_rgb_query_date']); ?>
                        </span>
                    </div>

                    <div style="background:#cdcdcd;border-radius: 5px;position: absolute;padding: 8px;;visibility: hidden;">
                        <ul  style="list-style: none;">
                            <li class="delegationThings">
                                <?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_48("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_48("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                    Delegation
                                <?php } ?>
                            </li>
                            <li class="delegationThings">
                                <?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_49("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_49("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                    Consulation
                                <?php } ?>
                            </li>
                        </ul>
                    </div>
                </div>



                <?php
            }
        }
        ?>

        <?php
//echo "" . $main_page_institution_sort_tag."---".$bykeyword;
        break;
    case "bygender" :
//------------------
        $bygender = $_POST['bygender'];
        ?>
        <?php
        //-----------rgbmarker---------
        //echo "rgb--questions".$id_xxxccc88;
        ?>

        <?php
        //---------------LOAD all suggesttions of this institution-
        require_once ("includes/conn/config.php");
        require_once ("includes/classes/database.php");
        require_once ("includes/classes/settingsReadFile.php");
        require_once ("includes/timeToSec.php");
        require_once ("includes/functions.php");
        //---------------Link user to suggestion box--
        $sql_main_page_institution_queries = "SELECT 
                ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_id,
                ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_query,
                ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_date,
                ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_query_provider,
                ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_answered,
                ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_commented_on,
                ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_orientation,
                ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_local_query_id,
                ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_sent,
                ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id,
                ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_names
                  FROM  ogenius_nds_db_rgb_query 
                LEFT JOIN ogenius_nds_db_normal_users
            ON ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_query_provider=ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id
                
                 ORDER BY ogenius_nds_db_rgb_query_id ASC LIMIT 100      ";
        if ($query_main_page_institution_queries = $database->query($sql_main_page_institution_queries)) {
            //---------------------
            $n = 0;

            while ($res_main_page_institution_queries = mysqli_fetch_array($query_main_page_institution_queries)) {
                $senderId = $res_main_page_institution_queries['ogenius_nds_db_rgb_query_query_provider'];
                $n++;
                if (!renderTheSuggestionsAccordingToGenderOfSender($senderId, $bygender)) {
                    continue;
                }
                ?>
                <div class="startcolstart" style="border-bottom: 1px solid rgba(15,15,15,.2); margin: 10px 0px">
                    <div class="startrowstart"><img id='view_rgb<?php echo "d" . $n . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_id']; ?>' name='<?php echo "" . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_id']; ?>' onclick="main_page_institution_visualize_suggestion_details_rgb(this)" src="images/view_this.png" style="width: 30px;height: 30px;margin: 10px;box-shadow: 2px 2px 2px #cdcdcd;" />
                        <span><?php
                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_45("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_45("system_config_xml/" . $_global_language)->item(0)->textContent;
                            } else {
                                ?>
                                Category:
                            <?php } ?> <span style="color: #999933;font-weight:100"><?php echo "" . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_orientation']; ?></span>
                        </span></div>
                    <div>
                        <p> <?php echo "" . activateUrlStringsw($res_main_page_institution_queries['ogenius_nds_db_rgb_query_query']); ?>
                        </p>  
                    </div>
                    <div class="startrowstart">
                        <button id='wex_<?php echo "" . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_id']; ?>' onclick="main_page_rgb_reply_to_query(this,<?php echo "" . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_query_provider']; ?>,<?php echo "" . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_id']; ?>)" class="btn btn-primary">
                            <?php
                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_46("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_46("system_config_xml/" . $_global_language)->item(0)->textContent;
                            } else {
                                ?>
                                Reply
                            <?php } ?>
                        </button>
                        <button id='weeex_<?php echo "" . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_id']; ?>' onclick="main_page_rgb_forward_this_query(this,<?php echo "" . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_query_provider']; ?>,<?php echo "" . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_id']; ?>)" class="btn btn-primary">
                            <?php
                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_47("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_47("system_config_xml/" . $_global_language)->item(0)->textContent;
                            } else {
                                ?>
                                Forward as:
                            <?php } ?>
                        </button> 
                        <span style="margin-left:80px;color: #0000FF;">
                            <?php echo "" . time_to_sec($res_main_page_institution_queries['ogenius_nds_db_rgb_query_date']); ?>
                        </span>
                    </div>

                    <div style="background:#cdcdcd;border-radius: 5px;position: absolute;padding: 8px;;visibility: hidden;">
                        <ul  style="list-style: none;">
                            <li class="delegationThings">
                                <?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_48("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_48("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                    Delegation
                                <?php } ?>
                            </li>
                            <li class="delegationThings">
                                <?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_49("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_49("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                    Consulation
                                <?php } ?>
                            </li>
                        </ul>
                    </div>
                </div>
                <?php
            }
        }
        ?>

        <?php
//echo "" . $main_page_institution_sort_tag."---".$bygender;
        break;
    case "bymaritalstatus" :
//------------------
        $bymaritalstatus = $_POST['bymaritalstatus'];
        ?>
        <?php
        //-----------rgbmarker---------
        //echo "rgb--questions".$id_xxxccc88;
        ?>

        <?php
        //---------------LOAD all suggesttions of this institution-
        require_once ("includes/conn/config.php");
        require_once ("includes/classes/database.php");
        require_once ("includes/classes/settingsReadFile.php");
        require_once ("includes/timeToSec.php");
        require_once ("includes/functions.php");
        //---------------Link user to suggestion box--
        $sql_main_page_institution_queries = "SELECT 
                ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_id,
                ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_query,
                ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_date,
                ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_query_provider,
                ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_answered,
                ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_commented_on,
                ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_orientation,
                ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_local_query_id,
                ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_sent,
                ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id,
                ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_names
                  FROM  ogenius_nds_db_rgb_query 
                LEFT JOIN ogenius_nds_db_normal_users
            ON ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_query_provider=ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id
                
                 ORDER BY ogenius_nds_db_rgb_query_id ASC LIMIT 100      ";
        if ($query_main_page_institution_queries = $database->query($sql_main_page_institution_queries)) {
            //---------------------
            $n = 0;

            while ($res_main_page_institution_queries = mysqli_fetch_array($query_main_page_institution_queries)) {
                $n++;
                $theIdOfTheSuggestSender = $res_main_page_institution_queries['ogenius_nds_db_rgb_query_query_provider'];
                if (!renderTheSuggestionsAccordingToMaritalStatusOfSender($theIdOfTheSuggestSender, $bymaritalstatus)) {
                    continue;
                }
                ?>
                <div class="startcolstart" style="border-bottom: 1px solid rgba(15,15,15,.2); margin: 10px 0px">
                    <div class="startrowstart"><img id='view_rgb<?php echo "d" . $n . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_id']; ?>' name='<?php echo "" . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_id']; ?>' onclick="main_page_institution_visualize_suggestion_details_rgb(this)" src="images/view_this.png" style="width: 30px;height: 30px;margin: 10px;box-shadow: 2px 2px 2px #cdcdcd;" />
                        <span><?php
                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_45("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_45("system_config_xml/" . $_global_language)->item(0)->textContent;
                            } else {
                                ?>
                                Category:
                            <?php } ?> <span style="color: #999933;font-weight:100"><?php echo "" . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_orientation']; ?></span>
                        </span></div>
                    <div>
                        <p> <?php echo "" . activateUrlStringsw($res_main_page_institution_queries['ogenius_nds_db_rgb_query_query']); ?>
                        </p>  
                    </div>
                    <div class="startrowstart">
                        <button id='wex_<?php echo "" . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_id']; ?>' onclick="main_page_rgb_reply_to_query(this,<?php echo "" . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_query_provider']; ?>,<?php echo "" . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_id']; ?>)" class="btn btn-primary">
                            <?php
                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_46("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_46("system_config_xml/" . $_global_language)->item(0)->textContent;
                            } else {
                                ?>
                                Reply
                            <?php } ?>
                        </button>
                        <button id='weeex_<?php echo "" . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_id']; ?>' onclick="main_page_rgb_forward_this_query(this,<?php echo "" . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_query_provider']; ?>,<?php echo "" . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_id']; ?>)" class="btn btn-primary">
                            <?php
                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_47("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_47("system_config_xml/" . $_global_language)->item(0)->textContent;
                            } else {
                                ?>
                                Forward as:
                            <?php } ?>
                        </button> 
                        <span style="margin-left:80px;color: #0000FF;">
                            <?php echo "" . time_to_sec($res_main_page_institution_queries['ogenius_nds_db_rgb_query_date']); ?>
                        </span>
                    </div>

                    <div style="background:#cdcdcd;border-radius: 5px;position: absolute;padding: 8px;;visibility: hidden;">
                        <ul  style="list-style: none;">
                            <li class="delegationThings">
                                <?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_48("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_48("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                    Delegation
                                <?php } ?>
                            </li>
                            <li class="delegationThings">
                                <?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_49("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_49("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                    Consulation
                                <?php } ?>
                            </li>
                        </ul>
                    </div>
                </div>


                <?php
            }
        }
        ?>

        <?php
//echo "" . $main_page_institution_sort_tag."---".$bymaritalstatus;

        break;
    case "bycategory" :
//------------------
        $bycategory = $_POST['bycategory'];
        switch ($bycategory) {
            case "all":
                $bycategory = "all";
                break;
            case "mutuelle":
                $bycategory = "MUTUELLE DE SANTE";
                break;
            case "girinka":
                $bycategory = "Girinka";
                break;
            case "umurenge sacco":
                $bycategory = "UMURENGE SACCO";
                break;
            case "vup":
                $bycategory = "VUP";
                break;
            case "ibibazobyabaturage":
                $bycategory = "IBIBAZO BY'ABATURAGE";
                break;
        }
//-------------------------------------
        ?>

        <?php
        //-----------rgbmarker---------
        //echo "rgb--questions".$id_xxxccc88;
        ?>

        <?php
        //---------------LOAD all suggesttions of this institution-
        require_once ("includes/conn/config.php");
        require_once ("includes/classes/database.php");
        require_once ("includes/classes/settingsReadFile.php");
        require_once ("includes/timeToSec.php");
        require_once ("includes/functions.php");
        //---------------Link user to suggestion box--
        $sql_main_page_institution_queries = "SELECT 
                ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_id,
                ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_query,
                ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_date,
                ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_query_provider,
                ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_answered,
                ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_commented_on,
                ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_orientation,
                ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_local_query_id,
                ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_sent,
                ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id,
                ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_names
                  FROM  ogenius_nds_db_rgb_query 
                LEFT JOIN ogenius_nds_db_normal_users
            ON ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_query_provider=ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id
                WHERE ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_orientation=\"$bycategory\"
                 ORDER BY ogenius_nds_db_rgb_query_id DESC LIMIT 100      ";
        if ($query_main_page_institution_queries = $database->query($sql_main_page_institution_queries)) {
            //---------------------
            $n = 0;

            while ($res_main_page_institution_queries = mysqli_fetch_array($query_main_page_institution_queries)) {
                $n++;
                ?>
                <div class="startcolstart" style="border-bottom: 1px solid rgba(15,15,15,.2); margin: 10px 0px">
                    <div class="startrowstart"><img id='view_rgb<?php echo "d" . $n . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_id']; ?>' name='<?php echo "" . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_id']; ?>' onclick="main_page_institution_visualize_suggestion_details_rgb(this)" src="images/view_this.png" style="width: 30px;height: 30px;margin: 10px;box-shadow: 2px 2px 2px #cdcdcd;" />
                        <span><?php
                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_45("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_45("system_config_xml/" . $_global_language)->item(0)->textContent;
                            } else {
                                ?>
                                Category:
                            <?php } ?> <span style="color: #999933;font-weight:100"><?php echo "" . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_orientation']; ?></span>
                        </span></div>
                    <div>
                        <p> <?php echo "" . activateUrlStringsw($res_main_page_institution_queries['ogenius_nds_db_rgb_query_query']); ?>
                        </p>  
                    </div>
                    <div class="startrowstart">
                        <button id='wex_<?php echo "" . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_id']; ?>' onclick="main_page_rgb_reply_to_query(this,<?php echo "" . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_query_provider']; ?>,<?php echo "" . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_id']; ?>)" class="btn btn-primary">
                            <?php
                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_46("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_46("system_config_xml/" . $_global_language)->item(0)->textContent;
                            } else {
                                ?>
                                Reply
                            <?php } ?>
                        </button>
                        <button id='weeex_<?php echo "" . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_id']; ?>' onclick="main_page_rgb_forward_this_query(this,<?php echo "" . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_query_provider']; ?>,<?php echo "" . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_id']; ?>)" class="btn btn-primary">
                            <?php
                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_47("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_47("system_config_xml/" . $_global_language)->item(0)->textContent;
                            } else {
                                ?>
                                Forward as:
                            <?php } ?>
                        </button> 
                        <span style="margin-left:80px;color: #0000FF;">
                            <?php echo "" . time_to_sec($res_main_page_institution_queries['ogenius_nds_db_rgb_query_date']); ?>
                        </span>
                    </div>

                    <div style="background:#cdcdcd;border-radius: 5px;position: absolute;padding: 8px;;visibility: hidden;">
                        <ul  style="list-style: none;">
                            <li class="delegationThings">
                                <?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_48("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_48("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                    Delegation
                                <?php } ?>
                            </li>
                            <li class="delegationThings">
                                <?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_49("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_49("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                    Consulation
                                <?php } ?>
                            </li>
                        </ul>
                    </div>
                </div>



                <?php
            }
        }
        ?>

        <?php
//echo "" . $main_page_institution_sort_tag."---".$bycategory;
        break;
    case "byprogress" :
//------------------
        $byprogress = $_POST['byprogress'];
//-------------------------
        switch ($byprogress) {
            case 'unresolved':
                $byprogress = 0;
                break;
            case 'resolved':
                $byprogress = 1;
                break;
            case 'pending':
                $byprogress = 2;
                break;
            case 'unsatisfied':
                $byprogress = 3;
                break;
            case 'inprogress':
                $byprogress = 4;
                break;
            case 'unread':
                $byprogress = 6;
                break;
            case 'repliedto':
                $byprogress = 7;
                break;
        }
        ?>
        <?php
        //-----------rgbmarker---------
        //echo "rgb--questions".$id_xxxccc88;
        ?>

        <?php
        //---------------LOAD all suggesttions of this institution-
        require_once ("includes/conn/config.php");
        require_once ("includes/classes/database.php");
        require_once ("includes/classes/settingsReadFile.php");
        require_once ("includes/timeToSec.php");
        require_once ("includes/functions.php");
        //---------------Link user to suggestion box--
        $sql_main_page_institution_queries = "SELECT 
                ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_id,
                ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_query,
                ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_date,
                ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_query_provider,
                ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_answered,
                ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_commented_on,
                ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_orientation,
                ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_local_query_id,
                ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_sent,
                ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id,
                ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_names
                  FROM  ogenius_nds_db_rgb_query 
                LEFT JOIN ogenius_nds_db_normal_users
            ON ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_query_provider=ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id
                WHERE   ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_commented_on='{$byprogress}'
                 ORDER BY ogenius_nds_db_rgb_query_id DESC LIMIT 100      ";
        if ($query_main_page_institution_queries = $database->query($sql_main_page_institution_queries)) {
            //---------------------
            $n = 0;

            while ($res_main_page_institution_queries = mysqli_fetch_array($query_main_page_institution_queries)) {
                $n++;
                ?>
                <div class="startcolstart" style="border-bottom: 1px solid rgba(15,15,15,.2); margin: 10px 0px">
                    <div class="startrowstart"><img id='view_rgb<?php echo "d" . $n . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_id']; ?>' name='<?php echo "" . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_id']; ?>' onclick="main_page_institution_visualize_suggestion_details_rgb(this)" src="images/view_this.png" style="width: 30px;height: 30px;margin: 10px;box-shadow: 2px 2px 2px #cdcdcd;" />
                        <span><?php
                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_45("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_45("system_config_xml/" . $_global_language)->item(0)->textContent;
                            } else {
                                ?>
                                Category:
                            <?php } ?> <span style="color: #999933;font-weight:100"><?php echo "" . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_orientation']; ?></span>
                        </span></div>
                    <div>
                        <p> <?php echo "" . activateUrlStringsw($res_main_page_institution_queries['ogenius_nds_db_rgb_query_query']); ?>
                        </p>  
                    </div>
                    <div class="startrowstart">
                        <button id='wex_<?php echo "" . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_id']; ?>' onclick="main_page_rgb_reply_to_query(this,<?php echo "" . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_query_provider']; ?>,<?php echo "" . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_id']; ?>)" class="btn btn-primary">
                            <?php
                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_46("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_46("system_config_xml/" . $_global_language)->item(0)->textContent;
                            } else {
                                ?>
                                Reply
                            <?php } ?>
                        </button>
                        <button id='weeex_<?php echo "" . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_id']; ?>' onclick="main_page_rgb_forward_this_query(this,<?php echo "" . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_query_provider']; ?>,<?php echo "" . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_id']; ?>)" class="btn btn-primary">
                            <?php
                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_47("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_47("system_config_xml/" . $_global_language)->item(0)->textContent;
                            } else {
                                ?>
                                Forward as:
                            <?php } ?>
                        </button> 
                        <span style="margin-left:80px;color: #0000FF;">
                            <?php echo "" . time_to_sec($res_main_page_institution_queries['ogenius_nds_db_rgb_query_date']); ?>
                        </span>
                    </div>

                    <div style="background:#cdcdcd;border-radius: 5px;position: absolute;padding: 8px;;visibility: hidden;">
                        <ul  style="list-style: none;">
                            <li class="delegationThings">
                                <?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_48("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_48("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                    Delegation
                                <?php } ?>
                            </li>
                            <li class="delegationThings">
                                <?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_49("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_49("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                    Consulation
                                <?php } ?>
                            </li>
                        </ul>
                    </div>
                </div>



                <?php
            }
        }
        ?>

        <?php
//----------------
//echo "" . $main_page_institution_sort_tag."---".$byprogress;
        break;
    case "bydaterange" :
//------------------
        $date1 = $_POST['date1'];
        $date2 = $_POST['date2'];
//---------
        $newDateFirst = new DateTime($date1);
        $newDateSecond = new DateTime($date2);
        $newDateFirst = date("Y-m-d H:i:s", strtotime($date1));
        $newDateSecond = date("Y-m-d H:i:s", strtotime($date2));

        //echo "</br>--".$newDateSecond."---".$newDateFirst;
        //-------------------------
        $ASCorDESC = ($_POST['btn'] == "ASC") ? "ASC" : "DESC";
        ?>
        <?php
        //-----------rgbmarker---------
        //echo "rgb--questions".$id_xxxccc88;
        ?>

        <?php
        //---------------LOAD all suggesttions of this institution-
        require_once ("includes/conn/config.php");
        require_once ("includes/classes/database.php");
        require_once ("includes/classes/settingsReadFile.php");
        require_once ("includes/timeToSec.php");
        require_once ("includes/functions.php");
        //---------------Link user to suggestion box--
        $sql_main_page_institution_queries = "SELECT 
                ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_id,
                ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_query,
                ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_date,
                ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_query_provider,
                ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_answered,
                ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_commented_on,
                ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_orientation,
                ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_local_query_id,
                ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_sent,
                ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id,
                ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_names
                  FROM  ogenius_nds_db_rgb_query 
                LEFT JOIN ogenius_nds_db_normal_users
            ON ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_query_provider=ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id
                WHERE   (ogenius_nds_db_rgb_query_date BETWEEN  '{$newDateFirst}' AND '{$newDateSecond}')
                 ORDER BY ogenius_nds_db_rgb_query_id $ASCorDESC LIMIT 100      ";
        if ($query_main_page_institution_queries = $database->query($sql_main_page_institution_queries)) {
            //---------------------
            $n = 0;

            while ($res_main_page_institution_queries = mysqli_fetch_array($query_main_page_institution_queries)) {
                $n++;
                ?>
                <div class="startcolstart" style="border-bottom: 1px solid rgba(15,15,15,.2); margin: 10px 0px">
                    <div class="startrowstart"><img id='view_rgb<?php echo "d" . $n . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_id']; ?>' name='<?php echo "" . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_id']; ?>' onclick="main_page_institution_visualize_suggestion_details_rgb(this)" src="images/view_this.png" style="width: 30px;height: 30px;margin: 10px;box-shadow: 2px 2px 2px #cdcdcd;" />
                        <span><?php
                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_45("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_45("system_config_xml/" . $_global_language)->item(0)->textContent;
                            } else {
                                ?>
                                Category:
                            <?php } ?> <span style="color: #999933;font-weight:100"><?php echo "" . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_orientation']; ?></span>
                        </span></div>
                    <div>
                        <p> <?php echo "" . activateUrlStringsw($res_main_page_institution_queries['ogenius_nds_db_rgb_query_query']); ?>
                        </p>  
                    </div>
                    <div class="startrowstart">
                        <button id='wex_<?php echo "" . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_id']; ?>' onclick="main_page_rgb_reply_to_query(this,<?php echo "" . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_query_provider']; ?>,<?php echo "" . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_id']; ?>)" class="btn btn-primary">
                            <?php
                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_46("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_46("system_config_xml/" . $_global_language)->item(0)->textContent;
                            } else {
                                ?>
                                Reply
                            <?php } ?>
                        </button>
                        <button id='weeex_<?php echo "" . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_id']; ?>' onclick="main_page_rgb_forward_this_query(this,<?php echo "" . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_query_provider']; ?>,<?php echo "" . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_id']; ?>)" class="btn btn-primary">
                            <?php
                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_47("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_47("system_config_xml/" . $_global_language)->item(0)->textContent;
                            } else {
                                ?>
                                Forward as:
                            <?php } ?>
                        </button> 
                        <span style="margin-left:80px;color: #0000FF;">
                            <?php echo "" . time_to_sec($res_main_page_institution_queries['ogenius_nds_db_rgb_query_date']); ?>
                        </span>
                    </div>

                    <div style="background:#cdcdcd;border-radius: 5px;position: absolute;padding: 8px;;visibility: hidden;">
                        <ul  style="list-style: none;">
                            <li class="delegationThings">
                                <?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_48("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_48("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                    Delegation
                                <?php } ?>
                            </li>
                            <li class="delegationThings">
                                <?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_49("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_49("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                    Consulation
                                <?php } ?>
                            </li>
                        </ul>
                    </div>
                </div>
                <?php
            }
        }
        ?>
        <?php
//echo "" . $main_page_institution_sort_tag."---".$date1."---".$date2;
        break;
}
