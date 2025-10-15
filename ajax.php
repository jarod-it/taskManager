<?php

include('entities/db.php');

$db = $_ENV['db'];

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");

if(isset($_POST['name']) && isset($_POST['color']) && isset($_POST['data-add'])) {
    if($_POST['name'] !== '') {
        $data = $_POST;

        try{
            insert($db, 'INSERT INTO `task`(name, color) VALUES(\'' . $data['name'] . '\', \'' . $data['color'] . '\')');
        } catch (\Throwable $e) {
            die('Error: '.$e);
        }

        echo 'add';
    } else {
        die('Error : The name is missing !');
    }
}

if(isset($_POST['name']) && isset($_POST['color']) && isset($_POST['data-edit'])) {
    if($_POST['name'] !== '') {
        $data = $_POST;

        /* die('UPDATE `task` SET name = \'' . $data['name'] . '\', color = \'' . $data['color'] . '\' WHERE id_task = '.$data['data-edit']); */

        try{
            insert($db, 'UPDATE `task` SET name = \'' . $data['name'] . '\', color = \'' . $data['color'] . '\' WHERE id_task = '.(int) $data['data-edit']);
        } catch (\Throwable $e) {
            die('Error: '.$e);
        }

        echo 'edit';
    } else {
        die('Error : The name is missing !');
    }
}

if(isset($_POST['deleteTask'])) {
    $data = $_POST;

    try {
        delete($db, 'DELETE FROM `task` WHERE id_task =' . $data['deleteTask']);
    } catch (\Throwable $th) {
        die('Error: '.$e);
    }

    echo 'sent';
}

function fetch($db, $sql) {
    $data = null;

    return $data;
}

function fetchAll($db, $sql) {
    $data = null;

    return $data;
}

function insert($db, $sql) {
    $query = $db->prepare($sql);
    $query->execute();
}

function delete($db, $sql) {
    $query = $db->prepare($sql);
    $query->execute();
}