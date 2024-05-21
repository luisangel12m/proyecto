<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documento extends Model

{    
    use HasFactory;

    protected $table = 'documento'; // Asegúrate de que el nombre de la tabla esté correcto
    protected $primaryKey = 'id_documento'; // Especifica la clave primaria
    public $timestamps = false;
    protected $fillable = [
        'nombre',
        'descripcion',
        'acceso',
    ];
    public function documento()
    {
        return $this->belongsTo(Documento::class, 'id_documento', 'id');
    }
}
