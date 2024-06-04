<?php require_once 'config/db_conn.php'; ?>

<?php


$select = $conn->query("SELECT * FROM task");
$select->execute();
$gettodo = $select->fetchAll(PDO::FETCH_OBJ);







?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="style.css">
    <title>CRUD</title>
</head>

<body>

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
                    <th scope="col">#</th>
                    <th scope="col">Taskname</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($gettodo as $do): ?>
                <tr>
                    <th scope="row"><?php echo $do->id ?></th>
                    <td><?php echo $do->names?></td>
                    <td><button type="button" class="btn btn-danger">Delete</button></td>
                </tr>
                 <?php endforeach; ?>
            </tbody>
        </table>

    </div>


</body>

</html>