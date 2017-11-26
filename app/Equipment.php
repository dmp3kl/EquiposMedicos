<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipments extends Model
{
    protected $fillable = [
    						'codigo',
    						'marca',
    						'modelo',
    						'n_serie',
    						'fabricacion',
    						'f_ingreso',
    						'vida_util',
    						'equipo_asociado',
    						'd_tecnico',
    						'observaciones',
    						'termino_garantia',
    						'estado',
    						'created_at',
    						'updated_at'
    					];
}
