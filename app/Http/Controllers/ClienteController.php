<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Especimen;

class ClienteController extends Controller
{
    public function guardarCliente(Request $request)
    {
        $cliente = new Cliente();
        $cliente->nombre_responsable = $request->input('nombre_contacto');
        $cliente->razon_social = $request->input('razon_social');
        $cliente->direccion = $request->input('direccion');
        $cliente->rfc = $request->input('rfc');
        $cliente->telefono = $request->input('telefono');
        $cliente->correo_electronico = $request->input('email');
        $cliente->save();

        return redirect('/solicitudServicio')->with('success', 'Cliente guardado correctamente.');
    }

    public function cliente()
    {
        $clientes = Cliente::all();
        return view('EncargadoEnsayos.solicitud_s', ['clientes' => $clientes]);
    }

    public function detalles($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('EncargadoEnsayos.consulta_solicitud', compact('cliente'));
    }

    public function especimen()
    {
        $especimenes = Especimen::all();
        return view('EncargadoEnsayos.especimen_s', ['especimen' => $especimenes]);
    }

    public function detalle($id)
    {
        $especimen = Especimen::findOrFail($id);
        return view('EncargadoEnsayos.consulta_especimen', compact('especimen'));
    }
}
