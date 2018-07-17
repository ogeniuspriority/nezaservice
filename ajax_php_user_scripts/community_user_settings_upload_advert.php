<?php
require_once ("../includes/conn/config.php");
?>
<?php
require_once ("../includes/classes/database.php");
?>
<?php

if (isset($_FILES['community_user_settings_advert_upload_form'])) {
	postDocs($_FILES['community_user_settings_advert_upload_form']);
}

function postDocs($file) {
	global $database;
	global $_SESSION;

	$db_file_name = basename($file['name']);
	$ext = explode(".", $db_file_name);
	$fileExt = end($ext);
	$fileExt = mb_strtoupper($fileExt);
	if ($fileExt == "JPEG" || $fileExt == "JFIF" || $fileExt == "JPEG 2000" || $fileExt == "EXIF" || $fileExt == "TIFF" || $fileExt == "RIF" || $fileExt == "GIF" || $fileExt == "BMP" || $fileExt == "PNG" || $fileExt == "PPM" || $fileExt == "PGM" || $fileExt == "PBM" || $fileExt == "PNM" || $fileExt == "WEBP" || $fileExt == "HDR raster formats" || $fileExt == "BPG" || $fileExt == "SVG" || $fileExt == "CGM" || $fileExt == "SVG" || $fileExt == "CGM" || $fileExt == "JPG") {

		$upload_errors = array(

		// http://www.php.net/manual/en/features.file-upload.errors.php

		UPLOAD_ERR_OK => "No errors.", UPLOAD_ERR_INI_SIZE => "Larger than upload_max_filesize.", UPLOAD_ERR_FORM_SIZE => "Larger than form MAX_FILE_SIZE.", UPLOAD_ERR_PARTIAL => "Partial upload.", UPLOAD_ERR_NO_FILE => "No file.", UPLOAD_ERR_NO_TMP_DIR => "No temporary directory.", UPLOAD_ERR_CANT_WRITE => "Can't write to disk.", UPLOAD_ERR_EXTENSION => "File upload stopped by extension.");

		if (!$file || empty($file) || !is_array($file)) {
			echo "No file was attached";
			exit();
		} else if ($file["error"] != 0) {
			echo $upload_errors[$file["error"]];
			exit();
		} else if ($file["error"] == 0) {

			$size = $file['size'];
			$type = $file['type'];
			$temp_name = $file['tmp_name'];
			$db_file_name = basename($file['name']);
			$ext = explode(".", $db_file_name);
			$fileExt = end($ext);
			$target_file = "NDS_home_img_" . abs(rand(100000000000, 999999999999)) . "hub"  . abs(rand(1000, 9999)) . "." . $fileExt;

			$path = "../neza_advert_images/" . $target_file;

			if (move_uploaded_file($temp_name, $path)) {
				echo "" . $target_file;
			} else {

				echo "Erros occur!";

			}
		} else {
			echo "Wrong image format.";
			exit();
		}

	}else{
		echo "none!";
	}
}

// save to db function image
?>