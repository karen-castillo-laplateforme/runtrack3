<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Moderne avec Icônes</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gradient-to-br from-blue-50 to-indigo-100 min-h-screen flex flex-col font-sans text-slate-800">

    <header class="bg-white/80 backdrop-blur-md sticky top-0 z-50 border-b border-gray-200 shadow-sm">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-extrabold text-blue-600 tracking-tighter flex items-center gap-2">
                <i class="fa-solid fa-layer-group"></i> MON SITE
            </h1>
            <nav>
                <p class="font-medium text-slate-600 hover:text-blue-600 cursor-pointer transition">
                    <i class="fa-solid fa-bars mr-2"></i>Menu
                </p>
            </nav>
        </div>
    </header>

    <main class="flex-grow container mx-auto px-4 py-10 flex justify-center">
        
        <section class="bg-white w-full max-w-3xl rounded-2xl shadow-2xl overflow-hidden border border-gray-100">
            
            <div class="bg-blue-600 p-8 text-center relative overflow-hidden">
                <div class="absolute top-0 left-0 w-full h-full bg-white opacity-10 transform -skew-y-6 scale-150 origin-bottom-left"></div>
                
                <h2 class="text-3xl font-bold text-white relative z-10">Création de compte</h2>
                <p class="text-blue-100 mt-2 relative z-10">Rejoignez notre communauté dès aujourd'hui</p>
            </div>
            
            <form action="index.php" method="post" class="p-8 space-y-6">

                <div>
                    <span class="block text-sm font-semibold text-gray-700 mb-3">Civilité</span>
                    <div class="flex gap-4">
                        <label class="cursor-pointer">
                            <input type="radio" name="civilite" value="M" checked class="peer sr-only">
                            <div class="px-4 py-2 rounded-lg border border-gray-200 text-gray-600 hover:bg-gray-50 peer-checked:bg-blue-50 peer-checked:text-blue-600 peer-checked:border-blue-500 transition-all flex items-center gap-2 shadow-sm">
                                <i class="fa-solid fa-user-tie"></i> Monsieur
                            </div>
                        </label>
                        <label class="cursor-pointer">
                            <input type="radio" name="civilite" value="Mme" class="peer sr-only">
                            <div class="px-4 py-2 rounded-lg border border-gray-200 text-gray-600 hover:bg-gray-50 peer-checked:bg-pink-50 peer-checked:text-pink-600 peer-checked:border-pink-500 transition-all flex items-center gap-2 shadow-sm">
                                <i class="fa-solid fa-user-nurse"></i> Madame
                            </div>
                        </label>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="relative group">
                        <label for="prenom" class="block text-sm font-medium text-gray-700 mb-1">Prénom</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-400 group-focus-within:text-blue-500 transition-colors">
                                <i class="fa-regular fa-user"></i>
                            </div>
                            <input type="text" id="prenom" name="prenom" placeholder="John" required 
                                   class="w-full pl-10 pr-4 py-3 bg-gray-50 border border-gray-200 rounded-lg focus:bg-white focus:outline-none focus:ring-2 focus:ring-blue-500/50 focus:border-blue-500 transition-all shadow-sm">
                        </div>
                    </div>
                    <div class="relative group">
                        <label for="nom" class="block text-sm font-medium text-gray-700 mb-1">Nom</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-400 group-focus-within:text-blue-500 transition-colors">
                                <i class="fa-solid fa-signature"></i>
                            </div>
                            <input type="text" id="nom" name="nom" placeholder="Doe" required 
                                   class="w-full pl-10 pr-4 py-3 bg-gray-50 border border-gray-200 rounded-lg focus:bg-white focus:outline-none focus:ring-2 focus:ring-blue-500/50 focus:border-blue-500 transition-all shadow-sm">
                        </div>
                    </div>
                </div>

                <div class="relative group">
                    <label for="adresse" class="block text-sm font-medium text-gray-700 mb-1">Adresse</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-400 group-focus-within:text-blue-500 transition-colors">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <input type="text" id="adresse" name="adresse" placeholder="123 rue de l'Exemple" 
                               class="w-full pl-10 pr-4 py-3 bg-gray-50 border border-gray-200 rounded-lg focus:bg-white focus:outline-none focus:ring-2 focus:ring-blue-500/50 focus:border-blue-500 transition-all shadow-sm">
                    </div>
                </div>

                <div class="relative group">
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-400 group-focus-within:text-blue-500 transition-colors">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <input type="email" id="email" name="email" placeholder="john.doe@exemple.com" required 
                               class="w-full pl-10 pr-4 py-3 bg-gray-50 border border-gray-200 rounded-lg focus:bg-white focus:outline-none focus:ring-2 focus:ring-blue-500/50 focus:border-blue-500 transition-all shadow-sm">
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="relative group">
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Mot de passe</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-400 group-focus-within:text-blue-500 transition-colors">
                                <i class="fa-solid fa-lock"></i>
                            </div>
                            <input type="password" id="password" name="password" required placeholder="••••••••"
                                   class="w-full pl-10 pr-4 py-3 bg-gray-50 border border-gray-200 rounded-lg focus:bg-white focus:outline-none focus:ring-2 focus:ring-blue-500/50 focus:border-blue-500 transition-all shadow-sm">
                        </div>
                    </div>
                    <div class="relative group">
                        <label for="confirm_password" class="block text-sm font-medium text-gray-700 mb-1">Confirmation</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-400 group-focus-within:text-blue-500 transition-colors">
                                <i class="fa-solid fa-check-double"></i>
                            </div>
                            <input type="password" id="confirm_password" name="confirm_password" required placeholder="••••••••"
                                   class="w-full pl-10 pr-4 py-3 bg-gray-50 border border-gray-200 rounded-lg focus:bg-white focus:outline-none focus:ring-2 focus:ring-blue-500/50 focus:border-blue-500 transition-all shadow-sm">
                        </div>
                    </div>
                </div>

                <div>
                    <span class="block text-sm font-semibold text-gray-700 mb-3">Vos passions</span>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
                        
                        <label class="cursor-pointer relative">
                            <input type="checkbox" name="passions[]" value="informatique" class="peer sr-only">
                            <div class="p-3 rounded-lg border border-gray-200 hover:border-blue-300 hover:bg-blue-50 peer-checked:bg-blue-600 peer-checked:text-white peer-checked:border-blue-600 transition-all text-center group">
                                <i class="fa-solid fa-laptop-code mb-1 text-xl"></i>
                                <span class="block text-xs font-medium">Informatique</span>
                            </div>
                        </label>

                        <label class="cursor-pointer relative">
                            <input type="checkbox" name="passions[]" value="voyages" class="peer sr-only">
                            <div class="p-3 rounded-lg border border-gray-200 hover:border-green-300 hover:bg-green-50 peer-checked:bg-green-500 peer-checked:text-white peer-checked:border-green-500 transition-all text-center">
                                <i class="fa-solid fa-plane mb-1 text-xl"></i>
                                <span class="block text-xs font-medium">Voyages</span>
                            </div>
                        </label>

                        <label class="cursor-pointer relative">
                            <input type="checkbox" name="passions[]" value="sport" class="peer sr-only">
                            <div class="p-3 rounded-lg border border-gray-200 hover:border-orange-300 hover:bg-orange-50 peer-checked:bg-orange-500 peer-checked:text-white peer-checked:border-orange-500 transition-all text-center">
                                <i class="fa-solid fa-dumbbell mb-1 text-xl"></i>
                                <span class="block text-xs font-medium">Sport</span>
                            </div>
                        </label>

                        <label class="cursor-pointer relative">
                            <input type="checkbox" name="passions[]" value="lecture" class="peer sr-only">
                            <div class="p-3 rounded-lg border border-gray-200 hover:border-purple-300 hover:bg-purple-50 peer-checked:bg-purple-500 peer-checked:text-white peer-checked:border-purple-500 transition-all text-center">
                                <i class="fa-solid fa-book-open mb-1 text-xl"></i>
                                <span class="block text-xs font-medium">Lecture</span>
                            </div>
                        </label>

                    </div>
                </div>

                <div class="pt-4">
                    <button type="submit" class="w-full bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white font-bold py-4 px-6 rounded-xl shadow-lg transform transition duration-200 hover:scale-[1.02] flex justify-center items-center gap-2">
                        <span>Valider mon inscription</span>
                        <i class="fa-solid fa-paper-plane"></i>
                    </button>
                </div>

            </form>
        </section>
    </main>

    <footer class="bg-slate-900 text-white py-10 mt-auto border-t border-slate-800">
        <div class="container mx-auto flex flex-col items-center px-4">
            <div class="flex gap-6 mb-6">
                 <a href="#" class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center hover:bg-blue-600 transition"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#" class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center hover:bg-sky-400 transition"><i class="fa-brands fa-twitter"></i></a>
                <a href="#" class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center hover:bg-pink-600 transition"><i class="fa-brands fa-instagram"></i></a>
            </div>
            <ul class="flex flex-wrap justify-center gap-6 md:gap-8 text-sm md:text-base font-medium text-slate-400">
                <li><a href="index.php" class="hover:text-white transition-colors">Accueil</a></li>
                <li><a href="index.php" class="hover:text-white transition-colors">Inscription</a></li>
                <li><a href="index.php" class="hover:text-white transition-colors">Connexion</a></li>
                <li><a href="index.php" class="hover:text-white transition-colors">Rechercher</a></li>
            </ul>
            <p class="text-slate-600 text-sm mt-8">© 2024 Mon Site Web. Designé avec TailwindCSS.</p>
        </div>
    </footer>

</body>
</html>