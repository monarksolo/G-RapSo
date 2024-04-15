<?php

namespace App\Http\Controllers;

use App\Models\Suivi;
use Illuminate\Http\Request;

class SuiviController extends Controller
{
    //

    public function index()
    {
        $suivi = Suivi::all();
        return response()->json($suivi);
    }

    public function create(Request $request)
    {
        $suivi = Suivi::create($request->all());
        return response()->json($suivi);
    }

    public function update(Request $request, $id)
    {
        $suivi = Suivi::find($id);
        $suivi->update($request->all());
        return response()->json($suivi);
    }

    public function delete($id)
    {
        $suivi = Suivi::find($id);
        $suivi->delete();
        return response()->json('suppression reussie');
    }

    public function show($id)
    {
        $suivi = Suivi::find($id);
        return response()->json($suivi);
    }
}
