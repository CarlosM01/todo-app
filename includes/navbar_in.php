<?php

use LDAP\Result;

session_start();
if(empty($_SESSION['id_user']))[
  header("Location: login.php")
]

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
          <a class="nav-link disabled" aria-current="page">Welcome <?php echo $_SESSION['user_name'] ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/todo_app/controller/sign_out.php">Sign out</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>