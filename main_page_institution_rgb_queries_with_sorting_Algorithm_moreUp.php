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
$main_page_institution_rgb_firstId = $_POST['main_page_institution_rgb_firstId'];
$main_page_institution_rgb_firstId = $main_page_institution_rgb_firstId + 10;
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
                WHERE ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_id <= '{$main_page_institution_rgb_firstId}'
                 ORDER BY ogenius_nds_db_rgb_query_id DESC LIMIT 70      ";
if ($query_main_page_institution_queries = $database->query($sql_main_page_institution_queries)) {
    //---------------------
    $n = 0;

    while ($res_main_page_institution_queries = mysqli_fetch_array($query_main_page_institution_queries)) {
        $_queryID_2017 = $res_main_page_institution_queries['ogenius_nds_db_rgb_query_id'];
        if ($n == 0) {
            echo "<input type='hidden' value='$_queryID_2017' id='main_page_institution_rgb_firstId'/>";
        } else if ($n == 59) {
            echo "<input type='hidden' value='$_queryID_2017' id='main_page_institution_rgb_LastId'/>";
        }
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
