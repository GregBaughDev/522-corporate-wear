<?php

$serverHost = "localhost";
$hostUser = "root";
$hostPass = "";
$dbName = "corporate_wear";

try {
    $conn = new PDO("mysql:host=$serverHost;dbName=$dbName", $hostUser, $hostPass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo("$dbName database connected");
} catch (PDOException $e) {
    echo "An error has occured";
    error_log($e->getMessage(), 0);
}

?>