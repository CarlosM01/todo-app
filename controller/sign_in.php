<?php
session_start();
if(isset($_POST['sign_in'])){
    if (isset($_POST['inputEmail']) and isset($_POST['inputPassword'])){
        $inputEmail = $_POST['inputEmail'];
        $inputPassword = $_POST['inputPassword'];    
        $sql = $conn ->query("SELECT * FROM users WHERE email = '$inputEmail' and password = '$inputPassword'");
        if ($data = $sql->fetch_object()){
            $_SESSION['id_user']=$data->id_user;
            $_SESSION['user_name']=$data->user_name;
            $_SESSION['email']=$data->email;
            header("Location: /todo_app/home.php");
        } else {
            $_SESSION['alert_login'] = 'Wrong Email or password.';
        }
    }
}
?>