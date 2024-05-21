<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable; // Importa la clase Authenticatable
use Illuminate\Notifications\Notifiable;

class Cliente extends Authenticatable // Extiende de Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'cliente';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_cliente';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false; // Desactiva el seguimiento de las marcas de tiempo

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'direccion',
        'telefono',
        'correo_electronico',
        'razon_social',
        'rfc',
        'nombre_responsable',
        'password', // Agrega el campo 'password' como fillable
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', // Oculta el campo 'password' cuando se convierte a un array
        'remember_token',
    ];

    // Resto de definiciones de modelo...
}