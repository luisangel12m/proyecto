<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Cliente</title>
    <link rel="stylesheet" href="{{ asset('INAOE template/css/registroPersonal.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <div class="container">
        <form id="consultation-form" class="feed-form" action="{{ route('registroCliente') }}" method="POST">
            @csrf
            <input name="nombre_empresa" required="" placeholder="Nombre de la empresa" type="text">
            <input name="direccion" required="" placeholder="Dirección" type="text">
            <input name="telefono" required="" placeholder="Teléfono" type="text">
            <input name="correo_electronico" required="" placeholder="Correo electrónico" type="email">
            <input name="razon_social" required="" placeholder="Razón social" type="text">
            <input name="rfc" required="" placeholder="RFC" type="text">
            <input name="nombre_responsable" required="" placeholder="Nombre del responsable" type="text">
            <div class="password-container">
                <input id="password-input" name="password" required="" placeholder="Contraseña" type="password">
                <button type="button" id="toggle-password" class="toggle-password">
                    <i class="fas fa-eye"></i>
                </button>
            </div>
            <button type="submit" class="button_submit">Confirmar</button>
        </form>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const togglePassword = document.getElementById('toggle-password');
            const passwordInput = document.getElementById('password-input');

            togglePassword.addEventListener('click', function () {
                const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordInput.setAttribute('type', type);
                togglePassword.querySelector('i').classList.toggle('fa-eye-slash');
            });
        });
    </script>
</body>
</html>


