<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice Navigation & Formulaire</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 flex flex-col min-h-screen"> 
    <header class="bg-blue-600 text-white p-6 flex justify-between items-center shadow-md">
        <h1 class="text-2xl font-bold uppercase tracking-wider">Mon Site Web</h1>
        <nav>
            <p class="font-semibold hover:text-blue-200 cursor-pointer transition">Menu Principal</p>
        </nav>
    </header>

    <main class="container mx-auto p-6 flex-grow">
        
        <h2 class="text-xl font-bold mb-4 text-gray-800">Bienvenue sur l'accueil</h2>
        <p class="mb-8 text-gray-600">Ceci est le contenu de la page.</p>

        <hr class="my-6 border-gray-300">

        <section class="bg-white p-8 rounded-lg shadow-lg max-w-2xl mx-auto border border-gray-100">
            <h2 class="text-2xl font-bold mb-6 text-gray-800 border-b pb-2">Création de compte</h2>
            
            <form action="index.php" method="post" class="space-y-5">
                
                <fieldset>
                    <legend class="font-semibold text-gray-700 mb-2">Civilité :</legend>
                    <div class="flex gap-6">
                        <label class="flex items-center gap-2 cursor-pointer hover:bg-gray-50 p-2 rounded">
                            <input type="radio" name="civilite" value="M" checked class="w-4 h-4 text-blue-600"> Monsieur
                        </label>
                        <label class="flex items-center gap-2 cursor-pointer hover:bg-gray-50 p-2 rounded">
                            <input type="radio" name="civilite" value="Mme" class="w-4 h-4 text-blue-600"> Madame
                        </label>
                    </div>
                </fieldset>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="prenom" class="block text-sm font-medium text-gray-700 mb-1">Prénom</label>
                        <input type="text" id="prenom" name="prenom" placeholder="Votre prénom" required 
                               class="w-full border border-gray-300 p-2 rounded focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none">
                    </div>
                    <div>
                        <label for="nom" class="block text-sm font-medium text-gray-700 mb-1">Nom</label>
                        <input type="text" id="nom" name="nom" placeholder="Votre nom" required 
                               class="w-full border border-gray-300 p-2 rounded focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none">
                    </div>
                </div>

                <div>
                    <label for="adresse" class="block text-sm font-medium text-gray-700 mb-1">Adresse</label>
                    <input type="text" id="adresse" name="adresse" placeholder="Votre adresse complète" 
                           class="w-full border border-gray-300 p-2 rounded focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none">
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <input type="email" id="email" name="email" placeholder="exemple@mail.com" required 
                           class="w-full border border-gray-300 p-2 rounded focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none">
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Mot de passe</label>
                        <input type="password" id="password" name="password" required 
                               class="w-full border border-gray-300 p-2 rounded focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none">
                    </div>
                    <div>
                        <label for="confirm_password" class="block text-sm font-medium text-gray-700 mb-1">Confirmation</label>
                        <input type="password" id="confirm_password" name="confirm_password" required 
                               class="w-full border border-gray-300 p-2 rounded focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none">
                    </div>
                </div>

                <fieldset class="bg-gray-50 p-4 rounded-md">
                    <legend class="font-semibold text-gray-700 mb-2">Vos passions :</legend>
                    <div class="grid grid-cols-2 gap-2">
                        <label class="flex items-center gap-2"><input type="checkbox" name="passions[]" value="informatique" class="rounded text-blue-600"> Informatique</label>
                        <label class="flex items-center gap-2"><input type="checkbox" name="passions[]" value="voyages" class="rounded text-blue-600"> Voyages</label>
                        <label class="flex items-center gap-2"><input type="checkbox" name="passions[]" value="sport" class="rounded text-blue-600"> Sport</label>
                        <label class="flex items-center gap-2"><input type="checkbox" name="passions[]" value="lecture" class="rounded text-blue-600"> Lecture</label>
                    </div>
                </fieldset>

                <div class="pt-2">
                    <button type="submit" class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-4 rounded shadow transition duration-200 ease-in-out transform hover:-translate-y-0.5">
                        Valider mon inscription
                    </button>
                </div>

            </form>
        </section>
    </main>

    <footer class="bg-slate-900 text-white py-8 mt-12">
        <div class="container mx-auto flex flex-col items-center">
            
            <h3 class="text-xl font-bold mb-6 uppercase tracking-widest text-blue-400">Liens utiles</h3>
            
            <ul class="flex flex-wrap justify-center gap-8">
                <li>
                    <a href="index.php" class="hover:text-blue-400 transition-colors duration-300 font-medium">Accueil</a>
                </li>
                <li>
                    <a href="index.php" class="hover:text-blue-400 transition-colors duration-300 font-medium">Inscription</a>
                </li>
                <li>
                    <a href="index.php" class="hover:text-blue-400 transition-colors duration-300 font-medium">Connexion</a>
                </li>
                <li>
                    <a href="index.php" class="hover:text-blue-400 transition-colors duration-300 font-medium">Rechercher</a>
                </li>
            </ul>

            <p class="text-gray-500 text-sm mt-8">© 2024 Mon Site Web. Tous droits réservés.</p>
        </div>
    </footer>

</body>
</html>