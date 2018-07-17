<?php
//------------get the audio file
$theAudio = $_POST['theAudio'];
?>
<div id="theAudio_90<?php echo "1"; ?>" class="col-md-12">
    <div class="startrowspace">
        <audio style="width: 80%" src="Community_Admin/NDS_suggested_audios/<?php echo "" . $theAudio; ?>" controls preload="">

        </audio>
        <button onclick="main_page_community_audio_removeThis2017(this)" name="theAudio_90<?php echo "1"; ?>" type="button" class="btn btn-danger centerrow">&times;</button>


    </div>
</div>