<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use Illuminate\Support\Facades\Redirect;

class RegistroClientesController extends Controller
{
    /**
     * Muestra el formulario de registro de clientes.
     *
     * @return \Illuminate\View\View
     */
    public function showRegistroForm()
    {
        return view('registroClientes');
    }

    /**
     * Procesa el formulario de registro y crea un nuevo cliente en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function registro(Request $request)
    {
        // Valida los datos del formulario
        $request->validate([
            'nombre_empresa' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
            'correo_electronico' => 'required|email|max:40|unique:cliente,correo_electronico', // Cambio aquí
            'razon_social' => 'required',
            'rfc' => 'required',
            'nombre_responsable' => 'required',
            'password' => 'required|min:6',
        ]);

        // Crea un nuevo cliente en la base de datos
        $cliente = new Cliente();
        $cliente->empresa = $request->nombre_empresa;
        $cliente->direccion = $request->direccion;
        $cliente->telefono = $request->telefono;
        $cliente->correo_electronico = $request->correo_electronico;
        $cliente->razon_social = $request->razon_social;
        $cliente->rfc = $request->rfc;
        $cliente->nombre_responsable = $request->nombre_responsable;
        $cliente->password = bcrypt($request->password); // Hash the password using bcrypt
        $cliente->save();

        // Redirige al usuario al formulario de inicio de sesión de clientes
        return Redirect::to('/loginClientes')->with('success', '¡Registro exitoso! Por favor, inicia sesión.');
    }
}




