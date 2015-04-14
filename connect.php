<?php
$mysqli = new mysqli('localhost', 'root', 'root', 'tasks');

//if mysqli doesn't work then it will die and give an error message
if($mysqli->connect_error) {
	die('connection error (' . $mysqli->connect_errno .  ')'
		. $mysqli->connect_error);
}
else{
	echo "Connection made";
}
		
$mysqli->close();

?>