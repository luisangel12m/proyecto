<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LIEE - Login</title>


    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="{{ asset('css/sb-admin-2.min.css') }}">

    <style>
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .content {
            text-align: center;
        }

        .form-container {
            margin-top: 20px; /* Ajusta el espacio entre la imagen y el formulario */
        }
    </style>

</head>

<body class="bg-white">
    

    <div class="container">

        <div class="content">
            <!-- Imagen -->
            <img class="circle-img" src="{{ asset('INAOE template\img\LIEE-03.png') }}" alt="..." style="width: auto; height: auto; margin: 0 auto; display: block;">
            
            <!-- Formulario -->
            <div class="form-container">
                <div class="card o-hidden border-0 shadow-lg">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">¡Bienvenido!</h1>
                                    </div>
                                    <form class="user" method="POST" action="{{ url('/login') }}">
                                        @csrf
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user" name="correo_electronico" id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Correo electrónico..." required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" name="password" id="exampleInputPassword" placeholder="Contraseña..." required>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Iniciar Sesión
                                        </button>
                                    </form>

                                    <hr>
                                    <div class="text-center">
                                         <a class="small" href="{{ url('/loginClientes') }}">No perteneces al LIEE?</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

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
