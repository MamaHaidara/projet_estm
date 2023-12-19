<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Inscrire;
use App\Models\Utilisateur;
use Illuminate\Http\Request;

class InscrireController extends Controller
{

 public function index()
    {
         //On récupère tous les inscrires
        $inscrires = Inscrire::latest()->get();
         // On transmet les inscrires à la vue ".index.blade.php"
        return view("inscrires.index", compact("inscrires"));
    }

    public function create()
    {
        $utilisateurs=Utilisateur::all();
        $classes=Classe::all();

        return view('inscrires.create', compact("utilisateurs", "classes"));
    }


    public function show($id)
    {
       $inscrire = Inscrire::findOrFail($id);
       return view('inscrires.show', compact('inscrire'));
    }


    public function edit($id)
    {

        $inscrire = Inscrire::findOrFail($id);
        $utilisateurs = Utilisateur::latest()->get();
        $classes = Classe::latest()->get();

        return view('inscrires.edit', compact('utilisateurs', 'inscrire','classes'));

    }


    public function update(Request $request, $id)
    {


        $inscrire = inscrire::findOrFail($id);
        $inscrire->update([

            'idClasse'=> $request->idClasse,
            'idEtudiant'=> $request->idEtudiant,
            'annee'=> $request->annee,
        ]);
       return redirect()->route('inscrires.index')->with('success', 'inscription modifiée avec succès');
    }


    public function destroy($id)
    {
        $inscrire = Inscrire::find($id);
        $inscrire->delete();
        return redirect(route('inscrires.index'));
    }

    public function store(Request $request){
        $validated = $request->validate([

        'idClasse'=> 'required',
        'idEtudiant'=> 'required',
        'annee'=> 'required',
        ]);

        Inscrire::create($validated);

        return redirect()->route('inscrires.index')->with('success', 'inscription créé avec succès');

        }
}
