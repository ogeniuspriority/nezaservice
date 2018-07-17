<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html>
    <header>
        <head>
            <link rel='shortcut icon' type='image/x-icon' href='system_images/nds_logo.png' />
            <meta name="description" content="Na Yombi" />
            <meta name="description" content="Nkuwikorera" />
            <meta name="description" content="Digital Rwanda" />
            <meta name="description" content="Serve Rwanda" />
            <meta name="description" content="Services In Rwanda" />
            <meta name="description" content="Services.com" />
            <meta name="description" content="Services" />
            <meta name="description" content="Ogeniuspriority.com" />
            <meta name="description" content="O'Genius Priority" />
            <meta name="description" content="OgeniusServices.com" />
            <meta name="description" content="O'Genius Services" />
            <meta name="description" content="NozaServices.com" />
            <meta name="description" content="Noza Services" />
            <meta name="description" content="NezaServices.com" />
            <meta name="description" content="Neza Services" />
            <meta name="description" content="NezaDigitalService.com" />
            <meta name="description" content="Neza Digital Service" />
            <meta name="description" content="O'Genius Priority Ltd." />
            <meta name="description" content="O'genius priority for empowering genuine welfare" />
            <meta name="description" content="MD Igiraneza Origene" />
            <meta name="description" content="CTO Mugabo Shyaka Cedric" />
            <meta name="description" content="COO Rutayisire Christian" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <!--            <link href="css/maincontent.css" rel="stylesheet" type="text/css" />
                        <link rel="stylesheet" href="jquery/special_ui/jquery-ui.css" type="text/css">-->
            <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
            <link rel="stylesheet" type="text/css" href="../css/font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css"/>
            <link rel="stylesheet" href="css/animations.css" type="text/css" />
        <link rel="stylesheet" href="css/font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" type="text/css" href="css/newcss1.css" />
            <script src = "js/jquery-3.2.1.js" ></script>
            <script src="js/bootstrap.min.js"></script>
            <title>Neza Digital Service</title>

            <script type="text/javascript">
                myVar = setTimeout(function () {

                    var link = document.createElement('link');
                    link.type = 'image/x-icon';
                    link.rel = 'shortcut icon';
                    link.href = 'system_images/nds_logo.png';
                    document.getElementsByTagName('head')[0].appendChild(link);
                }, 2000);

            </script>
        </head>
    </header>
    <?php
    //--bring the language--------------------------
    require_once ("conn/config.php");
    require_once ("includes/classes/database.php");
    require_once ("includes/classes/settingsReadFile.php");
    //---------------
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $theLanGuru = $_POST['selected_lan_00'];
        $_SESSION["NDS_OGENIUS_session_lan"] = $theLanGuru;
    } else {
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

        //--bring the language--------------------------
        require_once ("conn/config.php");
        require_once ("classes/database.php");
        require_once ("classes/settingsReadFile.php");
        //---------------
        $_global_language = "english_NDS_618485740hub5548.xml";
        ?>
        <?php
        $sqllanguage_tools = "SELECT * FROM  ogenius_nds_languages_for_settings WHERE ogenius_nds_languages_for_settings_name_of_language='English'";
        if ($querylanguage_tools = $database->query($sqllanguage_tools)) {
            //---------------------
            while ($res_lan = mysqli_fetch_array($querylanguage_tools)) {
                $_global_language = $res_lan['ogenius_nds_languages_for_settings_language_file_name'];
            }
        }
    }
    //---Declare the settings class to hold all The keywords--
    $NDS_OGENIUS_MAIN_settings = new myXML_CED_Settings("system_config_xml/" . $_global_language);
    ?>
    <div style="visibility:hidden;position:absolute;margin-left: 40%;margin-top:700px;border-radius: 8px;box-shadow: 2px 3px 5px #000000;width: 350px;z-index: 100000;padding: 8px;background: #cdcdcd">
        <input type="button" class="btn" style="float: right" value="close" />
        <div class="scrolls" style="max-height: 300px;overflow-y: scroll;margin-top: 30px;z-index:10000">

            <p style="text-align: center">
                Sponsored Advert If any was created!
                <?php
                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_header("system_config_xml/" . $_global_language)->item(0)->textContent;
                ?>
            </p>
            <img src="uploaded_images/ashimwe_fiona_doreen_na_umuhoza_simbi_fanique-5ae6f.jpg" style="margin-left:40px;width: 260px;height: 260px;" />
            <h4 style="text-align: center"><a href="#">This is The link</a></h4>
        </div>
    </div>
    <div id="loader_2017_" style="visibility:hidden;position:absolute;margin-left: 60%;margin-top:0px;border-radius: 8px;box-shadow: 2px 3px 5px #000000;width: 350px;z-index: 200000;padding: 8px;background: #cdcdcd">
        <div style="background: #37474F  ;min-height: 100px;border-radius: 10px;padding-top:">
            <div id="loader_loaded" class="loader" style="color: #000000;margin: auto">
                <p style="text-align: center;padding-top: 40px; color: white; font-size: 24px; font-weight: 400">
                    <?php
                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_header("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_header("system_config_xml/" . $_global_language)->item(0)->textContent;
                    } else {
                        ?>
                        loading...
                    <?php } ?>
                </p>
            </div>
            <div id="loader_done_now" >
                <p id="loader_done_now_ok" style="text-align: center;padding-top: 40px; color: white; font-size: 24px; font-weight: 400">
                    <?php
                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_header_("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_header_("system_config_xml/" . $_global_language)->item(0)->textContent;
                    } else {
                        ?>
                        Done Now!
                    <?php } ?>
                </p>
                <p id="loader_done_now_fail" style="text-align: center;padding-top: 40px; color: white; font-size: 24px; font-weight: 400">
                    <?php
                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_header_1("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_header_1("system_config_xml/" . $_global_language)->item(0)->textContent;
                    } else {
                        ?>
                        Network Error!
                    <?php } ?>
                </p>
                <p id="loader_done_now_incorrect" style="text-align: center;padding-top: 40px; color: white; font-size: 24px; font-weight: 400">
                    
                        Credentials incorrect!
                
                </p>
                <p id="loader_done_now_messagesent" style="text-align: center;padding-top: 40px; color: white; font-size: 24px; font-weight: 400">
                    
                        Message Sent!
                
                </p>
            </div>
        </div>
    </div>
    <body class="startcolcenter">

