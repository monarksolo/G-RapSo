<?php

namespace App\Models;

use App\Models\User;
use App\Models\Projet;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Suivi extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function suiv_use(){
        $this->belongsToMany(User::class, "effectuers","suivi_id","user_id");
    }

    public function suiv_pro(){
        $this->hasMany(Projet::class);
    }

}
