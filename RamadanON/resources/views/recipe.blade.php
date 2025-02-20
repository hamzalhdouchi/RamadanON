<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails de la Recette</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="max-w-4xl mx-auto p-4">
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="relative h-64">
                <img src=" {{ asset('storage/' . $recipe->image) }}" alt="Image de la recette"
                    class="w-full h-full object-cover">
            </div>
            <div class="p-6">
                <h1 class="text-3xl font-bold text-gray-800 mb-2">{{ $recipe->title }}</h1>
                <p class="text-gray-600 mb-4">{{ $recipe->description }}</p>
                <div class="flex mb-4">
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-gray-300"></i>
                </div>
                <div class="flex justify-between mb-6">
                    <div class="flex items-center">
                        <i class="far fa-clock text-gray-500 mr-2"></i>
                        <span class="text-gray-700">{{ $recipe->prep_time }} min</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-users text-gray-500 mr-2"></i>
                        <span class="text-gray-700">{{ $recipe->servings }} personnes</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-utensils text-gray-500 mr-2"></i>
                        <span class="text-gray-700">{{ $recipe->difficulty }}</span>
                    </div>
                </div>
                <h2 class="text-2xl font-semibold text-gray-800 mb-2">Description</h2>
                <p class="text-gray-700 mb-6">
                    {{ $recipe->description }} </p>
            </div>
        </div>

        <div class="mt-8">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Commentaires</h2>
            <div class="space-y-6">
                @foreach ($comments as $comment)
                    <div class="bg-white p-4 rounded-lg shadow">
                        <div class="flex items-start">
                            <div>
                                <div class="flex items-center mb-1">
                                    <h3 class="font-semibold text-gray-800 mr-2">{{ $comment->name_user }}</h3>
                                    <span
                                        class="text-sm text-gray-500">{{ $comment->created_at->diffForHumans() }}</span>
                                </div>
                                <p class="text-gray-700">{{ $comment->content }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</body>

</html>
