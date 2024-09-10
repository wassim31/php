<?php

$dsn = "mysql: host=localhost";
$username = "root";
$password = "root";
try {
    $connection = new PDO($dsn, $username, $password);

    $connection->exec("CREATE DATABASE IF NOT EXISTS revision_exam");
    $connection->exec("USE revision_exam");


    $connection->exec("CREATE TABLE IF NOT EXISTS tasks(id INT AUTO_INCREMENT PRIMARY KEY,description VARCHAR(255) NOT NULL, isDone BOOLEAN  NOT NULL)");
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>


//