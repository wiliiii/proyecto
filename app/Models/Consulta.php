<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Consulta
 *
 * @property $id
 * @property $num_historia
 * @property $no_consulta
 * @property $fecha_cons
 * @property $motivo
 * @property $problema
 * @property $diagnostico
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Consulta extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['num_historia', 'no_consulta', 'fecha_cons', 'motivo', 'problema', 'diagnostico'];


}
