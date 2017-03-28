<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    protected $table = 'commentaires';

    protected $fillable = array("id", "contenu", "auteur", "user_id", "updated_at", "created_at");

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id'); // créer la jointure
    }
}
