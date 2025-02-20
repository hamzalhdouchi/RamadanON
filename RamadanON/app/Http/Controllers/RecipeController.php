<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function index(Request $request)
    {
        $Postes = Postes::all();
        $query = Recipe::with('category');

        if ($request->has('category') && $request->category != 0) {
            $query->where('category_id', $request->category);
        }
        $totalRecipes = Postes::count();
        $popularRecipes = Recipe::withCount('comments')->orderBy('comments_count', 'desc')->limit(5)->get();

        $recipes = $query->get();

        return view('RamadanON', compact('Postes', 'recipes', 'totalRecipes', 'popularRecipes'));
    }
}
