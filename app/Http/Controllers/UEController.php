<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\UE;
use Illuminate\Http\Request;

class UEController extends Controller
{

    public function index()
    {
         //On récupère tous les UEs
        $UES = UE::latest()->get();
         // On transmet les UEs à la vue ".index.blade.php"
        return view("UES.index", compact("UES"));
    }

    public function create()
    {
        $classes=Classe::all();

        return view('UES.create', compact("classes"));
    }


    public function show($id)
    {
       $UE = UE::findOrFail($id);
       return view('UES.show', compact('UE'));
    }


    public function edit($id)
    {

        $UE = UE::findOrFail($id);
        $classes = Classe::latest()->get();

        return view('UES.edit', compact('classes', 'UE'));

    }


    public function update(Request $request, $id)
    {


        $UE = UE::findOrFail($id);
        $UE->update([
            'idClasse' => $request->idClasse,
            'libelle' => $request->libelle,
        ]);
       return redirect()->route('UES.index')->with('success', 'UE modifiée avec succès');
    }


    public function destroy($id)
    {
        $UE = UE::find($id);
        $UE->delete();
        return redirect(route('UES.index'));
    }

    public function store(Request $request){
        $validated = $request->validate([
            'libelle' => 'required',
            'idClasse' => 'required',
        ]);

        UE::create($validated);

        return redirect()->route('UES.index')->with('success', 'UE créé avec succès');

        }
}
