<?php

$_ENV['host'] = '127.0.0.1';
$_ENV['dbname'] = 'tasksmanager';
$_ENV['user'] = 'root';
$_ENV['pass'] = '';

try {
	return $_ENV['db'] = new PDO('mysql:dbname=' . $_ENV['dbname'] . ';host=' . $_ENV['host'], $_ENV['user'], $_ENV['pass']);
} catch (\Throwable $e) {
	die('ERROR attempting to connect database > ' . $e);
}