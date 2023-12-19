<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;

class FormationController extends Controller
{



    public function index()
    {
         //On récupère toutes les Formations

        $formations = Formation::latest()->get();
         // On transmet les Formations à la vue ".index.blade.php"
        return view("formations.index", compact("formations"));
    }

    public function create()
    {
        return view('formations.create');
    }


    public function show(Formation $formation)
    {
        return view('formations.show', compact('formation'));
    }


    public function edit(Formation $formation)
    {
        return view('formations.edit', compact('formation'));
    }


    public function update(Request $request, Formation $formation)
    {
        $validated = $request->validate([
            'libelle' => 'required',
            'description' => 'required'

        ]);

        $formation->update($validated);

        return redirect()->route('formations.index')->with('success', 'Formation modifiée avec succès');

    }


    public function destroy(Formation $formation)
    {
    // On les informations du $post de la table "formations"
        $formation->delete();
    // Redirection route "formations.index"
        return redirect(route('formations.index'));
    }

    public function store(Request $request){
        $validated = $request->validate([
            'libelle' => 'required',
            'description' => 'required'

        ]);

        Formation::create($validated);

        return redirect()->route('formations.index')->with('success', 'Formation créée avec succès');
        // $validated = $request->validate(['title' => 'bail|required|unique:formations|max:255',
        //                                  'body' => 'required',]);
        //  // The blog post is valid...
        //  return redirect('/formations');
        }
}
