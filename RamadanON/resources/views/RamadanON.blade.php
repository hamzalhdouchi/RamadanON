<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ramadan 2025 - Partagez vos expériences</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
                <div class="w-10 h-10 bg-secondary rounded-full crescent-moon mr-3"></div>
                <h1 class="text-2xl font-bold">Ramadan 2025</h1>
            </div>

            <nav>
                <ul class="flex flex-wrap gap-x-6 gap-y-2">
                    <li><a href="#" class="hover:text-accent transition-colors">Expériences</a></li>
                    <li><a href="#" class="hover:text-accent transition-colors">Recettes</a></li>
                    <li><a href="#" class="hover:text-accent transition-colors">Statistiques</a></li>
                    <li><a href="#"
                            class="bg-secondary hover:bg-accent hover:text-dark px-4 py-2 rounded-md transition-colors">Connexion</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Bannière principale -->
    <section class="bg-primary bg-opacity-90 text-white py-16 text-center relative overflow-hidden">
        <div class="absolute inset-0 opacity-40">
            <img src="https://i.pinimg.com/736x/f4/de/2e/f4de2ea69727b150c0ae0f107ab7d1d6.jpg" alt="islamMotifique"
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
                <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform hover:scale-105">
                    <img src="placeholder-experience-1.jpg" alt="Expérience du Ramadan" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-primary mb-2">Mon premier Ramadan</h3>
                        <p class="text-dark mb-4">Une expérience inoubliable remplie de découvertes...</p>
                        <div class="flex justify-between items-center">
                            <span class="text-secondary text-sm"><i class="fas fa-user mr-1"></i> Fatima</span>
                            <span class="text-secondary text-sm"><i class="fas fa-calendar mr-1"></i>Il y a 2 jours</span>
                        </div>
                        <div class="mt-4 pt-4 border-t border-gray-200">
                            <button onclick="openPopup()"
                                class="text-primary hover:text-secondary transition-colors">Lire la suite <i
                                    class="fas fa-arrow-right ml-1"></i></button>
                        </div>
                    </div>
                </div>

                <!-- Carte d'expérience 2 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform hover:scale-105">
                    <img src="placeholder-experience-2.jpg" alt="Expérience du Ramadan" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-primary mb-2">Ramadan en famille</h3>
                        <p class="text-dark mb-4">Des moments précieux partagés avec mes proches...</p>
                        <div class="flex justify-between items-center">
                            <span class="text-secondary text-sm"><i class="fas fa-user mr-1"></i> Ahmed</span>
                            <span class="text-secondary text-sm"><i class="fas fa-calendar mr-1"></i>Il y a 5 jours</span>
                        </div>
                        <div class="mt-4 pt-4 border-t border-gray-200">
                            <button onclick="openPopup()"
                                class="text-primary hover:text-secondary transition-colors">Lire la suite <i
                                    class="fas fa-arrow-right ml-1"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Recettes -->
    <section class="py-16 bg-accent bg-opacity-10">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-primary mb-8 text-center">Recettes pour l'Iftar et le Suhoor</h2>

            <div class="mb-12 flex flex-wrap justify-center gap-4">
                <a href="#" class="px-4 py-2 rounded-full bg-primary text-white hover:bg-secondary transition-colors">Toutes</a>
                <a href="#" class="px-4 py-2 rounded-full bg-white text-primary hover:bg-secondary hover:text-white transition-colors">Entrées</a>
                <a href="#" class="px-4 py-2 rounded-full bg-white text-primary hover:bg-secondary hover:text-white transition-colors">Plats principaux</a>
                <a href="#" class="px-4 py-2 rounded-full bg-white text-primary hover:bg-secondary hover:text-white transition-colors">Desserts</a>
                <a href="#" class="px-4 py-2 rounded-full bg-white text-primary hover:bg-secondary hover:text-white transition-colors">Boissons</a>
                <a href="#" class="px-4 py-2 rounded-full bg-white text-primary hover:bg-secondary hover:text-white transition-colors">Suhoor</a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Recette 1 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="placeholder-recipe-1.jpg" alt="Chorba" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <span class="inline-block px-3 py-1 bg-secondary text-white text-sm rounded-full mb-3">Plat principal</span>
                        <h3 class="text-xl font-bold text-primary mb-2">Chorba traditionnelle</h3>
                        <p class="text-dark mb-4">Une délicieuse soupe pour rompre le jeûne...</p>
                        <div class="flex items-center mb-4">
                            <div class="flex text-secondary">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                        <div class="flex justify-between items-center text-sm text-dark">
                            <span><i class="fas fa-clock mr-1"></i> 45 min</span>
                            <span><i class="fas fa-user-friends mr-1"></i> 6 personnes</span>
                            <span><i class="fas fa-utensils mr-1"></i> Moyen</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Statistiques -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-primary mb-12 text-center">Statistiques de la communauté</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-accent bg-opacity-20 rounded-lg p-6 text-center">
                    <div class="text-4xl font-bold text-secondary mb-2">256</div>
                    <p class="text-primary"> Total de publications</p>
                </div>

                <div class="bg-accent bg-opacity-20 rounded-lg p-6 text-center">
                    <div class="text-4xl font-bold text-secondary mb-2">183</div>
                    <p class="text-primary">Recettes publiées</p>
                </div>

                <div class="bg-accent bg-opacity-20 rounded-lg p-6 text-center">
                    <div class="text-4xl font-bold text-secondary mb-2">1,728</div>
                    <p class="text-primary">Membres actifs</p>
                </div>

                <div class="bg-accent bg-opacity-20 rounded-lg p-6 text-center">
                    <div class="text-4xl font-bold text-secondary mb-2">8,345</div>
                    <p class="text-primary">Commentaires</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Partager -->
    <section id="partager" class="py-16 bg-primary bg-opacity-5">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-primary mb-8 text-center">Partagez votre expérience</h2>

            <div class="max-w-3xl mx-auto bg-white rounded-lg shadow-md p-8">
                <form action="#" method="post" enctype="multipart/form-data">
                    <div class="mb-6">
                        <label for="username" class="block text-primary font-medium mb-2">Nom d'utilisateur</label>
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
                    <p class="text-gray-400 mb-4">Une plateforme communautaire pour partager l'expérience du Ramadan.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition-colors"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Scripts JavaScript pour la gestion des popups
        function openPopup() {
            document.getElementById('recipePopup').classList.remove('hidden');
        }

        function closePopup() {
            document.getElementById('recipePopup').classList.add('hidden');
        }

        // Gestion de la prévisualisation d'image
        document.getElementById('image').addEventListener('change', function(e) {
            const preview = document.getElementById('imagePreview');
            const file = e.target.files[0];
            const reader = new FileReader();

            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.classList.remove('hidden');
            }

            if(file) {
                reader.readAsDataURL(file);
            }
        });
    </script>
</body>
</html>

