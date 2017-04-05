<?php

namespace App;

use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'users';
    protected $fillable = array("id", "password", "nom", "prenom", "created_at", "updated_at", "remember_token", "email");
    protected $hidden = array("password","remember_token");

    public function setPasswordAttribute($value)
    {
        $this->attributes["password"] = Hash::make($value);
    }

    public function commentaires()
    {
        return $this->hasMany('App\Commentaire', 'user_id', 'id'); // crée la jointure
    }

    public function notes()
    {
        return $this->hasMany('App\Note', 'user_id', 'id');
    }
}