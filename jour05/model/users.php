<?php
header('Content-Type: application/json');
require "../config/db.php";
session_start();

function create_user(PDO $pdo, string $email, string $nom, string $prenom, string $password){
  try {
    $stmt= $pdo->prepare("INSERT INTO utilisateurs(email, nom, prenom, password)
    VALUES (:email, :nom, :prenom, :password)");
    $stmt->bindValue(":email", $email);
    $stmt->bindValue(":nom", $nom);
    $stmt->bindValue(":prenom", $prenom);
    $stmt->bindValue(":password", password_hash($password, PASSWORD_DEFAULT));

    $stmt->execute();

    return [
      "status" => "ok", 
      "id" => $pdo->lastInsertId()
    ];

  } catch (PDOException $e) {
      return [
        "status" => "error", 
        "message" => $e->getMessage()
      ];
  }
}

function get_user_by_email(PDO $pdo, string $email, string $password){
  try{
    $stmt= $pdo->prepare("SELECT * from utilisateurs WHERE email = :email");
    $stmt->bindValue(":email", $email);
    $stmt->execute();

    $user= $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$user || !password_verify($password, $user["password"])) {
      return ["status" => "error", "message" => "Email ou mot de passe incorrect"];
    }

    $_SESSION["user_id"] = $user["id"];
    $_SESSION["nom"] = $user["nom"];
    $_SESSION["prenom"] = $user["prenom"];

    return ["status" => "ok", "user" => $user];
    
  } catch (PDOException $e){
    return ["status" => "error", "message" => $e->getMessage()];
  }
}

// ROUTER
$action = $_POST["action"] ?? null;

if ($action === "signUp") {

  $email = $_POST["email"] ?? "";
  $nom = $_POST["nom"] ?? "";
  $prenom = $_POST["prenom"] ?? "";
  $password = $_POST["password"] ?? "";

  $result = create_user($pdo, $email, $nom, $prenom, $password);

} elseif ($action === "signIn") {

  $email = $_POST["email"] ?? "";
  $password = $_POST["password"] ?? "";

  $result = get_user_by_email($pdo, $email, $password);

} else {

  $result = ["status" => "error", "message" => "Action inconnue"];
}

// Réponse JSON propre
echo json_encode($result, JSON_UNESCAPED_UNICODE);
exit;
