<?php
include 'database.php';

if (isset($_POST["task"])) {
    $task = htmlspecialchars($_POST["task"]);
    $connection->exec("INSERT INTO tasks(description, isDone) VALUES('$task', 0)");
    header("Location: index.html");
}

?>
/