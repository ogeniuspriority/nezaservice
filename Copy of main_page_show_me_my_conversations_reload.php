<?php
session_start();
$thIsUserId_2017=$_POST['common_user_settings_the_id'];
//echo "--------".$_POST['theQueryId']."---".$_POST['orient'];
$_orient_89_cyuma=$_POST['orient'];
$_id_2017=$_POST['theQueryId'];
echo "<input type='hidden' value='$_id_2017' id='the_popped_up_query_suggst_id'/>";
echo "<input type='hidden' value='$_orient_89_cyuma' id='okay_good_orientation'/>";
?>
<?php
//--bring the language--------------------------
require_once ("includes/conn/config.php");
require_once ("includes/classes/database.php");
require_once ("includes/classes/settingsReadFile.php");
require_once ("includes/functions.php");
require_once ("includes/timeToSec.php");
//---------------

if (isset($_SESSION["ogenius_nds_user_id_x2309999_990"])) {
    //--------if not set choose my chosen language here----------------------
    $id_link = $_SESSION["ogenius_nds_user_id_x2309999_990"];
    $sqllanguage_tools_link = "SELECT * FROM  ogenius_nds_languages_for_settings_language_user_link WHERE ogenius_nds_languages_for_settings_language_user_link_id_user='{$id_link}'     ";
    if ($querylanguage_tools_link = $database -> query($sqllanguage_tools_link)) {
        //---------------------
        while ($res_lan_link = mysqli_fetch_array($querylanguage_tools_link)) {
            //-----------------------------------------------------
            $language_id_0 = $res_lan_link['ogenius_nds_languages_for_settings_language_user_link_id_languag'];
            //-------------------Find the language name----------------
            $sqllanguage_tools_link_lang = "SELECT * FROM  ogenius_nds_languages_for_settings WHERE ogenius_nds_languages_for_settings_id='{$language_id_0}'";
            if ($querylanguage_tools_link_lang = $database -> query($sqllanguage_tools_link_lang)) {
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
if(isset($_SESSION["NDS_OGENIUS_session_lan"])){

$_global_language = "english_NDS_618485740hub5548.xml";
    ?>
    <?php
    $thelan_09 = $_SESSION["NDS_OGENIUS_session_lan"];
    $sqllanguage_tools = "SELECT * FROM  ogenius_nds_languages_for_settings WHERE ogenius_nds_languages_for_settings_name_of_language='{$thelan_09}'";
    if ($querylanguage_tools = $database -> query($sqllanguage_tools)) {
        //---------------------
        while ($res_lan = mysqli_fetch_array($querylanguage_tools)) {
            $_global_language = $res_lan['ogenius_nds_languages_for_settings_language_file_name'];
            $_SESSION["NDS_OGENIUS_session_lan"] = $_global_language;

        }
    }

    }else{

    //--bring the language--------------------------
    require_once ("includes/conn/config.php");
    require_once ("includes/classes/database.php");
    require_once ("includes/classes/settingsReadFile.php");
    //---------------
    $_global_language = "english_NDS_618485740hub5548.xml";
    ?>
    <?php
    $sqllanguage_tools = "SELECT * FROM  ogenius_nds_languages_for_settings WHERE ogenius_nds_languages_for_settings_name_of_language='English'";
    if ($querylanguage_tools = $database -> query($sqllanguage_tools)) {
        //---------------------
        while ($res_lan = mysqli_fetch_array($querylanguage_tools)) {
            $_global_language = $res_lan['ogenius_nds_languages_for_settings_language_file_name'];

        }
    }

    }
    //---Declare the settings class to hold all The keywords--
    $NDS_OGENIUS_MAIN_settings = new myXML_CED_Settings("./system_config_xml/" . $_global_language);
    ?>
     <div class="innerMessagePopUp" id="messages_panel_mainpop_note" style="background: #ffffff;width:600px;height: auto;">
                        <!--<input onclick="hideThis_notifications_panel()" type="button" style="float: right;margin-right: 10%;" value="Close" />-->
                        <div style="height: 80%;">
                            <div style="height: 30px;background: #CDCDCD;">

                            </div>
                            <div id="NewSEndPanel">
                                <div style="float: right;padding: 20px;">
                                    <input onclick="toggle_this_new_message_thing()" type="button" style="border:3px solid #0080FF;border-radius: 3px;color: black;background: white;" value="New message" />
                                    <input onclick="main_page_send_MessageToRecipient(this)" type="button" style="border:3px solid #0080FF;border-radius: 3px;color: black;background: white;" value="<?php
                                if(!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_29("system_config_xml/" . $_global_language)->item(0)-> textContent)){
                                  echo "".$NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_29("system_config_xml/" . $_global_language)->item(0)-> textContent;
                                }else{
                                ?>
                   Send
                                <?php } ?>" />
                                </div>
                                
                                <div style="clear: both;float: left;padding-left: 20px;color: black;">
                                    <textarea  onkeyup="textAreaAdjust(this)" id="main_page_new_message_hah" style="border-radius: 8px;width:500px;height: 80px;" placeholder="Message here"></textarea>
                                      <div style="border-radius: 8px;box-shadow: 2px 2px  green;width: 95%;">
                                       <?php
                                         //echo "---------Cyuma----------";
                                         if($_POST['orient']=="suggestion"){
                                             //echo "--------------".$_POST['orient'];
                                             $_suggestion_id=$_POST['theQueryId'];
                                             $sql_orient_find_suggestions = "SELECT * FROM  ogenius_nds_db_suggestions
                                             LEFT JOIN ogenius_nds_db_normal_users
                                             ON ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id=ogenius_nds_db_suggestions.ogenius_nds_db_suggestions_provider_id
                                               WHERE ogenius_nds_db_suggestions_id='{$_suggestion_id}'
                                             ORDER BY   ogenius_nds_db_suggestions_id DESC LIMIT 1";
                                           if ($query_orient_find_suggestions = $database -> query($sql_orient_find_suggestions)) {
                                             //---------------------
                                               while ($res_orient_find_suggestions = mysqli_fetch_array($query_orient_find_suggestions)) {
                                                 switch($res_orient_find_suggestions['ogenius_nds_db_suggestions_type']){
                                                   case "text":
                                                   ?>
                                                    <div style="text-align: left;margin-top: 10px;font-weight: bold;">
                                        <?php
                                if(!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_7("system_config_xml/" . $_global_language)->item(0)-> textContent)){
                                  echo "".$NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_7("system_config_xml/" . $_global_language)->item(0)-> textContent;
                                }else{
                                ?>
                     SENT TO 
                                <?php } ?> <?php echo "<span style='color: skyblue'>".renderTheRecipientOfThisSuggestion($res_orient_find_suggestions['ogenius_nds_db_suggestions_box_id'])."</span>";  ?>
                                   
                                    </div>
                                    <div style="text-align: left;font-weight: bold;color:chocolate;">
                                        <!--Girinka-->
                                        --Suggestion--
                                    </div>
                                    <div>
                                        <p style="width:95%;padding:6px;text-align: left;border:1px solid #CDCDCD;box-shadow: 2px 2px #333333;margin-bottom: 7px;border-radius: 6px;">
                                            <?php echo "".activateUrlStringsw($res_orient_find_suggestions['ogenius_nds_db_suggestions_data']);  ?>
                                        </p>
                                    </br>
                                    </div>
                                                   
                                                   <?php
                                                   break;
                                                   case "image":
                                                       ?>
                                                       <div style="text-align: left;margin-top: 10px;font-weight: bold;">
                                                           
                                        <?php
                                if(!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_7("system_config_xml/" . $_global_language)->item(0)-> textContent)){
                                  echo "".$NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_7("system_config_xml/" . $_global_language)->item(0)-> textContent;
                                }else{
                                ?>
                     SENT TO 
                                <?php } ?> <?php echo "<span style='color: skyblue'>".renderTheRecipientOfThisSuggestion($res_orient_find_suggestions['ogenius_nds_db_suggestions_box_id'])."</span>";  ?>
                                   
                                    </div>
                                    <div style="text-align: left;font-weight: bold;color:chocolate;">
                                        <!--Girinka-->
                                        --Suggestion--
                                    </div>
                                    
                                        <div style="width: 98%;clear: both;height: 100px;overflow-y: scroll" class="scrolls">
                                           <!-- <?php echo "".activateUrlStringsw($res_orient_find_suggestions['ogenius_nds_db_suggestions_data']);  ?>
                                             -->
                                       <div> <?php
                                         $theMainPageImgsTemp_store_IMGs_array = explode("~", $res_orient_find_suggestions['ogenius_nds_db_suggestions_data']);
                                        
                                        for ($i = 0; $i < sizeof($theMainPageImgsTemp_store_IMGs_array); $i++) {
    

                                           ?>
                                          <div id="imgBull<?php echo "" . $i; ?>344" style="width: 20%;height: 40px;margin-top:8px;float: left">
                                               <img id="<?php echo "err34555" . $i; ?>fddffdf"  onclick="main_page_institution_pic_view_this_img_enlarge(this)" src="Community_Admin/NDS_suggested_images/<?php echo "" . $theMainPageImgsTemp_store_IMGs_array[$i]; ?>" style="width: 80%;text-align: center;height: 90%;border-radius: 3px;box-shadow: 2px 2px 2px #333333;" /></br>
                  

                                           </div>

                                            <?php

                                                     }                                        
                                        
                                        
                                        ?>
                                        </div>
                                        </div>
                                        
                                    </br>
                                    
                                                       
                                                       <?php
                                                   break;
                                                   case "audio":
                                                       ?>
                                                       <div style="text-align: left;margin-top: 10px;font-weight: bold;">
                                        <?php
                                if(!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_7("system_config_xml/" . $_global_language)->item(0)-> textContent)){
                                  echo "".$NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_7("system_config_xml/" . $_global_language)->item(0)-> textContent;
                                }else{
                                ?>
                     SENT TO 
                                <?php } ?> <?php echo "<span style='color: skyblue'>".renderTheRecipientOfThisSuggestion($res_orient_find_suggestions['ogenius_nds_db_suggestions_box_id'])."</span>";  ?>
                                   
                                    </div>
                                    <div style="text-align: left;font-weight: bold;color:chocolate;">
                                        <!--Girinka-->
                                        --Suggestion--
                                    </div>
                                    <div>
                                        <div>
                                        <audio preload="true" src="Community_Admin/NDS_suggested_audios/<?php echo "".$res_orient_find_suggestions['ogenius_nds_db_suggestions_data'];  ?>" controls="" style="width: 60%;">
                                            
                                        </audio>                                            
                                            
                                        </div>
                                        
                                            
                                        
                                    </br>
                                    </div>
                                                       
                                                       <?php
                                                   break;
                                                   case "video":
                                                       ?>
                                                       <div style="text-align: left;margin-top: 10px;font-weight: bold;">
                                        <?php
                                if(!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_7("system_config_xml/" . $_global_language)->item(0)-> textContent)){
                                  echo "".$NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_7("system_config_xml/" . $_global_language)->item(0)-> textContent;
                                }else{
                                ?>
                     SENT TO 
                                <?php } ?> <?php echo "<span style='color: skyblue'>".renderTheRecipientOfThisSuggestion($res_orient_find_suggestions['ogenius_nds_db_suggestions_box_id'])."</span>";  ?>
                                   
                                    </div>
                                    <div style="text-align: left;font-weight: bold;color:chocolate;">
                                        <!--Girinka-->
                                        --Suggestion--
                                    </div>
                                    <div>
                                        <div>
                                        <video preload="true" src="Community_Admin/NDS_suggested_videos/<?php echo "".$res_orient_find_suggestions['ogenius_nds_db_suggestions_data'];  ?>" controls="" style="width: 60%;">
                                            
                                        </video>                                            
                                            
                                        </div>
                                        
                                            
                                        
                                    </br>
                                    </div>
                                                       <?php
                                                   break;
                                                     
                                                 }
                                               }     
                                             //------------------

                                            } 
                                             
                                             
                                                                                         
                                         }else{
                                             //echo "--------------".$_POST['orient']; 
                                              $_query_id=$_POST['theQueryId'];
                                             $sql_orient_find_queries = "SELECT * FROM  ogenius_nds_db_rgb_query
                                             LEFT JOIN ogenius_nds_db_normal_users
                                             ON ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id=ogenius_nds_db_rgb_query.ogenius_nds_db_rgb_query_query_provider
                                               WHERE ogenius_nds_db_rgb_query_id='{$_query_id}'
                                             ORDER BY   ogenius_nds_db_rgb_query_id DESC LIMIT 1";
                                           if ($query_orient_find_queries = $database -> query($sql_orient_find_queries)) {
                                             //---------------------
                                               while ($res_orient_find_queries = mysqli_fetch_array($query_orient_find_queries)) {
                                              
                                                   ?>
                                                    <div style="text-align: left;margin-top: 10px;font-weight: bold;">
                                        <?php
                                if(!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_7("system_config_xml/" . $_global_language)->item(0)-> textContent)){
                                  echo "".$NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_7("system_config_xml/" . $_global_language)->item(0)-> textContent;
                                }else{
                                ?>
                     SENT TO 
                                <?php } ?> <?php echo "<span style='color: skyblue'>"."RGB"."</span>";  ?>
                                   
                                    </div>
                                    <div style="text-align: left;font-weight: bold;color:chocolate;">
                                        <!--Girinka-->
                                        --Query--
                                    </div>
                                    <div>
                                        <p style="width:95%;padding:6px;text-align: left;border:1px solid #CDCDCD;box-shadow: 2px 2px #333333;margin-bottom: 7px;border-radius: 6px;">
                                            <?php echo "".activateUrlStringsw($res_orient_find_queries['ogenius_nds_db_rgb_query_query']);  ?>
                                        </p>
                                    </br>
                                    </div>
                                                   
                                                   <?php
                                                  
                                               }     
                                             //------------------

                                            } 
                                             
                                             
                                                                                        
                                         }
                                       
                                       ?>
                                      </div>
                                      <?php
                                      if($_POST['orient']=="suggestion"){
                                          ?>
                                          <div style="padding-bottom: 5px;border-bottom: 2px solid #0080FF;margin-top: 8px;">
                                        <table>
                                            <tr>
                                                <td><span class="messagePopAction" style="border:1px solid #0080FF;border-radius: 5px;padding: 5px;"><?php echo "".returnNumberCommentsForthisQuery($_id_2017); ?> <?php
                                if(!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_8("system_config_xml/" . $_global_language)->item(0)-> textContent)){
                                  echo "".$NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_8("system_config_xml/" . $_global_language)->item(0)-> textContent;
                                }else{
                                ?>
                     Replies
                                <?php } ?></span></td>
                                                
                                            </tr>
                                        </table>
                                       
                                    </div>
                                          
                                          <?php
                                          
                                      }else{
                                        ?>
                                        <div style="padding-bottom: 5px;border-bottom: 2px solid #0080FF;margin-top: 8px;">
                                        <table>
                                            <tr>
                                                <td><span class="messagePopAction" style="border:1px solid #0080FF;border-radius: 5px;padding: 5px;"><?php echo "".returnNumberCommentsForthisQuery($_id_2017); ?> <?php
                                if(!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_8("system_config_xml/" . $_global_language)->item(0)-> textContent)){
                                  echo "".$NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_8("system_config_xml/" . $_global_language)->item(0)-> textContent;
                                }else{
                                ?>
                     Replies
                                <?php } ?></span></td>
                                                <td><span class="messagePopAction" style="border:1px solid #0080FF;border-radius: 5px;padding: 5px;"><?php
                                if(!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_9("system_config_xml/" . $_global_language)->item(0)-> textContent)){
                                  echo "".$NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_9("system_config_xml/" . $_global_language)->item(0)-> textContent;
                                }else{
                                ?>
                     Follow up
                                <?php } ?></span></td>
                                                <td><span class="messagePopAction" onclick="Messages_pop_finalize(this)" id="finalizeBtn" style="border:1px solid #0080FF;border-radius: 5px;padding: 5px;"><?php
                                if(!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_10("system_config_xml/" . $_global_language)->item(0)-> textContent)){
                                  echo "".$NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_10("system_config_xml/" . $_global_language)->item(0)-> textContent;
                                }else{
                                ?>
                     Finalize
                                <?php } ?></span></td>
                                            </tr>
                                        </table>
                                        <div class="speechLeft" id="message_panel_finalize" style="box-shadow: inset 0 0 1em gold, 0 0 1em #0080FF;border-radius:5px;border:3px solid #0080FF;position: absolute;visibility: hidden;z-index: 20000;background: transparent;width:350px;overflow-x: hidden;height: 0px;">

                                            <div onclick="" id="message_panel_finalize_in" style="background: #ffffff;width:600px;height: auto;z-index: 30000">
                                                <!--<input onclick="hideThis_notifications_panel()" type="button" style="float: right;margin-right: 10%;" value="Close" />-->
                                                <div style="height: 110%;">
                                                    <div style="clear: both;text-align: left;width: 65%;padding: 0px;margin: 10px;">
                                                        <div style="width: 100%;">
                                                            <div style="font-size: 14px;width: 65%">
                                                                <?php
                                if(!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_11("system_config_xml/" . $_global_language)->item(0)-> textContent)){
                                  echo "".$NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_11("system_config_xml/" . $_global_language)->item(0)-> textContent;
                                }else{
                                ?>
                     Would you like to inform us how your query was finalised, please select on of the following options:
                                <?php } ?>
                                                            </div>
                                                            <ul style="color:black;list-style: none;font-size: 12px;width: 65%">
                                                                <li>
                                                                    <input name="issueStatus" type="radio" />
                                                                    <?php
                                if(!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_12("system_config_xml/" . $_global_language)->item(0)-> textContent)){
                                  echo "".$NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_12("system_config_xml/" . $_global_language)->item(0)-> textContent;
                                }else{
                                ?>
                     resolved
                                <?php } ?>
                                                                </li>
                                                                <li>
                                                                    <input name="issueStatus" type="radio" />
                                                                    <?php
                                if(!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_13("system_config_xml/" . $_global_language)->item(0)-> textContent)){
                                  echo "".$NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_13("system_config_xml/" . $_global_language)->item(0)-> textContent;
                                }else{
                                ?>
                     Issue not resolved but i'm satisfied with explanations
                                <?php } ?>
                                                                </li>
                                                                <li>
                                                                    <input name="issueStatus" type="radio" />
                                                                    <?php
                                if(!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_14("system_config_xml/" . $_global_language)->item(0)-> textContent)){
                                  echo "".$NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_14("system_config_xml/" . $_global_language)->item(0)-> textContent;
                                }else{
                                ?>
                     Issue not resolved, not satisfied with explanations
                                <?php } ?>
                                                                </li>
                                                                <li>
                                                                    <input name="issueStatus" type="radio" />
                                                                   <?php
                                if(!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_15("system_config_xml/" . $_global_language)->item(0)-> textContent)){
                                  echo "".$NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_15("system_config_xml/" . $_global_language)->item(0)-> textContent;
                                }else{
                                ?>
                     Other
                                <?php } ?> </br>                                                                     <textarea placeholder='<?php
                                if(!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_16("system_config_xml/" . $_global_language)->item(0)-> textContent)){
                                  echo "".$NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_16("system_config_xml/" . $_global_language)->item(0)-> textContent;
                                }else{
                                ?>
                     Type here
                                <?php } ?>' style="width: 250px;height: 120px;border-radius: 8px;"></textarea>
                                                                </li>
                                                            </ul>
                                                            <table>
                                                                <tr>
                                                                    <td>
                                                                    <input type="button" style="border:1px solid #0080FF;background:#0080FF;width: 150px;padding: 5px; " value="<?php
                                if(!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_17("system_config_xml/" . $_global_language)->item(0)-> textContent)){
                                  echo "".$NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_17("system_config_xml/" . $_global_language)->item(0)-> textContent;
                                }else{
                                ?>
                     OK
                                <?php } ?>" />
                                                                    </td>
                                                                    <td>
                                                                    <input type="button" style="border:1px solid #0080FF;background:transparent;width: 150px;padding: 5px; " value="<?php
                                if(!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_18("system_config_xml/" . $_global_language)->item(0)-> textContent)){
                                  echo "".$NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_18("system_config_xml/" . $_global_language)->item(0)-> textContent;
                                }else{
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
                                        
                                        
                                        <?php
                                          
                                      }
                                      
                                      ?>
                                   <?php
                                   if($_POST['orient']=="query"){
                                       ?>
                                       <div style="width: 85%;font-size: 13px;text-align: left;">
                                        <ul style="color: #0080FF;">
                                            <li>
                                                <span style="color: black;"><?php
                                if(!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_19("system_config_xml/" . $_global_language)->item(0)-> textContent)){
                                  echo "".$NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_19("system_config_xml/" . $_global_language)->item(0)-> textContent;
                                }else{
                                ?>
                     Your question has been viewed by RGB staff in charge of suggestion box
                                <?php } ?></span>
                                            </li>
                                            <li>
                                                <span style="color: black;"><?php
                                if(!empty($NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_20("system_config_xml/" . $_global_language)->item(0)-> textContent)){
                                  echo "".$NDS_OGENIUS_MAIN_settings::getGeneralSettings_main_page_20("system_config_xml/" . $_global_language)->item(0)-> textContent;
                                }else{
                                ?>
                     Your question has been forwaded to the bureau of the Ombudsman for review
                                <?php } ?></span>
                                            </li>
                                        </ul>
                                    </div>
                                       
                                       <?php
                                       
                                   }else{
                                       
                                   }
                                   
                                   ?>
                                    
                                    
                                    <div  style="margin-bottom:20px;border-radius:8px;margin-top: 10px;font-size: 14px;padding: 20px;height: 300px;overflow-y: scroll;background:#333333;width: 90%">
                                        <!--  the chats' load-->
                                          <?php 
                                 //---------------------------------
$sql_2017_institution_suggestions_comnts_pool = "SELECT 
            Pamela.ogenius_nds_db_rgb_query_comment_comment,
            Pamela.ogenius_nds_db_rgb_query_comment_id,
            Pamela.ogenius_nds_db_rgb_query_comment_active,
            Pamela.ogenius_nds_db_rgb_query_comment_me_them_alt,
            Pamela.ogenius_nds_db_rgb_query_comment_sender_id,
            Pamela.ogenius_nds_db_rgb_query_comment_suggestOrQuestion,
            Pamela.ogenius_nds_db_rgb_query_comment_external_visibility,
            Pamela.ogenius_nds_db_rgb_query_comment_active,
            Pamela.ogenius_nds_db_rgb_query_comment_regdate,
            Pamela.ogenius_nds_db_rgb_query_comment_query_id,
            ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_avatar,
            ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_names,
            ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id ,
            ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_api_log_face_goo_id         
             FROM (SELECT * FROM ogenius_nds_db_rgb_query_comment 
             WHERE   ogenius_nds_db_rgb_query_comment_query_id='{$_id_2017}' AND     ogenius_nds_db_rgb_query_comment_active='0' 
             AND     ogenius_nds_db_rgb_query_comment_external_visibility='0'   ORDER BY 
    ogenius_nds_db_rgb_query_comment_id DESC ) AS Pamela
            LEFT JOIN ogenius_nds_db_normal_users
            ON Pamela.ogenius_nds_db_rgb_query_comment_sender_id=ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id
WHERE   Pamela.ogenius_nds_db_rgb_query_comment_query_id='{$_id_2017}' AND     Pamela.ogenius_nds_db_rgb_query_comment_active='0'   ORDER BY 
    ogenius_nds_db_rgb_query_comment_id DESC 

";
//-------Counter of comments----
$all_comments_count=60;
$all_comments_count_temp_asc_id="";
$theComments_count_2017=0;
if ($query_2017_institution_suggestions_comnts_pool = $database -> query($sql_2017_institution_suggestions_comnts_pool)) {
    //---------------------
    while ($res_2017_institution_suggestions_comnts_pool = mysqli_fetch_array($query_2017_institution_suggestions_comnts_pool)) {
               echo "</br>";
        if ($res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_normal_users_id'] == $thIsUserId_2017) {
            if ($res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_external_visibility'] == "0") {
               ?>
               <div class="speechRight" style="border-bottom: 2px solid #0080FF;margin-top: 10px; width: 70%;float: right;background: #CDCDCD;border-radius: 5px;padding: 4px;">
                            <table style="margin-left: 40%;">
                                 <tr>
                                     <td><span style="color: #1A5A7A;text-shadow: 1px 1px 1px #333333;"><?php echo "" . checkMyPostingPrivacyStatus($res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_normal_users_id'], $res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_normal_users_names']); ?></span></td>                                 
                                 </tr>
                             </table> 
                           <div style="text-align: left;">
                               <?php echo "" . $res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_comment']; ?>
                           
                             </div> 
                              <table style="margin-left: 40%;">
                                 <tr>
                                     <td>
                                         <!--<img src="images/special_mail_comm.png" title="Marked as visible to External User" style="max-height: 80px;max-width: 150px;" />
                                     --></td>
                                     <td><span style="color: blue;text-shadow: 1px 1px 1px #333333;font-size:11px;"><?php echo "" . time_to_sec($res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_regdate']); ?></span></td>                                 
                                    
                                            <?php 
                                     if($res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_sender_id']==$thIsUserId_2017){
                                         ?>
                                            <div style='float:left'><img onclick="main_page_institution_delete_this_commnt_rgb_query(this)" name='<?php echo "" . $res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_id']; ?>' title='Delete this' src="images/send_to_dust_bin.png" style="width: 25px;height: 25px;margin-top:15px;border-radius:5px" /></div>
                                 
                                         <?php
                                        }
                                      ?>
                                 
                                      
                                  </tr>
                             </table>   
                                                                            
                        </div>               
               
               <?php
            } else {
                ?>
                <div class="speechRight" style="border-bottom: 2px solid #0080FF;margin-top: 10px; width: 70%;float: right;background: #CDCDCD;border-radius: 5px;padding: 4px;">
                            <table style="margin-left: 40%;">
                                 <tr>
                                     <td><span style="color: #1A5A7A;text-shadow: 1px 1px 1px #333333;"><?php echo "" . checkMyPostingPrivacyStatus($res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_normal_users_id'], $res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_normal_users_names']); ?></span></td>                                 
                                 </tr>
                             </table> 
                           <div style="text-align: left;">
                                <?php echo "" . $res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_comment']; ?>
                           
                             </div> 
                              <table style="margin-left: 40%;">
                                 <tr>
                                     <td>
                                        <!-- <img src="images/normal_internal_message.png" title="Marked as invisible to External User" style="max-height: 80px;max-width: 150px;" />
                                     --></td>
                                     <td><span style="color: blue;text-shadow: 1px 1px 1px #333333;font-size:11px;"><?php echo "" . time_to_sec($res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_regdate']); ?></span></td>                                 
                                     <?php 
                                     if($res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_sender_id']==$thIsUserId_2017){
                                         ?>
                                            <div style='float:left'><img onclick="main_page_institution_delete_this_commnt_rgb_query(this)" name='<?php echo "" . $res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_id']; ?>' title='Delete this' src="images/send_to_dust_bin.png" style="width: 25px;height: 25px;margin-top:15px;border-radius:5px" /></div>
                                 
                                         <?php
                                        }
                                      ?>
                                 </tr>
                             </table>   
                                                                            
                        </div>  
                
                
                <?php
                }
                } else {
                if ($res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_external_visibility'] == "0") {
                ?>
                <div class="speechLeft" style="border-bottom: 2px solid #0080FF;margin-top: 10px; width: 70%;float: left;background: #CDCDCD;border-radius: 5px;padding: 4px;">
                             <table style="margin-left: 40%;">
                                 <tr>
                                     
                                     <td><span style="color: #1A5A7A;text-shadow: 2px 2px 2px #333333;"><?php echo "" . checkMyPostingPrivacyStatus($res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_normal_users_id'], $res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_normal_users_names']); ?></span></td>                                 
                                 </tr>
                             </table> 
                          <div style="text-align: left;">
                            <?php echo "" . $res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_comment']; ?>
                           
                             </div> 
                              <table style="margin-left: 40%;">
                                 <tr>
                                     <td>
                                         <!--<img src="images/special_mail_comm.png" title="Marked as visible to External User" style="max-height: 80px;max-width: 150px;" />
                                     --></td>
                                     <td><span style="color: blue;text-shadow: 1px 1px 1px #333333;font-size:11px;"><?php echo "" . time_to_sec($res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_regdate']); ?></span></td>                                 
                                     <?php 
                                     if($res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_sender_id']==$thIsUserId_2017){
                                         ?>
                                            <div style='float:left'><img onclick="main_page_institution_delete_this_commnt_rgb_query(this)" name='<?php echo "" . $res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_id']; ?>' title='Delete this' src="images/send_to_dust_bin.png" style="width: 25px;height: 25px;margin-top:15px;border-radius:5px" /></div>
                                 
                                         <?php
                                        }
                                      ?>
                                 </tr>
                             </table>   
                                                                           
                        </div>
                
                                
                <?php
                } else {
                ?>
                 <div class="speechLeft" style="border-bottom: 2px solid #0080FF;margin-top: 10px; width: 70%;float: left;background: #CDCDCD;border-radius: 5px;padding: 4px;">
                             <table style="margin-left: 40%;">
                                 <tr>
                                     
                                     <td><span style="color: #1A5A7A;text-shadow: 1px 1px 1px #333333;"><?php echo "" . checkMyPostingPrivacyStatus($res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_normal_users_id'], $res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_normal_users_names']); ?></span></td>                                 
                                 </tr>
                             </table> 
                          <div style="text-align: left;">
                               <?php echo "" . $res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_comment']; ?>
                           
                             </div> 
                              <table style="margin-left: 40%;">
                                 <tr>
                                     <td>
                                         <!--<img src="images/normal_internal_message.png" title="Marked as invisible to External User" style="max-height: 80px;max-width: 150px;" />
                                     --></td>
                                     <td><span style="color: blue;text-shadow: 1px 1px 1px #333333;font-size:11px;"><?php echo "" . time_to_sec($res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_regdate']); ?></span></td>                                 
                                     <?php 
                                     if($res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_sender_id']==$thIsUserId_2017){
                                         ?>
                                            <div style='float:left'><img onclick="main_page_institution_delete_this_commnt_rgb_query(this)" name='<?php echo "" . $res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_id']; ?>' title='Delete this' src="images/send_to_dust_bin.png" style="width: 25px;height: 25px;margin-top:15px;border-radius:5px" /></div>
                                 
                                         <?php
                                        }
                                      ?>
                                 </tr>
                             </table>   
                                                                           
                        </div>
                
                
                <?php
                }

                }

                //-------The more up loader--
                if($all_comments_count==60){
                $all_comments_count_temp_asc_id=$res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_id'];
                }
                if($all_comments_count==1){
                    $the_Id_Suggest=$res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_query_id'];
                //echo "<div><img id='".$res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_query_id']."$theComments_count_2017' onclick='main_page_institution_load_more_cmmnts(this,$the_Id_Suggest)' name='".$all_comments_count_temp_asc_id."' src='images/up_new_load.png' style='max-width:50px;max-height:50px;' /></div>";
                }

                //---------------
                $theComments_count_2017++;
                $all_comments_count-- ;
                }
                if($theComments_count_2017==0){
                echo "<div style='margin:auto;'><img src='images/no_data_in.png' style='max-width:50px;max-height:50px;margin-top:20%;border-radius:6px;box-shadow:2px 2px 2px red;' /></div>";

                }

                }
                               
                               ?>
                                        
                                      

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>