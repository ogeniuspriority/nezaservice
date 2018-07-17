<?php
// Where the file is going to be placed
$file_path = "../androidRemoteAudioUploads/";
include ("../includes/conn/config.php");
include ("../includes/classes/database.php");
//====

//-----------------------

//------
//echo "string".$_POST['uploadedfile'];

//------------
if (is_uploaded_file($_FILES['uploadedfile']['tmp_name'])) {
	$folder = "../Boo_Gallery_Images/";
	$file = basename($_FILES['uploadedfile']['name']);

	//-------------
	$get_array = array();
	$cyuma = "cyuma=" . $file;
	parse_str($cyuma, $get_array);

	//---
	//echo "string" . $cyuma . "--------------" . $get_array['cyuma'] . "</br>  ";

	$Date = date("Y-m-d H:i:s");
	$target_path = $folder . $get_array['cyuma'];
	//----
	$message = $get_array['message'];
	$myRemoteId = $get_array['myRemoteId'];

	//---
	//echo "string" . $file;
	if (move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
		//------------------------------------
		//-----------------insert to db file name=================
		$outputRegCreds = array();
		$sqlBoo_sent_message = "INSERT INTO boo_gallery_images
		(boo_gallery_images_remooteuserid,boo_gallery_images_imagesrc,
		boo_gallery_imagesregdate
		)VALUES('$myRemoteId','{$get_array['cyuma']}','{$Date}')";
		if ($queryBoo_sent_message = $database -> query($sqlBoo_sent_message)) {
			//--------------------------------------------------

			//------------------
		} else {
			echo "1000";
		}

	} else {
		echo "upload received! but process failed";
	}
} else {
	echo "upload failure ! Nothing was uploaded";
}
?>
