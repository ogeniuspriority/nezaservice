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
//$queryType_Array = explode("~", $queryType);
$parent_Q_S_id_Array = explode("~", $parent_Q_S_id);
//--------------------
$date = date("Y-m-d H:i:s");

//------query--------Greater than maximum----------------
//-----------------find all my tag identifier--
$sql_tag_identifier = "SELECT * FROM ogenius_nds_db_tags_identifiers
WHERE ogenius_nds_db_tags_identifiers_id_user='{$MYRemoteId}'
AND ogenius_nds_db_tags_identifiers_status='1'
ORDER BY ogenius_nds_db_tags_identifiers_id DESC LIMIT 1";
//-------------
$tagIdentifier = array();
$query_tag_identifier = $database -> query($sql_tag_identifier);
while ($row_tag_identifier = mysqli_fetch_array($query_tag_identifier)) {
    $tagIdentifier[] = $row_tag_identifier['ogenius_nds_db_tags_identifiers_tag'];
}
//-------find tag keyword-------
$sql_tag_keyword = "SELECT * FROM ogenius_nds_db_tags_identifiers_keyword
WHERE ogenius_nds_db_tags_identifiers_keyword_id_user='{$MYRemoteId}'
AND ogenius_nds_db_tags_identifiers_keyword_status='1'
";
//-------------
$tagKeyword = array();
$query_tag_keyword = $database -> query($sql_tag_keyword);
while ($row_tag_keyword = mysqli_fetch_array($query_tag_keyword)) {
    $tagKeyword[] = $row_tag_keyword['ogenius_nds_db_tags_identifiers_keyword_keyword'];
}
//------------
$OverallTag = array();
//----------Check if keyword is not empty--
if (sizeof($tagKeyword) == 0) {
    //------find the username--
    $sql_tag_username = "SELECT * FROM ogenius_nds_db_normal_users
WHERE ogenius_nds_db_normal_users_id='{$MYRemoteId}'
AND     ogenius_nds_db_normal_users_activated='1'
ORDER BY ogenius_nds_db_normal_users_id DESC LIMIT 1";
    //-------------
    $specialW = "";
    $query_tag_username = $database -> query($sql_tag_username);
    while ($row_tag_username = mysqli_fetch_array($query_tag_username)) {
        $specialW = $row_tag_username['ogenius_nds_db_normal_users_names'];
    }
    //--------------------
    $OverallTag[0] = $specialW;

} else {
    //--assign each tag identifier to keyword--
    $w = 0;
    for ($i = 0; $i < sizeof($tagIdentifier); $i++) {
        for ($n = 0; $n < sizeof($tagKeyword); $n++) {
            $OverallTag[$w] =  $tagKeyword[$n];
        }
        $w++;
    }
}
//---------------Concatenate to produce a real tag--
$output_notif_typeA = array();
//---------------
$sql = array('2>7');
// Stop errors when $words is empty
foreach ($OverallTag as $word) {
    $sql[] = "ogenius_nds_db_community_posts_postdata LIKE '%" . $word . "%'";
}
//-----------------------------------------------
//---------------------GET ALL MY TAGS--------------------------
$AllMyPostsTags_posts_id_array = array();
$AllMyPostsTags_poster_id_array = array();
//-------------------
$sql_AllMyPostsTags = "SELECT * FROM ogenius_nds_db_community_posts
                  WHERE 
                   " . implode(" OR ", $sql) . " 
                             
               ";
$query_AllMyPostsTags = $database -> query($sql_AllMyPostsTags);
while ($row_AllMyPostsTags = mysqli_fetch_array($query_AllMyPostsTags)) {
    $AllMyPostsTags_posts_id_array[] = $row_AllMyPostsTags['ogenius_nds_db_community_posts_id'];
    $AllMyPostsTags_poster_id_array[] = $row_AllMyPostsTags['ogenius_nds_db_community_posts_poster_id'];

}
//-------------
if (sizeof($AllMyPostsTags_poster_id_array) == 0) {
    $AllMyPostsTags_posts_id_array[] = 0;
    $AllMyPostsTags_poster_id_array[] = 0;
}
//------------------------
$sql_observe_notif = "SELECT * FROM ogenius_nds_db_community_posts
 LEFT JOIN ogenius_nds_db_normal_users
            ON ogenius_nds_db_community_posts.ogenius_nds_db_community_posts_poster_id=ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id 
                WHERE  
                  ogenius_nds_db_community_posts_id NOT IN (" . implode(',', $remoteIds_Array) . ")                 
                AND ogenius_nds_db_community_posts_active='0'
                 AND     ogenius_nds_db_community_posts_poster_id!='{$MYRemoteId}'
                AND         ogenius_nds_db_community_posts_id  IN (" . implode(',', $AllMyPostsTags_posts_id_array) . ") 
                
                             
               ";
$query_observe_notif = $database -> query($sql_observe_notif);
while ($row_observe_notif = mysqli_fetch_array($query_observe_notif)) {
    $output_notif_typeA[] = $row_observe_notif;
}
//-----------------------
header("Content-type: application/json");
print("{\"Nds Notif P A\":" . json_encode($output_notif_typeA) . "}");
?>