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
	$folder = "../android_image_messages/";
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
	$message_type = $get_array['message_type'];
	$message_status = $get_array['message_status'];
	$message_sender = $get_array['message_sender'];
	$message_remote_id = $get_array['message_remote_id'];
	$message_who_sent = $get_array['message_who_sent'];
	$message_receiver = $get_array['message_receiver'];
	$message_data_url = $get_array['message_data_url'];
	$message_regdate = $get_array['message_regdate'];
	//---message_regdate
	//echo "string" . $file;
$message_data_url = $message_sender . $message_data_url;
	if (move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
		//------------------------------------
		//-----------------insert to db file name=================
		$outputRegCreds = array();
		$sqlBoo_sent_message = "INSERT INTO boo_chat_message
(boo_chat_message_message,boo_chat_message_type,boo_chat_message_status,
boo_chat_message_regdate,boo_chat_message_sender,boo_chat_message_receiver,
boo_chat_message_who_sent,boo_chat_message_data_url
		)VALUES
			 ('{$get_array['cyuma']}','{$message_type}','sent',
			 '{$message_regdate}','{$message_sender}','{$message_receiver}','{$message_who_sent}'
			 ,'{$message_data_url}') ";
		if ($queryBoo_sent_message = $database -> query($sqlBoo_sent_message)) {
			//--------------------------------------------------
			$sqlBooMessages = "SELECT * FROM boo_chat_message  ORDER BY boo_chat_message_id DESC LIMIT 1";
			if ($queryBooMessages = $database -> query($sqlBooMessages)) {
				//--------------------------------------------------
				while ($rowBooMessages = mysqli_fetch_array($queryBooMessages)) {
					$outputRegCreds[] = $rowBooMessages;

				}
				header("Content-type: application/json");
				print("{\"boo_data\":" . json_encode($outputRegCreds) . "}");
			}
			//------------------
		} else {
			$sqlBooMessages = "SELECT * FROM boo_chat_message  ORDER BY boo_chat_message_id DESC LIMIT 1";
			if ($queryBooMessages = $database -> query($sqlBooMessages)) {
				//--------------------------------------------------
				while ($rowBooMessages = mysqli_fetch_array($queryBooMessages)) {
					$outputRegCreds[] = $rowBooMessages;

				}
				header("Content-type: application/json");
				print("{\"boo_data\":" . json_encode($outputRegCreds) . "}");
			}
		}

	} else {
		echo "upload received! but process failed";
	}

} else {
	echo "upload failure ! Nothing was uploaded";
}
?>
