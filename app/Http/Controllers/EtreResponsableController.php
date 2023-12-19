<?php

namespace App\Http\Controllers;


use App\Models\EtreResponsable;
use App\Models\Formation;
use App\Models\Utilisateur;
use Illuminate\Http\Request;

class EtreResponsableController extends Controller
{

 public function index()
    {
         //On récupère tous les EtreResponsables
        $EtreResponsables = EtreResponsable::latest()->get();
         // On transmet les EtreResponsables à la vue ".index.blade.php"
        return view("EtreResponsables.index", compact("EtreResponsables"));
    }

    public function create()
    {
        $utilisateurs=Utilisateur::all();
        $formations=Formation::all();

        return view('EtreResponsables.create', compact("utilisateurs", "formations"));
    }


    public function show($id)
    {
       $EtreResponsable = EtreResponsable::findOrFail($id);
       return view('EtreResponsables.show', compact('EtreResponsable'));
    }


    public function edit($id)
    {

        $EtreResponsable = EtreResponsable::findOrFail($id);
        $utilisateurs = Utilisateur::latest()->get();
        $formations = Formation::latest()->get();

        return view('EtreResponsables.edit', compact('utilisateurs', 'EtreResponsable','formations'));

    }


    public function update(Request $request, $id)
    {


        $EtreResponsable = EtreResponsable::findOrFail($id);
        $EtreResponsable->update([

            'idFormation'=> $request->idFormation,
            'idEnseignant'=> $request->idEnseignant,
            'annee'=> $request->annee,
        ]);
       return redirect()->route('EtreResponsables.index')->with('success', 'EtreResponsable modifiée avec succès');
    }


    public function destroy($id)
    {
        $EtreResponsable = EtreResponsable::find($id);
        $EtreResponsable->delete();
        return redirect(route('EtreResponsables.index'));
    }

    public function store(Request $request){
        $validated = $request->validate([

        'idFormation'=> 'required',
        'idEnseignant'=> 'required',
        'annee'=> 'required',
        ]);

        EtreResponsable::create($validated);

        return redirect()->route('EtreResponsables.index')->with('success', 'EtreResponsable créé avec succès');

        }
}
