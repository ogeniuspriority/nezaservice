<?php
$Date = date("Y-m-d H:i:s");
$datetime1 = new DateTime("2016-01-10 15:04:50");

$datetime2 = new DateTime($Date);
$interval = $datetime1 -> diff($datetime2);
$hours = $interval -> format('%h');
$minutes = $interval -> format('%i');
$seconds = $interval -> format('%s');
if ($minutes < 5) {
	echo 'Diff. in minutes is: ' . ($hours * 60 + $minutes) . " Seconds " . $seconds;
	echo "</br> In Range";
} else {
	echo "Out of Range";
	echo '</br>Diff. in minutes is: ' . ($hours * 60 + $minutes) . " Seconds " . $seconds;
}
?>
