<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $table = 'notes';
    protected $fillable = array("id", "note", "login", "updated_at", "created_at");

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id'); // créer la jointure
    }
}
