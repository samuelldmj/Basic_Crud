<?php require_once 'config/db_conn.php'; ?>



<?php

if(isset($_POST['submit'])){

$mytask = $_POST['mytask'];

$insert = $conn->prepare("INSERT INTO task (names) VALUES (:names)");
$insert->execute(
[
':names' => $mytask
]
);

header("location: index.php");

}



?>