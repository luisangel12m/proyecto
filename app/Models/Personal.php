<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Personal extends Authenticatable
{
    protected $table = 'personal'; // Asegúrate de que el nombre de la tabla esté correcto
    protected $primaryKey = 'id_personal'; // Especifica la clave primaria
    public $timestamps = false;
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id_rol',
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'correo_electronico',
        'password' 
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    public function personal()
    {
        return $this->belongsTo(Personal::class, 'id_personal', 'id');
    }
}