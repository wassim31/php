<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="addTask.php" method="post">
        <input type="text" name="task" id="task" placeholder="add task"><br>
        <input type="submit" value="submit">
    </form><br>

    <?php include 'showTasks.php'; ?>
</body>

</html>