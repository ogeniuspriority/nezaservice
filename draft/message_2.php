<?php


$page = file_get_contents("https://rest.nexmo.com/sms/json?api_key=12ba8df3&api_secret=7783b34f144ea3b3&to=250787374821&from=441632960061&text=Cyuma is the best");
echo "" . $page;
?>

