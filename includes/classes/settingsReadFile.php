<?php

class myXML_CED_Settings {

    public $mainFileName;
    private $GeneralSettings;
    private $_header;
    private $_header_;
    private $homepage;
    private $waitingpage;
    private $community_user_settings;
    private $institution_user_settings;
    private $official_user_settings;
    private $main_page_institution_rgb;
    private $main_page_institution;
    private $main_page;
    private $profile_page_institution;
    private $profile_page_officials;
    private static $dom;

    function __construct($FileName) {
// $xml = simplexml_load_file("note.xml") or die("Error: Cannot create object");
// echo $xml -> to . "<br>";
// echo $xml -> from . "<br>";
// echo $xml -> heading . "<br>";
// echo $xml -> body;
        $this->getGeneralSettings($FileName);
    }

    public function getGeneralSettings($FName) {
        $dom = new DOMDocument();
        $dom->load($FName) or die("Error: Cannot create object");
        $root = $dom->documentElement;
//$nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('generalsettings');
//----------
//$xml = simplexml_load_file($FName) or die("Error: Cannot create object");
//$GeneralSettings = $xml -> nds -> generalsettings;
//echo $GeneralSettings . "<br>";
    }

    public static function getGeneralSettings_header($filename) {
//$_header = $GeneralSettings -> _header;
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('progressloader');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_header_($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('progressloader_ok');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_header_1($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('progressloader_failed');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_header_1_amend_0($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('progressloader_incorrect');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_header_2($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('mainpage_logout');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_header_3($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('mainpage_messenger_confirm_Activate');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_header_4($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('mainpage_messenger_confirm_Suspend');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_header_5($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('mainpage_messenger_confirm_Reactivate');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_header_6($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('mainpage_messenger_account');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_header_7($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('mainpage_cancel_btn');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_header_8($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('mainpage_Confirm_btn');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_homepage_0($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('nds_home_brief_intro');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_homepage_1($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('nds_home_signin_btn');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_homepage_2($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('nds_home_login_panel_title');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_homepage_3($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('nds_home_login_panel_close_btn');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_homepage_4($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('nds_home_login_panel_username');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_homepage_5($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('nds_home_login_panel_password');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_homepage_6($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('nds_home_login_panel_btn_signin');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_homepage_7($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('nds_home_login_panel_signin_error');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_homepage_8($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('nds_home_signup_btn');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_homepage_9($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('nds_home_create_account_title');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_homepage_10($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('nds_home_create_account_individual');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_homepage_11($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('nds_home_create_account_institution');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_homepage_12($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('nds_home_create_account_officials');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_homepage_13($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('nds_home_create_account_signin_with_facebook');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_homepage_14($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('nds_home_create_account_signin_with_google');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_homepage_15($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('nds_home_create_account_firstname');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_homepage_16($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('nds_home_create_account_lastname');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_homepage_17($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('nds_home_create_account_birthdate');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_homepage_18($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('nds_home_create_account_gender');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_homepage_19($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('nds_home_create_account_gender_male');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_homepage_20($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('nds_home_create_account_gender_female');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_homepage_21($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('nds_home_create_account_profession');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_homepage_22($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('nds_home_create_account_maritalstatus_');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_homepage_23($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('nds_home_create_account_maritalstatus_single');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_homepage_24($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('nds_home_create_account_maritalstatus_married');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_homepage_25($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('nds_home_create_account_maritalstatus_divorced');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_homepage_26($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('nds_home_create_account_maritalstatus_widow');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_homepage_27($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('nds_home_create_account_maritalstatus_widower');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_homepage_28($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('nds_home_create_account_province');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_homepage_29($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('nds_home_create_account_district');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_homepage_30($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('nds_home_create_account_sector');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_homepage_31($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('nds_home_create_account_email');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_homepage_32($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('nds_home_create_account_password');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_homepage_33($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('nds_home_create_account_password_confirm');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_homepage_34($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('nds_home_create_account_phone');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_homepage_35($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('nds_home_create_account_register_btn');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_homepage_36($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('nds_home_create_account_clear_btn');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_homepage_37($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('nds_home_create_account_institution_title');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_homepage_38($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('nds_home_create_account_institution_website');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_homepage_39($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('nds_home_create_account_institution_infomail');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_homepage_40($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('nds_home_create_account_institution_province');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_homepage_41($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('nds_home_create_account_institution_district');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_homepage_42($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('nds_home_create_account_institution_sector');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_homepage_43($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('nds_home_create_account_institution_motto');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_homepage_44($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('nds_home_create_account_institution_username');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_homepage_45($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('nds_home_create_account_institution_password');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_homepage_46($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('nds_home_create_account_institution_password_confirm');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_homepage_47($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('nds_home_create_account_institution_register_btn');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_homepage_48($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('nds_home_create_account_institution_clear_btn');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_homepage_49($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('nds_home_create_account_officials_firstname');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_homepage_50($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('nds_home_create_account_officials_firstname');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_homepage_51($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('nds_home_create_account_officials_lastname');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_homepage_52($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('nds_home_create_account_officials_marital_status');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_homepage_53($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('nds_home_create_account_officials_marital_status_single');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_homepage_54($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('nds_home_create_account_officials_marital_status_married');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_homepage_55($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('nds_home_create_account_officials_marital_status_divorced');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_homepage_56($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('nds_home_create_account_officials_marital_status_widow');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_homepage_57($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('nds_home_create_account_officials_marital_status_widower');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_homepage_58($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('nds_home_create_account_officials_gender');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_homepage_59($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('nds_home_create_account_officials_gender_male');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_homepage_60($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('nds_home_create_account_officials_gender_female');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_homepage_61($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('nds_home_create_account_officials_institution');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_homepage_62($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('nds_home_create_account_officials_department');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_homepage_63($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('nds_home_create_account_officials_position');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_homepage_64($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('nds_home_create_account_officials_officelocation');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_homepage_65($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('nds_home_create_account_officials_province');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_homepage_66($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('nds_home_create_account_officials_district');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_homepage_67($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('nds_home_create_account_officials_sector');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_homepage_68($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('nds_home_create_account_officials_workphone');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_homepage_69($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('nds_home_create_account_officials_company_mail_address');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_homepage_70($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('nds_home_create_account_officials_password');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_homepage_71($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('nds_home_create_account_officials_confirm_password');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_homepage_72($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('nds_home_create_account_officials_register_btn');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_homepage_73($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('nds_home_create_account_officials_clear_btn');
        return $GeneralSettings;
    }
    public static function getGeneralSettings_homepage_74($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('nds_home_available_on_android');
        return $GeneralSettings;
    }
    public static function getGeneralSettings_homepage_75($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('nds_home_watch_video');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_CoommunityFooter_0($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('community_user_footer_leave_a_suggestion');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_CoommunityFooter_1($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('community_user_footer_leave_a_suggestion_names');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_CoommunityFooter_2($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('community_user_footer_leave_a_suggestion_email_address');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_CoommunityFooter_3($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('community_user_footer_leave_a_suggestion_submit');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_CoommunityFooter_4($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('community_user_footer_leave_a_suggestion_message');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_CoommunityFooter_5($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('community_user_footer_leave_a_suggestion_address');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_CoommunityFooter_6($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('community_user_footer_leave_a_suggestion_all_rights_reserved');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_waitingpage_0($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('verificationtitle');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_waitingpage_1($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('verification_brief_explanation');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_waitingpage_2($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('verification_type_code_here');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_waitingpage_3($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('verification_edit');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_waitingpage_4($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('verification_verify_btn');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_waitingpage_5($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('verification_go_back_btn');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_waitingpage_6($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('verification_go_resend_msg');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_waitingpage_7($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('verification_go_resend_btn');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_community_user_settings_0($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('community_user_settings_admin_tab');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_community_user_settings_1($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('community_user_settings_language_tab');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_community_user_settings_2($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('community_user_settings_notification_tab');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_community_user_settings_3($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('community_user_settings_preferences_tab');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_community_user_settings_4($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('community_user_settings_privacy_tab');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_community_user_settings_5($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('community_user_settings_ads_tab');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_community_user_settings_6($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('community_user_settings_activated_users');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_community_user_settings_7($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('community_user_settings_notactivated_users');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_community_user_settings_8($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('community_user_settings_suspended_users');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_community_user_settings_9($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('community_user_settings_names');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_community_user_settings_10($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('community_user_settings_position');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_community_user_settings_11($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('community_user_settings_levelofpriviledge');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_community_user_settings_12($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('community_user_settings_startdate');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_community_user_settings_13($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('community_user_settings_emailaddress');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_community_user_settings_14($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('community_user_settings_level');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_community_user_settings_15($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('community_user_settings_suspend_user');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_community_user_settings_16($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('community_user_settings_activate_user');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_community_user_settings_17($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('community_user_settings_reactivate_user');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_community_user_settings_18($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('community_user_settings_newmsgscoming');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_community_user_settings_19($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('community_user_settings_copy_mail');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_community_user_settings_20($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('community_user_settings_all_notification');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_community_user_settings_21($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('community_user_settings_noti_on_my_nber');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_community_user_settings_22($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('community_user_stay_loggedin');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_community_user_settings_23($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('community_user_receive_mail_updates');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_community_user_settings_24($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('community_user_stay_tag_title');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_community_user_settings_25($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('community_user_stay_tag_title_1');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_community_user_settings_26($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('community_user_stay_tag_identifier_field');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_community_user_settings_27($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('community_user_stay_tag_identifier_btn_new');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_community_user_settings_28($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('community_user_stay_tag_identifier_save_changes_btn');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_community_user_settings_29($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('community_user_stay_tag_identifier_Delete_btn');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_community_user_settings_30($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('community_user_stay_tag_keywords');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_community_user_settings_31($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('community_user_stay_tag_newkeywordhere');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_community_user_settings_32($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('community_user_stay_tag_createnewkeyword');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_community_user_settings_33($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('community_user_stay_tag_save_changes');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_community_user_settings_34($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('community_user_stay_tag_delete');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_community_user_settings_35($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('community_user_privacy_whenimasugges');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_community_user_settings_36($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('community_user_privacy_letallmydet');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_community_user_settings_37($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('community_user_privacy_onlyuserLo');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_community_user_settings_38($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('community_user_privacy_onlyuser');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_community_user_settings_39($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('community_user_privacy_posts');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_community_user_settings_40($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('community_user_privacy_myusrnameappear');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_community_user_settings_41($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('community_user_privacy_useothernameappear');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_community_user_settings_42($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('community_user_privacy_useothernameappear_placehold');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_community_user_settings_43($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('community_user_privacy_save_new_name');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_community_user_settings_44($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('community_user_privacy_sendingQtoGvt');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_community_user_settings_45($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('community_user_privacy_AllMyDseen');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_community_user_settings_46($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('community_user_privacy_OMyUsername');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_community_user_settings_47($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('community_user_privacy_User_loc');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_community_user_settings_48($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('community_user_privacy_manageAds');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_community_user_settings_49($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('community_user_privacy_myAds');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_community_user_settings_50($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('community_user_privacy_myPaidAdverts');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_community_user_settings_51($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('community_user_privacy_startdate');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_community_user_settings_52($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('community_user_privacy_finishdate');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_community_user_settings_53($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('community_user_privacy_starttime');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_community_user_settings_54($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('community_user_privacy_finishtime');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_community_user_settings_55($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('community_user_privacy_name');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_community_user_settings_56($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('community_user_privacy_reach');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_community_user_settings_57($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('community_user_privacy_price');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_community_user_settings_58($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('community_user_create_your_own_advert');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_institution_user_settings_0($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('institution_user_settings_admin');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_institution_user_settings_1($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('institution_user_settings_language');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_institution_user_settings_2($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('institution_user_settings_notification');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_institution_user_settings_3($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('institution_user_settings_preferences');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_institution_user_settings_4($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('institution_user_settings_privacy');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_institution_user_settings_5($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('institution_user_settings_ads');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_institution_user_settings_6($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('institution_user_settings_activated_users');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_institution_user_settings_7($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('institution_user_settings_not_activated_users');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_institution_user_settings_8($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('institution_user_settings_suspended_users');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_institution_user_settings_9($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('institution_user_settings_names');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_institution_user_settings_10($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('institution_user_settings_position');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_institution_user_settings_11($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('institution_user_settings_levelOfPriviledge');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_institution_user_settings_12($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('institution_user_settings_startdate');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_institution_user_settings_13($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('institution_user_settings_email_address');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_institution_user_settings_14($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('institution_user_settings_level5');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_institution_user_settings_15($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('institution_user_settings_level4');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_institution_user_settings_16($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('institution_user_settings_level3');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_institution_user_settings_17($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('institution_user_settings_level2');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_institution_user_settings_18($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('institution_user_settings_level1');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_institution_user_settings_19($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('institution_user_settings_level0');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_institution_user_settings_20($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('institution_user_settings_suspend_user');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_institution_user_settings_21($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('institution_user_settings_activate_user');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_institution_user_settings_22($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('institution_user_settings_reactivate_user');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_institution_user_settings_23($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('institution_user_settings_newmessagescoming');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_institution_user_settings_24($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('institution_user_settings_copymailaddress');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_institution_user_settings_25($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('institution_user_settings_allnotifications');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_institution_user_settings_26($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('institution_user_settings_sendNotToMynber');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_institution_user_settings_27($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('institution_user_settings_sendNotToMynber');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_institution_user_settings_28($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('institution_user_settings_stayloggedin');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_institution_user_settings_29($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('institution_user_settings_receiveemailupdates');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_institution_user_settings_30($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('institution_user_settings_tags_special_keywords');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_institution_user_settings_31($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('institution_user_settings_tags_identifier');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_institution_user_settings_32($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('institution_user_settings_tags_identifier_placeholder');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_institution_user_settings_33($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('institution_user_settings_tags_new_tag_identifier_placeholder');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_institution_user_settings_34($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('institution_user_settings_tags_save_changes');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_institution_user_settings_35($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('institution_user_settings_tags_delete');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_institution_user_settings_36($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('institution_user_settings_tags_keywords');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_institution_user_settings_37($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('institution_user_settings_tags_new_keyword');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_institution_user_settings_38($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('institution_user_settings_tags_new_keyword_btn');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_institution_user_settings_39($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('institution_user_settings_tags_save_changes_btn');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_institution_user_settings_40($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('institution_user_settings_tags_delete_btn');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_institution_user_settings_41($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('institution_user_settings_privacy_posts_title');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_institution_user_settings_42($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('institution_user_settings_privacy_showUsername');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_institution_user_settings_43($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('institution_user_settings_privacy_showOtherUsername');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_institution_user_settings_44($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('institution_user_settings_privacy_showOtherUsername_placeH');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_institution_user_settings_45($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('institution_user_settings_privacy_showOtherUsername_SaveNewName');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_institution_user_settings_46($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('institution_user_settings_privacy_manageAds');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_institution_user_settings_47($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('institution_user_settings_privacy_myAds');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_institution_user_settings_48($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('institution_user_settings_privacy_mypaidAdverts');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_institution_user_settings_49($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('institution_user_settings_privacy_startdate');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_institution_user_settings_50($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('institution_user_settings_privacy_finishdate');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_institution_user_settings_51($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('institution_user_settings_privacy_starttime');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_institution_user_settings_52($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('institution_user_settings_privacy_finishtime');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_institution_user_settings_53($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('institution_user_settings_privacy_name');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_institution_user_settings_54($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('institution_user_settings_privacy_reach');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_institution_user_settings_55($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('institution_user_settings_privacy_price');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_official_user_settings_0($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('official_user_settings_admin');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_official_user_settings_1($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('official_user_settings_language');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_official_user_settings_2($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('official_user_settings_notification');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_official_user_settings_3($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('official_user_settings_preferences');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_official_user_settings_4($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('official_user_settings_privacy');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_official_user_settings_5($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('official_user_settings_ads');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_official_user_settings_6($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('official_user_settings_activated_users');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_official_user_settings_7($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('official_user_settings_not_activated_users');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_official_user_settings_8($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('official_user_settings_suspended_users');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_official_user_settings_9($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('official_user_settings_names');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_official_user_settings_10($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('official_user_settings_position');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_official_user_settings_11($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('official_user_settings_levelofpriviledge');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_official_user_settings_12($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('official_user_settings_startdate');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_official_user_settings_13($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('official_user_settings_emailaddress');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_official_user_settings_14($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('official_user_settings_suspend_user');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_official_user_settings_15($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('official_user_settings_activate_user');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_official_user_settings_16($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('official_user_settings_reactivate_user');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_official_user_settings_17($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('official_user_settings_notification_newmessagescoming');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_official_user_settings_18($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('official_user_settings_notification_copymymail');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_official_user_settings_19($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('official_user_settings_notification_allnotifications');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_official_user_settings_20($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('official_user_settings_notification_notifications_to_my_nber');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_official_user_settings_21($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('official_user_settings_preferences_stayloggedin');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_official_user_settings_22($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('official_user_settings_preferences_receive_email_updates');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_official_user_settings_23($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('official_user_settings_preferences_tags_special_keywords');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_official_user_settings_24($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('official_user_settings_preferences_tags_identifier');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_official_user_settings_25($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('official_user_settings_preferences_tags_identifier_placeholder');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_official_user_settings_26($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('official_user_settings_preferences_tags_identifier_btn');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_official_user_settings_27($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('official_user_settings_preferences_tags_identifier_btn_save_changes');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_official_user_settings_28($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('official_user_settings_preferences_tags_identifier_btn_delete');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_official_user_settings_29($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('official_user_settings_preferences_tags_keywords');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_official_user_settings_30($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('official_user_settings_preferences_tags_keywords_new_keyword_here');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_official_user_settings_31($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('official_user_settings_preferences_tags_keywords_new_keyword_here_create');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_official_user_settings_32($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('official_user_settings_preferences_tags_keywords_savechanges');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_official_user_settings_33($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('official_user_settings_preferences_tags_keywords_delete');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_official_user_settings_34($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('official_user_settings_privacy_forward_a_query');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_official_user_settings_35($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('official_user_settings_privacy_all_details');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_official_user_settings_36($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('official_user_settings_privacy_detailsOfInst');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_official_user_settings_37($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('official_user_settings_privacy_detailsOfInst_pos');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_official_user_settings_38($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('official_user_settings_privacy_posts_title');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_official_user_settings_39($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('official_user_settings_privacy_posts_UsrnAppear');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_official_user_settings_40($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('official_user_settings_privacy_posts_UsrOthNTitle');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_official_user_settings_41($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('official_user_settings_privacy_posts_UsrOthNTitle_placeholder');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_official_user_settings_42($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('official_user_settings_privacy_posts_UsrOthNTitle_save_new_name');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_official_user_settings_43($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('official_user_settings_privacy_manageAds');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_official_user_settings_44($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('official_user_settings_privacy_myAds');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_official_user_settings_45($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('official_user_settings_privacy_paid_adverts');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_official_user_settings_46($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('official_user_settings_advertStartDate');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_official_user_settings_47($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('official_user_settings_advertFinishDate');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_official_user_settings_48($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('official_user_settings_advertStartTime');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_official_user_settings_49($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('official_user_settings_advertFinishTime');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_official_user_settings_50($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('official_user_settings_advertName');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_official_user_settings_51($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('official_user_settings_advertReach');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_official_user_settings_52($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('official_user_settings_advertPrice');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_official_user_settings_53($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('official_user_settings_privacy_myAds_createNew');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_0($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_notification_title');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_1($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_notification_no_message');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_2($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_message');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_3($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_message_no_message');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_4($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_message_sent_to');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_5($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_queries_issued_title');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_6($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_suggestion_box_title');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_7($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_ascending_order_of_dates');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_8($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_descending_order_of_dates');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_9($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_by_name');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_10($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_by_keyword');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_11($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_by_gender');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_12($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_by_male');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_13($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_by_female');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_14($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_by_marital_status');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_15($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_by_marital_status_single');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_16($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_by_marital_status_married');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_17($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_by_marital_status_divorced');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_18($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_by_marital_status_widow');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_19($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_by_marital_status_widower');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_20($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_sort_btn');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_21($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_sort_by_category');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_22($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_sort_by_category_all');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_23($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_sort_by_category_mutuelle');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_24($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_sort_by_category_girinka');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_25($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_sort_by_category_umurenge_sacco');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_26($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_sort_by_category_vup');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_27($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_sort_by_category_vup_ibi');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_28($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_sort_by_category_sort_btn');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_29($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_sort_by_progress');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_30($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_sort_by_progress_unresolved');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_31($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_sort_by_progress_resolved');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_32($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_sort_by_progress_pending');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_33($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_sort_by_progress_unsatisfied');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_34($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_sort_by_progress_in_progress');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_35($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_sort_by_progress_unread');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_36($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_sort_by_progress_replied_to');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_37($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_sort_by_progress_sort_btn');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_38($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_sort_sorting_by_date_range');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_39($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_sort_sorting_by_date_range_from');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_40($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_sort_sorting_by_date_range_first_date');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_41($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_sort_sorting_by_date_range_to');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_42($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_sort_sorting_by_date_range_last_date');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_43($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_sort_sorting_by_date_range_sort_in_ascending_order');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_44($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_sort_sorting_by_date_range_sort_in_descending_order');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_45($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_category');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_46($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_reply');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_47($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_forward_as');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_48($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_delegation');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_49($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_consultation');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_50($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_community_ascending_order_of_dates');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_51($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_community_descending_order_of_dates');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_52($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_community_byname');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_53($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_community_bykeyword');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_54($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_community_bygender');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_55($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_community_bymale');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_56($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_community_byfemale');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_57($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_community_by_marital_status');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_58($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_community_by_marital_status_single');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_59($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_community_by_marital_status_married');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_60($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_community_by_marital_status_divorced');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_61($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_community_by_marital_status_widow');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_62($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_community_by_marital_status_widower');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_63($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_community_by_marital_status_sort_btn');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_64($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_community_by_media_type');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_65($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_community_by_media_type_all');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_66($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_community_by_media_type_text');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_67($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_community_by_media_type_audio');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_68($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_community_by_media_type_video');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_69($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_community_by_media_type_sort_btn');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_70($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_community_sort_by_date_range');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_71($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_community_sort_by_date_range_from');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_72($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_community_sort_by_date_range_first_date');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_73($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_community_sort_by_date_range_to');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_74($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_community_sort_by_date_range_last_date');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_75($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_community_sort_by_date_range_sort_in_ascending_order');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_76($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_community_sort_by_date_range_sort_in_descending_order');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_77($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_community_image');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_78($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_community_text');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_79($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_community_video');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_80($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_community_audio');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_81($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_community_forum');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_82($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_community_forum_all');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_83($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_community_forum_latest');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_84($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_community_forum_where_i_am_tagged');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_85($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_community_forum_trending');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_86($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_community_forum_ourposts');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_87($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_community_forum_search_here');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_88($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_community_forum_share_your_opinion');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_89($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_community_forum_position');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_90($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_community_forum_views');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_91($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_community_forum_likes');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_92($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_community_forum_unlikes');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_rgb_93($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_community_forum_comment');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_0($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_notification_title');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_1($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_notification_no_notification');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_2($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_notification_message_title');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_3($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_notification_message_no_message');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_4($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_notification_sent_to');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_5($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_suggestion_box_panel');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_6($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_suggestion_box_panel_sort_ascending_of_dates');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_7($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_suggestion_box_panel_sort_descending_of_dates');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_8($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_suggestion_box_panel_sort_byname');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_9($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_suggestion_box_panel_sort_bykeyword');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_10($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_suggestion_box_panel_sort_bygender');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_11($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_suggestion_box_panel_sort_bymale');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_12($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_suggestion_box_panel_sort_byfemale');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_13($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_suggestion_box_panel_sort_marital_status');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_14($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_suggestion_box_panel_sort_marital_status_single');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_15($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_suggestion_box_panel_sort_marital_status_married');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_16($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_suggestion_box_panel_sort_marital_status_divorced');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_17($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_suggestion_box_panel_sort_marital_status_widow');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_18($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_suggestion_box_panel_sort_marital_status_widower');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_19($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_suggestion_box_panel_sort_marital_status_sort_btn');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_20($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_suggestion_box_panel_sort_media_type');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_21($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_suggestion_box_panel_sort_media_type_all');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_22($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_suggestion_box_panel_sort_media_type_text');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_23($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_suggestion_box_panel_sort_media_type_audio');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_24($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_suggestion_box_panel_sort_media_type_video');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_25($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_suggestion_box_panel_sort_media_type_sort_btn');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_26($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_suggestion_box_panel_sort_date_range');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_27($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_suggestion_box_panel_sort_date_range_from');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_28($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_suggestion_box_panel_sort_date_range_first_date');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_29($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_suggestion_box_panel_sort_date_range_to');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_30($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_suggestion_box_panel_sort_date_range_last_date');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_31($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_suggestion_box_panel_sort_date_range_sort_ascending');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_32($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_suggestion_box_panel_sort_date_range_sort_descending');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_33($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_suggestion_box_panel_image');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_34($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_suggestion_box_panel_text');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_35($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_suggestion_box_panel_video');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_36($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_suggestion_box_panel_audio');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_37($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_suggestion_box_forum');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_38($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_suggestion_box_forum_all');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_39($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_suggestion_box_forum_latest');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_40($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_suggestion_box_forum_whereiam_tagged');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_41($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_suggestion_box_forum_trending');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_42($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_suggestion_box_forum_ourposts');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_43($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_suggestion_box_forum_searchhere');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_44($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_suggestion_box_forum_share_with_community');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_45($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_suggestion_box_forum_position');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_46($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_suggestion_box_forum_views');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_47($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_suggestion_box_forum_likes');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_48($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_suggestion_box_forum_unlikes');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_49($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_suggestion_box_forum_comments');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_50($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_suggestion_box_forum_footer');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_institution_51($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_suggestion_box_forum_your_comment');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_0($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_notification_title');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_1($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_notification_no_notification');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_2($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_notification_notification_likes');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_3($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_notification_notification_dislikes');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_4($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_notification_notification_comment');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_5($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_notification_message_title');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_6($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_notification_message_no_message');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_7($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_notification_message_sent_to');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_8($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_notification_message_sent_replies');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_9($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_notification_message_sent_follow_up');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_10($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_notification_message_sent_finalize');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_11($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_notification_message_inform_check');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_12($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_notification_message_inform_check_resolved');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_13($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_notification_message_inform_check_resolved_1');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_14($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_notification_message_inform_check_resolved_2');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_15($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_notification_message_inform_check_resolved_other');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_16($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_notification_message_inform_check_resolved_typehere');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_17($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_notification_message_inform_check_resolved_ok');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_18($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_notification_message_inform_check_resolved_cancel');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_19($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_notification_message_inform_check_question_viewed');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_20($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_notification_message_inform_check_question_viewed_1');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_21($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_notification_message_inform_check_question_sent_by');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_22($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_forum_all');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_23($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_forum_latest');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_24($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_forum_whereiamtagged');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_25($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_forum_trending');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_26($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_forum_myposts');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_27($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_forum_search');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_28($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_forum_your_su_community');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_29($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_forum_your_su_commun_send');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_30($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_forum_your_su_commun_position');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_31($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_forum_views');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_32($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_forum_likes');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_33($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_forum_unlikes');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_34($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_forum_comments');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_35($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_forum_comments_your_comment');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_36($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_forum_suggestion_panel');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_37($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_forum_suggestion_panel_thank_you');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_38($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_forum_suggestion_panel_your_question_here');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_39($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_forum_suggestion_panel_your_question_here_send');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_40($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_forum_suggestion_panel_your_question_here_cancel');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_41($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_forum_suggestion_panel_title__');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_42($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_forum_suggestion_panel_send_brief_explain');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_43($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_forum_suggestion_panel_send_brief_send_a_text');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_44($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_forum_suggestion_panel_send_brief_send_a_picture');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_45($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_forum_suggestion_panel_send_brief_send_an_audio');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_46($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_forum_suggestion_panel_send_brief_send_a_video');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_47($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_forum_suggestion_panel_send_brief_thanks');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_48($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_forum_suggestion_panel_send_search_company');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_49($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_forum_suggestion_panel_send_View_all');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_50($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_forum_suggestion_panel_send_your_question');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_51($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_forum_suggestion_panel_send_txt');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_52($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_forum_suggestion_panel_cancel_txt');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_53($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_forum_suggestion_panel_cancel_txt');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_54($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_forum_suggestion_panel_choose_image_from_device');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_55($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_forum_suggestion_panel_your_caption');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_56($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_forum_suggestion_panel_choose_audio_from_device');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_main_page_57($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_forum_suggestion_panel_choose_video_from_device');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_profile_page_institution_0($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('profile_page_institution_your_account');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_profile_page_institution_1($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('profile_page_institution_institution');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_profile_page_institution_2($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('profile_page_institution_website');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_profile_page_institution_3($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('profile_page_institution_info_email');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_profile_page_institution_4($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('profile_page_institution_mail_add_1');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_profile_page_institution_5($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('profile_page_institution_province');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_profile_page_institution_6($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('profile_page_institution_district');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_profile_page_institution_7($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('profile_page_institution_sector');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_profile_page_institution_8($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('profile_page_institution_motto');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_profile_page_institution_9($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('profile_page_institution_username');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_profile_page_institution_10($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('profile_page_institution_change_password');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_profile_page_institution_11($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('profile_page_institution_save_changes');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_profile_page_institution_12($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('profile_page_institution_continue');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_profile_page_officials_0($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('profile_page_officials_your_account');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_profile_page_officials_1($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('profile_page_officials_firstname');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_profile_page_officials_2($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('profile_page_officials_lastname');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_profile_page_officials_3($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('profile_page_officials_first_name_here');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_profile_page_officials_4($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('profile_page_officials_last_name_here');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_profile_page_officials_5($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('profile_page_officials_gender_title');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_profile_page_officials_6($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('profile_page_officials_gender_male');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_profile_page_officials_7($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('profile_page_officials_gender_female');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_profile_page_officials_8($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('profile_page_officials_marital_status');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_profile_page_officials_9($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('profile_page_officials_marital_status_single');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_profile_page_officials_10($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('profile_page_officials_marital_status_married');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_profile_page_officials_11($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('profile_page_officials_marital_status_divorced');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_profile_page_officials_12($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('profile_page_officials_marital_status_widow');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_profile_page_officials_13($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('profile_page_officials_marital_status_widower');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_profile_page_officials_14($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('profile_page_officials_institution');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_profile_page_officials_15($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('profile_page_officials_department');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_profile_page_officials_16($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('profile_page_officials_position');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_profile_page_officials_17($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('profile_page_officials_province');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_profile_page_officials_18($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('profile_page_officials_district');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_profile_page_officials_19($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('profile_page_officials_sector');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_profile_page_officials_20($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('profile_page_officials_work_phone');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_profile_page_officials_21($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('profile_page_officials_company_address_mail');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_profile_page_officials_22($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('profile_page_officials_change_password');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_profile_page_officials_23($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('profile_page_officials_save_changes');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_profile_page_officials_24($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('profile_page_officials_save_changes_continue');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_profile_page_0($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('profile_page_your_account');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_profile_page_1($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('profile_page_first_name');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_profile_page_2($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('profile_page_last_name');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_profile_page_3($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('profile_page_first_name_here');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_profile_page_4($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('profile_page_last_name_here');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_profile_page_5($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('profile_page_gender');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_profile_page_6($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('profile_page_male');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_profile_page_7($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('profile_page_female');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_profile_page_8($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('profile_page_email_add');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_profile_page_9($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('profile_page_username');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_profile_page_10($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('profile_page_email_add_here');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_profile_page_11($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('profile_page_username_add_here');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_profile_page_12($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('profile_page_change_password');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_profile_page_13($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('profile_page_birthdate');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_profile_page_14($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('profile_page_marital_status');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_profile_page_15($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('profile_page_marital_status_single');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_profile_page_16($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('profile_page_marital_status_married');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_profile_page_17($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('profile_page_marital_status_divorced');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_profile_page_18($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('profile_page_marital_status_widow');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_profile_page_19($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('profile_page_marital_status_widower');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_profile_page_20($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('profile_page_profession');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_profile_page_21($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('profile_page_tel_no');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_profile_page_22($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('profile_page_address');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_profile_page_23($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('profile_page_save_changes');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_profile_page_24($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('profile_page_continue');
        return $GeneralSettings;
    }

    public static function getGeneralSettings_media_image($filename) {
        $dom = new DOMDocument();
        $dom->load($filename) or die("Error: Cannot create object");
        $root = $dom->documentElement;
        $nodesToDelete = array();
        $GeneralSettings = $root->getElementsByTagName('main_page_institution_rgb_community_by_media_type_img');
        return $GeneralSettings;
    }

}
