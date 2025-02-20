<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
</head>
<body>
    <div id="commentPopup"
    class="fixed inset-0 bg-black bg-opacity-70 flex items-center justify-center ">
    <div class="bg-white rounded-lg shadow-md p-6 max-w-2xl mx-auto">
        <div class="flex justify-between">
            <h2 class="font-bold">Commentair</h2>
            <button onclick="closeCommentPopup()" class=" top-2 right-2 text-gray-600 text-lg">
                <i class="fas fa-times"></i>
            </button>
        </div> <!-- Close Button -->

        <!-- Comment Form -->
        <form action="{{ route('creatComment') }}" method="POST"
            class="space-y-6 mt-6">
            @csrf
            <input type="hidden" name="recipe_id" value="{{ $recipe}}">

            <!-- Commentaire -->
            <div class="space-y-2">
                <label for="comment" class="block text-sm font-medium text-gray-700">Votre
                    commentaire</label>
                <textarea id="comment" rows="4" name="content"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary focus:border-primary"
                    placeholder="Partagez votre expérience avec cette recette..."></textarea>
            </div>

            <!-- Informations utilisateur -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Votre
                        nom</label>
                    <input type="text" id="name_user" name="name_user"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary focus:border-primary"
                        placeholder="Prénom et nom">
                </div>
            </div>

            <!-- Conditions -->
            <div class="flex items-start space-x-2">
                <input type="checkbox" id="terms" name="terms" class="mt-1">
                <label for="terms" class="text-sm text-gray-600">
                    J'accepte que mon avis et mes photos soient publiés sur ce site
                </label>
            </div>

            <!-- Bouton Soumettre -->
            <div class="flex justify-end">
                <button type="submit"
                    class="px-6 py-2 bg-primary text-white rounded-md hover:bg-secondary transition-colors">
                    Publier mon Commentaire
                </button>
            </div>
        </form>
    </div>
</div>
</body>
</html>
