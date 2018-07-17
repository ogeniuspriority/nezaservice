<?php

include ("../includes/conn/config.php");
include ("../includes/classes/database.php");

//----

$common_user_settings_the_id = $_POST['common_user_settings_the_id'];
//----------Go in the in the query comments find all my places where i am the intended to read--
$_all_queries_array = array();
//--find all the queries i sent--------------------------------------------------
$sql_all_queries = "SELECT   * 
    FROM ogenius_nds_db_rgb_query WHERE  ogenius_nds_db_rgb_query_query_provider='{$common_user_settings_the_id}'  
     ORDER BY  ogenius_nds_db_rgb_query_id  DESC 
            ";
$nber_all_queries = 0;
if ($query_all_queries = $database -> query($sql_all_queries)) {
    //---------------------
    while ($res_all_queries = mysqli_fetch_array($query_all_queries)) {
        $_all_queries_array[] = $res_all_queries['ogenius_nds_db_rgb_query_id'];
        $nber_all_queries++;

    }
}
//---------------find all suggestions i sent
$_all_suggestions_array = array();
//--find all the queries i sent--------------------------------------------------
$sql_all_suggestions = "SELECT   * 
    FROM ogenius_nds_db_suggestions WHERE  ogenius_nds_db_suggestions_provider_id='{$common_user_settings_the_id}'  
     ORDER BY  ogenius_nds_db_suggestions_id  DESC 
            ";
$nber_all_suggestions = 0;
if ($query_all_suggestions = $database -> query($sql_all_suggestions)) {
    //---------------------
    while ($res_all_suggestions = mysqli_fetch_array($query_all_suggestions)) {
        $_all_suggestions_array[] = $res_all_suggestions['ogenius_nds_db_suggestions_id'];
        $nber_all_suggestions++;

    }
}
//---------all the threads--
//----------find all threads that might have been forwarded to me-----
$_all_query_forward_array = array();
//--find all the queries i sent--------------------------------------------------
$sql_all_query_forward = "SELECT   * 
    FROM ogenius_nds_db_rgb_query_comment WHERE  ogenius_nds_db_rgb_query_comment_consulting_who='{$common_user_settings_the_id}'
    AND     ogenius_nds_db_rgb_query_comment_active='0' 
    AND     ogenius_nds_db_rgb_query_comment_external_visibility='0' 
    OR ogenius_nds_db_rgb_query_comment_sender_id='{$common_user_settings_the_id}'    
     ORDER BY  ogenius_nds_db_rgb_query_comment_id  DESC 
            ";
$nber_all_query_forward = 0;
if ($query_all_query_forward = $database -> query($sql_all_query_forward)) {
    //---------------------
    while ($res_all_query_forward = mysqli_fetch_array($query_all_query_forward)) {
        $_all_query_forward_array[] = $res_all_query_forward['ogenius_nds_db_rgb_query_comment_query_id'];
        $nber_all_query_forward++;

    }
}
//--------Check if the user is rgb or rgb official then sh----------
//--first operation


//----------all the query ids--
$_total_array = $_all_queries_array + $_all_suggestions_array + $_all_query_forward_array;
//-----------------------------------------------------------------------------------
//header("Content-type: application/json");
// print("{\"boo_data\":" . json_encode($_total_array) . "}");
//----------------------------
$g_var_look = 0;
foreach ($_total_array as $key => $value) {
    //$g_var_look .= "----" . $value;
    //--------------------
    $_array_of_used_ids=array();
    $_array_of_used_ids[0]=9;
    $_n=0;
    $sql_count_the_msgs = "SELECT * 
    FROM ogenius_nds_db_rgb_query_comment WHERE  ogenius_nds_db_rgb_query_comment_query_id='{$value}'         
   AND ogenius_nds_db_rgb_query_comment_read='0'
     ";

    if ($query_count_the_msgs = $database -> query($sql_count_the_msgs)) {
        //--------------------- 
         //$g_var_look =$g_var_look+ $database ->num_rows($query_count_the_msgs);       
        while ($res_count_the_msgs = mysqli_fetch_array($query_count_the_msgs)) {
            $_array_of_used_ids[$_n]=$res_count_the_msgs['ogenius_nds_db_rgb_query_comment_id'];
            $_n++;
          
        }
    }
    $g_var_look =$g_var_look+1; 
}
//---------
$chris=$nber_all_queries+$nber_all_suggestions+$nber_all_query_forward;
echo "$chris";
?>
