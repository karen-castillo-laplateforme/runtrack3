<?php
header('Content-Type: application/json');
try {
    $pdo = new PDO("mysql:host=localhost;dbname=utilisateurs;charset=utf8mb4", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

function get_all_users(PDO $pdo): string {
    try {
        $sql = "SELECT * FROM utilisateurs";
        $stmt = $pdo->query($sql);
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return json_encode($users);
    } catch (PDOException $e) {
        die("Erreur lors de la récupération de l'utilisateur : " . $e->getMessage());
    }
}
$users = get_all_users($pdo);
echo $users;
?>