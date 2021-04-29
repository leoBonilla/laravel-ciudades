<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    protected $table = 'ciudades.provincia';
    protected $primaryKey = 'id_provincia';
    public function comunas(){
        return $this->hasMany(Comuna::class,'id_provincia');
    }
}
