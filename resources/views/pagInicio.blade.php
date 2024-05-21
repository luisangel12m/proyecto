<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>LIEE - Inicio</title>
    <link href="{{ asset('css/pagInicio.css') }}" rel="stylesheet">
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ url('/registroCliente') }}">Registrarse</a></li>
            <li><a href="{{ url('/loginClientes') }}">Iniciar Sesión</a></li>
            <li><a href="{{ url('/login') }}">Personal LIEE</a></li>
        </ul>
    </nav>
    <br><br><br>
    <div class="card-container">
        <!-- Primera fila de tarjetas -->
        <div class="row">
            <div class="card">
                <img src="{{ asset('img/esfera-dibujo.png') }}" alt="Descripción de la imagen">
                <div class="card-title">Esfera Integradora</div>
                <div class="card-desc">Esfera hueca de alta reflexión de 3m de diámetro que permite medir la potencia luminosa de una fuente de luz artificial así como otras características radiométricas y de eficiencia energética, tales como TCC, IRC, eficacia, FP y distorsión armónica.</div>
                <a target="_blank" rel="nofollow" href="https://www.inaoep.mx/~liee/files/esfera.pdf">Más información</a>
            </div>
            <div class="card">
                <img src="{{ asset('img/choque-termico-dibujo.png') }}" alt="Descripción de la imagen">
                <div class="card-title">Choque térmico</div>
                <div class="card-desc">Es un equipo para ensayos de envejecimiento acelerado, consta de dos cámaras térmicas entre las cuales se desplaza automáticamente una canastilla que transporta objetos bajo prueba para someterlas a choque térmico de entre -10 °C y 50 °C. Permite configurar diferentes ciclos y tiempos de exposición.</div>
                <a target="_blank" rel="nofollow" href="https://www.inaoep.mx/~liee/files/choque_termico.pdf">Más información</a>
            </div>
            <div class="card">
                <img src="{{ asset('img\fotogoniometro-dibujo.png') }}" alt="Descripción de la imagen">
                <div class="card-title">Fotogoniómetro</div>
                <div class="card-desc">Fotómetro de celda móvil automatizado cuya función es determinar el comportamiento espacial de intensidades luminosas de una fuente de luz artificial. Está constituido por un brazo móvil de 6m con doble sensor de iluminancia y un soporte móvil para especímenes.</div>
                <a target="_blank" rel="nofollow" href="https://www.inaoep.mx/~liee/files/fotogoniometro.pdf">Más información</a>
            </div>
        </div>
        <br><br><br><br><br><br>
        <!-- Segunda fila de tarjetas -->
        <div class="row">
            <div class="card">
                <img src="{{ asset('img\sobretensiones-dibujo.png') }}" alt="Descripción de la imagen">
                <div class="card-title">Sobretensiones Transitorias</div>
                <div class="card-desc">Banco de pruebas que permite aplicar a lámparas, componentes eléctricos y electrónicos sobretensiones transitorias amortiguadas de 0.5µs a una frecuencia de 100kHz y sobretensiones de impulso por rayo de hasta 6kV a 3kA con onda combinada de 1.2/50 µs, lo anterior evalúa su confiabilidad ante fallos en la red eléctrica.</div>
                <a target="_blank" rel="nofollow" href="https://www.inaoep.mx/~liee/files/sobretensiones.pdf">Más información</a>
            </div>
            <div class="card">
                <img src="{{ asset('img\conmutacion-dibujo.png') }}" alt="Descripción de la imagen">
                <div class="card-title">Ciclo de Conmutación</div>
                <div class="card-desc">Sistema electrónico automatizado con control por computadora que tiene por objetivo ejecutar ensayos de envejecimiento acelerado a lámparas y luminarios, a través de ciclos automatizados de encendido y apagado, monitoreando su corriente de carga para verificar su condición de funcionamiento.</div>
                <a target="_blank" rel="nofollow" href="https://www.inaoep.mx/~liee/files/conmutacion.pdf">Más información</a>
            </div>
            <div class="card">
                <img src="{{ asset('img\salud-dibujo.png') }}" alt="Descripción de la imagen">
                <div class="card-title">Salud Visual</div>
                <div class="card-desc">Objetivo del servicio: Realizar el estudio y evaluación de las condiciones de iluminación en el centro de trabajo para identificar áreas de oportunidad en la mejora del desempeño visual, evitando riesgos y demostrando cumplimiento de la norma NOM-025-STPS.</div>
                <a target="_blank" rel="nofollow" href="https://www.inaoep.mx/~liee/files/Doc025stps.pdf">Más información</a>
            </div>
        </div>
        <br><br><br><br>
        <!-- Botón TIP con tooltip -->
        <button class="tip-button">
            Tip
            <span class="tooltip-text">Recuerda registrarte para solicitar servicios</span>
        </button>
    </div>

</body>
</html>
