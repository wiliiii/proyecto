<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datpers extends Model
{
    use HasFactory;
    protected $fillable = 
    ['no_historia','ci',
    'nombre1','appaterno',
    'apmaterno','sexo',
    'est_civil','fec_nac',
    'direccion', 'fono',
    'fono2', 'celular', 'ciudad'];

}
