<?php
require_once ("../includes/conn/config.php");
?>
<?php
require_once ("../includes/classes/database.php");
?>
<?php
//-----------
$tag = $_POST['tag'];
$sql_avatar_trick = "SELECT * FROM  ogenius_nds_db_normal_users WHERE     ogenius_nds_db_normal_users_institution LIKE \"{$tag}\" 
AND ogenius_nds_db_normal_users_user_vip_tag='1'
AND     ogenius_nds_db_normal_users_activated='1'
ORDER BY ogenius_nds_db_normal_users_id DESC LIMIT 1";
if ($query_avatar_trick = $database -> query($sql_avatar_trick)) {
    //---------------------
    while ($res_avatar_trick = mysqli_fetch_array($query_avatar_trick)) {
        echo  $res_avatar_trick['ogenius_nds_db_normal_users_avatar'];
    }
}

?>