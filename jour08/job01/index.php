<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice Navigation</title>
</head>
<body>

    <header>
        <h1>Mon Site Web</h1>
        <nav>
            <p>Menu Principal</p>
        </nav>
    </header>

    <hr> <main>
        <h2>Bienvenue sur l'accueil</h2>
        <p>Ceci est le contenu de la page.</p>
        <section>
        <h2>Création de compte</h2>
        
        <form action="index.php" method="post">

            <fieldset>
                <legend>Civilité :</legend>
                <label>
                    <input type="radio" name="civilite" value="M" checked> Monsieur
                </label>
                <label>
                    <input type="radio" name="civilite" value="Mme"> Madame
                </label>
            </fieldset>
            <br>

            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" placeholder="Votre prénom" required>
            <br><br>

            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" placeholder="Votre nom" required>
            <br><br>

            <label for="adresse">Adresse :</label>
            <input type="text" id="adresse" name="adresse" placeholder="Votre adresse complète">
            <br><br>

            <label for="email">Email :</label>
            <input type="email" id="email" name="email" placeholder="exemple@mail.com" required>
            <br><br>

            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" required>
            <br><br>

            <label for="confirm_password">Confirmation du mot de passe :</label>
            <input type="password" id="confirm_password" name="confirm_password" required>
            <br><br>

            <fieldset>
                <legend>Vos passions :</legend>
                
                <label>
                    <input type="checkbox" name="passions[]" value="informatique"> Informatique
                </label><br>
                
                <label>
                    <input type="checkbox" name="passions[]" value="voyages"> Voyages
                </label><br>
                
                <label>
                    <input type="checkbox" name="passions[]" value="sport"> Sport
                </label><br>
                
                <label>
                    <input type="checkbox" name="passions[]" value="lecture"> Lecture
                </label>
            </fieldset>
            <br>

            <button type="submit">Valider le formulaire</button>

        </form>
    </section>
    </main>

    <hr> <footer>
        <h3>Liens utiles</h3>
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="index.php">Inscription</a></li>
            <li><a href="index.php">Connexion</a></li>
            <li><a href="index.php">Rechercher</a></li>
        </ul>
    </footer>

</body>
</html>