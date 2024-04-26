<?php

use App\Models\Role;
use App\Models\Suivi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\ValidationException;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');


Route::post('/login', function (Request $request) {
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    $user = User::where('email', $request->email)->first();

    if (! $user || ! Hash::check($request->password, $user->password)) {
        throw ValidationException::withMessages([
            'email' => ['Invalid email or password.'],
        ]);
    }

    $role = Role::find($user->role_id);
    return response()->json([
        'success' => true,
        'user' => [
            'email' => $user->email,
            'name' => $user->name,
            'role' => $role->privilege,
        ]
    ]);
});

Route::post('/addsuivis', function (Request $request) {
    $suivi = new Suivi();
    $suivi->calendrier_soutenance_venir = $request->input('calendrier_soutenance_venir');
    $suivi->historique_soutenance_passe = $request->input('historique_soutenance_passe');
    $suivi->evaluation_rapport = $request->input('evaluation_rapport');
    $suivi->commentaire = $request->input('commentaire');
    $suivi->save();

    return response()->json([
        'success' => true,
    ]);
});