<?php

$dsn = "mysql: host=localhost;dbname=web";
$user = "root";
$password = "root";

$connection = new PDO($dsn, $user, $password);

$execution = $connection->exec("INSERT INTO info(name, age, email) VALUES('wassim', 21, 'wass@example.com');
");
$response = $connection->prepare("select * from info where name = :name");
$name = "wassim";
$response->bindParam(":name", $name);
$response->execute();

$data = $response->fetch();
echo "Name : " . $data["name"] . "<br>";
echo "age : " . $data["age"] . "<br>";
echo "email : " . $data["email"] . "<br>";
/*
while ($data = $response->fetch()) {
    echo "Name : " . $data["name"] . "<br>";
    echo "age : " . $data["age"] . "<br>";
    echo "email : " . $data["email"] . "<br>";
}
*/
?>
// ?>