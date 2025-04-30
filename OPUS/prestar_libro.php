<?php
session_start();
include 'conexion.php';

if (!isset($_SESSION['usuario'])) {
    echo json_encode(['success' => false, 'message' => 'Usuario no autenticado']);
    exit();
}

$data = json_decode(file_get_contents('php://input'), true);
$isbn = $data['isbn'];
$cod_usuario = $_SESSION['usuario'];

// Verificar si el usuario ya tiene 3 o más libros prestados
$sqlCount = "SELECT COUNT(*) as total FROM reservas WHERE cod_usuario = ?";
$stmtCount = $conexion->prepare($sqlCount);
$stmtCount->bind_param("i", $cod_usuario);
$stmtCount->execute();
$resultCount = $stmtCount->get_result();
$rowCount = $resultCount->fetch_assoc();
$totalLibrosPrestados = $rowCount['total'];

if ($totalLibrosPrestados >= 3) {
    // Aplicar penalización
    $motivo = "Exceso de libros prestados";
    $fecha_inicio = date('Y-m-d');
    $fecha_fin = date('Y-m-d', strtotime('+7 days')); // Penalización de 7 días

    $sqlPenalizacion = "INSERT INTO penalizaciones (cod_usuario, motivo, fecha_inicio, fecha_fin) VALUES (?, ?, ?, ?)";
    $stmtPenalizacion = $conexion->prepare($sqlPenalizacion);
    $stmtPenalizacion->bind_param("isss", $cod_usuario, $motivo, $fecha_inicio, $fecha_fin);
    $stmtPenalizacion->execute();

    echo json_encode(['success' => false, 'message' => 'Has excedido el límite de libros prestados. Se te ha aplicado una penalización.']);
    exit();
}

// Verificar si el libro ya está reservado por el usuario
$sqlCheck = "SELECT * FROM reservas WHERE isbn = ? AND cod_usuario = ?";
$stmtCheck = $conexion->prepare($sqlCheck);
$stmtCheck->bind_param("si", $isbn, $cod_usuario);
$stmtCheck->execute();
$resultCheck = $stmtCheck->get_result();

if ($resultCheck->num_rows > 0) {
    echo json_encode(['success' => false, 'message' => 'Ya has reservado este libro.']);
    exit();
}

// Insertar la reserva
$sqlInsert = "INSERT INTO reservas (isbn, cod_usuario, fecha_reserva) VALUES (?, ?, NOW())";
$stmtInsert = $conexion->prepare($sqlInsert);
$stmtInsert->bind_param("si", $isbn, $cod_usuario);

if ($stmtInsert->execute()) {
    echo json_encode(['success' => true, 'message' => 'Libro reservado con éxito.']);
} else {
    echo json_encode(['success' => false, 'message' => 'Error al reservar el libro.']);
}
?>