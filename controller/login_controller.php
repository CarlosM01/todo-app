<?php
session_start();
if(isset($_POST['sign_in'])){
    if (isset($_POST['inputEmail']) and isset($_POST['inputPassword'])){
        $inputEmail = $_POST['inputEmail'];
        $inputPassword = $_POST['inputPassword'];    
        $sql = $connection ->query("SELECT * FROM users WHERE email = '$inputEmail' and password = '$inputPassword'");
        if ($data = $sql->fetch_object()){
            header("Location: app.php");
        } else {
            echo "<div class='alert danger'>Denied Access</div>";
        }
    }
}
?>