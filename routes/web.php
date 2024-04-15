<?php

use App\Models\Projet;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SuiviController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\RapportController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/projets', [ProjetController::class, 'index']);
Route::post('/addprojets', [ProjetController::class, 'create']);
Route::put('/updateprojets/{id}', [ProjetController::class, 'update']);
Route::delete('/deleteprojets/{id}', [ProjetController::class, 'delete']);
Route::get('/showprojets/{id}', [ProjetController::class, 'show']);
Route::get('/searchprojets/{titre}', [ProjetController::class, 'search']);

Route::get('/rapports', [RapportController::class, 'index']);
Route::post('/addrapports', [RapportController::class, 'create']);
Route::put('/updaterapports/{id}', [RapportController::class, 'update']);
Route::delete('/deleterapports/{id}', [RapportController::class, 'delete']);
Route::get('/showrapports/{id}', [RapportController::class, 'show']);

Route::get('/suivis', [SuiviController::class, 'index']);
Route::post('/addsuivis', [SuiviController::class, 'create']);
Route::put('/updatesuivis/{id}', [SuiviController::class, 'update']);
Route::delete('/deletesuivis/{id}', [SuiviController::class, 'delete']);
Route::get('/showsuivis/{id}', [SuiviController::class, 'show']);

Route::get('/users', [UserController::class, 'index']);
Route::post('/addusers', [UserController::class, 'create']);
Route::put('/updateusers/{id}', [UserController::class, 'update']);
Route::delete('/deleteusers/{id}', [UserController::class, 'delete']);
Route::get('/showusers/{id}', [UserController::class, 'show']);
Route::get('/searchusers/{name}', [UserController::class, 'search']);


Route::get('/proj', function(){
    return Projet::all();
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
