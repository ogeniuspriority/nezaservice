<?php
include ("../includes/conn/config.php");
include ("../includes/classes/database.php");

//----

$queryID = $_POST['main_page_institution_RGB_TheQueryID'];
$myRGBid = $_POST['common_user_settings_the_id'];
$actOnThisQueryLogic = $_POST['theRgbForwardSpecs'];
$instiSearch = strtolower($_POST['instiSearch']);

//-------------------Trigger notifications before success-------------------------------
//echo "cool ma nigga!";
$sql_institutions_only = "SELECT   *
    FROM ogenius_nds_db_normal_users WHERE ogenius_nds_db_normal_users_user_vip_tag='1'
    AND ogenius_nds_db_normal_users_activated='1' AND
    ogenius_nds_db_normal_users_id!='{$myRGBid}'
    AND
    LOWER(ogenius_nds_db_normal_users_institution) LIKE \"%{$instiSearch}%\"
     ORDER BY  ogenius_nds_db_normal_users_institution ASC
            ";

if ($query_institutions_only = $database->query($sql_institutions_only)) {
    //---------------------
    echo "<form>";
    $bnm = 0;
    while ($res_institutions_only = mysqli_fetch_array($query_institutions_only)) {
        $institution_profile_page_institution = $res_institutions_only['ogenius_nds_db_normal_users_institution'];
        $institution_profile_page_website = $res_institutions_only['ogenius_nds_db_normal_users_website'];
        $institution_profile_page_email = $res_institutions_only['ogenius_nds_db_normal_users_email'];
        $institution_profile_page_province = $res_institutions_only['ogenius_nds_db_normal_users_province'];
        $institution_profile_page_district = $res_institutions_only['ogenius_nds_db_normal_users_district'];
        $institution_profile_page_sector = $res_institutions_only['ogenius_nds_db_normal_users_sector'];
        $institution_profile_page_motto = $res_institutions_only['ogenius_nds_db_normal_users_motto'];
        $institution_profile_page_username = $res_institutions_only['ogenius_nds_db_normal_users_names'];
        $indiv_social_goo = $res_institutions_only['ogenius_nds_db_normal_users_api_log_face_goo_id'];
        $indiv_avatar = $res_institutions_only['ogenius_nds_db_normal_users_avatar'];
        //--------------------
        $bnm++;
        ?>

        <div class="startrowstart" style="margin:3px auto;padding: 2px 4px; cursor: pointer; background-color: whitesmoke">
            <input type="radio" title="<?php echo "" . $res_institutions_only['ogenius_nds_db_normal_users_id']; ?>" id="<?php echo "" . $actOnThisQueryLogic; ?>" onchange="main_page_institution_forwardOrDelegateThisQuery(this,<?php echo "" . $queryID; ?>)" name="rgb_form_suggest<?php echo "" . $queryID; ?>"/>

            <div style="margin-left: 6px">
        <?php
        if ($indiv_social_goo < 1) {
            ?><img class="image48" src="uploaded_images/<?php echo "" . (!empty($indiv_avatar)) ? $indiv_avatar : "nds_avatar.png"; ?>">

                <?php } else { ?><img  src="<?php
            if (!empty($indiv_avatar)) {
                echo "" . (filter_var($indiv_avatar)) ? $indiv_avatar : "uploaded_images/" . $indiv_avatar;
            } else {
                echo "" . "uploaded_images/" . "nds_avatar.png";
            }
                    ?>"class="image48" /> <?php } ?>

            </div>
            <div class="startcolstart" style="margin-left: 6px">
                <label><b><?php echo "" . $res_institutions_only['ogenius_nds_db_normal_users_institution']; ?></b></label>
                <span>
                    Motto:<?php echo "" . $institution_profile_page_motto; ?>
                </span>
            </div>
        </div>

        <?php
    }
    echo "</form>";
}
?>
