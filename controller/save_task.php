<?php 

include("../db.php");

session_start();
if (isset($_POST['save_task'])){
    $title = $_POST['title'];
    $description = $_POST['description'];
    $id_user = $_SESSION['id_user'];

    $query = "INSERT INTO task(title, description, id_user) VALUES('$title', '$description', '$id_user')";
    $result = mysqli_query($conn, $query);
    if (!$result){
        die('Query failed');
    }

    header("Location: /todo_app/home.php");
}

?>