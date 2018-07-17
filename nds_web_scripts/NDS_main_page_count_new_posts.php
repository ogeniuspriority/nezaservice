<?php

include ("../includes/conn/config.php");
include ("../includes/classes/database.php");
$main_page_latest_id = $_POST['main_page_latest_id'];

$Date = date("Y-m-d H:i:s");
//-------------
$reportFladCount = 0;
$_n_00 = 0;
$sql_Posts_Comments_COUNT = "SELECT * FROM  ogenius_nds_db_community_posts WHERE
	ogenius_nds_db_community_posts_id>'{$main_page_latest_id}' ";

if ($query_Posts_Comments_COUNT = $database -> query($sql_Posts_Comments_COUNT)) {
    while ($res__COUNT = mysqli_fetch_array($query_Posts_Comments_COUNT)) {
        //$reportFladCount = $res__COUNT['NEWPOSTS'];
        // echo $reportFladCount;
        $_n_00++;
    }

}
echo "".$_n_00;
?>
