<?php
session_start();
if (isset($_POST["username"]) && isset($_POST["password"])) {
    if (isset($_COOKIE["login_blocked"])) {
        echo "you're blocked";
    } else {

        if (!isset($_COOKIE["trials"])) {
            setcookie("trials", 1, time() + 60 * 60);
        }
        $username = htmlspecialchars($_POST["username"]);
        $password = htmlspecialchars($_POST["password"]);
        if ($username != "admin" || $password != "admin") {
            if ($_COOKIE["trials"] < 3) {
                echo "false , try again" . "<br>";
                setcookie("trials", ++$_COOKIE["trials"]);
            } else {
                echo "we've blocked you for 1 minute" . "<br>";
                setcookie("login_blocked", "blocked", time() + 60);
                setcookie("trials", "", time() - 60 * 60);
            }
        } else {
            echo "login sucesseful" . "<br>";
            setcookie("trials", "", time() - 3600);
            $_SESSION["username"] = $username;
            header('Location: header.php');
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="signin.php" method="post">
        <label for="username">Username : </label>
        <input type="text" id="username" name="username"><br>
        <label for="password">Password : </label>
        <input type="password" name="password" id="password"><br>
        <input type="submit" value="submit"><br>
    </form>
</body>

</html>