
<div class="main-footer startrowspace" style="position: fixed; bottom: 0;">
    <div>
        <img class="image24" src="images/Facebook Round.png">
        <img class="image24" src="images/Twitter round.png">
        <img class="image24" src="images/Instagram round.png">
        <img class="image24" src="images/Google plus round.png">
    </div>
    <span>
        <a target="_blank" href="http://www.ogeniuspriority.com" style="text-decoration: none;color: white;">Property of O'Genius Priority LTD</a></span><span style="margin-left: 30%"><a href="nds_terms_and_conditions.php" style="text-decoration: none;color: white;"><?php
            if (!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_50("system_config_xml/" . $_global_language)->item(0)->textContent)) {
                echo "" . $NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_institution_50("system_config_xml/" . $_global_language)->item(0)->textContent;
            } else {
                ?>
                Terms & Conditions
            <?php } ?>
            </a>
    </span>
</div>

<link rel="stylesheet" href="css/jquery-ui.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="js/jquery-3.2.1.js" type="text/javascript"></script>
<script src="jquery/special_ui/jquery-ui.js" type="text/javascript"></script>
<script src="js/nds_main.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<!-- Date picker -->
<script type="text/javascript" src="jquery/ui_datepicker_lib/jquery.timepicker.js"></script>
<link rel="stylesheet" type="text/css" href="jquery/ui_datepicker_lib/jquery.timepicker.css" />
<script type="text/javascript" src="jquery/ui_datepicker_lib/lib/bootstrap-datepicker.js"></script>
<link rel="stylesheet" type="text/css" href="jquery/ui_datepicker_lib/lib/bootstrap-datepicker.css" />
<script type="text/javascript" src="jquery/ui_datepicker_lib/lib/site.js"></script>