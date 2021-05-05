<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
 protected $table = 'regiones';
 protected $primaryKey = 'id_region';

 public function provincias(){
        return $this->hasMany(Provincia::class,'id_region');
    }
}
