<?php

include('db.php');

#	       TASKS TABLE
#   __________________________
#   __________________________
#	| id_task	| AUTO       |
#	| name		| NOT NULL   |
#	| color		| NULL       |
#	| active 	| AUTO       |
#	| date_add	| AUTO       |
#	| date_upd	| AUTO       |
#   |___________|____________|

$db = $_ENV['db'];

$sql = 'SELECT * FROM `task`';

$query = $db->prepare($sql);
$query->execute();

$TASKS = $query->fetchAll(PDO::FETCH_ASSOC);