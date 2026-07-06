<?php
// Akiba Retro Cafe - Database Connection Helper

$host = 'localhost';
$port = '3307'; // User's custom MySQL port
$db   = 'retro_cafe_db';
$user = 'root';
$pass = ''; // Default XAMPP password is empty
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;port=$port;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
     $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
     // For safety in production, do not echo raw database errors directly to the user.
     // For this training project, we display a clear message.
     die("Database connection failed: " . $e->getMessage());
}
?>
