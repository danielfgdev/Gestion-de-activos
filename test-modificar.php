<?php
include 'crud_operations.php';

// ID del recurso a modificar
$id = 9; // ID del recurso a modificar

// Datos para actualizar el recurso (ajusta según lo que acepte tu API)
$data = [
    'name' => 'Activo Actualizado',
    'estado' => 'B'
];

// Realiza una solicitud POST para actualizar el recurso
$endpoint = 'EQU_ED/' . $id; // Combinamos el endpoint con el ID

$result = apiPost($endpoint, $data); // Usamos el ID de lo que quieres modificar

// Mostrar el código de respuesta HTTP y la respuesta completa
echo "HTTP Code: " . $result['httpCode'] . "\n";
echo "Response: ";
print_r($result['response']);
?>

<!-- Modificar datos funciona  -->