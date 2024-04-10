<?php 

session_start();
session_destroy();
header("Location: /todo_app/login.php")

?>