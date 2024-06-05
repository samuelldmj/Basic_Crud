<?php require_once 'config/db_conn.php'; ?>


<?php
if(isset($_GET['del_id'])){

    $id = $_GET['del_id'];

    $drop = $conn->prepare("DELETE FROM task WHERE id=:id ");
    $drop->execute([':id' => $id]);
    
    header("location: index.php");
}