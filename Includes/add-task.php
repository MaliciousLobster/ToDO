<?php
	$task = strip_tags($_POST['task']); //strips tag off posts to remove any unwanted code
	$date = date('Y-m-d');
	$time = date('H:i:s');

	include('connect.php');

	$mysqli = new mysqli('localhost', 'root', 'root', 'tdodo');
	$mysqli->query("INSERT INTO tasks VALUES ('', 'task', '$date', '$time')");//inserts these values into the table

	$query = "SELECT * FROM tasks WHERE task='$task' and date='$date' and time='$time' "; //querys the tasks

	if ($result = $mysqli->query($query)) {
		while ($row = $result->fetch_assoc()) {
			$task_id = $row['id'];
			$task_name = $row['task']
		}
	}

	$mysqli->close(); //closes connection

	echo '<li><span>' . $task_name . '</span><img id="' . $task_id . '"class="delete-button" width="10px" src="images/close.svg" /></li>';
?>