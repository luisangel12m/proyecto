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
    <link href="{{ asset('INAOE template/vendor/fontawesome-free/css/all.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="{{ asset('INAOE template/css/sb-admin-2.css') }}">
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
       <!-- Contenido - Inicio -->
        <!-- Menú -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/principal') }}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">LIEE INAOE <sup>VidaIT</sup></div>
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('/principal') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Inicio</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">
                Extras
            </div>
            <!-- SUBMENÚ EXTRAS -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages1" aria-expanded="true" aria-controls="collapsePages1">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Personal LIEE</span>
                </a>
                <div id="collapsePages1" class="collapse" aria-labelledby="headingPages1" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Para personal del LIEE:</h6>
                        <a class="collapse-item" href="{{ url('/login') }}">Inicio de Sesión</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages2" aria-expanded="true" aria-controls="collapsePages2">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Usuarios</span>
                </a>
                <div id="collapsePages2" class="collapse" aria-labelledby="headingPages2" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Para personal del LIEE:</h6>
                        <a class="collapse-item" href="{{ url('/cliente') }}">Cliente</a>
                        <a class="collapse-item" href="{{ url('/personal') }}">Personal</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages3" aria-expanded="true" aria-controls="collapsePages3">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Documentos</span>
                </a>
                <div id="collapsePages3" class="collapse" aria-labelledby="headingPages3" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Para personal del LIEE:</h6>
                        <a class="collapse-item" href="{{ url('/especimen') }}">Especimen</a>
                        <a class="collapse-item" href="{{ url('/solicitud') }}">Solicitud</a>
                        <a class="collapse-item" href="{{ url('/servicio') }}">Servicio</a>
                        <a class="collapse-item" href="{{ url('/documento') }}">Documento</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Personal Ensayos</span>
                </a>
                <div id="collapse2" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Para personal del LIEE:</h6>
                        <a class="collapse-item" href="{{ url('/solicitud_s') }}">Solicitud</a>
                    </div>
                </div>
            </li>
            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/responsableLIEE') }}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Responsable LIEE</span></a>
            </li>
            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/encuesta') }}">
                    <i class="fas fa-smile"></i>
                    <span>Encuesta de Satisfacción</span></a>
            </li>
            

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- Fin del menú -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <!-- Contenido - Inicio -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
            <div class="container">              
                <h1>Análisis de Factibilidad</h1>
                <form action="{{ route('upload') }}" method="post" enctype="multipart/form-data">

                    <!-- Factible -->
                    <div class="form-group">
                        <div class="checkbox-wrapper-46">
                            <input type="checkbox" id="cbx-46" class="inp-cbx" name="factible">
                            <label for="cbx-46" class="cbx">
                                <span>
                                    <svg viewBox="0 0 12 10" height="10px" width="12px">
                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                    </svg>
                                </span>
                                <span>Factible</span>
                            </label>
                        </div>
                        <br><br>
                        <div class="factible-options" style="display: none;">
                            Documento de Factibilidad:
                            <br>
                            <input type="file" name="factibilidad_file" accept=".pdf">
                            <br><br>
                            <button type="submit"><span>Aceptar</span></button>
                        </div>
                    </div>
                    <br>
                    <!-- Cotización -->
                    <div class="form-group">
                        <div class="checkbox-wrapper-46">
                            <input type="checkbox" id="cbx-47" class="inp-cbx" name="cotizacion">
                            <label for="cbx-47" class="cbx">
                                <span>
                                    <svg viewBox="0 0 12 10" height="10px" width="12px">
                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                    </svg>
                                </span>
                                <span>Cotización</span>
                            </label>
                        </div>
                        <br><br>
                        <div class="cotizacion-options" style="display: none;">
                            Documento de cotización:
                            <br>
                            <input type="file" name="cotizacion_file" accept=".pdf">
                            <br><br>
                            <button type="submit"><span>Aceptar</span></button>
                        </div>
                    </div>
                    <br>
                    <!-- Aceptación del cliente -->
                    <div class="form-group">
                        <div class="checkbox-wrapper-46">
                            <input type="checkbox" id="cbx-48" class="inp-cbx" name="servicio">
                            <label for="cbx-48" class="cbx">
                                <span>
                                    <svg viewBox="0 0 12 10" height="10px" width="12px">
                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                    </svg>
                                </span>
                                <span>Aceptación del cliente</span>
                            </label>
                        </div>
                        <br><br>
                        <div class="servicio-options" style="display: none;">
                            Documento del servicio:
                            <br>
                            <input type="file" name="servicio_file" accept=".pdf">
                            <br><br>
                            <button type="submit"><span>Aceptar</span></button>
                        </div>
                    </div>
                    <br>
                    <!-- Notificar al personal -->
                    <div class="form-group">
                        <div class="checkbox-wrapper-46">
                            <input type="checkbox" id="cbx-49" class="inp-cbx" name="notificar_personal">
                            <label for="cbx-49" class="cbx">
                                <span>
                                    <svg viewBox="0 0 12 10" height="10px" width="12px">
                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                    </svg>
                                </span>
                                <span>Notificar al personal</span>
                            </label>
                        </div>
                    </div>
                    <br>
                    <!-- Subir Facturación del Cliente -->
                    <div class="form-group">
                        Subir Facturación del Cliente:
                        <input type="file" name="facturacion_cliente_file" accept=".pdf">
                        <button type="submit">Subir Factura</button>
                    </div>

                </form>
                
                <!-- Cerrar Sesión -->
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Cerrar Sesión</a>
                    </li>
                </ul>

                <!-- Agregar Usuario -->
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/registroPersonal') }}">Agregar Usuario</a>
                    </li>
                </ul>                
            </div>
                <!-- End of Main Content -->
                
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- Final - Contenido -->

    <script>
        // JavaScript para mostrar/ocultar opciones al hacer clic en los checkboxes
        document.querySelectorAll('input[type="checkbox"]').forEach(function(checkbox) {
            checkbox.addEventListener('change', function() {
                var option = this.parentNode.parentNode.querySelector('.' + this.name + '-options');
                if (this.checked) {
                    option.style.display = 'block';
                } else {
                    option.style.display = 'none';
                }
            });
        });
    </script>
           

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