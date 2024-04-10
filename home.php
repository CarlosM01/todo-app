<?php include('db.php') ?>

<?php include('./includes/header.php') ?>
<?php include ("./includes/navbar_in.php")?>  

    <div class="container p-4">
        <div class="row">

            <div class="col-md-4">
                <div class="card card-body">
                    <form action="/todo_app/controller/save_task.php" method="POST">
                        <div class="form-group">
                            <input type="text" name="title" class="form-control" placeholder="Task Title" autofocus/>
                        </div>
                        <div class="form-group">
                            <textarea name="description" rows="2" class="form-control" placeholder="Task description"></textarea>
                        </div>
                        <input type="submit" class="btn btn-success btn-block" name="save_task" value="Save Task">
                    </form>
                </div>
            </div>

            
        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </thead>
                <tbody>
                    <?php 
                    $id_user = $_SESSION['id_user'];
                    $query = "SELECT * FROM task WHERE id_user='$id_user'";
                    $result_tasks = mysqli_query($conn, $query);                    

                    while($row = mysqli_fetch_array($result_tasks)) { ?> 
                        <tr>
                            <td><?php echo $row['title'] ?></td>
                            <td><?php echo $row['description'] ?></td>
                            <td><?php echo $row['created_at'] ?></td>
                            <td>
                                <a href="edit.php?id=<?php echo $row['id_task'] ?>&user=<?php echo $id_user ?>" class="btn btn-secondary">
                                    <i class="fas fa-marker"></i>
                                </a>
                                <a href="/todo_app/controller/delete_task.php?id=<?php echo $row['id_task'] ?>>" class="btn btn-danger">
                                    <i class="far fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        </div>
  </div>

<?php include('./includes/footer.php') ?>

  