<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Solicitud_Modell extends Model
{
    protected $table = 'solicitud';
    protected $primaryKey = 'id_solicitud';
    
    protected $fillable = [
        'id_cliente',
        'id_personal',
        'fecha',
        'folio'
    ];
    
    
}