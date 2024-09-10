<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>

<body>
    <h2>Welcome to your dashboard, <?php echo $_SESSION['username']; ?>!</h2>
    <p>This is a protected page.</p>
    <a href="logout.php">Logout</a>
</body>

</html>