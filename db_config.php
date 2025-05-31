<?php

$host = 'localhost';
$user = 'root';
$pass = 'password';
$dbname = 'gym_db';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    throw new Exception("Connection failed: " . $e->getMessage());
}
