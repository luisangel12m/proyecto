<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginClientesController extends Controller
{
    public function showLoginForm()
    {
        return view('loginClientes');
    }

    public function login(Request $request)
{
    $credentials = $request->only('correo_electronico', 'password');

    if (Auth::guard('cliente')->attempt($credentials)) {
        // Autenticación exitosa, almacenar los datos del cliente en la sesión
        $cliente = Auth::guard('cliente')->user();
        $request->session()->put('cliente', $cliente);

        // Redirigir al usuario a la página de solicitud de servicio
        return redirect()->route('solicitudServicio');
    }

    // Autenticación fallida, redirigir al formulario de inicio de sesión con un mensaje de error
    return back()->withErrors(['message' => 'Correo electrónico o contraseña incorrectos.']);
}
}
