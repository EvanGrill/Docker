<?php
    $dsn = "mysql:host=mariadb;port=3306;dbname=" . getenv('MARIADB_DATABASE') . ";charset=utf8mb4";
    $user = getenv('MARIADB_USER');
    $pass = getenv('MARIADB_PASSWORD');

    try {
    $pdo = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ]);
    echo "✅ Connected to MariaDB\n";
    echo "Server version: " . $pdo->getAttribute(PDO::ATTR_SERVER_VERSION) . "\n";
    } catch (PDOException $e) {
    echo "❌ Connection failed: " . $e->getMessage() . "\n";
    }
?>