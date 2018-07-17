<?php
require_once 'includes/header.php';
?>
<?php
//---------------display the matching avatar image----
function displayMyMatchingImage($thenameOfInstitution,$id2017){
    
}


?>
<body class="maincontent">
	<input type="hidden" value="" id="menu_value_holder" />
	<div id="menu_create" onclick="switch_menus_func(this)" class="maincontent_menu">
		Create a digital suggestion box
	</div>
	<div id="menu_preview" onclick="switch_menus_func(this)"  class="maincontent_menu">
		Preview of suggestion boxes
	</div>
	<div style="clear: both;"></div>
	<div style="width: 100%;">

		<p style="text-align: center;margin-top: 20px;color: white;" id="menu_tag">
			----Create a digital suggestion box----
		</p>
		<div class="contents" id="create_menu_content">
		    <h4>Disabled here</h4>
			<!--<div style="width: 48%;">
				<table style="padding: 20px;">
					<tr>
						<td>
						<form id="NDS_suggest_form">
							<label>Choose Image from device</label>
							<input type="hidden" id="NDS_up_img" />
							<input id="NDS_suggestion_box_img_choose" onchange="upload_NDS_sussgest_avatar()" type="file"/>
							<label id="progressText"></label>
							<div id="progressBar"></div>
						</form></td>
					</tr>
					<tr>
						<td><img id="NDS_suggest_box_avatar" src=""  style="width: 120px;height: 120px;"/>
						<input id="NDS_institution_names" style="margin-left: 30px;" type="text" placeholder="Institution name here" />
						</td>
					</tr>
					<tr>
						<td>
							<input type="text" id="ogenius_nds_db_community_motto" placeholder="Institution motto here" />
						</td>
					</tr>
					<tr>
						<td>
						<input type="button" onclick="NDS_save_suggestion_box()" value="Save Organisation" />
						</td>
					</tr>
				</table>

			</div>-->
			<div style="width: 48%;">

			</div>

		</div>
		<div class="contents" id="preview_menu_content">
			<p>
				<label>Sort By:</label>
				<select id="sort_by_">
					<option value="ascending">A-z</option>
					<option value="descending">Z-a</option>
					<option value="Deleted">Deleted</option>
					<option value="Suspended">Suspended</option>
					<option value="enabled">Approved</option>
					<option value="Not_approved">Not Approved</option>
				</select>
				<input type="button" onclick="searchBySort()" value="Sort" />
				<input type="button" onclick="view_NDS_suggestions(this)" value="View Deleted" />
				<input type="button" onclick="view_NDS_suggestions(this)" value="View Enabled" />
				<input type="button" onclick="view_NDS_suggestions(this)" value="View Suspended" />
				<input type="button" onclick="view_NDS_suggestions(this)" value="View Not Enabled" />
			</p>
			<p>
				<label>Sort By keyword:</label>
				<input type="text" id="by_key_word" placeholder="example: rgb " />
				<input onclick="searchByKeyword() " type="button" value="Search by keyword" />
			</p>
			<div id="TheSearchResultsField">
<?php
require_once ("../includes/conn/config.php");
?>
<?php
require_once ("../includes/classes/database.php");
?>
				<!--        -->
				<?php
$sqlNDS_suggestion_boxes = "SELECT 
ogenius_nds_db_community.ogenius_nds_db_community_institution_deal_status,
ogenius_nds_db_community.ogenius_nds_db_community_id,
ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_institution,
ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_avatar,
ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_motto,
ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id

 FROM ogenius_nds_db_community INNER JOIN ogenius_nds_db_normal_users
 ON ogenius_nds_db_community.ogenius_nds_db_community_parent_id=ogenius_nds_db_normal_users.ogenius_nds_db_normal_users_id
 
  ORDER BY ogenius_nds_db_community.ogenius_nds_db_community_id DESC";
if ($queryNDS_suggestion_boxes = $database -> query($sqlNDS_suggestion_boxes)) {
//---------------------
while ($resNDS_suggestion_boxes = mysqli_fetch_array($queryNDS_suggestion_boxes)) {

				?>

				<?php
if($resNDS_suggestion_boxes["ogenius_nds_db_community_institution_deal_status"]=="0"){
				?>
				<p style="padding: 10px;background:#808080;">
					<div style="background:#808080">
						<div style="float: left">
							<img style="border-radius:8px;width: 80px;height: 80px;" src="../uploaded_images/<?php echo "" . $resNDS_suggestion_boxes["ogenius_nds_db_normal_users_avatar"]; ?>" />

						</div>
						<div style="float: left;padding: 20px;">
							<h4 style="margin-top: 10px;"><?php echo "" . $resNDS_suggestion_boxes["ogenius_nds_db_normal_users_institution"]; ?></h4>
							<h4 style="margin-top: 10px;"><?php echo "" . $resNDS_suggestion_boxes["ogenius_nds_db_normal_users_motto"]; ?></h4>
							<p>
								Status: <span style="color:white;">Default</span>
								
								<input id="<?php echo "" . $resNDS_suggestion_boxes["ogenius_nds_db_community_id"]; ?>" onclick="changeSuggestionBoxStatus(this)" type="button" value="Suspend" />
								<input id="<?php echo "" . $resNDS_suggestion_boxes["ogenius_nds_db_community_id"]; ?>" onclick="changeSuggestionBoxStatus(this)" type="button" value="Approve" />
								<input id="<?php echo "" . $resNDS_suggestion_boxes["ogenius_nds_db_community_id"]; ?>" onclick="changeSuggestionBoxStatus(this)" type="button" value="Delete" />

							</p>

						</div>
						<div style="clear: both;"></div>
					</div>
				</p>
				<?php
				}
				?>
				<?php
if($resNDS_suggestion_boxes["ogenius_nds_db_community_institution_deal_status"]=="1"){
				?>
				<p style="padding: 10px;background:#808080;">
					<div style="background:#808080">
						<div style="float: left">
							<img style="border-radius:8px;width: 80px;height: 80px;" src="../uploaded_images/<?php echo "" . $resNDS_suggestion_boxes["ogenius_nds_db_normal_users_avatar"]; ?>" />

						</div>
						<div style="float: left;padding: 20px;">
							<h4 style="margin-top: 10px;"><?php echo "" . $resNDS_suggestion_boxes["ogenius_nds_db_normal_users_institution"]; ?></h4>
							<h4 style="margin-top: 10px;"><?php echo "" . $resNDS_suggestion_boxes["ogenius_nds_db_normal_users_motto"]; ?></h4>
							<p>
								Status: <span style="color:white;">Enabled</span>
								<input id="<?php echo "" . $resNDS_suggestion_boxes["ogenius_nds_db_community_id"]; ?>" onclick="changeSuggestionBoxStatus(this)" type="button" value="Delete" />
								<input id="<?php echo "" . $resNDS_suggestion_boxes["ogenius_nds_db_community_id"]; ?>" onclick="changeSuggestionBoxStatus(this)" type="button" value="Suspend" />
								

							</p>

						</div>
						<div style="clear: both;"></div>
					</div>
				</p>
				<?php
				}
				?>
				<?php
if($resNDS_suggestion_boxes["ogenius_nds_db_community_institution_deal_status"]=="2"){
				?>
				<p style="padding: 10px;background:#808080;">
					<div style="background:#808080">
						<div style="float: left">
							<img style="border-radius:8px;width: 80px;height: 80px;" src="../uploaded_images/<?php echo "" . $resNDS_suggestion_boxes["ogenius_nds_db_normal_users_avatar"]; ?>" />

						</div>
						<div style="float: left;padding: 20px;">
							<h4 style="margin-top: 10px;"><?php echo "" . $resNDS_suggestion_boxes["ogenius_nds_db_normal_users_institution"]; ?></h4>
							<h4 style="margin-top: 10px;"><?php echo "" . $resNDS_suggestion_boxes["ogenius_nds_db_normal_users_motto"]; ?></h4>
							<p>
								Status: <span style="color:white;">Suspended</span>
								
								<input id="<?php echo "" . $resNDS_suggestion_boxes["ogenius_nds_db_community_id"]; ?>" onclick="changeSuggestionBoxStatus(this)" type="button" value="Approve" />
								<input id="<?php echo "" . $resNDS_suggestion_boxes["ogenius_nds_db_community_id"]; ?>" onclick="changeSuggestionBoxStatus(this)" type="button" value="Delete" />

							</p>

						</div>
						<div style="clear: both;"></div>
					</div>
				</p>
				<?php
				}
				?>
				<?php
if($resNDS_suggestion_boxes["ogenius_nds_db_community_institution_deal_status"]=="3"){
				?>
				<p style="padding: 10px;background:#808080;">
					<div style="background:#808080">
						<div style="float: left">
							<img style="border-radius:8px;width: 80px;height: 80px;" src="../uploaded_images/<?php echo "" . $resNDS_suggestion_boxes["ogenius_nds_db_normal_users_avatar"]; ?>" />

						</div>
						<div style="float: left;padding: 20px;">
							<h4 style="margin-top: 10px;"><?php echo "" . $resNDS_suggestion_boxes["ogenius_nds_db_normal_users_institution"]; ?></h4>
							<h4 style="margin-top: 10px;"><?php echo "" . $resNDS_suggestion_boxes["ogenius_nds_db_normal_users_motto"]; ?></h4>
							<p>
								Status: <span style="color:white;">Deleted</span>
								
								<input id="<?php echo "" . $resNDS_suggestion_boxes["ogenius_nds_db_community_id"]; ?>" onclick="changeSuggestionBoxStatus(this)" type="button" value="Suspend" />
								<input id="<?php echo "" . $resNDS_suggestion_boxes["ogenius_nds_db_community_id"]; ?>" onclick="changeSuggestionBoxStatus(this)" type="button" value="Approve" />
								

							</p>

						</div>
						<div style="clear: both;"></div>
					</div>
				</p>
				<?php
				}
				?>

				<?php
				}
				}
				?>
			</div>
		</div>

	</div>

</body>