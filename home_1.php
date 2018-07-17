<?php
require_once 'includes/header.php';
?>
<section>
    <input type="hidden" id="home_page_2017" />
    <div class="home_upper_part" style="text-align: center;overflow-y: hidden;">
        <div style="position: absolute;width: 100%;height:auto;z-index: 1000;">
            <div style="float: right;margin-right: 5%;">
                <table style="margin-left: 30%;margin-top: 4%;">
                    <tr>
                        <td><?php
                            $sqllanguage_tools_choice_lan_img = "SELECT * FROM  ogenius_nds_languages_for_settings WHERE ogenius_nds_languages_for_settings_name_of_language='{$theLanGuru}'";
                            if ($querylanguage_tools_choice_lan = $database->query($sqllanguage_tools_choice_lan_img)) {
                                //---------------------
                                $i = 0;
                                while ($res_lan_choice_lan_img = mysqli_fetch_array($querylanguage_tools_choice_lan)) {
                                    $_lan_file_name_img = $res_lan_choice_lan_img['ogenius_nds_languages_for_settings_img_logo'];
                                    ?>
                                    <?php ?>
                                    <img src="lan_flags/<?php echo "" . $_lan_file_name_img; ?>" style="width: 20px;height: 20px;margin-top:-15px;border-radius:3px;"  />           <?php
                                }
                            }
                            ?>

                        </td>


                        <td>
                            <form method="post" name="myform" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                                <select class="site_languages" id="34e" name="selected_lan_00" onchange="myform.submit();">

                                    <?php
                                    $sqllanguage_tools_choice_lan = "SELECT * FROM  ogenius_nds_languages_for_settings";
                                    if ($querylanguage_tools_choice_lan = $database->query($sqllanguage_tools_choice_lan)) {
                                        //---------------------
                                        $i = 0;
                                        while ($res_lan_choice_lan = mysqli_fetch_array($querylanguage_tools_choice_lan)) {
                                            $_lan_file_name = $res_lan_choice_lan['ogenius_nds_languages_for_settings_language_file_name'];
                                            $_lan_name = $res_lan_choice_lan['ogenius_nds_languages_for_settings_name_of_language'];
                                            ?>
                                            <?php
                                            if ($theLanGuru == $_lan_name) {
                                                ?>
                                                <option selected="selected" value="<?php echo "" . $_lan_name; ?>"><?php echo "" . $_lan_name; ?></option> 

                                                <?php
                                            } else {
                                                ?>
                                                <option  value="<?php echo "" . $_lan_name; ?>"><?php echo "" . $_lan_name; ?></option>            <?php
                                            }
                                        }
                                    }
                                    ?>
                                </select>
                            </form>

                    </tr>
                </table>
            </div>
            <table style="margin-left: 30%;margin-top: 3%;">
                <tr>
                    <td><img src="system_images/nds_logo.png" style="width: 100px;height: 100px;"  /></td>
                    <td><h1 style="color: rgba(255,255,255,0.8);margin-top:12px;padding-left: 30px;font-size: 30px;">Neza Digital Service</h1></td>
                </tr>
            </table>
            <div style="width: 100%;">
                <div style="color: rgba(255,255,255,0.8);">
                    <div style="width: 49%;float: left;">
                        <div style="width: 100%;">
                            <p style="text-align: left;padding-left: 5%;font-family:myFirstFont">
                                <?php
                                $sql_upper_text = "SELECT * FROM  ogenius_nds_home_upper_text WHERE     ogenius_nds_home_upper_text_visibility='1' ORDER BY ogenius_nds_home_upper_text_id DESC LIMIT 1";
                                if ($query_upper_text = $database->query($sql_upper_text)) {
//---------------------
                                    while ($res_upper_text = mysqli_fetch_array($query_upper_text)) {
                                        ?>



                                        <?php echo "" . $res_upper_text['ogenius_nds_home_upper_text_text']; ?>

                                        <?php
                                    }
                                }
                                ?>

                            </p>
                        </div>
                        <div style="margin-left:15%;width: 70%;font-family: myFirstFont;">


                            <?php
                            $sql_appendix_session = "SELECT * FROM  ogenius_nds_appendix_sessions WHERE ogenius_nds_appendix_sessions_status='1'   ORDER BY ogenius_nds_appendix_sessions_id  DESC";
                            if ($query_upper_text_session = $database->query($sql_appendix_session)) {
//---------------------
                                while ($res_appendix_session = mysqli_fetch_array($query_upper_text_session)) {
                                    $xxx_Id = $res_appendix_session['ogenius_nds_appendix_sessions_id'];
                                    ?>
                                    <?php
                                    $sql_appendix_session_txt = "SELECT * FROM  ogenius_nds_appendix_texts WHERE    ogenius_nds_appendix_texts_status='1' AND ogenius_nds_appendix_texts_session_id='{$xxx_Id}' ORDER BY ogenius_nds_appendix_texts_id DESC";
                                    if ($query_appendix_session_txt = $database->query($sql_appendix_session_txt)) {
//---------------------
                                        while ($res_appendix_session_txt = mysqli_fetch_array($query_appendix_session_txt)) {
                                            ?><p style="text-align: left;margin-left: 5%;font-family:myFirstFont;margin-top: 8px;">

                                                <?php echo "" . $res_appendix_session_txt['ogenius_nds_appendix_texts_text']; ?>
                                            </p>             
                                            <?php
                                        }
                                    }
                                    ?>



                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>

                    <div  style="width: 49%;float: left;text-align: center;">
                        <div>
                            <div style="position: absolute;margin-left: 22%;margin-top: 7%;cursor: hand;">
                                <input type="hidden" id="videoPlayerStatus" value="play"  />
                                <img src="images/bigplay.png" id="togglePlayPause" style="width: 80px;height: 80px;border-radius: 3px;" />
                            </div>
                            <?php
                            $sql_video_xx_0 = "SELECT * FROM  ogenius_nds_videos WHERE        ogenius_nds_videos_status='1' ORDER BY    ogenius_nds_videos_id DESC LIMIT 1";
                            if ($query_video_xx_0 = $database->query($sql_video_xx_0)) {
//---------------------
                                while ($res_video_xx_0 = mysqli_fetch_array($query_video_xx_0)) {
                                    ?>
                                    <video id="video_win" preload  src="global_vids/<?php echo "" . $res_video_xx_0['ogenius_nds_videos_video_name']; ?>" style="background:rgba(0,0,0,0.6);cursor: hand;width: 80%;height: 300px;"></video></td>


                                    <?php
                                }
                            }
                            ?>      

                        </div>
                        <div>
                            <p style="text-align: center;">
                                <?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_0("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_0("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                    You want to have NDS on your smartphone
                                    It is now available on android  Network Error!
                                <?php } ?>       

                            </p>
                            <?php
                            $sql_home_links = "SELECT * FROM  ogenius_nds_db_home_links WHERE     ogenius_nds_db_home_links_status='1' ORDER BY     ogenius_nds_db_home_links_id DESC LIMIT 1";
                            if ($query_home_links = $database->query($sql_home_links)) {
//---------------------
                                while ($res_home_links = mysqli_fetch_array($query_home_links)) {
                                    ?>

                                    <a target="_blank" href="http://<?php echo "" . $res_home_links['ogenius_nds_db_home_links_link']; ?>"><img src="images/Untitled-1.png"  style="width: 160px;height: 50px;" ></a>
                                    <?php
                                }
                            }
                            ?>


                        </div>

                    </div>
                    <div style="clear: both;"></div>

                </div>

            </div>

        </div>

        <div  class="home_upper_part_bg" id="home_upper_part_bg_code" style="z-index:50;background:rgba(0,0,0,0.5);">

        </div>
        <div>
            <?php
            require_once ("includes/conn/config.php");
            ?>
            <?php
            require_once ("includes/classes/database.php");
            ?>
            <?php
            $sql_home_gallery_img_ = "SELECT * FROM  ogenius_nds_db_home_page_gallery WHERE     ogenius_nds_db_home_page_gallery_active='1' ORDER BY     ogenius_nds_db_home_page_gallery_id DESC LIMIT 1";
            if ($query_home_gallery_img_ = $database->query($sql_home_gallery_img_)) {
//---------------------
                while ($res_home_gallery_img_ = mysqli_fetch_array($query_home_gallery_img_)) {
                    ?>

                    <img src="homePage_images/<?php echo "" . $res_home_gallery_img_['ogenius_nds_db_home_page_gallery_image']; ?>" id="bg_image_screen" style="display:block;z-index:1;max-width: 100%;width:100%;height: 700px;" />


                    <?php
                }
            }
            ?>
<!-- <img src="uploaded_images/32210901391_becdb7c654_c-ca7f3.jpg" id="bg_image_screen" style="display:block;z-index:1;max-width: 100%;width:100%;height: 700px;" />
            --><div  style="clear:both;position: fixed;visibility: hidden;" id="bg_image_gallery_farm">
                <!-- my LOaded Background Gallery Images-->
                <!--<img src="uploaded_images/32210901391_becdb7c654_c-ca7f3.jpg"  />
                <img src="uploaded_images/ashimwe_fiona_doreen_na_umuhoza_simbi_fanique-5ae6f.jpg"  />
                <img src="uploaded_images/bafite_intego_yo_gukora_cyane_ibikorwa_byabo_bikambuka_imipaka-ce301.jpg"  />
                <img src="uploaded_images/Bafite-byinshi-bifuza-kubona-ku-Rwanda.jpg"  />
                <img src="uploaded_images/DSC_8488.jpg" />
                <img src="uploaded_images/DSC_8633.jpg" />
                <img src="uploaded_images/paul-van-haver-stromae-et-sa-femme-coralie-barbier-c2aefrancc2a6c2baois-goizec2a6c3bc-48784.jpg" />
                --><?php
                require_once ("includes/conn/config.php");
                ?>
                <?php
                require_once ("includes/classes/database.php");
                ?>
                <?php
                $sql_home_gallery_img = "SELECT * FROM  ogenius_nds_db_home_page_gallery WHERE     ogenius_nds_db_home_page_gallery_active='1' ORDER BY     ogenius_nds_db_home_page_gallery_id DESC";
                if ($query_home_gallery_img = $database->query($sql_home_gallery_img)) {
//---------------------
                    while ($res_home_gallery_img = mysqli_fetch_array($query_home_gallery_img)) {
                        ?>

                        <img src="homePage_images/<?php echo "" . $res_home_gallery_img['ogenius_nds_db_home_page_gallery_image']; ?>" />


                        <?php
                    }
                }
                ?>
            </div>
        </div>

    </div>
    <div style="clear: both;z-index: 10000;margin-top: -7%;position: absolute;">

        <div style="clear: both;">
            <div style="height: 4%;">

            </div>
            <table style="margin-top: 0%;clear: both;z-index: 5000;margin-left: 500px;">
                <tr>
                    <td style="margin-left: 30px;">
                        <div onclick="openSignInWindow()" style="cursor:pointer;width: 100px;background: #0080FF;color: white;border-radius: 6px;padding: 5px;font-size: 18px;text-align: center;">
                            <?php
                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_1("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_1("system_config_xml/" . $_global_language)->item(0)->textContent;
                            } else {
                                ?>
                                Sign in
                            <?php } ?>                          
                        </div>
                        <div  id="loginFairy_popUp" style="position: fixed;visibility: hidden;z-index: 20000;">

                            <div onclick="" id="loginP" style="border:3px solid #0080FF;background: #ffffff;margin-top: 6.5%;margin-left: 30%;margin-right: 30%;border-radius:5px;height: auto;">
                                <input onclick="hideThisLog()" class="btn" type="button" style="float: right;margin-right: 10%;" value="<?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_3("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_3("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                           Close
                                       <?php } ?>" />
                                <h4 style="text-align: center;"></br></br>
                                    <?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_2("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_2("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        Login Panel
                                    <?php } ?>
                                </h4>
                                <div >
                                    <table style="margin: auto;">
                                        <tr>
                                            <td>
                                                <input onkeyup="renew_nds_this(this)" onchange="renew_nds_this(this)" id="login_panel_username" class="accountRegPuts" placeholder="<?php
                                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_4("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_4("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                } else {
                                                    ?>
                                                           Username
                                                       <?php } ?>" type="text" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input onkeyup="renew_nds_this(this)" onchange="renew_nds_this(this)" id="login_panel_password" class="accountRegPuts" placeholder="<?php
                                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_5("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_5("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                } else {
                                                    ?>
                                                           password
                                                       <?php } ?>" type="password" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input class="accountRegPuts_btn" value="<?php
                                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_6("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_6("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                } else {
                                                    ?>
                                                           Sign In
                                                       <?php } ?>" onclick="logInToThePlatform()" type="button" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div id="login_msg_panel" style="visibility:hidden;margin-left:20px;color: red;text-align: center;">
                                                    <?php
                                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_7("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_7("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                    } else {
                                                        ?>
                                                        Error!
                                                    <?php } ?>                                            
                                                </div></td>
                                        </tr>
                                    </table>

                                </div>
                            </div>

                        </div></td><td style="width: 50px;">
                        <div onclick="scrollToRegWin()" style="margin-left:30px;;cursor:hand;width: 100px;background: #FFFFFF;color: black;border-radius: 6px;padding: 5px;font-size: 18px;text-align: center;">

                            <?php
                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_8("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_8("system_config_xml/" . $_global_language)->item(0)->textContent;
                            } else {
                                ?>
                                Register
                            <?php } ?>
                        </div></td>
                </tr>
            </table>
        </div>

    </div>

    <div class="home_lower_part" id="_home_lower_part" style="margin-top: 0px;overflow: hidden;">
        <div style="height: 5.5%;">

        </div>
        <h1 id="CreateAccount_" style="margin-top: 10px;text-align: center"><?php
            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_9("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_9("system_config_xml/" . $_global_language)->item(0)->textContent;
            } else {
                ?>
                Create Account
            <?php } ?></h1>
        <div>
            <div id="Individual" class="panel_registration" style="margin-left: 33%;text-align: center;">
                <?php
                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_10("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_10("system_config_xml/" . $_global_language)->item(0)->textContent;
                } else {
                    ?>
                    Individual
                <?php } ?>

            </div>
            <div id="Institution" class="panel_registration" style="text-align: center;">
                <?php
                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_11("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_11("system_config_xml/" . $_global_language)->item(0)->textContent;
                } else {
                    ?>
                    Institution
                <?php } ?>

            </div>
            <div id="Officials" class="panel_registration" style="text-align: center;">
                <?php
                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_12("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_12("system_config_xml/" . $_global_language)->item(0)->textContent;
                } else {
                    ?>
                    Officials
                <?php } ?>

            </div>
            <div style="clear: both;"></div>
        </div>

        <div id="am" style="height: 80%;">
            <div id="individual_claim" style="clear: both;width: 80%;min-height:50%;border:1px solid black;border-radius: 7px;margin-left: 10%;">
                <div style="clear: both;padding-bottom: 80px;">
                    <div style="height: 3.5%;"></div>
                    <table style="margin-left: 30%;">
                        <tr>
                            <td>
                                <div style="cursor:hand;width: 240px;height:40px;background: #3b5998;border-radius: 7px;color: white;" ><img src="images/Facebook Round.png" style="margin:5px;width: 30px;height: 30px;" />
                                    <div onclick="login()" style="margin-top: -30px;margin-left: 50px;">
                                        <?php
                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_13("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_13("system_config_xml/" . $_global_language)->item(0)->textContent;
                                        } else {
                                            ?>
                                            Sign in with Facebook
                                        <?php } ?>

                                    </div>

                                    <script type="text/javascript">
                                        // initialize and setup facebook js sdk
                                        window.fbAsyncInit = function () {
                                            FB.init({
                                                appId: '247465659059524',
                                                xfbml: true,
                                                version: 'v2.8'
                                            });

                                        };
                                        (function (d, s, id) {
                                            var js, fjs = d.getElementsByTagName(s)[0];
                                            if (d.getElementById(id)) {
                                                return;
                                            }
                                            js = d.createElement(s);
                                            js.id = id;
                                            js.src = "//connect.facebook.net/en_US/sdk.js";
                                            fjs.parentNode.insertBefore(js, fjs);
                                        }(document, 'script', 'facebook-jssdk'));

                                        // login with facebook with extra permissions
                                        function login() {
                                            //----------------
                                            FB.getLoginStatus(function (response) {
                                                if (response.status === 'connected') {
                                                    //document.getElementById('status').innerHTML = 'We are connected.';
                                                    //document.getElementById('login').style.visibility = 'hidden';
                                                } else if (response.status === 'not_authorized') {
                                                    //document.getElementById('status').innerHTML = 'We are not logged in.'
                                                } else {
                                                    //document.getElementById('status').innerHTML = 'You are not logged into Facebook.';
                                                }
                                            });

                                            //---
                                            FB.login(function (response) {
                                                if (response.status === 'connected') {
                                                    //document.getElementById('status').innerHTML = 'We are connected.';
                                                    //document.getElementById('login').style.visibility = 'hidden';
                                                    //---confirm good login--

                                                    getInfo();

                                                    //--
                                                } else if (response.status === 'not_authorized') {
                                                    //document.getElementById('status').innerHTML = 'We are not logged in.'
                                                } else {
                                                    //document.getElementById('status').innerHTML = 'You are not logged into Facebook.';
                                                }
                                            }, {
                                                scope: 'email'
                                            });
                                        }

                                        // getting basic user info
                                        function getInfo() {
                                            FB.api('/me', 'GET', {
                                                fields: 'first_name,last_name,name,gender,id,age_range,email,picture.width(150).height(150)'
                                            }, function (response) {
                                                //document.getElementById('status').innerHTML = "<img src='" + response.picture.data.url + "'>";
                                                //alert(response.first_name + "-" + response.name + "-" + response.gender + "-" + response.email + "-" + response.age_range["min"] + "-" + response.age_range["max"] + "-" + response.id);
                                                facebook_api_log(response.first_name, response.name, response.gender, response.email, response.id, response.picture.data.url);

                                            });

                                        }
                                    </script>
                                </div></td>
                            <td><!--
                            <div style="cursor:hand;width: 240px;height:40px;background: #d62d20;border-radius: 7px;color: white;" ><img src="images/Google plus round.png" style="margin:5px;width: 30px;height: 30px;" />
                               
       
                                <div style="margin-top: -30px;margin-left: 50px;">
                                <?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_14("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_14("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                            Sign in with Gmail
                                <?php } ?>
                                    
                                </div>
                                
                            </div>-->

                                <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
                                <script src="https://apis.google.com/js/api:client.js"></script>

                                <script>
                                        try {
                                            var googleUser = {};
                                            var startApp = function () {
                                                gapi.load('auth2', function () {
                                                    // Retrieve the singleton for the GoogleAuth library and set up the client.
                                                    auth2 = gapi.auth2.init({
                                                        client_id: '644852252476-35uci8gm4tspti3kmt57v2fvm0d6pssi.apps.googleusercontent.com',
                                                        cookiepolicy: 'single_host_origin',
                                                        // Request scopes in addition to 'profile' and 'email'
                                                        //scope: 'additional_scope'
                                                    });
                                                    attachSignin(document.getElementById('customBtn'));
                                                });
                                            };

                                            function attachSignin(element) {
                                                //console.log(element.id);
                                                auth2.attachClickHandler(element, {}, function (googleUser) {
                                                    //document.getElementById('name').innerText = "Signed in: "+element.id+"-" + googleUser.getBasicProfile().getName() + "--" + googleUser.getBasicProfile().getEmail();
                                                    //document.getElementById("myImage").src= googleUser.getBasicProfile().getImageUrl();
                                                    //----use the profiles data-----------------
                                                    google_api_log(googleUser.getBasicProfile().getName(), googleUser.getBasicProfile().getEmail(), googleUser.getBasicProfile().getId(), googleUser.getBasicProfile().getName(), googleUser.getBasicProfile().getGivenName(), googleUser.getBasicProfile().getFamilyName(), googleUser.getBasicProfile().getImageUrl());

                                                    //------------------------------------------------
                                                }, function (error) {
                                                    //alert(JSON.stringify(error, undefined, 2));
                                                });
                                            }
                                        } catch (err) {

                                        }
                                </script>
                                <style type="text/css">
                                    #customBtn {
                                        cursor: hand;
                                        width: 240px;
                                        height: 40px;
                                        background: #d62d20;
                                        border-radius: 7px;
                                        color: white;
                                    }
                                    #customBtn:hover {
                                        cursor: pointer;
                                    }
                                    span.label {
                                        font-family: serif;
                                        font-weight: normal;
                                    }
                                    span.icon {
                                        background: url('/identity/sign-in/g-normal.png') transparent 5px 50% no-repeat;
                                        display: inline-block;
                                        vertical-align: middle;
                                        width: 42px;
                                        height: 42px;
                                    }
                                    span.buttonText {
                                        display: inline-block;
                                        vertical-align: middle;
                                        padding-left: 42px;
                                        padding-right: 42px;
                                        font-size: 14px;
                                        font-weight: bold;
                                        /* Use the Roboto font that is loaded in the <head> */
                                        font-family: 'Roboto', sans-serif;
                                    }
                                </style>

                                <!-- In the callback, you would hide the gSignInWrapper element on a
                                successful sign in -->
                                <div id="gSignInWrapper">
                                    <span class="label"></span>
                                    <div id="customBtn" class="customGPlusSignIn">
                                        <img src="images/Google plus round.png" style="margin:5px;width: 30px;height: 30px;" />
                                        <div style="margin-top: -30px;margin-left: 50px;">
                                            <?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_14("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_14("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                Sign in with Gmail
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <!--
                                <img src="" id="myImage" style="width: 200px;height: 200px" />
                                <div id="name"></div>-->
                                <script>
                                    startApp();
                                </script>


                            </td>
                            <td><!--<div style="width: 200px;height:40px;background: #0084b4;border-radius: 7px;color: white;" ><img src="images/twitter_.png" style="margin:5px;width: 30px;height: 30px;" />
                            <div style="margin-top: -30px;margin-left: 50px;">
                            Sign in with Twitter
                            </div>
                            </div>--></td>
                        </tr>
                    </table>

                </div>
                <div>
                    <table>
                        <tr>
                            <td><h4>
                                    <?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_15("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_15("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        First Name
                                    <?php } ?>
                                    <span style='color: red;'>*</span></h4>
                                <table>
                                    <tr>
                                        <td>
                                            <input class="accountRegPuts" id="home_individual_fname" type="text" />
                                        </td>
                                        <td><div style="min-width: 20px"><div class="loader_span" id="home_individual_fname_wait" style="position: absolute;"></div><div id="home_individual_fname_failed" style="position: absolute;color: red;">&#10008;</div><div id="home_individual_fname_okay" style="position: absolute;color: green">&#10004;</div></div></td>
                                    </tr>
                                </table></td>
                            <td><h4 style="text-align: center;">
                                    <?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_16("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_16("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        Last Name
                                    <?php } ?>
                                    <span style='color: red;'>*</span></h4>
                                <table>
                                    <tr>
                                        <td>
                                            <input class="accountRegPuts" id="home_individual_lname" type="text" />
                                        </td>
                                        <td><div style="min-width: 20px"><div class="loader_span" id="home_individual_lname_wait" style="position: absolute;"></div><div id="home_individual_lname_failed" style="position: absolute;color: red;">&#10008;</div><div id="home_individual_lname_okay" style="position: absolute;color: green">&#10004;</div></div></td>
                                    </tr>
                                </table></td>

                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td><h4>
                                    <?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_17("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_17("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        Birthdate
                                    <?php } ?>
                                    <span style='color: red;'>*</span></h4>
                                <table>
                                    <tr>
                                        <td>
                                            <input class="accountRegPuts" id="pickBirthDay" type="text" />
                                        </td>
                                        <td><div style="min-width: 20px"><div class="loader_span" id="pickBirthDay_wait" style="position: absolute;"></div><div id="pickBirthDay_failed" style="position: absolute;color: red;">&#10008;</div><div id="pickBirthDay_okay" style="position: absolute;color: green">&#10004;</div></div></td>
                                    </tr>
                                </table></td>

                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td><h4>
                                    <?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_18("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_18("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        Gender
                                    <?php } ?>
                                    <span style='color: red;'></span></h4>
                                <table>
                                    <tr>
                                        <td>
                                            <select id="home_individual_gender" class="accountRegPuts">                                        
                                                <option value="male"><?php
                                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_19("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_19("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                    } else {
                                                        ?>
                                                        Male
                                                    <?php } ?>
                                                </option>
                                                <option value="female"><?php
                                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_20("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_20("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                    } else {
                                                        ?>
                                                        Female
                                                    <?php } ?></option>
                                            </select></td>
                                    </tr>
                                </table></td>
                            <td><div style="min-width: 20px"><div class="loader_span" id="home_individual_gender_wait" style="position: absolute;"></div><div id="home_individual_gender_failed" style="position: absolute;color: red;">&#10008;</div><div id="home_individual_gender_okay" style="position: absolute;color: green">&#10004;</div></div></td>


                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td><h4><?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_21("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_21("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        Profession
                                    <?php } ?><span style='color: red;'>*</span></h4>
                                <table>
                                    <tr>
                                        <td>
                                            <input id="home_individual_profession" class="accountRegPuts"  type="text" />
                                        </td>
                                        <td><div style="min-width: 20px"><div class="loader_span" id="home_individual_profession_wait" style="position: absolute;"></div><div id="home_individual_profession_failed" style="position: absolute;color: red;">&#10008;</div><div id="home_individual_profession_okay" style="position: absolute;color: green">&#10004;</div></div></td>

                                    </tr>
                                </table></td>

                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td><h4 style="text-align: center;"><?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_44("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_44("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        Username
                                    <?php } ?></h4>
                                <table>
                                    <tr>
                                        <td>
                                            <input onkeydown="individualUser_nds_validate_Username(this)" onchange="individualUser_nds_validate_Username(this)" id="home_individual_username" class="accountRegPuts_small_" type="text" />
                                        </td>
                                        <td><div style="min-width: 20px"><div class="loader_span" id="home_individual_username_wait" style="position: absolute;"></div><div id="home_individual_username_failed" style="position: absolute;color: red;">&#10008;</div><div id="home_individual_username_okay" style="position: absolute;color: green">&#10004;</div></div></td>

                                    </tr>
                                </table></td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td><h4><?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_22("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_22("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        Marital Status
                                    <?php } ?></span></h4>
                                <table>
                                    <tr>
                                        <td>
                                            <select class="accountRegPuts" id="home_individual_marital_status" type="text" >
                                                <option value="single"><?php
                                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_23("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_23("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                    } else {
                                                        ?>
                                                        Single
                                                    <?php } ?></option>
                                                <option value="married"><?php
                                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_24("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_24("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                    } else {
                                                        ?>
                                                        Married
                                                    <?php } ?></option>
                                                <option value="divorced"><?php
                                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_25("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_25("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                    } else {
                                                        ?>
                                                        Divorced
                                                    <?php } ?></option>
                                                <option value="widow"><?php
                                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_26("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_26("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                    } else {
                                                        ?>
                                                        Widow
                                                    <?php } ?></option>
                                                <option value="widower"><?php
                                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_27("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_27("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                    } else {
                                                        ?>
                                                        widower
                                                    <?php } ?></option>

                                            </select></td>
                                        <td><div style="min-width: 20px"><div class="loader_span" id="home_individual_marital_status_wait" style="position: absolute;"></div><div id="home_individual_marital_status_failed" style="position: absolute;color: red;">&#10008;</div><div id="home_individual_marital_status_okay" style="position: absolute;color: green">&#10004;</div></div></td>

                                    </tr>
                                </table></td>

                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td><h4>
                                    <?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_28("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_28("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        Province
                                    <?php } ?><span style='color: red;'>*</span></h4>
                                <table>
                                    <tr>
                                        <td>
                                            <input class="accountRegPuts_small" id="home_individual_province" type="text" />
                                        </td>
                                        <td><div style="min-width: 20px"><div class="loader_span" id="home_individual_province_wait" style="position: absolute;"></div><div id="home_individual_province_failed" style="position: absolute;color: red;">&#10008;</div><div id="home_individual_province_okay" style="position: absolute;color: green">&#10004;</div></div></td>

                                    </tr>
                                </table></td>
                            <td><h4 style="text-align: center;"><?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_29("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_29("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        District
                                    <?php } ?><span style='color: red;'>*</span></h4>
                                <table>
                                    <tr>
                                        <td>
                                            <input id="home_individual_district" class="accountRegPuts_small" type="text" />
                                        </td>
                                        <td><div style="min-width: 20px"><div class="loader_span" id="home_individual_district_wait" style="position: absolute;"></div><div id="home_individual_district_failed" style="position: absolute;color: red;">&#10008;</div><div id="home_individual_district_okay" style="position: absolute;color: green">&#10004;</div></div></td>


                                    </tr>
                                </table></td>
                            <td><h4 style="text-align: center;"><?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_30("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_30("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        Sector
                                    <?php } ?><span style='color: red;'>*</span></h4>
                                <table>
                                    <tr>
                                        <td>
                                            <input id="home_individual_sector" class="accountRegPuts_small" type="text" />
                                        </td>
                                        <td><div style="min-width: 20px"><div class="loader_span" id="home_individual_sector_wait" style="position: absolute;"></div><div id="home_individual_sector_failed" style="position: absolute;color: red;">&#10008;</div><div id="home_individual_sector_okay" style="position: absolute;color: green">&#10004;</div></div></td>

                                    </tr>
                                </table></td>

                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td><h4><?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_31("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_31("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        Email address
                                    <?php } ?><span style='color: red;'>*</span></h4>
                                <table>
                                    <tr>
                                        <td>
                                            <input onkeydown="individualUser_nds_validate_Email(this)" onchange="individualUser_nds_validate_Email(this)" id="home_individual_email_add" class="accountRegPuts" type="email" />
                                        </td>
                                        <td><div style="min-width: 20px"><div class="loader_span" id="home_individual_email_add_wait" style="position: absolute;"></div><div id="home_individual_email_add_failed" style="position: absolute;color: red;">&#10008;</div><div id="home_individual_email_add_okay" style="position: absolute;color: green">&#10004;</div></div></td>


                                    </tr>
                                </table></td>
                            <td><h4 style="text-align: center;"><?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_32("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_32("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        Password
                                    <?php } ?><span style='color: red;'>*</span></h4>
                                <table>
                                    <tr>
                                        <td>
                                            <input onkeyup="individualUser_nds_validate_Passwords(this)" onkeyup="individualUser_nds_validate_Passwords(this)" class="accountRegPuts" id="home_individual_password" type="password" />
                                        </td>
                                        <td><div style="min-width: 20px"><div class="loader_span" id="home_individual_password_wait" style="position: absolute;"></div><div id="home_individual_password_failed" style="position: absolute;color: red;">&#10008;</div><div id="home_individual_password_okay" style="position: absolute;color: green">&#10004;</div></div></td>



                                    </tr>
                                </table></td>
                            <td><h4 style="text-align: center;"><?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_33("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_33("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        confirm password
                                    <?php } ?><span style='color: red;'>*</span></h4>
                                <table>
                                    <tr>
                                        <td>
                                            <input onkeyup="individualUser_nds_validate_Passwords(this)" onchange="individualUser_nds_validate_Passwords(this)" id="home_individual_password_retype" class="accountRegPuts" type="password" />
                                        </td>
                                        <td><div style="min-width: 20px"><div class="loader_span" id="home_individual_password_retype_wait" style="position: absolute;"></div><div id="home_individual_password_retype_failed" style="position: absolute;color: red;">&#10008;</div><div id="home_individual_password_retype_okay" style="position: absolute;color: green">&#10004;</div></div></td>

                                    </tr>
                                </table></td>

                        </tr>
                    </table>

                    <table>
                        <tr>

                            <td><h4 style="text-align: center;"><?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_34("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_34("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        Phone
                                    <?php } ?><span style='color: red;'>*</span></h4>
                                <table>
                                    <tr>
                                        <td>
                                            <input type="text" maxlength="12" onchange="individualUser_nds_validate_Phone(this, event)" onkeydown="individualUser_nds_validate_Phone(this, event)" id="home_individual_phone" class="accountRegPuts" placeholder="250786464464"  />
                                        </td>
                                        <td><div style="min-width: 20px"><div class="loader_span" id="home_individual_phone_wait" style="position: absolute;"></div><div id="home_individual_phone_failed" style="position: absolute;color: red;">&#10008;</div><div id="home_individual_phone_okay" style="position: absolute;color: green">&#10004;</div></div></td>


                                    </tr>
                                </table></td>

                        </tr>
                    </table>
                    <div style="float: right;margin-right: 40px;margin-top: 40px;margin-bottom: 20px;">
                        <input id="btnReg" onclick="create_individual_account_nds()" type="button" style="text-align: center;color: white;padding: 8px;width: 150px;background: #3399FF;" value="<?php
                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_35("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_35("system_config_xml/" . $_global_language)->item(0)->textContent;
                        } else {
                            ?>
                                   Register
                               <?php } ?>" />
                        <input onclick="clearTheIndividualFields()" id="home_individual_clear_form" type="button" style="border-style:none;text-align: center;padding: 8px;width: 150px;" value="<?php
                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_36("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_36("system_config_xml/" . $_global_language)->item(0)->textContent;
                        } else {
                            ?>
                                   Clear
                               <?php } ?>" />
                    </div>

                </div>
            </div>
            <div id="institution_claim" style="width: 80%;min-height:50%;border:1px solid black;border-radius: 7px;margin-left: 10%;">

                <div>
                    <table>
                        <tr>
                            <td><h4><?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_37("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_37("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        Institution
                                    <?php } ?></h4>
                                <table>
                                    <tr>
                                        <td>
                                            <input id="home_institution_institution" class="accountRegPuts" type="text" />
                                        </td>
                                        <td><div style="min-width: 20px"><div class="loader_span" id="home_institution_institution_wait" style="position: absolute;"></div><div id="home_institution_institution_failed" style="position: absolute;color: red;">&#10008;</div><div id="home_institution_institution_okay" style="position: absolute;color: green">&#10004;</div></div></td>

                                    </tr>
                                </table></td>
                            <td><h4 style="text-align: center;"><?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_38("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_38("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        Website
                                    <?php } ?></h4>
                                <table>
                                    <tr>
                                        <td>
                                            <input onkeyup="institutionUser_nds_validate_Website(this)" onchange="institutionUser_nds_validate_Website(this)" id="home_institution_website" class="accountRegPuts" type="text" />
                                        </td>
                                        <td><div style="min-width: 20px"><div class="loader_span" id="home_institution_website_wait" style="position: absolute;"></div><div id="home_institution_website_failed" style="position: absolute;color: red;">&#10008;</div><div id="home_institution_website_okay" style="position: absolute;color: green">&#10004;</div></div></td>


                                    </tr>
                                </table></td>
                            <td><h4 style="text-align: center;"><?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_39("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_39("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        info email address
                                    <?php } ?></h4>
                                <table>
                                    <tr>
                                        <td>
                                            <input onkeydown="institutionUser_nds_validate_Email(this)" onchange="institutionUser_nds_validate_Email(this)" id="home_institution_info_email" class="accountRegPuts" type="text"  />
                                        </td>
                                        <td><div style="min-width: 20px"><div class="loader_span" id="home_institution_info_email_wait" style="position: absolute;"></div><div id="home_institution_info_email_failed" style="position: absolute;color: red;">&#10008;</div><div id="home_institution_info_email_okay" style="position: absolute;color: green">&#10004;</div></div></td>

                                    </tr>
                                </table></td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td><h4><?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_40("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_40("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        Province
                                    <?php } ?></h4>
                                <table>
                                    <tr>
                                        <td>
                                            <input id="home_institution_province" class="accountRegPuts_small" type="text" />
                                        </td>
                                        <td><div style="min-width: 20px"><div class="loader_span" id="home_institution_province_wait" style="position: absolute;"></div><div id="home_institution_province_failed" style="position: absolute;color: red;">&#10008;</div><div id="home_institution_province_okay" style="position: absolute;color: green">&#10004;</div></div></td>


                                    </tr>
                                </table></td>
                            <td><h4 style="text-align: center;"><?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_41("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_41("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        District
                                    <?php } ?></h4>
                                <table>
                                    <tr>
                                        <td>
                                            <input id="home_institution_district" class="accountRegPuts_small" type="text" />
                                        </td>
                                        <td><div style="min-width: 20px"><div class="loader_span" id="home_institution_district_wait" style="position: absolute;"></div><div id="home_institution_district_failed" style="position: absolute;color: red;">&#10008;</div><div id="home_institution_district_okay" style="position: absolute;color: green">&#10004;</div></div></td>



                                    </tr>
                                </table></td>
                            <td><h4 style="text-align: center;"><?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_42("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_42("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        Sector
                                    <?php } ?></h4>
                                <table>
                                    <tr>
                                        <td>
                                            <input id="home_institution_sector" class="accountRegPuts_small" type="text"  />
                                        </td>
                                        <td><div style="min-width: 20px"><div class="loader_span" id="home_institution_sector_wait" style="position: absolute;"></div><div id="home_institution_sector_failed" style="position: absolute;color: red;">&#10008;</div><div id="home_institution_sector_okay" style="position: absolute;color: green">&#10004;</div></div></td>


                                    </tr>
                                </table></td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td><h4><?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_43("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_43("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        Motto
                                    <?php } ?></h4>
                                <table>
                                    <tr>
                                        <td>                                    <textarea id="home_institution_motto" onkeyup="textAreaAdjust(this)" class="accountRegPuts_small_" style="height: 60px;" type="text" ></textarea></td>
                                        <td><div style="min-width: 20px"><div class="loader_span" id="home_institution_motto_wait" style="position: absolute;"></div><div id="home_institution_motto_failed" style="position: absolute;color: red;">&#10008;</div><div id="home_institution_motto_okay" style="position: absolute;color: green">&#10004;</div></div></td>


                                    </tr>
                                </table></td>
                            <td><h4 style="text-align: center;"><?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_44("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_44("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        Username
                                    <?php } ?></h4>
                                <table>
                                    <tr>
                                        <td>
                                            <input onkeydown="institutionUser_nds_validate_Username(this)" onchange="institutionUser_nds_validate_Username(this)" id="home_institution_username" class="accountRegPuts_small_" type="text" />
                                        </td>
                                        <td><div style="min-width: 20px"><div class="loader_span" id="home_institution_username_wait" style="position: absolute;"></div><div id="home_institution_username_failed" style="position: absolute;color: red;">&#10008;</div><div id="home_institution_username_okay" style="position: absolute;color: green">&#10004;</div></div></td>



                                    </tr>
                                </table></td>

                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td><h4><?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_45("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_45("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        Password
                                    <?php } ?></h4>
                                <table>
                                    <tr>
                                        <td>
                                            <input onkeyup="institutionUser_nds_validate_Passwords(this)" onchange="institutionUser_nds_validate_Passwords(this)" id="home_institution_password" class="accountRegPuts_small" type="password" />
                                        </td>
                                        <td><div style="min-width: 20px"><div class="loader_span" id="home_institution_password_wait" style="position: absolute;"></div><div id="home_institution_password_failed" style="position: absolute;color: red;">&#10008;</div><div id="home_institution_password_okay" style="position: absolute;color: green">&#10004;</div></div></td>


                                    </tr>
                                </table></td>
                            <td><h4 style="text-align: center;"><?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_46("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_46("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        Confirm password
                                    <?php } ?></h4>
                                <table>
                                    <tr>
                                        <td>
                                            <input onkeyup="institutionUser_nds_validate_Passwords(this)" onchange="institutionUser_nds_validate_Passwords(this)" id="home_institution_password_retype" class="accountRegPuts_small" type="password" />
                                        </td>
                                        <td><div style="min-width: 20px"><div class="loader_span" id="home_institution_password_retype_wait" style="position: absolute;"></div><div id="home_institution_password_retype_failed" style="position: absolute;color: red;">&#10008;</div><div id="home_institution_password_retype_okay" style="position: absolute;color: green">&#10004;</div></div></td>


                                    </tr>
                                </table></td>

                        </tr>
                    </table>
                    <div style="float: right;margin-right: 40px;margin-top: 40px;margin-bottom: 20px;">
                        <input onclick="create_institution_account_nds()" id="home_institution_register" type="button" style="border-style:none;text-align: center;color: white;padding: 8px;width: 150px;background: #3399FF;" value="<?php
                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_47("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_47("system_config_xml/" . $_global_language)->item(0)->textContent;
                        } else {
                            ?>
                                   Register
                               <?php } ?>" />
                        <input onclick="clearTheInstitutionFields()" id="home_institution_clear" type="button" style="border-style:none;text-align: center;padding: 8px;width: 150px;" value="<?php
                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_48("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_48("system_config_xml/" . $_global_language)->item(0)->textContent;
                        } else {
                            ?>
                                   Clear
                               <?php } ?>" />
                    </div>
                </div>
            </div>
            <div id="officials_claim" style="width: 80%;min-height:50%;border:1px solid black;border-radius: 7px;margin-left: 10%;">
                <div>
                    <table>
                        <tr>
                            <td><h4><?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_50("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_50("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        First Name
                                    <?php } ?></h4>
                                <table>
                                    <tr>
                                        <td>
                                            <input id="home_official_fname" class="accountRegPuts" type="text" />
                                        </td>
                                        <td><div style="min-width: 20px"><div class="loader_span" id="home_official_fname_wait" style="position: absolute;"></div><div id="home_official_fname_failed" style="position: absolute;color: red;">&#10008;</div><div id="home_official_fname_okay" style="position: absolute;color: green">&#10004;</div></div></td>



                                    </tr>
                                </table></td>
                            <td><h4 style="text-align: center;"><?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_51("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_51("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        Last Name
                                    <?php } ?></h4>
                                <table>
                                    <tr>
                                        <td>
                                            <input id="home_official_lname" class="accountRegPuts" type="text" />
                                        </td>
                                        <td><div style="min-width: 20px"><div class="loader_span" id="home_official_lname_wait" style="position: absolute;"></div><div id="home_official_lname_failed" style="position: absolute;color: red;">&#10008;</div><div id="home_official_lname_okay" style="position: absolute;color: green">&#10004;</div></div></td>




                                    </tr>
                                </table></td>

                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td><h4 style="text-align: center;"><?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_44("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_44("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        Username
                                    <?php } ?></h4>
                                <table>
                                    <tr>
                                        <td>
                                            <input onkeydown="officialUser_nds_validate_Username(this)" onchange="officialUser_nds_validate_Username(this)" id="home_official_username" class="accountRegPuts_small_" type="text" />
                                        </td>
                                        <td><div style="min-width: 20px"><div class="loader_span" id="home_official_username_wait" style="position: absolute;"></div><div id="home_official_username_failed" style="position: absolute;color: red;">&#10008;</div><div id="home_official_username_okay" style="position: absolute;color: green">&#10004;</div></div></td>





                                    </tr>
                                </table></td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td><h4><?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_52("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_52("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        Marital Status
                                    <?php } ?></span></h4>
                                <table>
                                    <tr>
                                        <td>
                                            <select id="home_official_marital_status" class="accountRegPuts" type="text" >
                                                <option value="single"><?php
                                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_53("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_53("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                    } else {
                                                        ?>
                                                        Single
                                                    <?php } ?></option>
                                                <option value="married"><?php
                                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_54("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_54("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                    } else {
                                                        ?>
                                                        Married
                                                    <?php } ?></option>
                                                <option value="divorced"><?php
                                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_55("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_55("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                    } else {
                                                        ?>
                                                        Divorced
                                                    <?php } ?></option>
                                                <option value="widow"><?php
                                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_56("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_56("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                    } else {
                                                        ?>
                                                        Widow
                                                    <?php } ?></option>
                                                <option value="widower"><?php
                                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_57("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_57("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                    } else {
                                                        ?>
                                                        widower
                                                    <?php } ?></option>

                                            </select></td>
                                    </tr>
                                </table></td>
                            <td><div style="min-width: 20px"><div class="loader_span" id="home_official_marital_status_wait" style="position: absolute;"></div><div id="home_official_marital_status_failed" style="position: absolute;color: red;">&#10008;</div><div id="home_official_marital_status_okay" style="position: absolute;color: green">&#10004;</div></div></td>







                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td>
                                <h4><?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_58("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_58("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        Gender
                                    <?php } ?><span style='color: red;'></span></h4>
                                <table>
                                    <tr>
                                        <td>
                                            <select id="home_official_gender" class="accountRegPuts">
                                                <option value="male"><?php
                                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_59("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_59("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                    } else {
                                                        ?>
                                                        Male
                                                    <?php } ?></option>
                                                <option value="female"><?php
                                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_60("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_60("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                    } else {
                                                        ?>
                                                        Female
                                                    <?php } ?></option>
                                            </select></td>
                                    </tr>
                                </table></td>
                            <td><div style="min-width: 20px"><div class="loader_span" id="home_official_gender_wait" style="position: absolute;"></div><div id="home_official_gender_failed" style="position: absolute;color: red;">&#10008;</div><div id="home_official_gender_okay" style="position: absolute;color: green">&#10004;</div></div></td>







                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td><h4><?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_61("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_61("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        Institution
                                    <?php } ?></h4>
                                <table>
                                    <tr>
                                        <td>
                                            <select id="home_official_institution_0000" class="accountRegPuts" >

                                                <?php
                                                require_once ("includes/conn/config.php");
                                                ?>
                                                <?php
                                                require_once ("includes/classes/database.php");
                                                ?>
                                                <?php
                                                $sql_home_institu = "SELECT * FROM  ogenius_nds_db_community WHERE     ogenius_nds_db_community_institution_deal_status='1' ORDER BY     ogenius_nds_db_community_institution_name ASC";
                                                if ($query_home_institu = $database->query($sql_home_institu)) {
//---------------------
                                                    while ($res_home_institu = mysqli_fetch_array($query_home_institu)) {
                                                        ?>
                                                        <option value="<?php echo "" . $res_home_institu['ogenius_nds_db_community_institution_name']; ?>"><?php echo "" . $res_home_institu['ogenius_nds_db_community_institution_name']; ?></option>

                                                        <?php
                                                    }
                                                }
                                                ?>

                                            </select></td>
                                        <td><div style="min-width: 20px"><div class="loader_span" id="home_official_institution_0000_wait" style="position: absolute;"></div><div id="home_official_institution_0000_failed" style="position: absolute;color: red;">&#10008;</div><div id="home_official_institution_0000_okay" style="position: absolute;color: green">&#10004;</div></div></td>




                                    </tr>
                                </table></td>
                            <td><h4 style="text-align: center;"><?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_62("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_62("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        Department
                                    <?php } ?></h4>
                                <table>
                                    <tr>
                                        <td>
                                            <input id="home_official_department" class="accountRegPuts_small" type="text" />
                                        </td>
                                        <td><div style="min-width: 20px"><div class="loader_span" id="home_official_department_wait" style="position: absolute;"></div><div id="home_official_department_failed" style="position: absolute;color: red;">&#10008;</div><div id="home_official_department_okay" style="position: absolute;color: green">&#10004;</div></div></td>



                                    </tr>
                                </table></td>
                            <td><h4 style="text-align: center;"><?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_63("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_63("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        Position
                                    <?php } ?></h4>
                                <table>
                                    <tr>
                                        <td>
                                            <input id="home_official_position" class="accountRegPuts_small" type="text"  />
                                        </td>
                                        <td><div style="min-width: 20px"><div class="loader_span" id="home_official_position_wait" style="position: absolute;"></div><div id="home_official_position_failed" style="position: absolute;color: red;">&#10008;</div><div id="home_official_position_okay" style="position: absolute;color: green">&#10004;</div></div></td>




                                    </tr>
                                </table></td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td><h4><h4 style="text-align: center;"><?php
                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_64("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_64("system_config_xml/" . $_global_language)->item(0)->textContent;
                                        } else {
                                            ?>
                                            Office location:
                                        <?php } ?></h4></td>
                        </tr>
                    </table>

                    <table>
                        <tr>
                            <td><h4><?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_65("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_65("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        Province
                                    <?php } ?></h4>
                                <table>
                                    <tr>
                                        <td>
                                            <input id="home_official_province" class="accountRegPuts_small_"  type="text" >
                                        </td>
                                        <td><div style="min-width: 20px"><div class="loader_span" id="home_official_province_wait" style="position: absolute;"></div><div id="home_official_province_failed" style="position: absolute;color: red;">&#10008;</div><div id="home_official_province_okay" style="position: absolute;color: green">&#10004;</div></div></td>



                                    </tr>
                                </table></td>
                            <td><h4 style="text-align: center;"><?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_66("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_66("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        District
                                    <?php } ?></h4>
                                <table>
                                    <tr>
                                        <td>
                                            <input id="home_official_district" class="accountRegPuts_small_" type="text" />
                                        </td>
                                        <td><div style="min-width: 20px"><div class="loader_span" id="home_official_district_wait" style="position: absolute;"></div><div id="home_official_district_failed" style="position: absolute;color: red;">&#10008;</div><div id="home_official_district_okay" style="position: absolute;color: green">&#10004;</div></div></td>



                                    </tr>
                                </table></td>
                            </td>
                            <td><h4 style="text-align: center;"><?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_67("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_67("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        Sector
                                    <?php } ?></h4>
                                <table>
                                    <tr>
                                        <td>
                                            <input id="home_official_sector" class="accountRegPuts_small_" type="text" />
                                        </td>
                                        <td><div style="min-width: 20px"><div class="loader_span" id="home_official_sector_wait" style="position: absolute;"></div><div id="home_official_sector_failed" style="position: absolute;color: red;">&#10008;</div><div id="home_official_sector_okay" style="position: absolute;color: green">&#10004;</div></div></td>



                                    </tr>
                                </table></td>

                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td><h4><?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_68("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_68("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        Work phone
                                    <?php } ?></h4>
                                <table>
                                    <tr>
                                        <td>
                                            <input maxlength="12" onkeydown="officialUser_nds_validate_Phone(this, event)" onchange="officialUser_nds_validate_Phone(this, event)" class="accountRegPuts_small" id="home_official_work_nber"  placeholder="250786464464" type="tel" />
                                        </td>
                                        <td><div style="min-width: 20px"><div class="loader_span" id="home_official_work_nber_wait" style="position: absolute;"></div><div id="home_official_work_nber_failed" style="position: absolute;color: red;">&#10008;</div><div id="home_official_work_nber_okay" style="position: absolute;color: green">&#10004;</div></div></td>



                                    </tr>
                                </table></td>
                            <td><h4 style="text-align: center;"><?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_69("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_69("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        Company  address mail
                                    <?php } ?></h4>
                                <table>
                                    <tr>
                                        <td>
                                            <input onkeydown="officialUser_nds_validate_Email(this)" onchange="officialUser_nds_validate_Email(this)" id="home_official_company_address_mail" class="accountRegPuts_small" type="text" />
                                        </td>
                                        <td><div style="min-width: 20px"><div class="loader_span" id="home_official_company_address_mail_wait" style="position: absolute;"></div><div id="home_official_company_address_mail_failed" style="position: absolute;color: red;">&#10008;</div><div id="home_official_company_address_mail_okay" style="position: absolute;color: green">&#10004;</div></div></td>



                                    </tr>
                                </table></td>

                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td><h4><?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_70("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_70("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        Password
                                    <?php } ?></h4>
                                <table>
                                    <tr>
                                        <td>
                                            <input onkeyup="officialUser_nds_validate_Passwords(this)" onchange="officialUser_nds_validate_Passwords(this)" id="home_official_password" class="accountRegPuts_small" type="password" />
                                        </td>
                                        <td><div style="min-width: 20px"><div class="loader_span" id="home_official_password_wait" style="position: absolute;"></div><div id="home_official_password_failed" style="position: absolute;color: red;">&#10008;</div><div id="home_official_password_okay" style="position: absolute;color: green">&#10004;</div></div></td>


                                    </tr>
                                </table></td>
                            <td><h4 style="text-align: center;"><?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_71("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_71("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        confirm password
                                    <?php } ?></h4>
                                <table>
                                    <tr>
                                        <td>
                                            <input onkeyup="officialUser_nds_validate_Passwords(this)" onchange="officialUser_nds_validate_Passwords(this)" id="home_official_password_retype" class="accountRegPuts_small" type="password" />
                                        </td>
                                        <td><div style="min-width: 20px"><div class="loader_span" id="home_official_password_retype_wait" style="position: absolute;"></div><div id="home_official_password_retype_failed" style="position: absolute;color: red;">&#10008;</div><div id="home_official_password_retype_okay" style="position: absolute;color: green">&#10004;</div></div></td>


                                    </tr>
                                </table></td>

                        </tr>
                    </table>
                    <div style="float: right;margin-right: 40px;margin-top: 40px;margin-bottom: 20px;">
                        <input onclick="create_institution_official_account_nds()" id="home_official_register_button" type="button" style="border-style:none;text-align: center;color: white;padding: 8px;width: 150px;background: #3399FF;" value="<?php
                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_72("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_72("system_config_xml/" . $_global_language)->item(0)->textContent;
                        } else {
                            ?>
                                   Register
                               <?php } ?>" />
                        <input onclick="clearTheOfficialFields()" id="home_official_clear_btn" type="button" style="border-style:none;text-align: center;padding: 8px;width: 150px;" value="<?php
                               if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_73("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                   echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_73("system_config_xml/" . $_global_language)->item(0)->textContent;
                               } else {
                                   ?>
                                   Clear
                               <?php } ?>" />
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<?php
require_once 'includes/footer.php';
?>

<script src="jquery/jquery.js" type="text/javascript"></script>
<script src="js/ajax.js" type="text/javascript"></script>
<script src="jquery/special_ui/jquery-ui.js" type="text/javascript"></script>
<script src="js/nds_main.js" type="text/javascript"></script>
<!-- Date picker -->
<script type="text/javascript" src="jquery/ui_datepicker_lib/jquery.timepicker.js"></script>
<link rel="stylesheet" type="text/css" href="jquery/ui_datepicker_lib/jquery.timepicker.css" />
<script type="text/javascript" src="jquery/ui_datepicker_lib/lib/bootstrap-datepicker.js"></script>
<link rel="stylesheet" type="text/css" href="jquery/ui_datepicker_lib/lib/bootstrap-datepicker.css" />
<script type="text/javascript" src="jquery/ui_datepicker_lib/lib/site.js"></script>

</body>

</html>