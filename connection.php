<?php

    error_reporting(0);
    $db_hostname = "localhost";
    $db_database = "excellence";
    $db_username = "root";
    $db_password = "";

try {
    $db = new PDO("mysql:host=$db_hostname; dbname=$db_database", $db_username, $db_password, array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4"
    ));
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION, PDO::ATTR_EMULATE_PREPARES, false);
} catch (PDOException $e) {
    echo 'Connection failed:' . $e->getMessage();
}
?>
