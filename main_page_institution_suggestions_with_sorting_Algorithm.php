<?php
session_start();
//---------------LOAD all suggesttions of this institution-
$main_page_institution_sort_tag = $_POST['main_page_institution_sort_tag'];
//---------------------
switch ($main_page_institution_sort_tag) {
    case "m_insti_ascending" :
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
        //$main_page_institution_suggestions_last_id=$_POST['main_page_institution_suggestions_last_id'];
        $sql_main_page_institution_suggestion_community = "SELECT * FROM  ogenius_nds_db_community WHERE        ogenius_nds_db_community_parent_id='{$common_user_settings_the_id}' ORDER BY ogenius_nds_db_community_id DESC LIMIT 1      ";
        if ($query_main_page_institution_suggestion_community = $database->query($sql_main_page_institution_suggestion_community)) {
            //---------------------
            $id_suggestion_temp = 0;
            $id_suggestion_temp_counter_P = 0;
            while ($res_main_page_institution_suggestion_community = mysqli_fetch_array($query_main_page_institution_suggestion_community)) {

                //-----------------
                $mainpage_institution_box = $res_main_page_institution_suggestion_community['ogenius_nds_db_community_id'];
                //------------
                // echo "".$id_xxxccc88;
                $sql_main_page_institution_suggestion = "SELECT * FROM  ogenius_nds_db_suggestions WHERE        ogenius_nds_db_suggestions_box_id='{$mainpage_institution_box}'  ORDER BY ogenius_nds_db_suggestions_id ASC LIMIT 200    ";
                if ($query_main_page_institution_suggestion = $database->query($sql_main_page_institution_suggestion)) {
                    //---------------------
                    while ($res_main_page_institution_suggestion = mysqli_fetch_array($query_main_page_institution_suggestion)) {
                        //-----------------------------------
                        //-------------------record the current id of the suggestion-------
                        $id_suggestion_temp = $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id'];
                        //------------display the ids holders
                        if ($id_suggestion_temp_counter_P == 0) {
                            echo "<input type='hidden' id='main_page_institution_suggestions_first_id' value='$id_suggestion_temp' />";
                        }
                        if ($id_suggestion_temp_counter_P == 200) {
                            echo "<input type='hidden' id='main_page_institution_suggestions_last_id' value='$id_suggestion_temp' />";
                        }

                        //----------------
                        $id_suggestion_temp_counter_P++;
                        //----------------------------
                        switch ($res_main_page_institution_suggestion['ogenius_nds_db_suggestions_type']) {
                            case "text" :
                                ?>
                                <div class="panel pinToSuggestion">
                                    <div class="panel-heading centerrowspace">
                                        <div>
                                            <img id='view<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' name='<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' onclick="main_page_institution_visualize_suggestion_details(this)" src="images/view_this.png" class="image24"/>
                                            <img id='comment45<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' name='<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' onclick="main_page_institution_visualize_suggestion_commentators(this)" src="images/respond_to_suggestion.png" class="image24" />
                                        </div>
                                        <div>
                                            ---<?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_34("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_34("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                text
                                            <?php } ?>--<span style="color: blue"><?php echo "" . time_to_sec($res_main_page_institution_suggestion['ogenius_nds_db_suggestions_regdate']); ?></span>-
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <p>
                                            <?php echo "" . activateUrlStringsw($res_main_page_institution_suggestion['ogenius_nds_db_suggestions_data']); ?>
                                        </p>
                                    </div>
                                </div>

                                <?php
                                break;
                            case "image" :
                                ?> 
                                <div class="panel pinToSuggestion" style="width: 98%;cursor: auto;" >
                                    <div class="panel-heading centerrowspace">
                                        <div>
                                            <img id='view<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' name='<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' onclick="main_page_institution_visualize_suggestion_details(this)" src="images/view_this.png" class="image24" />
                                            <img id='comment45<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' name='<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' onclick="main_page_institution_visualize_suggestion_commentators(this)" src="images/respond_to_suggestion.png" class="image24" />
                                        </div>
                                        <div>---<?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_33("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_33("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                image
                                            <?php } ?>--<span style="color: blue"><?php echo "" . time_to_sec($res_main_page_institution_suggestion['ogenius_nds_db_suggestions_regdate']); ?></span>-
                                        </div>
                                    </div>
                                    <div class="panel-body startcolstart">
                                <!-- <img src="Community_Admin/NDS_suggested_images/<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_data']; ?>" style="width: 95%;height: 120px;margin: 4px;" />
                                        --> <?php
                                        $theMainPageImgsTemp_store = $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_data'];
                                        $theMainPageImgsTemp_store_IMGs_array = explode("~", $theMainPageImgsTemp_store);
//-------------loop throuth all the images array----------
                                        ?><div class="centerrow"><?php
                                        for ($i = 0; $i < sizeof($theMainPageImgsTemp_store_IMGs_array); $i++) {
                                            ?>
                                                <div id="imgBull<?php echo "" . $i; ?>">
                                                    <img id="<?php echo "err34" . $i; ?>" onclick="main_page_institution_pic_view_this_img_enlarge(this)" src="Community_Admin/NDS_suggested_images/<?php echo "" . $theMainPageImgsTemp_store_IMGs_array[$i]; ?>" style="width: 80%;text-align: center;height: 90%;border-radius: 3px;box-shadow: 2px 2px 2px #333333;" /></br>


                                                </div>


                                                <?php
                                            }
                                            ?>
                                        </div>




                                        <p style="margin-top:10px">
                                            <?php echo "" . activateUrlStringsw($res_main_page_institution_suggestion['ogenius_nds_db_suggestions_support_text']); ?>

                                        </p>
                                    </div>
                                </div>                               

                                <?php
                                break;
                            case "audio" :
                                ?>
                                <div class="panel pinToSuggestion" style="width: 98%;cursor: auto;" >
                                    <div class="panel-heading centerrowspace">
                                        <div>
                                            <img id='view<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' name='<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' onclick="main_page_institution_visualize_suggestion_details(this)" src="images/view_this.png" class="image24" />
                                            <img id='comment45<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' name='<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' onclick="main_page_institution_visualize_suggestion_commentators(this)" src="images/respond_to_suggestion.png" class="image24"/>
                                        </div>
                                        <div>---<?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_36("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_36("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                audio
                                            <?php } ?>--<span style="color: blue"><?php echo "" . time_to_sec($res_main_page_institution_suggestion['ogenius_nds_db_suggestions_regdate']); ?></span>-</div>
                                    </div>
                                    <div class="panel-body startcolstart">
                                        <audio style="width: 95%;margin: 4px;" src="Community_Admin/NDS_suggested_audios/<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_data']; ?>" controls="">

                                        </audio>
                                    </div>
                                    <p style="margin-top:10px">
                                        <?php echo "" . activateUrlStringsw($res_main_page_institution_suggestion['ogenius_nds_db_suggestions_support_text']); ?>

                                    </p>
                                </div>

                                <?php
                                break;
                            case "video" :
                                ?>
                                <div class="panel pinToSuggestion" style="width: 98%;cursor: auto;" >
                                    <div class="panel-heading centerrowspace">
                                        <div>
                                            <img id='view<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' name='<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' onclick="main_page_institution_visualize_suggestion_details(this)" src="images/view_this.png" class="image24"/>
                                            <img id='comment45<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' name='<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' onclick="main_page_institution_visualize_suggestion_commentators(this)" src="images/respond_to_suggestion.png" class="image24" />
                                        </div>
                                        <div>---<?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_35("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_35("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                video
                                            <?php } ?>--<span style="color: blue"><?php echo "" . time_to_sec($res_main_page_institution_suggestion['ogenius_nds_db_suggestions_regdate']); ?></span>-</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body startcolstart">
                                        <video controls preload="true" style="width: 95%;height: 120px;margin: 4px;"  src="Community_Admin/NDS_suggested_videos/<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_data']; ?>">
                                        </video>
                                    </div>
                                    <p style="margin-top:10px">
                                        <?php echo "" . activateUrlStringsw($res_main_page_institution_suggestion['ogenius_nds_db_suggestions_support_text']); ?>
                                    </p>
                                </div>

                                <?php
                                break;
                        }
                    }
                }
            }
        }
        break;
    case "m_insti_descending" :
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
        //$main_page_institution_suggestions_last_id=$_POST['main_page_institution_suggestions_last_id'];
        $sql_main_page_institution_suggestion_community = "SELECT * FROM  ogenius_nds_db_community WHERE        ogenius_nds_db_community_parent_id='{$common_user_settings_the_id}' ORDER BY ogenius_nds_db_community_id DESC LIMIT 1      ";
        if ($query_main_page_institution_suggestion_community = $database->query($sql_main_page_institution_suggestion_community)) {
            //---------------------
            $id_suggestion_temp = 0;
            $id_suggestion_temp_counter_P = 0;
            while ($res_main_page_institution_suggestion_community = mysqli_fetch_array($query_main_page_institution_suggestion_community)) {

                //-----------------
                $mainpage_institution_box = $res_main_page_institution_suggestion_community['ogenius_nds_db_community_id'];
                //------------
                // echo "".$id_xxxccc88;
                $sql_main_page_institution_suggestion = "SELECT * FROM  ogenius_nds_db_suggestions WHERE        ogenius_nds_db_suggestions_box_id='{$mainpage_institution_box}'  ORDER BY ogenius_nds_db_suggestions_id DESC LIMIT 200    ";
                if ($query_main_page_institution_suggestion = $database->query($sql_main_page_institution_suggestion)) {
                    //---------------------
                    while ($res_main_page_institution_suggestion = mysqli_fetch_array($query_main_page_institution_suggestion)) {
                        //-----------------------------------
                        //-------------------record the current id of the suggestion-------
                        $id_suggestion_temp = $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id'];
                        //------------display the ids holders
                        if ($id_suggestion_temp_counter_P == 0) {
                            echo "<input type='hidden' id='main_page_institution_suggestions_first_id' value='$id_suggestion_temp' />";
                        }
                        if ($id_suggestion_temp_counter_P == 200) {
                            echo "<input type='hidden' id='main_page_institution_suggestions_last_id' value='$id_suggestion_temp' />";
                        }

                        //----------------
                        $id_suggestion_temp_counter_P++;
                        //----------------------------
                        switch ($res_main_page_institution_suggestion['ogenius_nds_db_suggestions_type']) {
                            case "text" :
                                ?>
                                <div class="panel pinToSuggestion">
                                    <div class="panel-heading centerrowspace">
                                        <div>
                                            <img id='view<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' name='<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' onclick="main_page_institution_visualize_suggestion_details(this)" src="images/view_this.png" class="image24"/>
                                            <img id='comment45<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' name='<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' onclick="main_page_institution_visualize_suggestion_commentators(this)" src="images/respond_to_suggestion.png" class="image24" />
                                        </div>
                                        <div>
                                            ---<?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_34("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_34("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                text
                                            <?php } ?>--<span style="color: blue"><?php echo "" . time_to_sec($res_main_page_institution_suggestion['ogenius_nds_db_suggestions_regdate']); ?></span>-
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <p>
                                            <?php echo "" . activateUrlStringsw($res_main_page_institution_suggestion['ogenius_nds_db_suggestions_data']); ?>
                                        </p>
                                    </div>
                                </div>

                                <?php
                                break;
                            case "image" :
                                ?> 
                                <div class="panel pinToSuggestion" style="width: 98%;cursor: auto;" >
                                    <div class="panel-heading centerrowspace">
                                        <div>
                                            <img id='view<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' name='<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' onclick="main_page_institution_visualize_suggestion_details(this)" src="images/view_this.png" class="image24" />
                                            <img id='comment45<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' name='<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' onclick="main_page_institution_visualize_suggestion_commentators(this)" src="images/respond_to_suggestion.png" class="image24" />
                                        </div>
                                        <div>---<?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_33("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_33("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                image
                                            <?php } ?>--<span style="color: blue"><?php echo "" . time_to_sec($res_main_page_institution_suggestion['ogenius_nds_db_suggestions_regdate']); ?></span>-
                                        </div>
                                    </div>
                                    <div class="panel-body startcolstart">
                                <!-- <img src="Community_Admin/NDS_suggested_images/<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_data']; ?>" style="width: 95%;height: 120px;margin: 4px;" />
                                        --> <?php
                                        $theMainPageImgsTemp_store = $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_data'];
                                        $theMainPageImgsTemp_store_IMGs_array = explode("~", $theMainPageImgsTemp_store);
//-------------loop throuth all the images array----------
                                        ?><div class="centerrow"><?php
                                        for ($i = 0; $i < sizeof($theMainPageImgsTemp_store_IMGs_array); $i++) {
                                            ?>
                                                <div id="imgBull<?php echo "" . $i; ?>">
                                                    <img id="<?php echo "err34" . $i; ?>" onclick="main_page_institution_pic_view_this_img_enlarge(this)" src="Community_Admin/NDS_suggested_images/<?php echo "" . $theMainPageImgsTemp_store_IMGs_array[$i]; ?>" style="width: 80%;text-align: center;height: 90%;border-radius: 3px;box-shadow: 2px 2px 2px #333333;" /></br>


                                                </div>


                                                <?php
                                            }
                                            ?>
                                        </div>




                                        <p style="margin-top:10px">
                                            <?php echo "" . activateUrlStringsw($res_main_page_institution_suggestion['ogenius_nds_db_suggestions_support_text']); ?>

                                        </p>
                                    </div>
                                </div>                               

                                <?php
                                break;
                            case "audio" :
                                ?>
                                <div class="panel pinToSuggestion" style="width: 98%;cursor: auto;" >
                                    <div class="panel-heading centerrowspace">
                                        <div>
                                            <img id='view<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' name='<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' onclick="main_page_institution_visualize_suggestion_details(this)" src="images/view_this.png" class="image24" />
                                            <img id='comment45<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' name='<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' onclick="main_page_institution_visualize_suggestion_commentators(this)" src="images/respond_to_suggestion.png" class="image24"/>
                                        </div>
                                        <div>---<?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_36("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_36("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                audio
                                            <?php } ?>--<span style="color: blue"><?php echo "" . time_to_sec($res_main_page_institution_suggestion['ogenius_nds_db_suggestions_regdate']); ?></span>-</div>
                                    </div>
                                    <div class="panel-body startcolstart">
                                        <audio style="width: 95%;margin: 4px;" src="Community_Admin/NDS_suggested_audios/<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_data']; ?>" controls="">

                                        </audio>
                                    </div>
                                    <p style="margin-top:10px">
                                        <?php echo "" . activateUrlStringsw($res_main_page_institution_suggestion['ogenius_nds_db_suggestions_support_text']); ?>

                                    </p>
                                </div>

                                <?php
                                break;
                            case "video" :
                                ?>
                                <div class="panel pinToSuggestion" style="width: 98%;cursor: auto;" >
                                    <div class="panel-heading centerrowspace">
                                        <div>
                                            <img id='view<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' name='<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' onclick="main_page_institution_visualize_suggestion_details(this)" src="images/view_this.png" class="image24"/>
                                            <img id='comment45<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' name='<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' onclick="main_page_institution_visualize_suggestion_commentators(this)" src="images/respond_to_suggestion.png" class="image24" />
                                        </div>
                                        <div>---<?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_35("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_35("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                video
                                            <?php } ?>--<span style="color: blue"><?php echo "" . time_to_sec($res_main_page_institution_suggestion['ogenius_nds_db_suggestions_regdate']); ?></span>-</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body startcolstart">
                                        <video controls preload="true" style="width: 95%;height: 120px;margin: 4px;"  src="Community_Admin/NDS_suggested_videos/<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_data']; ?>">
                                        </video>
                                    </div>
                                    <p style="margin-top:10px">
                                        <?php echo "" . activateUrlStringsw($res_main_page_institution_suggestion['ogenius_nds_db_suggestions_support_text']); ?>
                                    </p>
                                </div>

                                <?php
                                break;
                        }
                    }
                }
            }
        }
        break;
    case "m_insti_byname" :
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
        //$main_page_institution_suggestions_last_id=$_POST['main_page_institution_suggestions_last_id'];
        $sql_main_page_institution_suggestion_community = "SELECT * FROM  ogenius_nds_db_community WHERE        ogenius_nds_db_community_parent_id='{$common_user_settings_the_id}' ORDER BY ogenius_nds_db_community_id DESC LIMIT 1      ";
        if ($query_main_page_institution_suggestion_community = $database->query($sql_main_page_institution_suggestion_community)) {
            //---------------------
            $id_suggestion_temp = 0;
            $id_suggestion_temp_counter_P = 0;
            while ($res_main_page_institution_suggestion_community = mysqli_fetch_array($query_main_page_institution_suggestion_community)) {

                //-----------------
                $mainpage_institution_box = $res_main_page_institution_suggestion_community['ogenius_nds_db_community_id'];
                //------------
                // echo "".$id_xxxccc88;
                $main_page_institutioin_suggest_byname = $_POST['main_page_institutioin_suggest_byname'];
                $sql_main_page_institution_suggestion = "SELECT * FROM  ogenius_nds_db_suggestions WHERE        ogenius_nds_db_suggestions_box_id='{$mainpage_institution_box}' AND ogenius_nds_db_suggestions_support_text LIKE '%{$main_page_institutioin_suggest_byname}%' ORDER BY ogenius_nds_db_suggestions_id DESC LIMIT 200    ";
                if ($query_main_page_institution_suggestion = $database->query($sql_main_page_institution_suggestion)) {
                    //---------------------
                    while ($res_main_page_institution_suggestion = mysqli_fetch_array($query_main_page_institution_suggestion)) {
                        //-----------------------------------
                        //-------------------record the current id of the suggestion-------
                        $id_suggestion_temp = $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id'];
                        //------------display the ids holders
                        if ($id_suggestion_temp_counter_P == 0) {
                            echo "<input type='hidden' id='main_page_institution_suggestions_first_id' value='$id_suggestion_temp' />";
                        }
                        if ($id_suggestion_temp_counter_P == 200) {
                            echo "<input type='hidden' id='main_page_institution_suggestions_last_id' value='$id_suggestion_temp' />";
                        }

                        //----------------
                        $id_suggestion_temp_counter_P++;
                        //----------------------------
                        switch ($res_main_page_institution_suggestion['ogenius_nds_db_suggestions_type']) {
                            case "text" :
                                ?>
                                <div class="panel pinToSuggestion">
                                    <div class="panel-heading centerrowspace">
                                        <div>
                                            <img id='view<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' name='<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' onclick="main_page_institution_visualize_suggestion_details(this)" src="images/view_this.png" class="image24"/>
                                            <img id='comment45<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' name='<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' onclick="main_page_institution_visualize_suggestion_commentators(this)" src="images/respond_to_suggestion.png" class="image24" />
                                        </div>
                                        <div>
                                            ---<?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_34("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_34("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                text
                                            <?php } ?>--<span style="color: blue"><?php echo "" . time_to_sec($res_main_page_institution_suggestion['ogenius_nds_db_suggestions_regdate']); ?></span>-
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <p>
                                            <?php echo "" . activateUrlStringsw($res_main_page_institution_suggestion['ogenius_nds_db_suggestions_data']); ?>
                                        </p>
                                    </div>
                                </div>

                                <?php
                                break;
                            case "image" :
                                ?> 
                                <div class="panel pinToSuggestion" style="width: 98%;cursor: auto;" >
                                    <div class="panel-heading centerrowspace">
                                        <div>
                                            <img id='view<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' name='<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' onclick="main_page_institution_visualize_suggestion_details(this)" src="images/view_this.png" class="image24" />
                                            <img id='comment45<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' name='<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' onclick="main_page_institution_visualize_suggestion_commentators(this)" src="images/respond_to_suggestion.png" class="image24" />
                                        </div>
                                        <div>---<?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_33("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_33("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                image
                                            <?php } ?>--<span style="color: blue"><?php echo "" . time_to_sec($res_main_page_institution_suggestion['ogenius_nds_db_suggestions_regdate']); ?></span>-
                                        </div>
                                    </div>
                                    <div class="panel-body startcolstart">
                                <!-- <img src="Community_Admin/NDS_suggested_images/<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_data']; ?>" style="width: 95%;height: 120px;margin: 4px;" />
                                        --> <?php
                                        $theMainPageImgsTemp_store = $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_data'];
                                        $theMainPageImgsTemp_store_IMGs_array = explode("~", $theMainPageImgsTemp_store);
//-------------loop throuth all the images array----------
                                        ?><div class="centerrow"><?php
                                        for ($i = 0; $i < sizeof($theMainPageImgsTemp_store_IMGs_array); $i++) {
                                            ?>
                                                <div id="imgBull<?php echo "" . $i; ?>">
                                                    <img id="<?php echo "err34" . $i; ?>" onclick="main_page_institution_pic_view_this_img_enlarge(this)" src="Community_Admin/NDS_suggested_images/<?php echo "" . $theMainPageImgsTemp_store_IMGs_array[$i]; ?>" style="width: 80%;text-align: center;height: 90%;border-radius: 3px;box-shadow: 2px 2px 2px #333333;" /></br>


                                                </div>


                                                <?php
                                            }
                                            ?>
                                        </div>




                                        <p style="margin-top:10px">
                                            <?php echo "" . activateUrlStringsw($res_main_page_institution_suggestion['ogenius_nds_db_suggestions_support_text']); ?>

                                        </p>
                                    </div>
                                </div>                               

                                <?php
                                break;
                            case "audio" :
                                ?>
                                <div class="panel pinToSuggestion" style="width: 98%;cursor: auto;" >
                                    <div class="panel-heading centerrowspace">
                                        <div>
                                            <img id='view<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' name='<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' onclick="main_page_institution_visualize_suggestion_details(this)" src="images/view_this.png" class="image24" />
                                            <img id='comment45<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' name='<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' onclick="main_page_institution_visualize_suggestion_commentators(this)" src="images/respond_to_suggestion.png" class="image24"/>
                                        </div>
                                        <div>---<?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_36("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_36("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                audio
                                            <?php } ?>--<span style="color: blue"><?php echo "" . time_to_sec($res_main_page_institution_suggestion['ogenius_nds_db_suggestions_regdate']); ?></span>-</div>
                                    </div>
                                    <div class="panel-body startcolstart">
                                        <audio style="width: 95%;margin: 4px;" src="Community_Admin/NDS_suggested_audios/<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_data']; ?>" controls="">

                                        </audio>
                                    </div>
                                    <p style="margin-top:10px">
                                        <?php echo "" . activateUrlStringsw($res_main_page_institution_suggestion['ogenius_nds_db_suggestions_support_text']); ?>

                                    </p>
                                </div>

                                <?php
                                break;
                            case "video" :
                                ?>
                                <div class="panel pinToSuggestion" style="width: 98%;cursor: auto;" >
                                    <div class="panel-heading centerrowspace">
                                        <div>
                                            <img id='view<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' name='<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' onclick="main_page_institution_visualize_suggestion_details(this)" src="images/view_this.png" class="image24"/>
                                            <img id='comment45<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' name='<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' onclick="main_page_institution_visualize_suggestion_commentators(this)" src="images/respond_to_suggestion.png" class="image24" />
                                        </div>
                                        <div>---<?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_35("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_35("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                video
                                            <?php } ?>--<span style="color: blue"><?php echo "" . time_to_sec($res_main_page_institution_suggestion['ogenius_nds_db_suggestions_regdate']); ?></span>-</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body startcolstart">
                                        <video controls preload="true" style="width: 95%;height: 120px;margin: 4px;"  src="Community_Admin/NDS_suggested_videos/<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_data']; ?>">
                                        </video>
                                    </div>
                                    <p style="margin-top:10px">
                                        <?php echo "" . activateUrlStringsw($res_main_page_institution_suggestion['ogenius_nds_db_suggestions_support_text']); ?>
                                    </p>
                                </div>

                                <?php
                                break;
                        }
                    }
                }
            }
        }
        break;
    case "m_insti_bykeyword" :
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
        //$main_page_institution_suggestions_last_id=$_POST['main_page_institution_suggestions_last_id'];
        $sql_main_page_institution_suggestion_community = "SELECT * FROM  ogenius_nds_db_community WHERE        ogenius_nds_db_community_parent_id='{$common_user_settings_the_id}' ORDER BY ogenius_nds_db_community_id DESC LIMIT 1      ";
        if ($query_main_page_institution_suggestion_community = $database->query($sql_main_page_institution_suggestion_community)) {
            //---------------------
            $id_suggestion_temp = 0;
            $id_suggestion_temp_counter_P = 0;
            while ($res_main_page_institution_suggestion_community = mysqli_fetch_array($query_main_page_institution_suggestion_community)) {

                //-----------------
                $mainpage_institution_box = $res_main_page_institution_suggestion_community['ogenius_nds_db_community_id'];
                //------------
                // echo "".$id_xxxccc88;
                $main_page_institutioin_suggest_bykeyword = $_POST['main_page_institutioin_suggest_bykeyword'];
                $sql_main_page_institution_suggestion = "SELECT * FROM  ogenius_nds_db_suggestions WHERE        ogenius_nds_db_suggestions_box_id='{$mainpage_institution_box}' AND ogenius_nds_db_suggestions_support_text LIKE '%{$main_page_institutioin_suggest_bykeyword}%' ORDER BY ogenius_nds_db_suggestions_id DESC LIMIT 200    ";
                if ($query_main_page_institution_suggestion = $database->query($sql_main_page_institution_suggestion)) {
                    //---------------------
                    while ($res_main_page_institution_suggestion = mysqli_fetch_array($query_main_page_institution_suggestion)) {
                        //-----------------------------------
                        //-------------------record the current id of the suggestion-------
                        $id_suggestion_temp = $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id'];
                        //------------display the ids holders
                        if ($id_suggestion_temp_counter_P == 0) {
                            echo "<input type='hidden' id='main_page_institution_suggestions_first_id' value='$id_suggestion_temp' />";
                        }
                        if ($id_suggestion_temp_counter_P == 200) {
                            echo "<input type='hidden' id='main_page_institution_suggestions_last_id' value='$id_suggestion_temp' />";
                        }

                        //----------------
                        $id_suggestion_temp_counter_P++;
                        //----------------------------
                        switch ($res_main_page_institution_suggestion['ogenius_nds_db_suggestions_type']) {
                            case "text" :
                                ?>
                                <div class="panel pinToSuggestion">
                                    <div class="panel-heading centerrowspace">
                                        <div>
                                            <img id='view<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' name='<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' onclick="main_page_institution_visualize_suggestion_details(this)" src="images/view_this.png" class="image24"/>
                                            <img id='comment45<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' name='<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' onclick="main_page_institution_visualize_suggestion_commentators(this)" src="images/respond_to_suggestion.png" class="image24" />
                                        </div>
                                        <div>
                                            ---<?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_34("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_34("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                text
                                            <?php } ?>--<span style="color: blue"><?php echo "" . time_to_sec($res_main_page_institution_suggestion['ogenius_nds_db_suggestions_regdate']); ?></span>-
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <p>
                                            <?php echo "" . activateUrlStringsw($res_main_page_institution_suggestion['ogenius_nds_db_suggestions_data']); ?>
                                        </p>
                                    </div>
                                </div>

                                <?php
                                break;
                            case "image" :
                                ?> 
                                <div class="panel pinToSuggestion" style="width: 98%;cursor: auto;" >
                                    <div class="panel-heading centerrowspace">
                                        <div>
                                            <img id='view<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' name='<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' onclick="main_page_institution_visualize_suggestion_details(this)" src="images/view_this.png" class="image24" />
                                            <img id='comment45<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' name='<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' onclick="main_page_institution_visualize_suggestion_commentators(this)" src="images/respond_to_suggestion.png" class="image24" />
                                        </div>
                                        <div>---<?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_33("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_33("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                image
                                            <?php } ?>--<span style="color: blue"><?php echo "" . time_to_sec($res_main_page_institution_suggestion['ogenius_nds_db_suggestions_regdate']); ?></span>-
                                        </div>
                                    </div>
                                    <div class="panel-body startcolstart">
                                <!-- <img src="Community_Admin/NDS_suggested_images/<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_data']; ?>" style="width: 95%;height: 120px;margin: 4px;" />
                                        --> <?php
                                        $theMainPageImgsTemp_store = $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_data'];
                                        $theMainPageImgsTemp_store_IMGs_array = explode("~", $theMainPageImgsTemp_store);
//-------------loop throuth all the images array----------
                                        ?><div class="centerrow"><?php
                                        for ($i = 0; $i < sizeof($theMainPageImgsTemp_store_IMGs_array); $i++) {
                                            ?>
                                                <div id="imgBull<?php echo "" . $i; ?>">
                                                    <img id="<?php echo "err34" . $i; ?>" onclick="main_page_institution_pic_view_this_img_enlarge(this)" src="Community_Admin/NDS_suggested_images/<?php echo "" . $theMainPageImgsTemp_store_IMGs_array[$i]; ?>" style="width: 80%;text-align: center;height: 90%;border-radius: 3px;box-shadow: 2px 2px 2px #333333;" /></br>


                                                </div>


                                                <?php
                                            }
                                            ?>
                                        </div>




                                        <p style="margin-top:10px">
                                            <?php echo "" . activateUrlStringsw($res_main_page_institution_suggestion['ogenius_nds_db_suggestions_support_text']); ?>

                                        </p>
                                    </div>
                                </div>                               

                                <?php
                                break;
                            case "audio" :
                                ?>
                                <div class="panel pinToSuggestion" style="width: 98%;cursor: auto;" >
                                    <div class="panel-heading centerrowspace">
                                        <div>
                                            <img id='view<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' name='<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' onclick="main_page_institution_visualize_suggestion_details(this)" src="images/view_this.png" class="image24" />
                                            <img id='comment45<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' name='<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' onclick="main_page_institution_visualize_suggestion_commentators(this)" src="images/respond_to_suggestion.png" class="image24"/>
                                        </div>
                                        <div>---<?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_36("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_36("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                audio
                                            <?php } ?>--<span style="color: blue"><?php echo "" . time_to_sec($res_main_page_institution_suggestion['ogenius_nds_db_suggestions_regdate']); ?></span>-</div>
                                    </div>
                                    <div class="panel-body startcolstart">
                                        <audio style="width: 95%;margin: 4px;" src="Community_Admin/NDS_suggested_audios/<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_data']; ?>" controls="">

                                        </audio>
                                    </div>
                                    <p style="margin-top:10px">
                                        <?php echo "" . activateUrlStringsw($res_main_page_institution_suggestion['ogenius_nds_db_suggestions_support_text']); ?>

                                    </p>
                                </div>

                                <?php
                                break;
                            case "video" :
                                ?>
                                <div class="panel pinToSuggestion" style="width: 98%;cursor: auto;" >
                                    <div class="panel-heading centerrowspace">
                                        <div>
                                            <img id='view<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' name='<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' onclick="main_page_institution_visualize_suggestion_details(this)" src="images/view_this.png" class="image24"/>
                                            <img id='comment45<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' name='<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' onclick="main_page_institution_visualize_suggestion_commentators(this)" src="images/respond_to_suggestion.png" class="image24" />
                                        </div>
                                        <div>---<?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_35("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_35("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                video
                                            <?php } ?>--<span style="color: blue"><?php echo "" . time_to_sec($res_main_page_institution_suggestion['ogenius_nds_db_suggestions_regdate']); ?></span>-</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body startcolstart">
                                        <video controls preload="true" style="width: 95%;height: 120px;margin: 4px;"  src="Community_Admin/NDS_suggested_videos/<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_data']; ?>">
                                        </video>
                                    </div>
                                    <p style="margin-top:10px">
                                        <?php echo "" . activateUrlStringsw($res_main_page_institution_suggestion['ogenius_nds_db_suggestions_support_text']); ?>
                                    </p>
                                </div>

                                <?php
                                break;
                        }
                    }
                }
            }
        }
        break;
    case "m_insti_bygender" :
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
        //$main_page_institution_suggestions_last_id=$_POST['main_page_institution_suggestions_last_id'];

        $sql_main_page_institution_suggestion_community = "SELECT * FROM  ogenius_nds_db_community WHERE        ogenius_nds_db_community_parent_id='{$common_user_settings_the_id}' ORDER BY ogenius_nds_db_community_id DESC LIMIT 1      ";
        if ($query_main_page_institution_suggestion_community = $database->query($sql_main_page_institution_suggestion_community)) {
            //---------------------
            $id_suggestion_temp = 0;
            $id_suggestion_temp_counter_P = 0;
            while ($res_main_page_institution_suggestion_community = mysqli_fetch_array($query_main_page_institution_suggestion_community)) {

                //-----------------
                $mainpage_institution_box = $res_main_page_institution_suggestion_community['ogenius_nds_db_community_id'];
                //------------
                // echo "".$id_xxxccc88;
                //----------------------------
                $main_page_institutioin_suggest_bygender = $_POST['main_page_institutioin_suggest_bygender'];
                //echo "".$main_page_institutioin_suggest_bygender;

                $sql_main_page_institution_suggestion = "SELECT * FROM  ogenius_nds_db_suggestions      
     WHERE      ogenius_nds_db_suggestions.ogenius_nds_db_suggestions_box_id='{$mainpage_institution_box}'  ORDER BY ogenius_nds_db_suggestions_id DESC LIMIT 200    ";



                if ($query_main_page_institution_suggestion = $database->query($sql_main_page_institution_suggestion)) {
                    //---------------------
                    while ($res_main_page_institution_suggestion = mysqli_fetch_array($query_main_page_institution_suggestion)) {
                        //-----------------------------------
                        $theIdOfTheSuggestSender = $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_provider_id'];
                        //-------vouch the sender
                        if (!renderTheSuggestionsAccordingToGenderOfSender($theIdOfTheSuggestSender, $main_page_institutioin_suggest_bygender)) {
                            continue;
                        }
                        //-------------------record the current id of the suggestion-------
                        $id_suggestion_temp = $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id'];
                        //------------display the ids holders
                        if ($id_suggestion_temp_counter_P == 0) {
                            echo "<input type='hidden' id='main_page_institution_suggestions_first_id' value='$id_suggestion_temp' />";
                        }
                        if ($id_suggestion_temp_counter_P == 200) {
                            echo "<input type='hidden' id='main_page_institution_suggestions_last_id' value='$id_suggestion_temp' />";
                        }

                        //----------------
                        $id_suggestion_temp_counter_P++;
                        //----------------------------
                        switch ($res_main_page_institution_suggestion['ogenius_nds_db_suggestions_type']) {
                            case "text" :
                                ?>
                                <div class="panel pinToSuggestion">
                                    <div class="panel-heading centerrowspace">
                                        <div>
                                            <img id='view<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' name='<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' onclick="main_page_institution_visualize_suggestion_details(this)" src="images/view_this.png" class="image24"/>
                                            <img id='comment45<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' name='<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' onclick="main_page_institution_visualize_suggestion_commentators(this)" src="images/respond_to_suggestion.png" class="image24" />
                                        </div>
                                        <div>
                                            ---<?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_34("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_34("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                text
                                            <?php } ?>--<span style="color: blue"><?php echo "" . time_to_sec($res_main_page_institution_suggestion['ogenius_nds_db_suggestions_regdate']); ?></span>-
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <p>
                                            <?php echo "" . activateUrlStringsw($res_main_page_institution_suggestion['ogenius_nds_db_suggestions_data']); ?>
                                        </p>
                                    </div>
                                </div>

                                <?php
                                break;
                            case "image" :
                                ?> 
                                <div class="panel pinToSuggestion" style="width: 98%;cursor: auto;" >
                                    <div class="panel-heading centerrowspace">
                                        <div>
                                            <img id='view<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' name='<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' onclick="main_page_institution_visualize_suggestion_details(this)" src="images/view_this.png" class="image24" />
                                            <img id='comment45<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' name='<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' onclick="main_page_institution_visualize_suggestion_commentators(this)" src="images/respond_to_suggestion.png" class="image24" />
                                        </div>
                                        <div>---<?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_33("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_33("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                image
                                            <?php } ?>--<span style="color: blue"><?php echo "" . time_to_sec($res_main_page_institution_suggestion['ogenius_nds_db_suggestions_regdate']); ?></span>-
                                        </div>
                                    </div>
                                    <div class="panel-body startcolstart">
                                <!-- <img src="Community_Admin/NDS_suggested_images/<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_data']; ?>" style="width: 95%;height: 120px;margin: 4px;" />
                                        --> <?php
                                        $theMainPageImgsTemp_store = $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_data'];
                                        $theMainPageImgsTemp_store_IMGs_array = explode("~", $theMainPageImgsTemp_store);
//-------------loop throuth all the images array----------
                                        ?><div class="centerrow"><?php
                                        for ($i = 0; $i < sizeof($theMainPageImgsTemp_store_IMGs_array); $i++) {
                                            ?>
                                                <div id="imgBull<?php echo "" . $i; ?>">
                                                    <img id="<?php echo "err34" . $i; ?>" onclick="main_page_institution_pic_view_this_img_enlarge(this)" src="Community_Admin/NDS_suggested_images/<?php echo "" . $theMainPageImgsTemp_store_IMGs_array[$i]; ?>" style="width: 80%;text-align: center;height: 90%;border-radius: 3px;box-shadow: 2px 2px 2px #333333;" /></br>


                                                </div>


                                                <?php
                                            }
                                            ?>
                                        </div>




                                        <p style="margin-top:10px">
                                            <?php echo "" . activateUrlStringsw($res_main_page_institution_suggestion['ogenius_nds_db_suggestions_support_text']); ?>

                                        </p>
                                    </div>
                                </div>                               

                                <?php
                                break;
                            case "audio" :
                                ?>
                                <div class="panel pinToSuggestion" style="width: 98%;cursor: auto;" >
                                    <div class="panel-heading centerrowspace">
                                        <div>
                                            <img id='view<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' name='<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' onclick="main_page_institution_visualize_suggestion_details(this)" src="images/view_this.png" class="image24" />
                                            <img id='comment45<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' name='<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' onclick="main_page_institution_visualize_suggestion_commentators(this)" src="images/respond_to_suggestion.png" class="image24"/>
                                        </div>
                                        <div>---<?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_36("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_36("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                audio
                                            <?php } ?>--<span style="color: blue"><?php echo "" . time_to_sec($res_main_page_institution_suggestion['ogenius_nds_db_suggestions_regdate']); ?></span>-</div>
                                    </div>
                                    <div class="panel-body startcolstart">
                                        <audio style="width: 95%;margin: 4px;" src="Community_Admin/NDS_suggested_audios/<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_data']; ?>" controls="">

                                        </audio>
                                    </div>
                                    <p style="margin-top:10px">
                                        <?php echo "" . activateUrlStringsw($res_main_page_institution_suggestion['ogenius_nds_db_suggestions_support_text']); ?>

                                    </p>
                                </div>

                                <?php
                                break;
                            case "video" :
                                ?>
                                <div class="panel pinToSuggestion" style="width: 98%;cursor: auto;" >
                                    <div class="panel-heading centerrowspace">
                                        <div>
                                            <img id='view<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' name='<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' onclick="main_page_institution_visualize_suggestion_details(this)" src="images/view_this.png" class="image24"/>
                                            <img id='comment45<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' name='<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' onclick="main_page_institution_visualize_suggestion_commentators(this)" src="images/respond_to_suggestion.png" class="image24" />
                                        </div>
                                        <div>---<?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_35("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_35("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                video
                                            <?php } ?>--<span style="color: blue"><?php echo "" . time_to_sec($res_main_page_institution_suggestion['ogenius_nds_db_suggestions_regdate']); ?></span>-</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body startcolstart">
                                        <video controls preload="true" style="width: 95%;height: 120px;margin: 4px;"  src="Community_Admin/NDS_suggested_videos/<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_data']; ?>">
                                        </video>
                                    </div>
                                    <p style="margin-top:10px">
                                        <?php echo "" . activateUrlStringsw($res_main_page_institution_suggestion['ogenius_nds_db_suggestions_support_text']); ?>
                                    </p>
                                </div>

                                <?php
                                break;
                        }
                    }
                }
            }
        }
        break;
    case "m_insti_bymarital_status" :
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
        //$main_page_institution_suggestions_last_id=$_POST['main_page_institution_suggestions_last_id'];
        $sql_main_page_institution_suggestion_community = "SELECT * FROM  ogenius_nds_db_community WHERE        ogenius_nds_db_community_parent_id='{$common_user_settings_the_id}' ORDER BY ogenius_nds_db_community_id DESC LIMIT 1      ";
        if ($query_main_page_institution_suggestion_community = $database->query($sql_main_page_institution_suggestion_community)) {
            //---------------------
            $id_suggestion_temp = 0;
            $id_suggestion_temp_counter_P = 0;
            while ($res_main_page_institution_suggestion_community = mysqli_fetch_array($query_main_page_institution_suggestion_community)) {

                //-----------------
                $mainpage_institution_box = $res_main_page_institution_suggestion_community['ogenius_nds_db_community_id'];
                //------------
                // echo "".$id_xxxccc88;
                $main_page_institutioin_suggest_bymarital_status = $_POST['main_page_institutioin_suggest_bymarital_status'];
                $sql_main_page_institution_suggestion = "SELECT * FROM  ogenius_nds_db_suggestions         
    WHERE 
     ogenius_nds_db_suggestions_box_id='{$mainpage_institution_box}'  ORDER BY ogenius_nds_db_suggestions_id DESC LIMIT 200    ";
                if ($query_main_page_institution_suggestion = $database->query($sql_main_page_institution_suggestion)) {
                    //---------------------
                    while ($res_main_page_institution_suggestion = mysqli_fetch_array($query_main_page_institution_suggestion)) {
                        //-----------------------------------
                        $theIdOfTheSuggestSender = $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_provider_id'];
                        //-------vouch the sender
                        if (!renderTheSuggestionsAccordingToMaritalStatusOfSender($theIdOfTheSuggestSender, $main_page_institutioin_suggest_bymarital_status)) {
                            continue;
                        }
                        //-------------------record the current id of the suggestion-------
                        $id_suggestion_temp = $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id'];
                        //------------display the ids holders
                        if ($id_suggestion_temp_counter_P == 0) {
                            echo "<input type='hidden' id='main_page_institution_suggestions_first_id' value='$id_suggestion_temp' />";
                        }
                        if ($id_suggestion_temp_counter_P == 200) {
                            echo "<input type='hidden' id='main_page_institution_suggestions_last_id' value='$id_suggestion_temp' />";
                        }

                        //----------------
                        $id_suggestion_temp_counter_P++;
                        //----------------------------
                        switch ($res_main_page_institution_suggestion['ogenius_nds_db_suggestions_type']) {
                            case "text" :
                                ?>
                                <div class="panel pinToSuggestion">
                                    <div class="panel-heading centerrowspace">
                                        <div>
                                            <img id='view<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' name='<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' onclick="main_page_institution_visualize_suggestion_details(this)" src="images/view_this.png" class="image24"/>
                                            <img id='comment45<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' name='<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' onclick="main_page_institution_visualize_suggestion_commentators(this)" src="images/respond_to_suggestion.png" class="image24" />
                                        </div>
                                        <div>
                                            ---<?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_34("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_34("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                text
                                            <?php } ?>--<span style="color: blue"><?php echo "" . time_to_sec($res_main_page_institution_suggestion['ogenius_nds_db_suggestions_regdate']); ?></span>-
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <p>
                                            <?php echo "" . activateUrlStringsw($res_main_page_institution_suggestion['ogenius_nds_db_suggestions_data']); ?>
                                        </p>
                                    </div>
                                </div>

                                <?php
                                break;
                            case "image" :
                                ?> 
                                <div class="panel pinToSuggestion" style="width: 98%;cursor: auto;" >
                                    <div class="panel-heading centerrowspace">
                                        <div>
                                            <img id='view<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' name='<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' onclick="main_page_institution_visualize_suggestion_details(this)" src="images/view_this.png" class="image24" />
                                            <img id='comment45<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' name='<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' onclick="main_page_institution_visualize_suggestion_commentators(this)" src="images/respond_to_suggestion.png" class="image24" />
                                        </div>
                                        <div>---<?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_33("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_33("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                image
                                            <?php } ?>--<span style="color: blue"><?php echo "" . time_to_sec($res_main_page_institution_suggestion['ogenius_nds_db_suggestions_regdate']); ?></span>-
                                        </div>
                                    </div>
                                    <div class="panel-body startcolstart">
                                <!-- <img src="Community_Admin/NDS_suggested_images/<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_data']; ?>" style="width: 95%;height: 120px;margin: 4px;" />
                                        --> <?php
                                        $theMainPageImgsTemp_store = $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_data'];
                                        $theMainPageImgsTemp_store_IMGs_array = explode("~", $theMainPageImgsTemp_store);
//-------------loop throuth all the images array----------
                                        ?><div class="centerrow"><?php
                                        for ($i = 0; $i < sizeof($theMainPageImgsTemp_store_IMGs_array); $i++) {
                                            ?>
                                                <div id="imgBull<?php echo "" . $i; ?>">
                                                    <img id="<?php echo "err34" . $i; ?>" onclick="main_page_institution_pic_view_this_img_enlarge(this)" src="Community_Admin/NDS_suggested_images/<?php echo "" . $theMainPageImgsTemp_store_IMGs_array[$i]; ?>" style="width: 80%;text-align: center;height: 90%;border-radius: 3px;box-shadow: 2px 2px 2px #333333;" /></br>


                                                </div>


                                                <?php
                                            }
                                            ?>
                                        </div>




                                        <p style="margin-top:10px">
                                            <?php echo "" . activateUrlStringsw($res_main_page_institution_suggestion['ogenius_nds_db_suggestions_support_text']); ?>

                                        </p>
                                    </div>
                                </div>                               

                                <?php
                                break;
                            case "audio" :
                                ?>
                                <div class="panel pinToSuggestion" style="width: 98%;cursor: auto;" >
                                    <div class="panel-heading centerrowspace">
                                        <div>
                                            <img id='view<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' name='<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' onclick="main_page_institution_visualize_suggestion_details(this)" src="images/view_this.png" class="image24" />
                                            <img id='comment45<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' name='<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' onclick="main_page_institution_visualize_suggestion_commentators(this)" src="images/respond_to_suggestion.png" class="image24"/>
                                        </div>
                                        <div>---<?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_36("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_36("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                audio
                                            <?php } ?>--<span style="color: blue"><?php echo "" . time_to_sec($res_main_page_institution_suggestion['ogenius_nds_db_suggestions_regdate']); ?></span>-</div>
                                    </div>
                                    <div class="panel-body startcolstart">
                                        <audio style="width: 95%;margin: 4px;" src="Community_Admin/NDS_suggested_audios/<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_data']; ?>" controls="">

                                        </audio>
                                    </div>
                                    <p style="margin-top:10px">
                                        <?php echo "" . activateUrlStringsw($res_main_page_institution_suggestion['ogenius_nds_db_suggestions_support_text']); ?>

                                    </p>
                                </div>

                                <?php
                                break;
                            case "video" :
                                ?>
                                <div class="panel pinToSuggestion" style="width: 98%;cursor: auto;" >
                                    <div class="panel-heading centerrowspace">
                                        <div>
                                            <img id='view<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' name='<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' onclick="main_page_institution_visualize_suggestion_details(this)" src="images/view_this.png" class="image24"/>
                                            <img id='comment45<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' name='<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' onclick="main_page_institution_visualize_suggestion_commentators(this)" src="images/respond_to_suggestion.png" class="image24" />
                                        </div>
                                        <div>---<?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_35("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_35("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                video
                                            <?php } ?>--<span style="color: blue"><?php echo "" . time_to_sec($res_main_page_institution_suggestion['ogenius_nds_db_suggestions_regdate']); ?></span>-</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body startcolstart">
                                        <video controls preload="true" style="width: 95%;height: 120px;margin: 4px;"  src="Community_Admin/NDS_suggested_videos/<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_data']; ?>">
                                        </video>
                                    </div>
                                    <p style="margin-top:10px">
                                        <?php echo "" . activateUrlStringsw($res_main_page_institution_suggestion['ogenius_nds_db_suggestions_support_text']); ?>
                                    </p>
                                </div>

                                <?php
                                break;
                        }
                    }
                }
            }
        }
        break;
    case "m_insti_media_type" :
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
        // $main_page_institution_suggestions_last_id=$_POST['main_page_institution_suggestions_last_id'];
        $sql_main_page_institution_suggestion_community = "SELECT * FROM  ogenius_nds_db_community WHERE        ogenius_nds_db_community_parent_id='{$common_user_settings_the_id}' ORDER BY ogenius_nds_db_community_id DESC LIMIT 1      ";
        if ($query_main_page_institution_suggestion_community = $database->query($sql_main_page_institution_suggestion_community)) {
            //---------------------
            $id_suggestion_temp = 0;
            $id_suggestion_temp_counter_P = 0;
            while ($res_main_page_institution_suggestion_community = mysqli_fetch_array($query_main_page_institution_suggestion_community)) {

                //-----------------
                $mainpage_institution_box = $res_main_page_institution_suggestion_community['ogenius_nds_db_community_id'];
                //------------
                // echo "".$id_xxxccc88;
                $sql_main_page_institution_suggestion = "SELECT * FROM  ogenius_nds_db_suggestions WHERE        ogenius_nds_db_suggestions_box_id='{$mainpage_institution_box}'  ORDER BY ogenius_nds_db_suggestions_id DESC LIMIT 200    ";
                if ($query_main_page_institution_suggestion = $database->query($sql_main_page_institution_suggestion)) {
                    //---------------------
                    while ($res_main_page_institution_suggestion = mysqli_fetch_array($query_main_page_institution_suggestion)) {
                        //-----------------------------------
                        //-------------------record the current id of the suggestion-------
                        $id_suggestion_temp = $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id'];
                        //------------display the ids holders
                        if ($id_suggestion_temp_counter_P == 0) {
                            echo "<input type='hidden' id='main_page_institution_suggestions_first_id' value='$id_suggestion_temp' />";
                        }
                        if ($id_suggestion_temp_counter_P == 200) {
                            echo "<input type='hidden' id='main_page_institution_suggestions_last_id' value='$id_suggestion_temp' />";
                        }

                        //----------------
                        $id_suggestion_temp_counter_P++;
                        //----------------------------
                        $main_page_institutioin_suggest_bymedia_type = $_POST['main_page_institutioin_suggest_bymedia_type'];
                        //----------------
                        if ($main_page_institutioin_suggest_bymedia_type == $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_type']) {
                            switch ($res_main_page_institution_suggestion['ogenius_nds_db_suggestions_type']) {
                                case "text" :
                                ?>
                                <div class="panel pinToSuggestion">
                                    <div class="panel-heading centerrowspace">
                                        <div>
                                            <img id='view<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' name='<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' onclick="main_page_institution_visualize_suggestion_details(this)" src="images/view_this.png" class="image24"/>
                                            <img id='comment45<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' name='<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' onclick="main_page_institution_visualize_suggestion_commentators(this)" src="images/respond_to_suggestion.png" class="image24" />
                                        </div>
                                        <div>
                                            ---<?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_34("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_34("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                text
                                            <?php } ?>--<span style="color: blue"><?php echo "" . time_to_sec($res_main_page_institution_suggestion['ogenius_nds_db_suggestions_regdate']); ?></span>-
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <p>
                                            <?php echo "" . activateUrlStringsw($res_main_page_institution_suggestion['ogenius_nds_db_suggestions_data']); ?>
                                        </p>
                                    </div>
                                </div>

                                <?php
                                break;
                            case "image" :
                                ?> 
                                <div class="panel pinToSuggestion" style="width: 98%;cursor: auto;" >
                                    <div class="panel-heading centerrowspace">
                                        <div>
                                            <img id='view<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' name='<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' onclick="main_page_institution_visualize_suggestion_details(this)" src="images/view_this.png" class="image24" />
                                            <img id='comment45<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' name='<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' onclick="main_page_institution_visualize_suggestion_commentators(this)" src="images/respond_to_suggestion.png" class="image24" />
                                        </div>
                                        <div>---<?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_33("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_33("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                image
                                            <?php } ?>--<span style="color: blue"><?php echo "" . time_to_sec($res_main_page_institution_suggestion['ogenius_nds_db_suggestions_regdate']); ?></span>-
                                        </div>
                                    </div>
                                    <div class="panel-body startcolstart">
                                <!-- <img src="Community_Admin/NDS_suggested_images/<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_data']; ?>" style="width: 95%;height: 120px;margin: 4px;" />
                                        --> <?php
                                        $theMainPageImgsTemp_store = $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_data'];
                                        $theMainPageImgsTemp_store_IMGs_array = explode("~", $theMainPageImgsTemp_store);
//-------------loop throuth all the images array----------
                                        ?><div class="centerrow"><?php
                                        for ($i = 0; $i < sizeof($theMainPageImgsTemp_store_IMGs_array); $i++) {
                                            ?>
                                                <div id="imgBull<?php echo "" . $i; ?>">
                                                    <img id="<?php echo "err34" . $i; ?>" onclick="main_page_institution_pic_view_this_img_enlarge(this)" src="Community_Admin/NDS_suggested_images/<?php echo "" . $theMainPageImgsTemp_store_IMGs_array[$i]; ?>" style="width: 80%;text-align: center;height: 90%;border-radius: 3px;box-shadow: 2px 2px 2px #333333;" /></br>


                                                </div>


                                                <?php
                                            }
                                            ?>
                                        </div>




                                        <p style="margin-top:10px">
                                            <?php echo "" . activateUrlStringsw($res_main_page_institution_suggestion['ogenius_nds_db_suggestions_support_text']); ?>

                                        </p>
                                    </div>
                                </div>                               

                                <?php
                                break;
                            case "audio" :
                                ?>
                                <div class="panel pinToSuggestion" style="width: 98%;cursor: auto;" >
                                    <div class="panel-heading centerrowspace">
                                        <div>
                                            <img id='view<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' name='<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' onclick="main_page_institution_visualize_suggestion_details(this)" src="images/view_this.png" class="image24" />
                                            <img id='comment45<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' name='<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' onclick="main_page_institution_visualize_suggestion_commentators(this)" src="images/respond_to_suggestion.png" class="image24"/>
                                        </div>
                                        <div>---<?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_36("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_36("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                audio
                                            <?php } ?>--<span style="color: blue"><?php echo "" . time_to_sec($res_main_page_institution_suggestion['ogenius_nds_db_suggestions_regdate']); ?></span>-</div>
                                    </div>
                                    <div class="panel-body startcolstart">
                                        <audio style="width: 95%;margin: 4px;" src="Community_Admin/NDS_suggested_audios/<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_data']; ?>" controls="">

                                        </audio>
                                    </div>
                                    <p style="margin-top:10px">
                                        <?php echo "" . activateUrlStringsw($res_main_page_institution_suggestion['ogenius_nds_db_suggestions_support_text']); ?>

                                    </p>
                                </div>

                                <?php
                                break;
                            case "video" :
                                ?>
                                <div class="panel pinToSuggestion" style="width: 98%;cursor: auto;" >
                                    <div class="panel-heading centerrowspace">
                                        <div>
                                            <img id='view<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' name='<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' onclick="main_page_institution_visualize_suggestion_details(this)" src="images/view_this.png" class="image24"/>
                                            <img id='comment45<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' name='<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' onclick="main_page_institution_visualize_suggestion_commentators(this)" src="images/respond_to_suggestion.png" class="image24" />
                                        </div>
                                        <div>---<?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_35("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_35("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                video
                                            <?php } ?>--<span style="color: blue"><?php echo "" . time_to_sec($res_main_page_institution_suggestion['ogenius_nds_db_suggestions_regdate']); ?></span>-</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body startcolstart">
                                        <video controls preload="true" style="width: 95%;height: 120px;margin: 4px;"  src="Community_Admin/NDS_suggested_videos/<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_data']; ?>">
                                        </video>
                                    </div>
                                    <p style="margin-top:10px">
                                        <?php echo "" . activateUrlStringsw($res_main_page_institution_suggestion['ogenius_nds_db_suggestions_support_text']); ?>
                                    </p>
                                </div>

                                <?php
                                break;
                            }
                        }
                    }
                }
            }
        }
        break;
    case "m_insti_date_range" :
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
        //$main_page_institution_suggestions_last_id=$_POST['main_page_institution_suggestions_last_id'];
        $sql_main_page_institution_suggestion_community = "SELECT * FROM  ogenius_nds_db_community WHERE        ogenius_nds_db_community_parent_id='{$common_user_settings_the_id}' ORDER BY ogenius_nds_db_community_id DESC LIMIT 1      ";
        if ($query_main_page_institution_suggestion_community = $database->query($sql_main_page_institution_suggestion_community)) {
            //---------------------
            $id_suggestion_temp = 0;
            $id_suggestion_temp_counter_P = 0;
            while ($res_main_page_institution_suggestion_community = mysqli_fetch_array($query_main_page_institution_suggestion_community)) {

                //-----------------
                $mainpage_institution_box = $res_main_page_institution_suggestion_community['ogenius_nds_db_community_id'];
                //------------
                // echo "".$id_xxxccc88;
                //-------------------
                $secondDateToUse = $_POST['secondDateToUse'];
                $firstDateToUse = $_POST['firstDateToUse'];
                //--------------
                //echo "".$secondDateToUse."---".$firstDateToUse;
                $newDateFirst = new DateTime($firstDateToUse);
                $newDateSecond = new DateTime($secondDateToUse);
                $newDateFirst = date("Y-m-d H:i:s", strtotime($firstDateToUse));
                $newDateSecond = date("Y-m-d H:i:s", strtotime($secondDateToUse));

                //echo "</br>--".$newDateSecond."---".$newDateFirst;
                //-------------------------
                $ASCorDESC = ($_POST['btn'] == "btn1") ? "ASC" : "DESC";

                $sql_main_page_institution_suggestion = "SELECT * FROM  ogenius_nds_db_suggestions WHERE   ogenius_nds_db_suggestions_box_id='{$mainpage_institution_box}' AND (ogenius_nds_db_suggestions_regdate BETWEEN  '{$newDateFirst}' AND '{$newDateSecond}')      ORDER BY ogenius_nds_db_suggestions_id $ASCorDESC LIMIT 200    ";
                if ($query_main_page_institution_suggestion = $database->query($sql_main_page_institution_suggestion)) {
                    //---------------------
                    while ($res_main_page_institution_suggestion = mysqli_fetch_array($query_main_page_institution_suggestion)) {
                        //-----------------------------------
                        //-------------------record the current id of the suggestion-------
                        $id_suggestion_temp = $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id'];
                        //------------display the ids holders
                        if ($id_suggestion_temp_counter_P == 0) {
                            echo "<input type='hidden' id='main_page_institution_suggestions_first_id' value='$id_suggestion_temp' />";
                        }
                        if ($id_suggestion_temp_counter_P == 200) {
                            echo "<input type='hidden' id='main_page_institution_suggestions_last_id' value='$id_suggestion_temp' />";
                        }

                        //----------------
                        $id_suggestion_temp_counter_P++;
                        //----------------------------
                        switch ($res_main_page_institution_suggestion['ogenius_nds_db_suggestions_type']) {
                            case "text" :
                                ?>
                                <div class="panel pinToSuggestion">
                                    <div class="panel-heading centerrowspace">
                                        <div>
                                            <img id='view<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' name='<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' onclick="main_page_institution_visualize_suggestion_details(this)" src="images/view_this.png" class="image24"/>
                                            <img id='comment45<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' name='<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' onclick="main_page_institution_visualize_suggestion_commentators(this)" src="images/respond_to_suggestion.png" class="image24" />
                                        </div>
                                        <div>
                                            ---<?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_34("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_34("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                text
                                            <?php } ?>--<span style="color: blue"><?php echo "" . time_to_sec($res_main_page_institution_suggestion['ogenius_nds_db_suggestions_regdate']); ?></span>-
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <p>
                                            <?php echo "" . activateUrlStringsw($res_main_page_institution_suggestion['ogenius_nds_db_suggestions_data']); ?>
                                        </p>
                                    </div>
                                </div>

                                <?php
                                break;
                            case "image" :
                                ?> 
                                <div class="panel pinToSuggestion" style="width: 98%;cursor: auto;" >
                                    <div class="panel-heading centerrowspace">
                                        <div>
                                            <img id='view<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' name='<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' onclick="main_page_institution_visualize_suggestion_details(this)" src="images/view_this.png" class="image24" />
                                            <img id='comment45<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' name='<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' onclick="main_page_institution_visualize_suggestion_commentators(this)" src="images/respond_to_suggestion.png" class="image24" />
                                        </div>
                                        <div>---<?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_33("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_33("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                image
                                            <?php } ?>--<span style="color: blue"><?php echo "" . time_to_sec($res_main_page_institution_suggestion['ogenius_nds_db_suggestions_regdate']); ?></span>-
                                        </div>
                                    </div>
                                    <div class="panel-body startcolstart">
                                <!-- <img src="Community_Admin/NDS_suggested_images/<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_data']; ?>" style="width: 95%;height: 120px;margin: 4px;" />
                                        --> <?php
                                        $theMainPageImgsTemp_store = $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_data'];
                                        $theMainPageImgsTemp_store_IMGs_array = explode("~", $theMainPageImgsTemp_store);
//-------------loop throuth all the images array----------
                                        ?><div class="centerrow"><?php
                                        for ($i = 0; $i < sizeof($theMainPageImgsTemp_store_IMGs_array); $i++) {
                                            ?>
                                                <div id="imgBull<?php echo "" . $i; ?>">
                                                    <img id="<?php echo "err34" . $i; ?>" onclick="main_page_institution_pic_view_this_img_enlarge(this)" src="Community_Admin/NDS_suggested_images/<?php echo "" . $theMainPageImgsTemp_store_IMGs_array[$i]; ?>" style="width: 80%;text-align: center;height: 90%;border-radius: 3px;box-shadow: 2px 2px 2px #333333;" /></br>


                                                </div>


                                                <?php
                                            }
                                            ?>
                                        </div>




                                        <p style="margin-top:10px">
                                            <?php echo "" . activateUrlStringsw($res_main_page_institution_suggestion['ogenius_nds_db_suggestions_support_text']); ?>

                                        </p>
                                    </div>
                                </div>                               

                                <?php
                                break;
                            case "audio" :
                                ?>
                                <div class="panel pinToSuggestion" style="width: 98%;cursor: auto;" >
                                    <div class="panel-heading centerrowspace">
                                        <div>
                                            <img id='view<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' name='<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' onclick="main_page_institution_visualize_suggestion_details(this)" src="images/view_this.png" class="image24" />
                                            <img id='comment45<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' name='<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' onclick="main_page_institution_visualize_suggestion_commentators(this)" src="images/respond_to_suggestion.png" class="image24"/>
                                        </div>
                                        <div>---<?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_36("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_36("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                audio
                                            <?php } ?>--<span style="color: blue"><?php echo "" . time_to_sec($res_main_page_institution_suggestion['ogenius_nds_db_suggestions_regdate']); ?></span>-</div>
                                    </div>
                                    <div class="panel-body startcolstart">
                                        <audio style="width: 95%;margin: 4px;" src="Community_Admin/NDS_suggested_audios/<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_data']; ?>" controls="">

                                        </audio>
                                    </div>
                                    <p style="margin-top:10px">
                                        <?php echo "" . activateUrlStringsw($res_main_page_institution_suggestion['ogenius_nds_db_suggestions_support_text']); ?>

                                    </p>
                                </div>

                                <?php
                                break;
                            case "video" :
                                ?>
                                <div class="panel pinToSuggestion" style="width: 98%;cursor: auto;" >
                                    <div class="panel-heading centerrowspace">
                                        <div>
                                            <img id='view<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' name='<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' onclick="main_page_institution_visualize_suggestion_details(this)" src="images/view_this.png" class="image24"/>
                                            <img id='comment45<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' name='<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' onclick="main_page_institution_visualize_suggestion_commentators(this)" src="images/respond_to_suggestion.png" class="image24" />
                                        </div>
                                        <div>---<?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_35("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_35("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                video
                                            <?php } ?>--<span style="color: blue"><?php echo "" . time_to_sec($res_main_page_institution_suggestion['ogenius_nds_db_suggestions_regdate']); ?></span>-</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body startcolstart">
                                        <video controls preload="true" style="width: 95%;height: 120px;margin: 4px;"  src="Community_Admin/NDS_suggested_videos/<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_data']; ?>">
                                        </video>
                                    </div>
                                    <p style="margin-top:10px">
                                        <?php echo "" . activateUrlStringsw($res_main_page_institution_suggestion['ogenius_nds_db_suggestions_support_text']); ?>
                                    </p>
                                </div>

                                <?php
                                break;
                        }
                    }
                }
            }
        }
        break;
}
?>