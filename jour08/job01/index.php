<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice Navigation & Formulaire</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50"> <header class="bg-blue-600 text-white p-6 flex justify-between items-center shadow-md">
        
        <h1 class="text-2xl font-bold uppercase tracking-wider">Mon Site Web</h1>
        
        <nav>
            <p class="font-semibold hover:text-blue-200 cursor-pointer">Menu Principal</p>
        </nav>
    </header>

    <main class="container mx-auto p-6">
        
        <h2 class="text-xl font-bold mb-4">Bienvenue sur l'accueil</h2>
        <p class="mb-8">Ceci est le contenu de la page.</p>

        <hr class="my-6 border-gray-300">

        <section class="bg-white p-6 rounded-lg shadow-md max-w-2xl">
            <h2 class="text-2xl font-bold mb-6 text-gray-800">Création de compte</h2>
            
            <form action="index.php" method="post" class="space-y-4">
                
                <fieldset>
                    <legend class="font-semibold text-gray-700 mb-2">Civilité :</legend>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2 cursor-pointer">
                            <input type="radio" name="civilite" value="M" checked class="accent-blue-600"> Monsieur
                        </label>
                        <label class="flex items-center gap-2 cursor-pointer">
                            <input type="radio" name="civilite" value="Mme" class="accent-blue-600"> Madame
                        </label>
                    </div>
                </fieldset>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="prenom" class="block text-gray-700 mb-1">Prénom :</label>
                        <input type="text" id="prenom" name="prenom" placeholder="Votre prénom" required 
                               class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:border-blue-500">
                    </div>
                    <div>
                        <label for="nom" class="block text-gray-700 mb-1">Nom :</label>
                        <input type="text" id="nom" name="nom" placeholder="Votre nom" required 
                               class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:border-blue-500">
                    </div>
                </div>

                <div>
                    <label for="adresse" class="block text-gray-700 mb-1">Adresse :</label>
                    <input type="text" id="adresse" name="adresse" placeholder="Votre adresse complète" 
                           class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:border-blue-500">
                </div>

                <div>
                    <label for="email" class="block text-gray-700 mb-1">Email :</label>
                    <input type="email" id="email" name="email" placeholder="exemple@mail.com" required 
                           class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:border-blue-500">
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="password" class="block text-gray-700 mb-1">Mot de passe :</label>
                        <input type="password" id="password" name="password" required 
                               class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:border-blue-500">
                    </div>
                    <div>
                        <label for="confirm_password" class="block text-gray-700 mb-1">Confirmation :</label>
                        <input type="password" id="confirm_password" name="confirm_password" required 
                               class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:border-blue-500">
                    </div>
                </div>

                <fieldset>
                    <legend class="font-semibold text-gray-700 mb-2 mt-2">Vos passions :</legend>
                    <div class="flex flex-wrap gap-4">
                        <label class="flex items-center gap-2"><input type="checkbox" name="passions[]" value="informatique" class="accent-blue-600"> Informatique</label>
                        <label class="flex items-center gap-2"><input type="checkbox" name="passions[]" value="voyages" class="accent-blue-600"> Voyages</label>
                        <label class="flex items-center gap-2"><input type="checkbox" name="passions[]" value="sport" class="accent-blue-600"> Sport</label>
                        <label class="flex items-center gap-2"><input type="checkbox" name="passions[]" value="lecture" class="accent-blue-600"> Lecture</label>
                    </div>
                </fieldset>

                <div class="pt-4">
                    <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-6 rounded transition duration-300">
                        Valider le formulaire
                    </button>
                </div>

            </form>
        </section>
    </main>

    <footer class="bg-gray-800 text-white p-6 mt-10">
        <div class="container mx-auto text-center">
            <h3 class="text-lg font-bold mb-4">Liens utiles</h3>
            <ul class="flex justify-center space-x-6">
                <li><a href="index.php" class="hover:text-blue-400">Accueil</a></li>
                <li><a href="index.php" class="hover:text-blue-400">Inscription</a></li>
                <li><a href="index.php" class="hover:text-blue-400">Connexion</a></li>
                <li><a href="index.php" class="hover:text-blue-400">Rechercher</a></li>
            </ul>
        </div>
    </footer>

</body>
</html>