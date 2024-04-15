<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Role;
use App\Models\Suivi;
use App\Models\Projet;
use App\Models\Rapport;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function use_pro(){
        $this->belongsToMany(Projet::class, "gerers","user_id","projet_id");
    }

    public function use_rapp(){
        $this->belongsToMany(Rapport::class, "faires","user_id","rapport_id");
    }

    public function use_suiv(){
        $this->belongsToMany(Suivi::class, "effectuers", "user_id","suivi_id");
    }

    public function use_rol(){
        $this->belongsTo(Role::class,"role_id","id");
    }
}
