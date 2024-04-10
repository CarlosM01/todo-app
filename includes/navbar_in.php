<?php

use LDAP\Result;

if(isset($_GET['user'])){
    $id_user = $_GET['user'];
    
    $query = "SELECT user_name FROM users WHERE id_user = '$id_user'";
    $result = mysqli_query($connection, $query);

    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_array($result);
        $user_name = $row['user_name'];
    }
}
?>

<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarToggler">
      <a class="navbar-brand" href="app.php?user=<?php echo $id_user ?>">To Do App</a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link disabled" aria-current="page">Welcome <?php echo $user_name ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="login.php">Sign out</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>