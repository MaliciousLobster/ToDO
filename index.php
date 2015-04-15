<!DOCTYPE html>
<html>
<head>
	<title>Simple To-Do List</title>
	<li rel="stylesheet" type="text/css"  href="css/main.csss"/>
</head>
<body>
	<div class="wrap"> 
		<div class="task-list">
			<ul>
				<?php require("includes/connect.php"); ?>
			</ul>
		</div>
		<form class="add-new-task" autocomlete="off">
			<input type="text" name="new-task" placeholder="Add new item..."/>
		</form>
	</div>
</body>
</html>