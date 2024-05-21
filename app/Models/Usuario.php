<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $primaryKey = 'id_cliente';

    protected $table = 'cliente'; // Nombre de la tabla en la base de datos

    public $timestamps = false;

    // Relación con el cliente
    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_cliente', 'id');
    }
    



}
