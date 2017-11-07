<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $table = 'articulos';
    protected $fillable = ['codigo', 'nombre', 'descripcion', 'categoria',
                           'stock', 'proveedor_id', 'marca_id',
                           'subfamilia_id', 'familia_id'];

    public function marca(){
      return $this->belongsTo('App\Marca');
    }
    public function familia(){
      return $this->belongsTo('App\Familia');
    }
    public function subfamilia(){
      return $this->belongsTo('App\SubFamilia');
    }
    public function proveedor(){
      return $this->belongsTo('App\Proveedor');
    }

}
