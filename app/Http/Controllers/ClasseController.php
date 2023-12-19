<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Formation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClasseController extends Controller
{

    public function index()
    {
         //On récupère toustes les classes
        $classes = Classe::latest()->get();

         // On transmet les classes à la vue ".index.blade.php"
        return view("classes.index", compact('classes'));
    }

    public function create()
    {
        $formations=Formation::all();

        return view('classes.create', compact("formations"));
    }


    public function show($id)
    {
       $classe = Classe::findOrFail($id);
       return view('classes.show', compact('classe'));
    }


    public function edit($id)
    {

        $classe = Classe::findOrFail($id);
        $formations = Formation::latest()->get();

        return view('classes.edit', compact('formations', 'classe'));

    }


    public function update(Request $request, $id)
    {


        $classe = Classe::findOrFail($id);
        $classe->update([
            'idFormation' => $request->idFormation,
            'libelle' => $request->libelle,
        ]);
       return redirect()->route('classes.index')->with('success', 'Classe modifiée avec succès');
    }


    public function destroy($id)
    {
        $classe = Classe::find($id);
        $classe->delete();
        return redirect(route('classes.index'));
    }

    public function store(Request $request){
        $validated = $request->validate([
            'libelle' => 'required',
            'idFormation' => 'required',
        ]);

        Classe::create($validated);

        return redirect()->route('classes.index')->with('success', 'classe créé avec succès');

        }
}
