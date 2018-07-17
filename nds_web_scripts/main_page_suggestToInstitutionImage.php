<?php
require_once ("../../includes/conn/config.php");
?>
<?php
require_once ("../../includes/classes/database.php");
?>

<?php

if (is_uploaded_file($_FILES['uploadedfile']['tmp_name'])) {
    $folder = "../NDS_suggested_videos/";
    $file = basename($_FILES['uploadedfile']['name']);

    //-------------
    $get_array = array();
    $cyuma = "cyuma=" . $file;
    parse_str($cyuma, $get_array);

    //---
    $Date = date("Y-m-d H:i:s");
    $target_path = $folder . $get_array['cyuma'];
    //----
    $filename = $get_array['cyuma'];
    $myRemoteId = $get_array['myRemoteId'];
    $Suggestion_box_id = $get_array['Suggestion_box_id'];
    $CaptionDescr = $get_array['CaptionDescr'];
    $CaptionDescr=addslashes($CaptionDescr);
    $date = date("Y-m-d H:i:s");

    if (move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {

        $outputRegCreds = array();
        $sql_NDS_suggest = "INSERT INTO ogenius_nds_db_suggestions
(ogenius_nds_db_suggestions_box_id,ogenius_nds_db_suggestions_type, ogenius_nds_db_suggestions_provider_id,
ogenius_nds_db_suggestions_data,ogenius_nds_db_suggestions_regdate, ogenius_nds_db_suggestions_support_text
        )VALUES
             ('{$Suggestion_box_id}','video','{$myRemoteId}',
             '{$filename}','{$date}','{$CaptionDescr}') ";
        if ($query_NDS_suggest = $database -> query($sql_NDS_suggest)) {
            //--------------------------------------------------
            echo "1000";

        } else {
            echo "failure!";
        }

    } else {
        echo "upload received! but process failed";
    }

} else {
    echo "upload failure ! Nothing was uploaded";
}
?>
