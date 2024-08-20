<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Datper
 *
 * @property $id
 * @property $no_historia
 * @property $CI
 * @property $nombre1
 * @property $appaterno
 * @property $apmaterno
 * @property $sexo
 * @property $est_civil
 * @property $fec_nac
 * @property $direccion
 * @property $fono
 * @property $fono2
 * @property $celular
 * @property $ciudad
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Datper extends Model
{
    
    protected $perPage = 30;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['no_historia', 'CI', 'nombre1', 'appaterno', 'apmaterno', 'sexo', 'est_civil', 'fec_nac', 'direccion', 'fono', 'fono2', 'celular', 'ciudad'];


}
