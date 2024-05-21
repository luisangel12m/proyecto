<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class especimen_modell extends Model
{
    protected $table = 'especimen';
    protected $primaryKey = 'id_especimen';
    
    protected $fillable = [
        'id_cliente',
        'id_personal',
        'id_solicitud',
        'nombre',
        'recepcion',
        'cantidad',
        'estado',
        'indicador_admision',
        'descripcion',
        'envio',
    ];
    
    // Relación con el modelo Cliente
    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'id_cliente');
    }

    // Relación con el modelo Personal
    public function personal()
    {
        return $this->belongsTo(Personal::class, 'id_personal');
    }

    // Relación con el modelo Solicitud
    public function solicitud()
    {
        return $this->belongsTo(Solicitud_Modell::class, 'id_solicitud');
    }
}