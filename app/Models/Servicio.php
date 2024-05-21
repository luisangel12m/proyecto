<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;
    protected $table = 'servicio'; // Nombre de la tabla en la base de datos
    protected $primaryKey = 'id_servicio'; // Especifica la clave primaria
    public $timestamps = false;
    public function servicio()
    {
        return $this->belongsTo(Servicio::class, 'id_servicio', 'id');
    }


}
