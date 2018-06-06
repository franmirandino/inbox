<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Official extends Model
{
    protected $fillable = ['pos', 'nombre', 'telefono', 'telefono_2', 'cargo', 'canal'];
}
