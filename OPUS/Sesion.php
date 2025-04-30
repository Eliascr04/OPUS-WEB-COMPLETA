<?php
session_start();

// Si el usuario ya está logueado, redirigir a la página principal
if (isset($_SESSION['usuario'])) {
    header("Location: Micuenta.php"); // O a la página que desees
    exit();
}
?>
<html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca Municipal Muskiz</title>
    <link rel="shortcut icon" href="imagen/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="sytles6.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <header class="header">
        <img alt="Logo" src="imagen/logo1.png">
        <nav class="nav">
            <a href="index.php">INICIO</a>
            <a href="libros.php">LIBROS</a>
            <div class="more">
                <a href="#">CONÓCENOS <i class="fas fa-caret-down"></i></a>
                <div class="dropdown">
                    <a href="conocenos.php">Quiénes Somos</a>
                    <a href="servicios.php">Servicios</a>
                </div>
            </div>
            <a class="active" href="Sesion.php">INICIA SESIÓN</a>
            <a href="https://www.muskiz.org/es-ES/Ayuntamiento/Paginas/default.aspx">AYUNTAMIENTO</a>
            <a href="contacto.php">CONTACTO</a>
        </nav>
    </header>
    <main id="auth-forms">
        <!-- Formulario de inicio de sesión -->
        <div class="container" id="login-container">
            <div class="tabs">
                <div class="tab active" id="login-tab">Acceso a tu cuenta</div>
                <div class="tab" id="register-tab">Nuevo usuario</div>
            </div>
            <form method="post" action="login.php">
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <a href="recuperar.php" class="forgot-password">¿Olvidaste la contraseña?</a>
                <button class="btn" type="submit">Entrar</button>
            </form> 
        </div>

        <!-- Formulario de registro -->
        <div class="container" id="register-container" style="display: none;">
            <div class="tabs">
                <div class="tab" id="login-tab-register">Acceso a tu cuenta</div>
                <div class="tab active">Nuevo usuario</div>
            </div>
            <form method="post" action="registro.php" id="register-form" onsubmit="return validarRegistro()">
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input id="name" name="name" type="text" required>
                </div>
                <div class="form-group">
                    <label for="password-reg">Contraseña</label>
                    <input id="password-reg" name="password-reg" type="password" required>
                </div>
                <div class="form-group">
                    <label for="confirm-password">Repetir contraseña</label>
                    <input id="confirm-password" name="confirm-password" type="password" required>
                </div>
                <div class="form-group">
                    <label for="telefono">Teléfono</label>
                    <input id="telefono" name="telefono" type="text" required>
                </div>
                <div class="form-group">
                    <label for="direccion">Dirección</label>
                    <input id="direccion" name="direccion" type="text">
                </div>
                <div class="form-group">
                    <label for="email-reg">E-mail</label>
                    <input id="email-reg" name="email-reg" type="email" required>
                </div>
                <div class="form-group">
                    <label for="num_ss">Número de Seguridad Social</label>
                    <input id="num_ss" name="num_ss" type="text">
                </div>
                <div class="form-group terms">
                    <input id="terms" name="terms" type="checkbox" required>
                    <label for="terms">Acepto las condiciones. Consulte nuestra <a href="#">Política de Privacidad</a>.</label>
                </div>
                <button class="btn" type="submit">Registrarme</button>
            </form>
        </div>
    </main>
    <script>
        // Cambiar entre pestañas de inicio de sesión y registro
        document.getElementById('register-tab').addEventListener('click', () => {
            document.getElementById('login-container').style.display = 'none';
            document.getElementById('register-container').style.display = 'block';
        });

        document.getElementById('login-tab-register').addEventListener('click', () => {
            document.getElementById('login-container').style.display = 'block';
            document.getElementById('register-container').style.display = 'none';
        });  
    </script>
    <script>
        function validarRegistro() {
            const password = document.getElementById('password-reg').value;
            const confirmPassword = document.getElementById('confirm-password').value;
    
            if (password !== confirmPassword) {
                alert('Las contraseñas no coinciden. Por favor, verifica.');
                return false; // Evita que el formulario se envíe
            }
            return true; // Permite enviar el formulario
        }
    </script>
    <br><br><br><br><br>
    <div class="footer">
        <p>
            ©Libreria de Muskiz 2025. Todos los derechos reservados | 94 670 70 75 |
            liburutegia@muskiz.com
        </p>
        <div class="social-icons">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
      </div>

</body>
</html>
</html>