<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;
use Illuminate\Http\Request;

class UtilisateurController extends Controller
{


    public function index()
    {
         //On récupère tous les Utilisateurs
        $utilisateurs = Utilisateur::latest()->get();
         // On transmet les Utilisateurs à la vue ".index.blade.php"
        return view("utilisateurs.index", compact("utilisateurs"));
    }


    public function create()
    {
        return view('utilisateurs.create');
    }


    public function show(Utilisateur $utilisateur)
    {
        return view('utilisateurs.show', compact('utilisateur'));
    }

    public function edit(Utilisateur $utilisateur)
    {
        return view('utilisateurs.edit', compact('utilisateur'));
    }

    public function update(Request $request, Utilisateur $utilisateur)
    {
        $validated = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'login' => 'required|unique:Utilisateurs,login,' . $utilisateur->id,
            'motPasse' => 'required',
            'profil' => 'required',
        ]);

        $utilisateur->update($validated);

        return redirect()->route('utilisateurs.index');
    }


    public function destroy(Utilisateur $utilisateur)
    {
    // On les informations du $post de la table "utilisateurs"
        $utilisateur->delete();
    // Redirection route "utilisateurs.index"
        return redirect(route('utilisateurs.index'));
    }

    public function store(Request $request){
        $validated = $request->validate([
            'nom' => 'required|alpha|max:20',
            'prenom' => 'required|string|max:20',
            'login' => 'email|required|unique:Utilisateurs',
            'motPasse' => 'required',
            'profil' => 'required',
        ]);

        Utilisateur::create($validated);

        return redirect()->route('utilisateurs.index')->with('success', 'Utilisateur créé avec succès');

        }
}
