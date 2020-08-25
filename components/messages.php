<?php
	$db = mysqli_connect('localhost', 'admin_inced','!nced!um678', 'admin_inced');
$mq = "SELECT `msg_id` from `messages` where `msg_id`= (SELECT  max(msg_id) from `messages`)";
$mr = mysqli_fetch_array(mysqli_query($db,$mq));
 echo $mr['msg_id'];
?>