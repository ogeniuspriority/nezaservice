
    <?php

include ("includes/conn/config.php");
include ("includes/classes/database.php");
//$comment_data = $_POST['comment_data'];
//$commentator_id = $_POST['commentator_id'];
$parent_post_id = 296;
$query_orientation = "suggestion";
$last_id = 0;

$Date = date("Y-m-d H:i:s");
//-------------------
$outputSuggestions = array();

//------------Sanitize the fields--
if ($query_orientation == "suggestion") {
    $in_000="cyuma";
    $sqlNDS_user = "SELECT * FROM ogenius_nds_db_rgb_query_comment
    LEFT JOIN ogenius_nds_db_normal_users ON
    ogenius_nds_db_rgb_query_comment.ogenius_nds_db_rgb_query_comment_sender_id=ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id
     WHERE 
ogenius_nds_db_rgb_query_comment.ogenius_nds_db_rgb_query_comment_active='0'
AND ogenius_nds_db_rgb_query_comment.ogenius_nds_db_rgb_query_comment_suggestOrQuestion='suggestion'
AND ogenius_nds_db_rgb_query_comment.ogenius_nds_db_rgb_query_comment_id>'$last_id'
 AND ogenius_nds_db_rgb_query_comment.ogenius_nds_db_rgb_query_comment_query_id='{$parent_post_id}' ";
    if ($queryNDS_user = $database -> query($sqlNDS_user)) {
        while ($resG = $database -> fetch_array($queryNDS_user)) {
            $outputSuggestions[] = $resG;

        }
    }

} else {
    $sqlNDS_user = "SELECT * FROM ogenius_nds_db_rgb_query_comment
    LEFT JOIN ogenius_nds_db_normal_users ON
    ogenius_nds_db_rgb_query_comment.ogenius_nds_db_rgb_query_comment_sender_id= ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id
     WHERE 
ogenius_nds_db_rgb_query_comment.ogenius_nds_db_rgb_query_comment_active='0'
AND ogenius_nds_db_rgb_query_comment.ogenius_nds_db_rgb_query_comment_suggestOrQuestion='query'
AND ogenius_nds_db_rgb_query_comment.ogenius_nds_db_rgb_query_comment_id>'$last_id'
 AND ogenius_nds_db_rgb_query_comment.ogenius_nds_db_rgb_query_comment_query_id='{$parent_post_id}'  ";
    if ($queryNDS_user = $database -> query($sqlNDS_user)) {
        while ($resG = $database -> fetch_array($queryNDS_user)) {
            $outputSuggestions[] = $resG;

        }
    }

}

//-----CLOSE CONNECTION
header("Content-type: application/json");
print("{\"Comments\":" . json_encode($outputSuggestions) . "}");


//-----
?>
