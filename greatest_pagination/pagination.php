<?php
include ('db.php');
$limit=120;
if (isset($_GET["page"])) { $page = $_GET["page"];
} else { $page = 1;
};
$start_from = ($page - 1) * $limit;

$sql = "SELECT * FROM  ogenius_nds_db_community_posts ORDER BY id ASC LIMIT $start_from, $limit";
$rs_result = mysqli_query($conn, $sql);
?>

<?php  
while ($row = mysqli_fetch_assoc($rs_result)) {
    
?>  
            <tr>  
            <td><?php echo $row["ogenius_nds_db_community_posts_postdata"]; ?></td>  
            <td><?php echo $row["ogenius_nds_db_community_posts_poster_names"]; ?></td>  
            <td><?php echo $row["ogenius_nds_db_community_posts_views"]; ?></td>  
            </tr>  
<?php
                };
            ?>