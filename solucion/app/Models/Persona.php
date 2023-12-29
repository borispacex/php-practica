<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Persona
 *
 * @property $id
 * @property $paterno
 * @property $materno
 * @property $nombre
 * @property $direccion
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Persona extends Model
{
    
    static $rules = [
		'paterno' => 'required',
		'materno' => 'required',
		'nombre' => 'required',
		'direccion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['paterno','materno','nombre','direccion'];



}
