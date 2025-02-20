<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ramadan 2025 - Partagez vos expériences</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#3b5441', // Vert foncé islamique
                        secondary: '#c19b4a', // Or/cuivre pour effet luxueux
                        accent: '#e9d8a6', // Beige clair
                        dark: '#292425', // Presque noir
                    },
                    fontFamily: {
                        arabic: ['Arial', 'sans-serif']
                    }
                }
            }
        }
    </script>
    <style>
        .crescent-moon {
            clip-path: ellipse(50% 50% at 50% 50%);
            position: relative;
        }

        .crescent-moon::after {
            content: "";
            position: absolute;
            top: -10%;
            left: 15%;
            width: 100%;
            height: 100%;
            background-color: white;
            clip-path: ellipse(50% 50% at 50% 50%);
        }

        .islamic-pattern {
            background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><rect width="100%" height="100%" fill="none"/><path d="M0,0 L100,0 L100,100 L0,100 Z" stroke="%233b5441" stroke-width="0.5" fill="none" opacity="0.1"/><circle cx="50" cy="50" r="30" stroke="%233b5441" stroke-width="0.5" fill="none" opacity="0.1"/><circle cx="50" cy="50" r="20" stroke="%233b5441" stroke-width="0.5" fill="none" opacity="0.1"/><path d="M50,20 L50,80 M20,50 L80,50" stroke="%233b5441" stroke-width="0.5" opacity="0.1"/></svg>');
        }
    </style>
</head>

<body class="bg-white min-h-screen islamic-pattern">
    <!-- Header avec logo et navigation -->
    <header class="bg-primary text-white shadow-md">
        <div class="container mx-auto px-4 py-4 flex flex-col md:flex-row justify-between items-center">
            <div class="flex items-center mb-4 md:mb-0">
                <!-- Logo: Croissant de lune -->
                <div class="w-10 h-10 bg-secondary rounded-full crescent-moon mr-3"></div>
                <h1 class="text-2xl font-bold">Ramadan 2025</h1>
            </div>

            <!-- Navigation principale -->
            <nav>
                <ul class="flex flex-wrap gap-x-6 gap-y-2">
                    <li><a href="/" class="hover:text-accent transition-colors">Expériences</a></li>
                    <li><a href="/" class="hover:text-accent transition-colors">Recettes</a></li>
                    <li><a href="/" class="hover:text-accent transition-colors">Statistiques</a></li>
                    <li><a href="/"
                            class="bg-secondary hover:bg-accent hover:text-dark px-4 py-2 rounded-md transition-colors">Connexion</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- Bannière principale -->
    <section class="bg-primary bg-opacity-90 text-white py-16 text-center relative overflow-hidden">
        <div class="absolute inset-0 opacity-40">
            <img src="https://i.pinimg.com/736x/f4/de/2e/f4de2ea69727b150c0ae0f107ab7d1d6.jpg" alt=" islamMotifique"
                class="w-full h-full object-cover">
        </div>
        <div class="container mx-auto px-4 relative z-10">
            <h2 class="text-4xl font-bold mb-4">Bienvenue sur notre plateforme de partage Ramadan 2025</h2>
            <p class="text-xl mb-8 max-w-3xl mx-auto">Partagez vos expériences, recettes et conseils spirituels pendant
                ce mois béni</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#partager"
                    class="bg-secondary hover:bg-accent hover:text-dark text-white px-6 py-3 rounded-md transition-colors font-bold">Partager
                    mon expérience</a>
                <button id="openPopup"
                    class="bg-dark hover:bg-accent hover:text-dark text-white px-6 py-3 rounded-md transition-colors font-bold">
                    Ajouter une Recette</button>
            </div>
        </div>
    </section>

    <!-- Compteur Ramadan -->
    <section class="bg-white py-8">
        <div class="container mx-auto px-4">
            <div class="bg-accent bg-opacity-30 rounded-lg p-6 max-w-md mx-auto text-center">
                <h3 class="text-2xl font-bold text-primary mb-4">Compte à rebours</h3>
                <div class="text-4xl font-bold text-secondary" id="countdown">15 jours</div>
                <p class="mt-2 text-dark">avant le début du Ramadan 2025</p>
            </div>
        </div>
    </section>

    <!-- Section Expériences -->
    <section id="experiences" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-primary mb-12 text-center">Expériences partagées</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Carte d'expérience 1 -->
                @foreach ($Postes as $item)
                    <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform hover:scale-105">
                        <img src="{{ asset('storage/' . $item->image) }}" alt="Expérience du Ramadan"
                            class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-primary mb-2">{{ $item->Titre }}</h3>
                            <p class="text-dark mb-4">{{ Str::limit($item->content, 20) }}</p>
                            <div class="flex justify-between items-center">
                                <span class="text-secondary text-sm"><i class="fas fa-user mr-1"></i>
                                    {{ $item->nome_createur }}</span>
                                <span class="text-secondary text-sm"><i
                                        class="fas fa-calendar mr-1"></i>{{ $item->created_at->diffForHumans() }}</span>
                            </div>
                            <div class="mt-4 pt-4 border-t border-gray-200">
                                <button onclick="openPopup()"
                                    class="text-primary hover:text-secondary transition-colors">Lire la suite <i
                                        class="fas fa-arrow-right ml-1"></i></button>
                            </div>
                        </div>
                    </div>


                    <!-- Popup (Modale) -->
                    <div id="popup"
                        class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center p-4 hidden">
                        <div class="bg-white rounded-lg shadow-lg p-6 max-w-lg w-full relative">
                            <button onclick="closePopup()"
                                class="absolute top-2 right-2 text-gray-600 hover:text-gray-800 text-2xl">&times;</button>
                            <h3 class="text-xl font-bold text-primary mb-4">{{ $item->Titre }}
                                <p class="text-dark text-base">{{ $item->content }}</p>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="text-center mt-12">
                <a href="#"
                    class="inline-block bg-primary hover:bg-secondary text-white px-6 py-3 rounded-md transition-colors">Voir
                    plus d'expériences</a>
            </div>
        </div>
    </section>

    <!-- Section Recettes -->


    <section id="m" class="py-16 bg-accent bg-opacity-10">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-primary mb-8 text-center">Recettes pour l'Iftar et le Suhoor</h2>

            <!-- Filtres de recettes -->
            <div class="mb-12 flex flex-wrap justify-center gap-4">
                <a href="{{ route('index', ['category' => 0]) }}"
                    class="px-4 py-2 rounded-full bg-primary text-white hover:bg-secondary transition-colors">Toutes</a>
                <a href="{{ route('index', ['category' => 1]) }}"
                    class="px-4 py-2 rounded-full bg-white text-primary hover:bg-secondary hover:text-white transition-colors">Entrées</a>
                <a href="{{ route('index', ['category' => 2]) }}"
                    class="px-4 py-2 rounded-full bg-white text-primary hover:bg-secondary hover:text-white transition-colors">Plats
                    principaux</a>
                <a href="{{ route('index', ['category' => 3]) }}"
                    class="px-4 py-2 rounded-full bg-white text-primary hover:bg-secondary hover:text-white transition-colors">Desserts</a>
                <a href="{{ route('index', ['category' => 4]) }}"
                    class="px-4 py-2 rounded-full bg-white text-primary hover:bg-secondary hover:text-white transition-colors">Boissons</a>
                <a href="{{ route('index', ['category' => 5]) }}"
                    class="px-4 py-2 rounded-full bg-white text-primary hover:bg-secondary hover:text-white transition-colors">Suhoor</a>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Recette 1 -->
            @foreach ($recipes as $recipe)
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <a href="{{ route('pecipesDitail', $recipe->id) }}" class=>
                        <img src="{{ asset('storage/' . $recipe->image) }}" alt="Chorba"
                            class="w-full h-48 object-cover">
                    </a>
                    <div class="p-6">
                        <span
                            class="inline-block px-3 py-1 bg-secondary text-white text-sm rounded-full mb-3">{{ $recipe->category->nom_categorie }}</span>
                        <h3 class="text-xl font-bold text-primary mb-2">{{ $recipe->title }}</h3>
                        <p class="text-dark mb-4">{{ $recipe->description }}</p>
                        <div class="flex items-center mb-4">
                            <div class="flex text-secondary">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <span class="text-dark text-sm ml-2"></span>
                        </div>
                        <div class="flex justify-between items-center text-sm text-dark">
                            <span><i class="fas fa-clock mr-1"></i> {{ $recipe->prep_time }} min</span>
                            <span><i class="fas fa-user-friends mr-1"></i> {{ $recipe->servings }} personnes</span>
                            <span><i class="fas fa-utensils mr-1"></i> {{ $recipe->difficulty }}</span>
                        </div>
                        <div class="border-t border-gray-100 mt-4 pt-4">
                            <a
                            href="{{ route('view', $recipe->id) }}"
                                class="w-full flex items-center justify-center gap-2 px-4 py-2 bg-white border border-primary text-primary rounded-md hover:bg-primary hover:text-white transition-colors">
                                <i class="fas fa-comment"></i>
                                <span>Ajouter un commentaire</span>
                        </a>
                        </div>
                    </div>
                </div>


            @endforeach
        </div>

        <div class="text-center mt-12">
            <button onclick="openPopup()"
                class="inline-block bg-primary hover:bg-secondary text-white px-6 py-3 rounded-md transition-colors">Découvrir
                plus de recettes</button>
        </div>

        </div>

        <!-- Section Statistiques -->
        <section id="kk" class="py-16 bg-white">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-primary mb-12 text-center">Statistiques de la communauté</h2>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- Stat 1 -->
                    <div class="bg-accent bg-opacity-20 rounded-lg p-6 text-center">
                        <div class="text-4xl font-bold text-secondary mb-2">{{ $totalRecipes }}</div>
                        <p class="text-primary"> Total de publications</p>
                    </div>

                    <!-- Stat 2 -->
                    <div class="bg-accent bg-opacity-20 rounded-lg p-6 text-center">
                        <div class="text-4xl font-bold text-secondary mb-2">183</div>
                        <p class="text-primary">Recettes publiées</p>
                    </div>

                    <!-- Stat 3 -->
                    <div class="bg-accent bg-opacity-20 rounded-lg p-6 text-center">
                        <div class="text-4xl font-bold text-secondary mb-2">1,728</div>
                        <p class="text-primary">Membres actifs</p>
                    </div>

                    <!-- Stat 4 -->
                    <div class="bg-accent bg-opacity-20 rounded-lg p-6 text-center">
                        <div class="text-4xl font-bold text-secondary mb-2">8,345</div>
                        <p class="text-primary">Commentaires</p>
                    </div>
                </div>

                <!-- Top recettes -->
                <div class="mt-16">
                    <h3 class="text-2xl font-bold text-primary mb-8 text-center">Recettes les plus populaires</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        @foreach ($popularRecipes as $poste)
                            <!-- Top 1 -->
                            <div class="flex bg-white rounded-lg shadow-md overflow-hidden">
                                <img src="{{ asset('storage/' . $poste->image) }}" alt="Harira"
                                    class="w-32 h-32 object-cover">
                                <div class="p-4 flex-1">
                                    <div class="flex justify-between items-start">
                                        <h4 class="text-lg font-bold text-primary">{{ $poste->title }}</h4>
                                        <div class="flex text-secondary text-sm">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <p class="text-dark text-sm mt-2 mb-3">{{ $poste->description }}</p>

                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <!-- Section Partager -->
        <section id="partagerd" class="py-16 bg-primary bg-opacity-5">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-primary mb-8 text-center">Partagez votre expérience</h2>

                <div class="max-w-3xl mx-auto bg-white rounded-lg shadow-md p-8">
                    <form action="{{ route('store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-6">
                            <label for="username" class="block text-primary font-medium mb-2">Nom
                                d'utilisateur</label>
                            <input type="text" id="username" name="username"
                                class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-secondary">
                        </div>

                        <div class="mb-6">
                            <label for="title" class="block text-primary font-medium mb-2">Titre</label>
                            <input type="text" id="title" name="Titre"
                                class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-secondary">
                        </div>

                        <div class="mb-6">
                            <label for="content" class="block text-primary font-medium mb-2">Contenu</label>
                            <textarea id="content" name="content" rows="6"
                                class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-secondary"></textarea>
                        </div>

                        <div class="mb-6">
                            <label class="block text-primary font-medium mb-2">Ajouter des images</label>
                            <div class="border-2 border-dashed border-gray-300 rounded-md p-6 text-center relative">
                                <input type="file" id="imageUpload" name="image"
                                    class="absolute inset-0 w-full h-full opacity-0 cursor-pointer">
                                <div class="flex flex-col items-center">
                                    <svg class="w-12 h-12 text-gray-400 mb-3" fill="none" stroke="currentColor"
                                        stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3 16.5V18a2.5 2.5 0 002.5 2.5h13A2.5 2.5 0 0021 18v-1.5M3 12l6-6m0 0l6 6m-6-6v12">
                                        </path>
                                    </svg>
                                    <p class="text-gray-500 mb-2">Glissez-déposez vos images ici</p>
                                    <p class="text-gray-400 text-sm mb-4">ou cliquez pour sélectionner</p>
                                    <button type="button"
                                        class="bg-primary hover:bg-secondary text-white px-4 py-2 rounded-md transition-colors">
                                        Parcourir les fichiers
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="text-center">
                            <button type="submit"
                                class="bg-secondary hover:bg-primary text-white px-8 py-3 rounded-md transition-colors font-bold">
                                Publier mon contenu
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </section>

        <!-- Pied de page -->
        <footer class="bg-dark text-white py-12">
            <div class="container mx-auto px-4">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div>
                        <div class="flex items-center mb-4">
                            <div class="w-10 h-10 bg-secondary rounded-full crescent-moon mr-3"></div>
                            <h3 class="text-xl font-bold">Ramadan 2025</h3>
                        </div>
                        <p class="text-gray-400 mb-4">Une plateforme communautaire pour partager l'expérience du
                            Ramadan.
                        </p>
                        <div class="flex space-x-4">
                            <a href="#" class="text-gray-400 hover:text-white transition-colors"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a href="#" class="text-gray-400 hover:text-white transition-colors"><i
                                    class="fab fa-twitter"></i></a>
                            <a href="#" class="text-gray-400 hover:text-white transition-colors"><i
                                    class="fab fa-instagram"></i></a>
                            <a href="#" class="text-gray-400 hover:text-white transition-colors"><i
                                    class="fab fa-youtube"></i></a>
                        </div>
                    </div>

                    <div>
                        <h4 class="text-white font-bold mb-4">Liens rapides</h4>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Accueil</a>
                            </li>
                            <li><a href="#experiences"
                                    class="text-gray-400 hover:text-white transition-colors">Expériences</a></li>
                            <li><a href="#recettes"
                                    class="text-gray-400 hover:text-white transition-colors">Recettes</a>
                            </li>
                            <li><a href="#statistiques"
                                    class="text-gray-400 hover:text-white transition-colors">Statistiques</a></li>
                            <li><a href="#partager"
                                    class="text-gray-400 hover:text-white transition-colors">Partager</a>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <h4 class="text-white font-bold mb-4">Ressources</h4>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Calendrier
                                    du
                                    Ramadan</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Horaires de
                                    prière</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Guide du
                                    Ramadan</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Conseils
                                    spirituels</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white transition-colors">FAQ</a>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <h4 class="text-white font-bold mb-4">Contactez-nous</h4>
                        <ul class="space-y-2 text-gray-400">
                            <li><i class="fas fa-envelope mr-2"></i> contact@ramadan2025.com</li>
                            <li><i class="fas fa-phone mr-2"></i> +33 1 23 45 67 89</li>
                            <li><i class="fas fa-map-marker-alt mr-2"></i> Paris, France</li>
                        </ul>
                        <div class="mt-4">
                            <h5 class="text-white font-medium mb-2">Inscrivez-vous à notre newsletter</h5>
                            <form class="flex">
                                <input type="email" placeholder="Votre email"
                                    class="flex-1 px-3 py-2 rounded-l-md text-dark focus:outline-none">
                                <button type="submit"
                                    class="bg-secondary px-3 py-2 rounded-r-md hover:bg-accent hover:text-dark transition-colors">
                                    <i class="fas fa-paper-plane"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="mt-12 pt-8 border-t border-gray-800 text-center text-gray-500 text-sm">
                    <p>© 2025 Ramadan Community Platform. Tous droits réservés.</p>
                </div>
            </div>
        </footer>
        @include('composent.alert');
        {{-- <form action="{{ route('recipes') }}" method="POST">
        @csrf
        <div>
            <label for="title">Titre</label>
            <input type="text" name="title" id="title">
        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description"></textarea>
        </div>
        <button type="submit">Soumettre</button>
    </form> --}}



        <div id="recipePopup" class="fixed inset-0 bg-gray-900 bg-opacity-50 flex justify-center items-center hidden">
            <div class="w-full max-w-md bg-white rounded-lg shadow-md p-6 space-y-4 relative">
                <button onclick="closePopup()"
                    class="absolute top-3 right-3 text-gray-600 hover:text-gray-900 text-2xl font-bold">&times;</button>

                <h2 class="text-2xl font-bold text-recipe-green mb-4">Ajouter une Recette</h2>

                <form action="{{ route('recipes') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="category" class="block text-sm font-medium text-gray-700 mb-1">Catégorie</label>
                        <select id="category" name="category_id"
                            class="w-full p-2 border border-gray-300 rounded-md focus:ring-recipe-green focus:border-recipe-green">
                            <option value="1">Entrée</option>
                            <option value="2">Plat principal</option>
                            <option value="3">Dessert</option>
                            <option value="4">Suhoor</option>
                            <option value="5">Boissons</option>
                        </select>
                    </div>

                    <div>
                        <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Titre</label>
                        <input type="text" id="title" name="title"
                            class="w-full p-2 border border-gray-300 rounded-md focus:ring-recipe-green focus:border-recipe-green"
                            placeholder="Chicken Alfredo">
                    </div>

                    <div>
                        <label for="description"
                            class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                        <textarea name="description" rows="3"
                            class="w-full p-2 border border-gray-300 rounded-md focus:ring-recipe-green focus:border-recipe-green"
                            placeholder="Creamy pasta with chicken, garlic, and Parmesan cheese."></textarea>
                    </div>

                    <div class="flex gap-4">
                        <div class="flex-1">
                            <label for="prepTime" class="block text-sm font-medium text-gray-700 mb-1">Temps
                                (min)</label>
                            <input type="number" name="prep_time"
                                class="w-full p-2 border border-gray-300 rounded-md focus:ring-recipe-green focus:border-recipe-green"
                                placeholder="45">
                        </div>
                        <div class="flex-1">
                            <label for="servings"
                                class="block text-sm font-medium text-gray-700 mb-1">Personnes</label>
                            <input type="number" name="servings"
                                class="w-full p-2 border border-gray-300 rounded-md focus:ring-recipe-green focus:border-recipe-green"
                                placeholder="6">
                        </div>
                    </div>

                    <div>
                        <label for="difficulty"
                            class="block text-sm font-medium text-gray-700 mb-1">Difficulté</label>
                        <select name="difficulty"
                            class="w-full p-2 border border-gray-300 rounded-md focus:ring-recipe-green focus:border-recipe-green">
                            <option>Facile</option>
                            <option>Moyen</option>
                            <option>Difficile</option>
                        </select>
                    </div>

                    <div>
                        <label for="image" class="block text-sm font-medium text-gray-700 mb-1">Image de la
                            Recette</label>
                        <!-- Input de type file caché -->
                        <input type="file" name="image" id="image" class="hidden" accept="image/*">

                        <!-- Bouton personnalisé -->
                        <label for="image"
                            class="cursor-pointer bg-gray-200 text-gray-700 font-bold py-2 px-4 rounded-md hover:bg-gray-300 transition-colors inline-block">
                            Choisir une image
                        </label>

                        <!-- Prévisualisation de l'image -->
                        <div class="mt-2">
                            <img id="imagePreview" src="#" class="w-full h-40 object-cover rounded-md hidden">
                        </div>
                    </div>

                    <!-- Boutons -->
                    <div class="flex justify-end space-x-2">
                        <button type="button" id="closePopupBtn"
                            class="bg-gray-300 text-gray-800 font-bold py-2 px-4 rounded-md hover:bg-gray-400 transition-colors">
                            Annuler
                        </button>
                        <button type="submit"
                            class="bg-green-800 text-white font-bold py-2 px-4 rounded-md hover:bg-opacity-90 transition-colors">
                            Ajouter la Recette
                        </button>
                    </div>
                </form>

            </div>
        </div>


        <script>
            const popup = document.getElementById('commentPopup');
            const repopup = document.getElementById('recipePopup');
            const commentForm = document.getElementById('commentForm');

            function openCommentPopup() {
                popup.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            }

            function closeCommentPopup() {
                popup.classList.add('hidden');
                document.body.style.overflow = 'auto';
                commentForm.reset();
                resetStars();
            }

            function openPopup() {
                repopup.classList.remove("hidden");
            }

            function closePopup() {
                repopup.classList.add("hidden");
            }
        </script>
