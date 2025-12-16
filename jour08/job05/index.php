<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Offres Pricing</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-slate-900 min-h-screen flex items-center justify-center p-6">

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl w-full">

        <div class="relative w-full bg-slate-800 rounded-2xl border border-slate-700 shadow-2xl overflow-hidden hover:border-blue-500 transition-colors duration-300 flex flex-col">
            
            <div class="absolute top-0 right-0 bg-blue-600 text-white text-xs font-bold px-3 py-1 rounded-bl-lg">
                POPULAIRE
            </div>

            <div class="p-8 flex-grow">
                <h3 class="text-blue-400 font-semibold text-sm tracking-wide uppercase">Offre Pro</h3>
                
                <div class="mt-4 flex items-baseline text-white">
                    <span class="text-5xl font-extrabold tracking-tight">29€</span>
                    <span class="ml-2 text-xl font-medium text-slate-400">/mois</span>
                </div>
                
                <p class="mt-4 text-slate-400 text-sm">
                    Idéal pour les freelances et les créateurs indépendants.
                </p>

                <ul class="mt-8 space-y-4">
                    <li class="flex items-center">
                        <div class="flex-shrink-0 w-6 h-6 rounded-full bg-blue-500/10 flex items-center justify-center">
                            <i class="fa-solid fa-check text-blue-400 text-xs"></i>
                        </div>
                        <span class="ml-3 text-slate-300">Projets illimités</span>
                    </li>
                    <li class="flex items-center">
                        <div class="flex-shrink-0 w-6 h-6 rounded-full bg-blue-500/10 flex items-center justify-center">
                            <i class="fa-solid fa-check text-blue-400 text-xs"></i>
                        </div>
                        <span class="ml-3 text-slate-300">Support prioritaire 24/7</span>
                    </li>
                    <li class="flex items-center">
                        <div class="flex-shrink-0 w-6 h-6 rounded-full bg-slate-700 flex items-center justify-center">
                            <i class="fa-solid fa-xmark text-slate-500 text-xs"></i>
                        </div>
                        <span class="ml-3 text-slate-500 line-through decoration-slate-600">Accès API illimité</span>
                    </li>
                </ul>
            </div>

            <div class="p-8 bg-slate-800/50 border-t border-slate-700">
                <button class="w-full block bg-blue-600 hover:bg-blue-500 text-white font-bold py-3 px-4 rounded-xl transition duration-200 transform hover:-translate-y-1 shadow-lg shadow-blue-500/30">
                    Choisir l'offre Pro
                </button>
            </div>
        </div>

        <div class="relative w-full bg-slate-800 rounded-2xl border border-slate-700 shadow-2xl overflow-hidden hover:border-purple-500 transition-colors duration-300 flex flex-col">
            
            <div class="p-8 flex-grow">
                <h3 class="text-purple-400 font-semibold text-sm tracking-wide uppercase">Offre Entreprise</h3>
                
                <div class="mt-4 flex items-baseline text-white">
                    <span class="text-5xl font-extrabold tracking-tight">99€</span>
                    <span class="ml-2 text-xl font-medium text-slate-400">/mois</span>
                </div>
                
                <p class="mt-4 text-slate-400 text-sm">
                    Pour les agences et les équipes en pleine croissance.
                </p>

                <ul class="mt-8 space-y-4">
                    <li class="flex items-center">
                        <div class="flex-shrink-0 w-6 h-6 rounded-full bg-purple-500/10 flex items-center justify-center">
                            <i class="fa-solid fa-check text-purple-400 text-xs"></i>
                        </div>
                        <span class="ml-3 text-slate-300">Tout de l'offre Pro</span>
                    </li>
                    <li class="flex items-center">
                        <div class="flex-shrink-0 w-6 h-6 rounded-full bg-purple-500/10 flex items-center justify-center">
                            <i class="fa-solid fa-check text-purple-400 text-xs"></i>
                        </div>
                        <span class="ml-3 text-slate-300">Utilisateurs illimités</span>
                    </li>
                    <li class="flex items-center">
                        <div class="flex-shrink-0 w-6 h-6 rounded-full bg-purple-500/10 flex items-center justify-center">
                            <i class="fa-solid fa-check text-purple-400 text-xs"></i>
                        </div>
                        <span class="ml-3 text-slate-300">Accès API illimité</span>
                    </li>
                </ul>
            </div>

            <div class="p-8 bg-slate-800/50 border-t border-slate-700">
                <button class="w-full block bg-purple-600 hover:bg-purple-500 text-white font-bold py-3 px-4 rounded-xl transition duration-200 transform hover:-translate-y-1 shadow-lg shadow-purple-500/30">
                    Contacter les ventes
                </button>
            </div>
        </div>

    </div>

</body>
</html>