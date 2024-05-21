<?php

namespace App\Http\Controllers;

use App\Models\especimen_modell;
use App\Models\Solicitud_Modell;
use Illuminate\Http\Request;

class SeguimientoController extends Controller
{
    public function index($id_solicitud = null)
    {
        if ($id_solicitud) {
            $especimen = especimen_modell::with('solicitud')->find($id_solicitud);
            return view('seguimiento.show', compact('especimen'));
        } else {
            $especimenes = especimen_modell::with('solicitud')->get();
            return view('seguimiento', compact('especimenes'));
        }
    }
}