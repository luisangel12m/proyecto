<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Solicitud;
use App\Models\Cliente;



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Solicitud;
use App\Models\Cliente;

class SolicitudController extends Controller
{
    public function solicitud()
    {
        $solicitudes = Solicitud::all();
        return view('Encargado_LIEE.Solicitud', compact('solicitudes'));
    }

    public function show(Solicitud $solicitud)
    {
        return view('solicitud.show', compact('solicitud'));
    }

    public function update(Request $request, Solicitud $id_solicitud)
    {
        $id_solicitud->fecha = $request->input('fecha');
        $id_solicitud->folio = $request->input('folio');
        $id_solicitud->save();

        return redirect('/solicitud')->with('success', 'Solicitud actualizada correctamente.');
    }
    public function seguimiento_solicitud($id_cliente)
    {
        // Encuentra al cliente utilizando el ID
        $cliente = Cliente::find($id_cliente);
    
        // Encuentra la solicitud relacionada con el cliente
        $solicitud = Solicitud::where('id_cliente', $id_cliente)->first();
    
        return view('EncargadoEnsayos.consulta_solicitud', [
            'cliente' => $cliente,
            'solicitud' => $solicitud,
        ]);
    }
}




