<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $table = 'articulos';
    protected $fillable = ['codigo', 'nombre', 'descripcion', 'categoria',
                           'stock', 'proveedor_id', 'marca_id',
                           'subfamilia_id', 'familia_id'];
}
