<?php require_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>PokéSearch - Accueil</title>
    <style>
        /* Style spécifique pour centrer la page d'accueil */
        .home-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 80vh;
        }
        .home-logo { font-size: 3rem; margin-bottom: 20px; color: #333; font-weight: bold; }
    </style>
</head>
<body>
    <div class="home-container">
        <div class="home-logo">PokéSearch</div>
        
        <div class="search-container">
            <input type="text" id="search-input" placeholder="Rechercher un Pokémon..." autocomplete="off">
            <div id="autocomplete-results"></div>
        </div>
        
        <script src="script.js"></script>
        <script>
            // Petit hack pour que le "Entrée" redirige vers recherche.php sur l'accueil
            document.getElementById('search-input').addEventListener('keypress', function (e) {
                if (e.key === 'Enter') {
                    window.location.href = 'recherche.php?search=' + this.value;
                }
            });
        </script>
    </div>
</body>
</html>