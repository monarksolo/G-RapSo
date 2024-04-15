<?php

namespace App\Models;

use App\Models\User;
use App\Models\Projet;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rapport extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function rapp_use(){
        $this->belongsToMany(User::class, "faires","rapport_id","user_id");
    }

    public function rapp_pro(){
        $this->belongsTo(Projet::class, "projet_id","id");
    }

}
