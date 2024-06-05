<?php require "include/header.php" ?>
<?php require_once 'config/db_conn.php'; ?>

<?php
if(isset($_GET['upd_id'])){

    $id = $_GET['upd_id'];

    $select = $conn->query("SELECT * FROM task WHERE id = '$id' ");
    $updatedRow = $select->fetch(PDO::FETCH_OBJ);



    if(isset($_POST['submit'])){
        //since i want to re-edit what i have inserted before, i to have use the $mymask bring the data to this page from the input field.
    $mytask = $_POST['mytask'];

    $update = $conn->prepare("UPDATE task SET names = :names WHERE id = '$id' ");
    $update->execute(
    [
    ':names' => $mytask
    ]
    );

    header("location: index.php");


    }
    
}

?>


<form class="row justify-content-center g-3 form" method="POST" action="update.php?upd_id=<?php echo $id; ?>">
    <div class="col-auto">
        <input name="mytask" value="<?php echo $updatedRow->names; ?>" type="text" class="form-control"
            placeholder="Enter Task">
    </div>
    <div class="col-auto">
        <button name="submit" type="submit" value="update" class="btn btn-primary mb-3">Update</button>
    </div>
</form>

<?php require "include/footer.php" ?>