<?php 

include("db.php");

if (isset($_POST['save_task'])){
    $title = $_POST['title'];
    $description = $_POST['description'];
    $id_user = $_GET['user'];

    $query = "INSERT INTO task(title, description, id_user) VALUES('$title', '$description', '$id_user')";
    $result = mysqli_query($connection, $query);
    if (!$result){
        die('Query failed');
    }

    $_SESSION['message'] = 'Task Saved';
    $_SESSION['message_type'] = 'success';

    header("Location: app.php?user=$id_user");
}

?>