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
        <div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<!-- resources/views/seguimiento.blade.php -->


<div class="container">
    <h1>Lis de clientes </h1>
    <table class="table">
        <thead>
            <tr>
                <th>Id_Cliente </th>
                <th>Empresa</th>
                <th>Dirección</th>
                <th>Telefono</th>
                <th>correo_electronico</th>
                <th>Nombre</th>
                <th>Segumiento</th>
            </tr>
            <?php
            foreach ($clientes as $cliente) :
            ?>
            <tr>
                                <td><?= $cliente['id_cliente']; ?></td>
                                <td><?= $cliente['empresa']; ?></td>
                                <td><?= $cliente['direccion']; ?></td>
                                <td><?= $cliente['telefono']; ?></td>
                                <td><?= $cliente['correo_electronico']; ?></td>
                                <td><?= $cliente['nombre_responsable']; ?></td>
<td><a href="{{ route('solicitud.consulta', $cliente->id_cliente) }}" class="btn btn-info">Ver Detalles</a></td>
                                </tr>
                            <?php endforeach; ?>
            
        </thead>
    </table>
</div>
</div>
</div>

    
<!-- End of Main Content -->
    
<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="text-center">
            <span class="text-muted">Todos los derechos reservados INAOE</span>
        </div>
    </div>
</footer>    <!-- End of Footer -->

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