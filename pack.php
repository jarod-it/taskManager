<?php 

error_reporting(E_ALL);
ini_set('display_errors', 1);

#DATABASE
include('entities/tasks.php');

#REQUEST
include('ajax.php');

#ROUTER
include('router/route.php');

#PARTIALS
include('_partials/success.php'); 
include('_partials/error.php'); 
include('_partials/info.php');

#MODALS
include('_partials/modals/addTask.php');
include('_partials/modals/editTask.php');