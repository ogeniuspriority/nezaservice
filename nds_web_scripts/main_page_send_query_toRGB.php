<?php

include ("../includes/conn/config.php");
include ("../includes/classes/database.php");

$query = $_POST['query'];
$local_query_id = 0;
$myId = $_POST['common_user_settings_the_id'];
$queryOrientation = $_POST['queryOrientation'];
//--------------------associate the real tags now to the orientation--2017
$theNewQuestOrient;
switch($queryOrientation) {
    case "VUP" :
        $theNewQuestOrient = "VUP";
        break;
    case "IBIBAZO BY' ABATURAGE" :
        $theNewQuestOrient = "IBIBAZO BY'ABATURAGE";
        break;
    case "UMURENGE SACCO" :
        $theNewQuestOrient = "UMURENGE SACCO";
        break;
    case "GIRINKA" :
        $theNewQuestOrient = "Girinka";
        break;
    case "MUTUELLE" :
        $theNewQuestOrient = "MUTUELLE DE SANTE";
        break;
}

$query = addslashes($query);
$theNewQuestOrient = addslashes($theNewQuestOrient);

$Date = date("Y-m-d H:i:s");
$sqlNDSquery = "INSERT INTO ogenius_nds_db_rgb_query
            (ogenius_nds_db_rgb_query_query,ogenius_nds_db_rgb_query_date,
            ogenius_nds_db_rgb_query_query_provider,ogenius_nds_db_rgb_query_orientation,
            ogenius_nds_db_rgb_query_local_query_id,ogenius_nds_db_rgb_query_sent
            )VALUES
            ('{$query}','{$Date}','{$myId}','{$theNewQuestOrient}','{$local_query_id}','1') ";
if ($resNDS_reg = $database -> query($sqlNDSquery)) {

    echo "1000";

} else {
    echo "" . mysql_error();
}
?>
