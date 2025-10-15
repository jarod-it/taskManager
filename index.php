<?php 
include('pack.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/css/style.css">
	<title>Tasks Manager</title>
</head>
<body>
	<h2 id="title">Task manager</h2>
	<div id="dashboard">
		<div id="taskZone">
			<button id="addTaskBtn" class="actionBtn"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" /></svg></button>
			<table id="taskTable" style="width: 100%; text-align: center;">
				<thead> 
					<tr class="tableHeader">
						<th colspan="2">ID</th>
						<th>NAME</th>
						<th>ACTIVE</th>
						<th>TASK</th>
						<th>DATE</th>
						<th>ACTION</th>
					</tr>
				</thead>
				<tbody id="taskBody">
				<?php 
					foreach ($TASKS as $task) { 
						$dateAdd = new DateTime($task['date_add']);
						$dateUpd = new DateTime($task['date_upd']);

						if($task['active'] == 1) {
				?>
					<tr>
						<td class="taskColor" style="border-right: 1px solid gray; background:<?php echo $task['color'] ?>"></td>
						<td><?php echo $task['id_task'] ?></td>
						<td><?php echo $task['name'] ?></td>
						<td><?php echo $task['active'] ?></td>
						<td>&nbsp</td>
						<td><?php echo $dateAdd->format('Y-m-d'); ?></td>
						<td class="actionCol">
							<svg data-id="<?php echo $task['id_task'] ?>" class="editTask" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" /></svg>
							<svg data-id="<?php echo $task['id_task'] ?>" class="deleteTask" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" /></svg>
						</td>
					</tr>
				<?php 
						}
					} 
				?>
				</tbody>
			</table>
		</div>
	</div>
	<script src="assets/js/index.js"></script>
</body>
</html>