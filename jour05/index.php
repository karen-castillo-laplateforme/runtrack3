<?php
session_start();
// Vous n'avez pas besoin d'initialiser $nom et $prenom ici.
// La ligne var_dump($_SESSION["nom"]); est pour le débogage, vous pouvez la supprimer en production.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <main id="index-main">
    <?php if (isset($_SESSION['prenom']) && isset($_SESSION['nom'])): ?>
      <p>Bonjour <?= htmlspecialchars($_SESSION['prenom'] . ' ' . $_SESSION['nom']) ?></p>
    <?php else: ?>
      <a href="connexion.php">Connexion</a>
      <a href="inscription.php">Inscription</a>
    <?php endif; ?>
  </main>
</body>
</html>