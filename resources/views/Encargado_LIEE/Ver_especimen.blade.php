<!DOCTYPE html>
<html lang="es">

    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Servicios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.4.0/dist/css/bootstrap.min.css" rel="stylesheet">  



        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>LIEE - Inicio</title>

        <!-- Custom fonts for this template-->
        <link href="{{ asset('INAOE template\vendor\fontawesome-free\css\all.css') }}" rel="stylesheet" type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

        <!-- Custom styles for this template-->
        <link rel="stylesheet" href="{{ asset('INAOE template/css/sb-admin-2.css') }}">

    </head>

<body id="page-top" >

            

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/principal') }}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">LIEE INAOE <sup>VidaIT</sup></div>
            </a>

        
            
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse2"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Personal Ensayos</span>
                </a>
                <div id="collapse2" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Para personal del LIEE:</h6>
                        <a class="collapse-item" href="{{ url('/especimen_s') }}">Especimen</a>
                        <a class="collapse-item" href="{{ url('/solicitud_s') }}">Solicitud</a>
                        
                    </div>
                </div>
               >
            </li>


           

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->

<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Información del Especimen:</h2>
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>ID</th>
                        <td>{{ $especimen['id_especimen'] }}</td>
                    </tr>
                    <tr>
                        <th>Nombre</th>
                        <td>{{ $especimen['Nombre'] }}</td>
                    </tr>
                    <tr>
                        <th>Descripción</th>
                        <td>{{ $especimen['Descripcion'] }}</td>
                    </tr>
                    <tr>
                        <th>Uso</th>
                        <td>{{ $especimen['Uso'] }}</td>
                    </tr>
                    <tr>
                        <th>Cantidad</th>
                        <td>{{ $especimen['Cantidad'] }}</td>
                    </tr>
                    <tr>
                        <th>Marca y Modelo</th>
                        <td>{{ $especimen['Marca_modelo'] }}</td>
                    </tr>
                    <tr>
                        <th>Número de Serie</th>
                        <td>{{ $especimen['Numero_serie'] }}</td>
                    </tr>
                    <tr>
                        <th>Tensión Eléctrica</th>
                        <td>{{ $especimen['Tension_electrica'] }}</td>
                    </tr>
                    <tr>
                        <th>Potencia Eléctrica</th>
                        <td>{{ $especimen['Potencia_electrica'] }}</td>
                    </tr>
                    <tr>
                        <th>Valor de Flujo Luminoso</th>
                        <td>{{ $especimen['Valor_flujo_luminoso'] }}</td>
                    </tr>
                    <tr>
                        <th>Temperatura de Color Correlacionada</th>
                        <td>{{ $especimen['Temperatura_color_correlacionada'] }}</td>
                    </tr>
                    <tr>
                        <th>Índice de Rendimiento de Color</th>
                        <td>{{ $especimen['Indice_rendimiento_color'] }}</td>
                    </tr>
                    <tr>
                        <th>Horas de Vida</th>
                        <td>{{ $especimen['Horas_vida'] }}</td>
                    </tr>
                    <tr>
                        <th>Factor de Potencia Nominal</th>
                        <td>{{ $especimen['Factor_potencia_nominal'] }}</td>
                    </tr>
                    <tr>
                        <th>Material de la Carcasa</th>
                        <td>{{ $especimen['Material_carcasa'] }}</td>
                    </tr>
                    <tr>
                        <th>Material del Reflector</th>
                        <td>{{ $especimen['Material_reflector'] }}</td>
                    </tr>
                    <tr>
                        <th>Tipo de Montaje</th>
                        <td>{{ $especimen['Tipo_montaje'] }}</td>
                    </tr>
                    <tr>
                        <th>Tipo de Controlador</th>
                        <td>{{ $especimen['Tipo_controlador'] }}</td>
                    </tr>
                    <tr>
                        <th>Posición del Luminario (Grados)</th>
                        <td>{{ $especimen['Posicion_luminario_grados'] }}</td>
                    </tr>
                    <tr>
                        <th>Fabricante de la Luminaria</th>
                        <td>{{ $especimen['Fabricante_luminaria'] }}</td>
                    </tr>
                    <tr>
                        <th>Número de Módulos/Tarjetas LED</th>
                        <td>{{ $especimen['Num_modulos_tarjetas_LED'] }}</td>
                    </tr>
                    <tr>
                        <th>Número de LEDs por Módulo/Tarjeta LED</th>
                        <td>{{ $especimen['Num_LEDs_por_modulo_tarjetas_LED'] }}</td>
                    </tr>
                    <tr>
                        <th>Número de Catalogo</th>
                        <td>{{ $especimen['Num_catalogo'] }}</td>
                    </tr>
                     <tr>
                        <th>Dimenciones</th>
                        <td>{{ $especimen['Dimensiones'] }}</td>
                    </tr>
                     <tr>
                        <th>Fecha de Registro</th>
                        <td>{{ $especimen['Fecha_registro'] }}</td>
                    </tr>
                     <tr>
                        <th>Fecha de Modificacion</th>
                        <td>{{ $especimen['Fecha_modificacion'] }}</td>
                    </tr>
                      <tr>
                        <th>Fecha de Recepcion</th>
                        <td>{{ $especimen['Fecha_recepcion'] }}</td>
                    </tr>
            </div>
        </div>
    </div>
</div>
</div>

</div>

    
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('INAOE template/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('INAOE template/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('INAOE template/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('INAOE template/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('INAOE template/vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('INAOE template/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('INAOE template/js/demo/chart-pie-demo.js') }}"></script>



</body>

</html>