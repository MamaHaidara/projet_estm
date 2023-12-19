<?php

namespace App\Http\Controllers;

use App\Models\EC;
use App\Models\Evaluer;
use App\Models\Formation;
use App\Models\Utilisateur;
use Illuminate\Http\Request;

class EvaluerController extends Controller
{

    public function index()
    {
         //On récupère tous les evaluers
        $evaluers = Evaluer::latest()->get();
         // On transmet les evaluers à la vue ".index.blade.php"
        return view("evaluers.index", compact("evaluers"));
    }

    public function create()
    {
        $utilisateurs=Utilisateur::all();
        $ECS=EC::all();
        $formations = Formation::all();

        return view('evaluers.create', compact("utilisateurs", "ECS", "formations"));
    }


    public function show($id)
    {
       $evaluer = evaluer::findOrFail($id);
       return view('evaluers.show', compact('evaluer'));
    }


    public function edit($id)
    {

        $evaluer = evaluer::findOrFail($id);
        $utilisateurs = utilisateur::latest()->get();
        $ECS = EC::latest()->get();

        return view('evaluers.edit', compact('utilisateurs', 'evaluer','ECS'));

    }


    public function update(Request $request, $id)
    {


        $evaluer = evaluer::findOrFail($id);
        $evaluer->update([

            'idEC'=> $request->idEC,
            'idEtudiant'=> $request->idUtilisateur,
            'pointsForts'=> $request->pointsForts,
            'pointsFaibles'=>$request->pointsFaibles,
            'note'=> $request->note,
            'date'=> $request->date,
        ]);
       return redirect()->route('evaluers.index')->with('success', 'évaluation modifiée avec succès');
    }


    public function destroy($id)
    {
        $evaluer = evaluer::find($id);
        $evaluer->delete();
        return redirect(route('evaluers.index'));
    }

    public function store(Request $request){
        $validated = $request->validate([

        'idEC'=> 'required',
        'idEtudiant'=> 'required',
        'pointsForts'=> 'required',
        'pointsFaibles'=> 'required',
        'note'=> 'required',
        'date'=> 'required',
        ]);

        evaluer::create($validated);

        return redirect()->route('evaluers.index');

        }
}
