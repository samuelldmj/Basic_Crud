<?php 

try {
    
    $user = 'root';
    $host = 'localhost';
    $dbName = 'basicCrud';
    $pass = '';

    $conn = new PDO("mysql:host=$host; dbname=$dbName", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);




} catch (PDOException $e) {

    echo "error is:" . $e->getMessage();
}
