<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comuna extends Model
{
    protected $table = 'comunas';
    protected $primaryKey = 'id_comuna';

    public function direcciones(){
        return $this->hasMany(Direccion::class,'id_comuna');
    }
}
