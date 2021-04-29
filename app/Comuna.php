<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comuna extends Model
{
    protected $table = 'ciudades.comuna';
    protected $primaryKey = 'id_comuna';

    public function direcciones(){
        return $this->hasMany(Direccion::class,'id_comuna');
    }
}
