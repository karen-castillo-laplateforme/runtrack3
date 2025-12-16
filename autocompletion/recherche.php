<?php 
require_once 'config.php'; 

$results = [];
if(isset($_GET['search'])) {
    $search = $_GET['search'];
    // Recherche globale pour la page de résultats
    $stmt = $pdo->prepare("SELECT * FROM pokemons WHERE nom LIKE :term");
    $stmt->execute(['term' => '%' . $search . '%']);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Résultats de recherche</title>
</head>
<body>
    <?php include 'header.php'; ?>

    <div style="padding: 20px; max-width: 800px; margin: 0 auto;">
        <h2>Résultats pour : "<?= htmlspecialchars($_GET['search'] ?? '') ?>"</h2>
        
        <?php if(count($results) > 0): ?>
            <ul>
            <?php foreach($results as $pokemon): ?>
                <li>
                    <h3><a href="element.php?id=<?= $pokemon['id'] ?>"><?= $pokemon['nom'] ?></a></h3>
                    <p>Type : <?= $pokemon['type'] ?></p>
                </li>
            <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>Aucun Pokémon trouvé.</p>
        <?php endif; ?>
    </div>
</body>
</html>