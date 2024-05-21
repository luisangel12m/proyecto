<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personal;
use Illuminate\Support\Facades\Redirect;
use App\Models\Rol;

class RegistroPersonalController extends Controller
{
    /**
     * Muestra el formulario de registro.
     *
     * @return \Illuminate\View\View
     */
    public function showRegistroForm()
    {
        return view('registroPersonal');
    }

    /**
     * Procesa el formulario de registro y crea un nuevo usuario en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function registro(Request $request)
    {
        // Valida los datos del formulario
        $request->validate([
            'id_rol' => 'required',
            'nombre' => 'required',
            'apellido_paterno' => 'required',
            'apellido_materno' => 'required',
            'correo_electronico' => 'required|email|max:40|unique:personal,correo_electronico',
            'password' => 'required|min:6',
        ]);

        // Crea un nuevo usuario en la base de datos
        $usuario = new Personal();
        $usuario->id_rol = $request->id_rol;
        $usuario->nombre = $request->nombre;
        $usuario->apellido_paterno = $request->apellido_paterno;
        $usuario->apellido_materno = $request->apellido_materno;
        $usuario->correo_electronico = $request->correo_electronico;
        $usuario->password = bcrypt($request->password); // Hash the password using bcrypt
        $usuario->save();

        // Redirige al usuario al formulario de inicio de sesión
        return Redirect::to('/login')->with('success', '¡Registro exitoso! Por favor, inicia sesión.');
    }
    
    public function personal()
    {
        $personales = Personal::all();
        $roles = Rol::all();

        return view('Encargado_LIEE.personal', ['personal' => $personales, 'roles' => $roles]);
    }
    public function editar( Personal $personales)
{
    return redirect()->route('ruta_de_redireccion')->with('success', 'Cliente actualizado correctamente');
}

public function store(Request $request)
{
    // Valida los datos del formulario
    $request->validate([
        'id_rol' => 'required|exists:rol,id_rol',
        'nombre' => 'required|string|max:255',
        'apellido_paterno' => 'required|string|max:255',
        'apellido_materno' => 'required|string|max:255',
        'correo_electronico' => 'required|email|max:40|unique:personal,correo_electronico',
        'password' => 'required|min:6',
    ]);

    // Crea un nuevo usuario en la base de datos
    $usuario = new Personal();
    $usuario->id_rol = $request->id_rol;
    $usuario->nombre = $request->nombre;
    $usuario->apellido_paterno = $request->apellido_paterno;
    $usuario->apellido_materno = $request->apellido_materno;
    $usuario->correo_electronico = $request->correo_electronico;
    $usuario->password = bcrypt($request->password); // Hashear la contraseña usando bcrypt
    $usuario->save();

    // Redirige al usuario al formulario de inicio de sesión
    return redirect()->route('personal')->with('success', 'Cliente actualizado correctamente');
}

public function update(Request $request, Personal  $id_personal)
{
    $id_personal->nombre = $request->input('nombre');
    $id_personal->apellido_paterno = $request->input('paterno');
    $id_personal->apellido_materno = $request->input('materno');
    $id_personal->correo_electronico = $request->input('correo');
    $id_personal->save();

// Guardar los cambios

    return redirect('/personal')->with('success', 'Cliente guardado correctamente.');
}
public function destroy($id_personal)
{
    $personal = Personal::findOrFail($id_personal);
    $personal->delete();
    return redirect()->back()->with('success', 'Cliente eliminado exitosamente');
}

}
