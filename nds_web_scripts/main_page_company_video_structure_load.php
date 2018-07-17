<?php
$theVideoN = $_POST['theVideoN'];
?>
<!--<div id="sidisd9_video_suggest" style="width: 48%;margin-bottom:20px;margin-top:8px;margin: auto;">
    <video style="width: 80%" src="Community_Admin/NDS_suggested_videos/<?php echo "" . $theVideoN; ?>" controls preload="">

    </video>
    <input style="margin: auto;" name="sidisd9_video_suggest" onclick="main_page_community_video_removeThis2017(this)" type="button" value="X" class="btn" />
    </br>

</div>-->
<div id="sidisd9_video_suggest" >
    <button name="sidisd9_video_suggest" onclick="main_page_community_video_removeThis2017(this)" type="button" class="btn btn-danger" >
        &times;
    </button>
    <div>
        <video class="img-thumbnail" src="Community_Admin/NDS_suggested_videos/<?php echo "" . $theVideoN; ?>" controls preload="">

        </video>
    </div>
</div>