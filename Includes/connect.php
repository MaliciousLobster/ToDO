<?php
//localhost is what it connects to, root and root are the username and password, tasks is the table
$mysqli = new mysqli('localhost', 'root', 'root', 'todo');

//if mysqli doesn't work then it will die and give an error message
if($mysqli->connect_error) {
	die('connection error (' . $mysqli->connect_errno .  ')'
		. $mysqli->connect_error);
}
else{
	//echo "Connection made";
}
		
$mysqli->close();	

?>