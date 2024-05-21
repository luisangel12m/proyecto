<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Documento;

class DocumentoController extends Controller
{
    public function documento()
    {
        $documento = Documento::all();
        return view('Encargado_LIEE.Documento', compact('documento'));

    }
    public function show(Documento $documentos)
    {
        return view('documento.show', compact('documento'));
    }

    public function editar(Documento $documentos)
    {
        return redirect()->route('ruta_de_redireccion')->with('success', 'Cliente actualizado correctamente');
    }

    public function update(Request $request, $id_documento)
    {
        $documento = Documento::find($id_documento);
        $documento->nombre = $request->input('nom');
        $documento->descripcion = $request->input('descri');
        $documento->acceso = $request->input('acc');
        $documento->save();
    
        return redirect('/documento')->with('success', 'Documento actualizado correctamente.');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'desc' => 'required|string',
            'acceso' => 'required|string|max:255',
        ]);

        $documento = new Documento;
        $documento->nombre = $request->nom;
        $documento->descripcion = $request->desc;
        $documento->acceso = $request->acceso;
        $documento->save();

        return redirect()->back()->with('documento', 'Cliente agregado correctamente');
    }
    // Eliminar un documento existente
    public function destroy($id_documento)
    {
        $documento = Documento::findOrFail($id_documento);
        $documento->delete();

        return redirect()->back()->with('success', 'Cliente eliminado exitosamente');
    }
    
}
