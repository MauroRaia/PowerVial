<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $table = 'marcas';
    protected $fillable = ['nombre'];

    public function articulo(){
      return $this->hasMany('App\Articulo');
    }
}
