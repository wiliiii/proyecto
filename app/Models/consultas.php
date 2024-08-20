<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class consultas extends Model
{
    use HasFactory;
    protected $fillable = ['num_historia','no_consulta',
    'fecha_cons','motivo', 'problema', 'diagnostico'];

}
