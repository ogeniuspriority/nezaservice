<h4>Commentators below:</h4>
<div id="queries_followUp" class="startcolstart"style="margin-top: 20px;">
    <?php

    include ("../includes/conn/config.php");
    include ("../includes/classes/database.php");
    include ("../includes/functions.php");
    include ("../includes/timeToSec.php");

    //-----------------------
    $common_user_settings_the_id = $_POST['common_user_settings_the_id'];
    if(renderTellIfCommonUser($common_user_settings_the_id)){
    $queryId_34 = $_POST['queryId_34'];

    //echo "".$common_user_settings_the_id."--".$queryId_34;
    $sql_queries = "SELECT DISTINCT ogenius_nds_db_rgb_query_comment_sender_id,ogenius_nds_db_normal_users_names,ogenius_nds_db_normal_users_id  FROM ogenius_nds_db_rgb_query_comment
LEFT JOIN ogenius_nds_db_normal_users 
ON ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id=ogenius_nds_db_rgb_query_comment.ogenius_nds_db_rgb_query_comment_sender_id
 WHERE
ogenius_nds_db_rgb_query_comment_query_id='{$queryId_34}' AND
ogenius_nds_db_rgb_query_comment_sender_id!='{$common_user_settings_the_id}'
AND ogenius_nds_db_rgb_query_comment_suggestOrQuestion='query'";

    if ($query_queries = $database -> query($sql_queries)) {
        //---------------------
        while ($res_queries = mysqli_fetch_array($query_queries)) {
            $name = $res_queries['ogenius_nds_db_normal_users_names'];
            $id_ = $res_queries['ogenius_nds_db_normal_users_id'];
            //-----$queryId_34----
            
            echo "<fieldset>
        <legend>" . checkMyPostingPrivacyStatus($id_, $name) . "</legend>
    </fieldset>";
            ?>
    
    <div class="startcolstart"style="height: auto; max-height: 100px;overflow-y: auto">
                <?php
                
    $sql_queries_comments_2017 = "SELECT * FROM ogenius_nds_db_rgb_query_comment WHERE
    ogenius_nds_db_rgb_query_comment_sender_id='{$id_}' 
    AND ogenius_nds_db_rgb_query_comment_query_id='{$queryId_34}'
    ORDER BY ogenius_nds_db_rgb_query_comment_id DESC
    ";

    if ($query_queries_comments_2017 = $database -> query($sql_queries_comments_2017)) {
        //---------------------
        while ($res_queries_comments_2017 = mysqli_fetch_array($query_queries_comments_2017)) {
            ?>
            <table style="padding:6px;box-shadow: 2px 2px #333333;border-bottom: 1px solid gray; width: 100%;margin-top: 1%;">
                <tr>
                    <td><?php echo "".activateUrlStringsw($res_queries_comments_2017['ogenius_nds_db_rgb_query_comment_comment']); ?></td>
                    <td><?php echo "".time_to_sec($res_queries_comments_2017['ogenius_nds_db_rgb_query_comment_regdate']); ?></td>
                </tr>
            </table>
            
            <?php
            
            
        }
        }
                
                
                
                ?>
            </div>
            <?php

        }
    }}else{
        echo "You are part of the institution!";
    }
?>
</div>