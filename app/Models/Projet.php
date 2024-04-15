<?php

namespace App\Models;

use App\Models\User;
use App\Models\Suivi;
use App\Models\Rapport;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Projet extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function pro_use(){
        $this->belongsToMany(User::class, "gerers","projet_id","user_id");
    }

    public function pro_suiv(){
        $this->belongsTo(Suivi::class, "suivi_id", "id");
    }

    public function pro_rapp(){
        $this->hasMany(Rapport::class);
    }
}
