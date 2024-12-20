<?php
require_once 'connect.php';

if (isset($_POST['task'])) {
    if ($_POST['task'] != "") {
        $task = $_POST['task'];

        $addtasks = mysqli_query($db, 
            "INSERT INTO `task` (task, status) VALUES('$task', 'En attente')")
            or
            die(mysqli_error($db));
        header('location: ./index.php');
    }
}
?>