<?php
// traitement_autocompletion.php
require_once 'config.php';

if (isset($_GET['search']) && !empty($_GET['search'])) {
    $search = $_GET['search'];

    // 1. Recherche "Commence par"
    $stmt1 = $pdo->prepare("SELECT * FROM pokemons WHERE nom LIKE :term ORDER BY nom ASC LIMIT 5");
    $stmt1->execute(['term' => $search . '%']);
    $startsWith = $stmt1->fetchAll(PDO::FETCH_ASSOC);

    // 2. Recherche "Contient" (mais ne commence pas par)
    // On exclut ceux qui commencent par le terme pour éviter les doublons
    $stmt2 = $pdo->prepare("SELECT * FROM pokemons WHERE nom LIKE :term AND nom NOT LIKE :term_start ORDER BY nom ASC LIMIT 5");
    $stmt2->execute([
        'term' => '%' . $search . '%',
        'term_start' => $search . '%'
    ]);
    $contains = $stmt2->fetchAll(PDO::FETCH_ASSOC);

    // On renvoie un tableau associatif avec les deux catégories
    echo json_encode([
        'starts_with' => $startsWith,
        'contains' => $contains
    ]);
}
?>