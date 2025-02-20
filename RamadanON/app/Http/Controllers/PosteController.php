<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PosteController extends Controller
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
    public function show(Request $request)
    {
        $id = $request->id;
        $post = Postes::find($id);
    }
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|min:3',
            'Titre' => 'required|unique:postes',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:300',
        ]);

        $name = $request->username;
        $titre = $request->Titre;
        $contenu = $request->content;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('experiences', 'public');
        } else {
            $imagePath = null;
        }

        Postes::create([
            'Titre' => $titre,
            'content' => $contenu,
            'nome_createur' => $name,
            'image' => $imagePath,
        ]);

        session()->flash('success', 'Post created successfully!');

        return redirect()->route('index');
    }
}
