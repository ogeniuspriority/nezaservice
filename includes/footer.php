<footer style="clear:both;text-align: center;height: 40%;color: rgba(255,255,255,0.8);padding-top: 20px;padding-left: 20px;color: white;">

    <table style="color: rgba(255,255,255,0.8);">
        <tr>
            <td style="width:5%;"><img src="images/logo123.png" style="width: 110px;height: 100px;margin-top: -95px;" /></td>
            <td style="width:20%;">
                <div style="min-height: 300px">
                    <?php
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

                </div>
            </td>
            <td style="width:50%;">
                <div style="margin-left: 15%">
                    <h4 style="margin-top: -72px;"><?php
                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_CoommunityFooter_0("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_CoommunityFooter_0("system_config_xml/" . $_global_language)->item(0)->textContent;
                    } else {
                        ?>
                            Leave a suggestion
                        <?php } ?></h4>
                    <table>
                        <tr>
                            <td><input id="Names_2017" type="text" style='width: 200px;background: rgba(255,255,255,.9);border-radius: 4px;' placeholder="<?php
                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_CoommunityFooter_1("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_CoommunityFooter_1("system_config_xml/" . $_global_language)->item(0)->textContent;
                        } else {
                            ?>
                                           Names
                                       <?php } ?>*" /></br>
                                <input onkeyup="nds_validate_suggestion_common_mail(this)" onchange="nds_validate_suggestion_common_mail(this)" id="email_add_2017" type="text" style='margin-top:8px;width: 200px;background: rgba(255,255,255,.9);border-radius: 4px;' placeholder="<?php
                                       if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_CoommunityFooter_2("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                           echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_CoommunityFooter_2("system_config_xml/" . $_global_language)->item(0)->textContent;
                                       } else {
                                           ?>
                                           Email address
                                       <?php } ?>*" /></br>
                                <input onclick="sendSuggestionToThePlatform()"  id="" type="button" style="margin-top:8px;background: rgba(255,255,255,.9);border-radius: 4px;" value="<?php
                                       if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_CoommunityFooter_3("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                           echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_CoommunityFooter_3("system_config_xml/" . $_global_language)->item(0)->textContent;
                                       } else {
                                           ?>
                                           submit
                                       <?php } ?>" />
                            </td>
                            <td>
                                <textarea id="message_2017" onkeyup="textAreaAdjust(this)" style="width: 200px;height: 80px;background: rgba(255,255,255,.9);border-radius: 4px;" placeholder="<?php
                                       if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_CoommunityFooter_4("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                           echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_CoommunityFooter_4("system_config_xml/" . $_global_language)->item(0)->textContent;
                                       } else {
                                           ?>
                                              Message
                                          <?php } ?>*"></textarea>
                            </td>
                        </tr>
                    </table>
                </div>
            </td>
            <td>
                <div style="margin-top: -72px;">
                    <h4><?php
                                          if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_CoommunityFooter_5("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                              echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_CoommunityFooter_5("system_config_xml/" . $_global_language)->item(0)->textContent;
                                          } else {
                                              ?>
                            Address
                        <?php } ?></h4>
                    <table style="color: rgba(255,255,255,0.8)">
                        <tr>
                            <td>
                                <img src="images/Pin.png" style="width: 15px;height: 20px;border-radius: 4px;" />
                            </td>
                            <td style="padding-left: 40px;">
                                KK 57St,Nyarugunga</br>
                                Kigali-Rwanda
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="images/Phone.png" style="width: 20px;height: 20px;border-radius: 4px;" />
                            </td>
                            <td style="padding-left: 40px;">
                                +250786653152</br>
                                +250788301214								
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="images/Email.png" style="width: 20px;height: 20px;border-radius: 4px;" />
                            </td>
                            <td style="padding-left: 40px;">
                                info@ogeniuspriority.com								
                            </td>
                        </tr>
                    </table>
                </div>

            </td>
            <td></td>
        </tr>
    </table>

    <div style="margin-left:-50px;padding:5px;background: #333333;"><a href="http://www.ogeniuspriority.com" target="_blank" style="text-decoration: none;color:rgba(255,255,255,0.9)"><label style="">Copyright &copy; 2014-<?php echo strftime('%Y') . ""; ?>  O'Genius Priority LTD. <?php
                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_CoommunityFooter_6("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_CoommunityFooter_6("system_config_xml/" . $_global_language)->item(0)->textContent;
                        } else {
                            ?>
                    All Rights Reserved.
                <?php } ?></label></a>
    </div>
</footer>

