<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use Illuminate\Http\Request;

class ProjetController extends Controller
{
    //
    public function index()
    {
        $projet = Projet::all();
        return response()->json($projet);
    }

    public function create(Request $request)
    {
        $projet = Projet::create($request->all());
        return response()->json($projet);
    }

    public function update(Request $request, $id)
    {
        $projet = Projet::find($id);
        $projet->update($request->all());
        return response()->json($projet);
    }

    public function delete($id)
    {
        $projet = Projet::find($id);
        $projet->delete();
        return response()->json('suppression reussie');
    }

    public function show($id)
    {
        $projet = Projet::find($id);
        return response()->json($projet);
    }

    public function search($titre)
    {
        $projet = Projet::where('titre', 'like', '%' . $titre . '%')->get();
        return response()->json($projet);
    }
}
