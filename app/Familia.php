<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Familia extends Model
{
    protected $table = 'familias';
    protected $fillable = ['nombre'];

    public function subfamilia(){
      return $this->hasMany('App\SubFamilia');
    }
    public function articulo(){
      return $this->hasMany('App\Articulo');
    }
}
