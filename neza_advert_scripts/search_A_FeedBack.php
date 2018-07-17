<?php
				require_once ("../includes/conn/config.php");
			?>
<?php
require_once ("../includes/classes/database.php");
?>

<?php

$tilte = $_POST['dataToSearch'];


$sql = "SELECT boo_users.boo_users_username,boo_feedback_s.boo_feedback_s_message FROM boo_feedback_s 
 INNER JOIN boo_users ON boo_feedback_s.boo_feedback_s_sender=boo_users.boo_users_id
 WHERE LOWER(boo_feedback_s_message) LIKE '%" . strtolower($tilte) . "%'
 ORDER BY boo_feedback_s_id DESC LIMIT 3 ";
$query = $database -> query($sql);
$counter = 0;
while ($res = $database -> fetch_array($query)) {

?>
		<p style="float:left;width:250px;height:100px;overflow-y:scroll;;border: 2px solid #000000"><label style="color: green;font-size:17px;"><?php echo "" . $res['boo_users_username']; ?></label> said : <label style="background: skyblue"><?php echo "" . $res['boo_feedback_s_message']; ?></label></p>
						
<?php

$counter++;

}
if ($counter == 0) {
echo "<label style='color:#B96F6F;font-size:13px;'>No Results !</label>";
}
?>
