<?php
$host = 'postgres';
$port = 5432;
$dbname = 'Users';
$user = 'admin';
$pass = 'admin';

try {
$pdo = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $pass);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$pdo->exec("CREATE DATABASE Users;");

} catch (PDOException $e) {
die("Błąd połączenia z bazą danych: " . $e->getMessage());
}
