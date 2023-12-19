<?php

namespace App\Http\Controllers;

use App\Models\EC;
use App\Models\Enseigner;
use App\Models\Utilisateur;
use Illuminate\Http\Request;

class EnseignerController extends Controller
{

 public function index()
    {
         //On récupère tous les enseigners
        $enseigners = Enseigner::latest()->get();
         // On transmet les enseigners à la vue ".index.blade.php"
        return view("enseigners.index", compact("enseigners"));
    }

    public function create()
    {
        $utilisateurs=Utilisateur::all();
        $ECS=EC::all();

        return view('enseigners.create', compact("utilisateurs", "ECS"));
    }


    public function show($id)
    {
       $enseigner = Enseigner::findOrFail($id);
       return view('enseigners.show', compact('enseigner'));
    }


    public function edit($id)
    {

        $enseigner = enseigner::findOrFail($id);
        $utilisateurs = Utilisateur::latest()->get();
        $ECS = EC::latest()->get();

        return view('enseigners.edit', compact('utilisateurs', 'enseigner','ECS'));

    }


    public function update(Request $request, $id)
    {


        $enseigner = enseigner::findOrFail($id);
        $enseigner->update([

            'idEC'=> $request->idEC,
            'idEnseignant'=> $request->idEnseignant,
            'annee'=> $request->annee,
        ]);
       return redirect()->route('enseigners.index')->with('success', 'enseignement modifiée avec succès');
    }


    public function destroy($id)
    {
        $enseigner = enseigner::find($id);
        $enseigner->delete();
        return redirect(route('enseigners.index'));
    }

    public function store(Request $request){
        $validated = $request->validate([

        'idEC'=> 'required',
        'idEnseignant'=> 'required',
        'annee'=> 'required',
        ]);

        Enseigner::create($validated);

        return redirect()->route('enseigners.index')->with('success', 'enseignement créé avec succès');

        }
}
