<?php

include ("../includes/conn/config.php");
include ("../includes/classes/database.php");
include ("../includes/functions.php");
include ("../includes/timeToSec.php");

$suggestIonId = $_POST['the2017_suggestId_MugaboS_Cedric'];

//--------------------associate the real tags now to the orientation--2017
$sql_2017_institution_suggestions = "SELECT * FROM  ogenius_nds_db_suggestions WHERE     ogenius_nds_db_suggestions_id='{$suggestIonId}' ORDER BY      ogenius_nds_db_suggestions_id DESC LIMIT 1";
if ($query_2017_institution_suggestions = $database -> query($sql_2017_institution_suggestions)) {
    //---------------------
    while ($res_2017_institution_suggestions = mysqli_fetch_array($query_2017_institution_suggestions)) {
        $theSender_id = $res_2017_institution_suggestions['ogenius_nds_db_suggestions_provider_id'];
        $theSuggestion_acquire_date = $res_2017_institution_suggestions['ogenius_nds_db_suggestions_regdate'];
        //--------------------------------
        switch (checkMySuggestToInstitutionPrivacyStatus($theSender_id)) {
            case 'only_username' :
                //---------------------
                $sql_2017_institution_suggestions_user_data = "SELECT * FROM   ogenius_nds_db_normal_users WHERE     ogenius_nds_db_normal_users_id='{$theSender_id}' ORDER BY         ogenius_nds_db_normal_users_id DESC LIMIT 1";
                if ($query_2017_institution_suggestions_user_data = $database -> query($sql_2017_institution_suggestions_user_data)) {
                    //---------------------
                    while ($res_2017_institution_suggestions_user_data = mysqli_fetch_array($query_2017_institution_suggestions_user_data)) {

?>
<div style="color: #CDCDCD;background: #333333;margin: 10px" class="startcolstart">
    <p>The suggestion is alive for <span style="color: gold;text-shadow: 1px 1px 1px #333333;"><?php echo "".time_to_sec($theSuggestion_acquire_date); ?></span></p>
    <p>Details about the sender below</p>
    <div style="">

        <table style="color: #CDCDCD;">

            <tr>
                <td>Username:</td>
                <td><?php echo "".checkMyPostingPrivacyStatus($res_2017_institution_suggestions_user_data['ogenius_nds_db_normal_users_id'],$res_2017_institution_suggestions_user_data['ogenius_nds_db_normal_users_names']);  ?></td>
            </tr>

        </table>
    </div>
</div>

<?php
}
}
break;
case 'only_username_and_location' :
//----------------------------
$sql_2017_institution_suggestions_user_data = "SELECT * FROM   ogenius_nds_db_normal_users WHERE     ogenius_nds_db_normal_users_id='{$theSender_id}' ORDER BY         ogenius_nds_db_normal_users_id DESC LIMIT 1";
if ($query_2017_institution_suggestions_user_data = $database -> query($sql_2017_institution_suggestions_user_data)) {
//---------------------
while ($res_2017_institution_suggestions_user_data = mysqli_fetch_array($query_2017_institution_suggestions_user_data)) {
?>
<div style="color: #CDCDCD;background: #333333;padding: 10px" class="startcolstart">
    <p>The suggestion is alive for <span style="color: gold;text-shadow: 1px 1px 1px #333333;"><?php echo "".time_to_sec($theSuggestion_acquire_date); ?></span></p>
    <p>Details about the sender below</p>
    <div style="">

        <table style="color: #CDCDCD;">

            <tr>
                <td>Username:</td>
                <td><?php echo "".checkMyPostingPrivacyStatus($res_2017_institution_suggestions_user_data['ogenius_nds_db_normal_users_id'],$res_2017_institution_suggestions_user_data['ogenius_nds_db_normal_users_names']);  ?></td>
            </tr>
            <tr>
                <td>Province:</td>
                <td><?php echo "".$res_2017_institution_suggestions_user_data['ogenius_nds_db_normal_users_province'];  ?></td>
            </tr>

            <tr>
                <td>District:</td>
                <td><?php echo "".$res_2017_institution_suggestions_user_data['ogenius_nds_db_normal_users_district'];  ?></td>
            </tr>
            <tr>
                <td>Sector:</td>
                <td><?php echo "".$res_2017_institution_suggestions_user_data['ogenius_nds_db_normal_users_sector'];  ?></td>
            </tr>
        </table>
    </div>
</div>

<?php
}
}
break;
case 'all_the_details' :
//-------------------------
$sql_2017_institution_suggestions_user_data = "SELECT * FROM   ogenius_nds_db_normal_users WHERE     ogenius_nds_db_normal_users_id='{$theSender_id}' ORDER BY         ogenius_nds_db_normal_users_id DESC LIMIT 1";
if ($query_2017_institution_suggestions_user_data = $database -> query($sql_2017_institution_suggestions_user_data)) {
//---------------------
while ($res_2017_institution_suggestions_user_data = mysqli_fetch_array($query_2017_institution_suggestions_user_data)) {
?>
<div style="color: #CDCDCD;background: #333333;padding: 10px" class="startcolstart">
    <p>The suggestion is alive for <span style="color: gold;text-shadow: 1px 1px 1px #333333;"><?php echo "".time_to_sec($theSuggestion_acquire_date); ?></span></p>
    <p>Details about the sender below</p>
    <div style="">
        <div style="text-align: center;">
            <?php
                            if($res_2017_institution_suggestions_user_data['ogenius_nds_db_normal_users_api_log_face_goo_id']<1){
                             ?>
                            
                         <img i src="uploaded_images/<?php echo "" . (!empty($res_2017_institution_suggestions_user_data['ogenius_nds_db_normal_users_avatar'])) ? $res_2017_institution_suggestions_user_data['ogenius_nds_db_normal_users_avatar'] : "nds_avatar.png"; ?>" style="width: 150px;height: 150px;border-radius: 6px;" />
                    
                        <?php }else{ ?>
                          <img  src="<?php
                          if(!empty($res_2017_institution_suggestions_user_data['ogenius_nds_db_normal_users_avatar'])){
                           echo "" . (strlen($res_2017_institution_suggestions_user_data['ogenius_nds_db_normal_users_avatar'])>26) ?$res_2017_institution_suggestions_user_data['ogenius_nds_db_normal_users_avatar']:"uploaded_images/".$res_2017_institution_suggestions_user_data['ogenius_nds_db_normal_users_avatar'];                              
                          }else{
                               echo "" ."uploaded_images/"."nds_avatar.png";                              
                          }
                              
                               ?>" style="width: 150px;height: 150px;" />
                    
                            <?php } ?>           
            <!--<img src="uploaded_images/20170523122044.png" style="width: 150px;height: 150px;border-radius: 6px;" />
        -->
        </div>
        <table style="color: #CDCDCD;">
            <tr>
                <td>Firstname:</td>
                <td><?php echo "".$res_2017_institution_suggestions_user_data['ogenius_nds_db_normal_users_firstname'];  ?></td>
            </tr>
            <tr>
                <td>Lastname:</td>
                <td><?php echo "".$res_2017_institution_suggestions_user_data['ogenius_nds_db_normal_users_lastname'];  ?></td>
            </tr>
            <tr>
                <td>Username:</td>
                <td><?php echo "".checkMyPostingPrivacyStatus($res_2017_institution_suggestions_user_data['ogenius_nds_db_normal_users_id'],$res_2017_institution_suggestions_user_data['ogenius_nds_db_normal_users_names']);  ?></td>
            </tr>
            <tr>
                <td>Telephone:</td>
                <td><?php echo "".$res_2017_institution_suggestions_user_data['ogenius_nds_db_normal_users_tel'];  ?></td>
            </tr>
            <tr>
                <td>Profession:</td>
                <td><?php echo "".$res_2017_institution_suggestions_user_data['ogenius_nds_db_normal_users_profession'];  ?></td>
            </tr>
            <tr>
                <td>Email Address:</td>
                <td><?php echo "".$res_2017_institution_suggestions_user_data['ogenius_nds_db_normal_users_email'];  ?></td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td><?php echo "".$res_2017_institution_suggestions_user_data['ogenius_nds_db_normal_users_gender'];  ?></td>
            </tr>
            <tr>
                <td>Marital Status:</td>
                <td><?php echo "".$res_2017_institution_suggestions_user_data['ogenius_nds_db_normal_users_marital_status'];  ?></td>
            </tr>
            <tr>
                <td>Province:</td>
                <td><?php echo "".$res_2017_institution_suggestions_user_data['ogenius_nds_db_normal_users_province'];  ?></td>
            </tr>
            <tr>
                <td>District:</td>
                <td><?php echo "".$res_2017_institution_suggestions_user_data['ogenius_nds_db_normal_users_district'];  ?></td>
            </tr>
            <tr>
                <td>Sector:</td>
                <td><?php echo "".$res_2017_institution_suggestions_user_data['ogenius_nds_db_normal_users_sector'];  ?></td>
            </tr>
        </table>
    </div>
</div>

<?php
}
}
break;
}

}
}
?>
