<?php require_once "includes/app_up_nav.php"
?>
<div id="main_page_institution_pic_view_container" style="visibility:hidden;background:rgba(30,30,30,0.7);z-index:10000;position: fixed;border-radius: 5px;box-shadow: 2px 2px 2px #cdeded;width: 60%;height: 60%;text-align: center;border-left: 1px solid #cdeded;border-top: 1px solid #cdeded;">
    <input type="button" onclick="main_page_institution_pic_view()" value="X" class="btn" style="color:red;padding: 2px;float: right;margin-right: 10%;margin-top: 4px;" />
    <div style="clear:both;width: 98%;height: 80%;">
        <img src="" id="main_page_institution_pic_view_container_img_src" style="max-height: 98%;max-width: 98%;" />
    </div>                   
</div>
<body style="background: white;">
    <div style="clear: both;"></div>
    <input type="hidden" id="main_page_carousel_institution" />
    <div style="clear: both;"></div>
    <input type="hidden" value="<?php echo "" . $id_xxxccc88; ?>" id="common_user_settings_the_id" />
    <input type="hidden" id="main_page_institution_2017_" />
    <div id="main_page_institution_sugg_details_container_mugabo_2017" style="z-index:10000;background:rgba(20,20,20,.6);max-width:40%;min-width:200px;min-height:200px;visibility:hidden;position: absolute;border-radius:5px;padding: 5px;box-shadow:2px 2px 2px #333333;">
        <input type="button" onclick="main_page_institution_visualize_suggestion_details_hide()"  value="X" class="btn" style="color:red;padding: 2px;float: right;margin-right: 10%;margin-top: 4px;" />
        <div id="main_page_institution_sugg_details_container_mugabo_2017_data_2017" style="text-align:center;padding:6px;border-radius:4px;box-shadow: 1px 1px 1px #cdcdcd;rgba(255,255,255,.7);color:#333333;background: #cdcdcd;margin-top:30px;">
            <p>Test--</br>
                oajdad aduha8dua dnabv dandb adb dba djabdva dhab dadba dba dabdv ajdba dabd abdva dba abu
                adabudadv adbav daidbva jdavd adva duavd ajd adbuva dauvd audbv ahdbvua dvua 
                vadubaugvubgdvy abdva dav dabvu 
            </p>

        </div>                       


    </div>

    <section class="main_page_col" style="width: 100%;margin-top: 2.5%;color: #999933;" id="mainscroll_sec">
        <div style="width: 25%;float: left;padding: 0px;" id="main_page_col_left">
            <div class="mainPageNotificationHeader" id="mainpage_notification" >
                <h4 style="text-align: left;padding-left: 10px;"><?php
                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_0("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_0("system_config_xml/" . $_global_language)->item(0)->textContent;
                    } else {
                        ?>
                        Notification
                    <?php } ?></h4>
                <div style="overflow:hidden;box-shadow:2px 4px 8px rgba(0, 0, 0, .5);margin-top:-4%;margin-left:20%;height: 50px;width: 50px;border-radius: 50px;position: absolute;background: #663366;text-align: center;">
                    <p style="color: #999933;">
                        <span id="main_page_institution_rgb_notification_counter" style="font-size: 13px;">0</span>
                    </p>
                </div>
            </div>
            <div class="scrolls" style="background: white;overflow-y: scroll;height: 240px;">
                <div id="main_page_institution_rgb_notification_counter_messenger">
                    <img src="images/ic_notifications_active_black_48dp.png" style="margin-top:15%;margin-left:35%;width: 100px;height: 100px;" />
                    <h4  style="font-style: italic;color: #999933;margin-left:10%;"> <?php
                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_1("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_1("system_config_xml/" . $_global_language)->item(0)->textContent;
                        } else {
                            ?>
                            You have no new notifications right now
                        <?php } ?> </h4>
                </div>
                <div id="notifications_panel" style="width: 100%;height: 100%;" >
                    <div id="notifications_panel_data_pool_2017">
                        <!-- <div class="uv_0000" onclick="notification_pop(this)" id="notify_0_0">
                             <table class="notify_record"  style="cursor: hand;">
                                 <tr>
                                     <td><img src="images/32210901391_becdb7c654_c-ca7f3.jpg" style="width: 50px;height: 50px;border-radius: 50px;" /></td>
                                     <td style="width: 60%;">
                                     <p >
                                         RGB idad adaida daidhad aduhad aausad
                                     </p></td>
                                     <td><label style="font-size: 11px;">2 minutes</label></td>
                                 </tr>
                             </table>
                         </div>
                         <div class="uv_0000" onclick="notification_pop(this)" id="notify_0_1">
                             <table class="notify_record"  style="cursor: hand;">
                                 <tr>
                                     <td><img src="images/32210901391_becdb7c654_c-ca7f3.jpg" style="width: 50px;height: 50px;border-radius: 50px;" /></td>
                                     <td style="width: 60%;">
                                     <p >
                                         RGB idad adaida daidhad aduhad aausad
                                     </p></td>
                                     <td><label style="font-size: 11px;">2 minutes</label></td>
                                 </tr>
                             </table>
                         </div>
                         <div class="uv_0000" onclick="notification_pop(this)" id="notify_0_2">
                             <table class="notify_record"  style="cursor: hand;">
                                 <tr>
                                     <td><img src="images/32210901391_becdb7c654_c-ca7f3.jpg" style="width: 50px;height: 50px;border-radius: 50px;" /></td>
                                     <td style="width: 60%;">
                                     <p >
                                         RGB idad adaida daidhad aduhad aausad
                                     </p></td>
                                     <td><label style="font-size: 11px;">2 minutes</label></td>
                                 </tr>
                             </table>
                         </div>-->
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
            <div class="mainPage_Message" id="mainpageMessage" >
                <h4 style="text-align: left;padding-left: 10px;"><?php
                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_2("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_2("system_config_xml/" . $_global_language)->item(0)->textContent;
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
                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_3("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_3("system_config_xml/" . $_global_language)->item(0)->textContent;
                        } else {
                            ?>
                            You will receive messages from institutions
                            of which you have suggested.
                        <?php } ?> </h4>
                </div>
                <div id="notifications_panel_for_message" style="width: 100%;height: 100%;" >
                    <!--<div class="message_record" onclick="Messages_pop(this)" id="2">

                        <table >
                            <tr>
                                <td><img src="images/32210901391_becdb7c654_c-ca7f3.jpg" style="width: 50px;height: 50px;border-radius: 50px;" /></td>
                                <td style="width: 60%;">
                                <p>
                                    RGB idad adaida daidhad aduhad aausad
                                </p></td>
                                <td><label style="font-size: 11px;">2 minutes</label></td>
                            </tr>
                        </table>
                    </div>
                    <div class="message_record" onclick="Messages_pop(this)" id="1">
                        <table >
                            <tr>
                                <td><img src="images/32210901391_becdb7c654_c-ca7f3.jpg" style="width: 50px;height: 50px;border-radius: 50px;" /></td>
                                <td style="width: 60%;">
                                <p>
                                    RGB idad adaida daidhad aduhad aausad
                                </p></td>
                                <td><label style="font-size: 11px;">2 minutes</label></td>
                            </tr>
                        </table>
                    </div>
                    <div class="message_record" onclick="Messages_pop(this)" id="0">
                        <table >
                            <tr>
                                <td><img src="images/32210901391_becdb7c654_c-ca7f3.jpg" style="width: 50px;height: 50px;border-radius: 50px;" /></td>
                                <td style="width: 60%;">
                                <p>
                                    RGB idad adaida daidhad aduhad aausad
                                </p></td>
                                <td><label style="font-size: 11px;">2 minutes</label></td>
                            </tr>
                        </table>
                    </div>-->

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
                                    <input type="button" style="border:3px solid #0080FF;border-radius: 3px;color: black;background: white;" value="Send" />
                                </div>
                                <div style="clear: both;float: left;padding-left: 20px;color: black;">
                                    <textarea style="border-radius: 8px;width:500px;height: 80px;" placeholder="Message here"></textarea>
                                    <div style="text-align: left;margin-top: 10px;font-weight: bold;">
                                        <?php
                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_4("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_4("system_config_xml/" . $_global_language)->item(0)->textContent;
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

                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>

        </div>

        <!-- Middle part-->
        <div style="width: 44%;float: left;border-left: 1px solid #cdcdcd;" id="main_page_col_middle">
            <table style="margin-left: 15%;">
                <tr>
                    <td>
                        <div class="box_receipt"  id="institution_queries">
                            <?php
                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_5("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_5("system_config_xml/" . $_global_language)->item(0)->textContent;
                            } else {
                                ?>
                                QUERIES ISSUED
                            <?php } ?>
                        </div></td>
                    <td>
                        <div class="box_receipt" id="institution_suggest_box_psanel">
                            <?php
                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_6("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_6("system_config_xml/" . $_global_language)->item(0)->textContent;
                            } else {
                                ?>
                                SUGGESTION BOX PANEL
                            <?php } ?>
                        </div></td>
                <input type="hidden" value="queries" id="panel_choice" />
                </tr>
            </table>
            <div id="rgb_queries_">
                <div>
                    <div style="width: 100%">
                        <div style="float: left;width: 44%;border: 2px solid green;border-radius: 5px;">
                            <form>
                                <table>
                                    <tr>
                                        <td>
                                            <input title="ascending" onchange="main_page_institution_rgb_sort_classA_query_choose_2017(this)"  name="sgstChoice_classA_rgb" type="radio" />
                                        </td>
                                        <td><?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_7("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_7("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                Ascending order of dates
                                            <?php } ?></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input title="descending" onchange="main_page_institution_rgb_sort_classA_query_choose_2017(this)" name="sgstChoice_classA_rgb" checked="checked" type="radio" />
                                        </td>
                                        <td><?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_8("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_8("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                Descending order of dates
                                            <?php } ?></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input  title="byname" onchange="main_page_institution_rgb_sort_classA_query_choose_2017(this)" name="sgstChoice_classA_rgb" type="radio" />
                                        </td>
                                        <td>
                                            <input id="main_page_institution_rgb_sort_2017_by_name" type="text" placeholder="<?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_9("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_9("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                       By Name
                                                   <?php } ?>" style="width: 160px" class="accountRegPuts_small" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input title="bykeyword" onchange="main_page_institution_rgb_sort_classA_query_choose_2017(this)" name="sgstChoice_classA_rgb" type="radio" />
                                        </td>
                                        <td>
                                            <input id="main_page_institution_rgb_sort_2017_by_keyword" type="text" placeholder="<?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_10("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_10("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                       By Keyword
                                                   <?php } ?>" style="width: 160px" class="accountRegPuts_small" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input title="bygender" onchange="main_page_institution_rgb_sort_classA_query_choose_2017(this)" name="sgstChoice_classA_rgb" type="radio" />
                                        </td>
                                        <td>
                                            <select id="main_page_institution_rgb_sort_2017_by_gender" style="width: 160px" class="accountRegPuts_small">
                                                <option value="all"><?php
                                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_11("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_11("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                    } else {
                                                        ?>
                                                        By Gender
                                                    <?php } ?></option>
                                                <option value="male"><?php
                                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_12("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_12("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                    } else {
                                                        ?>
                                                        By Male
                                                    <?php } ?></option>
                                                <option value="female"><?php
                                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_13("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_13("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                    } else {
                                                        ?>
                                                        By Female
                                                    <?php } ?></option>
                                            </select></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input title="bymaritalstatus" onchange="main_page_institution_rgb_sort_classA_query_choose_2017(this)" name="sgstChoice_classA_rgb" type="radio" />
                                        </td>
                                        <td>
                                            <select id="main_page_institution_rgb_sort_2017_by_marital_status" style="width: 160px" class="accountRegPuts_small">
                                                <option value="all"><?php
                                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_14("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_14("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                    } else {
                                                        ?>
                                                        By Marital status
                                                    <?php } ?></option>
                                                <option value="single"><?php
                                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_15("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_15("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                    } else {
                                                        ?>
                                                        Single
                                                    <?php } ?></option>
                                                <option value="married"><?php
                                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_16("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_16("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                    } else {
                                                        ?>
                                                        Married
                                                    <?php } ?></option>
                                                <option value="divorced"><?php
                                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_17("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_17("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                    } else {
                                                        ?>
                                                        Divorced
                                                    <?php } ?></option>
                                                <option value="widow"><?php
                                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_18("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_18("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                    } else {
                                                        ?>
                                                        Widow
                                                    <?php } ?></option>
                                                <option value="widower"><?php
                                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_19("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_19("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                    } else {
                                                        ?>
                                                        Widower
                                                    <?php } ?></option>
                                            </select></td>
                                        <td>
                                            <input onclick="main_page_institution_rgb_sort_classA_query()" type="button" value="<?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_20("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_20("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                       Sort
                                                   <?php } ?>" class="btn" style="margin-left: 0px;" />
                                        </td>
                                    </tr>
                                </table>
                            </form>
                            <div style="clear: both;"></div>

                        </div>
                        <div style="float: left;width: 54%;border: 2px solid green;border-radius: 5px;">
                            <form>
                                <table style="margin-left: -4px">
                                    <tr>
                                        <td>
                                            <input title="bycategory" checked="true" onclick="main_page_institution_rgb_sort_classB_query_choose_2017(this)" name="sgstChoice_classB_rgb" type="radio" />
                                        </td>
                                        <td><?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_21("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_21("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                By category:
                                            <?php } ?></td>
                                        <td>
                                            <select id="main_page_institution_rgb_sort_2017_by_category" class="accountRegPuts_small" style="width: 100px;">
                                                <option value="all"><?php
                                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_22("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_22("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                    } else {
                                                        ?>
                                                        All
                                                    <?php } ?></option>
                                                <option value="mutuelle"><?php
                                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_23("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_23("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                    } else {
                                                        ?>
                                                        MUTUELLE
                                                    <?php } ?></option>
                                                <option value="girinka"><?php
                                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_24("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_24("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                    } else {
                                                        ?>
                                                        GIRINKA
                                                    <?php } ?></option>
                                                <option value='umurenge sacco'><?php
                                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_25("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_25("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                    } else {
                                                        ?>
                                                        UMURENGE SACCO
                                                    <?php } ?></option>
                                                <option value='vup'><?php
                                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_26("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_26("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                    } else {
                                                        ?>
                                                        VUP
                                                    <?php } ?></option>
                                                <option value='ibibazobyabaturage'><?php
                                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_27("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_27("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                    } else {
                                                        ?>
                                                        IBIBAZO BY'ABATURAGE
                                                    <?php } ?></option>
                                            </select></td>
                                        <td>
                                            <input onclick="main_page_institution_rgb_sort_classB_query()" type="button" value="<?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_28("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_28("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                       Sort
                                                   <?php } ?>" class="btn" />
                                        </td>
                                    </tr>

                                </table>
                                <table style="margin-left: -4px">
                                    <tr>
                                        <td>
                                            <input title="byprogress" onclick="main_page_institution_rgb_sort_classB_query_choose_2017(this)" name="sgstChoice_classB_rgb" type="radio" />
                                        </td>
                                        <td><?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_29("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_29("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                By progress:
                                            <?php } ?></td>
                                        <td>
                                            <select id="main_page_institution_rgb_sort_2017_by_progress" class="accountRegPuts_small" style="width: 100px;">
                                                <option value="unresolved"><?php
                                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_30("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_30("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                    } else {
                                                        ?>
                                                        Unresolved
                                                    <?php } ?></option>
                                                <option value="resolved"><?php
                                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_31("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_31("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                    } else {
                                                        ?>
                                                        Resolved
                                                    <?php } ?></option>
                                                <option value="pending"><?php
                                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_32("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_32("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                    } else {
                                                        ?>
                                                        Pending
                                                    <?php } ?></option>
                                                <option value="unsatisfied"><?php
                                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_33("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_33("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                    } else {
                                                        ?>
                                                        Unsatisfied
                                                    <?php } ?></option>
                                                <option value="inprogress"><?php
                                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_34("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_34("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                    } else {
                                                        ?>
                                                        In Progress
                                                    <?php } ?></option>
                                                <option value="unread"><?php
                                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_35("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_35("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                    } else {
                                                        ?>
                                                        Unread
                                                    <?php } ?></option>
                                                <option value="repliedto"><?php
                                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_36("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_36("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                    } else {
                                                        ?>
                                                        Replied to
                                                    <?php } ?></option>
                                            </select></td>
                                        <td>
                                            <input onclick="main_page_institution_rgb_sort_classC_query()" type="button" value="<?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_37("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_37("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                       Sort
                                                   <?php } ?>" class="btn" />
                                        </td>
                                    </tr>

                                </table>
                                <h4>
                                    <input title="bydaterange" onclick="main_page_institution_rgb_sort_classB_query_choose_2017(this)" name="sgstChoice_classB_rgb" type="radio" />
                                    <?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_38("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_38("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        Sorting by Date Range
                                    <?php } ?></h4>
                                <table>
                                    <tr>
                                        <td> <?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_39("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_39("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                from
                                            <?php } ?> </td>
                                        <td>
                                            <input style="width: 120px" class="accountRegPuts" placeholder="<?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_40("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_40("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                       First Date
                                                   <?php } ?>" id="pickBirthDay_second_99" type="text" />
                                        </td>
                                        <td><?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_41("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_41("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                to
                                            <?php } ?></td>
                                        <td>
                                            <input style="width: 120px" class="accountRegPuts" placeholder="<?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_42("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_42("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                       Last Date
                                                   <?php } ?>" id="pickBirthDay_second_98" type="text" />
                                        </td>
                                    </tr>

                                </table>
                                <table>
                                    <tr>
                                        <td>
                                            <input onclick="main_page_institution_rgb_sort_classD_query('ASC')" class="btn" type="button" value="<?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_43("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_43("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                       Sort in Ascending order
                                                   <?php } ?>" />
                                        </td>
                                        <td>
                                            <input onclick="main_page_institution_rgb_sort_classD_query('DESC')" class="btn" type="button" value="<?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_44("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_44("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                       Sort in Descending order
                                                   <?php } ?>" />
                                        </td>
                                    </tr>
                                </table>
                                <div style="clear: both;"></div>

                        </div>
                        </form>
                    </div>
                </div>
                <div style="clear: both;"></div>
                <div id="main_page_institution_rgb_reply_popup" style="z-index:10000;background:rgba(20,20,20,.6);max-width:40%;min-width:200px;min-height:200px;visibility:hidden;position: absolute;border-radius:5px;padding: 5px;box-shadow:2px 2px 2px #333333;" >
                    <input type="button" onclick="main_page_rgb_reply_to_query_hide()"  value="X" class="btn" style="color:red;padding: 2px;float: right;margin-right: 10%;margin-top: 4px;" />
                    <div class="scrolls" id="main_page_institution_rgb_reply_popup_data" style="height:260px;overflow-y:scroll;text-align:center;padding:6px;border-radius:4px;box-shadow: 1px 1px 1px #cdcdcd;rgba(255,255,255,.7);color:#333333;background: #cdcdcd;margin-top:30px;">
                        <p>Test--</br>
                            oajdad aduha8dua dnabv dandb adb dba djabdva dhab dadba dba dabdv ajdba dabd abdva dba abu
                            adabudadv adbav daidbva jdavd adva duavd ajd adbuva dauvd audbv ahdbvua dvua 
                            vadubaugvubgdvy abdva dav dabvu 
                        </p>

                    </div> 
                    <div style="position: absolute;border-radius: 8px;margin-top: 8px;">
                        <table style="margin-left: 3%;">
                            <tr>
                                <td><input type="hidden" value="show_all_types_of_messages" id="main_page_institution_suggest_comment_pool_strategy_rgb_queries_2017" />
                                    <input checked="true" onclick="main_page_institution_suggest_comment_mark_this_rgb_queries_2017(this, 'all')"  id="jdj9900_rgb_queries_2017" name="selector_comment_all_from_suggest_2017_rgb_queries_2017" type="radio" style="width: 30px;height: 30px;" />                                         
                                </td>
                                <td>
                                    <img src="images/special_mail_comm.png" title="Marked as visible to External User" style="height: 40px;width: 60px;box-shadow: 2px 2px 2px #ffffff;" />
                                </td>
                                <td>
                                    <img src="images/normal_internal_message.png" title="Marked as invisible to External User" style="height: 40px;width: 60px;box-shadow: 2px 2px 2px #ffffff;" />
                                </td>
                                <td>
                                    <input onclick="main_page_institution_suggest_comment_mark_this_rgb_queries_2017(this, 'internal')" id="jdj9901_rgb_queries_2017"  name="selector_comment_all_from_suggest_2017_rgb_queries_2017" type="radio" style="width: 30px;height: 30px;" />                                         
                                </td>

                                <td>
                                    <img src="images/normal_internal_message.png" title="Marked as invisible to External User" style="height: 40px;width: 60px;box-shadow: 2px 2px 2px #ffffff;" />
                                </td>  
                                <td>
                                    <input onclick="main_page_institution_suggest_comment_mark_this_rgb_queries_2017(this, 'external')" id="jdj9902_rgb_queries_2017" name="selector_comment_all_from_suggest_2017_rgb_queries_2017" type="radio" style="width: 30px;height: 30px;" />                                         
                                </td>
                                <td>
                                    <img src="images/special_mail_comm.png" title="Marked as visible to External User" style="height: 40px;width: 60px;box-shadow: 2px 2px 2px #ffffff;" />
                                </td>

                            </tr>
                            <input type="hidden" id="main_page_institution_suggestion_cmnt_flag_2017_rgb_queries_2017" />
                        </table> 
                    </div>  
                    <div style="text-align:center;padding:6px;border-radius:4px;box-shadow: 1px 1px 1px #cdcdcd;rgba(255,255,255,.7);color:#333333;background: #cdcdcd;margin-top:70px;">
                        <table>
                            <tr>
                                <td><textarea id="main_page_institution_suggesttion_comment_data_rgb_queries_2017" onkeydown="textAreaAdjust(this)" style="padding:5px;color:black;font-size:14px;background: white;border-radius: 4px;border-style: none;width:300px;min-height: 100px;" class="accountRegPuts"></textarea></td>
                                <td><input type="hidden" id="main_page_institution_suggest_comment_pool_view_strategy_rgb_queries_2017" value="visible_to_public" /><form><table>
                                            <tr>
                                                <td style="font-size: 12px;">Visible To Public</td><td><input id="cmmntType456_main_rgb_queries_2017" checked="true" onclick="main_page_institution_comment_commntTypeMugabo_2017_rgb_queries_2017(this, 'visible_public')" name="radioCmntse455_rgb_queries_2017" type="radio" style="width: 30px;height: 30px;" /></td>
                                            </tr>
                                            <tr>
                                                <td style="font-size: 12px;">Only Internal</td><td><input id="cmmntType457_main_rgb_queries_2017" name="radioCmntse455_rgb_queries_2017" onclick="main_page_institution_comment_commntTypeMugabo_2017_rgb_queries_2017(this, 'visible_private')" type="radio" style="width: 30px;height: 30px;" /></td>
                                            </tr>
                                        </table></form></td>
                                <td><input type="button" onclick="main_page_institution_suggest_comment_2017_send_rgb_queries_2017()"  value="Send Comment" style="padding: 4px;" class="btn" /></td>
                            </tr>
                        </table>
                    </div>

                </div>
                <div id="main_page_institution_rgb_forward_as_popup" style="z-index:10000;background:rgba(20,20,20,.6);max-width:40%;min-width:200px;min-height:200px;visibility:hidden;position: absolute;border-radius:5px;padding: 5px;box-shadow:2px 2px 2px #333333;">
                    <input type="button" onclick="main_page_rgb_forward_this_query_hide()"  value="X" class="btn" style="color:red;padding: 2px;float: right;margin-right: 10%;margin-top: 4px;" />
                    <div id="main_page_institution_rgb_forward_as_popup_data" style="text-align:center;padding:6px;border-radius:4px;box-shadow: 1px 1px 1px #cdcdcd;rgba(255,255,255,.7);color:#333333;background: #cdcdcd;margin-top:30px;">
                        <div style="background:#cdcdcd;border-radius: 5px;padding: 8px;">
                            <h4><?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_47("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_47("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                    Forward as:
                                <?php } ?></h4>
                            <ul  style="list-style: none;">
                                <li onclick="main_page_institution_forward_as_tools('delegation', this)" id="delegationx" style="margin-top: 8px;" class="delegationThings">
                                    <?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_48("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_48("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        Delegation
                                    <?php } ?>
                                </li>
                                <li onclick="main_page_institution_forward_as_tools('consultation', this)" id="consultationx" style="margin-top: 8px;" class="delegationThings">
                                    <?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_49("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_49("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        Consultation
                                    <?php } ?>
                                </li>
                            </ul>
                        </div>

                    </div> 
                    <div id="main_page_institution_rgb_forward_as_popup_contingency" style="margin-left:190px;margin-top:-150px;z-index:10000;background:rgba(20,20,20,.6);min-height:200px;visibility:hidden;position: absolute;border-radius:5px;padding: 5px;box-shadow:2px 2px 2px #333333;">
                        <input type="button" onclick="main_page_rgb_forward_this_query_hide_contingency()"  value="X" class="btn" style="color:red;padding: 2px;float: right;margin-right: 10%;margin-top: 4px;" />
                        <div style="background:#cdcdcd;border-radius:5px;color: #333333;text-shadow: 1px 1px 1px #333333;" id="main_page_institution_rgb_forward_as_popup_contingency_msg"></div>
                        <div id="main_page_institution_rgb_forward_as_popup_data_contingency" style="text-align:center;padding:6px;border-radius:4px;box-shadow: 1px 1px 1px #cdcdcd;rgba(255,255,255,.7);color:#333333;background: #cdcdcd;margin-top:30px;">
                            <div>
                                <!--<table style="width: 100%;">
                                    <tr>
                                        <td class="forward_contigen_2017_chosen" ><a style="text-decoration: none;color:white;" href="#ToInstitutions">To Institutions</a></td>                                     
                                     
                                        <td class="forward_contigen_2017" ><a style="text-decoration: none;color:white;" href="#ToIndividuals">To Individuals</a></td>                                      
                                     </tr>
                                </table>-->
                            </div>
                            <div id="rgb_my_whole_tabs_2017">
                                <ul>
                                    <li><a style="text-decoration: none;color:#333333;" href="#ToInstitutions">To Institutions</a></li>
                                    <li><a style="text-decoration: none;color:#333333" href="#ToIndividuals">To Individuals</a></li>
                                </ul>
                                <div id="ToInstitutions">
                                    <div><table>
                                            <tr>
                                                <td><input onkeyup="main_page_institution_search_through_institutions_ForDelegation(this)" class="accountRegPuts" type="text" placeholder="Search Institution here" /></td>
                                                <td><input class="btn" onclick="main_page_institution_rgb_load_all_institutions_only()" type="button" value="View All" /></td>
                                            </tr>
                                        </table></div>
                                    <div>

                                    </div>
                                    <div id="ToInstitutions_search_results" class="scrolls" style="height: 270px;overflow-y: scroll;">



                                    </div>
                                </div>
                                <div id="ToIndividuals">
                                    <div><table>
                                            <tr>
                                                <td><input class="accountRegPuts" onkeyup="main_page_institution_search_through_institutions_officials_ForDelegation(this)" type="text" placeholder="Search Individuals here" /></td>
                                                <td><input class="btn" onclick="main_page_institution_rgb_load_all_institutions_with_officials()" type="button" value="View All" /></td>
                                            </tr>
                                        </table></div>
                                    <div id="ToIndividuals_search_results" class="scrolls" style="height: 270px;overflow-y: scroll;">
                                        <div id="rgb_forward_query">





                                        </div>
                                    </div>
                                </div>

                            </div>



                        </div>
                    </div>

                </div>
                <div onclick="main_page_institution_rgb_load_more_queriesUp()" style="margin-top: 10px;margin-left: 45%;"> <img src="images/up_new_load.png" style="width: 30px;height: 30px;border-radius: 4px;text-align: center;box-shadow: 2px 2px 2px #333333;cursor: hand;" /></div>

                <div class="scrolls" id="main_page_institution_rgb_query_pool_data_2017" style="">
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
                
                 ORDER BY ogenius_nds_db_rgb_query_id DESC LIMIT 60      ";
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
                            <div style="border-top: 2px solid #999933;border-bottom: 2px solid #999933;margin: 30px;border-radius: 7px;">
                                <div style="text-align: left;color: #999933;cursor: hand;">
                                    <!--<?php echo "" . checkMyPostingPrivacyStatus($res_main_page_institution_queries['ogenius_nds_db_normal_users_id'], $res_main_page_institution_queries['ogenius_nds_db_normal_users_names']); ?>
                                    --><img id='view_rgb<?php echo "d" . $n . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_id']; ?>' name='<?php echo "" . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_id']; ?>' onclick="main_page_institution_visualize_suggestion_details_rgb(this)" src="images/view_this.png" style="width: 30px;height: 30px;margin: 10px;box-shadow: 2px 2px 2px #cdcdcd;" />
                                </div>
                                <div style="color: #999933;text-align: left;font-weight:bold;;cursor: hand;margin-left:50px;">
                                    <?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_45("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_45("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        Category:
                                    <?php } ?> <span style="color: #999933;font-weight:100"><?php echo "" . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_orientation']; ?></span>
                                </div>
                                <div style="color: black;text-align: left;">
                                    <?php echo "" . activateUrlStringsw($res_main_page_institution_queries['ogenius_nds_db_rgb_query_query']); ?>


                                </div>
                                <table>
                                    <tr>
                                        <td>
                                            <div id='wex_<?php echo "" . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_id']; ?>' onclick="main_page_rgb_reply_to_query(this,<?php echo "" . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_query_provider']; ?>,<?php echo "" . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_id']; ?>)" style="color: #999933;border-radius: 6px;background: #1F628D;color: white;padding:4px;cursor: hand;">
                                                <?php
                                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_46("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_46("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                } else {
                                                    ?>
                                                    Reply
                                                <?php } ?>
                                            </div></td>
                                        <td>
                                            <div id='weeex_<?php echo "" . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_id']; ?>' onclick="main_page_rgb_forward_this_query(this,<?php echo "" . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_query_provider']; ?>,<?php echo "" . $res_main_page_institution_queries['ogenius_nds_db_rgb_query_id']; ?>)" style="color: #999933;border-radius: 6px;background: #1F628D;color: white;padding:4px;cursor: hand;">
                                                <?php
                                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_47("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_rgb_47("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                } else {
                                                    ?>
                                                    Forward as:
                                                <?php } ?>
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
                                            </div></td>
                                        <td>
                                            <div style="margin-left:80px;color: #0000FF;">
                                                <?php echo "" . time_to_sec($res_main_page_institution_queries['ogenius_nds_db_rgb_query_date']); ?>
                                            </div></td>
                                    </tr>
                                </table>

                            </div>



                            <?php
                        }
                    }
                    ?>
               

                </div>
                <div onclick="main_page_institution_rgb_load_more_queriesDown()" style="margin-top: 10px;margin-left: 45%;"> <img src="images/down_new_load.png" style="width: 30px;height: 30px;border-radius: 4px;text-align: center;box-shadow: 2px 2px 2px #333333;cursor: hand;" /></div>



            </div>

            <div   id="rgb_suggestion_panel">
                <div style="width: 100%">
                    <div style="float: left;width: 44%;border: 2px solid green;border-radius: 5px;">
                        <form>
                            <table>
                                <tr>
                                    <td>
                                        <input onchange="main_page_institution_suggestions_sortClassA_markIt(this)" id="m_insti_ascending" name="sgstChoice" type="radio" />
                                    </td>
                                    <td><?php
                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_6("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_6("system_config_xml/" . $_global_language)->item(0)->textContent;
                    } else {
                        ?>
                                            Ascending order of dates
                                        <?php } ?></td>
                                </tr>
                                <tr>
                                    <td>
                                        <input onchange="main_page_institution_suggestions_sortClassA_markIt(this)" id="m_insti_descending" name="sgstChoice" checked="checked" type="radio" />
                                    </td>
                                    <td><?php
                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_7("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_7("system_config_xml/" . $_global_language)->item(0)->textContent;
                                        } else {
                                            ?>
                                            Descending order of dates
                                        <?php } ?></td>
                                </tr>
                                <tr>
                                    <td>
                                        <input onchange="main_page_institution_suggestions_sortClassA_markIt(this)" id="m_insti_byname" name="sgstChoice" type="radio" />
                                    </td>
                                    <td>
                                        <input type="text" placeholder="<?php
                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_8("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_8("system_config_xml/" . $_global_language)->item(0)->textContent;
                                        } else {
                                            ?>
                                                   By Name
                                        <?php } ?>" style="width: 160px" id='main_page_institutioin_suggest_byname' class="accountRegPuts_small" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input onchange="main_page_institution_suggestions_sortClassA_markIt(this)" id="m_insti_bykeyword" name="sgstChoice" type="radio" />
                                    </td>
                                    <td>
                                        <input type="text" placeholder="<?php
                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_9("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_9("system_config_xml/" . $_global_language)->item(0)->textContent;
                                        } else {
                                            ?>
                                                   By Keyword
                                        <?php } ?>" style="width: 160px" id='main_page_institutioin_suggest_bykeyword' class="accountRegPuts_small" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input onchange="main_page_institution_suggestions_sortClassA_markIt(this)" id="m_insti_bygender" name="sgstChoice" type="radio" />
                                    </td>
                                    <td>
                                        <select id='main_page_institutioin_suggest_bygender' style="width: 160px" class="accountRegPuts_small">
                                            <option><?php
                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_10("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_10("system_config_xml/" . $_global_language)->item(0)->textContent;
                                        } else {
                                            ?>
                                                    By Gender
                                                <?php } ?></option>
                                            <option value="male"><?php
                                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_11("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_11("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                } else {
                                                    ?>
                                                    By Male
                                                <?php } ?></option>
                                            <option value="female"><?php
                                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_12("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_12("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                } else {
                                                    ?>
                                                    By Female
                                                <?php } ?></option>
                                        </select></td>
                                </tr>
                                <tr>
                                    <td>
                                        <input onchange="main_page_institution_suggestions_sortClassA_markIt(this)" id="m_insti_bymarital_status" name="sgstChoice" type="radio" />
                                    </td>
                                    <td>
                                        <select id='main_page_institutioin_suggest_bymarital_status' style="width: 160px" class="accountRegPuts_small">
                                            <option><?php
                                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_13("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_13("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                } else {
                                                    ?>
                                                    By Marital status
                                                <?php } ?></option>
                                            <option value="single"><?php
                                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_14("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_14("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                } else {
                                                    ?>
                                                    Single
                                                <?php } ?></option>
                                            <option value="married"><?php
                                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_15("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_15("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                } else {
                                                    ?>
                                                    Married
                                                <?php } ?></option>
                                            <option value="divorced"><?php
                                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_16("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_16("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                } else {
                                                    ?>
                                                    Divorced
                                                <?php } ?></option>
                                            <option value="widow"><?php
                                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_17("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_17("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                } else {
                                                    ?>
                                                    Widow
                                                <?php } ?></option>
                                            <option value="widower"><?php
                                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_18("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_18("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                } else {
                                                    ?>
                                                    Widower
                                                <?php } ?></option>
                                        </select></td>
                                    <td>
                                        <input onclick="main_page_institution_suggestions_sortClassA()" type="button" value="<?php
                                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_19("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_19("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                } else {
                                                    ?>
                                                   Sort
                                        <?php } ?>" class="btn" style="margin-left: 0px;" />
                                    </td>
                                </tr>
                            </table>
                            <div style="clear: both;"></div>
                        </form>

                    </div>
                    <div style="float: left;width: 54%;border: 2px solid green;border-radius: 5px;">
                        <form name="class_Inst_b">
                            <table style="margin-left: -4px">
                                <tr>
                                    <td>
                                        <input class="insti_media_type" checked="true" onchange="main_page_institution_suggestions_sortClassB_markIt(this)" id='m_insti_media_type' name="sgstChoice_classB" type="radio" />
                                    </td>
                                    <td><?php
                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_20("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_20("system_config_xml/" . $_global_language)->item(0)->textContent;
                                        } else {
                                            ?>
                                            By media type:
                                        <?php } ?></td>
                                    <td>
                                        <select id='main_page_institutioin_suggest_bymedia_type' class="accountRegPuts_small" style="width: 100px;">
                                            <option value="all"><?php
                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_21("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_21("system_config_xml/" . $_global_language)->item(0)->textContent;
                                        } else {
                                            ?>
                                                    All
                                                <?php } ?></option>
                                            <option value="text"><?php
                                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_22("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_22("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                } else {
                                                    ?>
                                                    Text
                                                <?php } ?></option>
                                            <option value="audio"><?php
                                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_23("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_23("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                } else {
                                                    ?>
                                                    Audio
                                                <?php } ?></option>
                                            <option value="image"><?php
                                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_media_image("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_media_image("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                } else {
                                                    ?>
                                                    Image
                                                <?php } ?></option>
                                            <option value="video"><?php
                                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_24("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_24("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                } else {
                                                    ?>
                                                    Video
                                                <?php } ?></option>
                                        </select></td>
                                    <td>
                                        <input type="button" value="<?php
                                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_25("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_25("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                } else {
                                                    ?>
                                                   Sort
                                        <?php } ?>" onclick='main_page_institution_suggestions_sortClassB()' class="btn" />
                                    </td>
                                </tr>

                            </table>
                            <h4>
                                <input class="insti_date_range" onchange="main_page_institution_suggestions_sortClassB_markIt(this)" id='m_insti_date_range' name="sgstChoice_classB" type="radio" />
<?php
if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_26("system_config_xml/" . $_global_language)->item(0)->textContent)) {
    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_26("system_config_xml/" . $_global_language)->item(0)->textContent;
} else {
    ?>
                                    Sorting by Date Range
                                <?php } ?></h4>
                            <table>
                                <tr>
                                    <td> <?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_27("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_27("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                            from
                                        <?php } ?> </td>
                                    <td>
                                        <input style="width: 120px" class="accountRegPuts" placeholder="<?php
                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_28("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_28("system_config_xml/" . $_global_language)->item(0)->textContent;
                                        } else {
                                            ?>
                                                   First Date
                                        <?php } ?>" id="pickBirthDay" type="text" />
                                    </td>
                                    <td><?php
                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_29("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_29("system_config_xml/" . $_global_language)->item(0)->textContent;
                                        } else {
                                            ?>
                                            to
                                        <?php } ?></td>
                                    <td>
                                        <input style="width: 120px" class="accountRegPuts" placeholder="<?php
                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_30("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_30("system_config_xml/" . $_global_language)->item(0)->textContent;
                                        } else {
                                            ?>
                                                   Last Date
                                        <?php } ?>" id="pickBirthDay_second" type="text" />
                                    </td>
                                </tr>

                            </table>
                            <table>
                                <tr>
                                    <td>
                                        <input onclick='main_page_institution_suggestions_sortClassB_2("btn1")' class="btn" type="button" value="<?php
                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_31("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_31("system_config_xml/" . $_global_language)->item(0)->textContent;
                                        } else {
                                            ?>
                                                   Sort in Ascending order
                                        <?php } ?>" />
                                    </td>
                                    <td>
                                        <input onclick='main_page_institution_suggestions_sortClassB_2("btn2")' class="btn" type="button" value="<?php
                                               if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_32("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                   echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_32("system_config_xml/" . $_global_language)->item(0)->textContent;
                                               } else {
                                                   ?>
                                                   Sort in Descending order
                                        <?php } ?>" />
                                    </td>
                                </tr>
                            </table>
                            <div style="clear: both;"></div>

                    </div>
                    </form>
                </div>
                <div style="clear: both"></div>
                <div class="scrolls" style="">
                    <div id="main_page_institution_pic_view_container" style="visibility:hidden;background:rgba(30,30,30,0.7);z-index:10000;position: fixed;border-radius: 5px;box-shadow: 2px 2px 2px #cdeded;width: 60%;height: 60%;text-align: center;border-left: 1px solid #cdeded;border-top: 1px solid #cdeded;">
                        <input type="button" onclick="main_page_institution_pic_view()" value="X" class="btn" style="color:red;padding: 2px;float: right;margin-right: 10%;margin-top: 4px;" />
                        <div style="clear:both;width: 98%;height: 80%;">
                            <img src="" id="main_page_institution_pic_view_container_img_src" style="max-height: 98%;max-width: 98%;" />
                        </div>                   
                    </div>

                    <style type="text/css">
                        /*the chat bubbles----*/
                        .bubble img {
                            width: 40px;
                            height: 40px;
                        }
                        .bubbleLeftThem {
                            box-sizing: border-box;
                            float: left;
                            width: auto;
                            max-width: 60%;
                            position: relative;
                            clear: both;
                            background: #00AABB;
                            background-image: -webkit-gradient(linear, left bottom, left top, color-stop(0.15, #00AABB), color-stop(1, #95c2fd));
                            background-image: -webkit-linear-gradient(bottom, #00AABB 15%, #95c2fd 100%);
                            background-image: -moz-linear-gradient(bottom, #00AABB 15%, #95c2fd 100%);
                            background-image: -ms-linear-gradient(bottom, #00AABB 15%, #95c2fd 100%);
                            background-image: -o-linear-gradient(bottom, #00AABB 15%, #00AABB 100%);
                            background-image: linear-gradient(bottom, #00AABB 15%, #00AABB 100%);
                            filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr='#95c2fd', endColorstr='#bee2ff');
                            border: solid 1px rgba(0,0,0,0.5);
                            -webkit-border-radius: 20px;
                            -moz-border-radius: 20px;
                            border-radius: 20px;
                            -webkit-box-shadow: inset 0 8px 5px rgba(255,255,255,0.65), 0 1px 2px rgba(0,0,0,0.2);
                            -moz-box-shadow: inset 0 8px 5px rgba(255,255,255,0.65), 0 1px 2px rgba(0,0,0,0.2);
                            box-shadow: inset 0 8px 5px rgba(255,255,255,0.65), 0 1px 2px rgba(0,0,0,0.2);
                            margin-bottom: 20px;
                            padding: 6px 20px;
                            color: #000;
                            text-shadow: 0 1px 1px rgba(255,255,255,0.8);
                            word-wrap: break-word;
                        }
                        .bubble {
                            box-sizing: border-box;
                            float: left;
                            width: auto;
                            max-width: 60%;
                            position: relative;
                            clear: both;
                            background: #00AABB;
                            background-image: -webkit-gradient(linear, left bottom, left top, color-stop(0.15, #00AABB), color-stop(1, #95c2fd));
                            background-image: -webkit-linear-gradient(bottom, #00AABB 15%, #95c2fd 100%);
                            background-image: -moz-linear-gradient(bottom, #00AABB 15%, #95c2fd 100%);
                            background-image: -ms-linear-gradient(bottom, #00AABB 15%, #95c2fd 100%);
                            background-image: -o-linear-gradient(bottom, #00AABB 15%, #00AABB 100%);
                            background-image: linear-gradient(bottom, #00AABB 15%, #00AABB 100%);
                            filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr='#95c2fd', endColorstr='#bee2ff');
                            border: solid 1px rgba(0,0,0,0.5);
                            -webkit-border-radius: 20px;
                            -moz-border-radius: 20px;
                            border-radius: 20px;
                            -webkit-box-shadow: inset 0 8px 5px rgba(255,255,255,0.65), 0 1px 2px rgba(0,0,0,0.2);
                            -moz-box-shadow: inset 0 8px 5px rgba(255,255,255,0.65), 0 1px 2px rgba(0,0,0,0.2);
                            box-shadow: inset 0 8px 5px rgba(255,255,255,0.65), 0 1px 2px rgba(0,0,0,0.2);
                            margin-bottom: 20px;
                            padding: 6px 20px;
                            color: #000;
                            text-shadow: 0 1px 1px rgba(255,255,255,0.8);
                            word-wrap: break-word;
                        }

                        .bubble:before, .bubble:after {
                            border-radius: 20px /5px;
                            content: '';
                            display: block;
                            position: absolute;
                        }
                        .bubble:before {
                            border: 10px solid transparent;
                            border-bottom-color: rgba(0,0,0,0.5);
                            bottom: 0px;
                            left: -7px;
                            z-index: -2;
                        }
                        .bubble:after {
                            border: 8px solid transparent;
                            border-bottom-color: #bee2ff; /* arrow color */
                            bottom: 1px;
                            left: -5px;
                        }

                        .bubble-alt {
                            float: right;
                        }
                        .bubble-alt:before {
                            left: auto;
                            right: -7px;
                        }
                        .bubble-alt:after {
                            left: auto;
                            right: -5px;
                        }

                        .bubble p {
                            font-size: 1.4em;
                        }

                        /* green bubble */
                        .green {
                            background: #7acd47;
                            background-image: -webkit-gradient(linear,left bottom,left top,color-stop(0.15, #ace44b),color-stop(1, #7acd47));
                            background-image: -webkit-linear-gradient(bottom, #ace44b 15%, #7acd47 100%);
                            background-image: -moz-linear-gradient(bottom, #ace44b 15%, #7acd47 100%);
                            background-image: -ms-linear-gradient(bottom, #ace44b 15%, #7acd47 100%);
                            background-image: -o-linear-gradient(bottom, #ace44b 15%, #7acd47 100%);
                            background-image: linear-gradient(bottom, #ace44b 15%, #7acd47 100%);
                            filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr='#7acd47', endColorstr='#ace44b');
                        }
                        .green:after {
                            border-bottom-color: #ace44b;
                        }

                        /* white bubble */
                        .white {
                            background: #7acd47;
                            background-image: -webkit-gradient(linear,left bottom,left top,color-stop(0.15, #e5e5e5),color-stop(1, #dbdbdb));
                            background-image: -webkit-linear-gradient(bottom, #e5e5e5 15%, #dbdbdb 100%);
                            background-image: -moz-linear-gradient(bottom, #e5e5e5 15%, #dbdbdb 100%);
                            background-image: -ms-linear-gradient(bottom, #e5e5e5 15%, #dbdbdb 100%);
                            background-image: -o-linear-gradient(bottom, #e5e5e5 15%, #dbdbdb 100%);
                            background-image: linear-gradient(bottom, #e5e5e5 15%, #dbdbdb 100%);
                            filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr='#dbdbdb', endColorstr='#e5e5e5');
                        }
                        .white:after {
                            border-bottom-color: #e5e5e5;
                        }

                        /* yellow bubble */
                        .yellow {
                            background: #7acd47;
                            background-image: -webkit-gradient(linear,left bottom,left top,color-stop(0.15, #fcf3c3),color-stop(1, #f4e371));
                            background-image: -webkit-linear-gradient(bottom, #fcf3c3 15%, #f4e371 100%);
                            background-image: -moz-linear-gradient(bottom, #fcf3c3 15%, #f4e371 100%);
                            background-image: -ms-linear-gradient(bottom, #fcf3c3 15%, #f4e371 100%);
                            background-image: -o-linear-gradient(bottom, #fcf3c3 15%, #f4e371 100%);
                            background-image: linear-gradient(bottom, #fcf3c3 15%, #f4e371 100%);
                            filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr='#f4e371', endColorstr='#fcf3c3');
                        }
                        .yellow:after {
                            border-bottom-color: #fcf3c3;
                        }
                        .themCoolGs {
                            border-bottom-color: #547C90;
                        }

                        /* red bubble */
                        .red {
                            background: #7acd47;
                            background-image: -webkit-gradient(linear,left bottom,left top,color-stop(0.15, #ea8378),color-stop(1, #e2675a));
                            background-image: -webkit-linear-gradient(bottom, #ea8378 15%, #e2675a 100%);
                            background-image: -moz-linear-gradient(bottom, #ea8378 15%, #e2675a 100%);
                            background-image: -ms-linear-gradient(bottom, #ea8378 15%, #e2675a 100%);
                            background-image: -o-linear-gradient(bottom, #ea8378 15%, #e2675a 100%);
                            background-image: linear-gradient(bottom, #ea8378 15%, #e2675a 100%);
                            filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr='#e2675a', endColorstr='#ea8378');
                        }
                        .red:after {
                            border-bottom-color: #ea8378;
                        }

                        /* pink bubble */
                        .pink {
                            background: #7acd47;
                            background-image: -webkit-gradient(linear,left bottom,left top,color-stop(0.15, #ffbee3),color-stop(1, #f8a5ce));
                            background-image: -webkit-linear-gradient(bottom, #ffbee3 15%, #f8a5ce 100%);
                            background-image: -moz-linear-gradient(bottom, #ffbee3 15%, #f8a5ce 100%);
                            background-image: -ms-linear-gradient(bottom, #ffbee3 15%, #f8a5ce 100%);
                            background-image: -o-linear-gradient(bottom, #ffbee3 15%, #f8a5ce 100%);
                            background-image: linear-gradient(bottom, #ffbee3 15%, #f8a5ce 100%);
                            filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr='#f8a5ce', endColorstr='#ffbee3');
                        }

                        .meTra {
                            background: rgba(230,230,230,.7);
                        }

                        .pink:after {
                            border-bottom-color: #ffbee3;
                        }

                    </style>
                    <div id="main_page_institution_sugg_details_conversations_container_mugabo_2017" style="z-index:100000;background:rgba(20,20,20,.6);max-width:40%;min-width:200px;min-height:200px;visibility:hidden;position: absolute;border-radius:5px;padding: 5px;box-shadow:2px 2px 2px #333333;">
                        <input onclick="main_page_institution_visualize_suggestion_commentators_hide()" type="button"   value="X" class="btn" style="color:red;padding: 2px;float: right;margin-right: 10%;margin-top: 4px;" />

                        <div class="scrolls" id="main_page_institution_the_suggestion_chat_pool_2017_mugabo_data" style="overflow-y:scroll;height:300px;text-align:center;padding:6px;border-radius:4px;box-shadow: 1px 1px 1px #cdcdcd;rgba(255,255,255,.7);color:#333333;background: #cdcdcd;margin-top:30px;">
                            <div>                





                                <!--<div class="bubble themCoolGs" style="font-size: 13px;">
                                    <table style="margin-left: 40%;">
                                        <tr>
                                            <td><span style="color: #1A5A7A;text-shadow: 1px 1px 1px #333333;">Mugabo Cedro</span></td>                                 
                                        </tr>
                                    </table> 
                                  
                                     <div>
                                      fifh 2017 dgdbdu fdifbd fdbfd gib fdifdg dgidf dfidg dgi
                                      fdfidf dfdbfd fibdfdbg dgibdgdigd gidgdgidbg fdifdg
                                      fdihfdg digdg dbgdgd gdifbd gdigbdf dibffdg
                                      fdgjndg
                                    </div> 
                                     <table style="margin-left: 40%;">
                                        <tr>
                                            <td>
                                                <img src="images/special_mail_comm.png" title="Marked as visible to External User" style="max-height: 80px;max-width: 150px;" />
                                            </td>
                                            <td><span style="color: gold;text-shadow: 1px 1px 1px #333333;">33 min</span></td>                                 
                                        </tr>
                                    </table>    
                                  </div>-->                                                    



                            </div>
                        </div>
                        <div style="position: absolute;border-radius: 8px;margin-top: 8px;">
                            <table style="margin-left: 3%;">
                                <tr>
                                    <td><input type="hidden" value="show_all_types_of_messages" id="main_page_institution_suggest_comment_pool_strategy" />
                                        <input checked="true" onclick="main_page_institution_suggest_comment_mark_this(this)"  id="jdj9900" name="selector_comment_all_from_suggest_2017" type="radio" style="width: 30px;height: 30px;" />                                         
                                    </td>
                                    <td>
                                        <img src="images/special_mail_comm.png" title="Marked as visible to External User" style="height: 40px;width: 60px;box-shadow: 2px 2px 2px #ffffff;" />
                                    </td>
                                    <td>
                                        <img src="images/normal_internal_message.png" title="Marked as invisible to External User" style="height: 40px;width: 60px;box-shadow: 2px 2px 2px #ffffff;" />
                                    </td>
                                    <td>
                                        <input onclick="main_page_institution_suggest_comment_mark_this(this)" id="jdj9901"  name="selector_comment_all_from_suggest_2017" type="radio" style="width: 30px;height: 30px;" />                                         
                                    </td>

                                    <td>
                                        <img src="images/normal_internal_message.png" title="Marked as invisible to External User" style="height: 40px;width: 60px;box-shadow: 2px 2px 2px #ffffff;" />
                                    </td>  
                                    <td>
                                        <input onclick="main_page_institution_suggest_comment_mark_this(this)" id="jdj9902" name="selector_comment_all_from_suggest_2017" type="radio" style="width: 30px;height: 30px;" />                                         
                                    </td>
                                    <td>
                                        <img src="images/special_mail_comm.png" title="Marked as visible to External User" style="height: 40px;width: 60px;box-shadow: 2px 2px 2px #ffffff;" />
                                    </td>

                                </tr>
                                <input type="hidden" id="main_page_institution_suggestion_cmnt_flag_2017" />
                            </table> 
                        </div>                   

                        <div style="text-align:center;padding:6px;border-radius:4px;box-shadow: 1px 1px 1px #cdcdcd;rgba(255,255,255,.7);color:#333333;background: #cdcdcd;margin-top:70px;">
                            <table>
                                <tr>
                                    <td><textarea id="main_page_institution_suggesttion_comment_data" onkeydown="textAreaAdjust(this)" style="padding:5px;color:black;font-size:14px;background: white;border-radius: 4px;border-style: none;width:300px;min-height: 100px;" class="accountRegPuts"></textarea></td>
                                    <td><input type="hidden" id="main_page_institution_suggest_comment_pool_view_strategy" value="visible_to_public" /><form><table>
                                                <tr>
                                                    <td style="font-size: 12px;">Visible To Public</td><td><input id="cmmntType456_main" checked="true" onclick="main_page_institution_comment_commntTypeMugabo_2017(this)" name="radioCmntse455" type="radio" style="width: 30px;height: 30px;" /></td>
                                                </tr>
                                                <tr>
                                                    <td style="font-size: 12px;">Only Internal</td><td><input id="cmmntType457_main" name="radioCmntse455" onclick="main_page_institution_comment_commntTypeMugabo_2017(this)" type="radio" style="width: 30px;height: 30px;" /></td>
                                                </tr>
                                            </table></form></td>
                                    <td><input type="button" onclick="main_page_institution_suggest_comment_2017_send()"  value="Send Comment" style="padding: 4px;" class="btn" /></td>
                                </tr>
                            </table>
                        </div>

                    </div>
                    <div id="main_page_institution_suggestions_pool">
                        <div onclick="main_page_institution_load_latest_suggestions()" style="padding: 8px;border-radius: 4px;margin-left:40%;width: auto "><img src="images/up_new_load.png" style="width: 40px;height: 40px;box-shadow:2px 2px 2px #333333;border-radius:6px;cursor:hand;" /></div>
                        <div id="main_page_institution_suggestions_pool_data_2017" >



<?php
//---------------LOAD all suggesttions of this institution-
require_once ("includes/conn/config.php");
require_once ("includes/classes/database.php");
require_once ("includes/classes/settingsReadFile.php");
require_once ("includes/timeToSec.php");
require_once ("includes/functions.php");
//---------------Link user to suggestion box--
$id_xxxccc88_temp = renderTheSuggestionBoxIdAsInstitutionOrOfficial($id_xxxccc88);
$sql_main_page_institution_suggestion_community = "SELECT * FROM  ogenius_nds_db_community WHERE        ogenius_nds_db_community_parent_id='{$id_xxxccc88_temp}' ORDER BY ogenius_nds_db_community_id DESC LIMIT 1      ";
if ($query_main_page_institution_suggestion_community = $database->query($sql_main_page_institution_suggestion_community)) {
    //---------------------
    $id_suggestion_temp = 0;
    $id_suggestion_temp_counter_P = 0;
    while ($res_main_page_institution_suggestion_community = mysqli_fetch_array($query_main_page_institution_suggestion_community)) {


        //-----------------
        $mainpage_institution_box = $res_main_page_institution_suggestion_community['ogenius_nds_db_community_id'];
        //------------
        // echo "".$id_xxxccc88;
        $sql_main_page_institution_suggestion = "SELECT * FROM  ogenius_nds_db_suggestions WHERE        ogenius_nds_db_suggestions_box_id='{$mainpage_institution_box}' ORDER BY ogenius_nds_db_suggestions_id DESC LIMIT 60      ";
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
                if ($id_suggestion_temp_counter_P == 59) {
                    echo "<input type='hidden' id='main_page_institution_suggestions_last_id' value='$id_suggestion_temp' />";
                }

                //----------------
                $id_suggestion_temp_counter_P++;
                //----------------------------
                switch ($res_main_page_institution_suggestion['ogenius_nds_db_suggestions_type']) {
                    case "text" :
                        ?>
                                                    <div class="pinToSuggestion" style="width: 45%;cursor: auto;" >
                                                        <h4 style="font-size: 13px;text-align: center;">---<?php
                                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_34("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_34("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                    } else {
                                                        ?>
                                                                text
                                                            <?php } ?>--<span style="color: blue"><?php echo "" . time_to_sec($res_main_page_institution_suggestion['ogenius_nds_db_suggestions_regdate']); ?></span>-</h4>
                                                                  <!--<img src="images/32210901391_becdb7c654_c-ca7f3.jpg" style="width: 95%;height: 120px;margin: 4px;" />
                                                        --><div style="text-align: left;font-size: 13px;font-size: 13px;padding: 6px;box-shadow: 1px 1px 1px green;margin: 8px;border-radius: 4px;">
                                                            <?php echo "" . activateUrlStringsw($res_main_page_institution_suggestion['ogenius_nds_db_suggestions_data']); ?>
                                                        </div>
                                                <!--<input type="button" value="View"  style="margin: auto"/>-->
                                                        <img id='view<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' name='<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' onclick="main_page_institution_visualize_suggestion_details(this)" src="images/view_this.png" style="width: 30px;height: 30px;margin: 10px;box-shadow: 2px 2px 2px #cdcdcd;" />
                                                        <img id='comment45<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' name='<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' onclick="main_page_institution_visualize_suggestion_commentators(this)" src="images/respond_to_suggestion.png" style="margin-left:20px;width: 30px;height: 30px;margin: 10px;box-shadow: 2px 2px 2px #cdcdcd;" />

                                                    </div>

                        <?php
                        break;
                    case "image" :
                        ?> 
                                                    <div class="pinToSuggestion" style="width: 98%;cursor: auto;" >
                                                        <h4 style="font-size: 13px;text-align: center;">---<?php
                                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_33("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_33("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                    } else {
                                                        ?>
                                                                image
                                                            <?php } ?>--<span style="color: blue"><?php echo "" . time_to_sec($res_main_page_institution_suggestion['ogenius_nds_db_suggestions_regdate']); ?></span>-</h4>
                                                                 <!-- <img src="Community_Admin/NDS_suggested_images/<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_data']; ?>" style="width: 95%;height: 120px;margin: 4px;" />
                                                        --> <?php
                                    $theMainPageImgsTemp_store = $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_data'];
                                    $theMainPageImgsTemp_store_IMGs_array = explode("~", $theMainPageImgsTemp_store);
//-------------loop throuth all the images array----------
                                    for ($i = 0; $i < sizeof($theMainPageImgsTemp_store_IMGs_array); $i++) {
                                                                ?>
                                                            <div id="imgBull<?php echo "" . $i; ?>" style="width: 40%;height: 140px;margin-top:8px;float: left">
                                                                <img id="<?php echo "err34" . $i; ?>" onclick="main_page_institution_pic_view_this_img_enlarge(this)" src="Community_Admin/NDS_suggested_images/<?php echo "" . $theMainPageImgsTemp_store_IMGs_array[$i]; ?>" style="width: 80%;text-align: center;height: 90%;border-radius: 3px;box-shadow: 2px 2px 2px #333333;" /></br>


                                                            </div>

                                                            <?php
                                                        }
                                                        ?>
                                                        <div style="clear: both;"></div>



                                                        <div style="text-align: center;font-size: 13px;padding: 6px;box-shadow: 1px 1px 1px green;margin: 8px;border-radius: 4px;">
                                                        <?php echo "" . activateUrlStringsw($res_main_page_institution_suggestion['ogenius_nds_db_suggestions_support_text']); ?>

                                                        </div>
                                                        <img id='view<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' name='<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' onclick="main_page_institution_visualize_suggestion_details(this)" src="images/view_this.png" style="width: 30px;height: 30px;margin: 10px;box-shadow: 2px 2px 2px #cdcdcd;" />
                                                        <img id='comment45<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' name='<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' onclick="main_page_institution_visualize_suggestion_commentators(this)" src="images/respond_to_suggestion.png" style="margin-left:20px;width: 30px;height: 30px;margin: 10px;box-shadow: 2px 2px 2px #cdcdcd;" />

                                                    </div>                               

                                                            <?php
                                                            break;
                                                        case "audio" :
                                                            ?>
                                                    <div class="pinToSuggestion" style="width: 45%;;cursor: auto;" >
                                                        <h4 style="font-size: 13px;text-align: center;">---<?php
                                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_36("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_36("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                            } else {
                                                                ?>
                                                                audio
                                                    <?php } ?>--<span style="color: blue"><?php echo "" . time_to_sec($res_main_page_institution_suggestion['ogenius_nds_db_suggestions_regdate']); ?></span>-</h4>
                                                                  <!--<img src="images/32210901391_becdb7c654_c-ca7f3.jpg" style="width: 95%;height: 120px;margin: 4px;" />
                                                        --><audio style="width: 95%;margin: 4px;" src="Community_Admin/NDS_suggested_audios/<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_data']; ?>" controls="">

                                                        </audio>

                                                        <div style="text-align: center;font-size: 13px;padding: 6px;box-shadow: 1px 1px 1px green;margin: 8px;border-radius: 4px;">
                                                            <?php echo "" . activateUrlStringsw($res_main_page_institution_suggestion['ogenius_nds_db_suggestions_support_text']); ?>
                                                        </div>
                                                        <img id='view<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' name='<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' onclick="main_page_institution_visualize_suggestion_details(this)" src="images/view_this.png" style="width: 30px;height: 30px;margin: 10px;box-shadow: 2px 2px 2px #cdcdcd;" />
                                                        <img id='comment45<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' name='<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' onclick="main_page_institution_visualize_suggestion_commentators(this)" src="images/respond_to_suggestion.png" style="margin-left:20px;width: 30px;height: 30px;margin: 10px;box-shadow: 2px 2px 2px #cdcdcd;" />

                                                    </div>                            
                        <?php
                        break;
                    case "video" :
                        ?>
                                                    <div class="pinToSuggestion" style="width: 45%;;cursor: auto;">
                                                        <h4 style="font-size: 13px;text-align: center;">---<?php
                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_35("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_35("system_config_xml/" . $_global_language)->item(0)->textContent;
                        } else {
                            ?>
                                                                video
                                                    <?php } ?>--<span style="color: blue"><?php echo "" . time_to_sec($res_main_page_institution_suggestion['ogenius_nds_db_suggestions_regdate']); ?></span>-</h4>
                                                                 <!-- <img src="images/32210901391_becdb7c654_c-ca7f3.jpg" style="width: 95%;height: 120px;margin: 4px;" />
                                                        --><video controls preload="true" style="width: 95%;height: 120px;margin: 4px;"  src="Community_Admin/NDS_suggested_videos/<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_data']; ?>">

                                                        </video>

                                                        <div style="text-align: center;font-size: 13px;padding: 6px;box-shadow: 1px 1px 1px green;margin: 8px;border-radius: 4px;">
                                                            <?php echo "" . activateUrlStringsw($res_main_page_institution_suggestion['ogenius_nds_db_suggestions_support_text']); ?>
                                                        </div>
                                                        <img id='view<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' name='<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' onclick="main_page_institution_visualize_suggestion_details(this)" src="images/view_this.png" style="width: 30px;height: 30px;margin: 10px;box-shadow: 2px 2px 2px #cdcdcd;" />
                                                        <img id='comment45<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' name='<?php echo "" . $res_main_page_institution_suggestion['ogenius_nds_db_suggestions_id']; ?>' onclick="main_page_institution_visualize_suggestion_commentators(this)" src="images/respond_to_suggestion.png" style="margin-left:20px;width: 30px;height: 30px;margin: 10px;box-shadow: 2px 2px 2px #cdcdcd;" />

                                                    </div>                                
                        <?php
                        break;
                }
            }
        }
    }
}
?>

                        </div>


                        <div onclick="main_page_institution_load_latest_suggestions_downward()" style="clear:both;padding: 8px;border-radius: 4px;margin-left:40%;width: auto "><img src="images/down_new_load.png" style="width: 40px;height: 40px;box-shadow:2px 2px 2px #333333;border-radius:6px;cursor:hand;" /></div>

                    </div>
                </div> 
            </div>

        </div>
        <!-- Right part-->
        <div  style="width: 30%;float: left;border-left: 1px solid #cdcdcd;" >
            <div id="Forum" style="background: #CDCDCD;padding: 5px;">
<?php
if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_37("system_config_xml/" . $_global_language)->item(0)->textContent)) {
    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_37("system_config_xml/" . $_global_language)->item(0)->textContent;
} else {
    ?>
                    Forum
<?php } ?>
            </div>
            <div>
                <table>
                    <tr>
                        <td>
                            <input  id="institution_all" class="forum_activ" type="button" value="<?php
                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_38("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_38("system_config_xml/" . $_global_language)->item(0)->textContent;
                } else {
                    ?>
                                        All
<?php } ?>"/>
                        </td>
                        <td>
                            <input id="institution_latest" class="forum_activ" type="button" value="<?php
                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_39("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_39("system_config_xml/" . $_global_language)->item(0)->textContent;
                            } else {
                                ?>
                                       Latest
                                    <?php } ?>"/>
                        </td>
                        <td>
                            <input id="institution_whereIamTagged" class="forum_activ" type="button" value="<?php
                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_40("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_40("system_config_xml/" . $_global_language)->item(0)->textContent;
                            } else {
                                ?>
                                       Where i am tagged in
                                   <?php } ?>"/>
                        </td>
                        <td>
                            <input id="institution_trending" class="forum_activ" type="button" value="<?php
                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_41("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_41("system_config_xml/" . $_global_language)->item(0)->textContent;
                            } else {
                                ?>
                                       Trending
                                   <?php } ?>"/>
                        </td>
                        <td>
                            <input id="institution_ourposts" class="forum_activ" type="button" value="<?php
                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_42("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_42("system_config_xml/" . $_global_language)->item(0)->textContent;
                            } else {
                                ?>
                                       Our posts
                                   <?php } ?>"/>
                        </td>
                    </tr>
                </table>
                <table id="institution_search">
                    <tr>
                        <td>
                            <input style="color: white;" onkeyup="main_page_institution_load_all_posts_search(this)" type="search" placeholder="<?php
                                   if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_43("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                       echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_43("system_config_xml/" . $_global_language)->item(0)->textContent;
                                   } else {
                                       ?>
                                       Search Here
<?php } ?>" class="accountRegPuts_small" />
                        </td>
                        <td><img onclick="main_page_institution_load_all_posts_search_click()" src="images/ic_search_72pt_3x.png" style="width: 20px;height: 20px;" /></td>

                    </tr>
                </table>
            </div>

            <div style="margin-top: 10px;">
                <div style="padding: 5px;">
                  <!--<img src="uploaded_images/32210901391_becdb7c654_c-ca7f3.jpg" style="width: 80px;height: 80px;border-radius: 4px;" />
                    -->
<?php
//-------------The profile page dilemma--
if ($indiv_social_goo < 1) {
    ?>
                        <img src="uploaded_images/<?php echo "" . ($indiv_avatar != "") ? $indiv_avatar : "nds_avatar.png"; ?>" style="width: 80px;height: 80px;border-radius: 4px;" />

    <?php
} else {
    ?>
                        <img src="<?php
                        if (!empty($indiv_avatar)) {
                            echo "" . (strlen($indiv_avatar) > 26) ? $indiv_avatar : "uploaded_images/" . $indiv_avatar;
                        } else {
                            echo "" . "uploaded_images/" . "nds_avatar.png";
                        }
                        ?>" style="width: 80px;height: 80px;border-radius: 4px;"/>

                        <?php
                    }
                    ?>
                </div>
                <div style="padding: 5px;">
                    <textarea id="main_page_institution_community_post_field" onkeyup="textAreaAdjust(this)" style="border-radius:4px;color: #999933;width: 200px;height: 40px;padding-bottom: 5px;" placeholder='<?php
                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_44("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_44("system_config_xml/" . $_global_language)->item(0)->textContent;
                    } else {
                        ?>
                                  Share your opinion with our community
                    <?php } ?>'></textarea><img  onclick="main_page_post_inTheCommunity_anImage()" src="images/ic_camera_alt_black_48dp.png" style="width: 20px;height: 20px" />
                    <div id="main_page_send_post_img_2017_popUp" style="visibility:hidden;position: absolute;min-width:200px;background: white;border: 3px solid gray;border-radius: 5px;z-index: 10000">
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
                                <input type="button" onclick="main_page_institution_send_img_post()" class="btn" style="padding: 5px;margin-left: 34%;" value="<?php
                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_29("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_29("system_config_xml/" . $_global_language)->item(0)->textContent;
                    } else {
                        ?>
                                           Send
<?php } ?>" />
                            </div>
                        </div>


                    </div>
                    <input onclick="main_page_institution_post_inTheCommunity()" type="button" value="<?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_29("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_29("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                               Send
                                       <?php } ?>" style="color: white;border:1px solid #009999;background:#009999;width: 100px;padding: 2px;"/>
                </div>
                <div id="theDownFeedData" class="scrolls" style="min-height:1600px;border-radius: 4px;padding: 6px;">
<?php
//--bring the language--------------------------
require_once ("includes/conn/config.php");
require_once ("includes/classes/database.php");
require_once ("includes/classes/settingsReadFile.php");
//---------------

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

                        //--bring the language--------------------------
                        require_once ("includes/conn/config.php");
                        require_once ("includes/classes/database.php");
                        require_once ("includes/classes/settingsReadFile.php");
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
                    $NDS_OGENIUS_MAIN_settings = new myXML_CED_Settings("./system_config_xml/" . $_global_language);
                    ?>
                    <div style="padding: 20px;border:1px solid gray; border-radius: 8px;">
                        <input type="hidden" value="New " id="main_page_institution_carousel_new_posts_uruhago_txt" />
                        <input type="hidden" id="main_page_institution_carousel_new_posts_uruhago" />                   
                        <div onclick="main_page_institution_load_the_new_posts_click()" id="main_page_institution_carousel_new_posts" style="color:black;text-shadow:2px 2px 2px white;z-index:1000;background:linear-gradient(to right, skyblue , white);border-top:1px solid gray;border-left:1px solid gray;cursor:hand;margin-bottom:5px;box-shadow:2px 2px 2px skyblue;position: absolute;margin-left:20%;padding: 6px;border-radius: 5px;"> </div>
                    <?php
                    //---------All my posts container
                    ?><br />
                    <?php
                    require_once ("includes/conn/config.php");
                    ?>
                    <?php
                    require_once ("includes/classes/database.php");
                    require_once "includes/functions.php";
                    require_once "includes/timeToSec.php";
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
            ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id,
ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_api_log_face_goo_id          
             FROM ogenius_nds_db_community_posts_comments
            LEFT JOIN ogenius_nds_db_normal_users
            ON ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_commentator_id=ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id
WHERE   ogenius_nds_db_community_posts_comments_posts_post_id='{$id_post}' 
AND  ogenius_nds_db_community_posts_comments_active_status='0'  ORDER BY 
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

                            echo "<input type='hidden' value='" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id'] . "' id='main_page_institution_post_first_id'/>";
                        } else if ($check_2017_myposts_all_data == 49) {
                            echo "<input type='hidden' value='" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id'] . "' id='main_page_institution_post_last_id'/>";
                            ?>
                                <input type="hidden" value="New " id="main_page_institution_carousel_old_posts_uruhago_txt" />
                                <input type="hidden" id="main_page_institution_carousel_old_posts_uruhago" />
                                <div onclick="main_page_institution_load_the_old_posts_click()" id="main_page_institution_carousel_old_posts" style="margin-top:320px;color:black;text-shadow:2px 2px 2px white;z-index:1000;background:linear-gradient(to right, skyblue , white);border-top:1px solid gray;border-left:1px solid gray;cursor:hand;margin-bottom:5px;box-shadow:2px 2px 2px skyblue;position: absolute;margin-left:2%;padding: 6px;border-radius: 5px;">
                                    Load Old Posts
                                </div>


                                <?php
                            }

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
                            ?><td>
                                            <div>
                                                <h4 style="color:#0080FF;font-size: 13px;margin-top: -40px;"><label><?php echo "" . checkMyPostingPrivacyStatus($books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_poster_id'], $books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_names']); ?></label></br><label></h4>
                                                <h4 style="color:#0080FF;font-size: 13px;margin-top: -20px;"><?php
                        if ($books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_user_vip_tag'] == 2) {
                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_30("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_30("system_config_xml/" . $_global_language)->item(0)->textContent;
                            } else {
                                ?>  ogenius_nds_db_normal_users_user_vip_tag
                                            <?php } ?>: <?php
                                            echo "" . ($books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_user_vip_tag'] == 2) ? $books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_position'] : "";
                                        }
                                        ?></h4>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                    </tr>
                                </table>
                                <p style="text-align:left;padding:5px;font-size: 13px;color: black;;">
                                <div style="margin-left: 65%;margin-top: -10%;">
                                    <label><?php echo "" . time_to_sec($books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_regdate']); ?> ago</label>

                                </div>
                                <div style="position: relative">
                                    <div style="width: 80%;max-height:60%;margin-left: 4%;color: black;<?php echo "" . ($books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_posts_caption'] == "") ? "" : "overflow-x: scroll" ?>" >
                                                 <?php echo "" . formatImagesInText_withCaption(activateUrlStringsw($books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_postdata']), $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_posts_caption']); ?>
                                    </div>
                                </div>
                                </p>
                                <table class="likeTr" style="font-size: 11px;margin-left: 4%;">
                                    <tr>
                                        <td style="padding: 2px"><span id="main_page_views<?php echo "" . $i_mainPage_posts; ?>"><?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_views']; ?> <?php
                                             if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_46("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                 echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_46("system_config_xml/" . $_global_language)->item(0)->textContent;
                                             } else {
                                                     ?>
                                                    Views
                                                    <?php } ?></span></td>
                                        <td style="padding: 2px"><span id="main_page_likes<?php echo "" . $i_mainPage_posts; ?>"><?php echo "" . $books_main_page_comments_likes_count[$i_mainPage_posts]['LikeCompilations']; ?> <?php
                                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_47("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_47("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                    } else {
                                                        ?>
                                                    Likes
    <?php } ?></span></td>
                                        <td style="padding: 2px"><span id="main_page_unlikes<?php echo "" . $i_mainPage_posts; ?>"><?php echo "" . $books_main_page_comments_unlikes_count[$i_mainPage_posts]['UnLikeCompilations']; ?> <?php
    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_48("system_config_xml/" . $_global_language)->item(0)->textContent)) {
        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_48("system_config_xml/" . $_global_language)->item(0)->textContent;
    } else {
        ?>
                                                    Unlikes
    <?php } ?></span></td>
                                        <td style="padding: 2px"><span id="main_page_comments<?php echo "" . $i_mainPage_posts; ?>"><?php echo "" . $books_main_page_comments_stream_count[$i_mainPage_posts]['All_Attached_Comments']; ?> <?php
    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_49("system_config_xml/" . $_global_language)->item(0)->textContent)) {
        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_49("system_config_xml/" . $_global_language)->item(0)->textContent;
    } else {
        ?>
                                                    Comments
    <?php } ?></span></td>
                                    </tr>
                                </table>
                                <table class="likeTr" style="font-size: 11px;margin-left: 4%;">
                                    <tr style="padding: 2px;width: 50px;">
                                        <td style="padding: 2px;width: 50px;">
                                            <div id="mainPage_institution_FlagOrReport<?php echo "" . $i_mainPage_posts; ?>" style="visibility:hidden;text-align:center;border:3px solid #CDCDCD;position: absolute;background: white;border-radius: 8px;width: 350px;z-index:1000;"> 
                                                <div>
                                                    <input name="<?php echo "mainPage_institution_FlagOrReport" . $i_mainPage_posts; ?>" onclick="main_page_institution_hide_flag_post_view(this)" type="button" class="btn" style="margin-top:8px;padding: 5px;color: blue;margin-left:75%;margin-right:15px;color: white" value="X" />
                                                </div>
                                                <img src="images/report_.png" style="width: 100px;height: 70px;margin-left: 10%;" />
                                                <form>

                                                    <table style="margin-left: 30%;">
                                                        <tr>
                                                            <td>
                                                                <input title="<?php echo "mainPage_institution_FlagOrReport" . $i_mainPage_posts; ?>" style="width: 30px;height: 30px;" type="radio" onchange="main_page_institution_like_flag_this_post_2017(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>, 'insulting')"  id="<?php echo "theMeRadioFlag_a" . $i_mainPage_posts; ?>" name="meRadioInsulting<?php echo "" . $i_mainPage_posts; ?>" />
                                                            </td>
                                                            <td>
                                                                <img src="images/insulting_2017.jpg" style="width: 80px;height: 60px;border-radius: 6px;" />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <input title="<?php echo "mainPage_institution_FlagOrReport" . $i_mainPage_posts; ?>" style="width: 30px;height: 30px;" onchange="main_page_institution_like_flag_this_post_2017(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>, 'inappropriate')" type="radio"  id="<?php echo "theMeRadioFlag_b" . $i_mainPage_posts; ?>" name="meRadioInsulting<?php echo "" . $i_mainPage_posts; ?>" />
                                                            </td>
                                                            <td>
                                                                <img src="images/inappropriate_.jpg" style="width: 60px;height: 60px;border-radius: 6px;" />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <input style="width: 30px;height: 30px;" type="radio" onchange="main_page_institution_like_flag_this_post_2017(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>, 'other')"  id="<?php echo "theMeRadioFlag_c" . $i_mainPage_posts; ?>" name="meRadioInsulting<?php echo "" . $i_mainPage_posts; ?>" />
                                                            </td>
                                                            <td>
                                                                <img src="images/other_.png" style="width: 60px;height: 60px;border-radius: 6px;" />
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <table style="margin: auto;">
                                                        <tr>
                                                            <td><textarea title="<?php echo "theMeRadioFlag_c" . $i_mainPage_posts; ?>"  onclick='main_page_institution_flag_this_post_using_other_focus(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>,<?php echo "theMeRadioFlag_c" . $i_mainPage_posts; ?>)' name="" id="<?php echo "main_page_institution_flag_motion" . $i_mainPage_posts; ?>" onkeyup="textAreaAdjust(this)" class="accountRegPuts_small"></textarea></td>
                                                            <td>
                                                                <input title="<?php echo "main_page_institution_flag_motion" . $i_mainPage_posts; ?>" placeholder="<?php echo "mainPage_institution_FlagOrReport" . $i_mainPage_posts; ?>" name="<?php echo "main_page_flag_motion" . $i_mainPage_posts; ?>" onclick='main_page_institution_flag_this_post_using_other(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>,<?php echo "theMeRadioFlag_c" . $i_mainPage_posts; ?>,<?php echo "" . $i_mainPage_posts; ?>)' type="button" class="btn" style="padding: 5px;color: blue" value="---&#10004;---" />
                                                            </td>
                                                        </tr>

                                                    </table>

                                                </form>
                                            </div><img name='<?php echo "mainPage_institution_FlagOrReport" . $i_mainPage_posts; ?>' id="a<?php echo "$i_mainPage_posts" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>" onclick="main_page_institution_flag_this_post(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>)" src="images/flag_this_00.png" style="width: 20px;height: 20px;" /></td>
                                        <td style="padding: 2px;width: 50px;"><img id="b<?php echo "$i_mainPage_posts" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>" onclick="main_page_institution_like_this_post(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>)"  src="images/ic_thumb_up_black_48dp1.png" style="width: 20px;height: 20px;" /></td>
                                        <td style="padding: 2px;width: 50px;"><img id="c<?php echo "$i_mainPage_posts" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>" onclick="main_page_institution_unlike_this_post(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>)" src="images/ic_thumb_down_black_48dp1.png" style="width: 20px;height: 20px;" /></td>
                                        <td style="padding: 2px;width: 50px;"><img onclick="main_page_institution_decollapse_this_comment(this)" name="main_page_institution_comments_collapsible<?php echo "" . $i_mainPage_posts; ?>" id="d<?php echo "$i_mainPage_posts" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>" onclick="main_page_institution_toggle_comment_of_this_post(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>)" src="images/ic_chat_black_48dp.png" style="width: 20px;height: 20px;" /></td>
    <?php
    if ($books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_id'] == $id_link) {
        ?>
                                            <td><img id="a<?php echo "$i_mainPage_posts" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>" onclick="main_page_institution_delete_this_post(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>)" src="images/send_to_dust_bin.png" style="width: 20px;height: 20px;" /></td>

        <?php
    } else {
        
    }
    ?>
                                    </tr>
                                </table>
                                <div class="scrolls" style="margin-left: 10%;overflow-x:hidden;max-height: 240px;overflow-y: scroll;border-radius: 4px;">
                                    <div> <!--New...--></div>
                                    <div style="border-top:1px solid #333333;box-shadow:2px 2px 2px #cdcdcd;border-left:1px solid #333333;border-radius: 4px;" class="main_page_institution_collapsibles_2017"  id="main_page_institution_comments_collapsible<?php echo "" . $i_mainPage_posts; ?>">
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
    if ($query_main_page_posts_comments = $database->query($sql_main_page_posts_comments)) {
        //---------------------
        $main_page_cmmnens_c = 0;
        while ($res_main_page_posts_comments = mysqli_fetch_array($query_main_page_posts_comments)) {
            $theCommentIf_2017 = $res_main_page_posts_comments['ogenius_nds_db_community_posts_comments_id'];
            if ($main_page_cmmnens_c == 0) {
                ?>
                                                    <img class="main_page_institution_comments_collapsible<?php echo "" . $i_mainPage_posts; ?>" onclick="main_page_institution_posts_comments_refresh_up(<?php echo "" . $main_page_the_postId_2017; ?>, this)" src="images/up_new_load.png" style="cursor:hand;margin-left:40%;width: 30px;height: 30px;border-radius: 5px;box-shadow: 2px 2px 2px gray;border-top: 1px solid gray;border-left: 1px solid gray;" />
                                                    <?php
                                                    echo "<input type='hidden' value='$theCommentIf_2017' id='mainpage_institution_first_comment_id' />";
                                                }
                                                ?>
                                                <table style="border-bottom: 1px solid gray;">
                                                    <td style="width: auto;font-size: 12px;">
                                                        <div><?php echo "" . checkMyPostingPrivacyStatus($res_main_page_posts_comments['ogenius_nds_db_community_posts_comments_commentator_id'], $res_main_page_posts_comments['ogenius_nds_db_normal_users_names']); ?></div>

                                                <?php
                                                //-------------The profile page dilemma--
                                                if ($res_main_page_posts_comments['ogenius_nds_db_normal_users_api_log_face_goo_id'] < 1) {
                                                    ?>
                                                            <img  src="uploaded_images/<?php echo "" . ($res_main_page_posts_comments['ogenius_nds_db_normal_users_avatar'] != "") ? $res_main_page_posts_comments['ogenius_nds_db_normal_users_avatar'] : "nds_avatar.png"; ?>" style="width: 40px;height: 40px;" /></td>

                                                    <?php
                                                } else {
                                                    ?>
                                                        <img src="<?php
                                                    if (!empty($res_main_page_posts_comments['ogenius_nds_db_normal_users_avatar'])) {
                                                        echo "" . (strlen($res_main_page_posts_comments['ogenius_nds_db_normal_users_avatar']) > 26) ? $books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_avatar'] : "uploaded_images/" . $books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_avatar'];
                                                    } else {
                                                        echo "" . "uploaded_images/" . "nds_avatar.png";
                                                    }
                                                    ?>" style="width: 40px;height: 40px" />

                                                    <?php
                                                }
                                                ?>

                                                    <td style="width: 60%;overflow-x: hidden;">
                                                        <div style="text-align: left;font-size: 12px;width:80%;overflow-x: hidden;">
                                                <?php echo "" . activateUrlStringsw($res_main_page_posts_comments['ogenius_nds_db_community_posts_comments_comment']); ?>                            
                                                        </div></td>
                                                    <td><h6 style="font-size: 10px;"><?php echo "" . time_to_sec($res_main_page_posts_comments['ogenius_nds_db_community_posts_comments_regdate']); ?></h6></td>

                                                    </tr><?php
                                    if ($res_main_page_posts_comments['ogenius_nds_db_community_posts_comments_commentator_id'] == $_SESSION["ogenius_nds_user_id_x2309999_990"]) {
                                        ?>
                                                        <tr><td></td><td><img onclick="main_page_institution_delete_this_post_comment(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>,<?php echo "" . $res_main_page_posts_comments['ogenius_nds_db_community_posts_comments_id']; ?>,<?php echo "" . $i_mainPage_posts; ?>)" id="a<?php echo "$i_mainPage_posts" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>" onclick="main_page_institution_flag_this_post(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>)" src="images/send_to_dust_bin.png" style="width: 20px;height: 20px;" /></td>
                                                        </tr>
                                                            <?php
                                                        } else {
                                                            
                                                        }
                                                        ?>
                                                </table>

                                                    <?php
                                                    $main_page_cmmnens_c++;
                                                }
                                                if ($main_page_cmmnens_c != 0) {
                                                    echo "<input type='hidden' value='$theCommentIf_2017' id='mainpage_institution_last_comment_id' />";
                                                    ?>
                                                <br/>
                                                <img class="main_page_institution_comments_collapsible<?php echo "" . $i_mainPage_posts; ?>" onclick="main_page_institution_posts_comments_refresh_down(<?php echo "" . $main_page_the_postId_2017; ?>, this)" src="images/down_new_load.png" style="cursor:hand;margin-left:40%;width: 30px;height: 30px;border-radius: 5px;box-shadow: 2px 2px 2px gray;border-top: 1px solid gray;border-left: 1px solid gray;" />

                                                <br/>
                                                    <?php
                                                }
                                            }
                                            ?>

                                    </div>
                                    <div> <!--More...--></div>

                                </div>
                                <table>
                                    <tr>
                                        <td>

                                            <textarea id="<?php echo "commentOnMe" . $i_mainPage_posts; ?>" onkeyup="textAreaAdjust(this)" style="margin-top:10px;border-radius: 7px;width: 250px;height: 60px;color: #999933;margin-left:20px;" placeholder="<?php
                                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_51("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_51("system_config_xml/" . $_global_language)->item(0)->textContent;
                                            } else {
                                                ?>
                                                          Your Comment
                                            <?php } ?>"></textarea>
                                        </td>
                                        <td>
                                            <input type="hidden" title="main_page_institution_comments_collapsible<?php echo "" . $i_mainPage_posts; ?>" value='' id="manu2017_<?php echo "" . $i_mainPage_posts; ?>" />

                                            <input name="main_page_institution_comments_collapsible<?php echo "" . $i_mainPage_posts; ?>" title="<?php echo "commentOnMe" . $i_mainPage_posts; ?>"  onclick="main_page_institution_send_comment(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>,<?php echo "commentOnMe" . $i_mainPage_posts; ?>)"  type="button" value="<?php
                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_29("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_29("system_config_xml/" . $_global_language)->item(0)->textContent;
                                        } else {
                                            ?>
                                                       Send
    <?php } ?>" style="background:blue;color: white;border: 1px solid blue; " />
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
                                        <?php ?>
                </div>          




            </div>

        </div>

    </section>
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