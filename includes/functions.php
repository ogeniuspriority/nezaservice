<?php

// redirecting to a page
function redirect_to($page = NULL) {
    if (page != NULL) {
        header("location:$page");
        exit;
    }
}

// outping massege
function massage($massege = " ") {
    if (!empty($massege)) {
        echo "<p class=\"massege\">{$massege}</p>";
    }
}

//autoload
function __autoload($class_name) {
    $name = strtolower($class_name);
    $path = "includes/{$name}.php";
    if (file_exists($path)) {
        require_once ($path);
    } else
        die("File {$class_name} could not be found");
}

function activateUrlStringsw($str) {
    $find = array('`((?:https?|ftp)://\S+[[:alnum:]]/?)`si', '`((?<!//)(www\.\S+[[:alnum:]]/?))`si');
    $replace = array('<a style=\"clear:both;font-size:14px;color:#00008B;text-decoration:none;text-shadow:2px 2px 2px yellow\" class\"myLinkos\" href="$1" target="_blank">$1</a>', '<a class\"myLinkos\" style=\"clear:both;font-size:14px;color:#00008B;text-decoration:none;text-shadow:2px 2px 2px yellow\" href="http://$1" target="_blank">$1</a>');
    return preg_replace($find, $replace, $str);
}

function locateFileInString($str) {

    $find = '/.[^.]*$/';
    $matches = array();
    $found = preg_match_all($find, $str, $matches);
    //$replace = "<span style='color:yellow'><img  src='../uploaded_images/amakuru49821738hub6853.jpg' style='max-width:100%;max-height:100%'  /></span>";
    $replace = "sfsfsf";

    $better = preg_replace('/<.*?>/', '!', 'do <b>not</b> press the button');
    return preg_replace($find, $replace, $str);
    //return $str;
}

//--------------------
function formatImagesInText($text) {
    // //------www. links only
    // $text = @eregi_replace('(^| )(www([-]*[.]?[a-zA-Z0-9_/-?&%])*/)', ' <a  class=\"specialLink\" width=\"180\" target=\"_blank()"  style="text-decoration:none;color:green;font-size:11px;" href="http://\\2">\\2</a>', $text);
    //
    // //----mail link
    // $text = @eregi_replace('[-a-z0-9!#$%&\'*+/=?^_`{|}~]+@([.]?[a-zA-Z0-9_/-])*/', '<a class=\"specialLink\" style="text-decoration:none;color:skyblue;font-size:11px;" target=\"_blank()\" href="mailto:\\0">\\1</a>', $text);
    // //----browser links
    // $text = preg_replace('!(http|ftp|scp)(s)?:\/\/[a-zA-Z0-9.?%=&_/]+!', '<a class=\"specialLink\" width=\"180\" target=\"_blank()\" onmouseover="" style="text-decoration:none;color:green;font-size:11px;" href="\\0">\\0</a>', $text);
    //
    //$text = ucfirst(activateUrlStringsw($text));
    $db_file_name = basename($text);
    $ext = explode(".", $db_file_name);
    $fileExt = strtoupper(end($ext));
    if ($fileExt == "JPEG" || $fileExt == "JPG" || $fileExt == "JFIF" || $fileExt == "JPEG 2000" || $fileExt == "EXIF" || $fileExt == "TIFF" || $fileExt == "RIF" || $fileExt == "GIF" || $fileExt == "BMP" || $fileExt == "PNG" || $fileExt == "PPM" || $fileExt == "PGM" || $fileExt == "PBM" || $fileExt == "PNM" || $fileExt == "WEBP" || $fileExt == "HDR raster formats" || $fileExt == "BPG" || $fileExt == "SVG" || $fileExt == "CGM" || $fileExt == "SVG" || $fileExt == "CGM" || $fileExt == "JPG") {
        $text = "<span><img class='myImageHu' style='border-radius:2px;cursor:hand;' onclick='largeMe(this)' src='nds_community_posts_images/" . $db_file_name . "' style='width:40px;height:40px;max-width:40px;max-height:40px;' /></span>";
        return $text;
        exit;
    } else if ($fileExt == "TXT" || $fileExt == "PDF" || $fileExt == "PPT" || $fileExt == "CSV" || $fileExt == "DOC" || $fileExt == "DOCX" || $fileExt == "RTF" || $fileExt == "XLSX" || $fileExt == "XLSB" || $fileExt == "XLSB") {
        $text = "<label style='font-size:11px;'>Click to view <span style='color:gold;background-color:black;'> {$fileExt}</span> file <label><br><img style='border-radius:2px;' id='{$fileExt}' onclick='largeMe(this)' src='datingProfileImage/" . "file_image.png" . "' width='40' height='40' />";
        return $text;
        exit;
    }
    return $text;
}

function formatImagesInText_withCaption($text, $TheCaption) {
    // //------www. links only
    // $text = @eregi_replace('(^| )(www([-]*[.]?[a-zA-Z0-9_/-?&%])*/)', ' <a  class=\"specialLink\" width=\"180\" target=\"_blank()"  style="text-decoration:none;color:green;font-size:11px;" href="http://\\2">\\2</a>', $text);
    //
    // //----mail link
    // $text = @eregi_replace('[-a-z0-9!#$%&\'*+/=?^_`{|}~]+@([.]?[a-zA-Z0-9_/-])*/', '<a class=\"specialLink\" style="text-decoration:none;color:skyblue;font-size:11px;" target=\"_blank()\" href="mailto:\\0">\\1</a>', $text);
    // //----browser links
    // $text = preg_replace('!(http|ftp|scp)(s)?:\/\/[a-zA-Z0-9.?%=&_/]+!', '<a class=\"specialLink\" width=\"180\" target=\"_blank()\" onmouseover="" style="text-decoration:none;color:green;font-size:11px;" href="\\0">\\0</a>', $text);
    //
    //$text = ucfirst(activateUrlStringsw($text));
    $capti_ = activateUrlStringsw($TheCaption);
    $db_file_name = basename($text);
    $ext = explode(".", $db_file_name);
    $fileExt = strtoupper(end($ext));
    if ($fileExt == "JPEG" || $fileExt == "JPG" || $fileExt == "JFIF" || $fileExt == "JPEG 2000" || $fileExt == "EXIF" || $fileExt == "TIFF" || $fileExt == "RIF" || $fileExt == "GIF" || $fileExt == "BMP" || $fileExt == "PNG" || $fileExt == "PPM" || $fileExt == "PGM" || $fileExt == "PBM" || $fileExt == "PNM" || $fileExt == "WEBP" || $fileExt == "HDR raster formats" || $fileExt == "BPG" || $fileExt == "SVG" || $fileExt == "CGM" || $fileExt == "SVG" || $fileExt == "CGM" || $fileExt == "JPG") {
        $text = "<div class='' style='background:#333333'><img class='' style='border-radius:2px;cursor:pointer;height:auto; width:100%' src='nds_community_posts_images/" . $db_file_name . "' style='' /></div>
       <div style='width:100%;background:rgba(10,10,10,0.9);color:white;text-shadow:2px 2px 2px black;padding:5px'>$capti_</div>
        ";
        return $text;
        exit;
    } else if ($fileExt == "TXT" || $fileExt == "PDF" || $fileExt == "PPT" || $fileExt == "CSV" || $fileExt == "DOC" || $fileExt == "DOCX" || $fileExt == "RTF" || $fileExt == "XLSX" || $fileExt == "XLSB" || $fileExt == "XLSB") {
        $text = "<label style='font-size:11px;'>Click to view <span style='color:gold;background-color:black;'> {$fileExt}</span> file <label><br><img style='border-radius:2px;' id='{$fileExt}' onclick='largeMe(this)' src='datingProfileImage/" . "file_image.png" . "' width='40' height='40' />";
        return $text;
        exit;
    } else {
        $text = "<p style='word-break: break-all;'>$text</p>";
        return $text;
    }
}

//---------------------replace the alike word with something good------
function renderMeWithTagStyle($toRender, $toPattern, $repla) {
    //------------Don't forget to delimit-----w+
    $pattern = '/' . $toPattern . '(\w+)/';
    //$pattern = '/[*' . $toPattern . '(.+?)+$]/';
    //$pattern = '/[*' . $toPattern . '(.+?)$]/';
    //preg_match($pattern, $toRender, $matches);
    $matches = array();
    preg_match_all($pattern, $toRender, $matches);
    //---------------
    $temp = '';
    foreach ($matches as $match) {
        //echo $match;
        //$regex = '~(:\w+)~';
        if ($temp != $match[0]) {
            $toRender = str_replace($match[0], "<strong style='box-shadow:2px 2px 2px #cdcdcd;border-top:1px solid gray;border-left:1px solid gray;color:blue;text-shadow:2px 2px 2px #cdcdcd;background:transparent;'>" . $match[0] . "</strong>", $toRender);
        } else {
            continue;
        }
        $temp = $match[0];
    }
    //$toRender=str_replace($repla,"<span style='box-shadow:2px 2px 2px #cdcdcd;border-top:1px solid gray;border-left:1px solid gray;color:blue;text-shadow:2px 2px 2px #cdcdcd;background:transparent;'>".$repla."</span>",$toRender);

    return $toRender;
}

//----A function to check the posts' name privacy--
function checkMyPostingPrivacyStatus($theId, $theNormalUsername) {
    require_once ("conn/config.php");
    require_once ("classes/database.php");
    //--------------------
    $database = new mysqldatabase();
    $post_privacy_counter = 0;
    $sql_privacy_posts = "SELECT * FROM  ogenius_nds_db_privacy_posts_records  WHERE ogenius_nds_db_privacy_posts_records_user_id='{$theId}' ORDER BY   ogenius_nds_db_privacy_posts_records_id DESC LIMIT 1";
    if ($query_privacy_posts = $database->query($sql_privacy_posts)) {
        //---------------------
        while ($res_privacy_posts = mysqli_fetch_array($query_privacy_posts)) {
            $_privacy_posts_set_id = $res_privacy_posts['ogenius_nds_db_privacy_posts_records_id'];
            $_privacy_posts_set_txt_descr_1 = $res_privacy_posts['ogenius_nds_db_privacy_posts_records_username_appear'];
            $_privacy_posts_set_txt_descr_2 = $res_privacy_posts['ogenius_nds_db_privacy_posts_records_use_another_name'];
            //--identify the posts algorithm--
            if ($_privacy_posts_set_txt_descr_1 == 1) {
                return $theNormalUsername;
            } else {
                return $_privacy_posts_set_txt_descr_2;
            }
            $post_privacy_counter++;
        }
        //------------------
        if ($post_privacy_counter == 0) {
            return $theNormalUsername;
        }
    }
}

//-----------------check my suggestion privacy status--
function checkMySuggestToInstitutionPrivacyStatus($theId) {
    require_once ("conn/config.php");
    require_once ("classes/database.php");
    //--------------------
    $database = new mysqldatabase();
    $post_privacy_counter = 0;
    $suggest_privacy_msg_handler = "";
    $sql_privacy_posts = "SELECT * FROM  ogenius_nds_db_privacy_suggest_records  WHERE ogenius_nds_db_privacy_suggest_records_user_id='{$theId}' ORDER BY   ogenius_nds_db_privacy_suggest_records_id DESC LIMIT 1";
    if ($query_privacy_posts = $database->query($sql_privacy_posts)) {
        //---------------------
        while ($res_privacy_posts = mysqli_fetch_array($query_privacy_posts)) {
            // $_privacy_posts_set_id = $res_privacy_posts['ogenius_nds_db_privacy_posts_records_id'];
            $_privacy_posts_set_txt_descr_1 = $res_privacy_posts['ogenius_nds_db_privacy_suggest_records_only_username'];
            $_privacy_posts_set_txt_descr_2 = $res_privacy_posts['ogenius_nds_db_privacy_suggest_records_username_and_location'];
            $_privacy_posts_set_txt_descr_3 = $res_privacy_posts['ogenius_nds_db_privacy_suggest_records_let_all_my_details_avail'];
            //--identify the posts algorithm--
            if ($_privacy_posts_set_txt_descr_1 == 1) {
                $suggest_privacy_msg_handler = "all_the_details";
            } else if ($_privacy_posts_set_txt_descr_2 == 1) {
                $suggest_privacy_msg_handler = "only_username_and_location";
            } else if ($_privacy_posts_set_txt_descr_3 == 1) {
                $suggest_privacy_msg_handler = "only_username";
            }
            $post_privacy_counter++;
        }
        //------------------
        if ($post_privacy_counter == 0) {
            $suggest_privacy_msg_handler = "all_the_details";
        }
    }
    return $suggest_privacy_msg_handler;
}

function renderTheSuggestionsAccordingToGenderOfSender($theSuggestSenderId, $genderForm) {
    require_once ("conn/config.php");
    require_once ("classes/database.php");
    //--------------------
    $database = new mysqldatabase();
    $post_privacy_counter = 0;
    $suggest_privacy_msg_handler = "";
    $sql_privacy_posts = "SELECT * FROM  ogenius_nds_db_normal_users  WHERE ogenius_nds_db_normal_users_id='{$theSuggestSenderId}' ORDER BY   ogenius_nds_db_normal_users_id DESC LIMIT 1";
    if ($query_privacy_posts = $database->query($sql_privacy_posts)) {
        //---------------------
        while ($res_privacy_posts = mysqli_fetch_array($query_privacy_posts)) {
            if ($genderForm == $res_privacy_posts['ogenius_nds_db_normal_users_gender']) {
                return TRUE;
            } else {
                return FALSE;
            }
        }
        //------------------
    }
    return $suggest_privacy_msg_handler;
}

function renderTheSuggestionsAccordingToMaritalStatusOfSender($theSuggestSenderId, $maritalStatusForm) {
    require_once ("conn/config.php");
    require_once ("classes/database.php");
    //--------------------
    $database = new mysqldatabase();
    $post_privacy_counter = 0;
    $suggest_privacy_msg_handler = "";
    $sql_privacy_posts = "SELECT * FROM  ogenius_nds_db_normal_users  WHERE ogenius_nds_db_normal_users_id='{$theSuggestSenderId}' ORDER BY   ogenius_nds_db_normal_users_id DESC LIMIT 1";
    if ($query_privacy_posts = $database->query($sql_privacy_posts)) {
        //---------------------
        while ($res_privacy_posts = mysqli_fetch_array($query_privacy_posts)) {
            if ($maritalStatusForm == $res_privacy_posts['ogenius_nds_db_normal_users_marital_status']) {
                return TRUE;
            } else {
                return FALSE;
            }
        }
        //------------------
    }
    return $suggest_privacy_msg_handler;
}

//-------------------
function renderTheSuggestionBoxIdAsInstitutionOrOfficial($theUserId) {
    require_once ("conn/config.php");
    require_once ("classes/database.php");
    //--------------------
    $database = new mysqldatabase();
    $post_privacy_counter = 0;
    $suggest_privacy_msg_handler = "";
    $sql_privacy_posts = "SELECT * FROM  ogenius_nds_db_normal_users  WHERE ogenius_nds_db_normal_users_id='{$theUserId}' ORDER BY   ogenius_nds_db_normal_users_id DESC LIMIT 1";
    if ($query_privacy_posts = $database->query($sql_privacy_posts)) {
        //---------------------
        while ($res_privacy_posts = mysqli_fetch_array($query_privacy_posts)) {
            if ($res_privacy_posts['ogenius_nds_db_normal_users_user_vip_tag'] == 2) {
                //------------official--
                //---find the related---id of institution--
                $institution_name = $res_privacy_posts['ogenius_nds_db_normal_users_institution'];
                //$institution_name=addslashes($institution_name);
                //--------

                $sql_find_institution = "SELECT * FROM  ogenius_nds_db_normal_users  WHERE ogenius_nds_db_normal_users_institution LIKE \"%{$institution_name}%\" 
                AND  ogenius_nds_db_normal_users_user_vip_tag ='1'
                ORDER BY   ogenius_nds_db_normal_users_id DESC LIMIT 1";
                $theOtherId = 0;
                if ($query_find_institution = $database->query($sql_find_institution)) {
                    //---------------------
                    while ($res_find_institution = mysqli_fetch_array($query_find_institution)) {
                        $theOtherId = $res_find_institution['ogenius_nds_db_normal_users_id'];
                    }
                }
                // echo $theUserId."---".$institution_name."--".$theOtherId;

                return $theOtherId;
            } else if ($res_privacy_posts['ogenius_nds_db_normal_users_user_vip_tag'] == 1) {
                //----------institution
                return $theUserId;
            }
        }
        //------------------
    }
}

function renderTheSuggestionBoxIdAsInstitutionOrOfficial__($theUserId) {
    require_once ("conn/config.php");
    require_once ("classes/database.php");
    //--------------------
    $database = new mysqldatabase();
    $post_privacy_counter = 0;
    $suggest_privacy_msg_handler = "";
    $theBox_id = "";
    $theBox_insti_name = "";
    $sql_privacy_posts = "SELECT * FROM  ogenius_nds_db_normal_users  WHERE  	ogenius_nds_db_normal_users_id ='{$theUserId}' ORDER BY    ogenius_nds_db_normal_users_id DESC LIMIT 1";
    if ($query_privacy_posts = $database->query($sql_privacy_posts)) {
        //---------------------
        while ($res_Posts = mysqli_fetch_array($query_privacy_posts)) {
            $theBox_insti_name = $res_Posts['ogenius_nds_db_normal_users_institution'];
            $theBox_insti_name=  addslashes($theBox_insti_name);
        }
        //---------------------
        if ($theBox_insti_name != "") {
            $sql_privacy_posts = "SELECT * FROM  ogenius_nds_db_community  WHERE  	ogenius_nds_db_community_institution_name LIKE '%{$theBox_insti_name}%' ORDER BY    ogenius_nds_db_community_id DESC LIMIT 1";
            if ($query_privacy_posts = $database->query($sql_privacy_posts)) {
                //---------------------
                while ($res_Posts = mysqli_fetch_array($query_privacy_posts)) {
                    $theBox_insti_name = $res_Posts['ogenius_nds_db_community_id'];
                }
                
            }
        }

        //------------------
    }
    return $theBox_insti_name;
}

//-----------------Find the number of conversations unread for this query id---------
function returnNumberOfUnreadCommentsForthisQuery($queryIdHere, $orient, $myId) {
    require_once ("conn/config.php");
    require_once ("classes/database.php");
    //--------------------
    $database = new mysqldatabase();
    $g_var_look = 0;
    $sql_privacy_posts = "SELECT  * FROM  ogenius_nds_db_rgb_query_comment  WHERE ogenius_nds_db_rgb_query_comment_query_id='{$queryIdHere}'
    AND ogenius_nds_db_rgb_query_comment_read='0'
    AND     ogenius_nds_db_rgb_query_comment_active='0' 
    AND     ogenius_nds_db_rgb_query_comment_external_visibility='0'
     AND     ogenius_nds_db_rgb_query_comment_suggestOrQuestion='{$orient}'
     AND     ogenius_nds_db_rgb_query_comment_sender_id!='{$myId}' 
     ORDER BY   ogenius_nds_db_rgb_query_comment_id DESC";
    if ($query_privacy_posts = $database->query($sql_privacy_posts)) {
        //---------------------
        while ($res_Posts = mysqli_fetch_array($query_privacy_posts)) {
            $g_var_look++;
        }

        return $g_var_look;

        //------------------
    }
}

//-----------------Find the recipient of this suggestion---------
function renderTheRecipientOfThisSuggestion($theSuggestionBoxId) {
    require_once ("conn/config.php");
    require_once ("classes/database.php");
    //--------------------
    $database = new mysqldatabase();
    $g_var_look = "";
    $sql_privacy_posts = "SELECT * FROM  ogenius_nds_db_community
    LEFT JOIN ogenius_nds_db_normal_users ON
    ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id=ogenius_nds_db_community.ogenius_nds_db_community_parent_id
      WHERE    ogenius_nds_db_community_id='{$theSuggestionBoxId}'
    
     ORDER BY       ogenius_nds_db_community_id DESC";
    if ($query_privacy_posts = $database->query($sql_privacy_posts)) {
        //---------------------
        while ($res = mysqli_fetch_array($query_privacy_posts)) {
            return $res['ogenius_nds_db_normal_users_institution'];
        }

        //------------------
    }
}

//-----------------------------count how many replies------
function returnNumberCommentsForthisQuery($queryIdHere, $orient) {
    require_once ("conn/config.php");
    require_once ("classes/database.php");
    //--------------------
    $database = new mysqldatabase();
    $g_var_look = 0;
    $sql_privacy_posts = "SELECT * FROM  ogenius_nds_db_rgb_query_comment  WHERE ogenius_nds_db_rgb_query_comment_query_id='{$queryIdHere}'
    AND     ogenius_nds_db_rgb_query_comment_active='0' 
     AND     ogenius_nds_db_rgb_query_comment_suggestOrQuestion='{$orient}' 
     AND     ogenius_nds_db_rgb_query_comment_external_visibility='0'   
     ORDER BY   ogenius_nds_db_rgb_query_comment_id DESC";
    if ($query_privacy_posts = $database->query($sql_privacy_posts)) {
        //---------------------
        while ($res_Posts = mysqli_fetch_array($query_privacy_posts)) {
            $g_var_look++;
        }

        return $g_var_look . "";

        //------------------
    }
}

//--------TELL ME ACCOUNT TYPE--
function renderTellIfCommonUser($theUserId) {
    require_once ("conn/config.php");
    require_once ("classes/database.php");
    //--------------------
    $database = new mysqldatabase();
    $post_privacy_counter = 0;
    $suggest_privacy_msg_handler = "";
    $sql_privacy_posts = "SELECT * FROM  ogenius_nds_db_normal_users  WHERE ogenius_nds_db_normal_users_id='{$theUserId}' ORDER BY   ogenius_nds_db_normal_users_id DESC LIMIT 1";
    if ($query_privacy_posts = $database->query($sql_privacy_posts)) {
        //---------------------
        while ($res_privacy_posts = mysqli_fetch_array($query_privacy_posts)) {
            if ($res_privacy_posts['ogenius_nds_db_normal_users_user_vip_tag'] == 0) {


                return TRUE;
            } else if ($res_privacy_posts['ogenius_nds_db_normal_users_user_vip_tag'] == 1) {
                //----------institution
                return FALSE;
            }
        }
        //------------------
    }
}

//-----------find if it's rgb
function renderTellIfCommonUser_checkRGB($theUserId) {
    require_once ("conn/config.php");
    require_once ("classes/database.php");
    //--------------------
    $database = new mysqldatabase();
    $post_privacy_counter = 0;
    $suggest_privacy_msg_handler = "";
    $sql_privacy_posts = "SELECT * FROM  ogenius_nds_db_normal_users  WHERE ogenius_nds_db_normal_users_id='{$theUserId}' ORDER BY   ogenius_nds_db_normal_users_id DESC LIMIT 1";
    if ($query_privacy_posts = $database->query($sql_privacy_posts)) {
        //---------------------
        while ($res_privacy_posts = mysqli_fetch_array($query_privacy_posts)) {
            if ($res_privacy_posts['ogenius_nds_db_normal_users_user_vip_tag'] == 0) {


                return TRUE;
            } else if ($res_privacy_posts['ogenius_nds_db_normal_users_user_vip_tag'] == 1) {
                //----------institution
                return FALSE;
            }
        }
        //------------------
    }
}

?>
