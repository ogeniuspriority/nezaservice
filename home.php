
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
require_once 'includes/header.php';
?>
<div class="container1">
    <input type="hidden" id="home_page_2017" />
    <?php
    require_once ("includes/conn/config.php");
    ?>
    <?php
    require_once ("includes/classes/database.php");
    ?>
    <?php
//            $sql_home_gallery_img_ = "SELECT * FROM  ogenius_nds_db_home_page_gallery WHERE     ogenius_nds_db_home_page_gallery_active='1' ORDER BY     ogenius_nds_db_home_page_gallery_id DESC LIMIT 1";
//            if ($query_home_gallery_img_ = $database->query($sql_home_gallery_img_)) {
////---------------------
//                while ($res_home_gallery_img_ = mysqli_fetch_array($query_home_gallery_img_)) {
//                    
    ?>
    <div class="showoff" style="background-image: url(homePage_images///<?php echo "" . $res_home_gallery_img_['ogenius_nds_db_home_page_gallery_image']; ?>);background-repeat: no-repeat;background-size: cover;background-position: center;">
        <?php
//                    }
//                }
        ?>
        <nav id="homenav" class="navbar navbar-default navbar-inverse navbar-static-top">
            <div class="container">

                <div class="navbar-header">

                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span> 
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span> 
                        <span class="icon-bar"></span> 
                    </button>

                    <a class="navbar-brand centerrow" href="#"> <img class="image24" src="system_images/nds_logo.png">&nbsp;NDS </a> 


                </div>


                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <form method="post" id="loginForm" class="navbar-form navbar-right">

                        <div class="form-group"> 
                            <label for="loginEmail"><?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_4("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_4("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                    Username
                                <?php } ?>
                            </label>
                            <input onkeyup="renew_nds_this(this)" onchange="renew_nds_this(this)" id="login_panel_username" class="form-control" placeholder="<?php
                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_4("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_4("system_config_xml/" . $_global_language)->item(0)->textContent;
                            } else {
                                ?>
                                       Username
                                   <?php } ?>" type="text"/>
                        </div> 
                        <div class="form-group"> 
                            <label for="loginPassword"><?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_5("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_5("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                    password
                                <?php } ?></label> 
                            <input onkeyup="renew_nds_this(this)" onchange="renew_nds_this(this)" id="login_panel_password" class="form-control" placeholder="<?php
                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_5("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_5("system_config_xml/" . $_global_language)->item(0)->textContent;
                            } else {
                                ?>
                                       password
                                   <?php } ?>" type="password" />
                        </div> 

                        <input class="accountRegPuts_btn btn btn-primary" value="<?php
                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_6("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_6("system_config_xml/" . $_global_language)->item(0)->textContent;
                        } else {
                            ?>
                                   Sign In
                               <?php } ?>" onclick="logInToThePlatform()" type="button" />
                    </form>
                </div>
            </div>
        </nav>


        <div class="covering centercolumnspace">
            <div class="gettoknow">
                <div class="jumbotron home_upper_bg" style="padding: 5em inherit;min-height: 450px!important;">


                    <div class="container-fluid">

                        <h1>Neza Digital Service</h1>
                        <p><?php
                            $sql_upper_text = "SELECT * FROM  ogenius_nds_home_upper_text WHERE  ogenius_nds_home_upper_text_visibility='1' ORDER BY ogenius_nds_home_upper_text_id DESC LIMIT 1";
                            if ($query_upper_text = $database->query($sql_upper_text)) {
//---------------------
                                while ($res_upper_text = mysqli_fetch_array($query_upper_text)) {
                                    ?>
                                    <?php echo "" . $res_upper_text['ogenius_nds_home_upper_text_text']; ?>
                                    <?php
                                }
                            }
                            ?></p><p><a class="btn btn-primary" onclick="pullhomevideo();"><?php
                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_75("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_75("system_config_xml/" . $_global_language)->item(0)->textContent;
                            } else {
                                ?>
                                    Watch video
                                <?php } ?></a></p>
                    </div>
                </div>


                <script>
                    function pullhomevideo() {

                        $('#home-video').addClass("slideUp");
                    }
                         
                            function pushhomevideo() {
                                $('#home-video').removeClass("slideUp");
                            }
                </script>

                <div id="home-video" class="centercolumn col-md-12">
                    <button class="btn btn-danger"onclick="pushhomevideo();">&times;</button>
                    <div style="position: absolute;cursor: pointer;">
                        <input type="hidden" id="videoPlayerStatus" value="play" />
                        <img src="images/bigplay.png" id="togglePlayPause" style="width: 50px;height: 50px;border-radius: 3px;" />
                    </div>
                    <?php
                    $sql_video_xx_0 = "SELECT * FROM  ogenius_nds_videos WHERE        ogenius_nds_videos_status='1' ORDER BY    ogenius_nds_videos_id DESC LIMIT 1";
                    if ($query_video_xx_0 = $database->query($sql_video_xx_0)) {
//---------------------
                        while ($res_video_xx_0 = mysqli_fetch_array($query_video_xx_0)) {
                            ?>
                            <video id="video_win" class="fullimage" preload  src="global_vids/<?php echo "" . $res_video_xx_0['ogenius_nds_videos_video_name']; ?>"></video>
                            <?php
                        }
                    }
                    ?>

                </div>
                <div class="container" style="">
                    <!-- Example row of columns -->
                    <div class="row" style="">

                        <div class="col-md-4">
                            <h2>
                                <?php

                                //-----------
                                function return_lan_settings_name($session) {


                                    require_once ("includes/conn/config.php");

                                    require_once ("includes/classes/database.php");
                                    $database = new mysqldatabase();

                                    $ret = "";
                                    $sql_upper_text_ = "SELECT * FROM  ogenius_nds_languages_for_settings WHERE ogenius_nds_languages_for_settings_language_file_name LIKE'%$session%'  ORDER BY  ogenius_nds_languages_for_settings_id DESC LIMIT 1";
                                    if ($query_upper_text_ = $database->query($sql_upper_text_)) {
//---------------------
                                        while ($res_upper_text_ = mysqli_fetch_array($query_upper_text_)) {
                                            $ret = $res_upper_text_['ogenius_nds_languages_for_settings_name_of_language'];
                                            ?>


                                            <?php
                                        }
                                    }

                                    return $ret;
                                }

                                //------
                                ?>
                                <?php
                                $language_name_20171 = return_lan_settings_name($_SESSION["NDS_OGENIUS_session_lan"]);

                                $sql_upper_text = "SELECT * FROM  ogenius_nds_heading1 WHERE ogenius_nds_heading1_visibility='1' AND ogenius_nds_heading1_lan='$language_name_20171' ORDER BY ogenius_nds_heading1_id DESC LIMIT 1";
                                if ($query_upper_text = $database->query($sql_upper_text)) {
//---------------------
                                    while ($res_upper_text = mysqli_fetch_array($query_upper_text)) {
                                        echo "" . $res_upper_text['ogenius_nds_heading1_title'];
                                    }
                                } {
                                    
                                }
                                ?>
                            </h2>

                            <p><?php
                                //$language_name_20171 = $_SESSION["NDS_OGENIUS_session_lan"];
                                $language_name_20171 = return_lan_settings_name($_SESSION["NDS_OGENIUS_session_lan"]);
                                $sql_upper_text = "SELECT * FROM  ogenius_nds_heading1_text WHERE ogenius_nds_heading1_text_visibility='1' AND ogenius_nds_heading1_text_lan='$language_name_20171' ORDER BY ogenius_nds_heading1_text_id DESC LIMIT 1";
                                if ($query_upper_text = $database->query($sql_upper_text)) {
//---------------------
                                    while ($res_upper_text = mysqli_fetch_array($query_upper_text)) {
                                        ?>
                                        <?php echo "" . $res_upper_text['ogenius_nds_heading1_text_text']; ?>
                                        <?php
                                    }
                                }
                                ?>
                            </p>
                        </div>
                        <div class="col-md-4">
                            <h2> <?php
                                $language_name_20171 = return_lan_settings_name($_SESSION["NDS_OGENIUS_session_lan"]);
                                $sql_upper_text = "SELECT * FROM  ogenius_nds_heading2 WHERE ogenius_nds_heading2_visibility='1' AND ogenius_nds_heading2_lan='$language_name_20171' ORDER BY ogenius_nds_heading2_id DESC LIMIT 1";
                                if ($query_upper_text = $database->query($sql_upper_text)) {
//---------------------
                                    while ($res_upper_text = mysqli_fetch_array($query_upper_text)) {
                                        echo "" . $res_upper_text['ogenius_nds_heading2_title'];
                                    }
                                } {
                                    
                                }
                                ?>
                            </h2>
                            <p>
                                <?php
                                $language_name_20171 = return_lan_settings_name($_SESSION["NDS_OGENIUS_session_lan"]);
                                $sql_upper_text = "SELECT * FROM  ogenius_nds_heading2_text WHERE ogenius_nds_heading2_text_visibility='1' AND ogenius_nds_heading2_text_lan='$language_name_20171' ORDER BY ogenius_nds_heading2_text_id DESC LIMIT 1";
                                if ($query_upper_text = $database->query($sql_upper_text)) {
//---------------------
                                    while ($res_upper_text = mysqli_fetch_array($query_upper_text)) {
                                        ?>
                                        <?php echo "" . $res_upper_text['ogenius_nds_heading2_text_text']; ?>
                                        <?php
                                    }
                                }
                                ?>
                            </p>
                        </div>
                        <div class="col-md-4">
                            <h2>
                                <?php
                                $language_name_20171 = return_lan_settings_name($_SESSION["NDS_OGENIUS_session_lan"]);
                                $sql_upper_text = "SELECT * FROM  ogenius_nds_heading3 WHERE ogenius_nds_heading3_visibility='1' AND ogenius_nds_heading3_lan='$language_name_20171' ORDER BY ogenius_nds_heading3_id DESC LIMIT 1";
                                if ($query_upper_text = $database->query($sql_upper_text)) {
//---------------------
                                    while ($res_upper_text = mysqli_fetch_array($query_upper_text)) {
                                        echo "" . $res_upper_text['ogenius_nds_heading3_title'];
                                    }
                                } {
                                    
                                }
                                ?>
                            </h2>
                            <p>
                                <?php
                                $language_name_20171 = return_lan_settings_name($_SESSION["NDS_OGENIUS_session_lan"]);
                                $sql_upper_text = "SELECT * FROM  ogenius_nds_heading3_text WHERE ogenius_nds_heading3_text_visibility='1' AND ogenius_nds_heading3_text_lan='$language_name_20171' ORDER BY ogenius_nds_heading3_text_id DESC LIMIT 1";
                                if ($query_upper_text = $database->query($sql_upper_text)) {
//---------------------
                                    while ($res_upper_text = mysqli_fetch_array($query_upper_text)) {
                                        ?>
                                        <?php echo "" . $res_upper_text['ogenius_nds_heading3_text_text']; ?>
                                        <?php
                                    }
                                }
                                ?>
                            </p>

                        </div>
                    </div>
                </div>
                <div class="getstarted centerrow">
<div class="container">
                    <div class="col-md-2">
                        <span>
                            <b><a href="http://www.ogeniuspriority.com" target="_blank" style="color:blue;"><i><?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_74("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_74("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        Available on Android
                                    <?php } ?></i></a></b>
                        </span>
                    </div>
                    <div class="btn-group centerrow col-md-4 col-md-offset-2">
                        <button class="btn btn-primary col-md-5" id="registerbtn" onclick="pullregister();"><?php
                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_8("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_8("system_config_xml/" . $_global_language)->item(0)->textContent;
                            } else {
                                ?>
                                REGISTER
                            <?php } ?></button>

                    </div>
                    <div class="col-md-2 col-md-offset-2">
                        <div class="navbar-form navbar-right centerrow">
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
                        </div>
                    </div>

</div>
                </div>
            </div>

        </div>
    </div>



    <div class="myfooter">
        <div class="container">
            <div class="row">

                <div class="col-md-4">
                    <img class="image48" src="images/logo123.png">
                    <p> <?php
                        $sql_appendix_session_txt = "SELECT * FROM  nds_ogenius_footer_txt WHERE        nds_ogenius_footer_txt_status='1' ORDER BY  nds_ogenius_footer_txt_id DESC";
                        if ($query_appendix_session_txt = $database->query($sql_appendix_session_txt)) {
//---------------------
                            while ($res_appendix_session_txt = mysqli_fetch_array($query_appendix_session_txt)) {
                                ?>

                                <?php echo "" . $res_appendix_session_txt['nds_ogenius_footer_txt_text']; ?>

                                <?php
                            }
                        }
                        ?>
                    </p>
                </div>
                <div class="col-md-4">
                    <form>
                        <fieldset>
                            <legend style="color:white"><?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_CoommunityFooter_0("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_CoommunityFooter_0("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                    Leave a suggestion
                                <?php } ?>
                            </legend>
                            <div class="form-group col-md-6">
                                <input class="form-control col-md-6" id="Names_2017" type="text" placeholder="<?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_CoommunityFooter_1("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_CoommunityFooter_1("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                           Names
                                       <?php } ?>*" required>
                                <input class="form-control col-md-6" onkeyup="nds_validate_suggestion_common_mail(this)" onchange="nds_validate_suggestion_common_mail(this)" id="email_add_2017" type="text" placeholder="<?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_CoommunityFooter_2("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_CoommunityFooter_2("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                           Email address
                                       <?php } ?>*" >

                            </div> 
                            <div class="form-group col-md-6">
                                <textarea id="message_2017" onkeyup="textAreaAdjust(this)" class="form-control col-md-6" placeholder="<?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_CoommunityFooter_4("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_CoommunityFooter_4("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                              Message
                                          <?php } ?>*"><?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_CoommunityFooter_4("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_CoommunityFooter_4("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                              Message
                                          <?php } ?>
                                </textarea>
                                <input onclick="sendSuggestionToThePlatform()"  id="" type="button" class="btn btn-primary" value="<?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_CoommunityFooter_3("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_CoommunityFooter_3("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                           submit
                                       <?php } ?>" >
                            </div>

                        </fieldset>
                    </form>
                </div>
                <div class="col-md-4">
                    <fieldset>
                        <legend style="color:white">
                            <?php
                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_CoommunityFooter_5("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_CoommunityFooter_5("system_config_xml/" . $_global_language)->item(0)->textContent;
                            } else {
                                ?>
                                Address
                            <?php } ?>
                        </legend>
                        <div>
                            <i class="fa fa-map-marker"></i>
                            <span>KK 57St, Nyarugunga, Kigali-Rwanda</span>
                        </div>
                        <div>
                            <i class="fa fa-phone"></i>
                            <span>+250786653152, +250788308461</span>
                        </div>
                        <div>
                            <i class="fa fa-envelope-o"></i>
                            <span>info@ogeniuspriority.com</span>
                        </div>
                    </fieldset>
                </div>
            </div>
        </div>
        <div class="centerrow" style="background-color: #1f1f23">
            <p>
                <a href="http://www.ogeniuspriority.com" target="_blank"> Copyright &copy; 2014-<?php echo strftime('%Y') . ""; ?> O'Genius Priority LTD.<?php
                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_CoommunityFooter_6("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_CoommunityFooter_6("system_config_xml/" . $_global_language)->item(0)->textContent;
                    } else {
                        ?>
                        All Rights Reserved.
                    <?php } ?></a></p>
        </div>
    </div>
    <div class="container2">
        <div>
            <div id="createaccount" class="centerrow">
                <h3><?php
                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_9("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_9("system_config_xml/" . $_global_language)->item(0)->textContent;
                    } else {
                        ?>
                        Create Account
                    <?php } ?></h3>
                <span class="btn btn-default" style="text-align:center"><i onclick="closeregistration();" class="fa fa-close text-danger"></i></span></div>
            <ul id="myTabs" class="nav nav-tabs centerrow" role="tablist">
                <li class="active"><a data-toggle="tab"  href="#individual">
                        <?php
                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_10("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_10("system_config_xml/" . $_global_language)->item(0)->textContent;
                        } else {
                            ?>
                            Individual
                        <?php } ?></a></li>
                <li><a data-toggle="tab" href="#institution"> 
                        <?php
                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_11("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_11("system_config_xml/" . $_global_language)->item(0)->textContent;
                        } else {
                            ?>
                            Institution
                        <?php } ?></a></li>
                <li><a data-toggle="tab" href="#official"> 
                        <?php
                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_12("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_12("system_config_xml/" . $_global_language)->item(0)->textContent;
                        } else {
                            ?>
                            Officials
                        <?php } ?></a></li>

            </ul>
            <div id="myTabContent" class="tab-content" style="padding: 10px 50px;">
                <div id="individual" class="tab-pane fade in active">

                    <div class="centerrow" style="padding-bottom: 20px;"> 
                        <button class="btn btn-default centerrow" onclick="login()">
                            <img src="images/Facebook Round.png" style="margin:5px;width: 30px;height: 30px;" />
                            <div>
                                <?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_13("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_13("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                    Sign in with Facebook
                                <?php } ?>
                            </div>


                        </button>
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
                        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
                        <script src="https://apis.google.com/js/api:client.js"></script>

                        <script>
                            try {
                                var googleUser = {};
                                var startApp = function () {
                                    gapi.load('auth2', function () {
                                        // Retrieve the singleton for the GoogleAuth library and set up the client.
                                        auth2 = gapi.auth2.init({
                                            client_id: '808431171525-50d9d5bcvggb00mh4iaojhtau09jml4j.apps.googleusercontent.com',
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
                        <script>
                            startApp();
                        </script>
                        <button class="btn btn-default centerrow customGPlusSignIn" onclick="startApp();" id="customBtn">

                            <img src="images/Google plus round.png" style="margin:5px;width: 30px;height: 30px;" />
                            <div> 
                                <?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_14("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_14("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                    Sign in with Gmail
                                <?php } ?>
                            </div>

                        </button>
                    </div>
                    <form>
                        <div>
                            <div class = "form-group col-md-4">
                                <label for = "first_name" class = "control-label startrowstart"> <?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_15("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_15("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        First Name
                                    <?php } ?> <span style='color: red;'> * </span> : <span class="loader_span" id="home_individual_fname_wait" ></span>
                                    <span id="home_individual_fname_failed" style="color: red;">&#10008;</span>
                                    <span id="home_individual_fname_okay" style="color: green">&#10004;</span>
                                </label>
                                <input class = "form-control accountRegPuts" id="home_individual_fname" type = "text"  pattern = "[a-zA-Z0-9]{1,25}" required />


                            </div>
                            <div class = "form-group col-md-4">
                                <label for = "last_name" class = "control-label startrowstart" ><?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_16("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_16("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        Last Name
                                    <?php } ?> <span style='color: red;'> * </span> : <span class="loader_span" id="home_individual_lname_wait" ></span>
                                    <span id="home_individual_lname_failed" style="color: red;">&#10008;</span>
                                    <span id="home_individual_lname_okay" style="color: green">&#10004;</span></label>
                                <input class = "form-control accountRegPuts" id="home_individual_lname" type = "text"  pattern = "[a-zA-Z0-9]{1,25}" required />


                            </div>
                            <div class = "form-group col-md-4">
                                <label for = "uusername" class = "control-label startrowstart" >
                                    <?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_17("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_17("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        Birthdate
                                    <?php } ?><span style='color: red;'>*</span> : <span class="loader_span" id="pickBirthDay_wait"></span>
                                    <span id="pickBirthDay_failed" style="color: red;">&#10008;</span>
                                    <span id="pickBirthDay_okay" style="color: green">&#10004;</span></label><mdall><span id = "errUsern" class = "errUsern"></span></mdall>
                                <input class = "form-control accountRegPuts" id="pickBirthDay" type = "text" required />





                            </div>
                        </div>
                        <div>
                            <div class = "form-group col-md-6">
                                <label for = "gender" class = "control-label startrowstart"> <?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_18("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_18("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        Gender
                                    <?php } ?> <span style='color: red;'> * </span> : <span class="loader_span" id="home_individual_gender_wait" ></span>
                                    <span id="home_individual_gender_failed" style="color: red;">&#10008;</span>
                                    <span id="home_individual_gender_okay" style="color: green">&#10004;</span>
                                </label>
                                <select class = "form-control accountRegPuts" id="home_individual_gender" required >
                                    <option value = "" name = "gender" selected>choose</option>
                                    <option value = "male" name = "gender">
                                        <?php
                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_19("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_19("system_config_xml/" . $_global_language)->item(0)->textContent;
                                        } else {
                                            ?>
                                            Male
                                        <?php } ?>
                                    </option>
                                    <option value = "Female" name = "gender">
                                        <?php
                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_20("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_20("system_config_xml/" . $_global_language)->item(0)->textContent;
                                        } else {
                                            ?>
                                            Female
                                        <?php } ?></option>
                                </select>






                            </div>
                            <div class = "form-group col-md-6">
                                <label for = "datepicker" class = "control-label startrowstart">
                                    <?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_21("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_21("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        Profession
                                    <?php } ?> <span style='color: red;'> * </span> :  <span class="loader_span" id="home_individual_profession_wait" ></span>
                                    <span id="home_individual_profession_failed" style="color: red;">&#10008;</span>
                                    <span id="home_individual_profession_okay" style="color: green">&#10004;</span></label>
                                <input type = "text" id = "home_individual_profession" class="accountRegPuts form-control" required/>



                            </div>


                        </div>


                        <div class = "form-group col-md-4">


                            <label for = "ucontry" class = "control-label">
                                <?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_44("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_44("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                    Username
                                <?php } ?> <span style='color: red;'> * </span> : <span class="loader_span" id="home_individual_username_wait" ></span>
                                <span id="home_individual_username_failed" style="color: red;">&#10008;</span>
                                <span id="home_individual_username_okay" style="color: green">&#10004;</span></label>
                            <input onkeydown="individualUser_nds_validate_Username(this)" onchange="individualUser_nds_validate_Username(this)" id="home_individual_username" class="accountRegPuts_mdall_ form-control" type="text" />


                        </div>
                        <div class = "form-group col-md-4">
                            <label for = "uprovince" class = "control-label startrowstart"><?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_22("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_22("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                    Marital Status
                                <?php } ?> <span style='color: red;'> * </span> :   <span class="loader_span" id="home_individual_marital_status_wait" ></span>
                                <span id="home_individual_marital_status_failed" style="color: red;">&#10008;</span>
                                <span id="home_individual_marital_status_okay" style="color: green">&#10004;</span></label>
                            <select class="accountRegPuts form-control" id="home_individual_marital_status">
                                <option value = "" selected>choose</option>
                                <option value = "single" ><?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_23("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_23("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        Single
                                    <?php } ?>
                                </option>
                                <option value = "married"><?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_24("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_24("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        Married
                                    <?php } ?>
                                </option>
                                <option value = "divorced"><?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_25("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_25("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        Divorced
                                    <?php } ?>
                                </option>
                                <option value = "widow"><?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_26("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_26("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        Widow
                                    <?php } ?>
                                </option>
                                <option value = "widower"><?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_27("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_27("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        widower
                                    <?php } ?>
                                </option>
                            </select>





                        </div>
                        <div class ="form-group col-md-4">
                            <label for = "udistrict" class = "control-label startrowstart"><?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_28("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_28("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                    Province
                                <?php } ?><span style='color: red;'> * </span>: <span class="loader_span" id="home_individual_province_wait" ></span><span id="home_individual_province_failed" style="color: red;">&#10008;</span><span id="home_individual_province_okay" style="color: green">&#10004;</span>
                            </label>
                            <input class="accountRegPuts_mdall form-control" id="home_individual_province" type="text">
                        </div>
                        <div class ="form-group col-md-4">
                            <label for = "udistrict" class = "control-label startrowstart"><?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_29("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_29("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                    District
                                <?php } ?><span style='color: red;'> * </span>: 
                                <span class="loader_span" id="home_individual_district_wait"></span>
                                <span id="home_individual_district_failed">&#10008;</span>
                                <span id="home_individual_district_okay" style="color: green">&#10004;</span>

                            </label>
                            <input id="home_individual_district" class="accountRegPuts_mdall form-control" type="text">





                        </div>
                        <div class ="form-group col-md-4">
                            <label for = "udistrict" class = "control-label startrowstart"><?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_30("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_30("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                    Sector
                                <?php } ?><span style='color: red;'> * </span>:
                                <span class="loader_span" id="home_individual_sector_wait" ></span>
                                <span id="home_individual_sector_failed" style="color: red;">&#10008;</span>
                                <span id="home_individual_sector_okay" style="color: green">&#10004;</span>


                            </label>
                            <input id="home_individual_sector" class="accountRegPuts_mdall form-control" type="text">


                        </div>

                        <div class ="form-group col-md-4">
                            <label for = "udistrict" class = "control-label startrowstart"><?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_31("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_31("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                    Email address
                                <?php } ?><span style='color: red;'> * </span>:<span class="loader_span" id="home_individual_email_add_wait" style=""></span>
                                <span id="home_individual_email_add_failed" style="color: red;">&#10008;</span>
                                <span id="home_individual_email_add_okay" style="color: green">&#10004;</span>
                            </label>
                            <input id="home_individual_email_add"  class="accountRegPuts form-control" onkeydown="individualUser_nds_validate_Email(this)"onchange="individualUser_nds_validate_Email(this)" type="text">


                        </div>
                        <div class ="form-group col-md-4">
                            <label for = "udistrict" class = "control-label startrowstart">
                                <?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_32("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_32("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                    Password
                                <?php } ?><span style='color: red;'> * </span>:
                                <span class="loader_span" id="home_individual_password_wait" style=""></span>
                                <span id="home_individual_password_failed" style="color: red;">&#10008;</span>
                                <span id="home_individual_password_okay" style="color: green">&#10004;</span>
                            </label>
                            <input  id="home_individual_password" class="accountRegPuts form-control"  onkeyup="individualUser_nds_validate_Passwords(this)" type="password">





                        </div>
                        <div class ="form-group col-md-4">
                            <label for = "udistrict" class = "control-label startrowstart">
                                <?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_33("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_33("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                    confirm password
                                <?php } ?><span style='color: red;'>*</span> : <span class="loader_span" id="home_individual_password_retype_wait" style=""></span>
                                <span id="home_individual_password_retype_failed" style="color: red;">&#10008;</span>
                                <span id="home_individual_password_retype_okay" style="color: green">&#10004;</span></label>
                            <input id="home_individual_password_retype" class="accountRegPuts form-control" onkeyup="individualUser_nds_validate_Passwords(this)" onchange="individualUser_nds_validate_Passwords(this)"  type="password">





                        </div>
                        <div class ="form-group col-md-4">
                            <label for = "udistrict" class = "control-label startrowstart"><?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_34("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_34("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                    Phone
                                <?php } ?><span style='color: red;'> * </span> :
                                <span class="loader_span" id="home_individual_phone_wait" style=""></span>
                                <span id="home_individual_phone_failed" style="color: red;">&#10008;</span>
                                <span id="home_individual_phone_okay" style="color: green">&#10004;</span>

                            </label>
                            <input type="text" maxlength="12" onchange="individualUser_nds_validate_Phone(this, event)" onkeydown="individualUser_nds_validate_Phone(this, event)" id="home_individual_phone" class="accountRegPuts form-control" placeholder="250786464464"  />


                        </div>
                        <div class="btn-group centerrow container">
                            <input id="btnReg" class="btn btn-primary col-md-2 col-md-offset-8" onclick="create_individual_account_nds();" type="button" value="<?php
                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_35("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_35("system_config_xml/" . $_global_language)->item(0)->textContent;
                            } else {
                                ?>Register
                                   <?php } ?>"/>
                            <input onclick="clearTheIndividualFields()" id="home_individual_clear_form" class="btn btn-default col-md-2" type="button"  value="<?php
                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_36("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_36("system_config_xml/" . $_global_language)->item(0)->textContent;
                            } else {
                                ?> Clear
                                   <?php } ?>"/>
                        </div>
                    </form>
                </div>
                <div id="institution" class="tab-pane fade">
                    <form>
                        <div>
                            <div class = "form-group col-md-4">
                                <label for = "first_name" class = "control-label startrowstart"><?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_37("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_37("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        Institution
                                    <?php } ?> <span class="loader_span" id="home_institution_institution_wait" ></span>
                                    <span id="home_institution_institution_failed" style="color: red;">&#10008;</span>
                                    <span id="home_institution_institution_okay" style="color: green">&#10004;</span>
                                </label>
                                <input id="home_institution_institution" class="accountRegPuts form-control" type="text" />

                            </div>
                            <div class = "form-group col-md-4">
                                <label for = "last_name" class = "control-label startrowstart" ><?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_38("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_38("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        Website
                                    <?php } ?>: <span class="loader_span" id="home_institution_website_wait"></span>
                                    <span id="home_institution_website_failed" style="color: red;">&#10008;</span>
                                    <span id="home_institution_website_okay" style="color: green">&#10004;</span>
                                </label>
                                <input onkeyup="institutionUser_nds_validate_Website(this)" onchange="institutionUser_nds_validate_Website(this)" id="home_institution_website" class="accountRegPuts form-control" type="text" />
                            </div>
                            <div class = "form-group col-md-4">
                                <label for = "ucontry" class = "control-label startrowstart"><?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_39("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_39("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        info email address
                                    <?php } ?> : <span class="loader_span" id="home_institution_info_email_wait" ></span><span id="home_institution_info_email_failed" style="color: red;">&#10008;</span><span id="home_institution_info_email_okay" style="color: green">&#10004;</span>
                                </label>
                                <input onkeydown="institutionUser_nds_validate_Email(this)" onchange="institutionUser_nds_validate_Email(this)" id="home_institution_info_email" class="form-control" type="text"  />
                            </div>
                            <div class = "form-group col-md-4">
                                <label for = "ucontry" class = "control-label"><?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_43("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_43("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        Motto
                                    <?php } ?>:</label>
                                <textarea id="home_institution_motto" onkeyup="textAreaAdjust(this)" class="accountRegPuts_mdall_ form-control"  type="text" ></textarea>
                            </div>
                        </div>
                        <div>
                            <div class = "form-group col-md-4">
                                <label for = "uusername" class = "control-label startrowstart" ><?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_40("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_40("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        Province
                                    <?php } ?>:
                                    <span class="loader_span" id="home_institution_province_wait"></span>
                                    <span id="home_institution_province_failed" style="color: red;">&#10008;</span>
                                    <span id="home_institution_province_okay" style="color: green">&#10004;</span>
                                </label>
                                <input id="home_institution_province" class="accountRegPuts_mdall form-control" type="text" />
                            </div>
                            <div class = "form-group col-md-4">
                                <label for = "gender" class = "control-label startrowstart">
                                    <?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_41("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_41("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        District
                                    <?php } ?>: <span class="loader_span" id="home_institution_district_wait"></span>
                                    <span id="home_institution_district_failed" style="color: red;">&#10008;</span>
                                    <span id="home_institution_district_okay" style="color: green">&#10004;</span>

                                </label>
                                <input id="home_institution_district" class="accountRegPuts_mdall form-control" type="text" />
                            </div>
                            <div class = "form-group col-md-4">
                                <label for = "datepicker" class = "control-label startrowstart">
                                    <?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_42("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_42("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        Sector
                                    <?php } ?> : <span class="loader_span" id="home_institution_sector_wait" ></span><span id="home_institution_sector_failed" style="color: red;">&#10008;</span><span id="home_institution_sector_okay" style="color: green">&#10004;</span>
                                </label>
                                <input id="home_institution_sector" class="accountRegPuts_mdall form-control" type="text"  />
                            </div>
                        </div>
                        <div>
                            <div class = "form-group col-md-4">
                                <label for = "uprovince" class = "control-label startrowstart">
                                    <?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_44("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_44("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        Username
                                    <?php } ?> : <span class="loader_span" id="home_institution_username_wait"></span><span id="home_institution_username_failed" style="color: red;">&#10008;</span><span id="home_institution_username_okay" style="color: green">&#10004;</span>

                                </label>
                                <input onkeydown="institutionUser_nds_validate_Username(this)" onchange="institutionUser_nds_validate_Username(this)" id="home_institution_username" class="accountRegPuts_mdall_ form-control" type="text" />

                            </div>
                            <div class ="form-group col-md-4">
                                <label for = "udistrict" class = "control-label">
                                    <?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_45("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_45("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        Password
                                    <?php } ?> : <span class="loader_span" id="home_institution_password_wait"></span><span id="home_institution_password_failed" style="color: red;">&#10008;</span><span id="home_institution_password_okay" style="color: green">&#10004;</span>
                                </label>
                                <input onkeyup="institutionUser_nds_validate_Passwords(this)" onchange="institutionUser_nds_validate_Passwords(this)" id="home_institution_password" class="accountRegPuts_mdall form-control" type="password" />
                            </div>
                            <div class ="form-group col-md-4">
                                <label for = "udistrict" class = "control-label">
                                    <?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_46("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_46("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        Confirm password
                                    <?php } ?> : <span class="loader_span" id="home_institution_password_retype_wait"></span><span id="home_institution_password_retype_failed" style="color: red;">&#10008;</span><span id="home_institution_password_retype_okay" style="color: green">&#10004;</span>

                                </label>
                                <input onkeyup="institutionUser_nds_validate_Passwords(this)" onchange="institutionUser_nds_validate_Passwords(this)" id="home_institution_password_retype" class="accountRegPuts_mdall form-control" type="password" />
                            </div>
                        </div>
                        <div class="btn-group centerrow container">
                            <input class="btn btn-primary col-md-2 col-md-offset-8" onclick="create_institution_account_nds()" id="home_institution_register" type="button" value="<?php
                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_47("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_47("system_config_xml/" . $_global_language)->item(0)->textContent;
                            } else {
                                ?>
                                       Register
                                   <?php } ?>"/>
                            <input onclick="clearTheInstitutionFields()" id="home_institution_clear" class="btn btn-default col-md-2" type="button"  value="<?php
                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_48("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_48("system_config_xml/" . $_global_language)->item(0)->textContent;
                            } else {
                                ?>
                                       Clear
                                   <?php } ?>" />
                        </div>
                    </form>
                </div>
                <div id="official" class="tab-pane fade">
                    <form>
                        <div>
                            <div class = "form-group col-md-4">
                                <label for = "first_name" class = "control-label">
                                    <?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_50("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_50("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        First Name
                                    <?php } ?> : <span class="loader_span" id="home_official_fname_wait"></span><span id="home_official_fname_failed" style="color: red;">&#10008;</span><span id="home_official_fname_okay" style="color: green">&#10004;</span>
                                </label>
                                <input id="home_official_fname" class="accountRegPuts form-control" type = "text" required />
                            </div>
                            <div class = "form-group col-md-4">
                                <label for = "last_name" class = "control-label" ><?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_51("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_51("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        Last Name
                                    <?php } ?> : <span class="loader_span" id="home_official_lname_wait" ></span><span id="home_official_lname_failed" style="color: red;">&#10008;</span><span id="home_official_lname_okay" style="color: green">&#10004;</span>

                                </label>
                                <input id="home_official_lname" class="accountRegPuts form-control" type="text" />
                            </div>
                            <div class = "form-group col-md-4">
                                <label for = "uusername" class = "control-label" >
                                    <?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_44("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_44("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        Username
                                    <?php } ?> : <span class="loader_span" id="home_official_username_wait"></span><span id="home_official_username_failed" style="color: red;">&#10008;</span><span id="home_official_username_okay" style="color: green">&#10004;</span>

                                </label>
                                <input onkeydown="officialUser_nds_validate_Username(this)" onchange="officialUser_nds_validate_Username(this)" id="home_official_username" class="accountRegPuts_mdall_ form-control" type="text" />
                            </div>
                        </div>
                        <div>
                            <div class = "form-group col-md-6">
                                <label for = "uprovince" class = "control-label startrowstart">
                                    <?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_52("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_52("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        Marital Status
                                    <?php } ?> : <span class="loader_span" id="home_official_marital_status_wait"></span><span id="home_official_marital_status_failed" style="color: red;">&#10008;</span><span id="home_official_marital_status_okay" style="color: green">&#10004;</span>

                                </label>
                                <select id="home_official_marital_status" class="accountRegPuts form-control">
                                    <option value = "" selected>choose</option>
                                    <option value = "single" >
                                        <?php
                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_53("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_53("system_config_xml/" . $_global_language)->item(0)->textContent;
                                        } else {
                                            ?>
                                            Single
                                        <?php } ?></option>
                                    <option value = "married"><?php
                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_54("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_54("system_config_xml/" . $_global_language)->item(0)->textContent;
                                        } else {
                                            ?>
                                            Married
                                        <?php } ?>
                                    </option>
                                    <option value = "divorced"><?php
                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_55("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_55("system_config_xml/" . $_global_language)->item(0)->textContent;
                                        } else {
                                            ?>
                                            Divorced
                                        <?php } ?>
                                    </option>
                                    <option value = "widow"><?php
                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_56("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_56("system_config_xml/" . $_global_language)->item(0)->textContent;
                                        } else {
                                            ?>
                                            Widow
                                        <?php } ?>
                                    </option>
                                    <option value = "widower"><?php
                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_57("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_57("system_config_xml/" . $_global_language)->item(0)->textContent;
                                        } else {
                                            ?>
                                            widower
                                        <?php } ?>
                                    </option>
                                </select>
                            </div>
                            <div class = "form-group col-md-6">
                                <label for = "gender" class = "control-label startrowstart"> <?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_58("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_58("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        Gender
                                    <?php } ?> : <span class="loader_span" id="home_official_gender_wait"></span><span id="home_official_gender_failed" style="color: red;">&#10008;</span><span id="home_official_gender_okay" style="color: green">&#10004;</span>

                                </label>
                                <select id="home_official_gender" class="accountRegPuts form-control" required >
                                    <option value = "" name = "gender" selected>choose</option>
                                    <option value = "male" name = "gender"><?php
                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_59("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_59("system_config_xml/" . $_global_language)->item(0)->textContent;
                                        } else {
                                            ?>
                                            Male
                                        <?php } ?>
                                    </option>
                                    <option value = "Female" name = "gender"><?php
                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_60("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_60("system_config_xml/" . $_global_language)->item(0)->textContent;
                                        } else {
                                            ?>
                                            Female
                                        <?php } ?>
                                    </option>
                                </select> 
                            </div>
                        </div>
                        <div>
                            <div class = "form-group col-md-4">
                                <label for = "uprovince" class = "control-label startrowstart"><?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_61("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_61("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        Institution
                                    <?php } ?> : <span class="loader_span" id="home_official_institution_0000_wait"></span><span id="home_official_institution_0000_failed" style="color: red;">&#10008;</span><span id="home_official_institution_0000_okay" style="color: green">&#10004;</span>
                                </label>
                               <select class="accountRegPuts form-control" id="home_official_institution_0000">
                               	 <option value = "" selected>choose</option>
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

                                        	if(strpos($res_home_institu['ogenius_nds_db_community_institution_name'], 'HTMLInputElement') > -1){

                                        	}else{
                                            ?>
                                           
                                            <option value = "<?php echo "" . $res_home_institu['ogenius_nds_db_community_institution_name']; ?>" ><?php echo "" . $res_home_institu['ogenius_nds_db_community_institution_name']; ?></option>
                                            <?php
                                        }
                                        }
                                    }
                                    ?>
                                </select>
                                 
                            </div>
                            <div class ="form-group col-md-4">
                                <label for = "udistrict" class = "control-label">
                                    <?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_62("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_62("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        Department
                                    <?php } ?> : <span class="loader_span" id="home_official_department_wait"></span><span id="home_official_department_failed" style="color: red;">&#10008;</span><span id="home_official_department_okay" style="color: green">&#10004;</span>

                                </label>
                                <input id="home_official_department" class="accountRegPuts_mdall form-control" type="text" />
                            </div>
                            <div class ="form-group col-md-4">
                                <label for = "udistrict" class = "control-label"><?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_63("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_63("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        Position
                                    <?php } ?> : <span class="loader_span" id="home_official_position_wait"></span><span id="home_official_position_failed" style="color: red;">&#10008;</span><span id="home_official_position_okay" style="color: green">&#10004;</span>

                                </label>
                                <input id="home_official_position" class="accountRegPuts_mdall form-control" type="text"  />
                            </div>
                            <div class = "form-group col-md-12">
                                <fieldset>
                                    <legend>
                                        <?php
                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_64("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_64("system_config_xml/" . $_global_language)->item(0)->textContent;
                                        } else {
                                            ?>
                                            Office location
                                        <?php } ?>
                                    </legend>
                                    <div class = "form-group col-md-4">
                                        <label for = "uusername" class = "control-label" ><?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_65("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_65("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                Province
                                            <?php } ?> : <span class="loader_span" id="home_official_province_wait" ></span><span id="home_official_province_failed" style="color: red;">&#10008;</span><span id="home_official_province_okay" style="color: green">&#10004;</span>
                                        </label>
                                        <input id="home_official_province" class="accountRegPuts_mdall_ form-control" type="text" />
                                    </div>
                                    <div class = "form-group col-md-4">
                                        <label for = "gender" class = "control-label"><?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_66("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_66("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                District
                                            <?php } ?> : <span class="loader_span" id="home_official_district_wait"></span><span id="home_official_district_failed" style="color: red;">&#10008;</span><span id="home_official_district_okay" style="color: green">&#10004;</span>

                                        </label>
                                        <input id="home_official_district" class="accountRegPuts_mdall_ form-control" type="text" />
                                    </div>
                                    <div class = "form-group col-md-4">
                                        <label for = "datepicker" class = "control-label">
                                            <?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_67("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_67("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                Sector
                                            <?php } ?> : <span class="loader_span" id="home_official_sector_wait"></span><span id="home_official_sector_failed" style="color: red;">&#10008;</span><span id="home_official_sector_okay" style="color: green">&#10004;</span>

                                        </label>
                                        <input id="home_official_sector" class="accountRegPuts_mdall_ form-control" type="text"  />
                                    </div>
                                </fieldset>
                            </div>
                            <div class = "form-group col-md-4">
                                <label for = "datepicker" class = "control-label">
                                    <?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_68("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_68("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        Work phone
                                    <?php } ?> : <span class="loader_span" id="home_official_work_nber_wait"></span><span id="home_official_work_nber_failed" style="color: red;">&#10008;</span><span id="home_official_work_nber_okay" style="color: green">&#10004;</span>
                                </label>
                                <input maxlength="12" onkeydown="officialUser_nds_validate_Phone(this, event)" onchange="officialUser_nds_validate_Phone(this, event)" class="accountRegPuts_small form-control" id="home_official_work_nber"  placeholder="250786464464" type="tel" />
                            </div>
                            <div class = "form-group col-md-4">
                                <label for = "datepicker" class = "control-label"><?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_69("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_69("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        Company  address mail
                                    <?php } ?> : <span class="loader_span" id="home_official_company_address_mail_wait"></span><span id="home_official_company_address_mail_failed" style="color: red;">&#10008;</span><span id="home_official_company_address_mail_okay" style="color: green">&#10004;</span>

                                </label>
                                <input onkeydown="officialUser_nds_validate_Email(this)" onchange="officialUser_nds_validate_Email(this)" id="home_official_company_address_mail" class="accountRegPuts_small form-control" type="text" />
                            </div>
                            <div class ="form-group col-md-4">
                                <label for = "udistrict" class = "control-label">
                                    <?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_70("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_70("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        Password
                                    <?php } ?> : <span class="loader_span" id="home_official_password_wait"></span><span id="home_official_password_failed" style="color: red;">&#10008;</span><span id="home_official_password_okay" style="color: green">&#10004;</span>
                                </label>
                                <input onkeyup="officialUser_nds_validate_Passwords(this)" onchange="officialUser_nds_validate_Passwords(this)" id="home_official_password" class="accountRegPuts_small form-control" type="password" />
                            </div>
                            <div class ="form-group col-md-4">
                                <label for = "udistrict" class = "control-label startrowstart">
                                    <?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_71("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_71("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        Confirm password
                                    <?php } ?> : <span class="loader_span" id="home_official_password_retype_wait"></span><span id="home_official_password_retype_failed" style="color: red;">&#10008;</span><span id="home_official_password_retype_okay" style="color: green">&#10004;</span>
                                </label>
                                <input onkeyup="officialUser_nds_validate_Passwords(this)" onchange="officialUser_nds_validate_Passwords(this)" id="home_official_password_retype" class="accountRegPuts_small form-control" type="password" />
                            </div>

                        </div>
                        <div class="btn-group centerrow container">
                            <input class="btn btn-primary col-md-2 col-md-offset-8" onclick="create_institution_official_account_nds()" id="home_official_register_button" type="button" value="<?php
                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_72("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_72("system_config_xml/" . $_global_language)->item(0)->textContent;
                            } else {
                                ?>                 Register
                                   <?php } ?>" />
                            <input onclick="clearTheOfficialFields()" id="home_official_clear_btn" class="btn btn-default col-md-2" type="button"  value="<?php
                                   if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_73("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                       echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_homepage_73("system_config_xml/" . $_global_language)->item(0)->textContent;
                                   } else {
                                       ?>
                                       Clear
                                   <?php } ?>" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src = "js/jquery-3.2.1.js" ></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js" type="text/javascript"></script>
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