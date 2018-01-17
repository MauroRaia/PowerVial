<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MarcaMaquina extends Model
{
    protected $table = 'marcas_maquina';
    protected $fillable = ['nombre'];
}
