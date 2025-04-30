<?php
include 'conexion.php';
error_reporting(E_ALL); // Reportar todos los errores
ini_set('display_errors', 1); // Mostrar los errores en pantalla
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre_usuario = $_POST['name'];
    $contrasena = $_POST['password-reg']; // Almacena la contraseña en texto plano
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $correo_elec = $_POST['email-reg'];
    $num_ss = $_POST['num_ss'];
    
    $stmt = $conexion->prepare("INSERT INTO usuarios (NOMBRE_USUARIO, CONTRASENA, TELEFONO, DIRECCION, CORREO_ELEC, NUM_SS) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssisss", $nombre_usuario, $contrasena, $telefono, $direccion, $correo_elec, $num_ss);

    if ($stmt->execute()) {
        // Mostrar ventana emergente con JavaScript
        echo "<script>
                alert('Registro guardado exitosamente. Inicia sesión con tu nueva cuenta.');
                window.location.href = 'Sesion.php'; // Redirigir a Sesion.html
              </script>";
        exit();
    } else {
        echo "Error al registrar el usuario: " . $stmt->error;
    }
} else {
    echo "Método de solicitud no válido.";
}
?>