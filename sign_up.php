<?php

$dsn = "mysql: host=localhost";
$username = "root";
$password = "root";

$connection = new PDO($dsn, $username, $password);

$connection->exec("CREATE DATABASE revise_exam");

/*
foreach ($two_array as $key => $line) {
    echo $key;
    foreach ($line as $number) {
        echo $number . " ";
    }
    echo "<br>";
}
*/
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Task</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>1</td>
                <td>Wassim</td>
                <td>active</td>
                <td>
                    <input type="submit" value="submit">
                    <input type="submit" value="submit">

                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>