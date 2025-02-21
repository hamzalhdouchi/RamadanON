<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


use App\Models\Postes;
use App\Models\recipes;
use App\Http\Requests\StorePostRequest;
use Symfony\Contracts\Service\Attribute\Required;

class PostesController extends Controller
{
    public function index(Request $request)
    {
        $Postes = Postes::All();
        $query = recipes::with('category');
      if ($request->has('category') && $request->category != 0) {
            $query->where('category_id', $request->category);
        }
        $recipes = $query->get();
        $totalRecipes = Postes::count();
        $popularRecipes = recipes::withCount('comments')->orderBy('comments_count', 'desc')->limit(5)->get();
        return view('RamadanON', compact('Postes', 'recipes','totalRecipes','popularRecipes'));
    }
    public function show(Request $request)
    {
        $id = $request->Hamza;
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

