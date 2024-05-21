<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especimen extends Model
{
    use HasFactory;

    protected $table = 'especimen';
    protected $primaryKey = 'id_especimen';
    protected $fillable = [
        'id_cliente',
        'nombre',
        'descripcion',
        'uso',
        'cantidad',
        'marca_modelo',
        'numero_serie',
        'tension_electrica',
        'potencia_electrica',
        'valor_flujo_luminoso',
        'temperatura_color_correlacionada',
        'indice_rendimiento_color',
        'horas_vida',
        'factor_potencia_nominal',
        'material_carcasa',
        'material_reflector',
        'tipo_montaje',
        'tipo_controlador',
        'posicion_luminario_grados',
        'fabricante_luminaria',
        'num_modulos_tarjetas_led',
        'num_leds_por_modulo_tarjetas_led',
        'num_catalogo',
        'dimensiones',
        'fecha_registro',
        'fecha_modificacion',
        'fecha_recepcion',
    ];
    
    // Relación con el cliente
    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'id_cliente');
    }
}
