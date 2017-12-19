<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
        public function esforcos()
        {
            return $this->hasMany('App\Esforco','categoria_id');
        }
    
}
