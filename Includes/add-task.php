<?php
	$task = strip_tags($_POST['task']); //strips tag off posts to remove any unwanted code
	$date = date('Y-m-d');
	$time = date('H:i:s');

	include('connect.php');

	$mysqli = new mysqli('localhost', 'root', 'root', 'tasks');
	$mysqli->query("INSERT INTO tasks VALUES ('', 'task', '$date', '$time')");//inserts these values into the table

	$query = "SELECT * FROM tasks WHERE task='$task' and date='$date' and time='$time' ";
?>