<?php
include 'database.php';


$tasks = $connection->query("SELECT * FROM tasks");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        td,
        th {
            border: 1px solid black;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
    <title>Document</title>
</head>

<body>

    <?php if ($tasks): ?>
        <table>
            <thead>
                <tr>
                    <th>Task</th>
                    <th>description</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tasks as $task): ?>
                    <tr>
                        <td><?php echo $task["description"]; ?></td>
                        <td>
                            <?php
                            $isDone = $task["isDone"];
                            if ($isDone) {
                                echo "isDone";
                            } else {
                                echo "Not Done";
                            }
                            ?>
                        </td>
                        <td><input type="submit" action="deleteTask.php"></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>no tasks</p>
    <?php endif; ?>
</body>

</html>