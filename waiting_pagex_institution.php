<?php
require_once 'includes/header.php';
//----------------redirect if no logging or s session key
if (!(isset($_SESSION["ogenius_nds_user_id_x2309999_990"])) && !(isset($_COOKIE["ogenius_nds_user_id_x2309999_990"]))) {
    header("Location:index.php");
} else {
    
}
?>
<?php
if (isset($_GET['theCode_xxx_0000'])) {
    $thecode = $_GET['theCode_xxx_0000'];
    $accountType_mega = $_GET['theaccountType_xxx_0000'];
    //--------------
    switch ($accountType_mega) {
        case"individxbnnmm" :
            header("profile_page.php");
            break;
        case"officialksldkskd" :
            header("profile_page_officials.php");
            break;
        case"i" :
            header("profile_page_institution.php");
            break;
    }
} else {
    
}

//-----------------THe id
$id_waiting = $_SESSION["ogenius_nds_user_id_x2309999_990"];
?>
<?php
//------------------All this page's value to be used--------------------------
$sql_waiting_pagex2016 = "SELECT * FROM  ogenius_nds_db_normal_users WHERE    ogenius_nds_db_normal_users_id='{$id_waiting}' ";
if ($query_waiting_pagex2016 = $database->query($sql_waiting_pagex2016)) {
    //---------------------
    while ($res_waiting_pagex2016 = mysqli_fetch_array($query_waiting_pagex2016)) {
        //--
        $the_mail_waiting_pagex = $res_waiting_pagex2016['ogenius_nds_db_normal_users_email'];
    }
}
if (!(isset($the_mail_waiting_pagex))) {
    header("Location:index.php");
} else {
    
}
?>

<div  id="registerFairy_popUp" class="centercolumn" style="z-index: 20000;">

    <h3 style=" margin-bottom: 25px"><br><br><?php
        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_waitingpage_0("system_config_xml/" . $_global_language)->item(0)->textContent)) {
            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_waitingpage_0("system_config_xml/" . $_global_language)->item(0)->textContent;
        } else {
            ?>
            Verification
        <?php } ?>
    </h3>
    <br>
    <br>
    <p>
        <?php
        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_waitingpage_1("system_config_xml/" . $_global_language)->item(0)->textContent)) {
            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_waitingpage_1("system_config_xml/" . $_global_language)->item(0)->textContent;
        } else {
            ?>
        A link has been sent to the email address and a code to fill in the field below,<br> type in the code in the field or open the link in your browser

        <?php } ?>
    </p>
    <div class="form-group">
        <div class = "form-group col-md-4">
            <input id="waitingCode" class="form-control" placeholder="<?php
                        if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_waitingpage_2("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                            echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_waitingpage_2("system_config_xml/" . $_global_language)->item(0)->textContent;
                        } else {
                            ?>
                                   Type Code here
                               <?php } ?>" type="number" />
        </div>
        <div class = "form-group col-md-4">
            <input id="waitingPagexCheckEmail" class="form-control" onkeydown="validate_waiting_Email(this)" onchange="validate_waiting_Email(this)" type='text' disabled="true" value='<?php echo "" . $the_mail_waiting_pagex; ?>'/>
        </div>
        <div class = "form-group col-md-4">
            <button onclick="undisableThisField()" class="btn btn-link"><?php
                                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_waitingpage_3("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_waitingpage_3("system_config_xml/" . $_global_language)->item(0)->textContent;
                                } else {
                                    ?>
                                Edit
                            <?php } ?>
            </button>
         
        </div>
    </div>


    <div onclick="" id="registerP" style="background: #ffffff;margin-top: 0.5%;">
       
        <div>
            <table>
                <tr>
                    <td>
                        <div style="min-width: 20px">
                            <div class="loader_span" id="waiting_email_wait" style="position: absolute;"></div>
                            <div id="waiting_email_failed" style="position: absolute;color: red;">
                                &#10008;
                            </div>
                            <div id="waiting_email_okay" style="position: absolute;color: green">
                                &#10004;
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
            <div>
                <table style="margin-left: 30%;">
                    <tr>
                        <td>
                            <input onclick="verifyTheWaitingCodeInstitution(this)" id='<?php echo "" . $id_waiting; ?>'
                                   type="button" value="<?php
                                   if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_waitingpage_4("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                       echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_waitingpage_4("system_config_xml/" . $_global_language)->item(0)->textContent;
                                   } else {
                                       ?>
                                       Verify
                                   <?php } ?>" style="background:#0080FF;color: white;width: 100px;padding: 5px;border-style: none;border-radius: 4px;border:2px solid #0080FF ;" />
                        </td>
                        <td>
                            <input type="button" onclick="goBackLink()" value="<?php
                            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_waitingpage_5("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_waitingpage_5("system_config_xml/" . $_global_language)->item(0)->textContent;
                            } else {
                                ?>
                                       Go Back
                                   <?php } ?>" style="background:white;border:2px solid #0080FF ;width: 100px;padding: 5px;border-radius: 4px;" />
                        </td>
                    </tr>

                </table>
                <h4 style="text-align: center;"><?php
                    if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_waitingpage_6("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                        echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_waitingpage_6("system_config_xml/" . $_global_language)->item(0)->textContent;
                    } else {
                        ?>
                        If you have not seen any message click below to resend
                    <?php } ?></h4>
                <input type="button" onclick="resendTheEmail(this)" value="<?php
                if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_waitingpage_7("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                    echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_waitingpage_7("system_config_xml/" . $_global_language)->item(0)->textContent;
                } else {
                    ?>
                           Resend
                       <?php } ?>" id='<?php echo "" . $id_waiting; ?>'
                       style="margin-left:38%;background:#0080FF;color: white;width: 100px;padding: 5px;border-style: none;border-radius: 4px;border:2px solid #0080FF ;text-align: center;" />

            </div>

        </div>
    </div>

</div>
<?php
require_once ("includes/app_footer.php");
?>


</body>
</html>