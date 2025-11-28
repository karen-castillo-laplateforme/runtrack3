<?php
try {
  $pdo = new PDO("mysql:host=localhost;dbname=utilisateurs_jour5js;charset=utf8mb4", "root","");
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo json_encode([
        "status" => "error",
        "message" => "Erreur de connexion : " . $e->getMessage()
    ]);
    
    exit; 
}