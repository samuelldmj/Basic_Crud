<?php require_once 'config/db_conn.php'; ?>

<?php


$select = $conn->query("SELECT * FROM task");
$select->execute();
$gettodo = $select->fetchAll(PDO::FETCH_OBJ);







?>

<?php require "include/header.php"; ?>

<div class="container-lg mt-5">
    
        <form class="row justify-content-center g-3 form" method="post" action="insert.php">
            <div class="col-auto">
                <input name="mytask" type="text" class="form-control" placeholder="Enter Task">
            </div>
            <div class="col-auto">
                <button name="submit" type="submit" class="btn btn-primary mb-3">Create</button>
            </div>
        </form>
        <!-- Table -->
        <table class="table">
            <thead>
                <tr>
                    <!-- <th scope="col">#</th> -->
                    <th scope="col">Taskname</th>
                    <th scope="col">Delete</th>
                    <th scope="col">Update</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($gettodo as $do): ?>
                <tr>
                    <!-- <th scope="row"><?php echo $do->id ?></th> -->
                    <td><?php echo $do->names?></td>
                    <td><a href="delete.php?del_id=<?php echo $do->id; ?>" class="btn btn-danger">Delete</a>
                    <td><a href="update.php?upd_id=<?php echo $do->id; ?>" class="btn btn-success">Update</a>
                    </td>
                </tr>
                 <?php endforeach; ?>
            </tbody>
        </table>

    </div>

<?php require "include/footer.php"; ?>