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
				<?php require("includes/connect.php"); 
				$mysqli = new mysqli('localhost', 'root', 'root', 'todo');
				$query = "SELECT * FROM tasks ORDER BY date ASC, time ASC";
				if ($result = $mysqli->query($query)) {
					$numrows = $result->num_rows;
					if ($numrows>0) {
						while($row = $result->fetch_assoc()){
							$task_id = $row['id'];
							$task_name = $row['task'];
							echo "<li> 
							<span>'.$task_name'
							"
						}
					}
				}
				?>
			</ul>
		</div>
		<form class="add-new-task" autocomlete="off">
			<input type="text" name="new-task" placeholder="Add new item..."/>
		</form>
	</div>
</body>
<script type="text/javascript"></script>
<script>
	add_task(); //calls add_task function


	function add_task(){
		$('.add-new-task').submit(function() {
			var new_task =  $('add-new-task input[name=new-task]').val();

			//getting the form from the text field, send it to add_task, to give confirmation of newly added item
			if(new_task != '') {
				$.post('includes/add-task.php', {task: new_task}, function(data){
					$('add-new-task input[name=new-task]').val();
						$(data.appendTo('task-list ul').hide().fadeIn();
				});
			};
			return false;
		});
	}

	$('.delete-button').click(function(){
		var current_element = $(this);
		var task_id = $(this).attr('id');

		$.post('inludes/delete-task.php', {id: task_id}, function(){
			current_element.parent().fadeOut("fast", function(){
			$(this).remove();
			});
		});
	});		
</script>
</html>