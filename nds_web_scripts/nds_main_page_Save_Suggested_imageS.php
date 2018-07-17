<?php
require_once ("../includes/conn/config.php");
?>
<?php
require_once ("../includes/classes/database.php");
?>
<?php
$theMainPageImgsTemp_store = $_POST['theMainPageImgsTemp_store'];
// save to db function image
//----

$myRemoteId = $_POST['MyRemoteId'];
$Suggestion_box_id = $_POST['Suggestion_box_id'];
$CaptionDescr = $_POST['CaptionDesc'];
$CaptionDescr = addslashes($CaptionDescr);
$date = date("Y-m-d H:i:s");

$outputRegCreds = array();
$sql_NDS_suggest = "INSERT INTO ogenius_nds_db_suggestions
(ogenius_nds_db_suggestions_box_id,ogenius_nds_db_suggestions_type, ogenius_nds_db_suggestions_provider_id,
ogenius_nds_db_suggestions_data,ogenius_nds_db_suggestions_regdate, ogenius_nds_db_suggestions_support_text
        )VALUES
             ('{$Suggestion_box_id}','image','{$myRemoteId}',
             '{$theMainPageImgsTemp_store}','{$date}','{$CaptionDescr}') ";
if ($query_NDS_suggest = $database -> query($sql_NDS_suggest)) {
    //--------------------------------------------------
    echo "1000";

} else {
    echo "failure!";
}
?>