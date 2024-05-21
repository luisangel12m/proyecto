<?php

namespace App\Http\Controllers;

use App\Models\Especimen;
use Illuminate\Http\Request;

class EspecimenController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->only([
            'id_cliente',
            'nombre',
            'descripcion',
            'uso',
            'cantidad',
            'marca_modelo',
            'numero_serie',
            'tension_electrica',
            'potencia_electrica',
            'valor_flujo_luminoso',
            'temperatura_color_correlacionada',
            'indice_rendimiento_color',
            'horas_vida',
            'factor_potencia_nominal',
            'material_carcasa',
            'material_reflector',
            'tipo_montaje',
            'tipo_controlador',
            'posicion_luminario_grados',
            'fabricante_luminaria',
            'num_modulos_tarjetas_led',
            'num_leds_por_modulo_tarjetas_led',
            'num_catalogo',
            'dimensiones'
        ]);
        
        Especimen::create($data);

        return redirect()->route('solicitudServicio'); // Asegúrate de cambiar esta ruta por la que necesites.
    }
    
    public function especimen()
    {
        $especimenes = Especimen::all();
        return view('EncargadoEnsayos.especimen_s', ['especimenes' => $especimenes]);
    }

    public function especimen2()
    {
        $especimenes = Especimen::all();
        return view('Encargado_LIEE.Especimen', ['especimenes' => $especimenes]);
    }
    public function show($id_especimen)
{
    $especimen = Especimen::findOrFail($id_especimen);
    return view('Encargado_LIEE.Ver_especimen', ['especimen' => $especimen]);
}
    
    

    /**
     * Show the form for creating a new resource.
     */ 
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function ff(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
   

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Especimen $especimen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Especimen $especimen)
    {
        $especimen->nombre = $request->input('nom');
        $especimen->recepcion = $request->input('recep');
        $especimen->cantidad = $request->input('cant');
        $especimen->estado = $request->input('esta');
        $especimen->save();

        return redirect('/especimen')->with('success', 'Cliente actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Especimen $especimen)
    {
        //
    }
}

