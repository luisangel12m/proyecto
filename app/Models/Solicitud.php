<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    protected $table = 'solicitud'; // Nombre de la tabla en la base de datos
    protected $primaryKey = 'id_solicitud'; // Especifica la clave primaria
    public $timestamps = false;

    // Relación con el cliente
    public function solicitud()
    {
        return $this->belongsTo(Solicitud::class, 'id_solicitud', 'id');
    }
    public function cliente ()
    {
      return $this ->hasOne('App\Models\Cliente','id_cliente', 'id') ; 
    }

}