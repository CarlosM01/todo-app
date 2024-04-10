<?php

include("db.php");

if (isset($_GET['id'])){
    $id = $_GET['id'];
    $id_user = $_GET['user'];
    $query = "DELETE FROM task WHERE id_task = '$id'";
    $result = mysqli_query($connection, $query);
    if (!$result){
        die("Query failed");
    }

    $_SESSION['message'] = 'Task removed';
    $_SESSION['message_type'] = 'danger';

    header("Location: app.php?user=$id_user");
}

?>