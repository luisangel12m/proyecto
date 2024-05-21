<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LIEEcontroller extends Controller
{
    public function index()
    {
        return view('responsableLIEE');
    }

    public function upload(Request $request)
    {
        // Validar que se haya seleccionado un archivo
        $request->validate([
            'factibilidad_file' => 'required_without_all:cotizacion_file,orden_servicio_file,facturacion_cliente_file|file|mimes:pdf|max:2048',
            'cotizacion_file' => 'required_without_all:factibilidad_file,orden_servicio_file,facturacion_cliente_file|file|mimes:pdf|max:2048',
            'orden_servicio_file' => 'required_without_all:factibilidad_file,cotizacion_file,facturacion_cliente_file|file|mimes:pdf|max:2048',
            'facturacion_cliente_file' => 'required_without_all:factibilidad_file,cotizacion_file,orden_servicio_file|file|mimes:pdf|max:2048',
        ]);

        // Lógica para subir archivos
        if ($request->has('factibilidad_file')) {
            $factibilidadFileName = time() . '_' . $request->file('factibilidad_file')->getClientOriginalName();
            $request->file('factibilidad_file')->storeAs('factibilidad', $factibilidadFileName);
            // Guardar el nombre del archivo en la base de datos u otro almacenamiento
        }

        if ($request->has('cotizacion_file')) {
            $cotizacionFileName = time() . '_' . $request->file('cotizacion_file')->getClientOriginalName();
            $request->file('cotizacion_file')->storeAs('cotizacion', $cotizacionFileName);
            // Guardar el nombre del archivo en la base de datos u otro almacenamiento
        }

        if ($request->has('orden_servicio_file')) {
            $ordenServicioFileName = time() . '_' . $request->file('orden_servicio_file')->getClientOriginalName();
            $request->file('orden_servicio_file')->storeAs('orden_servicio', $ordenServicioFileName);
            // Guardar el nombre del archivo en la base de datos u otro almacenamiento
        }

        if ($request->has('facturacion_cliente_file')) {
            $facturacionClienteFileName = time() . '_' . $request->file('facturacion_cliente_file')->getClientOriginalName();
            $request->file('facturacion_cliente_file')->storeAs('facturacion_cliente', $facturacionClienteFileName);
            // Guardar el nombre del archivo en la base de datos u otro almacenamiento
        }

        // Redireccionar o mostrar un mensaje de éxito
        return redirect()->back()->with('success', 'Archivos subidos exitosamente.');
    }
}
