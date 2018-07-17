
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php require_once "includes/app_up_nav.php"
?>
<input type="hidden" id="main_page_carousel_institution" />

<input type="hidden" value="<?php echo "" . $id_xxxccc88; ?>" id="common_user_settings_the_id" />
<input type="hidden" id="main_page_institution_2017_" />
<div class="main-content">
    <div class="container-fluid">
        <div id="panel1" class="col-md-3">
            <div class="notifpanel panel-default">
                <div id="mainpage_notification" class="panel-heading centerrowspace">
                    <h5><?php
                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_0("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_0("system_config_xml/" . $_global_language)->item(0)->textContent;
                        } else {
                            ?>
                            Notification
                        <?php } ?></h5>


                    <span class="badge" id="main_page_institution_notification_counter">0</span>
                </div>
                <div class="panel-body">
                    <div id="main_page_notification_counter_messenger">
                        <div class="centerrow">
                            <img class="image48" src="images/ic_notifications_active_black_48dp.png"/>

                        </div>

                        <p style="text-align: center"><i><?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_1("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_1("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                    You have no new notifications right now
                                <?php } ?> </i></p>
                    </div>
                    <div id="notifications_panel" style="width: 100%;height: 100%;" >
                        <div id="notifications_panel_data_pool_2017">

                        </div>
                    </div>
                </div>
                <div  id="notifications_panel_mainpop" class="panel panel-shadow" style="position: absolute;visibility: hidden;z-index: 20000;overflow-x: hidden;height: auto;">

                    <div onclick="" class="panel-body" id="notifications_panel_mainpop_notify" style="background: #ffffff;width:600px;height: auto;">
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
            <div class="messagepanel panel-default">
                <div class="panel-heading centerrowspace">
                    <h5><?php
                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_5("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_5("system_config_xml/" . $_global_language)->item(0)->textContent;
                        } else {
                            ?>
                            Message
                        <?php } ?>
                    </h5><div><a href="message_institution.php" data-toggle="tooltip" data-placement="bottom" title="View all messages" target="_blank" style="text-decoration: none"><i style="margin:0px 6px; cursor: pointer; color: #0B1022" class="fa fa-external-link-square"></i></a><span class="badge" id="mainpageMessage_message_count">0</span></div>
                </div>
                <div class="panel-body">
                    <div id="main_page_noification_tag_2017">
                        <div class="centerrow">
                            <img class="image48" src="images/ic_mail_48pt_3x.png"/>
                        </div>
                        <p style="text-align: center"><i><?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_6("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_6("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                    Message panel.
                                <?php } ?> </i></p>
                    </div>
                    <div id="notifications_panel_for_message">

                    </div>

                </div>
            </div>
            <script type="text/javascript">
                function drawtab(n) {
                    switch (n) {
                        case 'replies':
                            $('#messagedialogtab').children().removeClass('active');
                            $('#replies-link').addClass('active');
                            $('#my-tabcontent').children().removeClass('active');
                            $('#replies').addClass('active');
                            break;
                        case 'followup':
                            $('#messagedialogtab').children().removeClass('active');
                            $('#followup-link').addClass('active');
                            $('#my-tabcontent').children().removeClass('active');
                            $('#followup').addClass('active');
                            $('#main_page_2017_followUp_query_cyuma_data').innerHTML = "<img src='images/loader_custom.gif' style='margin:auto;width:100px;height:100px;border-radius:20px;' />";

                            var ajax = ajaxObj("POST", "nds_web_scripts/main_page_followUpMyQuery_cyuma.php");
                            ajax.onreadystatechange = function () {
                                if (ajaxReturn(ajax) === true) {
                                    _("main_page_2017_followUp_query_cyuma_data").innerHTML = "" + ajax.responseText;
                                    //-------------
                                    $(function () {
                                        $("#queries_followUp").accordion({
                                            collapsible: true,
                                            active: 'none',
                                            autoHeight: false,
                                            navigation: true,
                                            heightStyle: "content"
                                        });
                                    });
                                } else {
                                    // showloadingPanel("failed");
                                    //alert(ajax.responseText);

                                }
                            };
                            ajax.send("common_user_settings_the_id=" + _("common_user_settings_the_id").value + "&queryId_34=" + _("the_popped_up_query_suggst_id").value + "&key=cyuma");
                            //------------------------

                            break;
                        case 'finalize':
                            $('#messagedialogtab').children().removeClass('active');
                            $('#finalize-link').addClass('active');
                            $('#my-tabcontent').children().removeClass('active');
                            $('#finalize').addClass('active');
                            break;
                    }
                }
            </script>
            <div id="messages_panel_mainpop" class="panel panel-shadow" style="height: 500px;border-radius:5px;border:3px solid #0080FF;position: absolute;visibility: hidden;z-index: 20000;background: white;overflow: hidden;">

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
                                <textarea onkeyup="textAreaAdjust(this)" style="border-radius: 8px;width:500px;height: 80px;" placeholder="Message here"></textarea>
                                <div style="text-align: left;margin-top: 10px;font-weight: bold;">
                                    <?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_4("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_4("system_config_xml/" . $_global_language)->item(0)->textContent;
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

        <div id="panel2" class="centercolumn col-md-5">
            <div>
                <button class="btn btn-info filterbtn" onclick="pullfilterpanel();">Filter</button>
            </div>
            <script type="text/javascript">
                function pullfilterpanel() {
                    alert();
                    $('.sortpanel').toggleClass('classvisible');
                }
            </script>
            <style>
                .sortpanel{
                    visibility: hidden;
                    display: block;
                    height: auto;
                    position: absolute;
                    z-index: 100;
                    top:48px;
                    padding: 6px 6px;
                    -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, .2);
                    box-shadow: 0 5px 10px rgba(0, 0, 0, .2); 
                    background-color: #fafafa;
                    -webkit-transition: all .5s ease-in-out;
                    transition: all .5s ease-in-out;
                }
                .sortpanel input[type='radio']{
                    width: 24px;
                    height: 24px;
                }
            </style>
            <div  class="sortpanel" style="width: 95%">
                <div style="float: right;width: 46%;">
                    <form>
                        <table>
                            <tr>
                                <td colspan="2" class="startrowstart">
                                    <input onchange="main_page_institution_suggestions_sortClassA_markIt(this)" class="form-control" id="m_insti_ascending" name="sgstChoice" type="radio" />
                                <?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_6("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_6("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        Ascending order of dates
                                    <?php } ?></td>
                            </tr>
                            <tr>
                                <td colspan="2" class="startrowstart">
                                    <input onchange="main_page_institution_suggestions_sortClassA_markIt(this)" id="m_insti_descending" class="form-control" name="sgstChoice" checked="checked" type="radio" />
                                <?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_7("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_7("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        Descending order of dates
                                    <?php } ?></td>
                            </tr>
                            <tr>
                                <td colspan="2" class="startrowstart">
                                    <input onchange="main_page_institution_suggestions_sortClassA_markIt(this)" id="m_insti_byname" class="form-control" name="sgstChoice" type="radio" />
                                
                                    <input type="text" placeholder="<?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_8("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_8("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                               By Name
                                           <?php } ?>"  id='main_page_institutioin_suggest_byname' class="form-control" />
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" class="startrowstart">
                                    <input onchange="main_page_institution_suggestions_sortClassA_markIt(this)" class="form-control" id="m_insti_bykeyword" name="sgstChoice" type="radio" />
                                
                                    <input type="text" placeholder="<?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_9("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_9("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                               By Keyword
                                           <?php } ?>"  id='main_page_institutioin_suggest_bykeyword' class="form-control" />
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" class="startrowstart">
                                    <input onchange="main_page_institution_suggestions_sortClassA_markIt(this)" id="m_insti_bygender" class="form-control" name="sgstChoice" type="radio" />
                                
                                    <select id='main_page_institutioin_suggest_bygender' class="form-control">
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
                                <td colspan="2" class="startrowstart">
                                    <input onchange="main_page_institution_suggestions_sortClassA_markIt(this)" id="m_insti_bymarital_status" class="form-control" name="sgstChoice" type="radio" />
                                
                                    <select id='main_page_institutioin_suggest_bymarital_status'  class="form-control">
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

                            </tr>
                            <tr>
                                <td><input onclick="main_page_institution_suggestions_sortClassA()" type="button" value="<?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_19("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_19("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                               Sort
                                           <?php } ?>" class="btn btn-info" /></td>
                            </tr>
                        </table>

                    </form>

                </div>
                <div style="float: left;width: 54%;">
                    <form name="class_Inst_b">
                        <table>
                            <tr>
                                <td colspan="2" class="startrowstart">
                                    <input class="insti_media_type" checked="true" onchange="main_page_institution_suggestions_sortClassB_markIt(this)" id='m_insti_media_type' name="sgstChoice_classB" type="radio" />
                                    <?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_20("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_20("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        By media type:
                                    <?php } ?></td>
                            </tr>
                            <tr>
                                <td>
                                    <select id='main_page_institutioin_suggest_bymedia_type' class="form-control">
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
                                           <?php } ?>" onclick='main_page_institution_suggestions_sortClassB()' class="btn btn-info" />
                                </td>
                            </tr>

                        </table>
                        <h4 class="startrowstart">
                            <input class="insti_date_range" onchange="main_page_institution_suggestions_sortClassB_markIt(this)" id='m_insti_date_range' name="sgstChoice_classB" type="radio" />
                            <?php
                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_26("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_26("system_config_xml/" . $_global_language)->item(0)->textContent;
                            } else {
                                ?>
                                Sorting by Date Range
                            <?php } ?></h4>
                        <table >
                            <tr>

                                <td> <?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_27("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_27("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        from
                                    <?php } ?> 
                                </td>
                                <td><?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_29("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_29("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                        to
                                    <?php } ?>
                                </td>
                            </tr>
                            <tr>
                                <td >
                                    <input class="form-control" placeholder="<?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_28("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_28("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                               First Date
                                           <?php } ?>" id="pickBirthDay" type="text" />
                                </td>

                                <td >
                                    <input class="form-control" placeholder="<?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_30("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_30("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                               Last Date
                                           <?php } ?>" id="pickBirthDay_second" type="text" />
                                </td>

                            </tr>

                            <tr>
                                <td>
                                    <input onclick='main_page_institution_suggestions_sortClassB_2("btn1")' class="btn btn-info" type="button" value="<?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_31("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_31("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                               Sort in Asc order
                                           <?php } ?>" />
                                
                                
                                    <input onclick='main_page_institution_suggestions_sortClassB_2("btn2")' class="btn btn-info" type="button" value="<?php
                                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_32("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_32("system_config_xml/" . $_global_language)->item(0)->textContent;
                                    } else {
                                        ?>
                                               Sort in Desc order
                                           <?php } ?>" />
                                </td>
                            </tr>
                        </table>
                        
                    </form>
                </div>

            </div>

            <div class="mainpanel centercolumn" style="overflow-y: auto">
                <div class="panel-heading centerrowspace"><b>
                        <?php
                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_5("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_5("system_config_xml/" . $_global_language)->item(0)->textContent;
                        } else {
                            ?>
                            SUGGESTION BOX PANEL
                        <?php } ?>
                    </b>
                </div>
                <div  id="main_page_col_middle">

                    <div class="scrolls" style="">
                        <div id="main_page_institution_pic_view_container" style="visibility:hidden;background:rgba(30,30,30,0.7);z-index:10000;position: fixed;border-radius: 5px;box-shadow: 2px 2px 2px #cdeded;width: 60%;height: 60%;text-align: center;border-left: 1px solid #cdeded;border-top: 1px solid #cdeded;">
                            <input type="button" onclick="main_page_institution_pic_view()" value="X" class="btn" style="color:red;padding: 2px;float: right;margin-right: 10%;margin-top: 4px;" />
                            <div style="clear:both;width: 98%;height: 80%;">
                                <img src="" id="main_page_institution_pic_view_container_img_src" style="max-height: 98%;max-width: 98%;" />
                            </div>			        
                        </div>
                        <div id="main_page_institution_sugg_details_container_mugabo_2017" class="panel" style="z-index:10000;background:rgba(20,20,20,.6);min-width:200px;min-height:200px;visibility:hidden;position: absolute;border-radius:5px;box-shadow:2px 2px 2px #333333;">
                            <div class="panel-heading"><button type="button" onclick="main_page_institution_visualize_suggestion_details_hide()" class="btn" style="color:red;">&times;</button>
                            </div>
                            <div id="main_page_institution_sugg_details_container_mugabo_2017_data_2017">
                                <p>Test--</br>
                                    oajdad aduha8dua dnabv dandb adb dba djabdva dhab dadba dba dabdv ajdba dabd abdva dba abu
                                    adabudadv adbav daidbva jdavd adva duavd ajd adbuva dauvd audbv ahdbvua dvua 
                                    vadubaugvubgdvy abdva dav dabvu 
                                </p>

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
                        <div id="main_page_institution_sugg_details_conversations_container_mugabo_2017" style="z-index:100000;background:rgba(20,20,20,.6);width:100%;min-height:200px;visibility:hidden;position: absolute;border-radius:5px;box-shadow:2px 2px 2px #333333;">

                            <div class="panel-heading">
                                <button type="button" onclick="main_page_institution_visualize_suggestion_commentators_hide()" class="btn" style="color:red;">&times;</button>
                            </div>
                            <div class="scrolls" id="main_page_institution_the_suggestion_chat_pool_2017_mugabo_data" style="overflow-y:scroll;height:300px;text-align:center;padding:6px;border-radius:4px;box-shadow: 1px 1px 1px #cdcdcd;color:#333333;background: #cdcdcd;margin-top:30px;">
                                <div> </div>
                            </div>
                            <div style="position: absolute;border-radius: 8px;margin-top: 8px;">
                                <table style="margin-left: 3%;">
                                    <tr>
                                        <td><input type="hidden" value="show_all_types_of_messages" id="main_page_institution_suggest_comment_pool_strategy" />
                                            <input checked="true" onclick="main_page_institution_suggest_comment_mark_this(this)"  id="jdj9900" name="selector_comment_all_from_suggest_2017" type="radio" style="width: 30px;height: 30px;" />                                         
                                        </td>
                                        <td>
                                            <img src="images/special_mail_comm.png" title="Marked as visible to External User" class="image48" />
                                        </td>
                                        <td>
                                            <img src="images/normal_internal_message.png" title="Marked as invisible to External User" class="image48" />
                                        </td>
                                        <td>
                                            <input onclick="main_page_institution_suggest_comment_mark_this(this)" id="jdj9901"  name="selector_comment_all_from_suggest_2017" type="radio" style="width: 30px;height: 30px;" />                                         
                                        </td>

                                        <td>
                                            <img src="images/normal_internal_message.png" title="Marked as invisible to External User" class="image48" />
                                        </td>  
                                        <td>
                                            <input onclick="main_page_institution_suggest_comment_mark_this(this)" id="jdj9902" name="selector_comment_all_from_suggest_2017" type="radio" style="width: 30px;height: 30px;" />                                         
                                        </td>
                                        <td>
                                            <img src="images/special_mail_comm.png" title="Marked as visible to External User" class="image48" />
                                        </td>

                                    </tr>
                                    <input type="hidden" id="main_page_institution_suggestion_cmnt_flag_2017" />
                                </table> 
                            </div>                   

                            <div style="text-align:center;padding:6px;border-radius:4px;box-shadow: 1px 1px 1px #cdcdcd,rgba(255,255,255,.7);color:#333333;background: #cdcdcd;margin-top:70px;">
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
                            <div onclick="main_page_institution_load_latest_suggestions()"><img src="images/up_new_load.png" class="image24" style="margin-left:48%;cursor:pointer;" /></div>
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
                                //echo "-------------".$id_xxxccc88_temp;
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

                                                    case "video":
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
                                ?>

                            </div>


                            <div onclick="main_page_institution_load_latest_suggestions_downward()"><img src="images/down_new_load.png" class="image24" style="margin-left:48%;cursor:pointer;" /></div>

                        </div>
                    </div>      


                </div>
            </div>
        </div>
        <div id="panel3" class="col-md-4">
            <div class="mainpanel" style="overflow-y: auto">
                <div class="panel-heading centerrowspace">
                    <div class="startrowspace col-md-12" id="panelindicator">

                        <span  id="institution_all" class="forum_activ centerrowspace"> <a style="cursor:pointer; text-decoration: none"><?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_22("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_22("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                    All
                                <?php } ?></a><span class="badge"></span>

                        </span>


                        <span id="institution_latest" class="forum_activ centerrowspace"> <a style="cursor:pointer; text-decoration: none"><?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_23("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_23("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                    Latest
                                <?php } ?></a><span class="badge"></span>

                        </span>


                        <span id="institution_whereIamTagged" class="forum_activ centerrowspace"> <a style="cursor:pointer; text-decoration: none"><?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_24("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_24("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                    Where i am tagged
                                <?php } ?></a><span class="badge"></span>

                        </span>


                        <span id="institution_trending" class="forum_activ centerrowspace"><a style="cursor:pointer; text-decoration: none"><?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_25("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_25("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                    Trending
                                <?php } ?></a><span class="badge"></span>

                        </span>

                        <span id="institution_ourposts" class="forum_activ centerrowspace"> <a style="cursor:pointer; text-decoration: none"><?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_42("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_42("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                    Our posts
                                <?php } ?></a><span class="badge"></span>

                        </span>

                    </div>
                    <div class="centerrow">
                        <img onclick="searchpanel();" style="cursor:pointer" src="images/ic_search_black_24dp.png"/>
                    </div>
                    <script>
                        function searchpanel() {

                            $("#panel-search").css('visibility', 'visible');
                            $("#panel-search").css('width', '95%');
                        }
                    </script>
                    <div id="panel-search" class="panel-heading startrowspace">
                        <input onkeyup="main_page_institution_load_all_posts_search(this)" type="search" placeholder="<?php
                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_43("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_43("system_config_xml/" . $_global_language)->item(0)->textContent;
                        } else {
                            ?>
                                   Search Here
                               <?php } ?>" class="form-control"/>

                        <img class="image24" style="margin:0px 2px; cursor: pointer"onclick="main_page_institution_load_all_posts_search_click()" src="images/ic_search_72pt_3x.png"  /><img onclick="hidepanel();" style="margin:0px 2px; cursor: pointer" src="images/ic_close_black_24dp.png"/>
                    </div>
                    <script>
                        function hidepanel() {
                            $("#panel-search").css('visibility', 'hidden');
                            $("#panel-search").css('width', '0%');
                        }
                    </script>
                </div>
                <div class="panel-body">
                    <div class="panel panel-primary">
                        <div class="panel-heading post-preview">
                            <?php
//-------------The profile page dilemma--
                            if ($indiv_social_goo < 1) {
                                ?>
                                <img class="image48" src="uploaded_images/<?php echo "" . ($indiv_avatar != "") ? $indiv_avatar : "nds_avatar.png"; ?>" />

                                <?php
                            } else {
                                ?><img class="image48" src="<?php
                                if (!empty($indiv_avatar)) {
                                    echo "" . (strlen($indiv_avatar) > 26) ? $indiv_avatar : "uploaded_images/" . $indiv_avatar;
                                } else {
                                    echo "" . "uploaded_images/" . "nds_avatar.png";
                                }
                                ?>" />
                                     <?php
                                 }
                                 ?>
                        </div>

                        <div class="panel-footer centerrowspacearound post-area">
                            <div id="addmedia"> 

                                <img src="images/ic_add_a_photo_black_24dp.png" id="addMedia" onclick="addmediabtn();"  alt="123">
                            </div>
                            <textarea type="textarea" class="form-control" id="main_page_institution_community_post_field" onkeyup="enlarge(this)" placeholder="<?php
                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_28("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_28("system_config_xml/" . $_global_language)->item(0)->textContent;
                            } else {
                                ?>
                                          Share your opinion with our community
                                      <?php } ?>"></textarea>

                            <div id="sendmessage"> 
                                <img src="images/ic_send_black_24dp.png" onclick="main_page_institution_post_inTheCommunity()" type="button" value="<?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_29("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_29("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                         Send
                                     <?php } ?>">  
                            </div>
                        </div>
                    </div>
                    <div id="theDownFeedData">
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
                        <div>
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

                                <div class="panel panel-default">

                                    <div class="panel-heading centerrowspace">
                                        <div class="startrow">
                                            <?php
                                            //-------------The profile page dilemma--
                                            if ($books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_api_log_face_goo_id'] < 1) {
                                                ?>
                                                <img class="image48" src="uploaded_images/<?php echo "" . ($books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_avatar'] != "") ? $books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_avatar'] : "nds_avatar.png"; ?>"/>
                                                <?php
                                            } else {
                                                ?><img src="<?php
                                                if (!empty($books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_avatar'])) {
                                                    echo "" . (strlen($books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_avatar']) > 26) ? $books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_avatar'] : "uploaded_images/" . $books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_avatar'];
                                                } else {
                                                    echo "" . "uploaded_images/" . "nds_avatar.png";
                                                }
                                                ?>" class="image48" /> <?php
                                                 }
                                                 ?>&nbsp;&nbsp;
                                            <b><span><?php echo "" . checkMyPostingPrivacyStatus($books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_poster_id'], $books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_names']); ?></span></br><span><?php
                                                    if ($books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_user_vip_tag'] == 2) {
                                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_30("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_30("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                        } else {
                                                            ?>  ogenius_nds_db_normal_users_user_vip_tag
                                                        <?php } ?>: <?php
                                                        echo "" . ($books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_user_vip_tag'] == 2) ? $books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_position'] : "";
                                                    }
                                                    ?>
                                                </span></b>
                                        </div>
                                        <span> <small><i><?php echo "" . time_to_sec($books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_regdate']); ?> ago</i></small></span>


                                    </div>
                                    <div class="panel-body">
                                        <div class="post-item startcolstart" style="<?php echo "" . ($books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_posts_caption'] == "") ? "" : "overflow-x: scroll" ?> word-break: break-all">
                                            <?php echo "" . formatImagesInText_withCaption(activateUrlStringsw($books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_postdata']), $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_posts_caption']); ?>

                                        </div>
                                        <hr>
                                        <div class="post-stats">
                                            <ul class="post-item-stats startrow">
                                                <li>
                                                    <small><span id="main_page_views<?php echo "" . $i_mainPage_posts; ?>"><?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_views']; ?></span> <?php
                                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_31("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_31("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                        } else {
                                                            ?>
                                                            views

                                                        <?php } ?></small>
                                                </li>
                                                <li>
                                                    <small><span id="main_page_likes<?php echo "" . $i_mainPage_posts; ?>"><?php echo "" . $books_main_page_comments_likes_count[$i_mainPage_posts]['LikeCompilations']; ?></span> <?php
                                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_32("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_32("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                        } else {
                                                            ?>
                                                            likes
                                                        <?php } ?></small>
                                                </li>
                                                <li>
                                                    <small><span id="main_page_unlikes<?php echo "" . $i_mainPage_posts; ?>"><?php echo "" . $books_main_page_comments_unlikes_count[$i_mainPage_posts]['UnLikeCompilations']; ?></span> <?php
                                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_33("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_33("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                        } else {
                                                            ?>
                                                            unlikes
                                                        <?php } ?></small></li>
                                                <li ><small><span id="main_page_comments<?php echo "" . $i_mainPage_posts; ?>"><?php echo "" . $books_main_page_comments_stream_count[$i_mainPage_posts]['All_Attached_Comments']; ?></span> <?php
                                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_34("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_34("system_config_xml/" . $_global_language)->item(0)->textContent;
                                                        } else {
                                                            ?>
                                                            comments
                                                        <?php } ?></small></li>
                                            </ul> 
                                            <ul class="post-item-button startrow">
                                                <!-- the report div -->                                                
                                                <div id="<?php echo "mainPageFlagOrReport" . $i_mainPage_posts; ?>" style="visibility:hidden;border:3px solid #CDCDCD;position: absolute;background: white;border-radius: 8px;width: 350px;"> 
                                                    <div>
                                                        <input type="button" name="<?php echo "mainPageFlagOrReport" . $i_mainPage_posts; ?>" onclick="main_page_hide_flag_post_view(this)" class="btn" style="margin-left:75%;margin-top:8px;padding: 5px;color: blue;margin-right:15px;color: white" value="X" />
                                                    </div>

                                                    <form>
                                                        <ul class="startcolstart">
                                                            <li class="startrow">
                                                                <input title="<?php echo "mainPageFlagOrReport" . $i_mainPage_posts; ?>" class="image24"  type="radio" onchange="main_page_like_flag_this_post_2017(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>, 'insulting')" id="<?php echo "theMeRadioFlag_a" . $i_mainPage_posts; ?>" name="meRadioInsulting<?php echo "" . $i_mainPage_posts; ?>" />
                                                                <img src="images/insulting_2017.jpg" class="image24" />
                                                                <span>Insulting</span>
                                                            </li> 
                                                            <li class="startrow">
                                                                <input title="<?php echo "mainPageFlagOrReport" . $i_mainPage_posts; ?>" class="image24"type="radio" onchange="main_page_like_flag_this_post_2017(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>, 'inappropriate')" id="<?php echo "theMeRadioFlag_b" . $i_mainPage_posts; ?>" name="meRadioInsulting<?php echo "" . $i_mainPage_posts; ?>" />
                                                                <img src="images/inappropriate_.jpg" class="image24" />
                                                                <span>inappropriate</span>
                                                            </li>  
                                                            <li class="startrow">
                                                                <input class="image24" type="radio" onchange="main_page_like_flag_this_post_2017(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>, 'other')" id="<?php echo "theMeRadioFlag_c" . $i_mainPage_posts; ?>" name="meRadioInsulting<?php echo "" . $i_mainPage_posts; ?>" />
                                                                <img src="images/other_.png" class="image24" />
                                                                <span>Other</span>
                                                            </li> 
                                                            <li class="startrowspace">
                                                                <textarea title="<?php echo "theMeRadioFlag_c" . $i_mainPage_posts; ?>" onclick='main_page_flag_this_post_using_other_focus(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>,<?php echo "theMeRadioFlag_c" . $i_mainPage_posts; ?>)' name="" id="<?php echo "main_page_flag_motion" . $i_mainPage_posts; ?>" onkeyup="textAreaAdjust(this)" class="form-control"></textarea>

                                                                <input  placeholder="<?php echo "mainPageFlagOrReport" . $i_mainPage_posts; ?>" title="<?php echo "main_page_flag_motion" . $i_mainPage_posts; ?>" name="<?php echo "main_page_flag_motion" . $i_mainPage_posts; ?>" onclick='main_page_flag_this_post_using_other(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>,<?php echo "theMeRadioFlag_c" . $i_mainPage_posts; ?>,<?php echo "" . $i_mainPage_posts; ?>)' type="button" class="btn btn-primary" style="padding: 5px;color: blue" value="---&#10004;---" />
                                                            </li>
                                                        </ul>
                                                    </form>
                                                </div>
                                                <li><img class="image24" style="cursor:pointer" name='<?php echo "mainPageFlagOrReport" . $i_mainPage_posts; ?>' id="a<?php echo "$i_mainPage_posts" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>" onclick="main_page_flag_this_post(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>)" src="images/flag_this_00.png"/></li>
                                                <li><img class="image24" style="cursor:pointer"id="b<?php echo "$i_mainPage_posts" . "-" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>" onclick="main_page_like_this_post(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>)" src="images/ic_thumb_up_black_48dp1.png"/></li>
                                                <li><img class="image24" style="cursor:pointer" id="c<?php echo "$i_mainPage_posts" . "-" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>"onclick="main_page_unlike_this_post(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>)" src="images/ic_thumb_down_black_48dp1.png"/></li>
                                                <li><img class="image24" style="cursor:pointer" onclick="main_page_decollapse_this_comment(this)" name="main_page_comments_collapsible<?php echo "" . $i_mainPage_posts; ?>" id="d<?php echo "$i_mainPage_posts" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>" onclick="main_page_toggle_comment_of_this_post(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>)" src="images/ic_chat_black_48dp.png" onclick="pullcommentmodal()"src="images/ic_chat_black_48dp.png"/></li>
                                                <?php
                                                if ($books_main_page_users_creds[$i_mainPage_posts]['ogenius_nds_db_normal_users_id'] == $id_xxxccc88) {
                                                    ?>
                                                    <li><img id="a<?php echo "$i_mainPage_posts" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>" onclick="main_page_delete_this_post(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>)" src="images/send_to_dust_bin.png" class="image24" /></li>

                                                    <?php
                                                } else {
                                                    
                                                }
                                                ?>  
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="scrolls" style="padding-left: 5%;margin-bottom: 10px;max-height: 240px; min-width: 95%; overflow-y: auto">
                                        <div> <!--New...--></div>
                                        <div class="post-item-comments startcolstart main_page_collapsibles_2017" id="main_page_comments_collapsible<?php echo "" . $i_mainPage_posts; ?>">

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
                                                        <img class="image24 main_page_comments_collapsible<?php echo "" . $i_mainPage_posts; ?>" onclick="main_page_posts_comments_refresh_up(<?php echo "" . $main_page_the_postId_2017; ?>, this)" src="images/up_new_load.png" style="cursor:pointer; margin-left: 48%" />
                                                        <?php
                                                        echo "<input type='hidden' value='$theCommentIf_2017' id='mainpage_first_comment_id' />";
                                                    }
                                                    ?>

                                                    <div class="startcolstart" style="min-width:95%; ">
                                                        <div class="startrowspace" style="min-width:100%">
                                                            <div class="startrowspace">
                                                                <?php
                                                                //-------------The profile page dilemma--
                                                                if ($res_main_page_posts_comments['ogenius_nds_db_normal_users_api_log_face_goo_id'] < 1) {
                                                                    ?>
                                                                    <img src="uploaded_images/<?php echo "" . ($res_main_page_posts_comments['ogenius_nds_db_normal_users_avatar'] != "") ? $res_main_page_posts_comments['ogenius_nds_db_normal_users_avatar'] : "nds_avatar.png"; ?>" class="image48" /></td>
                                                                    <?php
                                                                } else {
                                                                    ?>
                                                                    <img src="<?php
                                                                    if (!empty($res_main_page_posts_comments['ogenius_nds_db_normal_users_avatar'])) {
                                                                        echo "" . (strlen($res_main_page_posts_comments['ogenius_nds_db_normal_users_avatar']) > 26) ? $res_main_page_posts_comments['ogenius_nds_db_normal_users_avatar'] : "uploaded_images/" . $res_main_page_posts_comments['ogenius_nds_db_normal_users_avatar'];
                                                                    } else {
                                                                        echo "" . "uploaded_images/" . "nds_avatar.png";
                                                                    }
                                                                    ?>" class="image48" />

                                                                    <?php
                                                                }
                                                                ?>
                                                                <span>&nbsp;&nbsp;<b><?php echo "" . checkMyPostingPrivacyStatus($res_main_page_posts_comments['ogenius_nds_db_community_posts_comments_commentator_id'], $res_main_page_posts_comments['ogenius_nds_db_normal_users_names']); ?></b></span>
                                                            </div>
                                                            <div>
                                                                <span><i><?php echo "" . time_to_sec($res_main_page_posts_comments['ogenius_nds_db_community_posts_comments_regdate']); ?></i></span>
                                                                <?php
                                                                if ($res_main_page_posts_comments['ogenius_nds_db_community_posts_comments_commentator_id'] == $id_xxxccc88) {
                                                                    ?>
                                                                    <img onclick="main_page_delete_this_post_comment(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>,<?php echo "" . $res_main_page_posts_comments['ogenius_nds_db_community_posts_comments_id']; ?>,<?php echo "" . $i_mainPage_posts; ?>,<?php echo "" . $i_mainPage_posts; ?>)" id="a<?php echo "$i_mainPage_posts" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>" onclick="main_page_flag_this_post(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>)" src="images/send_to_dust_bin.png" class="image24" />

                                                                    <?php
                                                                } else {
                                                                    
                                                                }
                                                                ?>
                                                            </div>
                                                        </div>
                                                        <p><?php echo "" . activateUrlStringsw($res_main_page_posts_comments['ogenius_nds_db_community_posts_comments_comment']); ?>                            
                                                        </p>


                                                        <hr>
                                                    </div>

                                                    <?php
                                                    $main_page_cmmnens_c++;
                                                }
                                                //---------the old load of the main page
                                                if ($main_page_cmmnens_c != 0) {
                                                    echo "<input type='hidden' value='$theCommentIf_2017' id='mainpage_last_comment_id' />";
                                                    ?>
                                                    <br/>
                                                    <img class="image24 main_page_comments_collapsible<?php echo "" . $i_mainPage_posts; ?>" onclick="main_page_posts_comments_refresh_down(<?php echo "" . $main_page_the_postId_2017; ?>, this)" src="images/down_new_load.png" style="cursor:pointer; margin-left: 48%" />

                                                    <br/>
                                                    <?php
                                                }
                                            }
                                            ?>

                                        </div>
                                        <div> <!--More...--></div>

                                    </div>
                                    <div class="panel-footer centerrowspacearound post-area" id="post-item-comment">
                                        <textarea type="textarea" class="form-control" id="<?php echo "commentOnMe" . $i_mainPage_posts; ?>" onkeyup="enlarge(this)" placeholder='<?php
                                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_35("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_35("system_config_xml/" . $_global_language)->item(0)->textContent;
                                        } else {
                                            ?>
                                                      Comment
                                                  <?php } ?>'></textarea>


                                        <div id="sendmessage"> 
                                            <img src="images/ic_send_black_24dp.png" name="main_page_comments_collapsible<?php echo "" . $i_mainPage_posts; ?>" title="<?php echo "commentOnMe" . $i_mainPage_posts; ?>"  onclick="main_page_send_comment(this,<?php echo "" . $books_main_page_posts[$i_mainPage_posts]['ogenius_nds_db_community_posts_id']; ?>,<?php echo "commentOnMe" . $i_mainPage_posts; ?>)"  type="button" value="Send" >  </a>
                                            <input type="hidden" title="main_page_comments_collapsible<?php echo "" . $i_mainPage_posts; ?>" value='' id="manu2017_<?php echo "" . $i_mainPage_posts; ?>" />

                                        </div>
                                    </div>
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
            </div>
        </div>
    </div>
</div>

<div class="panel panel-default panel-shadow dialog showcommentsdialog">

    <div class="panel-heading centerrowspace">
        <div class="startrow">
            <img src="images/ic_account_circle_black_48dp.png"/>
            <span>Username username</span>
        </div>
        <span> <small><i>12:00am</i></small></span>


    </div>
    <div class="panel-body hasmedia">
        <div>
            <div class="post-item startcolstart">
                <div id="img-post" class="startcolstart">
                    <img class="fullimage"src="images/background1.svg"/>
                    <p>rftrvyvty vtyvytv ytv iygiygu gu ygyugy rftrvyvty vtyvytv ytv iygiygu gu ygyugy</p>
                </div>
            </div>

            <div class="post-item-comments startcolstart">

                <div class="startcolstart">
                    <div class="startrow">
                        <img src="images/ic_account_circle_black_48dp.png"/>
                        <span>Username username</span>
                    </div>
                    <p class="post-item-text">rftrvyvty vtyvytv ytv iygiygu gu ygyugy rftrvyvty vtyvytv ytv iygiygu gu ygyugy</p>
                </div>
                <div class="startcolstart">
                    <div class="startrow">
                        <img src="images/ic_account_circle_black_48dp.png"/>
                        <span>Username username</span>
                    </div>
                    <p class="post-item-text">rftrvyvty vtyvytv ytv iygiygu gu ygyugy rftrvyvty vtyvytv ytv iygiygu gu ygyugy</p>
                </div>
                <div class="startcolstart">
                    <div class="startrow">
                        <img src="images/ic_account_circle_black_48dp.png"/>
                        <span>Username username</span>
                    </div>
                    <p class="post-item-text">rftrvyvty vtyvytv ytv iygiygu gu ygyugy rftrvyvty vtyvytv ytv iygiygu gu ygyugy</p>
                </div>
                <div class="startcolstart">
                    <div class="startrow">
                        <img src="images/ic_account_circle_black_48dp.png"/>
                        <span>Username username</span>
                    </div>
                    <p class="post-item-text">rftrvyvty vtyvytv ytv iygiygu gu ygyugy rftrvyvty vtyvytv ytv iygiygu gu ygyugy</p>
                </div>
                <div class="startcolstart">
                    <div class="startrow">
                        <img src="images/ic_account_circle_black_48dp.png"/>
                        <span>Username username</span>
                    </div>
                    <p class="post-item-text">rftrvyvty vtyvytv ytv iygiygu gu ygyugy rftrvyvty vtyvytv ytv iygiygu gu ygyugy</p>


                </div>
                <div class="startcolstart">
                    <div class="startrow">
                        <img src="images/ic_account_circle_black_48dp.png"/>
                        <span>Username username</span>
                    </div>
                    <p class="post-item-text">rftrvyvty vtyvytv ytv iygiygu gu ygyugy rftrvyvty vtyvytv ytv iygiygu gu ygyugy</p>


                </div>
                <div class="startcolstart">
                    <div class="startrow">
                        <img src="images/ic_account_circle_black_48dp.png"/>
                        <span>Username username</span>
                    </div>
                    <p class="post-item-text">rftrvyvty vtyvytv ytv iygiygu gu ygyugy rftrvyvty vtyvytv ytv iygiygu gu ygyugy</p>


                </div>



            </div>

        </div>

    </div>
    <div class="panel-footer centerrowspacearound post-area">
        <div id="addemoji"> 
            <img src="images/emoji.png"  alt="123">
        </div>
        <input type="textarea" placeholder="Comment">
        <div id="sendmessage"> 
            <img src="images/ic_send_black_24dp.png" alt="send">  </a>
        </div>
    </div>
</div>

<div class="mediadialog dialog panel-shadow" style="display: none">
    <div class="post-recipient panel-heading centerrowspace">
        <b><h4>Post Image</h4></b><button class="btn btn-danger" onclick="pushdialogsuggestion();">&times;</button>
    </div>
    <div class="dragImagebox">
        <div class="chooseImageFromDevice centercolumn">
            <form id="main_page_post_image_2017_up_file_form" class="startcolcenter" style="width:100%; height: 200px;overflow-y: auto">
                <div class="govdialog-media">
                    <input onchange="upload_main_page_post_img_2017()" id="main_page_post_image_2017_file" type="file" class="btn btn-primary" placeholder="add video file"/>
                    <button class="btn btn-success"><i class="fa fa-camera"></i>&nbsp; add image</button>

                </div>
                <div>
                    <input id="main_page_post_image_2017_up_file_name" type="hidden" />
                    <span id="main_page_post_image_2017_up_file_msger"></span>
                </div>
                <div  style="width:100%; height:100%;overflow-y: scroll">
                    <img id="main_page_post_image_2017_up_file_preview" class="img-thumbnail" />

                </div>
            </form>
        </div>
    </div>

    <div id="addimagecaption" class="centerrowspacearound post-area">
        <textarea type="textarea" class="form-control" id="main_page_post_image_2017_up_file_caption" onkeyup="enlarge(this)" onchange="enlarge(this)" placeholder='<?php
        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_55("system_config_xml/" . $_global_language)->item(0)->textContent)) {
            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_55("system_config_xml/" . $_global_language)->item(0)->textContent;
        } else {
            ?>
                      Your caption
                  <?php } ?>'>
        </textarea>
        <div id="sendmessage"> 
            <img src="images/ic_send_black_24dp.png" onclick="main_page_send_img_post()" alt="<?php
            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_29("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_29("system_config_xml/" . $_global_language)->item(0)->textContent;
            } else {
                ?>
                     Send
                 <?php } ?>"/> 
        </div>
    </div>
</div>

<!--<div class="imagedialog dialog">
    <div class="post-recipient panel-heading centerrowspace">
        <b><h4>Suggestion box</h4></b><button class="btn btn-danger" onclick="pushdialogsuggestion();">&times;</button>
    </div>
    <div class="post-recipient centerrow">
        <input class="my-form-control search" id="main_page_find_the_companies_reg" onkeyup="main_page_suggest_to_community_view_all_bySearch(this)" placeholder="<?php
if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_48("system_config_xml/" . $_global_language)->item(0)->textContent)) {
    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_48("system_config_xml/" . $_global_language)->item(0)->textContent;
} else {
    ?>
                           Search a company Or type in a new company
<?php } ?>" type="text"/>

        <input class="btn btn-info" onclick="main_page_suggest_to_community_view_all()" type="button" value="<?php
if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_49("system_config_xml/" . $_global_language)->item(0)->textContent)) {
    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_49("system_config_xml/" . $_global_language)->item(0)->textContent;
} else {
    ?>
                           View All
<?php } ?>" style="width:15%; height: 48px" />
    </div>

    <div class="post-search-dropdown" id="mainpage_suggest_text_search_company_results" style="visibility:hidden;">
        <span type="button" class="btn btn-danger image24 centerrow" onclick="main_page_hide_search_company_results()">&times;</span>

        <div id="mainpage_suggest_text_search_company_results_data" style="max-height: 350px;">
        </div>
        <input type="hidden" id="mainpage_id_of_selected_company_suggestion_box" />
    </div>                    
    <div id="image_0">
        <input type="hidden" value="" id="main_page_image_company_preview_data_id" />
        <div id="main_page_image_company_preview_data">

        </div>
        <div class="dragImagebox">
            <div class="chooseImageFromDevice startcolcenter">

                <form id="main_page_suggest_img_form_2017">
                    <div class="govdialog-media">
                        <input onchange="upload_mainpage_img_suggest()" id="main_page_suggest_img_form_2017_file" type="file" class="btn" placeholder="add image"/>
                        <button class="btn btn-success"><i class="fa fa-image"></i>&nbsp; add image </button>

                    </div>
                    <label id="mainpage_community_suggest_img_msg"></label>
                </form>
                <div class="row" style="width: 100%; height: 200px; overflow-y: scroll">
                    <div id="main_page_community_suggest_IMG_clouds" class="container-fluid">

                    </div>
                </div>

            </div>
        </div>
        <div id="addimagecaption" class="centerrowspacearound post-area" >
            <textarea type="textarea" class="form-control" id="main_pagee_community_suggest_an_Image_2017_caption" onkeyup="enlarge(this)" onchange="enlarge(this)" placeholder='<?php
if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_55("system_config_xml/" . $_global_language)->item(0)->textContent)) {
    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_55("system_config_xml/" . $_global_language)->item(0)->textContent;
} else {
    ?>
                                  Your caption
<?php } ?>'></textarea>


            <div id="sendmessage"> 
                <img src="images/ic_send_black_24dp.png" onclick="main_page_send_this_suggestionToTheCompany('image')" class="image24" type="button" alt="<?php
if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_51("system_config_xml/" . $_global_language)->item(0)->textContent)) {
    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_51("system_config_xml/" . $_global_language)->item(0)->textContent;
} else {
    ?>
                                 Send
<?php } ?>">  
            </div>
        </div>
    </div>
</div>

<div class="videodialog dialog">
    <div class="post-recipient panel-heading centerrowspace">
        <b><h4>Suggestion box</h4></b><button class="btn btn-danger" onclick="pushdialogsuggestion();">&times;</button>
    </div>
    <div class="post-recipient centerrow">
        <input class="my-form-control search" id="main_page_find_the_companies_reg" onkeyup="main_page_suggest_to_community_view_all_bySearch(this)" placeholder="<?php
if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_48("system_config_xml/" . $_global_language)->item(0)->textContent)) {
    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_48("system_config_xml/" . $_global_language)->item(0)->textContent;
} else {
    ?>
                           Search a company Or type in a new company
<?php } ?>" type="text"/>

        <input class="btn btn-info" onclick="main_page_suggest_to_community_view_all()" type="button" value="<?php
if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_49("system_config_xml/" . $_global_language)->item(0)->textContent)) {
    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_49("system_config_xml/" . $_global_language)->item(0)->textContent;
} else {
    ?>
                           View All
<?php } ?>" style="width:15%; height: 48px" />
    </div>

    <div class="post-search-dropdown" id="mainpage_suggest_text_search_company_results" style="visibility:hidden;">
        <span type="button" class="btn btn-danger image24 centerrow" onclick="main_page_hide_search_company_results()">&times;</span>

        <div id="mainpage_suggest_text_search_company_results_data" style="max-height: 350px;">
        </div>
        <input type="hidden" id="mainpage_id_of_selected_company_suggestion_box" />
    </div>
    <div id="video_0">
        <input type="hidden" value="" id="main_page_video_company_preview_data_id" />
        <div id="main_page_video_company_preview_data">

        </div>
        <div class="dragImagebox">
            <div class="chooseImageFromDevice startcolcenter">

                <form id="main_page_community_suggest_video_2017_form">
                    <div class="govdialog-media">
                        <input onchange="upload_mainpage_video_suggest()" id="main_page_community_suggest_video_2017_form_file" type="file" class="btn btn-primary" placeholder="add video file"/>
                        <button class="btn btn-success"><i class="fa fa-camera"></i>&nbsp; add video</button>

                    </div>
                    <label id="main_page_community_suggest_video_2017_form_file_msg"></label>
                    <input type="hidden" id="main_page_community_suggest_video_2017_form_file_val" />
                </form>
                <div class="row" style="width: 100%; height: 200px; overflow-y: scroll">
                    <div id="main_page_community_suggest_video_clouds" class="container-fluid">

                    </div>
                </div>

            </div>
        </div>
        <div id="addimagecaption" class="centerrowspacearound post-area">

            <textarea type="textarea" class="form-control" id="main_page_community_suggest_video_caption" onkeyup="enlarge(this)" onchange="enlarge(this)" placeholder='<?php
if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_55("system_config_xml/" . $_global_language)->item(0)->textContent)) {
    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_55("system_config_xml/" . $_global_language)->item(0)->textContent;
} else {
    ?>
                                  Your caption
<?php } ?>'></textarea>

            <div id="sendmessage"> 
                <img src="images/ic_send_black_24dp.png" id="main_page_community_suggest_video_caption" >  
            </div>
        </div>
    </div>

</div>
<div class="audiodialog dialog">
    <div class="post-recipient panel-heading centerrowspace">
        <b><h4>Suggestion box</h4></b><button class="btn btn-danger" onclick="pushdialogsuggestion();">&times;</button>
    </div>
    <div class="post-recipient centerrow">
        <input class="my-form-control search" id="main_page_find_the_companies_reg" onkeyup="main_page_suggest_to_community_view_all_bySearch(this)" placeholder="<?php
if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_48("system_config_xml/" . $_global_language)->item(0)->textContent)) {
    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_48("system_config_xml/" . $_global_language)->item(0)->textContent;
} else {
    ?>
                           Search a company Or type in a new company
<?php } ?>" type="text"/>

        <input class="btn btn-info" onclick="main_page_suggest_to_community_view_all()" type="button" value="<?php
if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_49("system_config_xml/" . $_global_language)->item(0)->textContent)) {
    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_49("system_config_xml/" . $_global_language)->item(0)->textContent;
} else {
    ?>
                           View All
<?php } ?>" style="width:15%; height: 48px" />
    </div>
    <div class="post-search-dropdown" id="mainpage_suggest_text_search_company_results" style="visibility:hidden;">
        <span type="button" class="btn btn-danger image24 centerrow" onclick="main_page_hide_search_company_results()">&times;</span>
        <div id="mainpage_suggest_text_search_company_results_data" style="max-height: 350px;">
        </div>
        <input type="hidden" id="mainpage_id_of_selected_company_suggestion_box" />
    </div>
    <div id="audio_0">
        <input type="hidden" value="" id="main_page_audio_company_preview_data_id" />
        <div id="main_page_audio_company_preview_data">
        </div>
        <div class="dragImagebox">
            <div class="chooseImageFromDevice startcolcenter">
                <form id="main_page_community_suggest_audio_2017">
                    <div class="govdialog-media">
                        <input onchange="upload_mainpage_audio_suggest()" type="file" id="main_page_community_suggest_audio_2017_file" class="btn btn-primary" placeholder="add audio file"/>
                        <button class="btn btn-success"><i class="fa fa-image"></i>&nbsp; add audio file </button>
                    </div>
                    <label id="main_page_community_suggest_audio_2017_file_msg">                                            
                    </label>
                    <input type="hidden" id="main_page_community_suggest_audio_2017_file_val"/>
                </form>
                <div class="row" style="width: 100%; height: 200px; overflow-y: scroll">
                    <div id="main_page_community_suggested_audio_2017_preview" class="container-fluid">
                    </div>
                </div>
            </div>
        </div>
        <div id="addimagecaption" class="centerrowspacearound post-area">
            <input type="textarea" id="main_page_community_suggest_audio_2017_we" placeholder='<?php
if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_55("system_config_xml/" . $_global_language)->item(0)->textContent)) {
    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_55("system_config_xml/" . $_global_language)->item(0)->textContent;
} else {
    ?>
                               Your caption
<?php } ?>' onkeyup="textAreaAdjust(this)">
            <div id="sendmessage"> 
                <img src="images/ic_send_black_24dp.png" onclick="main_page_send_this_suggestionToTheCompany('audio')" class="image24" type="button" alt="<?php
if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_51("system_config_xml/" . $_global_language)->item(0)->textContent)) {
    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_51("system_config_xml/" . $_global_language)->item(0)->textContent;
} else {
    ?>
                                 Send
<?php } ?>">  
            </div>
        </div>
    </div>
</div>-->
<div class="sitecover startcolcenter">
    <!--    <div class="textdialog dialog">
            <div class="post-recipient panel-heading centerrowspace">
                <b><h4>Suggestion box</h4></b><button class="btn btn-danger" onclick="pushdialogsuggestion();">&times;</button>
            </div>
            <div class="post-recipient centerrow">
                <input class="my-form-control search" id="main_page_find_the_companies_reg" onkeyup="main_page_suggest_to_community_view_all_bySearch(this)" placeholder="<?php
    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_48("system_config_xml/" . $_global_language)->item(0)->textContent)) {
        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_48("system_config_xml/" . $_global_language)->item(0)->textContent;
    } else {
        ?>
                                   Search a company Or type in a new company
    <?php } ?>" type="text"/>
    
                <button class="btn btn-info" onclick="main_page_suggest_to_community_view_all()" type="button" style="width:15%; height: 48px" ><?php
    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_49("system_config_xml/" . $_global_language)->item(0)->textContent)) {
        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_49("system_config_xml/" . $_global_language)->item(0)->textContent;
    } else {
        ?>
                                View All
    <?php } ?></button>
            </div>
            <div class="post-search-dropdown" id="mainpage_suggest_text_search_company_results" style="visibility:hidden;">
                <span type="button" class="btn btn-danger image24 centerrow" onclick="main_page_hide_search_company_results()">&times;</span>
    
                <div id="mainpage_suggest_text_search_company_results_data" style="max-height: 350px;">
                </div>
                <input type="hidden" id="mainpage_id_of_selected_company_suggestion_box" />
            </div>                    
            <div id="text_0">
                <div class="dragImagebox">
                    <input type="hidden" value="" id="main_page_text_company_preview_data_id" />
                    <div class="chooseImageFromDevice startcolstart container-fluid">                   
                        <div id="main_page_text_company_preview_data" class="startcolstart container" style="width:95%;">
                        </div>
                    </div>
                </div>
                <div id="addimagecaption" class="centerrowspacearound post-area">
                    <input type="textarea" id="main_page_community_suggest_To_text2017" placeholder='<?php
    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_50("system_config_xml/" . $_global_language)->item(0)->textContent)) {
        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_50("system_config_xml/" . $_global_language)->item(0)->textContent;
    } else {
        ?>
                                       Your question
    <?php } ?>'onkeyup="textAreaAdjust(this)">
                    <div id="sendmessage"> 
                        <img src="images/ic_send_black_24dp.png" class="image24" alt="send" onclick="main_page_send_this_suggestionToTheCompany('text')" type="button" alt="<?php
    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_51("system_config_xml/" . $_global_language)->item(0)->textContent)) {
        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_51("system_config_xml/" . $_global_language)->item(0)->textContent;
    } else {
        ?>
                                         Send
    <?php } ?>"> 
                    </div>
                </div>
            </div>
        </div>-->
</div>
<!--<div class="govdialog dialog startcolcenter panel-shadow">
    <div class="post-recipient panel-heading centerrowspace" >
        <b><h4>Rwanda Governance Board</h4></b><button class="btn btn-danger" onclick="pushgovsuggestion();">&times;</button>
    </div>

    <div class="dragImagebox">
        <div class="chooseImageFromDevice centercolumn">
            <h2 class="govdialog-issue" style="text-align: center"></h2>
        </div>
    </div>
    <div id="addimagecaption" class="centerrowspacearound post-area" >
        <div class="startrowstart container">
            <input type="textarea"id="main_page_rgb_ask_question_2017" onkeyup="textAreaAdjust(this)" placeholder='<?php
if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_38("system_config_xml/" . $_global_language)->item(0)->textContent)) {
    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_38("system_config_xml/" . $_global_language)->item(0)->textContent;
} else {
    ?>
                               Your question here
<?php } ?>'>
            <div id="sendmessage"> 
                <button onclick="main_page_rgb_ask_question()" class="btn btn-primary" type="button" value="<?php
if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_39("system_config_xml/" . $_global_language)->item(0)->textContent)) {
    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_39("system_config_xml/" . $_global_language)->item(0)->textContent;
} else {
    ?>
                                    Send
<?php } ?>" ><?php
if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_39("system_config_xml/" . $_global_language)->item(0)->textContent)) {
    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_39("system_config_xml/" . $_global_language)->item(0)->textContent;
} else {
    ?>
                                Send
<?php } ?></button>
            </div>
        </div>
    </div>
</div>-->

<?php
require_once ("includes/app_footer.php");
?>


</body>
</html>