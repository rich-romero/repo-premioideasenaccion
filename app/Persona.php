<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $fillable = ['nombre','apellido','email','fechanac', 'telefono','provincia','ciudad','dni',
                            'direccion'];
}
