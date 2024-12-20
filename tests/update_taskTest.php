<?php
require_once 'connect_test.php';

if ($_GET['task_id'] != "") {
    $task_id = $_GET['task_id'];

    $updatingtasks = mysqli_query($db, 
            "UPDATE `task` SET `status` = 'Terminer' WHERE `task_id` = $task_id")
        or die(mysqli_error($db));
        
    header('location: index.php');
}
?>
