<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login de Clientes</title>
    <link href="{{ asset('INAOE template/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
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
            width: 600px; /* Ajusta el ancho de la tarjeta */
            margin-top: 20px;
        }

        .circle-img {
            width: 500px; /* Ajusta el tamaño de la imagen */
            height: auto;
            margin-bottom: 20px; /* Añade espacio debajo de la imagen */
        }

        .h4 {
            font-size: 1.5rem; /* Ajusta el tamaño del texto */
            margin-bottom: 1.5rem; /* Añade espacio debajo del texto */
        }
    </style>
</head>
<body class="bg-white">
    <div class="container">
        <div class="content">
            <div class="form-container">
                <div class="card o-hidden border-0 shadow-lg">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <!-- Aquí se incluye la imagen -->
                                        <img class="circle-img" src="{{ asset('INAOE template\img\LIEE-03.png') }}" alt="...">
                                        <h1 class="h4 text-gray-900 mb-4">¡Bienvenido!</h1>
                                    </div>
                                    <form class="user" method="POST" action="{{ route('loginClientes.submit') }}">
                                        @csrf
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user" name="correo_electronico" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Correo electrónico..." required>
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
                                        <a class="small" href="{{ route('registroCliente') }}">Crear una cuenta</a> <!-- Enlace al registro -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>


