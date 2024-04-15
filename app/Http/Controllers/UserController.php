<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function index()
    {
        $user = User::all();
        return response()->json($user);
    }

    public function create(Request $request)
    {
        $user = User::create($request->all());
        return response()->json($user);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->update($request->all());
        return response()->json($user);
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return response()->json('suppression reussie');
    }

    public function show($id)
    {
        $user = User::find($id);
        return response()->json($user);
    }

    public function search($name)
    {
        $user = User::where('name', 'like', '%' . $name . '%')->get();
        return response()->json($user);
    }
}
