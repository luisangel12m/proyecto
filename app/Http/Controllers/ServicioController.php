<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicio;
use App\Models\Usuario;
use App\Models\Personal;

class ServicioController extends Controller
{
    public function servicio()
    {
        $servicio = Servicio::all();
        return view('Encargado_LIEE.Servicio', compact('servicio'));

    }
    public function show(Servicio $servicio)
    {
        return view('servicios.show', compact('servicio'));
    }

    public function editar(Servicio $cliente)
    {
        return redirect()->route('ruta_de_redireccion')->with('success', 'Cliente actualizado correctamente');
    }

    public function update(Request $request, Servicio $id_servicio)
    {
        $id_servicio->inicio = $request->input('ini');
        $id_servicio->estatus = $request->input('estatu');
        $id_servicio->fin = $request->input('fin');
        $id_servicio->save();

        return redirect('/servicio')->with('success', 'Cliente actualizado correctamente.');
    }
   
    public function destroy($id_servicio)
{
    // Obtener el servicio a eliminar
    $servicio = Servicio::find($id_servicio);

    if ($servicio) {
        // Eliminar las relaciones primero
        $servicio->cliente()->detach(); // Eliminar la relación con cliente
        $servicio->especimen()->detach(); // Eliminar la rel ación con especimen
        $servicio->solicitud()->delete(); // Eliminar la relación con solicitud

        // Luego eliminar el servicio
        $servicio->delete();

        return redirect()->route('ruta_de_redireccion')->with('success', 'Servicio eliminado correctamente');
    }

    return redirect()->route('ruta_de_redireccion')->with('error', 'No se encontró el servicio');
}
}
