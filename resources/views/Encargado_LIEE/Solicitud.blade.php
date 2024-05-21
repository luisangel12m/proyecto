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
        </ul>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Solicitudes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.4.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Lista de Solicitudes</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Id_Solicitud</th>
                    <th>Cliente</th>
                    <th>Id_Personal
                    <th>Fecha</th>
                    <th>Folio</th>
                    <th>Eliminar</th>
                    <th>Modificar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($solicitudes as $solicitud)
                <tr>
                    <td>{{ $solicitud->id_solicitud }}</td>
                    <td>{{ $solicitud->id_cliente }}</td>
                    <td>{{ $solicitud->id_personal }}</td>
                    <td>{{ $solicitud->fecha }}</td>
                    <td>{{ $solicitud->folio }}</td>
                    <td>
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                    </td>
                    <td>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal{{ $solicitud->id }}">
                            Modificar
                        </button>
                    </td>
                </tr>
                <!-- Modal de edición -->
                <div class="modal fade" id="editModal{{ $solicitud->id }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel{{ $solicitud->id_solicitud }}" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editModalLabel{{ $solicitud->id_solicitud }}">Modificar Solicitud</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
<form action="{{ route('solicitud.update', ['id_solicitud' => $solicitud->id_solicitud]) }}" method="POST">                                        @csrf
                                    @csrf
                                    @method('PUT')
                   <div class="modal-body">
                                            <div class="form-group">
                                                <label for="nombre">Fecha:</label>
                                                <input type="text" name="fecha" class="form-control" value="{{ $solicitud->fecha }}" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="descripcion">Folio:</label>
                                                <input type="text" name="folio" class="form-control" value="{{ $solicitud->folio}}" required>
                                            </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </tbody>
        </table>
    </div>
        </div>
    </div>
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <script src="{{ asset('INAOE template/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('INAOE template/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('INAOE template/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('INAOE template/js/sb-admin-2.min.js') }}"></script>
    <script src="{{ asset('INAOE template/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('INAOE template/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('INAOE template/js/demo/chart-pie-demo.js') }}"></script>
</body>
</html>
