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
</script>
</html>