<?php

include("../db.php");

if (isset($_GET['id'])){
    $id = $_GET['id'];
    $id_user = $_GET['user'];
    $query = "DELETE FROM task WHERE id_task = '$id'";
    $result = mysqli_query($conn, $query);
    if (!$result){
        die("Query failed");
    }

    header("Location: /todo_app/home.php");
}

?>