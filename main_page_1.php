<?php
require_once "includes/app_up_nav.php";
require_once "includes/functions.php";
require_once "includes/timeToSec.php";
?>
<input type="hidden" id="main_page_carousel" />
<div id="main_page_institution_pic_view_container" style="visibility:hidden;background:rgba(30,30,30,0.7);z-index:10000;position: fixed;border-radius: 5px;box-shadow: 2px 2px 2px #cdeded;width: 60%;height: 60%;text-align: center;border-left: 1px solid #cdeded;border-top: 1px solid #cdeded;">
    <input type="button" onclick="main_page_institution_pic_view()" value="X" class="btn" style="color:red;padding: 2px;float: right;margin-right: 10%;margin-top: 4px;" />
    <div style="clear:both;width: 98%;height: 80%;">
        <img src="" id="main_page_institution_pic_view_container_img_src" style="max-height: 98%;max-width: 98%;" />
    </div>                   
</div>
<body style="background: white;">
    <div style="clear: both;"></div>
    <input type="hidden" value="<?php echo "" . $id_xxxccc88; ?>" id="common_user_settings_the_id" />
    <input type="hidden" id="main_page_2017_" />

    <section class="main_page_col" style="width: 100%;margin-top: 2.5%;color: #999933;">
        <div style="width: 25%;float: left;padding: 0px;">
            <div class="mainPageNotificationHeader" id="mainpage_notification" style="">
                <h4 style="text-align: left;padding-left: 10px;"><?php
                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_0("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_0("system_config_xml/" . $_global_language)->item(0)->textContent;
                    } else {
                        ?>
                        Notification
                    <?php } ?></h4>
                <div style="overflow:hidden;box-shadow:2px 4px 8px rgba(0, 0, 0, .5);margin-top:-4%;margin-left:20%;height: 50px;width: 50px;border-radius: 50px;position: absolute;background: #663366;text-align: center;">
                    <p style="color: #999933;">
                        <span id="main_page_notification_counter" style="font-size: 13px;">0</span>
                    </p>
                </div>
            </div>
            <div class="scrolls" style="background: white;overflow-y: scroll;height: 240px;">
                <div id="main_page_notification_counter_messenger">
                    <img src="images/ic_notifications_active_black_48dp.png" style="margin-top:15%;margin-left:35%;width: 100px;height: 100px;" />
                    <h4  style="font-style: italic;color: #999933;margin-left:10%;"> <?php
                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_1("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_1("system_config_xml/" . $_global_language)->item(0)->textContent;
                        } else {
                            ?>
                            You have no new notifications right now
                        <?php } ?> </h4>
                </div>
                <div id="notifications_panel" style="width: 100%;height: 100%;" >
                    <div id="notifications_panel_data_pool_2017">

                    </div>
                    <div  id="notifications_panel_mainpop" style="box-shadow: inset 0 0 1em gold, 0 0 1em #0080FF;;border-radius:5px;border:3px solid #0080FF;position: absolute;visibility: hidden;z-index: 20000;background: transparent;overflow-x: hidden;height: auto;">

                        <div onclick="" id="notifications_panel_mainpop_notify" style="background: #ffffff;width:600px;height: auto;">
                            <!--<input onclick="hideThis_notifications_panel()" type="button" style="float: right;margin-right: 10%;" value="Close" />-->
                            <div style="height: 110%;">
                                <div style="height: 30px;background: #CDCDCD;">

                                </div>
                                <table style="padding-left: 2.5%;margin-top: 2%;">
                                    <tr>
                                        <td><img src="images/32210901391_becdb7c654_c-ca7f3.jpg" style="width: 100px;height:100px;" /></td>
                                        <td>
                                            <div style="margin-top: -50px;">
                                                Ntawukuriryayo
                                            </div>
                                            <div>
                                                03:09 pm
                                            </div></td>
                                    </tr>
                                </table>
                                <div style="text-align: left;padding-left: 2.5%;margin-top:2.5%;color: #000000;">
                                    iqeiheaaidadnakida  addoiada soajsa saiuhsa sasausas augas
                                    asauhhsa sabusagsa saudbas uhasas ausas usas asugasugas
                                    ahas asjsbajdad ahdajdad dasaisjasa uassa aasuasus aaus
                                    asjauhs daduads sasiasas asijhashashsaisjad  sasiha
                                </div>
                                <div style="border-bottom:2px solid #cdcdcd;;text-align: left;padding-left: 2.5%;margin-top:2.5%;color: #000000;">
                                    <table>
                                        <tr>
                                            <td><span style="color:#0080FF;"> 12 <?php
                                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_2("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_2("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                    } else {
                                                        ?>
                                                        likes
                                                    <?php } ?></span></td>
                                            <td><span style="color:#0080FF;"> 3 <?php
                                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_3("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_3("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                    } else {
                                                        ?>
                                                        dislikes
                                                    <?php } ?></span></td>
                                            <td><span style="color:#0080FF;"> 1 <?php
                                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_4("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_4("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                    } else {
                                                        ?>
                                                        comment
                                                    <?php } ?></span></td>
                                        </tr>
                                    </table>
                                </div>
                                <table style="padding-left: 7.5%;margin-top: 2%;font-size: 14px;">
                                    <tr>
                                        <td><img src="images/32210901391_becdb7c654_c-ca7f3.jpg" style="width: 60px;height:60px;border-radius: 60px;" /></td>
                                        <td>
                                            <div style="margin-top: -25px;">
                                                Ntawukuriryayo
                                            </div>
                                            <div>
                                                03:09 pm
                                            </div></td>
                                    </tr>
                                </table>
                                <div style="text-align: left;padding-left: 7.5%;margin-top:2.5%;color: #000000;font-size: 14px;">
                                    iqeiheaaidadnakida  addoiada soajsa saiuhsa sasausas augas
                                    asauhhsa sabusagsa saudbas uhasas ausas usas asugasugas
                                    ahas asjsbajdad ahdajdad dasaisjasa uassa aasuasus aaus
                                    asjauhs daduads sasiasas asijhashashsaisjad  sasiha
                                </div>

                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <div class="mainPage_Message" id="mainpageMessage">
                <h4 style="text-align: left;padding-left: 10px;"><?php
                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_5("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_5("system_config_xml/" . $_global_language)->item(0)->textContent;
                    } else {
                        ?>
                        Message
                    <?php } ?></h4>
                <div style="overflow:hidden;box-shadow:2px 4px 8px rgba(0, 0, 0, .5);margin-top:-4%;margin-left:20%;height: 50px;width: 50px;border-radius: 50px;position: absolute;background: #663366;text-align: center;">
                    <p style="color: #999933;">
                        <span style="font-size: 13px;" id="mainpageMessage_message_count">0</span>
                    </p>
                </div>
            </div>
            <div class="scrolls" style="background: white;overflow-y: scroll;height: 440px;">
                <div id="main_page_noification_tag_2017">
                    <img src="images/ic_mail_48pt_3x.png" style="margin-top:15%;margin-left:35%;width: 100px;height: 100px;" />
                    <h4 style="font-style: italic;color: #999933;margin-left:10%;"> <?php
                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_6("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_6("system_config_xml/" . $_global_language)->item(0)->textContent;
                        } else {
                            ?>
                            You will receive messages from institutions
                            of which you have suggested.
                        <?php } ?> </h4>
                </div>
                <div id="notifications_panel_for_message" style="width: 100%;height: 100%;" >


                </div>
                <div  id="messages_panel_mainpop" style="box-shadow: inset 0 0 1em gold, 0 0 1em #0080FF;;border-radius:5px;border:3px solid #0080FF;position: absolute;visibility: hidden;z-index: 20000;background: transparent;overflow-x: hidden;height: auto;">

                    <div class="innerMessagePopUp" id="messages_panel_mainpop_note" style="background: #ffffff;width:600px;height: auto;">
                        <!--<input onclick="hideThis_notifications_panel()" type="button" style="float: right;margin-right: 10%;" value="Close" />-->
                        <div style="height: 80%;">
                            <div style="height: 30px;background: #CDCDCD;">

                            </div>
                            <div id="NewSEndPanel">
                                <div style="float: right;padding: 20px;">
                                    <input type="button" style="border:3px solid #0080FF;border-radius: 3px;color: black;background: white;" value="New message" />
                                    <input type="button" style="border:3px solid #0080FF;border-radius: 3px;color: black;background: white;" value="<?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_29("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_29("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                               Send
                                           <?php } ?>" />
                                </div>
                                <div style="clear: both;float: left;padding-left: 20px;color: black;">
                                    <textarea style="border-radius: 8px;width:500px;height: 80px;" placeholder="Message here"></textarea>
                                    <div style="text-align: left;margin-top: 10px;font-weight: bold;">
                                        <?php
                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_7("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_7("system_config_xml/" . $_global_language)->item(0)->textContent;
                                        } else {
                                            ?>
                                            SENT TO
                                        <?php } ?> RGB
                                    </div>
                                    <div style="text-align: left;font-weight: bold;">
                                        Girinka
                                    </div>
                                    <div>
                                        <p style="text-align: left;">
                                            jdisfs fsifsifs fihfs sifs fisfsd ishdsf sis dishds dsifhsf ishd
                                            dsuhds dsiubdsbifsd sdisbfs fihd fishfd ufshfs sufs fsufs
                                            sfih8d sifhsfs fishfsd sidsds dis8hfsnfiss dsibdsfs fihfsf sifsf sfif
                                            ssi8dd sdishdsd sidisns disdsd fisfds isfshfsfhf fifhsfs fsifs fisf
                                            sfusif sfishds dis
                                        </p>
                                    </div>
                                    <div style="padding-bottom: 5px;border-bottom: 2px solid #0080FF">
                                        <table>
                                            <tr>
                                                <td><span class="messagePopAction" style="border:1px solid #0080FF;border-radius: 5px;padding: 5px;">2 <?php
                                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_8("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_8("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                        } else {
                                                            ?>
                                                            Replies
                                                        <?php } ?></span></td>
                                                <td><span class="messagePopAction" style="border:1px solid #0080FF;border-radius: 5px;padding: 5px;"><?php
                                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_9("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_9("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                        } else {
                                                            ?>
                                                            Follow up
                                                        <?php } ?></span></td>
                                                <td><span class="messagePopAction" onclick="Messages_pop_finalize(this)" id="finalizeBtn" style="border:1px solid #0080FF;border-radius: 5px;padding: 5px;"><?php
                                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_10("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_10("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                        } else {
                                                            ?>
                                                            Finalize
                                                        <?php } ?></span></td>
                                            </tr>
                                        </table>
                                        <div class="speechLeft" id="message_panel_finalize" style="box-shadow: inset 0 0 1em gold, 0 0 1em #0080FF;border-radius:5px;border:3px solid #0080FF;position: absolute;visibility: hidden;z-index: 20000;background: transparent;width:350px;overflow-x: hidden;height: auto;">

                                            <div onclick="" id="message_panel_finalize_in" style="background: #ffffff;width:600px;height: auto;z-index: 30000">
                                                <!--<input onclick="hideThis_notifications_panel()" type="button" style="float: right;margin-right: 10%;" value="Close" />-->
                                                <div style="height: 110%;">
                                                    <div style="clear: both;text-align: left;width: 65%;padding: 0px;margin: 10px;">
                                                        <div style="width: 100%;">
                                                            <div style="font-size: 14px;width: 65%">
                                                                <?php
                                                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_11("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_11("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                                } else {
                                                                    ?>
                                                                    Would you like to inform us how your query was finalised, please select on of the following options:
                                                                <?php } ?>
                                                            </div>
                                                            <ul style="color:black;list-style: none;font-size: 12px;width: 65%">
                                                                <li>
                                                                    <input name="issueStatus" type="radio" />
                                                                    <?php
                                                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_12("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_12("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                                    } else {
                                                                        ?>
                                                                        resolved
                                                                    <?php } ?>
                                                                </li>
                                                                <li>
                                                                    <input name="issueStatus" type="radio" />
                                                                    <?php
                                                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_13("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_13("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                                    } else {
                                                                        ?>
                                                                        Issue not resolved but i'm satisfied with explanations
                                                                    <?php } ?>
                                                                </li>
                                                                <li>
                                                                    <input name="issueStatus" type="radio" />
                                                                    <?php
                                                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_14("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_14("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                                    } else {
                                                                        ?>
                                                                        Issue not resolved, not satisfied with explanations
                                                                    <?php } ?>
                                                                </li>
                                                                <li>
                                                                    <input name="issueStatus" type="radio" />
                                                                    <?php
                                                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_15("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_15("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                                    } else {
                                                                        ?>
                                                                        Other
                                                                    <?php } ?> </br>                                                                     <textarea placeholder='<?php
                                                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_16("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_16("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                                    } else {
                                                                        ?>
                                                                                                                                                            Type here
                                                                                                                                                        <?php } ?>' style="width: 250px;height: 120px;border-radius: 8px;"></textarea>
                                                                </li>
                                                            </ul>
                                                            <table>
                                                                <tr>
                                                                    <td>
                                                                        <input type="button" style="border:1px solid #0080FF;background:#0080FF;width: 150px;padding: 5px; " value="<?php
                                                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_17("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_17("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                                        } else {
                                                                            ?>
                                                                                   OK
                                                                               <?php } ?>" />
                                                                    </td>
                                                                    <td>
                                                                        <input type="button" style="border:1px solid #0080FF;background:transparent;width: 150px;padding: 5px; " value="<?php
                                                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_18("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_18("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                                        } else {
                                                                            ?>
                                                                                   Cancel
                                                                               <?php } ?>" />
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div style="width: 85%;font-size: 13px;text-align: left;">
                                        <ul style="color: #0080FF;">
                                            <li>
                                                <span style="color: black;"><?php
                                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_19("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_19("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                    } else {
                                                        ?>
                                                        Your question has been viewed by RGB staff in charge of suggestion box
                                                    <?php } ?></span>
                                            </li>
                                            <li>
                                                <span style="color: black;"><?php
                                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_20("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_20("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                    } else {
                                                        ?>
                                                        Your question has been forwaded to the bureau of the Ombudsman for review
                                                    <?php } ?></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div  style="margin-top: 10px;font-size: 14px;padding: 20px;height: 400px;overflow-y: scroll;background:#333333;">
                                        <div class="speechLeft" style="border-bottom: 2px solid #0080FF;margin-top: 10px; width: 70%;float: left;background: #CDCDCD;border-radius: 5px;padding: 4px;">
                                            <table>
                                                <tr>
                                                    <td><span><?php
                                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_20("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_20("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                            } else {
                                                                ?>
                                                                Sent by
                                                            <?php } ?> YOU</span></td>
                                                    <td ><span class="timestamp" style="margin-left: 200px;">2 days ago</span></td>
                                                </tr>
                                            </table>

                                            <div style="text-align: left;">
                                                saihsas asiahsa siahsa sias aisa asia sdusds d
                                                dsih8ds dsuds dsidsbidsd sdi8shdbusd sd
                                                dsiud8s dsbndishds dsudis dsidnsndisd sdisd
                                                sdoisd sdsuidsd sdisbdisd sidhsd sduhisbds d
                                                sdsu8dsd sd sduhsdisd sdusd sdisd sdis
                                                sdis8ds dubi
                                            </div>
                                        </div>


                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>
        <div style="width: 54%;float: left;border-left: 1px solid #cdcdcd;">
            <table class="header_0">
                <tr>
                    <td id="All_mainPage" class="header_0_forum"><h4 style="font-style: italic;"><?php
                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_22("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_22("system_config_xml/" . $_global_language)->item(0)->textContent;
                            } else {
                                ?>
                                All
                            <?php } ?></h4></td>
                    <td id="Latest_mainPage" class="header_0_forum"><h4 style="font-style: italic;"><?php
                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_23("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_23("system_config_xml/" . $_global_language)->item(0)->textContent;
                            } else {
                                ?>
                                Latest
                            <?php } ?></h4></td>
                    <td id="whereIamTagged_mainPage" class="header_0_forum"><h4 style="font-style: italic;"><?php
                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_24("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_24("system_config_xml/" . $_global_language)->item(0)->textContent;
                            } else {
                                ?>
                                Where i am tagged
                            <?php } ?></h4></td>
                    <td id="Trending_mainPage" class="header_0_forum"><h4 style="font-style: italic;"><?php
                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_25("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_25("system_config_xml/" . $_global_language)->item(0)->textContent;
                            } else {
                                ?>
                                Trending
                            <?php } ?></h4></td>
                    <td id="Myposts_mainPage" class="header_0_forum"><h4 style="font-style: italic;"><?php
                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_26("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_26("system_config_xml/" . $_global_language)->item(0)->textContent;
                            } else {
                                ?>
                                My posts
                            <?php } ?></h4></td>
                    <td><h4 style="font-style: italic;">
                            <table id="search_MainPage" class="header_0_forum">
                                <tr>
                                    <td>
                                        <input id="main_page_search_posts" onkeyup="main_page_load_all_posts_search(this)" type="search" placeholder="<?php
                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_27("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_27("system_config_xml/" . $_global_language)->item(0)->textContent;
                                        } else {
                                            ?>
                                                   Search here
                                               <?php } ?>" class="accountRegPuts_small" style="width:130px;" />
                                    </td>
                                    <td><img onclick="main_page_load_all_posts_search_click()" src="images/ic_search_72pt_3x.png" style="width: 20px;height: 20px;" /></td>
                                </tr>
                            </table></h4></td>
                </tr>
            </table>

            <table style="margin-left: 4%;">
                <tr>
                    <?php
                    //-------------The profile page dilemma--
                    if ($indiv_social_goo < 1) {
                        ?>
                        <td><img src="uploaded_images/<?php echo "" . ($indiv_avatar != "") ? $indiv_avatar : "nds_avatar.png"; ?>" style="width: 70px;height: 70px;border-radius: 2px;" /></td>

                        <?php
                    } else {
                        ?>
                        <td><img src="<?php
                            if (!empty($indiv_avatar)) {
                                echo "" . (strlen($indiv_avatar) > 26) ? $indiv_avatar : "uploaded_images/" . $indiv_avatar;
                            } else {
                                echo "" . "uploaded_images/" . "nds_avatar.png";
                            }
                            ?>" style="width: 70px;height: 70px;border-radius: 2px;" /></td>

                        <?php
                    }
                    ?>
                </tr>
                <tr>
                    <td>                    <textarea id="main_page_community_post_field" onkeyup="textAreaAdjust(this)" placeholder='<?php
                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_28("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_28("system_config_xml/" . $_global_language)->item(0)->textContent;
                        } else {
                            ?>
                                                          Share your opinion with our community
                                                      <?php } ?>' class="accountRegPuts_small" style="width: 500px;max-width: 500px;"></textarea></td>
                    <td><img  onclick="main_page_post_inTheCommunity_anImage()" src="images/ic_camera_alt_black_48dp.png" style="width: 20px;height: 20px" />
                        <div id="main_page_send_post_img_2017_popUp" style="visibility:hidden;position: absolute;min-width:200px;background: white;border: 3px solid gray;border-radius: 5px;">
                            <input type="button"  onclick="main_page_post_image_closeUp()" class="btn" value="X" style="color: red;margin-left: 70%;margin-top: 4%" />
                            <div style="position: relative;padding: 10px">
                                <form id="main_page_post_image_2017_up_file_form">

                                    <div  style="border-radius:6px;margin-left:65%;max-width: 100px;background: #0080FF;position: absolute">
                                        <img src="system_images/imageEmoticon_choose.png" style="width: 100px;height: 100px;" />
                                        <input onchange="upload_main_page_post_img_2017()" id="main_page_post_image_2017_file" class="chooseImageFromDevice"   type="file" />

                                    </div>
                                    <table style="">
                                        <tr>
                                            <td> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><div><img id="main_page_post_image_2017_up_file_preview" style="width: 200px;height: 200px;border:1px solid gray;border-radius:3px;" /></div></td>
                                        </tr>                                
                                        <tr>
                                            <td><input id="main_page_post_image_2017_up_file_name" type="hidden" />
                                                <span id="main_page_post_image_2017_up_file_msger"></span>

                                            </td>
                                        </tr>

                                    </table>                           


                                </form>
                                <div style="clear: both;margin-top: ">
                                    <input type="text" style="clear: both" id="main_page_post_image_2017_up_file_caption" class="accountRegPuts" placeholder="Caption" />
                                </div>
                                <div>
                                    <br>
                                    <input type="button" onclick="main_page_send_img_post()" class="btn" style="padding: 5px;margin-left: 34%;" value="<?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_29("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_29("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                               Send
                                           <?php } ?>" />
                                </div>
                            </div>


                        </div>
                    </td>
                    <td>
                        <input onclick="main_page_post_inTheCommunity()" type="button" value="<?php
                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_29("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_29("system_config_xml/" . $_global_language)->item(0)->textContent;
                        } else {
                            ?>
                                   Send
                               <?php } ?>" style="color: white;border:1px solid #009999;background:#009999;width: 100px;padding: 2px;"/>
                    </td>
                </tr>
            </table>
            <div style='border-radius: 4px;margin-top: 5%;' id="main_page_common_user_posts_preview">
                <div style="padding: 20px;border:1px solid gray; border-radius: 8px;">
                    <input type="hidden" value="New " id="main_page_carousel_new_posts_uruhago_txt" />
                    <input type="hidden" id="main_page_carousel_new_posts_uruhago" />
                    <div onclick="main_page_load_the_new_posts_click()" id="main_page_carousel_new_posts" style="color:black;text-shadow:2px 2px 2px white;z-index:1000;background:linear-gradient(to right, skyblue , white);border-top:1px solid gray;border-left:1px solid gray;cursor:hand;margin-bottom:5px;box-shadow:2px 2px 2px skyblue;position: absolute;margin-left:20%;padding: 6px;border-radius: 5px;"> </div>
                    <?php
//---------All my posts container
                    ?><br />
                    <?php
                    require_once ("includes/conn/config.php");
                    ?>
                    <?php
                    require_once ("includes/classes/database.php");
                    ?>
                    <?php
                    $json_array = array();
                    $posts_USERS = array();
                    $posts_Info_Comments = array();
                    $posts_Info_likes_COUNT = array();
                    $posts_Info_Comments_COUNT = array();
                    $posts_Info_likes_un_COUNT = array();
                    $_firstId = 0;
                    $FirstId = 0;
                    $sql_Posts = "SELECT
ogenius_nds_db_community_posts_id,ogenius_nds_db_community_posts_postdata,
ogenius_nds_db_community_posts_poster_id,ogenius_nds_db_community_posts_regdate,
ogenius_nds_db_community_posts_sent,ogenius_nds_db_community_posts_local_id,
ogenius_nds_db_community_posts_poster_names,ogenius_nds_db_community_posts_views,ogenius_nds_db_community_posts_posts_caption

FROM ogenius_nds_db_community_posts P 
WHERE P.ogenius_nds_db_community_posts_id>'{$FirstId}' AND P.ogenius_nds_db_community_posts_active='0'
ORDER BY P.ogenius_nds_db_community_posts_id DESC LIMIT 50";

                    $posts_Info = array();
                    $id_post = "";
                    $id_poster = "";
                    if ($query_Posts = $database->query($sql_Posts)) {
                        while ($res_Posts = mysqli_fetch_array($query_Posts)) {
                            $id_post = $res_Posts['ogenius_nds_db_community_posts_id'];
                            $id_poster = $res_Posts['ogenius_nds_db_community_posts_poster_id'];

                            //---
                            $sql_Posts_Comments = "SELECT 
            ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_id,
            ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_commentator_name,
            ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_comment,
            ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_posts_post_id,
            ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_regdate,
            ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_commentator_id,
            ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_avatar,
            ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_names,
            ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id ,
            ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_api_log_face_goo_id         
             FROM ogenius_nds_db_community_posts_comments
            LEFT JOIN ogenius_nds_db_normal_users
            ON ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_commentator_id=ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id
WHERE   ogenius_nds_db_community_posts_comments_posts_post_id='{$id_post}' AND  ogenius_nds_db_community_posts_comments_active_status='0'   ORDER BY 
    ogenius_nds_db_community_posts_comments_regdate DESC LIMIT 60


";

                            if ($query_Posts_Comments = $database->query($sql_Posts_Comments)) {
                                while ($res_ = mysqli_fetch_array($query_Posts_Comments)) {
                                    $posts_Info_Comments[] = $res_;
                                }
                            }
                            //---------COMMENTS COUNT
                            $sql_Posts_Comments_COUNT = "SELECT COUNT(*) AS All_Attached_Comments FROM ogenius_nds_db_community_posts_comments WHERE
ogenius_nds_db_community_posts_comments_posts_post_id='{$id_post}' AND  ogenius_nds_db_community_posts_comments_active_status='0'";

                            if ($query_Posts_Comments_COUNT = $database->query($sql_Posts_Comments_COUNT)) {
                                while ($res__COUNT = mysqli_fetch_array($query_Posts_Comments_COUNT)) {
                                    $posts_Info_Comments_COUNT[] = $res__COUNT;
                                }
                            }
                            //---likes_COUNT
                            $sql_Posts_likes_COUNT = "SELECT COUNT(*) AS LikeCompilations  FROM ogenius_nds_db_community_posts_i_flags   WHERE
ogenius_nds_db_community_posts_i_flags_post_id='{$id_post}'
AND ogenius_nds_db_community_posts_i_flags_like_status='1'";

                            if ($query_Posts_likes_COUNT = $database->query($sql_Posts_likes_COUNT)) {
                                while ($res_likes_COUNT = mysqli_fetch_array($query_Posts_likes_COUNT)) {
                                    $posts_Info_likes_COUNT[] = $res_likes_COUNT;
                                }
                            }
                            //---UNLIKE COUNT
                            $sql_Posts_un_likes_COUNT = "SELECT COUNT(*) AS UnLikeCompilations FROM ogenius_nds_db_community_posts_i_flags   WHERE
ogenius_nds_db_community_posts_i_flags_post_id='{$id_post}'
AND ogenius_nds_db_community_posts_i_flags_like_status='2'";

                            if ($query_Posts_un_likes_COUNT = $database->query($sql_Posts_un_likes_COUNT)) {
                                while ($res_un_likes_COUNT = mysqli_fetch_array($query_Posts_un_likes_COUNT)) {
                                    $posts_Info_likes_un_COUNT[] = $res_un_likes_COUNT;
                                }
                            }
                            //---
                            //---USERS TABLE
                            $sql_USERS = "SELECT * FROM ogenius_nds_db_normal_users   WHERE
ogenius_nds_db_normal_users_id='{$id_poster}' 
";

                            if ($query_USERS = $database->query($sql_USERS)) {
                                while ($res_USERS = mysqli_fetch_array($query_USERS)) {
                                    $posts_USERS[] = $res_USERS;
                                }
                            }
                            $posts_Info[] = $res_Posts;
                            //--
                        }
                    }

                    /* print("{\"posts\":" . json_encode($posts_Info) . "}");
                      print("--cyuma2017--");
                      print("{\"Comments\":" . json_encode($posts_Info_Comments) . "}");
                      print("--cyuma2017--");
                      print("{\"CmmentsCount\":" . json_encode($posts_Info_Comments_COUNT) . "}");
                      print("--cyuma2017--");
                      print("{\"LikesCount\":" . json_encode($posts_Info_likes_COUNT) . "}");
                      print("--cyuma2017--");
                      print("{\"UnlikesCount\":" . json_encode($posts_Info_likes_un_COUNT) . "}");
                      print("--cyuma2017--");
                      print("{\"UserCreds\":" . json_encode($posts_USERS) . "}");
                      print("--cyuma2017--"); */
                    //----------posts
                    $main_page_common_user_posts = json_encode($posts_Info) . "";
                    $main_page_common_user_comments_stream = json_encode($posts_Info_Comments) . "";
                    $main_page_common_user_comments_stream_count = json_encode($posts_Info_Comments_COUNT) . "";
                    $main_page_common_user_comments_likes_count = json_encode($posts_Info_likes_COUNT) . "";
                    $main_page_common_user_comments_unlikes_count = json_encode($posts_Info_likes_un_COUNT) . "";
                    $main_page_common_user_comments_users_creds = json_encode($posts_USERS) . "";
                    ///------------Now reading the json data logically--
                    //---posts  stream of data
                    $books_main_page_posts = json_decode($main_page_common_user_posts, true);
                    $books_main_page_comments_stream = json_decode($main_page_common_user_comments_stream, true);
                    $books_main_page_comments_stream = json_decode($main_page_common_user_comments_stream, true);
                    $books_main_page_comments_stream_count = json_decode($main_page_common_user_comments_stream_count, true);
                    $books_main_page_comments_likes_count = json_decode($main_page_common_user_comments_likes_count, true);
                    $books_main_page_comments_unlikes_count = json_decode($main_page_common_user_comments_unlikes_count, true);
                    $books_main_page_users_creds = json_decode($main_page_common_user_comments_users_creds, true);
                    $main_page_common_user_posts_count = count($books_main_page_posts);
                    //---posts  stream of data
                    $check_2017_myposts_all_data = 0;
                    //------------last and first ids

                    for ($i_mainPage_posts = 0; $i_mainPage_posts < $main_page_common_user_posts_count; $i_mainPage_posts++) {
                        //echo "<p>" . $books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_email'] . "</p>";
                        if ($check_2017_myposts_all_data == 0) {

                            echo "<input type='hidden' value='" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id'] . "' id='main_page_post_first_id'/>";
                        } else if ($check_2017_myposts_all_data == 49) {
                            echo "<input type='hidden' value='" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id'] . "' id='main_page_post_last_id'/>";
                            ?>
                            <input type="hidden" value="New " id="main_page_carousel_old_posts_uruhago_txt" />
                            <input type="hidden" id="main_page_carousel_old_posts_uruhago" />
                            <div onclick="main_page_load_the_old_posts_click()" id="main_page_carousel_old_posts" style="margin-top:320px;color:black;text-shadow:2px 2px 2px white;z-index:1000;background:linear-gradient(to right, skyblue , white);border-top:1px solid gray;border-left:1px solid gray;cursor:hand;margin-bottom:5px;box-shadow:2px 2px 2px skyblue;position: absolute;margin-left:2%;padding: 6px;border-radius: 5px;">
                                Load Old Posts
                            </div>


                            <?php
                        }

                        // echo "<h4> The recors number $check_2017_myposts_all_data</h4>";

                        $check_2017_myposts_all_data++;
                        ?> 

                        <div style="margin-top:5px;padding: 5px;box-shadow:2px 2px 2px #cdcdcd;border-radius: 5px;border: 1px solid #CDCDCD">
                            <table style="margin-left: 4%;">
                                <tr>
                                    <?php
                                    //-------------The profile page dilemma--
                                    if ($books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_api_log_face_goo_id'] < 1) {
                                        ?>
                                        <td><img src="uploaded_images/<?php echo "" . ($books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_avatar'] != "") ? $books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_avatar'] : "nds_avatar.png"; ?>" style="width: 70px;height: 70px" /></td>
                                        <?php
                                    } else {
                                        ?>
                                        <td><img src="<?php
                                            if (!empty($books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_avatar'])) {
                                                echo "" . (strlen($books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_avatar']) > 26) ? $books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_avatar'] : "uploaded_images/" . $books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_avatar'];
                                            } else {
                                                echo "" . "uploaded_images/" . "nds_avatar.png";
                                            }
                                            ?>" style="width: 70px;height: 70px" /></td>

                                        <?php
                                    }
                                    ?>


                                    <td><h4 style="color: #0080FF;margin-top: -20px;"><label><?php echo "" . checkMyPostingPrivacyStatus($books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_poster_id'], $books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_names']); ?></label></br><label><?php
                                                if ($books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_user_vip_tag'] == 2) {
                                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_30("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_30("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                    } else {
                                                        ?>  ogenius_nds_db_normal_users_user_vip_tag
                                                    <?php } ?>: <?php
                                                    echo "" . ($books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_user_vip_tag'] == 2) ? $books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_position'] : "";
                                                }
                                                ?>
                                            </label></h4></td>
                                    <td>
                                        <div style="margin-left:300px;">
                                            <label><?php echo "" . time_to_sec($books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_regdate']); ?> ago</label>
                                        </div></td>
                                </tr>
                            </table>
                            <div style="width: 80%;margin-left: 4%;color: black;<?php echo "" . ($books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_posts_caption'] == "") ? "" : "overflow-x: scroll" ?>" >
                                <?php echo "" . formatImagesInText_withCaption(activateUrlStringsw($books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_postdata']), $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_posts_caption']); ?>

                            </div>
                            <table class="likeTr" style="margin-left: 4%;">
                                <tr>
                                    <td><h6><span id="main_page_views<?php echo "" . $i_mainPage_posts; ?>"><?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_views']; ?></span> <?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_31("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_31("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                views

                                            <?php } ?></h6></td>
                                    <td><h6><span id="main_page_likes<?php echo "" . $i_mainPage_posts; ?>"><?php echo "" . $books_main_page_comments_likes_count[$i_mainPage_posts]['LikeCompilations']; ?></span> <?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_32("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_32("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                likes
                                            <?php } ?></h6></td>
                                    <td><h6><span id="main_page_unlikes<?php echo "" . $i_mainPage_posts; ?>"><?php echo "" . $books_main_page_comments_unlikes_count[$i_mainPage_posts]['UnLikeCompilations']; ?></span> <?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_33("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_33("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                unlikes
                                            <?php } ?></h6></td>
                                    <td><h6><span id="main_page_comments<?php echo "" . $i_mainPage_posts; ?>"><?php echo "" . $books_main_page_comments_stream_count[$i_mainPage_posts]['All_Attached_Comments']; ?></span> <?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_34("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_34("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                comments
                                            <?php } ?></h6></td>
                                </tr>
                            </table>
                            <table class="likeTr" style="margin-left: 4%;">
                                <tr>
                                    <td><div id="<?php echo "mainPageFlagOrReport" . $i_mainPage_posts; ?>" style="visibility:hidden;text-align:center;border:3px solid #CDCDCD;position: absolute;background: white;border-radius: 8px;width: 350px;"> 
                                            <div>
                                                <input type="button" name="<?php echo "mainPageFlagOrReport" . $i_mainPage_posts; ?>" onclick="main_page_hide_flag_post_view(this)" class="btn" style="margin-left:75%;margin-top:8px;padding: 5px;color: blue;margin-right:15px;color: white" value="X" />
                                            </div>
                                            <img src="images/report_.png" style="width: 100px;height: 70px;margin-left: 10%;" />
                                            <form>

                                                <table style="margin-left: 30%;">
                                                    <tr>
                                                        <td>
                                                            <input title="<?php echo "mainPageFlagOrReport" . $i_mainPage_posts; ?>" style="width: 30px;height: 30px;"  type="radio" onchange="main_page_like_flag_this_post_2017(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>, 'insulting')" id="<?php echo "theMeRadioFlag_a" . $i_mainPage_posts; ?>" name="meRadioInsulting<?php echo "" . $i_mainPage_posts; ?>" />
                                                        </td>
                                                        <td>
                                                            <img src="images/insulting_2017.jpg" style="width: 80px;height: 60px;border-radius: 6px;" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input title="<?php echo "mainPageFlagOrReport" . $i_mainPage_posts; ?>" style="width: 30px;height: 30px;" type="radio" onchange="main_page_like_flag_this_post_2017(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>, 'inappropriate')" id="<?php echo "theMeRadioFlag_b" . $i_mainPage_posts; ?>" name="meRadioInsulting<?php echo "" . $i_mainPage_posts; ?>" />
                                                        </td>
                                                        <td>
                                                            <img src="images/inappropriate_.jpg" style="width: 60px;height: 60px;border-radius: 6px;" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input style="width: 30px;height: 30px;" type="radio" onchange="main_page_like_flag_this_post_2017(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>, 'other')" id="<?php echo "theMeRadioFlag_c" . $i_mainPage_posts; ?>" name="meRadioInsulting<?php echo "" . $i_mainPage_posts; ?>" />
                                                        </td>
                                                        <td>
                                                            <img src="images/other_.png" style="width: 60px;height: 60px;border-radius: 6px;" />
                                                        </td>
                                                    </tr>
                                                </table>
                                                <table style="margin: auto;">
                                                    <tr>
                                                        <td><textarea title="<?php echo "theMeRadioFlag_c" . $i_mainPage_posts; ?>" onclick='main_page_flag_this_post_using_other_focus(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>,<?php echo "theMeRadioFlag_c" . $i_mainPage_posts; ?>)' name="" id="<?php echo "main_page_flag_motion" . $i_mainPage_posts; ?>" onkeyup="textAreaAdjust(this)" class="accountRegPuts_small"></textarea></td>
                                                        <td>
                                                            <input  placeholder="<?php echo "mainPageFlagOrReport" . $i_mainPage_posts; ?>" title="<?php echo "main_page_flag_motion" . $i_mainPage_posts; ?>" name="<?php echo "main_page_flag_motion" . $i_mainPage_posts; ?>" onclick='main_page_flag_this_post_using_other(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>,<?php echo "theMeRadioFlag_c" . $i_mainPage_posts; ?>,<?php echo "" . $i_mainPage_posts; ?>)' type="button" class="btn" style="padding: 5px;color: blue" value="---&#10004;---" />
                                                        </td>
                                                    </tr>

                                                </table>
                                            </form>
                                        </div><img name='<?php echo "mainPageFlagOrReport" . $i_mainPage_posts; ?>' id="a<?php echo "$i_mainPage_posts" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>" onclick="main_page_flag_this_post(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>)" src="images/flag_this_00.png" style="width: 20px;height: 20px;" /></td>
                                    <td><img id="b<?php echo "$i_mainPage_posts" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>" onclick="main_page_like_this_post(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>)" src="images/ic_thumb_up_black_48dp1.png" style="width: 20px;height: 20px;" /></td>
                                    <td><img id="c<?php echo "$i_mainPage_posts" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>"onclick="main_page_unlike_this_post(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>)" src="images/ic_thumb_down_black_48dp1.png" style="width: 20px;height: 20px;" /></td>
                                    <td><img onclick="main_page_decollapse_this_comment(this)" name="main_page_comments_collapsible<?php echo "" . $i_mainPage_posts; ?>" id="d<?php echo "$i_mainPage_posts" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>" onclick="main_page_toggle_comment_of_this_post(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>)" src="images/ic_chat_black_48dp.png" style="width: 20px;height: 20px;" /></td>
                                    <?php
                                    if ($books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_id'] == $id_xxxccc88) {
                                        ?>
                                        <td><img id="a<?php echo "$i_mainPage_posts" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>" onclick="main_page_delete_this_post(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>)" src="images/send_to_dust_bin.png" style="width: 20px;height: 20px;" /></td>

                                        <?php
                                    } else {
                                        
                                    }
                                    ?>                            
                                </tr>
                            </table>
                            <div class="scrolls" style="margin-left: 10%;max-height: 240px;overflow-y: scroll;border-radius: 4px;">
                                <div> <!--New...--></div>
                                <div class="main_page_collapsibles_2017"  id="main_page_comments_collapsible<?php echo "" . $i_mainPage_posts; ?>">
                                    <?php
                                    ///--------------THE POST ID
                                    $main_page_the_postId_2017 = $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id'];
                                    require_once ("includes/conn/config.php");
                                    require_once ("includes/classes/database.php");
                                    //--------select the comments individually according to the id of the posts
                                    $sql_main_page_posts_comments = "SELECT 
ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_comment,
ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_regdate,
ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_id,
ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_posts_post_id,
ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_commentator_id,
ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_avatar,
ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_names,
ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id,
ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_api_log_face_goo_id

 FROM ogenius_nds_db_community_posts_comments INNER JOIN ogenius_nds_db_normal_users
 ON ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_commentator_id=ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id
 WHERE ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_posts_post_id='{$main_page_the_postId_2017}'
 AND  ogenius_nds_db_community_posts_comments_active_status='0' 
  ORDER BY ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_id DESC LIMIT 20";
                                    if ($query_main_page_posts_comments == $database->query($sql_main_page_posts_comments)) {
                                        //---------------------
                                        $main_page_cmmnens_c = 0;
                                        while ($res_main_page_posts_comments = mysqli_fetch_array($query_main_page_posts_comments)) {
                                            $theCommentIf_2017 = $res_main_page_posts_comments['ogenius_nds_db_community_posts_comments_id'];
                                            if ($main_page_cmmnens_c == 0) {
                                                ?>
                                                <img class="main_page_comments_collapsible<?php echo "" . $i_mainPage_posts; ?>" onclick="main_page_posts_comments_refresh_up(<?php echo "" . $main_page_the_postId_2017; ?>, this)" src="images/up_new_load.png" style="cursor:hand;margin-left:40%;width: 30px;height: 30px;border-radius: 5px;box-shadow: 2px 2px 2px gray;border-top: 1px solid gray;border-left: 1px solid gray;" />
                                                <?php
                                                echo "<input type='hidden' value='$theCommentIf_2017' id='mainpage_first_comment_id' />";
                                            }
                                            ?>
                                            <table style="border-bottom: 1px solid gray;">
                                                <td style="width: auto">
                                                    <div><?php echo "" . checkMyPostingPrivacyStatus($res_main_page_posts_comments['ogenius_nds_db_community_posts_comments_commentator_id'], $res_main_page_posts_comments['ogenius_nds_db_normal_users_names']); ?></div>
                                                    <?php
                                                    //-------------The profile page dilemma--
                                                    if ($res_main_page_posts_comments['ogenius_nds_db_normal_users_api_log_face_goo_id'] < 1) {
                                                        ?>
                                                        <img src="uploaded_images/<?php echo "" . ($res_main_page_posts_comments['ogenius_nds_db_normal_users_avatar'] != "") ? $res_main_page_posts_comments['ogenius_nds_db_normal_users_avatar'] : "nds_avatar.png"; ?>" style="width: 70px;height: 70px;" /></td>
                                                    <?php
                                                } else {
                                                    ?>
                                                    <img src="<?php
                                                    if (!empty($res_main_page_posts_comments['ogenius_nds_db_normal_users_avatar'])) {
                                                        echo "" . (strlen($res_main_page_posts_comments['ogenius_nds_db_normal_users_avatar']) > 26) ? $res_main_page_posts_comments['ogenius_nds_db_normal_users_avatar'] : "uploaded_images/" . $res_main_page_posts_comments['ogenius_nds_db_normal_users_avatar'];
                                                    } else {
                                                        echo "" . "uploaded_images/" . "nds_avatar.png";
                                                    }
                                                    ?>" style="width: 70px;height: 70px" />

                                                    <?php
                                                }
                                                ?>


                                                <td style="width: 80%">
                                                    <div style="text-align: left;">
                                                        <?php echo "" . activateUrlStringsw($res_main_page_posts_comments['ogenius_nds_db_community_posts_comments_comment']); ?>                            
                                                    </div></td>

                                                <td><h6 style="font-size: 10px;"><?php echo "" . time_to_sec($res_main_page_posts_comments['ogenius_nds_db_community_posts_comments_regdate']); ?></h6></td>
                                                <?php
                                                if ($res_main_page_posts_comments['ogenius_nds_db_community_posts_comments_commentator_id'] == $id_xxxccc88) {
                                                    ?>
                                                    <tr><td></td><td></td><td><img onclick="main_page_delete_this_post_comment(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>,<?php echo "" . $res_main_page_posts_comments['ogenius_nds_db_community_posts_comments_id']; ?>,<?php echo "" . $i_mainPage_posts; ?>,<?php echo "" . $i_mainPage_posts; ?>)" id="a<?php echo "$i_mainPage_posts" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>" onclick="main_page_flag_this_post(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>)" src="images/send_to_dust_bin.png" style="width: 20px;height: 20px;" /></td>
                                                    </tr>
                                                    <?php
                                                } else {
                                                    
                                                }
                                                ?>
                                            </table>

                                            <?php
                                            $main_page_cmmnens_c++;
                                        }
                                        //---------the old load of the main page
                                        if ($main_page_cmmnens_c != 0) {
                                            echo "<input type='hidden' value='$theCommentIf_2017' id='mainpage_last_comment_id' />";
                                            ?>
                                            <br/>
                                            <img class="main_page_comments_collapsible<?php echo "" . $i_mainPage_posts; ?>" onclick="main_page_posts_comments_refresh_down(<?php echo "" . $main_page_the_postId_2017; ?>, this)" src="images/down_new_load.png" style="cursor:hand;margin-left:40%;width: 30px;height: 30px;border-radius: 5px;box-shadow: 2px 2px 2px gray;border-top: 1px solid gray;border-left: 1px solid gray;" />

                                            <br/>
                                            <?php
                                        }
                                    }
                                    ?>

                                </div>
                                <div> <!--More...--></div>

                            </div>
                            <table style="margin-left: 4%;">
                                <tr>
                                    <td>                            <textarea id="<?php echo "commentOnMe" . $i_mainPage_posts; ?>" onkeyup="textAreaAdjust(this)" onchange="textAreaAdjust(this)" class="accountRegPuts" placeholder='<?php
                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_35("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_35("system_config_xml/" . $_global_language)->item(0)->textContent;
                                        } else {
                                            ?>
                                                                                  Comment
                                                                              <?php } ?>' style="margin-top:20px;width:400px;border-radius: 7px;"></textarea></td>
                                    <td>
                                        <input name="main_page_comments_collapsible<?php echo "" . $i_mainPage_posts; ?>" title="<?php echo "commentOnMe" . $i_mainPage_posts; ?>"  onclick="main_page_send_comment(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>,<?php echo "commentOnMe" . $i_mainPage_posts; ?>)"  type="button" value="Send" style="background:blue;color: white;border: 1px solid blue; " />
                                        <input type="hidden" title="main_page_comments_collapsible<?php echo "" . $i_mainPage_posts; ?>" value='' id="manu2017_<?php echo "" . $i_mainPage_posts; ?>" />
                                    </td>
                                </tr>
                            </table>
                        </div>

                        <?php
                    }

                    if ($check_2017_myposts_all_data == 0) {

                        echo "<h4><img src='images/no_data_in.png' style='max-width:50px;max-height:50px;margin-left:30%;' /></h4>";
                    }
                    ?>


                </div>  



            </div>

        </div>
        <div  style="width: 20%;float: left;border-left: 1px solid #cdcdcd;">
            <div class="rgb_suggestion_panel" id="rgb_suggestion_">
                <h4 style="text-align: left;padding-left: 10px;"><?php
                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_36("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_36("system_config_xml/" . $_global_language)->item(0)->textContent;
                    } else {
                        ?>
                        his is a panel designed by government institutions to send queries related to:
                    <?php } ?></h4>
            </div>
            <table id="1i" onclick="suggestion_panel_pop(this, 'mutuelle', 'rgb')" class="rgb">
                <tr>
                    <td><img src="images/ic_chevron_right_black_48dp.png" style="width: 20px;height: 20px;" /></td>
                    <td>
                        <div style="text-align: left;" >
                            MUTUELLE
                        </div>
                    </td>
                </tr>
            </table>
            <table id="2i" onclick="suggestion_panel_pop(this, 'girinka', 'rgb')" class="rgb">
                <tr>
                    <td><img src="images/ic_chevron_right_black_48dp.png" style="width: 20px;height: 20px;" /></td>
                    <td>
                        <div style="text-align: left;" >
                            GIRINKA
                        </div></td>
                </tr>
            </table>
            <table id="3i" onclick="suggestion_panel_pop(this, 'sacco', 'rgb')" class="rgb">
                <tr>
                    <td><img src="images/ic_chevron_right_black_48dp.png" style="width: 20px;height: 20px;" /></td>
                    <td>
                        <div style="text-align: left;" >
                            UMURENGE SACCO
                        </div></td>
                </tr>
            </table>
            <table id="4i" onclick="suggestion_panel_pop(this, 'vup', 'rgb')" class="rgb">
                <tr>
                    <td><img src="images/ic_chevron_right_black_48dp.png" style="width: 20px;height: 20px;" /></td>
                    <td>
                        <div style="text-align: left;" >
                            VUP
                        </div></td>
                </tr>
            </table>
            <table id="5i" onclick="suggestion_panel_pop(this, 'ibibazo_general', 'rgb')" class="rgb">
                <tr>
                    <td><img src="images/ic_chevron_right_black_48dp.png" style="width: 20px;height: 20px;" /></td>
                    <td>
                        <div style="text-align: left;" >
                            IBIBAZO BY' ABATURAGE
                        </div></td>
                </tr>
            </table>
        </div>
        <!------------The suggestion to send panel-->
        <div  id="suggestion_panel_mainpop" style="position:absolute;box-shadow: inset 0 0 1em gold, 0 0 1em #0080FF;;border-radius:5px;border:3px solid #0080FF;position: absolute;visibility: hidden;z-index: 20000;background: transparent;overflow-x: hidden;height: auto;">

            <div class="innersuggestion_PopUp" id="messages_panel_mainpop_note" style="background: #ffffff;width:600px;height: auto;">
                <div style="font-size: 16px;">
                    <h4 id="title_question_data"></h4>
                    <?php
                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_37("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_37("system_config_xml/" . $_global_language)->item(0)->textContent;
                    } else {
                        ?>
                        Thank you for using this platform, your suggestion is valuable to us:
                    <?php } ?>
                </div>
                <div>
                    <table style="margin: auto">
                        <tr>
                            <td><textarea id="main_page_rgb_ask_question_2017" onkeyup="textAreaAdjust(this)" placeholder='<?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_38("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_38("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                              Your question here
                                          <?php } ?>' style="width: 330px;height: 120px;border-radius: 7px;"></textarea></td>
                        </tr>
                    </table>
                    <div style="margin: auto;">
                        <table style="margin: auto;">
                            <tr>
                                <td>
                                    <input onclick="main_page_rgb_ask_question()" style="background:#009999;border: 1px solid #009999;padding: 5px;border-radius: 5px;width: 120px;" type="button" value="<?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_39("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_39("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                               Send
                                           <?php } ?>" />
                                </td>
                                <td>
                                    <input onclick="main_page_rgb_ask_question_dismiss()" style="background:white;border: 1px solid #009999;padding: 5px;border-radius: 5px;width: 120px;" type="button" value="<?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_40("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_40("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                               Cancel
                                           <?php } ?>" />
                                </td>
                            </tr>
                        </table>

                    </div>
                </div>
            </div>

        </div>
        <!-------end of popup--->
        <div  style="width: 20%;float: left;border-bottom: 1px solid #cdcdcd;">
            <div class="community_suggestion_box" id="community_suggestion_box_" >
                <h4 style="text-align: left;padding-left: 10px;"><?php
                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_41("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_41("system_config_xml/" . $_global_language)->item(0)->textContent;
                    } else {
                        ?>
                        Suggestion Box
                    <?php } ?></h4>
            </div>
            <p style="text-align: center;">
                <?php
                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_42("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_42("system_config_xml/" . $_global_language)->item(0)->textContent;
                } else {
                    ?>
                    Send your suggestion to any company through the following means:
                <?php } ?>
            </p>
            <!--Hovering description   -->
            <table class="community_company" style="margin: 20%;">
                <tr>
                    <td><img id="er" onmouseover="fixHoverInfoSuggestion(this)" onclick="suggestion_panel_pop_community(this, 'text')" class="community_suggest" src="images/ic_title_black_48dp.png"  /><i class="v1" id="txtSuggestion" ><?php
                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_43("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_43("system_config_xml/" . $_global_language)->item(0)->textContent;
                            } else {
                                ?>
                                Send a text suggestion
                            <?php } ?></i></td>
                    <td><img id="er0" onmouseover="fixHoverInfoSuggestion(this)" onclick="suggestion_panel_pop_community(this, 'image')" class="community_suggest" src="images/ic_camera_alt_black_48dp.png"  /><i class="v2" id="picSuggestion" ><?php
                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_44("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_44("system_config_xml/" . $_global_language)->item(0)->textContent;
                            } else {
                                ?>
                                Send a picture suggestion
                            <?php } ?></i></td>
                    <td><img id="er1" onmouseover="fixHoverInfoSuggestion(this)" onclick="suggestion_panel_pop_community(this, 'audio')" class="community_suggest" src="images/ic_audiotrack_black_48dp.png"  /><i class="v3" id="audioSuggestion" ><?php
                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_45("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_45("system_config_xml/" . $_global_language)->item(0)->textContent;
                            } else {
                                ?>
                                Send an audio suggestion
                            <?php } ?></i></td>
                    <td><img id="er2" onmouseover="fixHoverInfoSuggestion(this)" onclick="suggestion_panel_pop_community(this, 'video')" class="community_suggest" src="images/ic_videocam_black_48dp.png"  /><i class="v4"  id="videoSuggestion" ><?php
                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_46("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_46("system_config_xml/" . $_global_language)->item(0)->textContent;
                            } else {
                                ?>
                                Send a video suggestion
                            <?php } ?></i></td>

                </tr>
            </table>
            <!------------The suggestion to send panel-->
            <div  id="suggestion_panel_mainpop_community" style="position:absolute;box-shadow: inset 0 0 1em gold, 0 0 1em #0080FF;;border-radius:5px;border:3px solid #0080FF;position: absolute;visibility: hidden;z-index: 20000;background: transparent;overflow-x: hidden;height: auto;">

                <div class="innersuggestion_PopUp_community" id="messages_panel_mainpop_note" style="background: #ffffff;width:600px;min-height: 500px;">
                    <div style="font-size: 16px;">
                        <h4 id="title_question_data"></h4>
                        <?php
                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_47("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_47("system_config_xml/" . $_global_language)->item(0)->textContent;
                        } else {
                            ?>
                            Thank you for using this platform, your suggestion is valuable to us:
                        <?php } ?>
                    </div>
                    <div style="margin-top: 25px;">
                        <table style="border: 1px solid #333333;border-radius: 4px;margin: auto;">
                            <tr>
                                <td><img onclick="main_page_suggest_to_community_view_all_bySearch_click()" src="images/ic_search_72pt_3x.png" style="width: 20px;height: 20px;" /></td>
                                <td>
                                    <input id="main_page_find_the_companies_reg" onkeyup="main_page_suggest_to_community_view_all_bySearch(this)" placeholder="<?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_48("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_48("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                               Search a company Or type in a new company
                                           <?php } ?>" type="text" class="" style="width: 350px;font-size: 16px;border-style: none;padding: 5px" />

                                    <div id="mainpage_suggest_text_search_company_results" style="visibility:hidden;background:rgba(235,235,235,0.7);margin-top:4px;z-index:10000;position:absolute;width:80%;margin-left:-4%;padding: 5px;border-radius: 5px;box-shadow: 2px 2px 2px #cdcdcd;">
                                        <input class="btn" type="button" onclick="main_page_hide_search_company_results()" value="X" style="float: right;margin-right: 20px;margin-top: 4px;margin-bottom: 6px;" />                                   
                                        <div id="mainpage_suggest_text_search_company_results_data" style="max-height: 300px;overflow-y: scroll;">

                                        </div>
                                    </div>
                                </td><td>
                                    <input class="btn" onclick="main_page_suggest_to_community_view_all()" type="button" value="<?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_49("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_49("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                               View All
                                           <?php } ?>" />
                                </td>
                            <input type="hidden" id="mainpage_id_of_selected_company_suggestion_box" />
                            </tr>
                        </table>
                        <div style="height: 20px;"></div>
                        <div id="text_0">
                            <input type="hidden" value="" id="main_page_text_company_preview_data_id" />
                            <div id="main_page_text_company_preview_data">

                            </div>

                            <textarea id="main_page_community_suggest_To_text2017" placeholder='<?php
                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_50("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_50("system_config_xml/" . $_global_language)->item(0)->textContent;
                            } else {
                                ?>
                                          Your question
                                      <?php } ?>' style="width: 350px;height: 80px;border-radius: 10px;" onkeyup="textAreaAdjust(this)"></textarea>
                            <div style="margin: auto;">

                                <table style="margin: auto;">
                                    <tr>
                                        <td>
                                            <input onclick="main_page_send_this_suggestionToTheCompany('text')" style="background:#009999;border: 1px solid #009999;padding: 5px;border-radius: 5px;width: 120px;" type="button" value="<?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_51("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_51("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                       Send
                                                   <?php } ?>" />
                                        </td>
                                        <td>
                                            <input onclick="main_page_suggest_to_community_close_up2017()" style="background:white;border: 1px solid #009999;padding: 5px;border-radius: 5px;width: 120px;" type="button" value="<?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_52("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_52("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                       Cancel
                                                   <?php } ?>" />
                                        </td>
                                    </tr>
                                </table>

                            </div>
                        </div>
                        <div id="image_0">
                            <input type="hidden" value="" id="main_page_image_company_preview_data_id" />
                            <div id="main_page_image_company_preview_data">

                            </div>

                            <form id="main_page_suggest_img_form_2017">
                                <table style="margin-left: 30%;">
                                    <tr>
                                        <td>
                                            <div class="chooseImageFromDevice_000">
                                                <?php
                                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_54("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_54("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                } else {
                                                    ?>
                                                    Choose image from device
                                                <?php } ?>
                                                <input onchange="upload_mainpage_img_suggest()" id="main_page_suggest_img_form_2017_file" type="file" class="chooseImageFromDevice" />
                                            </div>
                                            <label id="mainpage_community_suggest_img_msg"></label>
                                        </td>
                                    </tr>
                                </table>
                            </form>
                            <div id="main_page_community_suggest_IMG_clouds" style="min-height: 160px;max-height:150px;width: 80%;border-radius: 4px;padding: 8px;overflow-y: scroll;">
                                <!--<div style="width: 48%;height: 140px;float: left;margin-top:8px;">
                                    <img src="Community_Admin/NDS_suggested_images/NDS_img_1488018627712.png" style="width: 80%;text-align: center;height: 90%;border-radius: 3px;box-shadow: 2px 2px 2px #333333;" /></br>
                                    <input style="margin: auto;" type="button" value="X" class="btn" />
                                    </br>
                                    
                            </div>-->

                            </div>
                            <div style="border: 1px solid skyblue">

                            </div>
                            <textarea id="main_pagee_community_suggest_an_Image_2017_caption" placeholder='<?php
                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_55("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_55("system_config_xml/" . $_global_language)->item(0)->textContent;
                            } else {
                                ?>
                                          Your caption
                                      <?php } ?>' style="width: 350px;height: 80px;border-radius: 10px;" onkeyup="textAreaAdjust(this)"></textarea>                            																																																																																																		

                            <div style="margin: auto;">
                                <table style="margin: auto;">
                                    <tr>
                                        <td>
                                            <input onclick="main_page_send_this_suggestionToTheCompany('image')" style="background:#009999;border: 1px solid #009999;padding: 5px;border-radius: 5px;width: 120px;" type="button" value="<?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_51("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_51("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                       Send
                                                   <?php } ?>" />
                                        </td>
                                        <td>
                                            <input onclick="main_page_suggest_to_community_close_up2017()" style="background:white;border: 1px solid #009999;padding: 5px;border-radius: 5px;width: 120px;" type="button" value="<?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_52("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_52("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                       Cancel
                                                   <?php } ?>" />
                                        </td>
                                    </tr>
                                </table>

                            </div>
                        </div>
                        <div id="audio_0">
                            <input type="hidden" value="" id="main_page_audio_company_preview_data_id" />
                            <div id="main_page_audio_company_preview_data">

                            </div>

                            <form id="main_page_community_suggest_audio_2017">
                                <table style="margin-left: 30%;">
                                    <tr>
                                        <td>
                                            <div class="chooseImageFromDevice_000">
                                                <?php
                                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_56("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_56("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                } else {
                                                    ?>
                                                    Choose audio from device
                                                <?php } ?>
                                                <input onchange="upload_mainpage_audio_suggest()" type="file" id="main_page_community_suggest_audio_2017_file" class="chooseImageFromDevice" />
                                            </div>
                                            <label id="main_page_community_suggest_audio_2017_file_msg">                                            
                                            </label>
                                            <input type="hidden" id="main_page_community_suggest_audio_2017_file_val"/>
                                        </td>
                                    </tr>
                                </table>
                            </form>
                            <div id="main_page_community_suggested_audio_2017_preview" style="width: 80%;border-radius: 4px;padding: 8px;">
                                <!--<div style="width: 48%;margin-bottom:20px;;margin-top:8px;margin: auto;">
                                    <audio style="width: 80%" src="Community_Admin/NDS_suggested_audios/NDS_audio_1488297239313.3gp" controls preload="">
                                      
                                    </audio>
                                    <input style="margin: auto;" type="button" value="X" class="btn" />
                                    </br>
                                    
                            </div>-->



                            </div>
                            <textarea id="main_page_community_suggest_audio_2017_we" placeholder='<?php
                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_55("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_55("system_config_xml/" . $_global_language)->item(0)->textContent;
                            } else {
                                ?>
                                          Your caption
                                      <?php } ?>' style="width: 350px;height: 80px;border-radius: 10px;" onkeyup="textAreaAdjust(this)"></textarea>                            																																																																																																		


                            <div style="margin: auto;">
                                <table style="margin: auto;">
                                    <tr>
                                        <td>
                                            <input onclick="main_page_send_this_suggestionToTheCompany('audio')" style="background:#009999;border: 1px solid #009999;padding: 5px;border-radius: 5px;width: 120px;" type="button" value="<?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_51("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_51("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                       Send
                                                   <?php } ?>" />
                                        </td>
                                        <td>
                                            <input onclick="main_page_suggest_to_community_close_up2017()" style="background:white;border: 1px solid #009999;padding: 5px;border-radius: 5px;width: 120px;" type="button" value="<?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_53("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_53("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                       Cancel
                                                   <?php } ?>" />
                                        </td>
                                    </tr>
                                </table>

                            </div>

                        </div>
                        <div id="video_0">
                            <input type="hidden" value="" id="main_page_video_company_preview_data_id" />
                            <div id="main_page_video_company_preview_data">

                            </div>

                            <form id="main_page_community_suggest_video_2017_form">
                                <table style="margin-left: 30%;">
                                    <tr>
                                        <td>
                                            <div class="chooseImageFromDevice_000">
                                                <?php
                                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_57("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_57("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                } else {
                                                    ?>
                                                    Choose video from device
                                                <?php } ?>
                                                <input onchange="upload_mainpage_video_suggest()" id="main_page_community_suggest_video_2017_form_file" type="file" class="chooseImageFromDevice" />
                                            </div>
                                            <label id="main_page_community_suggest_video_2017_form_file_msg"></label>
                                            <input type="hidden" id="main_page_community_suggest_video_2017_form_file_val" /></td>
                                    </tr>
                                </table>
                            </form>
                            <div id="main_page_community_suggest_video_clouds" style="width: 80%;border-radius: 4px;padding: 8px;">
                                <!--<div style="width: 48%;margin-bottom:20px;margin-top:8px;margin: auto;">
                                     <video style="width: 80%" src="Community_Admin/NDS_suggested_videos/NDS_video_1489526141145.mp4" controls preload="">
                                       
                                     </video>
                                     <input style="margin: auto;" type="button" value="X" class="btn" />
                                     </br>
                                     
                                 </div>-->


                            </div>
                            <textarea id="main_page_community_suggest_video_caption" placeholder='<?php
                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_55("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_55("system_config_xml/" . $_global_language)->item(0)->textContent;
                            } else {
                                ?>
                                          Your caption
                                      <?php } ?>' style="width: 350px;height: 80px;border-radius: 10px;" onkeyup="textAreaAdjust(this)"></textarea>                            																																																																																																		













                            <div style="margin: auto;">
                                <table style="margin: auto;">
                                    <tr>
                                        <td>
                                            <input onclick="main_page_send_this_suggestionToTheCompany('video')" style="background:#009999;border: 1px solid #009999;padding: 5px;border-radius: 5px;width: 120px;" type="button" value="<?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_51("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_51("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                       Send
                                                   <?php } ?>" />
                                        </td>
                                        <td>
                                            <input onclick="main_page_suggest_to_community_close_up2017()" style="background:white;border: 1px solid #009999;padding: 5px;border-radius: 5px;width: 120px;" type="button" value="<?php
                                                   if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_53("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                       echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_53("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                   } else {
                                                       ?>
                                                       Cancel
                                                   <?php } ?>" />
                                        </td>
                                    </tr>
                                </table>

                            </div>

                        </div>

                    </div>
                </div>

            </div>
            <!-------end of popup--->

        </div>

    </section>
    <?php
    require_once ("includes/app_footer.php");
    ?>


    <script src="jquery/jquery.js" type="text/javascript"></script>
    <script src="jquery/special_ui/jquery-ui.js" type="text/javascript"></script>
    <script src="js/main.js" type="text/javascript"></script>
    <!-- Date picker -->
    <script type="text/javascript" src="jquery/ui_datepicker_lib/jquery.timepicker.js"></script>
    <link rel="stylesheet" type="text/css" href="jquery/ui_datepicker_lib/jquery.timepicker.css" />
    <script type="text/javascript" src="jquery/ui_datepicker_lib/lib/bootstrap-datepicker.js"></script>
    <link rel="stylesheet" type="text/css" href="jquery/ui_datepicker_lib/lib/bootstrap-datepicker.css" />
    <script type="text/javascript" src="jquery/ui_datepicker_lib/lib/site.js"></script>
</body>