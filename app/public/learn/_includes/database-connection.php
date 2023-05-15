<?php

$servername = "mysql";
$database = "db_learn";
$username = "db_user";
$password = "db_password";

$dsn = "mysql:host=$servername;dbname=$database";

try {
    $pdo = new PDO($dsn, $username, $password);

    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}


// funktion för att skapa tabellen bird
function setup_bird($pdo)
{
    $sql = "CREATE TABLE IF NOT EXISTS `bird` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `bird_name` varchar(25) NOT NULL,
        PRIMARY KEY (`id`)
       ) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci";

       $pdo->exec($sql);
}

// funktion för att skapa tabellen user
function setup_user($pdo)
{
    $sql = "CREATE TABLE IF NOT EXISTS `user` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `username` varchar(20) NOT NULL,
        `password` varchar(255) NOT NULL,
        PRIMARY KEY (`id`)
       ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci";

       $pdo->exec($sql);
}

?>