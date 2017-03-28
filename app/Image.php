<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';
    protected $fillable = array("id", "images", "user_id", "updated_at", "created_at");


    public function user()
    {
        return $this->hasOne('App\User', 'user_id', 'id'); // créer la jointure
    }
}
