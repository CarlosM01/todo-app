<?php 

include("db.php");

if (isset($_POST['register_user'])){
    $user = $_POST['user'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordConfirmation = $_POST['passwordConfirmation'];

    if ($password === $passwordConfirmation){
        $query = "INSERT INTO users(user_name, email, password) VALUES('$user', '$email', '$password')";
        $result = mysqli_query($connection, $query);
        if (!$result){
            die('Query failed');
        }
        
        header("Location: login.php"); 
    } else {
        header("Location: register.php"); 
    }

}

?>


<?php include ("./includes/header.php")?>
<?php include ("./includes/navbar_out.php")?>

<div class="container-md p-4">
    <div class="row justify-content-md-center">
        <div class="col col-sm-4">
            <form action="register.php" method="POST">
                <div class="mb-3">
                    <label for="inputUser" class="form-label">User name</label>
                    <input type="text" class="form-control" id="user" name="user" placeholder="example">
                </div>

                <div class="mb-3">
                    <label for="inputEmail" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="email@example.com">
                </div>

                <div class="mb-3">
                    <label for="inputPassword" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="********">
                </div>

                <div class="mb-3">
                    <label for="PasswordConfirmation" class="form-label">Password confirmation</label>
                    <input type="password" class="form-control" id="passwordConfirmation" name="passwordConfirmation" placeholder="********">

                    <div>
                    <?php if(isset($_SESSION['message'])) {?>  
                        <div class="alert alert-<?= $_SESSION['message_type'] ?>" role="alert">
                            <?= $_SESSION['message'] ?>
                        </div>
                    <?php } ?>
                    </div> 
                </div>
                    
                
                
                <button type="submit" class="btn btn-success" name="register_user">Sign in</button>
            </form>
        </div>
    </div>
</div>

<?php include ("./includes/footer.php")?>