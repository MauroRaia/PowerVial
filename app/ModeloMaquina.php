<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModeloMaquina extends Model
{
    protected $table = "modelos_maquina";
    protected $fillable = ["nombre", "marca_maquina_id"];
}
