<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $clientes = Usuario::all();


    return view('Encargado_LIEE.cliente', ['clientes' => $clientes]);
}

public function create()
{
    return view('clientes.create');
}

public function store(Request $request)
{
    // Validación de los datos del formulario
    $request->validate([
        'empresa' => 'required',
        'direccion' => 'required',
        'telefono' => 'required',
        'correo_electronico' => 'required|email',
        'rfc' => 'required',
        'nombre_responsable' => 'required',
    ]);

    // Crear un nuevo cliente
    $cliente = new Usuario();
    $cliente->empresa = $request->empresa;
    $cliente->direccion = $request->direccion;
    $cliente->telefono = $request->telefono;
    $cliente->correo_electronico = $request->correo_electronico;
    $cliente->rfc = $request->rfc;
    $cliente->nombre_responsable = $request->nombre_responsable;
    $cliente->password = bcrypt($request->contraseña);

    $cliente->save();

    // Redireccionar a la página anterior con un mensaje de éxito
    return redirect()->back()->with('clientes', 'Cliente agregado correctamente');
}

public function show(Usuario $cliente)
{
    return view('clientes.show', compact('cliente'));
}

public function editar( Usuario $cliente)
{
    return redirect()->route('ruta_de_redireccion')->with('success', 'Cliente actualizado correctamente');
}


public function update(Request $request, Usuario $cliente)
{
    $cliente->empresa = $request->input('nombre_empresa');
    $cliente->direccion = $request->input('direccion');
    $cliente->telefono = $request->input('telefono');
    $cliente->correo_electronico = $request->input('correo_electronico');
    $cliente->rfc = $request->input('rfc');
    $cliente->nombre_responsable = $request->input('nombre');
    

    $cliente->save();

    return redirect('/cliente')->with('success', 'Cliente actualizado correctamente.');


}
public function destroy($id)
    {
        $cliente = Usuario::findOrFail($id);
        $cliente->delete();

        return redirect()->back()->with('success', 'Cliente eliminado exitosamente');
    }
}