<?php

namespace App\Http\Controllers;

use App\Models\Rapport;
use Illuminate\Http\Request;

class RapportController extends Controller
{
    //

    public function index()
    {
        $rapport = Rapport::all();
        return response()->json($rapport);
    }

    public function create(Request $request)
    {
        $rapport = Rapport::create($request->all());
        return response()->json($rapport);
    }

    public function update(Request $request, $id)
    {
        $rapport = Rapport::find($id);
        $rapport->update($request->all());
        return response()->json($rapport);
    }

    public function delete($id)
    {
        $rapport = Rapport::find($id);
        $rapport->delete();
        return response()->json('suppression reussie');
    }

    public function show($id)
    {
        $rapport = Rapport::find($id);
        return response()->json($rapport);
    }
}
