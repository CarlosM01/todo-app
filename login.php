<?php

use LDAP\Result;

include("db.php");

include("controller/sign_in.php")

?>



<?php include ("./includes/header.php")?>
<?php include ("./includes/navbar_out.php")?>

<div class="container-md p-4">
    <div class="row justify-content-md-center">
        <div class="col col-sm-4">
            <form action="login.php" method="POST">
                <?php if (!empty($_SESSION['alert_login'])){ ?>
                <div class="alert alert-warning" role="alert">
                    <?php echo $_SESSION['alert_login'] ?>
                </div>
                <?php } ?>
                
                <div class="mb-3">
                    <label for="inputEmail" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="inputEmail" id="inputEmail" placeholder="email@example.com">
                </div>
                <div class="mb-3">
                    <label for="inputPassword" class="form-label">Password</label>
                    <input type="password" class="form-control" id="inputPassword" name="inputPassword" placeholder="********">
                </div>
                <button type="submit" class="btn btn-success" name="sign_in">Sign in</button>
            </form>
        </div>
    </div>
</div>

<?php include ("./includes/footer.php")?>