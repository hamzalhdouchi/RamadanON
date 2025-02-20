<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function store(Request $request) {

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|min:5',
            'prep_time' => 'required|integer|min:1',
            'servings' => 'required|integer|min:1',
            'difficulty' => 'required|string|in:Facile,Moyen,Difficile',
            'category_id' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);


        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('recipes', 'public');
        } else {
            $imagePath = null;
        }

        Recipe::create([
            'title' => $request->title,
            'description' => $request->description,
            'prep_time' => $request->prep_time,
            'servings' => $request->servings,
            'difficulty' => $request->difficulty,
            'category_id' => $request->category_id,
            'image' => $imagePath,
        ]);

        session()->flash('success', 'Recette ajoutée avec succès !');
        return back();
    }
}
