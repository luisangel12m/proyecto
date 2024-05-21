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
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<!-- resources/views/seguimiento.blade.php -->


<div class="container">
    <h1>Lista de clientes</h1>
    
    <table class="table">
    <<button type="button" class="btn btn-success" data-toggle="modal" data-target="#agregarClienteModal">
    Agregar Cliente
</button>

<div class="modal fade" id="agregarClienteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('clientes.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="empresa">Empresa:</label>
                        <input type="text" name="empresa" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="direccion">Dirección:</label>
                        <input type="text" name="direccion" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="telefono">Teléfono:</label>
                        <input type="text" name="telefono" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="correo_electronico">Correo Electrónico:</label>
                        <input type="email" name="correo_electronico" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="rfc">RFC:</label>
                        <input type="text" name="rfc" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="nombre_responsable">Nombre Responsable:</label>
                        <input type="text" name="nombre_responsable" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="contraseña" class="col-form-label">Contraseña:</label>
                        <input type="password" name="contraseña" class="form-control" required>
                    </div>
                </div>
     
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                </div>
            </form>
        </div>
    </div>
</div>

    </button
        <thead>
            <tr>
                <th>Id_Cliente </th>
                <th>Empresa</th>
                <th>Dirección</th>
                <th>Telefono</th>
                <th>correo_electronico</th>
                <th>RFC</th>
                <th>Nombre</th>
                <th>Eliminar</th>
                <th>Editar</th>

           <?php
foreach ($clientes as $usuario) :
?>
<tr>
                <td>{{ $usuario->id_cliente }}</td>
                <td>{{ $usuario->empresa }}</td>
                <td>{{ $usuario->direccion }}</td>
                <td>{{ $usuario->telefono }}</td>
                <td>{{ $usuario->correo_electronico }}</td>
                <td>{{ $usuario->rfc }}</td>
                <td>{{ $usuario->nombre_responsable }}</td>
              <td>
    <form action="{{ route('cliente.destroy', $usuario->id_cliente) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Eliminar</button>
    </form>
</td>
    <td>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editChildresn<?php echo $usuario['id_cliente']; ?>">
            Modificar
        </button>
    </td>
</tr>

        
<!--ventana para Update--->
<div class="modal fade" id="editChildresn<?php echo $usuario['id_cliente']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
           <form action="{{ route('clientes.update', ['cliente' => $usuario->id_cliente]) }}" method="POST">
    @csrf
    @method('PUT')
                <input type="hidden" name="id" value="<?php echo $usuario['id']; ?>">

                <div class="modal-body" id="cont_modal">

                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Empresa:</label>
                        <input type="text" name="nombre_empresa" class="form-control" value="<?php echo $usuario['empresa']; ?>" required="true">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Dirección:</label>
                        <input type="text" name="direccion" class="form-control" value="<?php echo $usuario['direccion']; ?>" required="true">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Telefono:</label>
                        <input type="number" name="telefono" class="form-control" value="<?php echo $usuario['telefono']; ?>" required="true">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Correo electronico:</label>
                        <input type="email" name="correo_electronico" class="form-control" value="<?php echo $usuario['correo_electronico']; ?>" required="true">
                    </div>
            
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">RFC</label>
                        <input type="text" name="rfc" class="form-control" value="<?php echo $usuario['rfc']; ?>" required="true">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Nombre</label>
                        <input type="text" name="nombre" class="form-control" value="<?php echo $usuario['nombre_responsable']; ?>" required="true">
                    </div>
                </div>
                  
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                </div>
            </form>

        </div>
    </div>
</div>
<!---fin ventana Update --->

<?php endforeach; ?>

    </div>
</div>
</div>
<div>
    
<!-- End of Main Content -->
    

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

