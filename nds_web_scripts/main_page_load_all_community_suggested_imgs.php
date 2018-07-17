<?php
$theMainPageImgsTemp_store = $_POST['theMainPageImgsTemp_store'];
$theMainPageImgsTemp_store_IMGs_array = explode("~", $theMainPageImgsTemp_store);
//-------------loop throuth all the images array----------
for ($i = 0; $i < sizeof($theMainPageImgsTemp_store_IMGs_array); $i++) {
    ?>
    <!--    <div id="imgBull<?php echo "" . $i; ?>" style="width: 48%;height: 140px;float: left;margin-top:8px;">
            <img src="Community_Admin/NDS_suggested_images/<?php echo "" . $theMainPageImgsTemp_store_IMGs_array[$i]; ?>" style="width: 80%;text-align: center;height: 90%;border-radius: 3px;box-shadow: 2px 2px 2px #333333;" /></br>
            <input style="margin: auto;" onclick="main_page_commununity_img_suggest_removeThisOneFromArray(this)" id="<?php echo "" . $theMainPageImgsTemp_store_IMGs_array[$i]; ?>" name="imgBull<?php echo "" . $i; ?>" type="button" value="X" class="btn" />
            </br>

        </div>-->
<div id="imgBull<?php echo "" . $i; ?>" style="height: auto; width: 100%" class="col-md-12 startcolstart">


        <button  onclick="main_page_commununity_img_suggest_removeThisOneFromArray(this)" id="<?php echo "" . $theMainPageImgsTemp_store_IMGs_array[$i]; ?>" name="imgBull<?php echo "" . $i; ?>" type="button" class="btn btn-danger image24">
            &times;
        </button>

        <img src="Community_Admin/NDS_suggested_images/<?php echo "" . $theMainPageImgsTemp_store_IMGs_array[$i]; ?>" class="img-thumbnail" style="" />

    </div>

    <?php
}
?>