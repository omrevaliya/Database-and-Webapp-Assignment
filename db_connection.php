<?php
$serverName = "localhost"; // Replace with your server name
$database = "homestay_db";
$username = "root";
$password = "";

try {
    $pdo = new PDO("mysql:host=$serverName;dbname=$database", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected to SQL Server successfully!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
