<?php
require_once ("../includes/conn/config.php");
?>
<?php
require_once ("../includes/classes/database.php");
?>
<!--        -->
<?php
$companyId = $_POST['companyId'];
$main_page_suggestion_type = $_POST['main_page_suggestToTheCommunity'];
$sqlNDS_suggestion_boxes = "SELECT 
ogenius_nds_db_community.ogenius_nds_db_community_institution_deal_status,
ogenius_nds_db_community.ogenius_nds_db_community_id,
ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_institution,
ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_avatar,
ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_motto,
ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id

 FROM ogenius_nds_db_community INNER JOIN ogenius_nds_db_normal_users
 ON ogenius_nds_db_community.ogenius_nds_db_community_parent_id=ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id
 WHERE  ogenius_nds_db_community.ogenius_nds_db_community_institution_deal_status='1'
 AND ogenius_nds_db_community.ogenius_nds_db_community_id='{$companyId}'
  ORDER BY ogenius_nds_db_community.ogenius_nds_db_community_id DESC";

//-----------------------------Which type of 
?>
<form style="width: 100%">
    <?php
    if ($queryNDS_suggestion_boxes = $database->query($sqlNDS_suggestion_boxes)) {
        //---------------------
        while ($resNDS_suggestion_boxes = mysqli_fetch_array($queryNDS_suggestion_boxes)) {
            ?>
            <div id="mainpage_business_theOne<?php echo "" . $main_page_suggestion_type . $resNDS_suggestion_boxes['ogenius_nds_db_community_id']; ?>" class="startrowspace" style="margin: 4px auto">
                <div class="startrow">
                    <img class="image48" style="border-radius: 50%; margin-right: 8px" src="uploaded_images/<?php echo "" . ($resNDS_suggestion_boxes['ogenius_nds_db_normal_users_avatar'] != '') ? $resNDS_suggestion_boxes['ogenius_nds_db_normal_users_avatar'] : "nds_avatar.png"; ?>">
                    <span>
                        <b> <?php echo "" . $resNDS_suggestion_boxes['ogenius_nds_db_normal_users_institution']; ?></b><br>
                        <?php echo "" . $resNDS_suggestion_boxes['ogenius_nds_db_normal_users_motto']; ?>
                    </span>
                </div>

                <button type="button" id="<?php echo "" . $resNDS_suggestion_boxes['ogenius_nds_db_community_id']; ?>" name="mainpage_business_theOne<?php echo "" . $main_page_suggestion_type . $resNDS_suggestion_boxes['ogenius_nds_db_community_id']; ?>" onclick="main_page_suggestToCommunity_removeThisFromVisibility(this)" class="btn btn-danger">&times;</button>

            </div>
            <hr>

            <?php
        }
    }
    ?>
</form>
