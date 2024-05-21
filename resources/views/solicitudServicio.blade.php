<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitar Servicio - Cliente</title>
    <link href="{{ asset('css/solicitud.css') }}" rel="stylesheet">
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ url('/solicitudServicio') }}">Solicitar Servicio</a></li>
            <li><a href="{{ url('/seguimiento') }}">Seguimiento</a></li>
            <li><a target="_blank" rel="nofollow" href="https://docs.google.com/forms/d/1knqOgt9EeIGC6GT7ek1khtDChg97f317sU_HQZ6I3gQ/edit?ts=65ca88b5">Encuesta</a></li>
        </ul>
    </nav>
    <!-- DATOS DEL CLIENTE (agarrar el if para ensayos y cliente) -->    
    <h2>Datos del Cliente</h2>
    <div class="container">
        <h1>Información del Cliente</h1>
        @if(session('cliente'))
            <?php $cliente = session('cliente'); ?>
            <table class="table">
                <tbody>
                    @foreach($cliente->getAttributes() as $key => $value)
                        <tr>
                            <td>{{ ucwords(str_replace('_', ' ', $key)) }}:</td>
                            <td>{{ $value }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No se encontraron datos del cliente.</p>
        @endif
    </div>

    <!-- TABLA ENSAYOS -->
    <h2>Ensayos</h2>
    <table>
        <tr>
        <th>Tipo</th>
        <th>Código</th>
        <th>NOM 030 ENER 2016</th>
        <th>Tipo</th>
        <th>Código</th>
        <th>NOM 031 ENER 2019</th>
        </tr>
        <tbody>
            <tr>
                <td>A</td>
                <td>030/7.1</td>
                <td>Eficacia luminosa</td>
                <td>A*</td>
                <td>031/8.1</td>
                <td>Eficacia luminosa</td>
            </tr>
            <tr>
                <td>A</td>
                <td>030/7.2</td>
                <td>Variación del flujo luminoso total nominal</td>
                <td>A*</td>
                <td>031/8.2</td>
                <td>Variación de flujo luminoso nominal</td>
            </tr>
            <tr>
                <td>A</td>
                <td>030/7.3</td>
                <td>Temperatura de color correlacionada (TCC)</td>
                <td>A</td>
                <td>031/8.3</td>
                <td>Temperatura de color correlacionada (TCC)</td>
            </tr>
            <tr>
                <td>A</td>
                <td>030/7.4</td>
                <td>Flujo luminoso total</td>
                <td>A</td>
                <td>031/8.4</td>
                <td>Flujo luminoso total mantenido</td>
            </tr>
            <tr>
                <td>A</td>
                <td>030/7.5</td>
                <td>Índice de rendimiento de color (IRC)</td>
                <td>A</td>
                <td>031/8.5</td>
                <td>Índice de rendimiento de color (IRC)</td>
            </tr>
            <tr>
                <td>A</td>
                <td>030/7.6</td>
                <td>Factor de potencia (PU)</td>
                <td>A*</td>
                <td>031/8.6</td>
                <td>Factor de potencia (PU)</td>
            </tr>
            <tr>
                <td>A</td>
                <td>030/7.7</td>
                <td>Distribución espacial de luz</td>
                <td>A</td>
                <td>031/8.7</td>
                <td>Distorsión armónica total en corriente</td>
            </tr>
            <tr>
                <td>A</td>
                <td>030/7.8</td>
                <td>Ciclo de choque térmico</td>
                <td>A</td>
                <td>031/8.8</td>
                <td>Flujo luminoso de deslumbramiento</td>
            </tr>
            <tr>
                <td>A</td>
                <td>030/7.9</td>
                <td>Ciclo de conmutación</td>
                <td>A</td>
                <td>031/8.9</td>
                <td>Resistencia al choque térmico a la conmutación</td>
            </tr>
            <tr>
                <td>A</td>
                <td>030/7.10</td>
                <td>Sobretensiones transitorias</td>
                <td>A</td>
                <td>031/8.10</td>
                <td>Resistencia a las descargas atmosféricas</td>
            </tr>
            <tr>
                <td>A</td>
                <td>030/7.11</td>
                <td>Distorsión armónica total</td>
            </tr>
        </tbody>
    </table>
    <p style="margin-top: 20px;">
    <strong>A </strong>- Ensayo Acreditado. Laboratorio de Ensayo acreditado por ema, a.c. con acreditación No. EE-1242-051/20, No. de acreditación CONUEE: DG. E00.203.2022<br>
    <strong>A* - </strong>Acreditado conforme a NOM-031-ENER-2012 <strong>S/A </strong>- Ensayo no Acreditado
    </p> 


    <!-- TABLA ESPECIMEN -->
    <form class="user" method="POST" action="{{ route('especimen.store') }}">
        <h2>Datos del Especimen</h2>
        @csrf
        <input type="hidden" name="id_cliente" value="{{ $cliente->id_cliente }}">
        <table>
            <tbody>
                <tr>
                    <th>Nombre</th>
                    <td><input type="text" name="nombre" style="width: 100%;" placeholder="Ingresar texto"></td>
                </tr>
                <tr>
                    <th>Descripción</th>
                    <td>
                        <select name="descripcion" style="width: 100%;">
                            <option value="Lámpara">Lámpara</option>
                            <option value="Luminario">Luminario</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>Uso</th>
                    <td>
                        <select name="uso" style="width: 100%;">
                            <option value="Exterior">Exterior</option>
                            <option value="Interior">Interior</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>Cantidad</th>
                    <td><input type="number" name="cantidad" style="width: 100%;" placeholder="Ingresar número(s)"></td>
                </tr>
                <tr>
                    <th>Marca y modelo</th>
                    <td><input type="text" name="marca_modelo" style="width: 100%;" placeholder="Ingresar texto"></td>
                </tr>
                <tr>
                    <th>Número de serie</th>
                    <td><input type="text" name="numero_serie" style="width: 100%;" placeholder="Ingresar texto"></td>
                </tr>
                <tr>
                    <th>Tensión eléctrica (V)</th>
                    <td><input type="number" name="tension_electrica" style="width: 100%;" placeholder="Ingresar número(s)"></td>
                </tr>
                <tr>
                    <th>Potencia eléctrica (W)</th>
                    <td><input type="number" name="potencia_electrica" style="width: 100%;" placeholder="Ingresar número(s)"></td>
                </tr>
                <tr>
                    <th>Valor de flujo luminoso (lm)</th>
                    <td><input type="number" name="valor_flujo_luminoso" style="width: 100%;" placeholder="Ingresar número(s)"></td>
                </tr>
                <tr>
                    <th>Temperatura de color (K)</th>
                    <td><input type="number" name="temperatura_color_correlacionada" style="width: 100%;" placeholder="Ingresar número(s)"></td>
                </tr>
                <tr>
                    <th>Índice de rendimiento de color</th>
                    <td><input type="number" name="indice_rendimiento_color" style="width: 100%;" placeholder="Ingresar número(s)"></td>
                </tr>
                <tr>
                    <th>Horas de vida útil (h)</th>
                    <td><input type="number" name="horas_vida" style="width: 100%;" placeholder="Ingresar número(s)"></td>
                </tr>
                <tr>
                    <th>Factor de potencia nominal</th>
                    <td><input type="number" name="factor_potencia_nominal" style="width: 100%;" placeholder="Ingresar número(s)"></td>
                </tr>
                <tr>
                    <th>Material de la carcasa</th>
                    <td><input type="text" name="material_carcasa" style="width: 100%;" placeholder="Ingresar texto"></td>
                </tr>
                <tr>
                    <th>Material del reflector</th>
                    <td><input type="text" name="material_reflector" style="width: 100%;" placeholder="Ingresar texto"></td>
                </tr>
                <tr>
                    <th>Tipo de montaje</th>
                    <td><input type="text" name="tipo_montaje" style="width: 100%;" placeholder="Ingresar texto"></td>
                </tr>
                <tr>
                    <th>Tipo de controlador (drive)</th>
                    <td>
                        <select name="tipo_controlador" style="width: 100%;">
                            <option value="Integrada al módulo de led">Integrada al módulo de led</option>
                            <option value="Separado del módulo de led">Separado del módulo de led</option>
                            <option value="Fuera del luminario">Fuera del luminario</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>Posición del luminario (grados)</th>
                    <td><input type="number" name="posicion_luminario_grados" style="width: 100%;" placeholder="Ingresar número(s)"></td>
                </tr>
                <tr>
                    <th>Fabricante de la luminaria</th>
                    <td><input type="text" name="fabricante_luminaria" style="width: 100%;" placeholder="Ingresar texto"></td>
                </tr>
                <tr>
                    <th>Número de módulos de tarjetas LED</th>
                    <td><input type="number" name="num_modulos_tarjetas_led" style="width: 100%;" placeholder="Ingresar número(s)"></td>
                </tr>
                <tr>
                    <th>Número de LEDs por módulo</th>
                    <td><input type="number" name="num_leds_por_modulo_tarjetas_led" style="width: 100%;" placeholder="Ingresar número(s)"></td>
                </tr>
                <tr>
                    <th>Número de catálogo del luminario y/o lámpara</th>
                    <td><input type="number" name="num_catalogo" style="width: 100%;" placeholder="Ingresar número(s)"></td>
                </tr>
                <tr>
                    <th>Dimensiones (largo x ancho x alto)</th>
                    <td><input type="text" name="dimensiones" style="width: 100%;" placeholder="Ingresar número(s)"></td>
                </tr>
            </tbody>
        </table>
        <button type="submit" class="btn btn-primary">Realizar Solicitud</button>
    </form>


</body>
</html>
