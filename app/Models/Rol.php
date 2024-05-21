<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;

    protected $table = 'rol';
    protected $primaryKey = 'id_rol';

    protected $fillable = ['cargo'];

    public function personal()
    {
        return $this->hasMany(Personal::class, 'id_rol', 'id_rol');
    }
}

