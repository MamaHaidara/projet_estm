<?php

namespace App\Http\Controllers;

use App\Models\EC;
use App\Models\UE;
use Illuminate\Http\Request;

class ECController extends Controller
{

         public function index()
    {
         //On récupère tous les UEs
        $ECS = EC::latest()->get();
         // On transmet les UEs à la vue ".index.blade.php"
        return view("ECS.index", compact("ECS"));
    }

    public function create()
    {
        $UES=UE::all();

        return view('ECS.create', compact("UES"));
    }


    public function show($id)
    {
       $EC = EC::findOrFail($id);
       return view('ECS.show', compact('EC'));
    }


    public function edit($id)
    {

        $EC = EC::findOrFail($id);
        $UES = UE::latest()->get();

        return view('ECS.edit', compact('UES', 'EC'));

    }


    public function update(Request $request, $id)
    {


        $EC = EC::findOrFail($id);
        $EC->update([
            'idUE' => $request->idUE,
            'libelle' => $request->libelle,
        ]);
       return redirect()->route('ECS.index')->with('success', 'EC modifié avec succès');
    }


    public function destroy($id)
    {
        $EC = UE::find($id);
        $EC->delete();
        return redirect(route('ECS.index'));
    }

    public function store(Request $request){
        $validated = $request->validate([
            'libelle' => 'required',
            'idUE' => 'required',
        ]);

        EC::create($validated);

        return redirect()->route('ECS.index')->with('success', 'EC créé avec succès');

        }
}
