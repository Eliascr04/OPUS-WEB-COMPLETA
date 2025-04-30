<?php
session_start(); // Iniciar la sesión

include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM usuarios WHERE CORREO_ELEC = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        if ($password === $user['CONTRASENA']) { // Comparación directa (no recomendado)
            $_SESSION['usuario'] = $user['COD_USUARIO'];
            $_SESSION['nombre_usuario'] = $user['NOMBRE_USUARIO'];
            setcookie('usuario', $user['COD_USUARIO'], time() + (86400 * 7), "/");
            header("Location: Micuenta.php");
            exit();
        } else {
            echo "Contraseña incorrecta.";
        }
    } else {
        echo "Usuario no encontrado.";
    }

    $stmt->close();
    $conexion->close();
} else {
    header("Location: index.php");
    exit();
}
?>