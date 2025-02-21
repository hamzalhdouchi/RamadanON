<?php

namespace App\Http\Controllers;
use App\Models\Postes;
use App\Models\comments;
use Illuminate\Http\Request;

class CommenteController extends Controller
{

    public function creatComment(Request $request)
    {
        $validated = $request->validate([
            'name_user' => 'required|string|max:255',
            'content' => 'required|string|min:3',
            'recipe_id' => 'required'
        ]);

        $comment = new Comments();
        $comment->name_user = $validated['name_user'];
        $comment->recipe_id = $validated['recipe_id'];
        $comment->content = $validated['content'];
        $comment->save();

        session()->flash('success', 'Votre commentaire a été ajouté avec succès.');
        return redirect()->route('index');
    }
        public function view($id){
        $recipe = $id;
        return view('commentForm', compact('recipe'));
        }

}

