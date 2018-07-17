<?php

include ("../includes/conn/config.php");
include ("../includes/classes/database.php");

//----

switch($_POST['theMyChoiceResolution']) {
    case "inprogress" :
        $queryId_34 = $_POST['queryId_34'];

        $date = date("Y-m-d H:i:s");
        //--------------------------------------------
        $sql_NDS_suggest = "UPDATE ogenius_nds_db_rgb_query SET 
ogenius_nds_db_rgb_query_commented_on='4' WHERE
ogenius_nds_db_rgb_query_id='{$queryId_34}'";
        if ($query_NDS_suggest = $database -> query($sql_NDS_suggest)) {
            //--------------------------------------------------
            echo "1000";

        } else {
            echo "failure!";
        }
        break;
    case "pending" :
        $queryId_34 = $_POST['queryId_34'];

        $date = date("Y-m-d H:i:s");
        //--------------------------------------------
        $sql_NDS_suggest = "UPDATE ogenius_nds_db_rgb_query SET 
ogenius_nds_db_rgb_query_commented_on='2' WHERE
ogenius_nds_db_rgb_query_id='{$queryId_34}'";
        if ($query_NDS_suggest = $database -> query($sql_NDS_suggest)) {
            //--------------------------------------------------
            echo "1000";

        } else {
            echo "failure!";
        }
        break;
    case "resolved" :
        $queryId_34 = $_POST['queryId_34'];

        $date = date("Y-m-d H:i:s");
        //--------------------------------------------
        $sql_NDS_suggest = "UPDATE ogenius_nds_db_rgb_query SET 
ogenius_nds_db_rgb_query_commented_on='1' WHERE
ogenius_nds_db_rgb_query_id='{$queryId_34}'";
        if ($query_NDS_suggest = $database -> query($sql_NDS_suggest)) {
            //--------------------------------------------------
            echo "1000";

        } else {
            echo "failure!";
        }
        break;
    case "unsatisfied" :
        $queryId_34 = $_POST['queryId_34'];
        $observerData = $_POST['observerData'];
        $observerData = addslashes($observerData);
        $date = date("Y-m-d H:i:s");
        //--------------------------------------------
        $sql_NDS_suggest = "UPDATE ogenius_nds_db_rgb_query SET 
ogenius_nds_db_rgb_query_commented_on='3',
ogenius_nds_db_rgb_query_cmnt_data_observe='{$observerData}' WHERE
ogenius_nds_db_rgb_query_id='{$queryId_34}'";
        if ($query_NDS_suggest = $database -> query($sql_NDS_suggest)) {
            //--------------------------------------------------
            echo "1000";

        } else {
            echo "failure!";
        }
        break;
}
?>
