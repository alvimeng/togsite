<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Esforco extends Model
{
    protected $table = "esforcos";
    
        public function categoria()
        {
            return $this->belongsTo('App\Categoria','categoria_id');
        }
        public function user()
        {
            return $this->belongsTo('App\User','dono');
        }
    
}
