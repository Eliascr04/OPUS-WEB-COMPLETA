<?php
session_start();

$response = ['loggedIn' => false];

if (isset($_SESSION['usuario'])) {
    $response['loggedIn'] = true;
}

echo json_encode($response);
?>