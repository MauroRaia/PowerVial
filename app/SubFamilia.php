<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubFamilia extends Model
{
    protected $table = 'subfamilias';
    protected $fillable = ['nombre', 'familia_id'];
}
