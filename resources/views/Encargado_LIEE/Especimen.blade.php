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
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <div class="container">
                    <h1>Lista de Especimenes </h1>
                    <table class="table">
    <thead>
        <tr>
            <th>Id_Especimen</th>
            <th>id_Cliente</th>
            <th>Id_Personal</th>
            <th>Id_Solicitud</th>
            <th>Recepcion</th>
            <th>Estado</th>
            <th>Ver más</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($especimenes as $especimen) : ?>
            <tr>
                <td><?= $especimen['id_especimen']; ?></td>
                <td><?= $especimen['id_cliente']; ?></td>
                <td><?= $especimen['id_personal']; ?></td>
                <td><?= $especimen['id_solicitud']; ?></td>
                <td><?= $especimen['recepcion']; ?></td>
                <td><?= $especimen['estado']; ?></td>                <td>
                 
                <td>
                <a href="{{ route('especimen.show', $especimen->id_especimen) }}" class="btn btn-info">Ver Detalles</a></td>
                </td>
               </tr>   
        <?php endforeach; ?>
    </tbody>
</table>
                

                
                </div>
            </div>
        </div>
    </div>
    <!-- End of Page Wrapper -->

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
