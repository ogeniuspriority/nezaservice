<?php

$number = "250726098215";
$message = "Hello";
$page = file_get_contents("https://api.clockworksms.com/http/send.aspx?key=5d173c94c7a6ed0346a23fa759188ceb14c2caec&to=" . $number . "&content=" . $message . "");
//echo "" . $page;
?>

