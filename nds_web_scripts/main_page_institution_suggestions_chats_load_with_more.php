<?php

include ("../includes/conn/config.php");
include ("../includes/classes/database.php");
include ("../includes/functions.php");
include ("../includes/timeToSec.php");

$suggestIonId = $_POST['the2017_suggestId_MugaboS_Cedric'];
$institution_User_Cred = $_POST['common_user_settings_the_id'];
$typeofChatsToLoad=$_POST['main_page_institution_suggest_comment_pool_strategy'];
//---show_all_types_of_messages--show_only_internal_messages--show_only_externally_open_messages
$theComments_count_2017=0;
$thePreviousIdCmment=$_POST['thePreviousIdCmment'];


switch ($typeofChatsToLoad) {
	case 'show_all_types_of_messages':
        //--------------------associate the real tags now to the orientation--2017        
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
             WHERE   ogenius_nds_db_rgb_query_comment_query_id='{$suggestIonId}' AND     ogenius_nds_db_rgb_query_comment_active='0' 
             AND  ogenius_nds_db_rgb_query_comment_id<'{$thePreviousIdCmment}'
             AND     ogenius_nds_db_rgb_query_comment_suggestOrQuestion='suggestion' 
              ORDER BY 
    ogenius_nds_db_rgb_query_comment_id DESC LIMIT 10) AS Pamela
            LEFT JOIN ogenius_nds_db_normal_users
            ON Pamela.ogenius_nds_db_rgb_query_comment_sender_id=ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id
WHERE   Pamela.ogenius_nds_db_rgb_query_comment_query_id='{$suggestIonId}' AND     Pamela.ogenius_nds_db_rgb_query_comment_active='0'   ORDER BY 
    ogenius_nds_db_rgb_query_comment_id ASC 

";
//-------Counter of comments----
$all_comments_count=60;
$all_comments_count_temp_asc_id="";
if ($query_2017_institution_suggestions_comnts_pool = $database -> query($sql_2017_institution_suggestions_comnts_pool)) {
    //---------------------
    while ($res_2017_institution_suggestions_comnts_pool = mysqli_fetch_array($query_2017_institution_suggestions_comnts_pool)) {

        if ($res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_normal_users_id'] == $institution_User_Cred) {
            if ($res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_external_visibility'] == "0") {
               ?>
               <div class="bubble bubble-alt meTra" style="font-size: 13px;">
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
                                         <img src="images/special_mail_comm.png" title="Marked as visible to External User" style="max-height: 80px;max-width: 150px;" />
                                     </td>
                                     <td><span style="color: blue;text-shadow: 1px 1px 1px #333333;font-size:11px;"><?php echo "" . time_to_sec($res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_regdate']); ?></span></td>                                 
                                    
                                            <?php 
                                     if($res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_sender_id']==$institution_User_Cred){
                                         ?>
                                            <div style='float:left'><img onclick="main_page_institution_delete_this_commnt_suggestion(this)" name='<?php echo "" . $res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_id']; ?>' title='Delete this' src="images/send_to_dust_bin.png" style="width: 25px;height: 25px;margin-top:15px;border-radius:5px" /></div>
                                 
                                         <?php
                                        }
                                      ?>
                                 
                                      
                                  </tr>
                             </table>   
                                                                            
                        </div>               
               
               <?php
            } else {
                ?>
                <div class="bubble bubble-alt meTra" style="font-size: 13px;">
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
                                         <img src="images/normal_internal_message.png" title="Marked as invisible to External User" style="max-height: 80px;max-width: 150px;" />
                                     </td>
                                     <td><span style="color: blue;text-shadow: 1px 1px 1px #333333;font-size:11px;"><?php echo "" . time_to_sec($res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_regdate']); ?></span></td>                                 
                                     <?php 
                                     if($res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_sender_id']==$institution_User_Cred){
                                         ?>
                                            <div style='float:left'><img onclick="main_page_institution_delete_this_commnt_suggestion(this)" name='<?php echo "" . $res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_id']; ?>' title='Delete this' src="images/send_to_dust_bin.png" style="width: 25px;height: 25px;margin-top:15px;border-radius:5px" /></div>
                                 
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
                <div class="bubble red" style="font-size: 13px;">
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
                                         <img src="images/special_mail_comm.png" title="Marked as visible to External User" style="max-height: 80px;max-width: 150px;" />
                                     </td>
                                     <td><span style="color: blue;text-shadow: 1px 1px 1px #333333;font-size:11px;"><?php echo "" . time_to_sec($res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_regdate']); ?></span></td>                                 
                                     <?php 
                                     if($res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_sender_id']==$institution_User_Cred){
                                         ?>
                                            <div style='float:left'><img onclick="main_page_institution_delete_this_commnt_suggestion(this)" name='<?php echo "" . $res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_id']; ?>' title='Delete this' src="images/send_to_dust_bin.png" style="width: 25px;height: 25px;margin-top:15px;border-radius:5px" /></div>
                                 
                                         <?php
                                        }
                                      ?>
                                 </tr>
                             </table>   
                                                                           
                        </div>
                
                                
                <?php
                } else {
                ?>
                 <div class="bubble red" style="font-size: 13px;">
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
                                         <img src="images/normal_internal_message.png" title="Marked as invisible to External User" style="max-height: 80px;max-width: 150px;" />
                                     </td>
                                     <td><span style="color: blue;text-shadow: 1px 1px 1px #333333;font-size:11px;"><?php echo "" . time_to_sec($res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_regdate']); ?></span></td>                                 
                                     <?php 
                                     if($res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_sender_id']==$institution_User_Cred){
                                         ?>
                                            <div style='float:left'><img onclick="main_page_institution_delete_this_commnt_suggestion(this)" name='<?php echo "" . $res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_id']; ?>' title='Delete this' src="images/send_to_dust_bin.png" style="width: 25px;height: 25px;margin-top:15px;border-radius:5px" /></div>
                                 
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
                echo "<div><img id='".$res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_query_id']."$theComments_count_2017' onclick='main_page_institution_load_more_cmmnts(this,".$res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_query_id'].")' name='".$all_comments_count_temp_asc_id."' src='images/up_new_load.png' style='max-width:50px;max-height:50px;' /></div>";
                }

                //---------------
                $theComments_count_2017++;
                $all_comments_count-- ;
                }
                if($theComments_count_2017==0){
                echo "<div style='margin:auto;'><img src='images/no_data_in.png' style='max-width:50px;max-height:50px;margin-top:20%;border-radius:6px;box-shadow:2px 2px 2px red;' /></div>";

                }

                }
                break;
                case 'show_only_internal_messages':
                //--------------------associate the real tags now to the orientation--2017
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
                WHERE   ogenius_nds_db_rgb_query_comment_query_id='{$suggestIonId}' AND     ogenius_nds_db_rgb_query_comment_active='0' 
                AND     ogenius_nds_db_rgb_query_comment_suggestOrQuestion='suggestion'   
                AND  ogenius_nds_db_rgb_query_comment_id<'{$thePreviousIdCmment}'
              ORDER BY 
    ogenius_nds_db_rgb_query_comment_id DESC LIMIT 10 ) AS Pamela
                LEFT JOIN ogenius_nds_db_normal_users
                ON Pamela.ogenius_nds_db_rgb_query_comment_sender_id=ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id
                WHERE   ogenius_nds_db_rgb_query_comment_query_id='{$suggestIonId}' AND     ogenius_nds_db_rgb_query_comment_active='0'
                AND         Pamela.ogenius_nds_db_rgb_query_comment_external_visibility='1'   ORDER BY
                ogenius_nds_db_rgb_query_comment_id ASC LIMIT 60

                ";
                $internal_comments_count=60;
                $internal_comments_count_temp_asc_id="";
                if ($query_2017_institution_suggestions_comnts_pool = $database -> query($sql_2017_institution_suggestions_comnts_pool)) {
                //---------------------
                while ($res_2017_institution_suggestions_comnts_pool = mysqli_fetch_array($query_2017_institution_suggestions_comnts_pool)) {

                if ($res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_normal_users_id'] == $institution_User_Cred) {
                if ($res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_external_visibility'] == "0") {
               ?>
               <div class="bubble bubble-alt meTra" style="font-size: 13px;">
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
                                         <img src="images/special_mail_comm.png" title="Marked as visible to External User" style="max-height: 80px;max-width: 150px;" />
                                     </td>
                                     <td><span style="color: blue;text-shadow: 1px 1px 1px #333333;font-size:11px;"><?php echo "" . time_to_sec($res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_regdate']); ?></span></td>                                 
                                     <?php 
                                     if($res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_sender_id']==$institution_User_Cred){
                                         ?>
                                            <div style='float:left'><img onclick="main_page_institution_delete_this_commnt_suggestion(this)" name='<?php echo "" . $res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_id']; ?>' title='Delete this' src="images/send_to_dust_bin.png" style="width: 25px;height: 25px;margin-top:15px;border-radius:5px" /></div>
                                 
                                         <?php
                                        }
                                      ?>
                                 </tr>
                             </table>   
                                                                            
                        </div>               
               
               <?php
            } else {
                ?>
                <div class="bubble bubble-alt meTra" style="font-size: 13px;">
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
                                         <img src="images/normal_internal_message.png" title="Marked as invisible to External User" style="max-height: 80px;max-width: 150px;" />
                                     </td>
                                     <td><span style="color: blue;text-shadow: 1px 1px 1px #333333;font-size:11px;"><?php echo "" . time_to_sec($res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_regdate']); ?></span></td>                                 
                                     <?php 
                                     if($res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_sender_id']==$institution_User_Cred){
                                         ?>
                                            <div style='float:left'><img onclick="main_page_institution_delete_this_commnt_suggestion(this)" name='<?php echo "" . $res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_id']; ?>' title='Delete this' src="images/send_to_dust_bin.png" style="width: 25px;height: 25px;margin-top:15px;border-radius:5px" /></div>
                                 
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
                <div class="bubble red" style="font-size: 13px;">
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
                                         <img src="images/special_mail_comm.png" title="Marked as invisible to External User" style="max-height: 80px;max-width: 150px;" />
                                     </td>
                                     <td><span style="color: blue;text-shadow: 1px 1px 1px #333333;font-size:11px;"><?php echo "" . time_to_sec($res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_regdate']); ?></span></td>                                 
                                     <?php 
                                     if($res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_sender_id']==$institution_User_Cred){
                                         ?>
                                            <div style='float:left'><img onclick="main_page_institution_delete_this_commnt_suggestion(this)" name='<?php echo "" . $res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_id']; ?>' title='Delete this' src="images/send_to_dust_bin.png" style="width: 25px;height: 25px;margin-top:15px;border-radius:5px" /></div>
                                 
                                         <?php
                                        }
                                      ?>
                                 </tr>
                             </table>   
                                                                           
                        </div>
                
                                
                <?php
                } else {
                ?>
                 <div class="bubble red" style="font-size: 13px;">
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
                                         <img src="images/normal_internal_message.png" title="Marked as invisible to External User" style="max-height: 80px;max-width: 150px;" />
                                     </td>
                                     <td><span style="color: blue;text-shadow: 1px 1px 1px #333333;font-size:11px;"><?php echo "" . time_to_sec($res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_regdate']); ?></span></td>                                 
                                     <?php 
                                     if($res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_sender_id']==$institution_User_Cred){
                                         ?>
                                            <div style='float:left'><img onclick="main_page_institution_delete_this_commnt_suggestion(this)" name='<?php echo "" . $res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_id']; ?>' title='Delete this' src="images/send_to_dust_bin.png" style="width: 25px;height: 25px;margin-top:15px;border-radius:5px" /></div>
                                 
                                         <?php
                                        }
                                      ?>
                                 </tr>
                             </table>   
                                                                           
                        </div>
                
                
                <?php
                }

                }
//----------------------------
//-------The more up loader--
                if($internal_comments_count==60){
                $internal_comments_count_temp_asc_id=$res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_id'];
                }
                if($internal_comments_count==1){
                echo "<div><img id='".$res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_query_id']."$theComments_count_2017' onclick='main_page_institution_load_more_cmmnts(this,".$res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_query_id'].")' name='".$internal_comments_count_temp_asc_id."' src='images/up_new_load.png' style='max-width:50px;max-height:50px;' /></div>";
                }

                //---------------            
                $internal_comments_count-- ;
                $theComments_count_2017++;
                }
                if($theComments_count_2017==0){
                echo "<div style='margin:auto;'><img src='images/no_data_in.png' style='max-width:50px;max-height:50px;margin-top:20%;border-radius:6px;box-shadow:2px 2px 2px red;' /></div>";

                }
                }
                break;
                case 'show_only_externally_open_messages':
                //--------------------associate the real tags now to the orientation--2017
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
                WHERE   ogenius_nds_db_rgb_query_comment_query_id='{$suggestIonId}' AND     ogenius_nds_db_rgb_query_comment_active='0'   
                AND     ogenius_nds_db_rgb_query_comment_suggestOrQuestion='suggestion' 
                AND  ogenius_nds_db_rgb_query_comment_id<'{$thePreviousIdCmment}'
              ORDER BY 
    ogenius_nds_db_rgb_query_comment_id DESC LIMIT 10) AS Pamela
                LEFT JOIN ogenius_nds_db_normal_users
                ON Pamela.ogenius_nds_db_rgb_query_comment_sender_id=ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id
                WHERE   ogenius_nds_db_rgb_query_comment_query_id='{$suggestIonId}' AND     ogenius_nds_db_rgb_query_comment_active='0'
                AND         ogenius_nds_db_rgb_query_comment_external_visibility='0'   ORDER BY
                ogenius_nds_db_rgb_query_comment_id ASC LIMIT 60

                ";
                $external_comments_count=60;
                $external_comments_count_temp_asc_id="";
                if ($query_2017_institution_suggestions_comnts_pool = $database -> query($sql_2017_institution_suggestions_comnts_pool)) {
                //---------------------
                while ($res_2017_institution_suggestions_comnts_pool = mysqli_fetch_array($query_2017_institution_suggestions_comnts_pool)) {

                if ($res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_normal_users_id'] == $institution_User_Cred) {
                if ($res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_external_visibility'] == "0") {
               ?>
               <div class="bubble bubble-alt meTra" style="font-size: 13px;">
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
                                         <img src="images/special_mail_comm.png" title="Marked as visible to External User" style="max-height: 80px;max-width: 150px;" />
                                     </td>
                                     <td><span style="color: blue;text-shadow: 1px 1px 1px #333333;font-size:11px;"><?php echo "" . time_to_sec($res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_regdate']); ?></span></td>                                 
                                     <?php 
                                     if($res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_sender_id']==$institution_User_Cred){
                                         ?>
                                            <div style='float:left'><img onclick="main_page_institution_delete_this_commnt_suggestion(this)" name='<?php echo "" . $res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_id']; ?>' title='Delete this' src="images/send_to_dust_bin.png" style="width: 25px;height: 25px;margin-top:15px;border-radius:5px" /></div>
                                 
                                         <?php
                                        }
                                      ?>
                                  </tr>
                             </table>   
                                                                            
                        </div>               
               
               <?php
            } else {
                ?>
                <div class="bubble bubble-alt meTra" style="font-size: 13px;">
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
                                         <img src="images/normal_internal_message.png" title="Marked as invisible to External User" style="max-height: 80px;max-width: 150px;" />
                                     </td>
                                     <td><span style="color: blue;text-shadow: 1px 1px 1px #333333;font-size:11px;"><?php echo "" . time_to_sec($res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_regdate']); ?></span></td>                                 
                                     <?php 
                                     if($res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_sender_id']==$institution_User_Cred){
                                         ?>
                                            <div style='float:left'><img onclick="main_page_institution_delete_this_commnt_suggestion(this)" name='<?php echo "" . $res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_id']; ?>' title='Delete this' src="images/send_to_dust_bin.png" style="width: 25px;height: 25px;margin-top:15px;border-radius:5px" /></div>
                                 
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
                <div class="bubble red" style="font-size: 13px;">
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
                                         <img src="images/special_mail_comm.png" title="Marked as invisible to External User" style="max-height: 80px;max-width: 150px;" />
                                     </td>
                                     <td><span style="color: blue;text-shadow: 1px 1px 1px #333333;font-size:11px;"><?php echo "" . time_to_sec($res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_regdate']); ?></span></td>                                 
                                     <?php 
                                     if($res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_sender_id']==$institution_User_Cred){
                                         ?>
                                            <div style='float:left'><img onclick="main_page_institution_delete_this_commnt_suggestion(this)" name='<?php echo "" . $res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_id']; ?>' title='Delete this' src="images/send_to_dust_bin.png" style="width: 25px;height: 25px;margin-top:15px;border-radius:5px" /></div>
                                 
                                         <?php
                                        }
                                      ?>
                                 </tr>
                             </table>   
                                                                           
                        </div>
                
                                
                <?php
                } else {
                ?>
                 <div class="bubble red" style="font-size: 13px;">
                             <table style="margin-left: 40%;">
                                 <tr>
                                     
                                     <td><span style="color: #1A5A7A;text-shadow: 1px 1px 1px #333333;"><?php echo "" . checkMyPostingPrivacyStatus($res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_normal_users_id'], $res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_normal_users_names']); ?></span></td>                                 
                                 </tr>
                             </table> 
                          <div>
                               <?php echo "" . $res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_comment']; ?>
                           
                             </div> 
                              <table style="margin-left: 40%;">
                                 <tr>
                                     <td>
                                         <img src="images/normal_internal_message.png" title="Marked as invisible to External User" style="max-height: 80px;max-width: 150px;" />
                                     </td>
                                     <td><span style="color: blue;text-shadow: 1px 1px 1px #333333;font-size:11px;"><?php echo "" . time_to_sec($res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_regdate']); ?></span></td>                                 
                                     <?php 
                                     if($res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_sender_id']==$institution_User_Cred){
                                         ?>
                                            <div style='float:left'><img onclick="main_page_institution_delete_this_commnt_suggestion(this)" name='<?php echo "" . $res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_id']; ?>' title='Delete this' src="images/send_to_dust_bin.png" style="width: 25px;height: 25px;margin-top:15px;border-radius:5px" /></div>
                                 
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
                if($external_comments_count==60){
                $external_comments_count_temp_asc_id=$res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_id'];
                }
                if($external_comments_count==1){
                echo "<div><img id='".$res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_query_id']."$theComments_count_2017' onclick='main_page_institution_load_more_cmmnts(this,".$res_2017_institution_suggestions_comnts_pool['ogenius_nds_db_rgb_query_comment_query_id'].")' name='".$external_comments_count_temp_asc_id."' src='images/up_new_load.png' style='max-width:50px;max-height:50px;' /></div>";
                }

                //---------------
                $theComments_count_2017++;
                $external_comments_count-- ;
                }
                if($theComments_count_2017==0){
                echo "<div style='margin:auto;'><img src='images/no_data_in.png' style='max-width:50px;max-height:50px;margin-top:20%;border-radius:6px;box-shadow:2px 2px 2px red;' /></div>";

                }
                }
                break;

                }
            ?>
