<?php
require_once 'includes/header.php';
?>
<?php
require_once ("../includes/conn/config.php");
?>
<?php
require_once ("../includes/classes/database.php");

if(!isset($_GET['urlset'])){

?>
<div style="text-align: center;color: white;">
	<div>
		<h4>Surveys window</h4>
		<div class="surveyWin" id="survey_left" onclick="switch_survey_menus_func(this)">
			<h4>Save survey link</h4>
		</div>
		<div class="surveyWin" id="survey_right" onclick="switch_survey_menus_func(this)">
			<h4>View all previous surveys' link</h4>
		</div>
		<div style="clear: both;"></div>
	</div>
	<h4 id="menu_survey_tag">----Save survey----</h4>
	<div id="survey_create">
		<table>
			<tr>
				<td>
				<input type="text" id="survey_title" placeholder="Survey title"  style="width: 300px;padding:10px;"/>
				</td>
			</tr>
			<tr>
				<td>
				<input type="text" id="survey_link" placeholder="Place survey link here"  style="width: 300px;padding:10px;"/>
				</td>
				<td>
				<input type="button"  onclick="NDS_save_survey_link()" value="Save Survey Link" />
				</td>
			</tr>
		</table>
	</div>
	<div id="survey_view" style="text-align: left;">
		<!-- Loaded surveys-->
		<?php
		require_once ("../includes/conn/config.php");
		?>
		<?php
		require_once ("../includes/classes/database.php");
		?>
		<!--        -->
		<?php
		$sqlNDS_survey = "SELECT * FROM ogenius_nds_db_surveys ORDER BY ogenius_nds_db_surveys_id DESC";
		if ($queryNDS_survey = $database -> query($sqlNDS_survey)) {
		//---------------------
		while ($resNDS_survey = mysqli_fetch_array($queryNDS_survey)) {

		?>
		<div style="width: 35%;float: left;border:1px solid white;">
			<h4><?php echo "" . $resNDS_survey['ogenius_nds_db_surveys_survey_title']; ?></h4>
			<label> <a target="_blank" href="<?php echo "" . $resNDS_survey['ogenius_nds_db_surveys_url']; ?>" style="color: gray;"><?php echo "" . $resNDS_survey['ogenius_nds_db_surveys_survey_title']; ?></a> </label></br>
			</br><h3>--status:
			<?php
			if($resNDS_survey['ogenius_nds_db_surveys_approved']=="0"){
			?>
			<span style="color:#CCCCFF"><?php echo "Not Activated!"; ?>
			---</h3>
			<input type="button" id="<?php echo "" . $resNDS_survey['ogenius_nds_db_surveys_id']; ?>" onclick="deleteThisLink(this)" value="Delete" />
			<input type="button" id="<?php echo "" . $resNDS_survey['ogenius_nds_db_surveys_id']; ?>" onclick="ApproveThisLink(this)" value="Approve" />

			<?php

			}else{
			?>
			<span style="color:#CCCCFF"><?php echo "Activated!"; ?></span>
			---</h3>
			<input type="button" id="<?php echo "" . $resNDS_survey['ogenius_nds_db_surveys_id']; ?>" onclick="deleteThisLink(this)" value="Delete" />
			

			<?php

			}
			?>
			
		</div>

		<?php
		}
		}
		?>
	</div>

</div>

<?php
}else{
//-----select from database the url for survey

require_once ("../includes/conn/config.php");
		?>
		<?php
		require_once ("../includes/classes/database.php");
		?>
		<!--        -->
		<?php
		$n=0;
		$url="";
		$sqlNDS_survey = "SELECT * FROM ogenius_nds_db_surveys WHERE ogenius_nds_db_surveys_approved='1' ORDER BY ogenius_nds_db_surveys_id DESC limit 1";
		if ($queryNDS_survey = $database -> query($sqlNDS_survey)) {
		//---------------------
		while ($resNDS_survey = mysqli_fetch_array($queryNDS_survey)) {
			$url=$resNDS_survey['ogenius_nds_db_surveys_url'];
		$n++;			
?>

<?php
}
if($n==1){
			?>
			<h1 style="text-align: center">Redirecting...</h1>
			<?php echo ""  ; ?>
			<script type="text/javascript">
			
			
			window.location = "<?php echo "" . $url; ?>";</script>

			
			<?php

			}else{
				?>
			 <h1 style="text-align: center;color: white;">No surveys now!</h1>
			
			<?php

			}
		?>
<?php

}}
?>
