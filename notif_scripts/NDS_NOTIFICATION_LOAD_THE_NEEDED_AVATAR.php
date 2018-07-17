<?php
require_once ("../includes/conn/config.php");
?>
<?php
require_once ("../includes/classes/database.php");
?>
<?php
$database = new mysqldatabase();
//-------------------
$notif_originator_remote_id = $_POST['notif_originator_remote_id'];
$notif_type_orient = $_POST['notif_type_orient'];
switch ($notif_type_orient) {
    case 'notif_using_query' :
        //------------------
        $Avatar_0 = "";
        $sql_findMY_Avatar = "SELECT * FROM  ogenius_nds_db_rgb_query_comment 
        LEFT JOIN ogenius_nds_db_normal_users ON
        ogenius_nds_db_rgb_query_comment.ogenius_nds_db_rgb_query_comment_sender_id=ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id
        WHERE  
        ogenius_nds_db_rgb_query_comment_suggestOrQuestion='query'
        AND ogenius_nds_db_rgb_query_comment_id='{$notif_originator_remote_id}'
        ";
        if ($query_findMY_Avatar = $database -> query($sql_findMY_Avatar)) {
            //---------------------
            while ($res_findMY_Avatar = mysqli_fetch_array($query_findMY_Avatar)) {
                $Avatar_0 = $res_findMY_Avatar['ogenius_nds_db_normal_users_avatar'];

            }
        }
        echo "" . $Avatar_0;

        //-------------------
        break;
    case 'notif_using_suggestion' :
        //------------------
        $Avatar_0 = "";
        $sql_findMY_Avatar = "SELECT * FROM  ogenius_nds_db_rgb_query_comment 
        LEFT JOIN ogenius_nds_db_normal_users ON
        ogenius_nds_db_rgb_query_comment.ogenius_nds_db_rgb_query_comment_sender_id=ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id
        WHERE  
        ogenius_nds_db_rgb_query_comment_suggestOrQuestion='suggestion'
        AND ogenius_nds_db_rgb_query_comment_id='{$notif_originator_remote_id}'
        ";
        if ($query_findMY_Avatar = $database -> query($sql_findMY_Avatar)) {
            //---------------------
            while ($res_findMY_Avatar = mysqli_fetch_array($query_findMY_Avatar)) {
                $Avatar_0 = $res_findMY_Avatar['ogenius_nds_db_normal_users_avatar'];

            }
        }
        echo "" . $Avatar_0;

        //-------------------
        break;
    case 'notif_using_cmnts_on_posts' :
        //------------------
        $Avatar_0 = "";
        $sql_findMY_Avatar = "SELECT * FROM  ogenius_nds_db_community_posts_comments 
        LEFT JOIN ogenius_nds_db_normal_users ON
        ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_commentator_id=ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id
        WHERE   ogenius_nds_db_community_posts_comments_id='{$notif_originator_remote_id}'
        ";
        if ($query_findMY_Avatar = $database -> query($sql_findMY_Avatar)) {
            //---------------------
            while ($res_findMY_Avatar = mysqli_fetch_array($query_findMY_Avatar)) {
                $Avatar_0 = $res_findMY_Avatar['ogenius_nds_db_normal_users_avatar'];

            }
        }
        echo "" . $Avatar_0;

        //-------------------
        break;
    case 'notif_using_tags_on_posts' :
        //------------------
        $Avatar_0 = "";
        $sql_findMY_Avatar = "SELECT * FROM  genius_nds_db_community_posts 
        LEFT JOIN ogenius_nds_db_normal_users ON
        ogenius_nds_db_community_posts.ogenius_nds_db_community_posts_poster_id=ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id
        WHERE       ogenius_nds_db_community_posts_id='{$notif_originator_remote_id}'
        ";
        if ($query_findMY_Avatar = $database -> query($sql_findMY_Avatar)) {
            //---------------------
            while ($res_findMY_Avatar = mysqli_fetch_array($query_findMY_Avatar)) {
                $Avatar_0 = $res_findMY_Avatar['ogenius_nds_db_normal_users_avatar'];

            }
        }

        echo "" . $Avatar_0;

        //-------------------
        break;
    case 'notif_using_tags_on_comments' :
        //------------------
        $Avatar_0 = "";
        $sql_findMY_Avatar = "SELECT * FROM  ogenius_nds_db_community_posts_comments 
        LEFT JOIN ogenius_nds_db_normal_users ON
        ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_commentator_id=ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id
        WHERE           ogenius_nds_db_community_posts_comments_id='{$notif_originator_remote_id}'
        ";
        if ($query_findMY_Avatar = $database -> query($sql_findMY_Avatar)) {
            //---------------------
            while ($res_findMY_Avatar = mysqli_fetch_array($query_findMY_Avatar)) {
                $Avatar_0 = $res_findMY_Avatar['ogenius_nds_db_normal_users_avatar'];
            }
        }

        echo "" . $Avatar_0;

        //-------------------
        break;
    case 'notif_using_keyword_on_posts' :
        //------------------
        $Avatar_0 = "";
        $sql_findMY_Avatar = "SELECT * FROM  ogenius_nds_db_community_posts 
        LEFT JOIN ogenius_nds_db_normal_users ON
        ogenius_nds_db_community_posts.ogenius_nds_db_community_posts_poster_id=ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id
        WHERE           ogenius_nds_db_community_posts_id='{$notif_originator_remote_id}'
        ";
        if ($query_findMY_Avatar = $database -> query($sql_findMY_Avatar)) {
            //---------------------
            while ($res_findMY_Avatar = mysqli_fetch_array($query_findMY_Avatar)) {
                $Avatar_0 = $res_findMY_Avatar['ogenius_nds_db_normal_users_avatar'];
            }
        }

        echo "" . $Avatar_0;

        //-------------------
        break;
    case 'notif_using_keyword_on_comments' :
        //------------------
        $Avatar_0 = "";
        $sql_findMY_Avatar = "SELECT * FROM  ogenius_nds_db_community_posts_comments 
        LEFT JOIN ogenius_nds_db_normal_users ON
        ogenius_nds_db_community_posts_comments.ogenius_nds_db_community_posts_comments_commentator_id=ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id
        WHERE           ogenius_nds_db_community_posts_comments_id='{$notif_originator_remote_id}'
        ";
        if ($query_findMY_Avatar = $database -> query($sql_findMY_Avatar)) {
            //---------------------
            while ($res_findMY_Avatar = mysqli_fetch_array($query_findMY_Avatar)) {
                $Avatar_0 = $res_findMY_Avatar['ogenius_nds_db_normal_users_avatar'];
            }
        }
        echo "" . $Avatar_0;

        //-------------------
        break;
}
?>