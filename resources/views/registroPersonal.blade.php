<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Personal</title>
    <link rel="stylesheet" href="{{ asset('INAOE template/css/registroPersonal.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <div class="container">
        <form id="consultation-form" class="feed-form" action="#" method="POST">
            @csrf
            <select name="id_rol" required="">
                <option value="">Selecciona su rol</option>
                <option value="1">Responsable del LIEE</option>
                <option value="2">Responsable del SGC</option>
                <option value="3">Responsable de Ensayos</option>
                <option value="4">Técnico</option>
            </select>
            <input name="nombre" required="" placeholder="Nombre(s)" type="text" required>
            <input name="apellido_materno" required="" placeholder="Apellido Materno" type="text" required>
            <input name="apellido_paterno" required="" placeholder="Apellido Paterno" type="text" required>
            <input name="correo_electronico" required="" placeholder="E-mail" type="email" required>
            <div class="password-container">
                <input id="password-input" name="password" required="" placeholder="Contraseña" type="password" required>
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
