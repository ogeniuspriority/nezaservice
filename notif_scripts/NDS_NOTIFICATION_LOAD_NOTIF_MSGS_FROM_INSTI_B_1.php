<?php
require_once ("../includes/conn/config.php");
?>
<?php
require_once ("../includes/classes/database.php");
?>
<?php
$database = new mysqldatabase();
//-------------------
$remoteId = $_POST['streamOfIds_queries'];
$queryType = $_POST['streamOfOrients_queries'];
$parent_Q_S_id = $_POST['streamOfSummary_queries'];
$MYRemoteId = $_POST['MYRemoteId'];
//--------
//----------------sanitize the datastream----------------
if ($remoteId == "") {
    $remoteId = "0";
}
if ($queryType == "") {
    $queryType = "0";
}
if ($parent_Q_S_id == "") {
    $parent_Q_S_id = "0";
}
//--------
$remoteIds_Array = explode("~", $remoteId);
$queryType_Array = explode("~", $queryType);
$parent_Q_S_id_Array = explode("~", $parent_Q_S_id);
//--------------------
$date = date("Y-m-d H:i:s");
//----------------------
$output_notif_typeA = array();
//------query--------Greater than maximum----------------
//-----------------find all my queries
$myQueries = array();
//----------------
$sql_AllMyQueries = "SELECT * FROM ogenius_nds_db_suggestions
WHERE       ogenius_nds_db_suggestions_provider_id='{$MYRemoteId}'
";
$query_AllMyQueries = $database -> query($sql_AllMyQueries);
while ($row_AllMyQueries = mysqli_fetch_array($query_AllMyQueries)) {
    $myQueries[] = $row_AllMyQueries['ogenius_nds_db_suggestions_id'];
}

$sql_observe_notif = "SELECT * FROM ogenius_nds_db_rgb_query_comment
 LEFT JOIN ogenius_nds_db_normal_users
            ON ogenius_nds_db_rgb_query_comment.ogenius_nds_db_rgb_query_comment_sender_id=ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id 
                WHERE   ogenius_nds_db_rgb_query_comment_query_id NOT IN (" . implode(',', $parent_Q_S_id_Array) . ")
                 AND ogenius_nds_db_rgb_query_comment_id NOT IN (" . implode(',', $remoteIds_Array) . ")
                 AND ogenius_nds_db_rgb_query_comment_query_id  IN (" . implode(',', $myQueries) . ")
                AND ogenius_nds_db_rgb_query_comment_active='0' 
                AND ogenius_nds_db_rgb_query_comment_suggestOrQuestion='suggestion'
                AND ogenius_nds_db_rgb_query_comment_sender_id !='{$MYRemoteId}'
                AND ogenius_nds_db_rgb_query_comment_external_visibility='0'
               ";
$query_observe_notif = $database -> query($sql_observe_notif);
while ($row_observe_notif = mysqli_fetch_array($query_observe_notif)) {
    $output_notif_typeA[] = $row_observe_notif;
}
//-----------------------
header("Content-type: application/json");
print("{\"Nds Notif A\":" . json_encode($output_notif_typeA) . "}");
?>