<?php
// config.php
$host = 'localhost';
$dbname = 'autocompletion';
$username = 'root'; // Modifiez selon votre config (souvent 'root' sur WAMP/XAMPP)
$password = '';     // Modifiez selon votre config (souvent vide ou 'root' sur MAMP)

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
?>