<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
    	'nro_servicio', 'nro_solicitud', 'motivo', 'cliente', 'fecha_orden', 'fecha_cierre', 'observaciones_agenda', 'lugar', 'region', 'technical_id'
    ];
}

