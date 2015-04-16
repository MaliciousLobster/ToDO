<?php
	$task_id = strip_tags($_POST['id']); //takes away unwanted code
	require('connect.php'); //takes code from connect.php
	$mysqli = new mysqli('localhost', 'root', 'root', 'todo'); //connects to the database
	if($result = $mysqli->query("DELETE FROM tasks WHERE id='task_id'")){

	}
?>