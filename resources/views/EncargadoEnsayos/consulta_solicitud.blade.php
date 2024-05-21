<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.4.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
        <!-- Sidebar -->
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- Main Content -->
                <div class="container mt-5">
                    <h1 class="mb-4 text-center">Detalles del Cliente</h1>
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">Información del Cliente:</h2>
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th style="width: 30%;">Nombre:</th>
                                        <td style="width: 70%;">{{ $cliente->nombre_responsable }}</td>
                                    </tr>
                                    <tr>
                                        <th>Email:</th>
                                        <td>{{ $cliente->correo_electronico }}</td>
                                    </tr>
                                    <tr>
                                        <th>Teléfono:</th>
                                        <td>{{ $cliente->telefono }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    @isset($solicitud)
                    <div class="card mt-4">
                        <div class="card-body">
                            <h2 class="card-title">Última Solicitud:</h2>
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th style="width: 30%;">Fecha de Solicitud:</th>
                                        <td style="width: 70%;">{{ $solicitud->fecha }}</td>
                                    </tr>
                                    <tr>
                                        <th>Folio:</th>
                                        <td>{{ $solicitud->folio }}</td>
                                    </tr>
                                    <tr>
                                        <th>Documento de Solicitud:</th>
                                        <td>
                                            @if (file_exists(public_path($solicitud->ruta_documento)))
                                                <a href="{{ asset($solicitud->ruta_documento) }}" class="btn btn-primary">Descargar PDF</a>
                                            @else
                                                Documento no disponible
                                            @endif
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card mt-4">
                        <div class="card-body">
                            <h2 class="card-title text-center">Evaluación de la Última Solicitud:</h2>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center">Estado</th>
                                        <th class="text-center">Comentarios</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">
                                            <select name="estado" class="form-select">
                                                <option value="aprobado">Aprobar</option>
                                                <option value="rechazado">Rechazar</option>
                                            </select>
                                        </td>
                                        <td class="text-center">
                                            <textarea name="comentarios" class="form-control" rows="3"></textarea>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="text-center mt-4">
                                <button type="button" class="btn btn-primary">Enviar Evaluación</button>
                            </div>
                        </div>
                    </div>
                    @endisset
                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="text-center">
                            <span class="text-muted">Todos los derechos reservados INAOE</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->
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
</body>

</html>
