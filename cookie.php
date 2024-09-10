<?php
if (isset($_POST["username"]) && isset($_POST["password"])) {
    if (isset($_COOKIE["login_blocked"])) {
        echo "you're blocked" . "<br>";
    } else {
        if (!isset($_COOKIE["trials"])) {
            setcookie("trials", 1, time() + 60);
        }
        $username = htmlspecialchars($_POST["username"]);
        $password = htmlspecialchars($_POST["password"]);
        if ($username != "admin" || $password != "admin") {
            if ($_COOKIE["trials"] < 3) {
                setcookie("trials", ++$_COOKIE["trials"]);
            } else {
                echo "you're blocked for one minute";
                setcookie("login_blocked", "blocked", time() + 60);
                setcookie("trials", "", time() - 3600);
            }
        } else {
            echo "login sucessesful" . "<br>";
            setcookie("trials", "", time() - 3600);
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
    <form action="cookie.php" method="post">
        <label for="username">Username : </label>
        <input type="text" name="username" id="username"><br>
        <label for="password">password: </label>
        <input type="password" name="password" id="password"><br>
        <input type="submit" value="submit">
    </form>
</body>

</html>

<